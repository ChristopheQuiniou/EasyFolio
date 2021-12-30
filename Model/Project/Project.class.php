<?php

class Project
{

    private int $id;
    private string $title;
    private string $startDate;
    private string $endDate;
    private string $place;
    private string $summary;
    private string $description;
    private string $git;
    private string $kanban;
    private int $theCV;

    /**
     * @param int $id
     * @param string $title
     * @param string $startDate
     * @param string $endDate
     * @param string $place
     * @param string $summary
     * @param string $description
     * @param string $git
     * @param string $kanban
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
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getStartDate(): string
    {
        return $this->startDate;
    }

    /**
     * @param string $startDate
     */
    public function setStartDate(string $startDate): void
    {
        $this->startDate = $startDate;
    }

    /**
     * @return string
     */
    public function getEndDate(): string
    {
        return $this->endDate;
    }

    /**
     * @param string $endDate
     */
    public function setEndDate(string $endDate): void
    {
        $this->endDate = $endDate;
    }

    /**
     * @return string
     */
    public function getPlace(): string
    {
        return $this->place;
    }

    /**
     * @param string $place
     */
    public function setPlace(string $place): void
    {
        $this->place = $place;
    }

    /**
     * @return string
     */
    public function getSummary(): string
    {
        return $this->summary;
    }

    /**
     * @param string $summary
     */
    public function setSummary(string $summary): void
    {
        $this->summary = $summary;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getGit(): string
    {
        return $this->git;
    }

    /**
     * @param string $git
     */
    public function setGit(string $git): void
    {
        $this->git = $git;
    }

    /**
     * @return string
     */
    public function getKanban(): string
    {
        return $this->kanban;
    }

    /**
     * @param string $kanban
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