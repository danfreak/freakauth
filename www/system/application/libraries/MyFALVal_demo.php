<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Use it to add functions to the FAL_validation.php class
 * or to overwrite its methods
 *
 */
class MyFALVal extends FAL_validation 
{
    // --------------------------------------------------------------------
    /**
     * class constructor
     *
     * @return MyFALVal
     */
    function MyFALVal()
    {
    	parent::FAL_validation();
    }
    
    // -------------------------------------------------------------------- 
    /**
     * Replaces the method login_check()
     *
     * @param unknown_type $username_login
     * @param unknown_type $password_login
     */
    /*function login_check($username_login, $password_login)
	{
    	//write here what you want
    }*/
}