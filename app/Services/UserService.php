<?php

namespace App\Services;

use App\User;

class UserService
{
    private $_user;

    public function __construct(  )
    {
        
        $this->_user = new User();
    }



    public function findUserByID( $id ) {

        return $this->_user->find( $id );
    }

    public function deleteUserByID( $id ) {

        $user  = $this->findUserByID( $id );
        if(isset($user)) {
            return $user->delete();
        }
        return false;
    }


}
