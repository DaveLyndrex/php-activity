<center>

<h1>
Write a PHP program to sort a list of elements using Bubble sort
</h1>
<br><br>

<h3>


<?php
function bubble_Sort($my_array )
{
	do
	{
		$swapped = false;
		for( $i = 0, $c = count( $my_array ) - 1; $i < $c; $i++ )
		{
			if( $my_array[$i] > $my_array[$i + 1] )
			{
				list( $my_array[$i + 1], $my_array[$i] ) =
						array( $my_array[$i], $my_array[$i + 1] );
				$swapped = true;
			}
		}
	}
	while( $swapped );
return $my_array;
}
 $test_array = array(56, 30, 22, 35, 62, 434, -10, 42, 11);
echo "Original Array :\n";
echo implode(', ',$test_array );
?>
<br><br>
<?php
echo "\nSorted Array\n:";
echo implode(', ',bubble_Sort($test_array)). PHP_EOL;
?>
</h3>
</center>