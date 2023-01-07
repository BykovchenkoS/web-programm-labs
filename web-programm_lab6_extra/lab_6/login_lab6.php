<?php require_once("../admin/includes/connection.php"); ?>


<?php
if (isset($_POST['username']) && $_POST['username'] && isset($_POST['password']) && $_POST['password']) {
    $username=$_POST['username'];
    $password=$_POST['password'];
    $type =  $_POST['type'];
    $query =mysqli_query($mysqli, "SELECT * FROM users WHERE username='".$username."' AND password='".$password."' AND admin = ".$type);
            $numrows=mysqli_num_rows($query);

            if($numrows!=0){
                while($row=mysqli_fetch_assoc($query)){
                    $dbusername=$row['username'];
                    $dbpassword=$row['password'];
                }

                if($username == $dbusername && $password == $dbpassword){
                    $_SESSION['session_username']=$username;	
                   
                    echo json_encode(array('success' => 1));
                }

                else {
                    echo json_encode(array('success' => 0));
                }
            }
            else {
                echo json_encode(array('success' => 0));
            }
 
} else {
    echo json_encode(array('success' => 0));
}
?>

