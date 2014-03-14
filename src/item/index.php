<?php
include '../db.inc.php';
session_start();

if(isset($_POST['action']))
{
$itemname=$_POST['itemname'];
$category=$_POST['category'];

try{
	$sql="INSERT INTO item(itemname,category,count) VALUES ('".$_POST['itemname']."', '".$_POST['category']."', 0)";
	$pdo->exec($sql);
}
catch(PDOException $e)
{
	$error= "Unabel to get the data";
	echo $error;
	exit();
}
}

if(isset($_GET['upvote']))
{
$upvotedId=$_GET['upvote'];

		try{
			$sqlvote="INSERT INTO vote (itemid, userid,upvote) VALUES ('".$upvotedId."','".$_SESSION['userid']."', 1)";
			$pdo->exec($sqlvote);
		}
	catch(PDOException $e)
	{
		try{
			$sql1="SELECT * From item WHERE category='Breakfast'";
			$result1=$pdo->query($sql1);
			$sql2="SELECT * From item WHERE category='Lunch'";
			$result2=$pdo->query($sql2);
			$sql3="SELECT * From item WHERE category='Snacks'";
			$result3=$pdo->query($sql3);
			$sql4="SELECT * From item WHERE category='Dinner'";
			$result4=$pdo->query($sql4); 
			}
			catch(PDOException $e)
			{
				$error= "Unabel to get the data";
				echo $error;
				exit();
			}

			foreach ($result1 as $row)
			{
				$itemsInBreakfast[]=array('id'=>$row['id'], 'itemname'=>$row['itemname'], 'count'=>$row['count'], 'upvote'=>$row['count']);
			}
			foreach ($result2 as $row2)
			{
				$itemsInLunch[]=array('id'=>$row2['id'], 'itemname'=>$row2['itemname'], 'count'=>$row2['count'], 'upvote'=>$row2['count']);
			}
			foreach ($result3 as $row3)
			{
				$itemsInSnacks[]=array('id'=>$row3['id'], 'itemname'=>$row3['itemname'], 'count'=>$row3['count'], 'upvote'=>$row3['count']);
			} 
			foreach ($result4 as $row4)
			{
				$itemsInDinner[]=array('id'=>$row4['id'], 'itemname'=>$row4['itemname'], 'count'=>$row4['count'], 'upvote'=>$row4['count']);
			} 
			include 'upvoted.html.php';
			exit();

		}
	try{
	$sql="UPDATE item SET count=count+1 WHERE id='".$upvotedId."'";
	$pdo->exec($sql);
	}
	catch(PDOException $e)
	{
		$error= "Unabel to get the data";
		echo $error;
		exit();
	}
		
	

}



try{
	$sql1="SELECT * From item WHERE category='Breakfast'";
	$result1=$pdo->query($sql1);
	$sql2="SELECT * From item WHERE category='Lunch'";
	$result2=$pdo->query($sql2);
	$sql3="SELECT * From item WHERE category='Snacks'";
	$result3=$pdo->query($sql3);
	$sql4="SELECT * From item WHERE category='Dinner'";
	$result4=$pdo->query($sql4); 
}
catch(PDOException $e)
{
	$error= "Unabel to get the data";
	echo $error;
	exit();
}

foreach ($result1 as $row)
{
	$itemsInBreakfast[]=array('id'=>$row['id'], 'itemname'=>$row['itemname'], 'count'=>$row['count'], 'upvote'=>$row['count']);
}
foreach ($result2 as $row2)
{
	$itemsInLunch[]=array('id'=>$row2['id'], 'itemname'=>$row2['itemname'], 'count'=>$row2['count'], 'upvote'=>$row2['count']);
}
foreach ($result3 as $row3)
{
	$itemsInSnacks[]=array('id'=>$row3['id'], 'itemname'=>$row3['itemname'], 'count'=>$row3['count'], 'upvote'=>$row3['count']);
} 
foreach ($result4 as $row4)
{
	$itemsInDinner[]=array('id'=>$row4['id'], 'itemname'=>$row4['itemname'], 'count'=>$row4['count'], 'upvote'=>$row4['count']);
} 


include 'list.html.php';

?>