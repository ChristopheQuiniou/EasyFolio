<?php

class DAOSkill extends DAO implements IDAO
{


    public static function create(object $obj): bool
    {
        try{
            # $this->connect();
            $query = "INSERT INTO Skill VALUES(:id,:name)";
            $data = array(
                'id'=>$obj->getId(),
                'name'=>$obj->getName(),
            );
            $sth = DAO::$db->prepare( $query );
            $result = $sth->execute( $data );
            #$sth= null;
            return $result;
        }catch (PDOException $e){
            showErrorPage("DAOSkill une erreur c'est produite lors de la creation");
            return false;
        }
    }

    public static function read(int $id): ?object
    {
        try{
            $query = "SELECT * FROM Skill
                      WHERE id=:id";
            $data = array(
                ":id" => $id
            );
            $sth = DAO::$db->prepare( $query );
            $result = $sth->execute( $data );

            $skill = null;
            if ( $sth->rowCount() == 1 ){
                $skill = new skill($result["id"],$result["name"]);
            }
            return $skill;
        } catch (PDOException $e){
            showErrorPage("DAOSkill une erreur c'est produite lors de la lecture");
            return null;
        }
    }

    public static function update(object $obj): bool
    {
        try{
            # $this->connect();
            $query = "UPDATE Skill SET name=:name WHERE id=:id";
            $data = array(
                'id'=>$obj->getId(),
                'name'=>$obj->getName(),
            );
            $sth = DAO::$db->prepare( $query );
            $result = $sth->execute( $data );
            #$sth= null;
            return $result;
        }catch (PDOException $e){
            showErrorPage("DAOSkill une erreur c'est produite lors de la mise a jour");
            return false;
        }
    }

    public static function delete(object $obj): bool
    {
        try{
            # $this->connect();
            $query = "DELETE FROM Skill WHERE id=:id ";
            $data = array(
                ':id'=>$obj->getId()
            );
            $sth = DAO::$db->prepare( $query );
            $result = $sth->execute( $data );
            #$sth= null;
            return $result;
        }
        catch (PDOException $e){
            showErrorPage("DAOSkill une erreur c'est produite lors de la suppression");
            return false;
        }
    }
}