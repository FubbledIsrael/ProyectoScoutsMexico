<?php
    include 'db.php';

    class User{
        private $conexion;
        private $query = "SELECT id_user, users.email, users.first_name, users.last_name, id_role, roles.name, roles.description FROM `user_role` INNER JOIN users ON users.id = user_role.id_user INNER JOIN roles ON roles.id = user_role.id_role";
        var $users;

        public function __construct(){
            $this->conexion = Conexion::connect();
        }

        function getUserEmail($email){
            $sql = $this->conexion->prepare("SELECT id_user, users.email, users.password, id_role FROM `user_role` INNER JOIN users ON users.id = user_role.id_user INNER JOIN roles ON roles.id = user_role.id_role WHERE users.email = ?"); 
            $sql->bind_param("s", $email);    
            $sql->execute();
            $this->users = $sql->get_result()->fetch_assoc();
            $sql->close();
        }

        function close(){
            $this->conexion->close();
        }
    }
?>