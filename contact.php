<?php
$msg='* = required field';
if(isset($_GET['msg']) && $_GET['msg']=='missing-variables') {
	$msg='Please verify fields and try again.';
} else if(isset($_GET['msg']) && $_GET['msg']=='invalid-email-address') {
	$msg='Please enter a valid e-mail address and try again.';
} else if(isset($_GET['msg']) && $_GET['msg']=='mail-failed') {
	$msg='There was an error sending your message. Please try again.';
} else if(isset($_GET['msg']) && $_GET['msg']=='mail-sent') {
	$msg='Message sent.';
}
?>
