<?php

Class Connection {
    private $host;
    private $user;
    private $password;
    private $db;

    protected function connect() {
        
    $this->host = "localhost";
    $this->user = "root";
    $this->password = "";
    $this->db = "gestiondespromotions_v1";

        $conn = new mysqli($this->host, $this->user, $this->password, $this->db);
        return $conn;
    }

}

?>