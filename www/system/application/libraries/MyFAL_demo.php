<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Use it to add functions to the Freakauth_light.php class
 * or to overwrite its methods
 *
 */
class MyFAL extends Freakauth_light 
{
    // -------------------------------------------------------------------- 
    /**
     * Class constructor
     * not really needed but I wrote it anyway
     *
     * @return MyFAL
     */
    function MyFAL()
    {
    	parent::Freakauth_light();
    }
    
    // -------------------------------------------------------------------- 
    /**
     * this is an example: replaces the password encoding
     *
     * @param string $password
     */
    /*function _encode($password)
    {
    	//your code here
    }*/
}