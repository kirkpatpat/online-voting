<?php

class Candidate
{
    public $candidateID;
    public $firstName;
    public $lastName;
    public $midInit;
    public $position;
    public $party;

    public function __construct($candidateID, $firstName, $lastName, $midInit, $position, $party)
    {

    }

    /**
     * 
     * @param PDO $conn Connection to the database
     */
    public static function getAllCandidates($conn)
    {
        $sql = "SELECT * FROM candidate";
        $results = $conn->query($sql);
        return $results->fetchAll(PDO::FETCH_OBJ);
    }


    /**
     * @param PDO $conn Connection to the database
     */
    public static function getAllCandidatesByPosition($position, $conn)
    {
        $sql = "SELECT * FROM candidate WHERE position = '{$position}'";
        $results = $conn->query($sql);
        return $results->fetchAll(PDO::FETCH_OBJ);
    }

    
}