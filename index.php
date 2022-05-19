<?php
// Display error message cause by your PHP scripts 调试代码
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors',1);

//Tell the browser to load or include a file named "mvc.php" from the "applications" folder into the current file
require 'application/mvc.php';
?>