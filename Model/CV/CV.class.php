<?php

class CV
{
    private Integer $id;
    private String $title;
    private String $description;
    private Array $educations;

    /**
     * @param int $id
     * @param String $title
     * @param String $description
     * @param array $educations
     */
    public function __construct(int $id, string $title, string $description, array $educations)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->educations = $educations;
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
     * @return array
     */
    public function getEducations(): array
    {
        return $this->educations;
    }

    /**
     * @param array $educations
     */
    public function setEducations(array $educations): void
    {
        $this->educations = $educations;
    }



}