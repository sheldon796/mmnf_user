<?php
//include auth_session.php file on all user panel pages
include("config.php"); include("auth_session.php");

if (isset($_GET['delete'])) {
$Id = $_GET['delete'];
$fileUnlink = mysqli_query($link, "select * from notice where Id= '$Id'");
$arr = mysqli_fetch_array($fileUnlink);
$fileName = $arr['attachment'];
$delete = mysqli_query($link, "delete from notice where Id='$Id'");
if ($delete) {
  unlink("upload/documents/notices/".$fileName);
  echo "delete success";
} 

$sql = "delete from notice where Id='$Id'";

if ($link->query($sql)== true) {
echo "close";


?>
<script>
  window.location = "notice_individual.php";
</script>
<?php }
else{
  echo "not deleted"; 
}

}
?>
