<?php

require_once("../db/db.php");

    class Users {
        private $password;
        private $user;
        private $db;

        public function __construct() {
            $this->db = Conectar::conexion();
			$this->user = array();
        }

        //getters and setters
        public function getPassword() {
            return $this->password;

        }

        public function setPassword($password) {
            $this->password = $password;
        }

        public function getuser() {
            return $this->user;

        }

        public function setuser($user) {
            $this->user = $user;
        }

        public function LogIn($username,$password) {
            $sql = "SELECT * FROM users WHERE user='$username' AND password='$password';";
            $resultado = $this->db->query($sql); 
            if($result=$resultado) {
    
            $filas=mysqli_num_rows($resultado);
            }
    
            if($filas<1) {
                header("location:../index.php");
            }else{
                session_start();
                $sql = "SELECT * FROM users WHERE user='$username' AND password='$password';";
                $resultado = $this->db->query($sql);
                $a = mysqli_fetch_array($resultado);
                $b = $a['user'];
                $z = $a['Password']; 
    
                $_SESSION['username'] = $b;
                $_SESSION['Password'] = $z;
                header("location:../v/user.php");
            }
        }
        
    }
?>