 <?php
$mysqli = new mysqli('sql110.epizy.com', 'epiz_30988534', 'MkWcX4ZvqpvyJk7', 'epiz_30988534_cars' );
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
//select a database to work with
$mysqli->select_db("Cars");
 
?>
