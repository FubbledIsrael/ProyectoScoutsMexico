<?php
    include '../module/user.php';
    $user = new User();

    if($_POST['function'] == "login"){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user->getUserEmail($email);
        //if(password_verify($password,$user->users['password'])){
        if($password == $user->users['password']){
            session_start();
            $_SESSION['id_user'] = $user->users['id_user'];
                
            echo json_encode(array('error'=>0,'role'=>$user->users['id_role']));
        }
        else
            echo json_encode(array('error'=>1));

        $user->close();
    }

    if($_POST['function'] == "logout"){
        session_start();
        session_destroy();
        exit();
    }
?>