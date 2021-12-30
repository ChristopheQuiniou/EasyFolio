<?php

class AssociationSkillProject
{

    private int $idSkill;
    private int $idProject;

    /**
     * @param int $idSkill
     * @param int $idProject
     */
    public function __construct(int $idSkill, int $idProject)
    {
        $this->idSkill = $idSkill;
        $this->idProject = $idProject;
    }

    /**
     * @return int
     */
    public function getIdSkill(): int
    {
        return $this->idSkill;
    }

    /**
     * @param int $idSkill
     */
    public function setIdSkill(int $idSkill): void
    {
        $this->idSkill = $idSkill;
    }

    /**
     * @return int
     */
    public function getIdProject(): int
    {
        return $this->idProject;
    }

    /**
     * @param int $idProject
     */
    public function setIdProject(int $idProject): void
    {
        $this->idProject = $idProject;
    }



}