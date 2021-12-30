<?php

class Account
{
    private int $id;
    private string $name;
    private string $surname;
    private string $birthdate;
    private string $address;
    private string $phoneNumber;
    private string $emailAddress;
    private string $password;
    private string $profilPicture;

    /**
     * @param int $id
     * @param string $name
     * @param string $surname
     * @param string $birthdate
     * @param string $address
     * @param string $phoneNumber
     * @param string $emailAddress
     * @param string $password
     * @param string $profilPicture
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
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getSurname(): string
    {
        return $this->surname;
    }

    /**
     * @param string $surname
     */
    public function setSurname(string $surname): void
    {
        $this->surname = $surname;
    }

    /**
     * @return string
     */
    public function getBirthdate(): string
    {
        return $this->birthdate;
    }

    /**
     * @param string $birthdate
     */
    public function setBirthdate(string $birthdate): void
    {
        $this->birthdate = $birthdate;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    /**
     * @param string $phoneNumber
     */
    public function setPhoneNumber(string $phoneNumber): void
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * @return string
     */
    public function getEmailAddress(): string
    {
        return $this->emailAddress;
    }

    /**
     * @param string $emailAddress
     */
    public function setEmailAddress(string $emailAddress): void
    {
        $this->emailAddress = $emailAddress;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getProfilPicture(): string
    {
        return $this->profilPicture;
    }

    /**
     * @param string $profilPicture
     */
    public function setProfilPicture(string $profilPicture): void
    {
        $this->profilPicture = $profilPicture;
    }


    public static function isValidName(string $name) : bool {

        if ( strlen($name) <= 2 )
            return false;
        return true;
    }

    public static function isValidSurname(string $surname) : bool {
        return self::isValidName($surname);
    }

    public static function isValidBirthdate(string $birthdate) : bool {
        if ( strlen($birthdate) != 10 )
            return false;
        return true;
    }

    public static function isValidAddress(string $address) : bool {
        if ( strlen($address) <= 5 )
            return false;
        return true;
    }

    public static function isValidPhoneNumber(string $phoneNumber) : bool {

        if ( strlen($phoneNumber) < 10 )
            return false;
        return true;

    }

    public static function isValidEmail(string $email) : bool {

        if ( strlen($email) < 6 )
            return false;

        $pattern = "/^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i";
        if ( preg_match($pattern,$email) == 0 )
            return false;

        return true;
    }

    public static function isValidPassword(string $password) : bool {

        if ( strlen($password) < 9 )
            return false;
        return true;
    }





}