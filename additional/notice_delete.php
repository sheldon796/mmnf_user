<?php include "function.php"; 

if (isset($_GET['delete'])) {
$Id = $_GET['delete'];
$fileUnlink = mysqli_query($conn, "select * from notice where Id= '$Id'");
$arr = mysqli_fetch_array($fileUnlink);
$fileName = $arr['attachment'];
$delete = mysqli_query($conn, "delete from notice where Id='$Id'");
if ($delete) {
  unlink("upload/documents/notices/".$fileName);
  echo "delete success";
} 

$sql = "delete from notice where Id='$Id'";

if ($conn->query($sql)== true) {
echo "close";


?>
<script>
  window.location = "notices.php";
</script>
<?php }
else{
  echo "not deleted"; 
}

}
?>
