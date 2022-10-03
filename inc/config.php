<?php 
// 	We use a constant (basically the same as a variable (stores a value)) to set the Base URL. We will use this to resolve all links as absolute URL's instead of relative URL's. If we do this correct, then we will not have any troubles pathing to all our files.

// Make sure the path starts with http:// and ends with the trailing slash
  
// If you copy/paste this script into other projects and fail to change this, then you may have links going back to the former project. Copy/Paste/FAIL !
if (!defined("BASE_URL")) 
{
	// change username and project-name
	define("BASE_URL", "http://localhost/cd-catalog/");
}
?>