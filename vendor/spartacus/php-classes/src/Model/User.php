<?php
/**
 * Created by PhpStorm.
 * User: Leo
 * Date: 6/25/2018
 * Time: 9:12 PM
 */

namespace Spartacus\Model;


use Spartacus\DB\Sql;
use Spartacus\Model;

class User extends Model
{

    const SESSIONSTD = "User";
    const SESSIONADM = "UserAdm";

    public static function login($email, $pass, $adm = 0)
    {
        $sql = new Sql();

        if($adm==0)
        {
            $results = $sql->select("SELECT * FROM st_user u INNER JOIN st_login l ON u.	idST_USER = l.ST_USER_idST_USER 													 
													 WHERE u.ST_UserEmail = :EMAIL", array(
                ":EMAIL" => $email
            ));
        }

        if($adm != 0)
        {
            $results = $sql->select("SELECT * FROM st_user u INNER JOIN st_login l  INNER JOIN user_adm a ON u.idST_USER = l.ST_USER_idST_USER 													 
													WHERE u.ST_UserEmail = :EMAIL", array(
                ":EMAIL" => $email
            ));

            var_dump($results);
            exit;
        }


        if(count($results)===0)
        {
            throw new \Exception("Usuário inexistente ou senha inválida.");
        }

        $data = $results[0];

        if(password_verify((string)$pass,$data["ST_LoginPass"]))
        {

            $user = new User();

            $user->setData($data);

            if($adm==0)
            {
                $_SESSION[USER::SESSIONSTD] = $user->getData();
            }else
            {
                $_SESSION[USER::SESSIONADM] = $user->getData();
            }

            return $user;
        }else if ($adm == 0)
        {
            header("location:/spartacus");
            exit;
        }else
        {
            header("location:/");
            exit;
        }
    }

    public static function verifyLoginStd()
    {
        if(
            !isset($_SESSION[User::SESSIONSTD])
            ||
            !$_SESSION[User::SESSIONSTD]
            ||
            !(int)$_SESSION[USER::SESSIONSTD]['idST_USER'] >0
        )
        {

            header("location: /spartacus");
            exit;
        }
    }

    public static function verifyLoginAdm()
    {
        if(
            !isset($_SESSION[User::SESSIONADM])
            ||
            !$_SESSION[User::SESSIONADM]
            ||
            !(int)$_SESSION[USER::SESSIONADM]['idST_USER'] >0
        )
        {

            header("location: /spartacus");
            exit;
        }
    }

    public static function logout()
    {
        $_SESSION[USER::SESSIONSTD] = null;
    }
}