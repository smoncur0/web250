<html>
<head>
    <meta charset="utf-8">
    <title>Sam's Used Cars</title>
   </head>

   
<body>
    
<h1>Sam's Used Cars</h1>
<h3>Complete Inventory</h3>
<?php include 'db.php';
$query = "SELECT * FROM inventory ORDER BY Make";
/* Try to query the database */
if ($result = $mysqli->query($query)) {
   // Don't do anything if successful.
}
else
{
    echo "Sorry, a vehicle with VIN of $vin cannot be found " . mysql_error()."<br>";
}
// Loop through all the rows returned by the query, creating a table row for each
while ($result_ar = mysqli_fetch_assoc($result)) {
    $year = $result_ar['YEAR'];
	$make = $result_ar['Make'];
    $model = $result_ar['Model'];
    $trim = $result_ar['TRIM'];
    $color = $result_ar['EXT_COLOR'];
    $interior = $result_ar['INT_COLOR'];
    $mileage = $result_ar['MILEAGE']; 
    $transmission = $result_ar['TRANSMISSION']; 
    $price = $result_ar['ASKING_PRICE'];
	$image = $result_ar['PRIMARY_IMAGE'];
}
echo "<p>$color $year $make $model <br>VIN: $vin</p>";
echo "<p>Asking Price: $".number_format($price,0) ."</p>";
echo "<IMG src= 'images/$image'>";
   
?>

<br/><br/>
<form action="upload_file.php" method="post" enctype="multipart/form-data">
<label for="file">Filename:</label>
<input type="file" name="file" id="file"><br>
<input name="VIN" type="hidden" value= "<?php echo "$vin" ?>" />
<input type="submit" name="submit" value="Submit">
</form>
<br/><br/>

<?php
$query = "SELECT * FROM images WHERE VIN='$vin'";
/* Try to query the database */
if ($result = $mysqli->query($query)) {
   // Got some results
   // Loop through all the rows returned by the query, creating a table row for each
while ($result_ar = mysqli_fetch_assoc($result)) {
    $image = $result_ar['ImageFile'];
    echo "<img src='images/$image'>  " ;
}
}
$mysqli->close();
?>
</body>
 
</html>
