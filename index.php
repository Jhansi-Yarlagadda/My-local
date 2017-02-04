<!DOCTYPE html>
<html lang ="en">
<head>
<meta charset ="utf-8">
<meta http-euiv ="X-UA-compatible" content ="IE=edge">
<meta name="viewport" content ="width=device-width, initial-scale=1">
<style>
p.thick {
    font-weight: bold;
}
</style>
<title>PHP Layout</title>
</head>
<body>
<center><?php ob_start();
require ("page-begin.php");
 ob_end_clean(); 
 my_test(); ?>
<br>
<br>
<font color="green"><h1><i>Page is formed from included files.</i> </h1></font>
<p class="thick" >This is Jhansi Yarlagadda. </p>
<?php
ob_start();
 include 'page-end.php';
ob_end_clean(); 
 my_test1();
 ?>
</center>
</body>
</html>