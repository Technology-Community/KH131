<?php
function addDayswithdate($date, $days)
{
    $date = strtotime("+" . $days . " days", strtotime($date));
    return date("m/d/Y", $date);
}


function subDayswithdate($date, $days)
{
    $date = strtotime("-" . $days . " days", strtotime($date));
    return date("m/d/Y", $date);
}
