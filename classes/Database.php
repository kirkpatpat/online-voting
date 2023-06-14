<?php

class Database
{
        /**
     * Hostname
     * @var string
     */
    protected $db_host;
    /**
     * Database name
     * @var string
     */
    protected $db_name;
    /**
     * Username
     * @var string
     */
    protected $db_user;
    /**
     * Password
     * @var string
     */
    protected $db_pass;
    /**
     * Server port
     * @var int
     * 
     */
    protected $db_port;

    public function __construct($host, $name, $user, $password, $port)
    {
        $this->db_host = $host; 
        $this->db_name = $name;
        $this->db_user = $user;
        $this->db_pass = $password;
        $this->db_port = $port;
    }

    /**
     * Get the database connection 
     * 
     * @return PDO object Connection to the database server
     */
    public function getConn()
    { 
        $dsn = 'mysql:host=' . $this->db_host . ';port=' . $this->db_port .';dbname=' . $this->db_name . ';charset=utf8';

        try {
            $db = new PDO($dsn, $this->db_user, $this->db_pass);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;
        } catch (PDOException $e) {
            echo $e->getMessage();
            exit(-1);
        }
        return $db;
    }
}