<?php
if (isset($_GET['num']) && !empty($_GET['num'])) {
    $num = $_GET['num'];
    for ($i = 1; $i <= $num; $i++) {
        echo $i , $i + 4, $i + 8;
        echo "<br>";
        
    }
}
?>
<form>
    <input type="text" name="num">
</form>