<html>  
<body>  
<form method="post">  
Enter First Number: &nbsp &nbsp
<input type="number" name="number1" /><br><br>  
Enter Second Number:  
<input type="number" name="number2" /><br><br>  
<input  type="submit" name="submit" value="SWAP">  
</form>  
<?php  
    if(isset($_POST['submit']))  
    {  
        $number1 = $_POST['number1'];  
        $number2 = $_POST['number2'];       
echo "First Number: ".$number2;
echo "<br>";
echo "Second Number: ".$number1;
}  
?>  
</body>  
</html>  