<?php
if (is_null($_POST["id"]) && is_null($_COOKIE["CompanyID"])) // not post and no cookie -> redirect to home
{
	header("Location: /", true, 301);
	exit();
} elseif(!is_null($_POST["id"]))
{ // post
	setcookie("CompanyID", $_POST["id"]); // set cookie
}




?>