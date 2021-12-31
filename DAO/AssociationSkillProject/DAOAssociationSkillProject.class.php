<?php

class DAOAssociationSkillProject extends DAO implements IDAO
{

    public function create(object $obj): bool
    {
        try{
            # $this->connect();
            $query = "INSERT INTO associationSkillProject VALUES(:idSkill,:idProject)";
            $data = array(
                'id'=>$obj->getIdSkill(),
                'name'=>$obj->getIdProject(),
            );
            $sth = DAO::$db->prepare( $query );
            $result = $sth->execute( $data );
            #$sth= null;
            return $result;
        }catch (PDOException $e){
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }    }

    public function read(int $id): ?object
    {
        try{
            $query = "SELECT * FROM associationSkillProject
                      WHERE idSkill=:idSkill" /* AND idProject=:idProject */;
            $data = array(
                ":idSkill" => $id
            );
            $sth = DAO::$db->prepare( $query );
            $result = $sth->execute( $data );

            $skill = null;
            if ( $sth->rowCount() == 1 ){
                $skill = new cv($result["idSkill"],$result["idProject"]);
            }
            return $skill;
        } catch (PDOException $e){
            $errMsg = "DAOAccount une erreur c'est produite lors de la lecture";
            require_once ("View/Error/Custom.php");
            return null;
        }    }

    public function update(object $obj): bool
    {
        try{
            # $this->connect();
            $query = "UPDATE associationSkillProject SET idProject=:idProject WHERE id=:id";
            $data = array(
                'id'=>$obj->getIdSkill(),
                'name'=>$obj->getIdProject(),
            );
            $sth = DAO::$db->prepare( $query );
            $result = $sth->execute( $data );
            #$sth= null;
            return $result;
        }catch (PDOException $e){
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function delete(object $obj): bool
    {
        try{
            # $this->connect();
            $query = "DELETE FROM associationSkillProject WHERE idSkill=:idSkill ";
            $data = array(
                ':idSkill'=>$obj->getIdSkill()
            );
            $sth = DAO::$db->prepare( $query );
            $result = $sth->execute( $data );
            #$sth= null;
            return $result;
        }
        catch (PDOException $e){
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}