<?php

class Project
{

    private Integer $id;
    private String $title;
    private Integer $startDate;
    private Integer $endDate;
    private String $place;
    private String $summary;
    private String $description;
    private String $git;
    private String $kanban;
    private Array $skills;
    //source code attr

    /**
    * @param int $id
    * @param String $title
    * @param int $startDate
    * @param int $endDate
    * @param String $place
    * @param String $summary
    * @param String $description
    * @param String $git
    * @param String $kanban
    * @param array $skills
    */
    public function __construct(int $id, string $title, int $startDate, int $endDate, string $place, string $summary, string $description, string $git, string $kanban, array $skills)
    {
        $this->id = $id;
        $this->title = $title;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->place = $place;
        $this->summary = $summary;
        $this->description = $description;
        $this->git = $git;
        $this->kanban = $kanban;
        $this->skills = $skills;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return String
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param String $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return int
     */
    public function getStartDate(): int
    {
        return $this->startDate;
    }

    /**
     * @param int $startDate
     */
    public function setStartDate(int $startDate): void
    {
        $this->startDate = $startDate;
    }

    /**
     * @return int
     */
    public function getEndDate(): int
    {
        return $this->endDate;
    }

    /**
     * @param int $endDate
     */
    public function setEndDate(int $endDate): void
    {
        $this->endDate = $endDate;
    }

    /**
     * @return String
     */
    public function getPlace(): string
    {
        return $this->place;
    }

    /**
     * @param String $place
     */
    public function setPlace(string $place): void
    {
        $this->place = $place;
    }

    /**
     * @return String
     */
    public function getSummary(): string
    {
        return $this->summary;
    }

    /**
     * @param String $summary
     */
    public function setSummary(string $summary): void
    {
        $this->summary = $summary;
    }

    /**
     * @return String
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param String $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return String
     */
    public function getGit(): string
    {
        return $this->git;
    }

    /**
     * @param String $git
     */
    public function setGit(string $git): void
    {
        $this->git = $git;
    }

    /**
     * @return String
     */
    public function getKanban(): string
    {
        return $this->kanban;
    }

    /**
     * @param String $kanban
     */
    public function setKanban(string $kanban): void
    {
        $this->kanban = $kanban;
    }

    /**
     * @return array
     */
    public function getSkills(): array
    {
        return $this->skills;
    }

    /**
     * @param array $skills
     */
    public function setSkills(array $skills): void
    {
        $this->skills = $skills;
    }




}