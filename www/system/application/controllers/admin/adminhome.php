<?php
/**
 * Auth Controller Class
 *
 * Security controller that provides functionality to handle logins, logout and registration
 * requests.  It also can verify the logged in status of a user and his permissions.
 *
 * The class requires the use of the DB_Session and FreakAuth libraries.
 *
 * @package     FreakAuth
 * @subpackage  Controllers
 * @category    Administration
 * @author      Daniel Vecchiato (danfreak)
 * @copyright   Copyright (c) 2007, 4webby.com
 * @license		http://www.gnu.org/licenses/lgpl.html
 * @link 		http://4webby.com/freakauth
 * @version 	1.1
 *
 */

class AdminHome extends Controller
{	
	/**
	 * Initialises the controller
	 *
	 * @return Admin
	 */
    function AdminHome()
    {
        parent::Controller();
        
        ////////////////////////////
		//CHECKING FOR PERMISSIONS
		///////////////////////////
		//-------------------------------------------------
        //only 'admin' and 'superadmin' can manage users
        
        $this->freakauth_light->check('admin');
        
        //-------------------------------------------------
        //END CHECKING FOR PERMISSION
        
        $this->_container = $this->config->item('FAL_template_dir').'template_admin/container';
        
    }
	
    	// --------------------------------------------------------------------
	
    /**
     * Displays home page of Admin Console
     *
     */
    function index()
    {	   
    	$data['heading']='Admin Console home';
    	$data['action']='Welcome to the admin console';
        $data['content']="<p>Here You can  manage users and administrators</p>"
						 ."<p>Use the menu above to perform different management operations</p>"
						 ."<p>You can also implement this administration console and build the necessary administration stuff for you custom controllers (i.e. blog posts, news, gallery etc.)</p>"
						 ."<p>You just need to put your controllers inside the following directory</p>"
						 ."<code>application/controllers/admin/</code>"
						 ."<p>Check the structure of the file <b>controllers/admin/example.php</b> to understand how to restrict the administration controllers</p>";
		$data['content'].='<p>;o) <b>Happy coding!</b></p>';
        
		$data['page'] = $this->config->item('FAL_template_dir').'template_admin/example/example';
						 
		$this->load->vars($data);
	        
	    $this->load->view($this->_container);
        
    }
    

}