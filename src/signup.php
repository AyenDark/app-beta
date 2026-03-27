<?php
include('../config/database.php');
// get data

$f_name =      $_POST['fname'];
$l_name =      $_POST['lname'];
$e_mail =      $_POST['email'];
$p_sword =     $_POST['pasword'];
$m_phone =     $_POST['mphone'];

//email 
$check_email = "SELECT email FROM users_model WHERE email = '$e_mail'";
$res_email = pg_query($local_conn, $check_email);

if (pg_num_rows($res_email) > 0) {
    echo "Error: El correo electrónico '$e_mail' ya está registrado. Por favor, use uno diferente.\n";
    exit();
}





//query to insert into sql
$sql = "INSERT INTO users_model ( first_name, last_name, email, mobile_phone, pasword )
VALUES('$f_name','$l_name','$e_mail','$m_phone','$p_sword')" ;

// ejecutar 

$result = pg_query($sql) ;




?>