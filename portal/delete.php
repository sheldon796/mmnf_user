<?php
include("config.php"); 
include("auth_session.php");

  
if(isset($_GET['id'])){
		$id = $_GET['tid'];
		$fileUnlink = mysqli_query($link,"SELECT * from add_schemes WHERE id= '$id'");
		$arr = mysqli_fetch_array($fileUnlink);
		$fileName = $arr['upload'];
		$delete = mysqli_query($link,"DELETE from add_schemes WHERE id='$id'");
		 
	
	$sql= "DELETE FROM `add_schemes` WHERE `id`={$_GET['id']}";
   
      if($link->query($sql)==TRUE){
	  echo '<meta http-equiv="refresh" content="0;URl=?closed"/>';
        ?>
        <script>
            window.location = 'dept_mdc_schemes.php';
        </script>
        <?php
    }else{
        echo "unabel to delete data";
    }
		
	}
 
if(isset($_GET['tid'])){
		$id = $_GET['tid'];
		$fileUnlink = mysqli_query($link,"SELECT * from testimonial WHERE id= '$id'");
		$arr = mysqli_fetch_array($fileUnlink);
		$fileName = $arr['upload'];
		$delete = mysqli_query($link,"DELETE from testimonial WHERE id='$id'");
		if($delete){
			unlink("upload/testimonial/".$fileName);
			echo "delete success";
		}
		
	
	$sql= "DELETE FROM `testimonial` WHERE `id`={$_GET['tid']}";
   
      if($link->query($sql)==TRUE){
	  echo '<meta http-equiv="refresh" content="0;URl=?closed"/>';
        ?>
        <script>
            window.location = 'testimonial.php';
        </script>
        <?php
    }else{
        echo "unabel to delete data";
    }
		
	}

  
if(isset($_GET['bid'])){
		$id = $_GET['bid'];
		$fileUnlink = mysqli_query($link,"SELECT * from events WHERE id= '$id'");
		$arr = mysqli_fetch_array($fileUnlink);
		$fileName = $arr['upload'];
		$delete = mysqli_query($link,"DELETE from events WHERE id='$id'");
		if($delete){
			unlink("upload/events/".$fileName);
			echo "delete success";
		}
		
	
	$sql= "DELETE FROM `events` WHERE `id`={$_GET['bid']}";
   
      if($link->query($sql)==TRUE){
	  echo '<meta http-equiv="refresh" content="0;URl=?closed"/>';
        ?>
        <script>
            window.location = 'events.php';
        </script>
        <?php
    }else{
        echo "unabel to delete data";
    }
		
	}
	
	  
if(isset($_GET['upid'])){
		$id = $_GET['upid'];
		$fileUnlink = mysqli_query($link,"SELECT * from upcomming_events WHERE id= '$id'");
		$arr = mysqli_fetch_array($fileUnlink);
		$fileName = $arr['upload'];
		$delete = mysqli_query($link,"DELETE from upcomming_events WHERE id='$id'");
		if($delete){
			unlink("upload/upcomming_events/".$fileName);
			echo "delete success";
		}
		
	
	$sql= "DELETE FROM `upcomming_events` WHERE `id`={$_GET['upid']}";
   
      if($link->query($sql)==TRUE){
	  echo '<meta http-equiv="refresh" content="0;URl=?closed"/>';
        ?>
        <script>
            window.location = 'upcomming_events.php';
        </script>
        <?php
    }else{
        echo "unabel to delete data";
    }
		
	}

if(isset($_GET['cid'])){
		$id = $_GET['cid'];
		$fileUnlink = mysqli_query($link,"SELECT * from contact_us WHERE id= '$id'");
		$arr = mysqli_fetch_array($fileUnlink);
		$fileName = $arr['upload'];
		$delete = mysqli_query($link,"DELETE from contact_us WHERE id='$id'");
		if($delete){
			unlink("upload/contact_us/".$fileName);
			echo "delete success";
		}
		
	
	$sql= "DELETE FROM `contact_us` WHERE `id`={$_GET['cid']}";
   
      if($link->query($sql)==TRUE){
	  echo '<meta http-equiv="refresh" content="0;URl=?closed"/>';
        ?>
        <script>
            window.location = 'contact_us.php';
        </script>
        <?php
    }else{
        echo "unabel to delete data";
    }
		
	}
	
	
 
 
if(isset($_GET['fid'])){
		$id = $_GET['fid'];
		$fileUnlink = mysqli_query($link,"SELECT * from feedback WHERE id= '$id'");
		$arr = mysqli_fetch_array($fileUnlink);
		$fileName = $arr['upload'];
		$delete = mysqli_query($link,"DELETE from feedback WHERE id='$id'");
		if($delete){
			unlink("upload/feedback/".$fileName);
			echo "delete success";
		}
		
	
	$sql= "DELETE FROM `feedback` WHERE `id`={$_GET['fid']}";
   
      if($link->query($sql)==TRUE){
	  echo '<meta http-equiv="refresh" content="0;URl=?closed"/>';
        ?>
        <script>
            window.location = 'feedback.php';
        </script>
        <?php
    }else{
        echo "unabel to delete data";
    }
		
	}




if(isset($_GET['gid'])){
		$id = $_GET['gid'];
		$fileUnlink = mysqli_query($link,"SELECT * from general_notice_board WHERE id= '$id'");
		$arr = mysqli_fetch_array($fileUnlink);
		$fileName = $arr['upload'];
		$delete = mysqli_query($link,"DELETE from general_notice_board WHERE id='$id'");
		if($delete){
			unlink("upload/general_notice_board/".$fileName);
			echo "delete success";
		}
		
	
	$sql= "DELETE FROM `general_notice_board` WHERE `id`={$_GET['gid']}";
   
      if($link->query($sql)==TRUE){
	  echo '<meta http-equiv="refresh" content="0;URl=?closed"/>';
        ?>
        <script>
            window.location = 'general_notice_board.php';
        </script>
        <?php
    }else{
        echo "unabel to delete data";
    }
		
	}


 



 
if(isset($_GET['nid'])){
		$id = $_GET['nid'];
		$fileUnlink = mysqli_query($link,"SELECT * from media WHERE id= '$id'");
		$arr = mysqli_fetch_array($fileUnlink);
		$fileName = $arr['upload'];
		$delete = mysqli_query($link,"DELETE from media WHERE id='$id'");
		if($delete){
			unlink("upload/media/".$fileName);
			echo "delete success";
		}
		
	
	$sql= "DELETE FROM `media` WHERE `id`={$_GET['nid']}";
   
      if($link->query($sql)==TRUE){
	  echo '<meta http-equiv="refresh" content="0;URl=?closed"/>';
        ?>
        <script>
            window.location = 'media.php';
        </script>
        <?php
    }else{
        echo "unabel to delete data";
    }
		
	}

if(isset($_GET['neid'])){
		$id = $_GET['neid'];
		$fileUnlink = mysqli_query($link,"SELECT * from news WHERE id= '$id'");
		$arr = mysqli_fetch_array($fileUnlink);
		$fileName = $arr['upload'];
		$delete = mysqli_query($link,"DELETE from news WHERE id='$id'");
		if($delete){
			unlink("upload/news/".$fileName);
			echo "delete success";
		}
		
	
	$sql= "DELETE FROM `news` WHERE `id`={$_GET['neid']}";
   
      if($link->query($sql)==TRUE){
	  echo '<meta http-equiv="refresh" content="0;URl=?closed"/>';
        ?>
        <script>
            window.location = 'news.php';
        </script>
        <?php
    }else{
        echo "unabel to delete data";
    }
		
	}
 
 



if(isset($_GET['pid'])){
		$id = $_GET['pid'];
		$fileUnlink = mysqli_query($link,"SELECT * from photo_gallery WHERE id= '$id'");
		$arr = mysqli_fetch_array($fileUnlink);
		$fileName = $arr['upload'];
		$delete = mysqli_query($link,"DELETE from photo_gallery WHERE id='$id'");
		if($delete){
			unlink("upload/photo_gallery/".$fileName);
			echo "delete success";
		}
		
	
	$sql= "DELETE FROM `photo_gallery` WHERE `id`={$_GET['pid']}";
   
      if($link->query($sql)==TRUE){
	  echo '<meta http-equiv="refresh" content="0;URl=?closed"/>';
        ?>
        <script>
            window.location = 'photo_gallery.php';
        </script>
        <?php
    }else{
        echo "unabel to delete data";
    }
		
	}

if(isset($_GET['vid'])){
		$id = $_GET['vid'];
		$fileUnlink = mysqli_query($link,"SELECT * from video_gallery WHERE id= '$id'");
		$arr = mysqli_fetch_array($fileUnlink);
		$fileName = $arr['upload'];
		$delete = mysqli_query($link,"DELETE from video_gallery WHERE id='$id'");
		if($delete){
			unlink("upload/video_gallery/".$fileName);
			echo "delete success";
		}
		
	
	$sql= "DELETE FROM `video_gallery` WHERE `id`={$_GET['vid']}";
   
      if($link->query($sql)==TRUE){
	  echo '<meta http-equiv="refresh" content="0;URl=?closed"/>';
        ?>
        <script>
            window.location = 'video_gallery.php';
        </script>
        <?php
    }else{
        echo "unabel to delete data";
    }
		
	}
if(isset($_GET['cfid'])){
		$id = $_GET['cfid'];
		$fileUnlink = mysqli_query($link,"SELECT * from croud_funding WHERE id= '$id'");
		$arr = mysqli_fetch_array($fileUnlink);
		$fileName = $arr['upload'];
		$delete = mysqli_query($link,"DELETE from croud_funding WHERE id='$id'");
		if($delete){
			unlink("upload/croud_funding/".$fileName);
			echo "delete success";
		}
		
	
	$sql= "DELETE FROM `croud_funding` WHERE `id`={$_GET['vid']}";
   
      if($link->query($sql)==TRUE){
	  echo '<meta http-equiv="refresh" content="0;URl=?closed"/>';
        ?>
        <script>
            window.location = 'croud_funding.php';
        </script>
        <?php
    }else{
        echo "unabel to delete data";
    }
		
	}
 
 if(isset($_GET['downid'])){
		$id = $_GET['downid'];
		$fileUnlink = mysqli_query($link,"SELECT * from download WHERE id= '$id'");
		$arr = mysqli_fetch_array($fileUnlink);
		$fileName = $arr['upload'];
		$delete = mysqli_query($link,"DELETE from download WHERE id='$id'");
		if($delete){
			unlink("upload/download/".$fileName);
			echo "delete success";
		}
		
	
	$sql= "DELETE FROM `download` WHERE `id`={$_GET['vid']}";
   
      if($link->query($sql)==TRUE){
	  echo '<meta http-equiv="refresh" content="0;URl=?closed"/>';
        ?>
        <script>
            window.location = 'download.php';
        </script>
        <?php
    }else{
        echo "unabel to delete data";
    }
		
	}
?>