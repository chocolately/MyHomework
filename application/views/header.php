<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    	<base href="<?= base_url() ?>" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>My Homework</title>
        <link href="css/theme.css" rel="stylesheet" type="text/css" />
        <link href="css/<?= isset($css) ? $css : "index" ?>.css" rel="stylesheet" type="text/css" />
	    <div class="userInfo">
	    	<div class="userName_info" ><?= $this->session->userdata('user_name')?></div>
	        <img class="userImage_info" src="img/<?= $this->session->userdata('role')?>.jpg"></img>
	    </div>
    </head>

    <body>
    	<div class="clear"></div>