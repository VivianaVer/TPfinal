<?php 

class UsuarioDAO{
    public function validarUserYPass($user,$pass){
        require_once("../dataBase/ConexionDB.php");
        $ConexionDB = new ConexionDB("localhost","root","","cacproyecto");
        $ConexionDB->conectar();

        $sql = "SELECT * FROM usuarios WHERE usuario ='$user' and clave = '$pass'";
        $ConexionDB->ejecutar($sql);

        return $ConexionDB->cantFilas() == 1;
            }
    }


?>