<?php

class DAOEducation extends DAO implements IDAO
{

    public static function create(object $obj): bool
    {
        try{
            # $this->connect();
            $query = "INSERT INTO Education VALUES(:id,:title,:start,:end,:theCV)";
            $data = array(
                'id'=>$obj->getId(),
                'title'=>$obj->getTitle(),
                'start'=>$obj->getStart(),
                'end'=>$obj->getEnd(),
                'theCV'=>$obj->getTheCV(),
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

    public static function read(int $id): ?object
    {
        try{
            $query = "SELECT * FROM Education
                      WHERE id=:id";
            $data = array(
                ":id" => $id
            );
            $sth = DAO::$db->prepare( $query );
            $result = $sth->execute( $data );

            $education = null;
            if ( $sth->rowCount() == 1 ){
                $education = new education($result["id"],$result["title"],$result["start"],$result["end"],$result["theCV"]);
            }

            return $education;
        } catch (PDOException $e){
            $errMsg = "DAOAccount une erreur c'est produite lors de la lecture";
            require_once ("View/Error/Custom.php");
            return null;
        }
    }

    public static function update(object $obj): bool
    {
        try{
            #$this->connect();
            $query = " UPDATE Education SET title=:title, start=:start, end=:end, theCV=:theCV WHERE id=:id ";
            $data = array(
                'id'=>$obj->getId(),
                'title'=>$obj->getTitle(),
                'start'=>$obj->getStart(),
                'end'=>$obj->getEnd(),
                'theCV'=>$obj->getTheCV(),
            );
            $sth = DAO::$db->prepare( $query );
            $result = $sth->execute( $data );
            #$sth= null;
            return $result;
        }catch (PDOException $e){
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }    }

    public static function delete(object $obj): bool
    {
        try{
            # $this->connect();
            $query = "DELETE FROM Education WHERE id=:id ";
            $data = array(
                ':id'=>$obj->getId()
            );
            $sth = DAO::$db->prepare( $query );
            $result = $sth->execute( $data );
            #$sth= null;
            return $result;
        }
        catch (PDOException $e){
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }    }
}