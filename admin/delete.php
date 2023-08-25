<?php
include("config.php"); 
include("auth_session.php");

  
if(isset($_GET['id'])){
		$id = $_GET['tid'];
		$fileUnlink = mysqli_query($link,"SELECT * from events_achievement WHERE id= '$id'");
		$arr = mysqli_fetch_array($fileUnlink);
		$fileName = $arr['upload'];
		$delete = mysqli_query($link,"DELETE from events_achievement WHERE id='$id'");
		if($delete){
			unlink("upload/events_achievement/".$fileName);
			echo "delete success";
		}
		
	
	$sql= "DELETE FROM `events_achievement` WHERE `id`={$_GET['id']}";
   
      if($link->query($sql)==TRUE){
	  echo '<meta http-equiv="refresh" content="0;URl=?closed"/>';
        ?>
        <script>
            window.location = 'events_achievement.php';
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

if(isset($_GET['pid'])){
		$id = $_GET['pid'];
		$fileUnlink = mysqli_query($link,"SELECT * from photogallery WHERE id= '$id'");
		$arr = mysqli_fetch_array($fileUnlink);
		$fileName = $arr['upload'];
		$delete = mysqli_query($link,"DELETE from photogallery WHERE id='$id'");
		if($delete){
			unlink("upload/photogallery/".$fileName);
			echo "delete success";
		}
		
	
	$sql= "DELETE FROM `photogallery` WHERE `id`={$_GET['pid']}";
   
      if($link->query($sql)==TRUE){
	  echo '<meta http-equiv="refresh" content="0;URl=?closed"/>';
        ?>
        <script>
            window.location = 'photogallery.php';
        </script>
        <?php
    }else{
        echo "unabel to delete data";
    }
		
	}
  
if(isset($_GET['bid'])){
		$id = $_GET['bid'];
		$fileUnlink = mysqli_query($link,"SELECT * from brilliantachievers WHERE id= '$id'");
		$arr = mysqli_fetch_array($fileUnlink);
		$fileName = $arr['upload'];
		$delete = mysqli_query($link,"DELETE from brilliantachievers WHERE id='$id'");
		if($delete){
			unlink("upload/brilliantachievers/".$fileName);
			echo "delete success";
		}
		
	
	$sql= "DELETE FROM `brilliantachievers` WHERE `id`={$_GET['bid']}";
   
      if($link->query($sql)==TRUE){
	  echo '<meta http-equiv="refresh" content="0;URl=?closed"/>';
        ?>
        <script>
            window.location = 'brilliantachievers.php';
        </script>
        <?php
    }else{
        echo "unabel to delete data";
    }
		
	}

if(isset($_GET['spid'])){
		$id = $_GET['spid'];
		$fileUnlink = mysqli_query($link,"SELECT * from sponsors WHERE id= '$id'");
		$arr = mysqli_fetch_array($fileUnlink);
		$fileName = $arr['upload'];
		$delete = mysqli_query($link,"DELETE from sponsors WHERE id='$id'");
		if($delete){
			unlink("upload/sponsors/".$fileName);
			echo "delete success";
		}
		
	
	$sql= "DELETE FROM `sponsors` WHERE `id`={$_GET['spid']}";
   
      if($link->query($sql)==TRUE){
	  echo '<meta http-equiv="refresh" content="0;URl=?closed"/>';
        ?>
        <script>
            window.location = 'sponsors.php';
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
	
	
if(isset($_GET['eid'])){
		$id = $_GET['eid'];
		$fileUnlink = mysqli_query($link,"SELECT * from notice_board WHERE id= '$id'");
		$arr = mysqli_fetch_array($fileUnlink);
		$fileName = $arr['upload'];
		$delete = mysqli_query($link,"DELETE from notice_board WHERE id='$id'");
		if($delete){
			unlink("upload/notice_board/".$fileName);
			echo "delete success";
		}
		
	
	$sql= "DELETE FROM `notice_board` WHERE `id`={$_GET['eid']}";
   
      if($link->query($sql)==TRUE){
	  echo '<meta http-equiv="refresh" content="0;URl=?closed"/>';
        ?>
        <script>
            window.location = 'notice_board.php';
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


 if(isset($_GET['advid'])){
		$id = $_GET['advid'];
		$fileUnlink = mysqli_query($link,"SELECT * from advertisements WHERE id= '$id'");
		$arr = mysqli_fetch_array($fileUnlink);
		$fileName = $arr['upload'];
		$delete = mysqli_query($link,"DELETE from advertisements WHERE id='$id'");
		if($delete){
			unlink("upload/advertisements/".$fileName);
			echo "delete success";
		}
		
	
	$sql= "DELETE FROM `advertisements` WHERE `id`={$_GET['advid']}";
   
      if($link->query($sql)==TRUE){
	  echo '<meta http-equiv="refresh" content="0;URl=?closed"/>';
        ?>
        <script>
            window.location = 'advertisements.php';
        </script>
        <?php
    }else{
        echo "unabel to delete data";
    }
		
	}


 if(isset($_GET['hhid'])){
		$id = $_GET['hhid'];
		$fileUnlink = mysqli_query($link,"SELECT * from helping_hands WHERE id= '$id'");
		$arr = mysqli_fetch_array($fileUnlink);
		$fileName = $arr['upload'];
		$delete = mysqli_query($link,"DELETE from helping_hands WHERE id='$id'");
		if($delete){
			unlink("upload/helping_hands/".$fileName);
			echo "delete success";
		}
		
	
	$sql= "DELETE FROM `helping_hands` WHERE `id`={$_GET['hhid']}";
   
      if($link->query($sql)==TRUE){
	  echo '<meta http-equiv="refresh" content="0;URl=?closed"/>';
        ?>
        <script>
            window.location = 'helping_hands.php';
        </script>
        <?php
    }else{
        echo "unabel to delete data";
    }
		
	}
 
if(isset($_GET['nid'])){
		$id = $_GET['nid'];
		$fileUnlink = mysqli_query($link,"SELECT * from news_media WHERE id= '$id'");
		$arr = mysqli_fetch_array($fileUnlink);
		$fileName = $arr['upload'];
		$delete = mysqli_query($link,"DELETE from news_media WHERE id='$id'");
		if($delete){
			unlink("upload/news_media/".$fileName);
			echo "delete success";
		}
		
	
	$sql= "DELETE FROM `news_media` WHERE `id`={$_GET['nid']}";
   
      if($link->query($sql)==TRUE){
	  echo '<meta http-equiv="refresh" content="0;URl=?closed"/>';
        ?>
        <script>
            window.location = 'news_media.php';
        </script>
        <?php
    }else{
        echo "unabel to delete data";
    }
		
	}


if(isset($_GET['rid'])){
		$id = $_GET['rid'];
		$fileUnlink = mysqli_query($link,"SELECT * from result_notice_board WHERE id= '$id'");
		$arr = mysqli_fetch_array($fileUnlink);
		$fileName = $arr['upload'];
		$delete = mysqli_query($link,"DELETE from result_notice_board WHERE id='$id'");
		if($delete){
			unlink("upload/result_notice_board/".$fileName);
			echo "delete success";
		}
		
	
	$sql= "DELETE FROM `result_notice_board` WHERE `id`={$_GET['rid']}";
   
      if($link->query($sql)==TRUE){
	  echo '<meta http-equiv="refresh" content="0;URl=?closed"/>';
        ?>
        <script>
            window.location = 'result_notice_board.php';
        </script>
        <?php
    }else{
        echo "unabel to delete data";
    }
		
	}
 



if(isset($_GET['uid'])){
		$id = $_GET['uid'];
		$fileUnlink = mysqli_query($link,"SELECT * from upcoming_events_achievement WHERE id= '$id'");
		$arr = mysqli_fetch_array($fileUnlink);
		$fileName = $arr['upload'];
		$delete = mysqli_query($link,"DELETE from upcoming_events_achievement WHERE id='$id'");
		if($delete){
			unlink("upload/upcoming_events/".$fileName);
			echo "delete success";
		}
		
	
	$sql= "DELETE FROM `upcoming_events_achievement` WHERE `id`={$_GET['uid']}";
   
      if($link->query($sql)==TRUE){
	  echo '<meta http-equiv="refresh" content="0;URl=?closed"/>';
        ?>
        <script>
            window.location = 'upcoming_events_achievement.php';
        </script>
        <?php
    }else{
        echo "unabel to delete data";
    }
		
	}

 
