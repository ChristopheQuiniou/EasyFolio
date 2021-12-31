<?php

class DAOAccount extends DAO implements IDAO
{
    public function create(object $obj): bool
    {
        try{
            # $this->connect();
            $query = "INSERT INTO account VALUES(:id,:name,:surname,:birthdate,:adress,:phoneNumber,:emailAdress,:password,:profilPicture)";
            $data = array(
                'id'=>$this->db->getId(),
                'name'=>$this->db->getName(),
                'surname'=>$this->db->getSurname(),
                'birthdate'=>$this->db->getBithdate(),
                'adress'=>$this->db->getAdress(),
                'phoneNumber'=>$this->db->getPhoneNumber(),
                'emailAdress'=>$this->db->getEmailAdress(),
                'password'=>$this->db->getPassword(),
                'profilPicture'=>$this->db->getprofilPicture()
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
            $query = "SELECT * FROM account
                      WHERE id=:id";
            $data = array(
                ":id" => $id
            );
            $sth = DAO::$db->prepare( $query );
            $result = $sth->execute( $data );

            $account = null;
            if ( $sth->rowCount() == 1 ){
                $account = new account($result["id"],$result["name"],$result["surname"],$result["birthdate"],$result["address"],$result["phoneNumber"],$result["emailAddress"],$result["password"],$result["profilPicture"]);
            }

            return $account;
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
            $query = " UPDATE account SET name=:name, surname=:surname, birthdate=:birthdate, adress=:adress,phoneNumber=:phoneNumber, emailAdress=:emailAdress, password=:password,profilPicture=:profilPicture WHERE id=:id ";
            $data = array(
                'id'=>$this->db->getId(),
                'name'=>$this->db->getName(),
                'surname'=>$this->db->getSurname(),
                'birthdate'=>$this->db->getBithdate(),
                'adress'=>$this->db->getAdress(),
                'phoneNumber'=>$this->db->getPhoneNumber(),
                'emailAdress'=>$this->db->getEmailAdress(),
                'password'=>$this->db->getPassword(),
                'profilPicture'=>$this->db->getprofilPicture()
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
            $query = "DELETE FROM acccount WHERE id=:id ";
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