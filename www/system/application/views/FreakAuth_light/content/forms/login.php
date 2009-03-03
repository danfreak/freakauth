<fieldset><legend accesskey="D" tabindex="1"><?=$heading?></legend>
<?=isset($this->fal_validation->login_error_message) ? $this->fal_validation->login_error_message : ''?>
<?=form_open($this->uri->uri_string(), array('id' => 'login_form'))?>
<!--USERNAME-->
	<p><label for="user_name"><?=$this->lang->line('FAL_user_name_label')?>:</label>
	<?=form_input(array('name'=>'user_name', 
	                       'id'=>'user_name',
	                       'maxlength'=>'30', 
	                       'size'=>'30',
	                       'value'=>''))?>
    <?=(isset($this->fal_validation) ? $this->fal_validation->{'user_name'.'_error'} : '')?>
   </p>
    <!--PASSWORD-->
	<p><label for="password"><?=$this->lang->line('FAL_user_password_label')?>:</label>
	<?=form_password(array('name'=>'password', 
	                       'id'=>'password',
	                       'maxlength'=>'30', 
	                       'size'=>'30',
	                       'value'=>''))?>
    
    <?=(isset($this->fal_validation) ? $this->fal_validation->{'password'.'_error'} : '')?>
    <span class="note"><?=anchor($this->config->item('FAL_forgottenPassword_uri'), $this->lang->line('FAL_forgotten_password_label'))?></span></p>	
    <!--CAPTCHA (security image)-->
	<?php
	if ($this->config->item('FAL_use_captcha_login'))
	{?>
	<p><label for="security"><?=$this->lang->line('FAL_captcha_label')?>:</label>
	<?=form_input(array('name'=>'security', 
	                       'id'=>'security',
	                       'maxlength'=>'45', 
	                       'size'=>'45',
	                       'value'=>''))?>
    <?=(isset($this->fal_validation) ? $this->fal_validation->{'security'.'_error'} : '')?>
    <?=$this->load->view($this->config->item('FAL_captcha_img_tag_view'), null, true)?></p>
    <?php }?>
    <!-- END CAPTCHA (security image)-->
    
	<p><label>
	<?=form_submit(array('name'=>'login', 
	                     'id'=>'login', 
	                     'value'=>$this->lang->line('FAL_login_label')))?>
	</label></p>
    <?php
    if ($this->config->item('FAL_allow_user_registration'))
	{?>
	<p><?=anchor($this->config->item('FAL_register_uri'), $this->lang->line('FAL_register_label'))?></p>
	<?php }?>
<?=form_close()?>
</fieldset>