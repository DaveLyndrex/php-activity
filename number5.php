<center>
<h1>
Write a PHP function that checks whether a string is all lowercase.
</h1>
<h3>
<?php
$string = "Mobile Legends";
echo ("The string is:  " . $string);
?>
<br><br>
<?php

if (ctype_lower($string)) {
    echo $string.' is all lowercase letters.';
} else {
    echo $string.' is not all lowercase letters.';
}
?>
</h3>
</center>