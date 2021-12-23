<?php

class Education
{

    private Integer $id;
    private String $title;
    private String $start;
    private String $end;
    private Integer $theCV;

    /**
     * @param int $id
     * @param String $title
     * @param String $start
     * @param String $end
     * @param int $theCV
     */
    public function __construct(int $id, string $title, string $start, string $end, int $theCV)
    {
        $this->id = $id;
        $this->title = $title;
        $this->start = $start;
        $this->end = $end;
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
    public function getStart(): string
    {
        return $this->start;
    }

    /**
     * @param String $start
     */
    public function setStart(string $start): void
    {
        $this->start = $start;
    }

    /**
     * @return String
     */
    public function getEnd(): string
    {
        return $this->end;
    }

    /**
     * @param String $end
     */
    public function setEnd(string $end): void
    {
        $this->end = $end;
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




}