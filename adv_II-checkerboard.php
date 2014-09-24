<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset = "utf-8">
	<title>checkerboard</title>
</head>
<!-- Even though this is saved as a php document (with the .php extension
	we still need to put the whole thing in an html setup -->
<style type="text/css">

*{
	padding: 0;
	margin: 0;
}
	table, td{border-collapse: collapse;}

	.black{
		background-color: black;
		width: 50px;
		height: 50px;
	}

	.red{
		background-color: red;
		width: 50px;
		height: 50px;
	}
/*this is the css styling that we do with the black and red boxes,
we are telling it to make 8 rows in the outer for loop, but
in the inner for loop, we run an if else statement that says
if the $x is even color the tc black, then color another one red,
but if it's not even, color it red then black*/
</style>
<body>
	<table>
		<tbody>
			<?php
				for($x=1; $x<=8; $x++){
					echo "<tr>";
					for($y=1; $y<=4; $y++){
						echo "<td></td>";
				
						if($x % 2 == 0){
							echo '<td class="black"></td>';
							echo '<td class="red"></td>';
						}
						else{
							echo '<td class="red"></td>';
							echo '<td class="black"></td>';
						}
					}
				echo "</tr>";
				}
?>
</tbody>
</table>
</html>