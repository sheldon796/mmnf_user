<?php
//include auth_session.php file on all user panel pages
include("config.php"); include("auth_session.php");

if (isset($_GET['delete'])) {
$Id = $_GET['delete'];
$fileUnlink = mysqli_query($link, "select * from government_resolutions where Id= '$Id'");
$arr = mysqli_fetch_array($fileUnlink);
$fileName = $arr['attachment'];
$delete = mysqli_query($link, "delete from government_resolutions where Id='$Id'");
if ($delete) {
  unlink("upload/documents/gr/".$fileName);
  echo "delete success";
} 

$sql = "delete from government_resolutions where Id='$Id'";

if ($link->query($sql)== true) {
echo "close";


?>
<script>
  window.location = "government_resolutions_individual.php";
</script>
<?php }
else{
  echo "not deleted"; 
}

}
?>
