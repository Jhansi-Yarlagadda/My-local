
<!DOCTYPE html>
<html>
<head> 
	<style>

input[type=text], select {
    width: 20%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box; }

    input[type=submit] {
    width: 20%;
    background-color: #FF4500;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
 </head>
<body>

<center><h1> Conversion Calculator </h1>
<p> Convert milliliters to another unit .....
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
	
   <font color="red"><span class="error">*</span></font> Milliliters:  <input  type="number" name = "Milliliter"min ="0" size="40" required= ""> <br>
    <br> to...
    <input type="radio" name="conver" value="Milliliter_Ounes"/>Ounes
    <input type="radio" name="conver" value="Milliliter_Liters"/>Liters
     <input type="radio" name="conver" value="Milliliter_Gallons"/>Gallons 
     <br><br>
    <input type="submit" name="submit" value="submit">
</center>
</form>
<?php
$conver = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $conver = Myfunction($_POST["conver"]);
       $Milliliter = Myfunction($_POST["Milliliter"]);}


	if ($conver == "Milliliter_Ounes") {          
    $value= $Milliliter* 0.033814; 
      
}
		else if ($conver=="Milliliter_Liters")
		{
		$value= $Milliliter*0.001; 
		

}   else 
    {
   
    $value= $Milliliter*0.000264172;
    
    }  
 

function Myfunction($data) {
    $data = htmlspecialchars($data);
  return $data;

}

echo "<h2>The conversion value is ,  $value</h2>";    

?>
</body>
</html>
