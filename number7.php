<center>
<h1>
Write a PHP script to calculate the difference between two dates.
</h1>
<br><br>
<h3>
<?php
$first_date = "2021-09-2";
$last_date = "2020-04-08";

echo "Current Date: " . $first_date;
?>
<br>to 
<br>

<?php
echo "My Date: " . $last_date;
?>
<br>
<br><br>
<?php
$date_diff = abs(strtotime($last_date) - strtotime($first_date));

$years = floor($date_diff / (365*60*60*24));
$months = floor(($date_diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($date_diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

printf("%d years, %d months, %d days", $years, $months, $days);
printf("\n");
?>
</h3>
</center>