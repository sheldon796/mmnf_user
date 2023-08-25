<?php include "function.php"; 

if (isset($_GET['delete'])) {
$Id = $_GET['delete'];
$fileUnlink = mysqli_query($conn, "select * from document_locker where Id= '$Id'");
$arr = mysqli_fetch_array($fileUnlink);
$fileName = $arr['attachment'];
$delete = mysqli_query($conn, "delete from document_locker where Id='$Id'");
if ($delete) {
  unlink("upload/documents/locker/".$fileName);
  echo "delete success";
} 

$sql = "delete from document_locker where Id='$Id'";

if ($conn->query($sql)== true) {
echo "close";


?>
<script>
  window.location = "document_locker.php";
</script>
<?php }
else{
  echo "not deleted"; 
}

}
?>
