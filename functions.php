<?php
include_once('constants.php');

/*
// Check FirmenID availability
if (isset($_POST['a']) && $_POST['a'] == 'check_id')
{
	$ID = $_POST["id"];

	
}

// signup

if (isset($_POST['a']) && $_POST['a'] == 'signup')
{
	$ID = $_POST["id"];

	
}

*/
/* FUNCTIONS */
/*
function check_id($ID) // Check FirmenID availability in the database
{
	$forReturn = "init";
	
	// connect to db
	$conn = new mysqli(G_DB_HOST, G_DB_USER, G_DB_PASS, "Companies");

	// check conn
	if ($conn->connect_error) {
		if (G_DEBUG) // show error if debug
		{
			echo "<script>alert(DB_ERROR: " $conn->connect_error .");</script>";
		}
		
		$forReturn = "DB_ERROR";
	} else
	{
		// select data
		$sql = "SELECT Status FROM FirmenMainData WHERE FirmenID = '".$ID."'";
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
		   $Status = $result->fetch_assoc()['Status'];
			// check status
			if ($Status === "1")
			{
				$forReturn = "OK";
			} else
			{
				// Status inactive
				$forReturn = "StatusInactive";
			}
		}
	}

	// Close connection
	$conn->close();
	
	return $forReturn;
}


function signup($CompanyName, $CompanyID, $Subscription, $Expires = strtotime('+31 days', time())) // Check FirmenID availability in the database
{
	$forReturn = "init";
	
	// connect to db
	$conn = new mysqli(G_DB_HOST, G_DB_USER, G_DB_PASS, "Companies");

	// select data
	$sql = "INSERT INTO Companies (Name, CompanyID, Subscription, Expires, AutoRenew, Created) VALUES ('$CompanyName', '$CompanyID', '$Subscription', '$Expires', '1', '".time()."');"; // add data to MainDB -> Companies

	if ($conn->multi_query($sql) === TRUE) {
	   $forReturn = "OK";
	} else {
		if (G_DEBUG) // show error if debug
		{
			echo "<script>alert(DB_ERROR: " . $sql . "<br>" . $conn->error.");</script>";
		}
	}

	// Close connection
	$conn->close();
	
	return $forReturn;
}
*/
?>