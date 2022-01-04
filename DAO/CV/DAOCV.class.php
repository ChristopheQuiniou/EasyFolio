<?php

class DAOCV extends DAO implements IDAO
{

    public static function create(object $obj): int
    {
        try{
            # $this->connect();
            $query = "INSERT INTO CV VALUES(:id,:title,:description,:theAccount)";
            $data = array(
                'id'=>$obj->getId(),
                'title'=>$obj->getTitle(),
                'description'=>$obj->getDescription(),
                'theAccount'=>$obj->getTheAccount(),
            );
            $sth = DAO::$db->prepare( $query );
            $result = $sth->execute( $data );
            #$sth= null;
            return DAO::$db->lastInsertId();
        }catch (PDOException $e){
            showErrorPage("DAOCV une erreur c'est produite lors de la creation");
            return 0;
        }
    }

    public static function read(int $id): ?object
    {
        try{
            $query = "SELECT * FROM CV
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
            showErrorPage("DAOCV une erreur c'est produite lors de la lecture");
            return null;
        }
    }

    public static function update(object $obj): bool
    {
        try{
            #$this->connect();
            $query = " UPDATE CV SET title=:title, description=:description, theAccount=:theAccount WHERE id=:id ";
            $data = array(
                'id'=>$obj->getId(),
                'title'=>$obj->getTitle(),
                'description'=>$obj->getDescription(),
                'theAccount'=>$obj->getTheAccount(),
            );
            $sth = DAO::$db->prepare( $query );
            $result = $sth->execute( $data );
            #$sth= null;
            return $result;
        }catch (PDOException $e){
            showErrorPage("DAOCV une erreur c'est produite lors de la mise a jour");
            return false;
        }
    }

    public static function delete(object $obj): bool
    {
        try{
            # $this->connect();
            $query = "DELETE FROM CV WHERE id=:id ";
            $data = array(
                ':id'=>$obj->getId()
            );
            $sth = DAO::$db->prepare( $query );
            $result = $sth->execute( $data );
            #$sth= null;
            return $result;
        }
        catch (PDOException $e){
            showErrorPage("DAOCV une erreur c'est produite lors de la suppression");
            return false;
        }
    }

    //Return an array of CV that have this skill
    //Return null if nothing found
    public static function matchSkill($skill) : ?Array {

        try{
            $query = "
                SELECT SASP.*
                FROM (
                    SELECT CV.id AS cvId, CV.title AS cvTitle, CV.description AS cvDescription, Account.name AS accountName, Account.surname AS accountSurname, Account.id AS accountId, COUNT(Skill.id) AS nbProject
                    FROM Skill,
                     AssociationSkillProject,
                     Project,
                     CV,
                     Account
                    WHERE Skill.name = :skill
                    AND AssociationSkillProject.idSkill = Skill.id
                    AND AssociationSkillProject.idProject = Project.id
                    AND Project.theCV = CV.id
                    AND CV.theAccount = Account.id
                    GROUP BY CV.id
                    ORDER BY COUNT(Skill.id) DESC
                    ) AS SASP
                GROUP BY SASP.accountId
                HAVING MAX(SASP.nbProject)
            ";

            $data = array(
                ':skill'=>$skill
            );

            $sth = DAO::$db->prepare( $query );
            $sth->execute( $data );
            return $sth->fetchAll();
        }
        catch (PDOException $e){
            showErrorPage("DAOCV une erreur c'est produite lors de la matchSkill");
            return null;
        }

    }

}