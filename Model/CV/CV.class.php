<?php

class CV
{

    private Integer $id;
    private String $title;
    private String $description;
    private Integer $theAccount;

    /**
     * @param int $id
     * @param String $title
     * @param String $description
     * @param int $theAccount
     */
    public function __construct(int $id, string $title, string $description, int $theAccount)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->theAccount = $theAccount;
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
     * @return int
     */
    public function getTheAccount(): int
    {
        return $this->theAccount;
    }

    /**
     * @param int $theAccount
     */
    public function setTheAccount(int $theAccount): void
    {
        $this->theAccount = $theAccount;
    }



}