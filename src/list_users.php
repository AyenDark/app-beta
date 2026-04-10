<?php require("../config/database.php"); ?>

$sql_users = "
SELECT u.first_name||'  '||u.last_name as fullname,
u.email,
u.mobile_phone,
CASE 
    When u.status = true then 'Active' else 'Inactive'
END as status,
profile_photo 
FROM 
     users_model u 

";

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado Usuarios</title>
</head>
<body>
    <h1><br><center>Listado de Usuarios</center><br></h1>   
    <table border="3" align="center" cellpadding="20" cellspacing="1">
        <tr>
            <th>Full Name</th>
            <th>Email</th>
            <th>Mobile Phone</th>
            <th>Status</th>
            <th>Photo</th>
            <th>Options</th>
        </tr>

         <tr>
            <td>Peter</td>
            <td>pey@email.com</td>
            <td>1234</td>
            <td>active</td>
            <td><img src="profile_photos/user_default.jpg" alt="User_Photo" width="50"></td>
            <td> 
                <a href="#">
                    <img src="icons/lapiz.png" alt="Edit" width="20">
                </a>
                &nbsp;&nbsp;
                &nbsp;&nbsp;
                <a href="#">
                    <img src="icons/borrar.png" alt="Delete" width="20">  
                </a>  
            </td>
         </tr>
       
    </table>
</body>





</html>