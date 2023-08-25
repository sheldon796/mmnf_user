<?php
//include auth_session.php file on all user panel pages
include "config.php";include "auth_session.php";

if (isset($_GET['delete'])) {
$Id = $_GET['delete'];
$fileUnlink = mysqli_query($link, "select * from ngo where Id= '$Id'");
$arr = mysqli_fetch_array($fileUnlink);
$fileName = $arr['attachment'];
$delete = mysqli_query($link, "delete from ngo where Id='$Id'");
if ($delete) {
  unlink("upload/documents/ngo/".$fileName);
  echo "delete success";
} 

$sql = "delete from ngo where Id='$Id'";

if ($link->query($sql)== true) {
echo "close";


?>
<script>
  window.location = "ngo_with_us_individual.php";
</script>
<?php }
else{
  echo "not deleted"; 
}

}
?>
