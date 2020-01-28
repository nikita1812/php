<?php
    if(isset($_GET['roll']))    {
        $num = rand(1, 6);
        echo "Your dice number is ".$num;        
    }
?>
<form>
    <input type="submit" name="roll" value="clicked">
</form>