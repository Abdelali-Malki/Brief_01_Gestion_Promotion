<?php
    class promotion{
        private $server = "localhost";
        private $user = "root";
        private $pass = "";
        private $db = "gestiondespromotions_v1";
        private $conn;

        function __construct($id,$nom){
            $this->id = $id;
            $this->nom = $nom;
            $this->conn = new mysqli($this->server,$this->user,$this->pass,$this->db);
        }

        function insert(){
            $insert= "INSERT INTO promotion(nom) VALUES('$this->nom')";
            $this->conn->query($insert);
        }

        function update(){
            $update = "UPDATE promotion SET nom = '$this->nom' WHERE id_promotion = $this->id";
            $this->conn->query($update);
        }

        function delete(){
            $delete = "DELETE FROM promotion WHERE id_promotion = $this->id";
            $this->conn->query($delete);
        }


        function search(){
            $search = "SELECT * FROM promotion WHERE nom LIKE %$this->nom%";
            $this->conn->query($search);
        }
    }
?>