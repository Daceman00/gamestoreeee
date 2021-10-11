<?php 

$konekcija=mysqli_connect('localhost','root','','fpmoz162021');
// $konekcija=mysqli_connect('localhost','fpmoz162021','csdigital2021','fpmoz162021');

if(!$konekcija){
    die ("Conection failed!" . mysqli_connect_error());
}

?>