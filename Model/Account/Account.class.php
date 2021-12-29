<?php

class Account
{
    private Integer $id;
    private String $name;
    private String $surname;
    private String $birthdate;
    private String $address;
    private String $phoneNumber;
    private String $emailAddress;
    private String $password;
    private String $profilPicture;

    /**
     * @param int $id
     * @param String $name
     * @param String $surname
     * @param String $birthdate
     * @param String $address
     * @param String $phoneNumber
     * @param String $emailAddress
     * @param String $password
     * @param String $profilPicture
     */
    public function __construct(int $id, string $name, string $surname, string $birthdate, string $address, string $phoneNumber, string $emailAddress, string $password, string $profilPicture)
    {
        $this->id = $id;
        $this->name = $name;
        $this->surname = $surname;
        $this->birthdate = $birthdate;
        $this->address = $address;
        $this->phoneNumber = $phoneNumber;
        $this->emailAddress = $emailAddress;
        $this->password = $password;
        $this->profilPicture = $profilPicture;
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
     * @return String
     */
    public function getBirthdate(): string
    {
        return $this->birthdate;
    }

    /**
     * @param String $birthdate
     */
    public function setBirthdate(string $birthdate): void
    {
        $this->birthdate = $birthdate;
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





}