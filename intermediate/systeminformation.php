<!-- LEARNIX 
	
Filename:	systeminformation.php
Authors: 	Rachael Bogdany
			Jon Healy
			Lowell Pence
			Shoujing Wu 
-->
<?php
	//include the header
	$path = '../';
	$page = 'System Information';
	include $path.'assets/inc/header.php';
	//content
	require $path.'../../../240DBConn2185.php';
	$sql = "SELECT content FROM learnix WHERE page='" . $page. "'";
	$result = $conn->query($sql);
	if($result->num_rows > 0){
		while($row = $result->FETCH_ASSOC()){
			echo $row['content'];
		}
	}
	else{
		echo '0 results, you did something wrong';
	}
?>
<?php
	//include the footer
	include $path.'assets/inc/footer.php';
?>