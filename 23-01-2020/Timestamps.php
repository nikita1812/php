<?php
    $time = time();
    echo $time . "<br>";

    //die();

    $time_now = date('d M Y @ H:i:s', $time);
    $time_modified = date('d M Y @ H:i:s', $time-120);
    $time_modified_week = date('d M Y @ H:i:s', strtotime('- 1 week'));
    $actual_time_1 = date('H:i:s', $time);
    $actual_time_2 = date('D M Y', $time);
    $actual_time_3 = date('d m Y', $time);
    $actual_time_4 = date('d m Y');

    echo "The current time is $time_now"."<br>";
    echo "The modified time  in current time is $time_modified"."<br>";
    echo "The modified time in week is $time_modified_week"."<br>";
    echo "The current time is $actual_time_1","<br>";
    echo "The current time is $actual_time_2"."<br>";
    echo "The current time is $actual_time_3"."<br>";
    echo "The current time is $actual_time_4"."<br>";
?>