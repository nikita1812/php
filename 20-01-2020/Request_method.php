<html>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
            Name:<input type="text" name="Fname">
            <input type="submit" value="SUBMIT">
        </form>
        <?php
        if($_SERVER['REQUEST_METHOD'] == "POST")
        {
            $name = $_REQUEST['Fname'];
            if(empty($name))
            {
                echo 'Name is Empty';
            }
            else
            {
                echo $name;
            }
        }
        ?>
    </body>
</html>