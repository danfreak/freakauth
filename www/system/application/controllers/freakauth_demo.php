<?php
class Freakauth_demo extends Controller {
	
	function Freakauth_demo ()
	{
		parent::Controller();
		
		$this->_container = $this->config->item('FAL_template_dir').'template/container';
		
	}
	
	function index()
	{		
		$data['heading'] = 'FreakAuth';
        
        $data['message']='<h1>Welcome to FreakAuth_light&copy;</h1>';
        $data['message'] .='<p><b>Characteristics</b> and <b>Documentation</b>: visit <a href="http://www.4webby.com/freakauth" target="_blank">4webby.com/freakauth'."\n";
		$data['message'].='</a></p>'."\n";
		$data['message'].='<div id="flashMessage"><p>If you think that this library saved you time, helped you '."\n";
        $data['message'].=' make money quicker, or you simply like it, please help its future development and maintenance by making a <a href="http://www.4webby.com/freakauth/donate.html" target="_blank">donation</a>.</p>';
		$data['message'].='<h2>WE ARE DEVELOPING FOR YOU!</h2></div> ';
        $data['message'].="<p>To check that everything is ok for <b>FreakAuth_light&copy;</b> to work properly and to create the first system superadmin go to the ".anchor('installer').". </p>";
        $data['message'].="<p class=\"important\">IMPORTANT:<br /> after creating the superadmin #1 REMOVE THE ".anchor('installer', 'INSTALLER').": (system/application/controllers/installer.php)</p>";
		$data['message'].="<br /><span class=\"important\">For frontend login you must register as user ".anchor($this->config->item('FAL_register_uri'), 'here')."</span>";
        
        $this->load->vars($data);

		$this->load->view($this->_container);
		
		//$this->output->enable_profiler(TRUE);
	}
}
?>