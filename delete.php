<?php
session_start();
$c=mysqli_connect("localhost","root","");
mysqli_select_db($c,"web");
$id=$_GET["id"];
mysqli_query($c,"delete from annonce where id_annonce='".$id."'");
?>
<script type="text/javascript">
window.location="admin.php";
</script>