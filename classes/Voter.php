<?php

class Voter
{
    public $voterID;

    public $lastName;
    public $firstName;
    public $middleName;
    
    public $illiterate;
    public $pwd;
    public $ip;
    public $assistedBy;

    public $raProvince;
    public $raCity;
    public $raBarangay;
    public $raStreet;

    public $sex;

    public $dateOfBirth;
    public $pobCity;
    public $pobProvince;

    public $porCityYears;
    public $porCityMonths;
    public $porPhilYears;

    public $civilStatus;
    public $spouseName;

    public $usertype = 'voter';
    public $voteStatus = 'not voted';

    public $password;

    
    public function __construct()
    {
        
    }

    /**
     * Registers this voter by adding it to the database.
     *  
     * @param PDO $conn Connection to the database
     * 
     * @return bool True on success, false otherwise
     */
    public function registerVoter($conn)
    {
        $sql = "INSERT INTO user (`LastName`, `FirstName`, `MiddleName`, `Province`, `City`, `Barangay`, `Street`,
                `yearsCity`, `monthsCity`, `yearsPH`, `illiterate`, `pwd`, `indigenous`, `AssistedBy`, 
                `Gender`, `Birthday`, `BirthCity`, `BirthProvince`, `CivilStatus`, `Spouse`, `Usertype`, 
                `VoteStatus`, `Password`) VALUES (:lastName, :firstName, :middleName, :raProvince, :raCity, :raBarangay, :raStreet,
                :porCityYears, :porCityMonths, :porPhilYears, :illiterate, :pwd, :ip, :assistedBy,
                :sex, :dateOfBirth, :pobCity, :pobProvince, :civilStatus, :spouseName, :usertype, 
                :voteStatus, :pass)";

        $this->password = password_hash($this->password, PASSWORD_DEFAULT);
        $register = $conn->prepare($sql);
        $register->bindValue(':lastName', $this->lastName, PDO::PARAM_STR);
        $register->bindValue(':firstName', $this->firstName, PDO::PARAM_STR);
        $register->bindValue(':middleName', $this->middleName, PDO::PARAM_STR);
        $register->bindValue(':raProvince', $this->raProvince, PDO::PARAM_STR);
        $register->bindValue(':raCity', $this->raCity, PDO::PARAM_STR);
        $register->bindValue(':raBarangay', $this->raBarangay, PDO::PARAM_STR);
        $register->bindValue(':raStreet', $this->raStreet, PDO::PARAM_STR);
        $register->bindValue(':porCityYears', $this->porCityYears, PDO::PARAM_INT);
        $register->bindValue(':porCityMonths', $this->porCityMonths, PDO::PARAM_INT);
        $register->bindValue(':porPhilYears', $this->porPhilYears, PDO::PARAM_INT);
        $register->bindValue(':illiterate', $this->illiterate, PDO::PARAM_INT);
        $register->bindValue(':pwd', $this->pwd, PDO::PARAM_INT);
        $register->bindValue(':ip', $this->ip, PDO::PARAM_INT);
        $register->bindValue(':assistedBy', $this->assistedBy, PDO::PARAM_STR);
        $register->bindValue(':sex', $this->sex, PDO::PARAM_STR);
        $register->bindValue(':dateOfBirth', $this->dateOfBirth, PDO::PARAM_STR);
        $register->bindValue(':pobCity', $this->pobCity, PDO::PARAM_STR);
        $register->bindValue(':pobProvince', $this->pobProvince, PDO::PARAM_STR);
        $register->bindValue(':civilStatus', $this->civilStatus, PDO::PARAM_STR);
        $register->bindValue(':spouseName', $this->spouseName, PDO::PARAM_STR);
        $register->bindValue(':usertype', $this->usertype, PDO::PARAM_STR);
        $register->bindValue(':voteStatus', $this->voteStatus, PDO::PARAM_STR);
        $register->bindValue(':pass', $this->password, PDO::PARAM_STR);

        return $register->execute();
    }

    /**
     * Fetches a record from the user table and returns it as an anonymous object.
     * 
     * @param PDO $conn Connection to the database
     * @param int $voterID The voter's ID
     * 
     * @return object An object with properties mapped from the field list.
     */
    public static function getVoter($conn, $voterID) 
    {
        $sql = "SELECT * FROM user WHERE voterID = :voterID";
        $selectVoter = $conn->prepare($sql);

        $selectVoter->bindValue(':voterID', $voterID, PDO::PARAM_INT);

        $selectVoter->setFetchMode(PDO::FETCH_OBJ);

        if ($selectVoter->execute()) {
            return $selectVoter->fetch();
        }

        return null;
        
    }

    public static function authenticate($conn, $voterID, $password) 
    {
        if ($user  = static::getVoter($conn, $voterID)) {
            return password_verify($password, $user->Password);
        }   
        return false;
    }

    /**
     * Fetches all voters from the database
     * 
     * @param PDO $conn Connection to the database
     * 
     * @return array An associative array of voters
     */
    public static function getAllVoters($conn)
    {
        
    }

    /**
     * Get the total number of voters
     * 
     * @param PDO $conn Connection to the database
     * 
     * @return int Number of voters
     */
    public static function getNumberOfVoters($conn)
    {

    }

    /**
     * Get the total number of voters who have already voted
     * 
     * @param PDO $conn Connection to the database
     * 
     * @return int Total number of voters who have already voted
     */
    public static function getNumberOfVoted($conn)
    {

    }

    /**
     * Get the total number of voteds per candidate
     * 
     * @param PDO $conn Connection to the database
     * 
     * @return array An associative array with the position name as the key and the number as the value.
     */
    public static function getNumberOfVotesPerCandidate($conn)
    {

    }
}