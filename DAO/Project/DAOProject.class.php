<?php

class DAOProject extends DAO implements IDAO
{

    public static function create(object $obj): int
    {
        try{
            # $this->connect();
            $query = "INSERT INTO Project VALUES(:id,:title,:startDate,:endDate,:place,:summary,:description,:git,:kanban,:theCV)";
            $data = array(
                'id'=>$obj->getId(),
                'title'=>$obj->getTitle(),
                'startDate'=>$obj->getStartDate(),
                'endDate'=>$obj->getEndDate(),
                'place'=>$obj->getPlace(),
                'summary'=>$obj->getSummary(),
                'description'=>$obj->getDescription(),
                'git'=>$obj->getGit(),
                'kanban'=>$obj->getKanban(),
                'theCV'=>$obj->getTheCV()
            );
            $sth = DAO::$db->prepare( $query );
            $sth->execute( $data );

            return DAO::$db->lastInsertId();
        }catch (PDOException $e){
            showErrorPage("DAOProject une erreur c'est produite lors de la creation");
            return 0;
        }
    }

    public static function read(int $id): ?object
    {
        try{
            $query = "SELECT * FROM Project
                      WHERE id=:id";
            $data = array(
                ":id" => $id
            );
            $sth = DAO::$db->prepare( $query );
            $result = $sth->execute( $data );

            $project = null;
            if ( $sth->rowCount() == 1 ){
                $project = new project($result["id"],$result["title"],$result["startDate"],$result["endDate"],$result["place"],$result["summary"],$result["description"],$result["git"],$result["kanban"],$result["theCV"]);
            }

            return $project;
        } catch (PDOException $e){
            showErrorPage("DAOProject une erreur c'est produite lors de la lecture");
            return null;
        }
    }

    public static function update(object $obj): bool
    {
        try{
            # $this->connect();
            $query = "UPDATE Project SET title=:title, startDate=:startDate, endDate=:endDate, place=:place, summary=:summary, description=:description, git=:git, kanban=:kanban, theCV=:theCV)";
            $data = array(
                'id'=>$obj->getId(),
                'title'=>$obj->getTitle(),
                'startDate'=>$obj->getStartDate(),
                'endDate'=>$obj->getEndDate(),
                'place'=>$obj->getPlace(),
                'summary'=>$obj->getSummary(),
                'description'=>$obj->getDescription(),
                'git'=>$obj->getGit(),
                'kanban'=>$obj->getKanban(),
                'theCV'=>$obj->getTheCV()
            );
            $sth = DAO::$db->prepare( $query );
            $result = $sth->execute( $data );
            #$sth= null;
            return $result;
        }catch (PDOException $e){
            showErrorPage("DAOProject une erreur c'est produite lors de la mise a jour");
            return false;
        }
    }

    public static function delete(object $obj): bool
    {
        try{
            # $this->connect();
            $query = "DELETE FROM Project WHERE id=:id ";
            $data = array(
                ':id'=>$obj->getId()
            );
            $sth = DAO::$db->prepare( $query );
            $result = $sth->execute( $data );
            #$sth= null;
            return $result;
        }
        catch (PDOException $e){
            showErrorPage("DAOProject une erreur c'est produite lors de la suppression");
            return false;
        }
    }
}