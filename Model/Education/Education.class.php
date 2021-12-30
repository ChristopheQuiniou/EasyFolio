<?php

class Education
{

    private int $id;
    private string $title;
    private string $start;
    private string $end;
    private int $theCV;

    /**
     * @param int $id
     * @param string $title
     * @param string $start
     * @param string $end
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
    public function getStart(): string
    {
        return $this->start;
    }

    /**
     * @param string $start
     */
    public function setStart(string $start): void
    {
        $this->start = $start;
    }

    /**
     * @return string
     */
    public function getEnd(): string
    {
        return $this->end;
    }

    /**
     * @param string $end
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