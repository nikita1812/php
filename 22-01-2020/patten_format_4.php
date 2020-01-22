<?php
if (isset($_GET['num']) && !empty($_GET['num'])) {
    $num = $_GET['num'];
    for ($i = 1; $i <= $num; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "$j";
        }
        echo "<br>";
    }
}
?>
<form>
    <input type="text" name="num">
</form>