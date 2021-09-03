<center>
<h1>
Create a simple 'birthday countdown' script, the script will count the number of days between current day and birthday. 
</h1>
<br><br>
<h3>
    The upcoming birthday is on September 09, 2021.
    <br>
</h3>
<h3>
<?php
$target_days = mktime(0,0,0,9,9,2021);

$today = time();
$diff_days = ($target_days - $today);
$days = (int)($diff_days/86400);
print "Counting days: $days days!"."\n";
?>
</h3>
</center>