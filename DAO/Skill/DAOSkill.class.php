<?php

class DAOSkill extends DAO implements IDAO
{


    public function create(object $obj): bool
    {
        try{
            # $this->connect();
            $query = "INSERT INTO skill VALUES(:id,:name)";
            $data = array(
                'id'=>$this->db->getId(),
                'name'=>$this->db->getName(),
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

    public function read(int $id): ?object
    {
        try{
            $query = "SELECT * FROM skill
                      WHERE id=:id";
            $data = array(
                ":id" => $id
            );
            $sth = DAO::$db->prepare( $query );
            $result = $sth->execute( $data );

            $skill = null;
            if ( $sth->rowCount() == 1 ){
                $skill = new cv($result["id"],$result["name"]);
            }
            return $skill;
        } catch (PDOException $e){
            $errMsg = "DAOAccount une erreur c'est produite lors de la lecture";
            require_once ("View/Error/Custom.php");
            return null;
        }
    }

    public function update(object $obj): bool
    {
        try{
            # $this->connect();
            $query = "UPDATE skill SET name=:name WHERE id=:id";
            $data = array(
                'id'=>$this->db->getId(),
                'name'=>$this->db->getName(),
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
            $query = "DELETE FROM skill WHERE id=:id ";
            $data = array(
                ':id'=>$this->db->getId()
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