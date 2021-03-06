<?php

class DAOAccount extends DAO implements IDAO
{
    public static function create(object $obj): int
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
            $lastId = DAO::$db->lastInsertId();
            $obj->setId($lastId);

            return $lastId;
        }catch (PDOException $e){
            showErrorPage("DAOAccount une erreur c'est produite lors de la creation");
            return 0;
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
            $sth->execute( $data );
            $result = $sth->fetch();

            $account = null;
            if ( $sth->rowCount() == 1 ){
                $account = new account($result["id"],$result["name"],$result["surname"],$result["birthdate"],$result["address"],$result["phoneNumber"],$result["emailAddress"],$result["password"],$result["profilPicture"]);
            }

            return $account;
        } catch (PDOException $e){
            showErrorPage("DAOAccount une erreur c'est produite lors de la lecture");
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
                'address'=>$obj->getAddress(),
                'phoneNumber'=>$obj->getPhoneNumber(),
                'emailAddress'=>$obj->getEmailAddress(),
                'password'=>$obj->getPassword(),
                'profilPicture'=>$obj->getProfilPicture()
            );
            $sth = DAO::$db->prepare( $query );
            $result = $sth->execute( $data );
            #$sth= null;
            return $result;
        }catch (PDOException $e){
            showErrorPage("DAOAccount une erreur c'est produite lors de la mise a jour");
            return false;
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
            showErrorPage("DAOAccount une erreur c'est produite lors de la suppression");
            return false;
        }
    }

    public static function isEmailUsed(string $email): bool
    {
        try {
            $query = "SELECT id FROM Account WHERE emailAddress = :emailAddress";
            $data = array(
                ":emailAddress" => $email
            );
            $sth = DAO::$db->prepare($query);
            $sth->execute($data);
            return ( $sth->rowCount() > 0 ) ? true : false;

        } catch (PDOException $e) {
            showErrorPage("DAOAccount une erreur c'est produite lors de isEmailUsed");
            return true;
        }
    }


    public static function goodCredentials(string $email, string $password) : int
    {
        try {
            $query = "SELECT id, password FROM Account WHERE emailAddress = :emailAddress";
            $data = array(
                ":emailAddress" => $email
            );
            $sth = DAO::$db->prepare($query);
            $sth->execute($data);
            $result = $sth->fetch();

            if ( $sth->rowCount() == 1 ) {

                if ( password_verify($password,$result["password"]) ){
                    return (int)$result["id"];
                } else {
                    return 0;
                }

            } else {
                return 0;
            }

        } catch (PDOException $e) {
            showErrorPage("DAOAccount une erreur c'est produite lors de goodCredentials");
            return 0;
        }

    }

}