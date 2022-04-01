<?php

namespace App\Class;


class Utilitat
{
   public static function errorMessage($e)
{
    if (!empty($e->errorInfo[1])) {
        switch ($e->errorInfo[1]) {
            case 1062:
                $mensaje = ["Registre duplicat",1062];
                break;

            case 1452:
                $mensaje = ["Registre amb elements relacionats",1452];
                break;

                case 1451:
                    $mensaje = ["Registre amb elements relacionats",1451];
                    break;
                    case 2:
                        $mensaje = ["Problemes a la conexio amb elservidor",2];
                        break;
            default:
                $mensaje = $e->errorInfo[1] . ' - ' . $e->errorInfo[2];
                break;
        }
    } else {
        switch ($e->getCode()) {
            case 1044:
                $mensaje = ["Usuari o contrasenya incorrecte",1044];
                break;
            case 1049:
                $mensaje = ["Base de dades desconeguda",1049];
                break;

            case 2002:
                $mensaje = ["No es troba el servidor",2002];
                break;
            default:
                $mensaje = $e->getCode() . ' - ' . $e->getMessage();
                break;
        }
    }

    return $mensaje;
}
}
