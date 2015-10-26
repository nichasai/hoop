<?PHP
	session_start();
	if(empty($_SESSION['ID']) || empty($_SESSION['NAME']) || empty($_SESSION['SURNAME'])){
		echo '<script>window.location = "Login.php";</script>';
	}
?>
<style type="text/css">
body,td,th {
	color: #F33;
}
body {
	background-color: #CCC;
}
</style>

Member page
<hr>
<?PHP
	echo "ID : ".$_SESSION['ID']."<br>";
	echo "NAME : ".$_SESSION['NAME']."<br>";
	echo "SURNAME : ".$_SESSION['SURNAME']."<br>";
	echo "<a href='Logout.php'>Logout<br></a>";
?>
<a href="changepass.php"> change password</a>