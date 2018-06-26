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

class User
{
    public static function login($email, $pass)
    {
        $sql = new Sql();

        $results = $sql->select("SELECT * FROM st_user u INNER JOIN st_login l ON u.	idST_USER = l.ST_USER_idST_USER 													 
													 WHERE u.ST_UserEmail = :EMAIL", array(
													     ":EMAIL"=>$email
        ));


        if(count($results)===0)
        {
            throw new \Exception("Usuário inexistente ou senha inválida.");
        }

        $data = $results[0];

        if(password_verify($pass,$data["ST_LoginPass"]) === true)
        {
            $user = new User();

            $user->setiduser($data["iduser"]);
        }
    }
}