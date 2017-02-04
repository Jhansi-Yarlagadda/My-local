<!DOCTYPE HTML>  
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

<?php
$name = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = Myfunction($_POST["name"]);
       $comment = Myfunction($_POST["comment"]);
  }

function Myfunction($data) {
    $data = htmlspecialchars($data);
  return $data;

}

echo "<h2>Hello,  $name !</h2>";
echo $comment;
?>

<h1> Contact Form </h1> <br>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
 <font color="red"><span class="error">*</span></font>  Please enter you Name:<br><input type="text" name="name" value="">
    <br><br>
 <font color="red"><span class="error">*</span></font>  Please enter you Message: <br><textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
    <input type="submit" name="submit" value="Submit">  
</form>


</body>
</html>