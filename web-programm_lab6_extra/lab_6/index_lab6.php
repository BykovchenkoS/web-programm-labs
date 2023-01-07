<!DOCTYPE html>
<html>
    <head>
        <?php include("../admin/includes/header.php"); ?>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <?php
            session_start();
        ?>
        <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    </head>
<body>

<div class="container mlogin">
    <div id="login">
        <h1>Log in</h1>
        <form action="" id="loginform" method="post"name="loginform">
            <p><label for="user_login">Username<br>
                <input class="input" id="username" name="username"size="20"
            type="text" value=""></label></p>

            <p><label for="user_pass">Password<br>
                <input class="input" id="password" name="password"size="20"
            type="password" value=""></label></p> 

            <input type="radio" class="radio" id="contactChoice1"
            name="type" value="0" checked>
            <label>User</label>

            <input type="radio" class="radio" id="contactChoice2"
            name="type" value="1">
            <label>Admin</label>
            
            <p class="submit"><input class="button" name="login" type= "submit" value="Sign In"></p>
            <p class="regtext">Not registered yet? <a href= "../admin/register.php">Sign up</a>!</p>
        </form>
    </div>
  </div>


<script type="text/javascript">
$(document).ready(function() {
    $('#loginform').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: 'login_lab6.php',
            data: $(this).serialize(),
            success: function(response)
            {
                var jsonData = JSON.parse(response);
                
                if (jsonData.success == "1")
                {
                    if(($('input[name="type"]:checked').val())==0){
                        location.href = '../index_main.php';
                    } else{
                        location.href = '../php/index.php';
                    }
                    
                }
                else
                {
                    $('input.input').val('');
                    swal("ATTENTION", "Invalid Credentials!", "warning"); 
                }
           }
       });
     });
});
</script>



<?php include("../admin/includes/footer.php"); ?>
</body>
</html>