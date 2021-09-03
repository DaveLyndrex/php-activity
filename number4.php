<center>
<h1>
Write a function to check whether a number is prime or not.
</h1>
<?php
function IsPrime($n)
{
 for($x=2; $x<$n; $x++)
   {
      if($n %$x ==0)
	      {
		   return 0;
		  }
    }
  return 1;
   }
   ?>
<h3>The number is 5</h3>
<h3>
<?php
$a = IsPrime(5);
if ($a==0)
echo 'This is not a Prime Number';
else
echo 'This is a Prime Number.';
?>

</h3>
</center>