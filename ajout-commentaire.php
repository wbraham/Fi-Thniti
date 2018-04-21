<?php 
session_start();
$c=mysqli_connect("localhost","root","");
mysqli_select_db($c,"web");
$idcommentaire=$_SESSION["idcommentaire"];
$usernamecommentaire=$_SESSION["usernamecommentaire"];
$messagecommentaire=$_SESSION["messagecommentaire"];
$datecommentaire=$_SESSION["datecommentaire"];
$res=mysqli_query($c,"insert into commentaires (nomcomplet,message,date,idannonce) values ('".$usernamecommentaire."','".$messagecommentaire."','".$datecommentaire."','".$idcommentaire."')");
?>
<script type="text/javascript">
window.location="rides.php";
</script>