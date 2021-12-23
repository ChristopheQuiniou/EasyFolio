<?php

class Project
{

    private Integer $id;
    private String $title;
    private String $startDate;
    private String $endDate;
    private String $place;
    private String $summary;
    private String $description;
    private String $git;
    private String $kanban;
    private Integer $theCV;

    /**
     * @param int $id
     * @param String $title
     * @param String $startDate
     * @param String $endDate
     * @param String $place
     * @param String $summary
     * @param String $description
     * @param String $git
     * @param String $kanban
     * @param int $theCV
     */
    public function __construct(int $id, string $title, string $startDate, string $endDate, string $place, string $summary, string $description, string $git, string $kanban, int $theCV)
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
        $this->theCV = $theCV;
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
     * @return String
     */
    public function getStartDate(): string
    {
        return $this->startDate;
    }

    /**
     * @param String $startDate
     */
    public function setStartDate(string $startDate): void
    {
        $this->startDate = $startDate;
    }

    /**
     * @return String
     */
    public function getEndDate(): string
    {
        return $this->endDate;
    }

    /**
     * @param String $endDate
     */
    public function setEndDate(string $endDate): void
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
     * @return int
     */
    public function getTheCV(): int
    {
        return $this->theCV;
    }

    /**
     * @param int $theCV
     */
    public function setTheCV(int $theCV): void
    {
        $this->theCV = $theCV;
    }

    //source code attr





}