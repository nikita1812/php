<?php
if (isset($_GET['month']) && isset($_GET['year'])) {
    if (!empty($_GET['month']) && !empty($_GET['year'])) {
        $month = $_GET['month'];
        $year = $_GET['year'];

        //session store 
        $_SESSION['month'] = $month;
        $_SESSION['year'] = $year;
        prints($month, $year);

    }
}
else{
    session_start();
    if(isset($_SESSION['month']) && isset($_SESSION['year'])){
        $month = $_SESSION['month'];
        $year = $_SESSION['year'];
        prints($month, $year);
    }
}
function prints($month, $year)
{
    $days = cal_days_in_month(CAL_GREGORIAN, $month, $year);
        $firstDayOfTheWeek = date('N', strtotime($year . '-' . $month . '-01'));
        echo $firstDayOfTheWeek;
        echo "<table border=2><tr><th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th></tr><tr>";
           
            function space($firstDayOfTheWeek)
            {
                if ($firstDayOfTheWeek >= 7) {
                    global $firstDayOfTheWeek;
                    $firstDayOfTheWeek = 0;
                }
                for ($k = 1; $k <= $firstDayOfTheWeek; $k++) {
                    echo "<td>" . " " . "</td>";
                }
            }
            space($firstDayOfTheWeek);

            if (($month < 13 && $month > 0)) {
                $cnt = $firstDayOfTheWeek;
                    for ($i = 1; $i <= $days; $i++) {
                        if ($cnt == 7) {
                            echo "</tr><tr>";
                            $cnt = 0;
                        }
                        echo "<td>" . $i . "</td>";
                        $cnt++;
                    }
    
                echo "</tr></table>";
            } else {
                echo "Your $month are wrong";
            }
}
?>

<form>
    Month:<input type="text" name="month"><br>
    year:<input type="text" name="year">
    <input type="submit" value="click"><br>
</form>