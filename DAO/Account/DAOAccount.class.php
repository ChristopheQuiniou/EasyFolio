<?php

class DAOAccount extends DAO implements IDAO
{
    public static function create(object $obj): bool
    {
        try{
            # $this->connect();
            $query = "INSERT INTO Account (name,surname,birthdate,address,phoneNumber,emailAddress,password,profilPicture) VALUES (:name,:surname,:birthdate,:address,:phoneNumber,:emailAddress,:password,:profilPicture)";
            $data = array(
                'name'=>$obj->getName(),
                'surname'=>$obj->getSurname(),
                'birthdate'=>$obj->getBirthdate(),
                'address'=>$obj->getAddress(),
                'phoneNumber'=>$obj->getPhoneNumber(),
                'emailAddress'=>$obj->getEmailAddress(),
                'password'=>$obj->getPassword(),
                'profilPicture'=>$obj->getprofilPicture()
            );
            $sth = DAO::$db->prepare( $query );
            $result = $sth->execute( $data );

            //Update object id
            $obj->setId($sth->lastInsertId());

            return $result;
        }catch (PDOException $e){
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public static function read(int $id): ?object
    {
        try{
            $query = "SELECT * FROM Account
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

    public static function update(object $obj): bool
    {
        try{
            #$this->connect();
            $query = " UPDATE Account SET name=:name, surname=:surname, birthdate=:birthdate, adress=:adress,phoneNumber=:phoneNumber, emailAdress=:emailAdress, password=:password,profilPicture=:profilPicture WHERE id=:id ";
            $data = array(
                'id'=>$obj->getId(),
                'name'=>$obj->getName(),
                'surname'=>$obj->getSurname(),
                'birthdate'=>$obj->getBithdate(),
                'adress'=>$obj->getAdress(),
                'phoneNumber'=>$obj->getPhoneNumber(),
                'emailAdress'=>$obj->getEmailAdress(),
                'password'=>$obj->getPassword(),
                'profilPicture'=>$obj->getprofilPicture()
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

    public static function delete(object $obj): bool
    {
        try{
            # $this->connect();
            $query = "DELETE FROM Acccount WHERE id=:id ";
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
        }
    }

    // TODO code this method that return true if the email was found in database
    public static function isEmailUsed(string $email): bool
    {
        try {
            $query = "SELECT SELECT COUNT(*) FROM Account WHERE emailAdress=:emailAdress";
            $data = array(
                ":emailAdress" => $email
            );
            $sth = DAO::$db->prepare($query);
            $result = $sth->execute($data);
            $count = $result->fetchColumn();
            return $count == 0;
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }

}