<?php include '../db.inc.php'; ?>
<!doctype html>
<html>
<form action="." method="POST">
		<label for="itemname">Itemname:</label>
		<input type="name" name="itemname" value=""><br>
		<label for="category">Category :</label>
		<select name="category">
			<option>Breakfast</option>
			<option>Lunch</option>
			<option>Snacks</option>
			<option>Dinner</option>
		</select>
		<input type="submit" name="action" value="Update">
</form>


</hr>
<h3>Breakfast</h3>
<?php 
	foreach ($itemsInBreakfast as $itemInBreakfast): ?>
	<span><?php echo $itemInBreakfast['count'];  echo $itemInBreakfast['itemname']; ?></span> 

<?php 
$isUpvoted=0;
try
{
	$sqlvote="SELECT upvote FROM vote WHERE itemid='".$itemInBreakfast['id']."' and userid='".$_SESSION['userid']."'";
	$resultofvote=$pdo->query($sqlvote);
}
catch(PDOException $e)
{
	$error= "Unabel to get the data";
	echo $error;
	exit();
}
foreach($resultofvote as $rowofvote)
{
	$isUpvoted=$rowofvote['upvote'];
}
	if($isUpvoted==1)
		{ echo "<a class='upvoted' title='upvoted! You tasted it!'>a</a><br>"; }
	else
		{echo "<a href='?upvote=".$itemInBreakfast['id']."'class='upvote' title='upvote it, If it tempts you!'>a</a><br>"; }
endforeach;
?>

</hr>





<h3>Lunch</h3>
<?php 
foreach ($itemsInLunch as $itemInLunch): ?>
	<span><?php echo $itemInLunch['itemname']; ?></span>
<?php endforeach; ?>

</hr>
<h3>Dinner</h3>

<?php 
foreach ($itemsInDinner as $itemInDinner): ?>
	<span><?php echo $itemInDinner['itemname']; ?></span>
<?php endforeach; ?>
<?php 

try{
	$sqli="SELECT * FROM vote WHERE userid=1 and itemid=24";
	$resulti=$pdo->query($sqli);
}
catch(PDOException $e)
{
	$error= "Unabel to get the data";
	echo $error;
	exit();
}
$c= $resulti -> rowCount();
echo "count" .$c;
foreach ($resulti as $rowi){
	echo "<br>".$rowi['itemid'];
	echo $rowi['upvote'];
}
?>

</html>