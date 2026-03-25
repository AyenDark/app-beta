<?php
include('../config/database.php');
// get data

$f_name =      $_POST['fname'];
$l_name =      $_POST['lname'];
$e_mail =      $_POST['email'];
$p_sword =     $_POST['pasword'];
$enc_pass =    md5($p_sword);
$m_phone =     $_POST['mphone'];


//query to insert into sql
$sql = "INSERT INTO users_model ( first_name, last_name, email, mobile_phone, pasword )
VALUES('$f_name','$l_name','$e_mail','$m_phone','$enc_pass')" ;

// ejecutar 

$result = pg_query($sql) ;




?>