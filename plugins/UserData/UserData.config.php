<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); }

class UserData_config {
	
	
/****** Plugin Variables ******/
	public $pluginType = "api";
	public $pluginName = "UserData";
	public $title = "Get User Data";
	public $version = 1.0;
	public $author = "Brint Paris";
	public $license = "UniFaction License";
	public $website = "http://unifaction.com";
	public $description = "Check if a user is registered on the site.";
	
	public $data = array();
	
}