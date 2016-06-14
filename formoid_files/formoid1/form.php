<?php

define('EMAIL_FOR_REPORTS', 'o.maranza@gmail.com');
define('RECAPTCHA_PRIVATE_KEY', '@privatekey@');
define('FINISH_URI', 'http://');
define('FINISH_ACTION', 'message');
define('FINISH_MESSAGE', 'Thanks for considering that cup of coffee over a chat.');
define('UPLOAD_ALLOWED_FILE_TYPES', 'doc, docx, xls, csv, txt, rtf, html, zip, jpg, jpeg, png, gif');

define('_DIR_', str_replace('\\', '/', dirname(__FILE__)) . '/');
require_once _DIR_ . '/handler.php';

?>

<?php if (frmd_message()): ?>
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-default-skyblue.css" type="text/css" />
<span class="alert alert-success"><?php echo FINISH_MESSAGE; ?></span>
<?php else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-default-skyblue.css" type="text/css" />
<script type="text/javascript" src="<?php echo dirname($form_path); ?>/jquery.min.js"></script>
<form class="formoid-default-skyblue" style="background-color:#fff9ed;font-size:14px;font-family:'Open Sans','Helvetica Neue','Helvetica',Arial,Verdana,sans-serif;color:#666666;max-width:480px;min-width:150px" method="post"><div class="title"><h2>Contact Us</h2></div>
	<div class="element-separator"><hr><h3 class="section-break-title"></h3></div>
	<div class="element-name<?php frmd_add_class("name"); ?>"><label class="title">Name</label><span class="nameFirst"><input  type="text" size="8" name="name[first]" /><label class="subtitle">First</label></span><span class="nameLast"><input  type="text" size="14" name="name[last]" /><label class="subtitle">Last</label></span></div>
	<div class="element-separator"><hr><h3 class="section-break-title"></h3></div>
	<div class="element-email<?php frmd_add_class("email"); ?>" title="Please Provide Your Email."><label class="title">Email<span class="required">*</span></label><input class="large" type="email" name="email" value="" required="required"/></div>
	<div class="element-separator"><hr><h3 class="section-break-title"></h3></div>
	<div class="element-select<?php frmd_add_class("select"); ?>"><label class="title">Pricing</label><div class="large"><span><select name="select" >

		<option value="R250-R500">R250-R500</option>
		<option value="R500-R750">R500-R750</option>
		<option value="R750-R1000">R750-R1000</option></select><i></i></span></div></div>
	<div class="element-separator"><hr><h3 class="section-break-title"></h3></div>
	<div class="element-textarea<?php frmd_add_class("textarea"); ?>" title="What would you like to say to us?"><label class="title">Your Message.<span class="required">*</span></label><textarea class="medium" name="textarea" cols="20" rows="5" required="required"></textarea></div>
<div class="submit"><input type="submit" value="Submit"/></div></form><script type="text/javascript" src="<?php echo dirname($form_path); ?>/formoid-default-skyblue.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>