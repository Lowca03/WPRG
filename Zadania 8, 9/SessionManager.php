<?php

class SessionManager
{
    public function startSession(){
        session_start();
    }

    public function setLoggedInUser($user){
        $_SESSION['loggedInUser'] = $user;
    }
    public function getLoggedInUser()
    {
        return isset($_SESSION['loggedInUser']) ? $_SESSION['loggedInUser'] : null;
    }

    public function destroySession(){
        session_destroy();
    }
}