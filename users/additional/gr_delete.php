<?php include "function.php"; 

if (isset($_GET['delete'])) {
$Id = $_GET['delete'];
$fileUnlink = mysqli_query($conn, "select * from government_resolutions where Id= '$Id'");
$arr = mysqli_fetch_array($fileUnlink);
$fileName = $arr['attachment'];
$delete = mysqli_query($conn, "delete from government_resolutions where Id='$Id'");
if ($delete) {
  unlink("upload/documents/GR/".$fileName);
  echo "delete success";
} 

$sql = "delete from government_resolutions where Id='$Id'";

if ($conn->query($sql)== true) {
echo "close";


?>
<script>
  window.location = "gr.php";
</script>
<?php }
else{
  echo "not deleted"; 
}

}
?>
