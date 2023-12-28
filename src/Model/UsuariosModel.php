<?php
namespace App\Model;

use App\Model\Conexion;
use PDO;

class UsuariosModel extends Conexion
{
    public static function IniciarSesion($usuario, $clave){
        session_start();
        $con = new Conexion;
        $sql = "SELECT usu_id, usu_nombre FROM Usuarios WHERE usu_usuario = ? AND usu_clave = ?";
        $stm = $con->conexion()->prepare($sql);
        $stm->bindParam(1, $usuario, PDO::PARAM_STR);
        $stm->bindParam(2, $clave, PDO::PARAM_STR);
        $stm->execute();
        $res=$stm->fetch(PDO::FETCH_ASSOC);

        if (!empty($res)) {
            $_SESSION['usu_id'] = $res['usu_id'];
            $_SESSION['usu_nombre'] = $res['usu_nombre'];
            return true;
        } else {            
            return false;
        }
    }
}
?>