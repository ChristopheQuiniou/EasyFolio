<?php

class DAOAssociationSkillProject extends DAO implements IDAO
{

    public static function create(object $obj): int
    {
        try{
            $query = "INSERT INTO AssociationSkillProject VALUES(:idSkill,:idProject)";
            $data = array(
                'id'=>$obj->getIdSkill(),
                'name'=>$obj->getIdProject(),
            );
            $sth = DAO::$db->prepare( $query );
            $result = $sth->execute( $data );
            #$sth= null;
            return 1;
        }catch (PDOException $e){
            showErrorPage("DAOAssociationSkillProject une erreur c'est produite lors de la creation");
            return 0;
        }
    }

    public static function read(int $id): ?object
    {
        try{
            $query = "SELECT * FROM AssociationSkillProject
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

            showErrorPage("DAOAssociationSkillProject une erreur c'est produite lors de la lecture");
            return null;
        }
    }

    // TODO Fix the query
    public static function update(object $obj): bool
    {
        try{
            # $this->connect();
            $query = "UPDATE AssociationSkillProject SET idProject=:idProject WHERE idSkill=:id";
            $data = array(
                'id'=>$obj->getIdSkill(),
                'name'=>$obj->getIdProject(),
            );
            $sth = DAO::$db->prepare( $query );
            $result = $sth->execute( $data );
            #$sth= null;
            return $result;
        }catch (PDOException $e){
            showErrorPage("DAOAssociationSkillProject une erreur c'est produite lors de la mise a jour");
            return false;
        }
    }

    public static function delete(object $obj): bool
    {
        try{
            # $this->connect();
            $query = "DELETE FROM AssociationSkillProject WHERE idSkill=:idSkill ";
            $data = array(
                ':idSkill'=>$obj->getIdSkill()
            );
            $sth = DAO::$db->prepare( $query );
            $result = $sth->execute( $data );
            #$sth= null;
            return $result;
        }
        catch (PDOException $e){
            showErrorPage("DAOAssociationSkillProject une erreur c'est produite lors de la suppression");
            return false;
        }
    }
}