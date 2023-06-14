<?php

class Auth
{
    /**
     * Return the user authentication status
     * 
     * @return boolean True if a user is logged in, false otherwise 
     */
    public static function isLoggedIn()
    {
        return (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in']);
    }

    /**
     * Require the user to be logged in, stopping with an unauthorised message if not
     * 
     * @return void 
     */
    public static function requireLogin()
    {
        if (!static::isLoggedIn()) {
            die('unauthorized');
        }
    }

    /**
     * Log in using the session
     * 
     * @param array $sessionVars An associative array to set in the session variable
     * 
     * @return void
     */
    public static function login($sessionVars)
    {
        session_regenerate_id(true);

        $_SESSION['is_logged_in'] = true;

        foreach ($sessionVars as $key => $value) {
            $_SESSION[$key] = $value;
        }
    }


    public static function hasVoted()
    {
        return isset($_SESSION['voted']) && $_SESSION['voted'];
    }

    /**
     * Log out using the session
     * 
     * @return void 
     */
    public static function logout()
    {
        // clear the session global variable by setting it to a new array. 
        $_SESSION = array();

        // then check if the session is using cookies. 
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(
                session_name(),
                '',
                time() - 42000,
                $params['path'],
                $params['domain'],
                $params['secure'],
                $params['httponly']
            );
        }

        session_destroy();
    }
}
