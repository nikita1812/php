<!DOCTYPE HTML>
<html>

<head>
    <title>
        Blog User Registration and Login Form
    </title>
</head>

<body>
    <?php 
        require_once 'session.php';
        setSession('login');
    ?>
    <form method="POST" id="myform">
        <fieldset>
            <h1 align='center'>LOGIN</h1>
            <div>
                Email:<div><input type="email" name="page[email]" value="<?php echo getValue("page", "email"); ?>"></div>
            </div>
            <div>
                Password:<div><input type="password" name="page[password]" value="<?php echo getValue("page", "password"); ?>"></div>
            </div>
            <div>
                <input type="submit" name="login" value="LOGIN" >
                <input type="submit" name="register" value="REGISTER" onclick="document.forms['myform'].action='Registration.php'">
            </div>
        </fieldset>
    </form>
</body>

</html>