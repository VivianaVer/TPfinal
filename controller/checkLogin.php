<?php
$user = $_POST["user"];
$pass = $_POST["pass"];

//echo $user;
//echo $pass;

require_once("../DAO/UsuarioDAO.php");

$userDAO = new UsuarioDAO();
$existeUserYPass=$userDAO->validarUserYPass($user, $pass);
    if ($existeUserYPass) {
    header("Location:../view/home.html");
        } else {
            header("Location:../view/loginError.html");
    }
    
?>

