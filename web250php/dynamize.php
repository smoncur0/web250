<style>
        
.entry > img{


        width:550px;
        height:500px;
        
        margin-left: 310px;
        margin-right: 310px;

        text-align: center;
   
}
figcaption{

    text-align: center;
}
.entry{


        display: table;
        
      
}

</style>

<h3>Our Team</h3>


<?php

  $file = 'team.txt';

  $staffFile =  fopen($file, 'r');

  if ($staffFile) {

    while(!feof($staffFile)){

       $display = fgets($staffFile);
       $array = explode('||', $display);

           echo "<table>".


                "<tr>".
                    "<td class='entry'>"."<img src = 'images/".$array[0]. "'>".
                    "<figure>"."<figcaption>"."Image courtesy of Yahoo images"."</figcaption>"."</figure>".
                    "</td>".

                    "<td class='entry'>".
                "<p>". $array[1] . "</p><hr />".
                    "</td>".


             
             "</table>";

    }
  fclose($file);

} else {


        echo "Unable to open file!";

        
}



 ?>

