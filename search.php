<?php
	$usn=$_GET["usn"];
	$con=mysql_connect('us-cdbr-iron-east-03.cleardb.net','bba1dc22a195f3','17d19173');
	
	$sql="Select * from studentinfo where usn='".$usn."'";

	mysql_select_db('ad_7a57ffbd43da404');

	$result=mysql_query($sql,$con);
	$val=mysql_affected_rows($con);

	$row=mysql_fetch_array($result,MYSQL_BOTH);
	if($val)
		print $row['USN']." and ".$row['Name'];	
	else
		print "Record NOT found";

	mysql_close($con);
?>