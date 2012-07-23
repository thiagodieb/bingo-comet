<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Sortear</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  </head>
  <body>
	<form> 
		numero:<input type='text' name='num' > 
		<input type='submit'>
	</form>
</body>
</html>
<?php
$filename  = dirname(__FILE__).'/resultado.txt';
$numero = isset($_GET["num"]) ? $_GET["num"] : 0 ; 
file_put_contents($filename,$numero);	
?>
