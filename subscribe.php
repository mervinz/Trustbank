<?php
require 'includes/core.inc.php';
require 'includes/connection.php';
$counter=0;
$query="SELECT *, `presenter`.`fname`, `presenter`.`lname`, `room`.`name`, 'organizer'.'fname', 'organizer'.'lname' FROM lectures, lecture_details, presenter, rooms WHERE `lecture`.`presenter_id`=`presenter`.`presenter_id` 
AND `lecture`.`room_id`=`room`.`room_id` AND `room`.`building_id`=`building`.`building_id`";

if($query_run=mysql_query($query)){
	$query_num_rows=mysql_num_rows($query_run);
	echo'<table border="4">' ;
	echo "<tr>";
	echo "<td>Lecture title</td>";
	echo "<td>General overview</td>";
	echo "<td>Date</td>";
	echo "<td>Presenter_name</td>";
	echo "<td>Building name</td>";
	echo "<td>Room name</td>";
	echo "<td>Slots Left</td>";
    echo "</tr>";
	echo $subid=$_GET['sublink'];
	$unsubid=$_GET['unsublink'];
	echo $row=$_GET['row'];
	$delegate_id=$_SESSION['user_id'];

	$lecturequery="SELECT lecture_id FROM lecture_to_delegate WHERE delegate_id='$delegate_id'";
	$lecturequery_run=mysql_query($lecturequery);
	$showcount=0;
	$lecquery_num_rows=mysql_num_rows($lecturequery_run);
	while($showcount<$lecquery_num_rows){
		$lecture_to_delegate[$showcount]=mysql_result($lecturequery_run,$showcount,'lecture_id');
		$showcount++;
	}



	while(($counter<$query_num_rows)){
		$id[$counter]=mysql_result($query_run,$counter,'lecture_id');;
		$title=mysql_result($query_run,$counter,'title');
		$gen_overview=mysql_result($query_run,$counter,'general_overview');
		$date=mysql_result($query_run,$counter,'date');
		$presenter_name=mysql_result($query_run,$counter,'presenter.name');
		$room_name=mysql_result($query_run,$counter,'room.name');
		$building_name=mysql_result($query_run,$counter,'building.name');
		$room_id=mysql_result($query_run,$counter,'room_id');
		$del_num_query="SELECT lecture_id, delegate_id FROM lecture_to_delegate
					WHERE lecture_id =  '$id[$counter]'";
		$del_num_query_run=mysql_query($del_num_query);
		$delegate_num=mysql_num_rows($del_num_query_run);
		$capacity_query="SELECT capacity FROM room,lecture WHERE `lecture`.`room_id`=`room`.`room_id` AND lecture_id='$id[$counter]'";
		$capacity_query_run=mysql_query($capacity_query);
		$capacity=mysql_result($capacity_query_run,0,'capacity');
		$spaceleft[$counter]=$capacity-$delegate_num;
		echo "<tr>";
		echo "<td>$title</td>";
		echo "<td>$gen_overview</td>";
		echo "<td>$date</td>";
		echo "<td>$presenter_name</td>";
		echo "<td>$building_name</td>";
		echo "<td>$room_name</td>";
		echo "<td>$spaceleft[$counter]</td>";
		$showcount=0;
		$boolean=0;
		while($showcount<$lecquery_num_rows){
			if($id[$counter]==$lecture_to_delegate[$showcount]){
				$boolean=1;
				break;
			}
			$showcount++;

		}

		if($boolean==0){
				echo "<td><a href=\"subscribe.php?sublink=$id[$counter]&row=$counter\"> Subscribe </a><td>";

			}
			if($boolean==1){
				echo "<td><a href=\"subscribe.php?unsublink=$id[$counter]\"> Unsubscribe </a><td>";
			}
		echo "</tr>";

		$counter++;
		
	}
	echo '</table>';
	if(!empty($subid) ){


		if($spaceleft[$row]<=0){
			echo "Cannot be subscribed. Slots already filled";
		}else{
		
		$subquery="INSERT INTO lecture_to_delegate VALUES ('$subid','$delegate_id')";
		if($subquery_run=mysql_query($subquery)){
			echo "Thank you for subscribing";
			header('Location:subscribe.php');
		}

	}
	}
	if(!empty($unsubid)){
		
		$unsubquery="DELETE FROM `lecture_to_delegate` WHERE lecture_id='$unsubid' AND delegate_id='$delegate_id'";
		if($unsubquery_run=mysql_query($unsubquery)){
			echo "Unsubscribe successful";
			header('Location:subscribe.php');
		}else echo "unsub not successful";
	
}
  
}else {echo "query failed";}

echo "<a href=\"logout.php\">Log out</a>";

if(empty($http_referer) && empty($_SERVER['user_id'])){ echo "echo very empty";}
?>