<?php

class MHerbstVerificationPlugin extends KokenPlugin 
{

	function __construct()
  	{
		$this->require_setup = true;
   	$this->register_hook('before_closing_head', 'add_codes');
  	}

  	function add_codes()
  	{
   	if ($this->data->googlecode != "")
  			echo '<meta name="google-site-verification" content="'.$this->data->googlecode.'" />';
   	if ($this->data->bingcode != "")
    		echo '<meta name="msvalidate.01" content="'.$this->data->bingcode.'" />';
    	if ($this->data->alexaid != "")
    		echo '<meta name="alexaVerifyID" content="'.$this->data->alexaid.'" />';
    	if ($this->data->pinterest != "")
    		echo '<meta name="p:domain_verify" content="'.$this->data->pinterest.'" />';
  	}
}