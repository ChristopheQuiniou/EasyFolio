<?php

class Account
{

    private Integer $id;
    private String $name;
    private String $surname;
    private Integer $birthDate;
    private String $address;
    private String $phoneNumber;
    private String $emailAddress;
    private String $password;
    private String $facebook;
    private String $linkedIn;
    private String $youtube;
    private String $profilPicture;
    private Array $educations;
    private Array $CVs;
    private Array $skills;
    private Array $projects;

    /**
     * @param int $id
     * @param String $name
     * @param String $surname
     * @param int $birthDate
     * @param String $address
     * @param String $phoneNumber
     * @param String $emailAddress
     * @param String $password
     * @param String $facebook
     * @param String $linkedIn
     * @param String $youtube
     * @param String $profilPicture
     * @param array $educations
     * @param array $CVs
     * @param array $skills
     * @param array $projects
     */
    public function __construct(int $id, string $name, string $surname, int $birthDate, string $address, string $phoneNumber, string $emailAddress, string $password, string $facebook, string $linkedIn, string $youtube, string $profilPicture, array $educations, array $CVs, array $skills, array $projects)
    {
        $this->id = $id;
        $this->name = $name;
        $this->surname = $surname;
        $this->birthDate = $birthDate;
        $this->address = $address;
        $this->phoneNumber = $phoneNumber;
        $this->emailAddress = $emailAddress;
        $this->password = $password;
        $this->facebook = $facebook;
        $this->linkedIn = $linkedIn;
        $this->youtube = $youtube;
        $this->profilPicture = $profilPicture;
        $this->educations = $educations;
        $this->CVs = $CVs;
        $this->skills = $skills;
        $this->projects = $projects;
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
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param String $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return String
     */
    public function getSurname(): string
    {
        return $this->surname;
    }

    /**
     * @param String $surname
     */
    public function setSurname(string $surname): void
    {
        $this->surname = $surname;
    }

    /**
     * @return int
     */
    public function getBirthDate(): int
    {
        return $this->birthDate;
    }

    /**
     * @param int $birthDate
     */
    public function setBirthDate(int $birthDate): void
    {
        $this->birthDate = $birthDate;
    }

    /**
     * @return String
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param String $address
     */
    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    /**
     * @return String
     */
    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    /**
     * @param String $phoneNumber
     */
    public function setPhoneNumber(string $phoneNumber): void
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * @return String
     */
    public function getEmailAddress(): string
    {
        return $this->emailAddress;
    }

    /**
     * @param String $emailAddress
     */
    public function setEmailAddress(string $emailAddress): void
    {
        $this->emailAddress = $emailAddress;
    }

    /**
     * @return String
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param String $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return String
     */
    public function getFacebook(): string
    {
        return $this->facebook;
    }

    /**
     * @param String $facebook
     */
    public function setFacebook(string $facebook): void
    {
        $this->facebook = $facebook;
    }

    /**
     * @return String
     */
    public function getLinkedIn(): string
    {
        return $this->linkedIn;
    }

    /**
     * @param String $linkedIn
     */
    public function setLinkedIn(string $linkedIn): void
    {
        $this->linkedIn = $linkedIn;
    }

    /**
     * @return String
     */
    public function getYoutube(): string
    {
        return $this->youtube;
    }

    /**
     * @param String $youtube
     */
    public function setYoutube(string $youtube): void
    {
        $this->youtube = $youtube;
    }

    /**
     * @return String
     */
    public function getProfilPicture(): string
    {
        return $this->profilPicture;
    }

    /**
     * @param String $profilPicture
     */
    public function setProfilPicture(string $profilPicture): void
    {
        $this->profilPicture = $profilPicture;
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

    /**
     * @return array
     */
    public function getCVs(): array
    {
        return $this->CVs;
    }

    /**
     * @param array $CVs
     */
    public function setCVs(array $CVs): void
    {
        $this->CVs = $CVs;
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

    /**
     * @return array
     */
    public function getProjects(): array
    {
        return $this->projects;
    }

    /**
     * @param array $projects
     */
    public function setProjects(array $projects): void
    {
        $this->projects = $projects;
    }






}