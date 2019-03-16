<?php
/**
 * User Controller
 * Author: Olexiy Nakhod
 * Date: 2019-03-15
 */

namespace App;


class User
{


    /**
     * find user with userId in the users (simplified to checking value above 1)
     * @param userId
     *
     * @return true or false
     */

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