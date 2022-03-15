<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="stylesheet" href="styles/default.css">
	<title>
	Sydney M. Moncur WEB250 Syd's Salads Page
	</title>
</head>	
	
<body>
	<header>
		<h1> Syd's Salads</h1>
		
				<p id="links">
				   <a href = "?p=toc.php">Home</a> | 
				   <a href = "?p=brand.php">Brand</a> |
				   <a href = "?p=contract_text.php">Contract</a> |
				   <a href = "?p=introduction_text.php">Introduction</a> |
 				   <a href = "?p=onepageform.php">One Page Form</a> |
                   <a href="/web250-main/carshop/samsusedcars.html">Car Shop</a>                 
			  </p>
	  </header>
	

	<hr />
	

	<h2>Welcome to Syd's Salads!</h2>


	


	 <hr />

			<?php
			$sPage = $_GET["p"] ;
			//echo ("You picked the page: " . $sPage); 
			
			if($sPage == "") {  $sPage = "toc.php"; }
			include($sPage);
			?>
	 <footer>
      <h3>Fresh and Simple!</h3>
	
        <p id="links">
            <a href="https://github.com/smoncur0/web250">Github Account</a> -
            <a href="https://smoncur0.github.io/">Github IO</a> -
            <a href="https://smoncur0.github.io/web250">Github Course</a> - 
            <a href="https://www.freecodecamp.org/smoncur0">FreeCodeCamp</a> -
            <a href="https://www.codecademy.com/profiles/smoncur0">Codecademy</a> -
            <a href="https://jsfiddle.net/user/smoncur0/fiddles/">JSFiddle</a> -
            <a href="https://www.linkedin.com/in//">LinkedIn</a> 

        </p>
            
        <p>
	     Designed by Marie Tech &copy; 2022
        </p>

      
            <a href="https://validator.w3.org/check?uri=" id="validation_link_html"><img src= "images/html.png" alt="Validate HTML!"
                style= "border: 0; width: 88px; height: 31px" /></a> 
            <a href="https://jigsaw.w3.org/css-validator/check/referer?uri=" id="validation_link_css"><img src= "images/css.png" alt="Validate CSS!"
                style= "border: 0; width: 88px; height: 31px" /></a> 
<script>
		document.getElementById("validation_link_html").setAttribute("href", "https://validator.w3.org/check?uri=" + location.href);
		document.getElementById("validation_link_css").setAttribute("href", "https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
</script>
      
	
</footer>
</body>	
</html>
