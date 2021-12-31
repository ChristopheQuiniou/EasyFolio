<?php

class DAOEducation extends DAO implements IDAO
{

    public function create(object $obj): bool
    {
        try{
            # $this->connect();
            $query = "INSERT INTO education VALUES(:id,:title,:start,:end,:theCV)";
            $data = array(
                'id'=>$this->db->getId(),
                'title'=>$this->db->getTitle(),
                'start'=>$this->db->getStart(),
                'end'=>$this->db->getEnd(),
                'theCV'=>$this->db->getTheCV(),
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
            $query = "SELECT * FROM education
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

    public function update(object $obj): bool
    {
        try{
            #$this->connect();
            $query = " UPDATE education SET title=:title, start=:start, end=:end, theCV=:theCV WHERE id=:id ";
            $data = array(
                'id'=>$this->db->getId(),
                'title'=>$this->db->getTitle(),
                'start'=>$this->db->getStart(),
                'end'=>$this->db->getEnd(),
                'theCV'=>$this->db->getTheCV(),
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
            $query = "DELETE FROM education WHERE id=:id ";
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
        }    }
}