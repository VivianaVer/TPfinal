<?php 
class UsuarioDAO {
        public function validarUserYPass($user,$pass){
            require_once("../dataBase/ConexionDB.php");
            $conexionDB = new ConexionDB("localhost","root","","cacproyecto");
            $conexionDB->conectar();

            $sql = "SELECT * FROM usuarios WHERE usuario ='$user' and clave = '$pass'";
            $conexionDB->ejecutar($sql);

            return $conexionDB->cantFilas() == 1;
            }
        public function listarUsuarios(){
            require_once("../dataBase/ConexionDB.php");
            require_once("../model/Usuario.php");
            $conexionDB = new ConexionDB("localhost", "root", "", "cacproyecto");
            $conexionDB->conectar();
            $result = $conexionDB->ejecutar("SELECT * FROM usuarios");
            
            while($usuario=$result->fetch_assoc()){
            $usuObj = new Usuario($usuario["idusuario"], $usuario["usuario"], $usuario["clave"]);
            $listUsu[] = $usuObj;
        }
        return $listUsu; 
        }
    }
    

?>