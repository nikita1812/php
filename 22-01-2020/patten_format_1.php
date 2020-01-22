<?php
if (isset($_GET['num']) && !empty($_GET['num'])) {
    $num = $_GET['num'];
    for ($i = 1; $i <= $num; $i++) {
        for ($j = $i; $j < $num; $j++) {
            echo "* ";
            $i + 2;
        }
        echo "<br>";
    }
}
?>
<form>
    <input type="text" name="num">
</form>