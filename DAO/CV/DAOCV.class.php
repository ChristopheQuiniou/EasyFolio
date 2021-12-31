<?php

class DAOCV extends DAO implements IDAO
{

    public function create(object $obj): bool
    {
        try{
            # $this->connect();
            $query = "INSERT INTO cv VALUES(:id,:title,:description,:theAccount)";
            $data = array(
                'id'=>$this->db->getId(),
                'title'=>$this->db->getTitle(),
                'description'=>$this->db->getDescription(),
                'theAccount'=>$this->db->getTheAccount(),
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
            $query = "SELECT * FROM cv
                      WHERE id=:id";
            $data = array(
                ":id" => $id
            );
            $sth = DAO::$db->prepare( $query );
            $result = $sth->execute( $data );

            $cv = null;
            if ( $sth->rowCount() == 1 ){
                $cv = new cv($result["id"],$result["title"],$result["description"],$result["theAccount"]);
            }
            return $cv;
        } catch (PDOException $e){
            $errMsg = "DAOAccount une erreur c'est produite lors de la lecture";
            require_once ("View/Error/Custom.php");
            return null;
        }
    }

    public function update(object $obj): bool
    {
        try{
            #$this->connect();
            $query = " UPDATE cv SET title=:title, description=:description, theAccount=:theAccount WHERE id=:id ";
            $data = array(
                'id'=>$this->db->getId(),
                'title'=>$this->db->getTitle(),
                'description'=>$this->db->getDescription(),
                'theAccount'=>$this->db->getTheAccount(),
            );
            $sth = DAO::$db->prepare( $query );
            $result = $sth->execute( $data );
            #$sth= null;
            return $result;
        }catch (PDOException $e){
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }    }

    public function delete(object $obj): bool
    {
        try{
            # $this->connect();
            $query = "DELETE FROM cv WHERE id=:id ";
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