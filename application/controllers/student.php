<?php 
	if ( ! defined('BASEPATH')) 
		exit('No direct script access allowed');
	
/*default controller*/
include_once 'User.php';

class Student extends User {
	function __construct() {
        parent::__construct();
	}
}