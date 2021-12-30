<?php

class CV
{

    private int $id;
    private string $title;
    private string $description;
    private int $theAccount;

    /**
     * @param int $id
     * @param string $title
     * @param string $description
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