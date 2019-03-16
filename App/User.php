<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 2019-03-15
 * Time: 21:49
 */

namespace App;


class User
{

    public static function find ($userId)
    {

        if ($userId >= 1) {
            return true;
        }
        else {
            return false;
        }

    }
}