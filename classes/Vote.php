<?php

class Vote 
{
    public $voterID;
    public $candidateID;

    public function __construct($voterID, $candidateID)
    {
        $this->voterID = $voterID;
        $this->candidateID = $candidateID;
    }

    /**
     * Adds a voter's vote to the database
     * 
     * @param PDO $conn Connection to the database
     * 
     * @return bool True on success, false otherwise
     */
    public function castVote($conn)
    {
        $sql = "INSERT INTO vote (`VoterID`, `CandidateID`) VALUES (:voterID, :candidateID)";
        $insertVote = $conn->prepare($sql);
        
        $insertVote->bindValue(':voterID', $this->voterID);
        $insertVote->bindValue(':candidateID', $this->candidateID);

        try {
            $insertVote->execute();
            $_SESSION['voted'] = true;
            return true;
        } catch (PDOException $e) {
            $e->getMessage();
            return false;
        }
    }
}