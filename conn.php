<?php
    class Database {
        private $hostname = "ID367960_SH.db.webhosting.be"; 
        private $dbUser = "ID367960_SH";
        private $dbPassword = "Youareawizardharry13";
        private $dbName = "ID367960_SH";
        private $dbPort = 3306;
        private $conn;

        function __construct() {
            $this->conn = $this->createConnection();
        }

        function createConnection() {
            $conn = mysqli_connect($this->hostname, $this->dbUser, $this->dbPassword, $this->dbName, $this->dbPort);

            // checken of de connectie nog werkt
            if ($conn == false) {
                echo "Can't make connection";
                die();
            }

            return $conn;
        }
    
        function getQuery($query) {
            return mysqli_query($this->conn, $query)->fetch_all(MYSQLI_ASSOC);
        }
    
        function InsertQuery($query) {
            mysqli_query($this->conn,$query);
        }
    
        function closeConnection() {
            $this->conn->close();
        }
    }