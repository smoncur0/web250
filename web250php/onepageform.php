<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" type="text/css" href="styles/default.css">


<head>
<title> Syd's Salads - WEB250 -  One Page Form </title>
</head>

<body>

  <main>
	 <header>
		<h2>  One Page Form </h2>

<br />
	<p style="text-align: center; color: rgba(170, 114, 30, 0.897); font-style: italic;"> 'Post' Form </p> <br />

<form id="postGreens" action="" method="post" style="text-align: center;
	background-color: rgba(202, 143, 75, 0.781);
    padding: 1px 20px;
    margin: auto;
    margin-top: 5px;
    border: 1px solid rgba(170, 114, 30, 0.897); 
    -moz-box-shadow: 3px 3px 8px rgb(7, 104, 47);  
    -webkit-box-shadow: 3px 3px 8px rgb(8, 78, 46);  
    box-shadow: 3px 3px 8px rgba(61, 87, 55, 0.623);  
    width: 400px;
    height: 300px;
    text-align: center;">


    First Name: <input name="first" type="text" /><br />
	<br />
	Last Name: <input name="last" type="text" /><br />
	<br />
     Kale <input name="Greens1" type="checkbox" value="Kale" /><br />
	<br />
	 Iceberg<input name="Greens2" type="checkbox" value="Iceberg"/><br />
	<br />
    <input name="Submit1" type="submit" value="submit" /><br />
	&nbsp;
 </form>

  <!-- The PHP outputs the form results using the post method -->
            <?php 
            if (isset($_POST["Submit1"])) { 
            $first = $_POST["first"]; 
            $last = $_POST["last"]; 
            $Greens1 = $_POST["Greens1"];
            $Greens2 = $_POST["Greens2"];
            echo "Your first name is ". $first  ."<br>"; 
            echo "Your last name is ". $last."<br>";  
            echo "You chose ". $Greens1."<br>";   
            echo "You chose ". $Greens2."<br>";     
            } 
            ?> 
 <hr/> 

  <p style="text-align: center; color: rgba(170, 114, 30, 0.897); font-style: italic;"> 'Get' Form </p> <br />

 <form id="getGreens" action="" method="get" style="text-align: center;
	background-color: rgba(202, 143, 75, 0.781);
    padding: 1px 20px;
    margin: auto;
    margin-top: 5px;
    border: 1px solid rgba(170, 114, 30, 0.897); 
    -moz-box-shadow: 3px 3px 8px rgb(7, 104, 47);  
    -webkit-box-shadow: 3px 3px 8px rgb(8, 78, 46);  
    box-shadow: 3px 3px 8px rgba(61, 87, 55, 0.623);  
    width: 400px;
    height: 300px;
    text-align: center;">


    First Name: <input name="first" type="text" /><br />
	<br />
	Last Name: <input name="last" type="text" /><br />
	<br />
     Kale <input name="Greens1" type="checkbox" value="Kale" /><br />
	<br />
	 Iceberg<input name="Greens2" type="checkbox" value="Iceberg"/><br />
	<br />
    <input name="Submit1" type="submit" value="submit" /><br />
	&nbsp;
 </form>

 <!-- The PHP outputs the form results using the post method -->
       <?php 
            if (isset($_GET["Submit1"])) { 
            $first = $_GET["first"]; 
            $last = $_GET["last"]; 
            $Greens1 = $_GET["Greens1"];
            $Greens2 = $_GET["Greens2"];
            echo "Your first name is ". $first  ."<br>"; 
            echo "Your last name is ". $last."<br>";  
            echo "You chose ". $Greens1."<br>";   
            echo "You chose ". $Greens2."<br>";     
            } 
     ?> 
<hr/>
 


</body>

</html>
