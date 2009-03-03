<?php
class Example extends Controller {
    
    function Example()
    {
         parent::Controller();
		 
         //thanks to this line of code you could protect this controller entirely
         //$this->freakauth_light->check();
         
         $this->_container = $this->config->item('FAL_template_dir').'template/container';
    }
    
	function index()
	{
        $data['heading'] = 'FreakAuth examples';
        $data['page'] = $this->config->item('FAL_template_dir').'template/examples/examples';
        $this->load->vars($data);
        $this->load->view($this->_container);
	}
     
	function basic()
	{
        $data['heading'] = 'FreakAuth examples';
        $data['page'] = $this->config->item('FAL_template_dir').'template/examples/example';
        $this->load->vars($data);
        $this->load->view($this->_container);
	}
    
	function conditions()
	{
        $data['heading'] = 'FreakAuth examples';
        $data['page'] = $this->config->item('FAL_template_dir').'template/examples/conditions';
        $this->load->vars($data);
        $this->load->view($this->_container);
	}
    
	function restricted_to_users()
	{
        $this->freakauth_light->check();
        
        $data['heading'] = 'FreakAuth examples';
        $data['page'] = $this->config->item('FAL_template_dir').'template/examples/restricted';
        $this->load->vars($data);
        $this->load->view($this->_container);
	}
    
	function restricted_to_admins()
	{
        $this->freakauth_light->check('admin');
        
        $data['heading'] = 'FreakAuth examples';
        $data['page'] = $this->config->item('FAL_template_dir').'template/examples/restricted';
        $this->load->vars($data);
        $this->load->view($this->_container);
	}
    
	function restricted_to_admins_only()
	{
        $this->freakauth_light->check('admin', true);
        
        $data['heading'] = 'FreakAuth examples';
        $data['page'] = $this->config->item('FAL_template_dir').'template/examples/restricted';
        $this->load->vars($data);
        $this->load->view($this->_container);
	}
}
?>