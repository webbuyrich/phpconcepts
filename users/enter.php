<?php 
// Print a greeting if the form was submitted
if($_POST['user']){
	print 'Hello, ';
	// Print what was submitted
	print $_POST['user'];
	print '!';
} else {
	// Otherwise print the form	
	print <<<_HTML_
		<form method="POST" action="$_SERVER[PHP_SELF]">
			Your Name:<input type="text" name="user"/>
			<br />
			<button type="submit">Say Hello</button>
		</form>
	_HTML_;
}
?>