<?php include("config.php"); ?>
<?php  
error_reporting (0);
 echo "hii";
if(isset($_POST['btn_submit']))
{   
		$name = $_POST['name'];
		$mobile = $_POST['mobile'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$qualification = $_POST['qualification'];
		$occ = $_POST['occ'];
		$experty = $_POST['experty'];
		$s_experience = $_POST['s_experience'];
		$age_group = $_POST['age_group'];
		$gender = $_POST['gender'];
		$r_join = $_POST['r_join'];



		 
	echo $sql="INSERT INTO `reg_individual`( `name`, `mobile`, `email`, `address`, `qualification`, `occ`, `experty`, `s_experience`, `age_group`, `gender`, `r_join`) VALUES ('$name', '$mobile', '$email', '$address', '$qualification', '$occ', '$experty', '$s_experience', '$age_group', '$gender', '$r_join')";
	
	
	
	$result=$link->query($sql);
	if($result)
	{
	?>
<script> 
			window.alert("Information Updated")
        	window.location.href="reg_individual.php";
        </script>
<?php
	}
	else 
	{?>
<script> window.alert("Unable to Update")</script>
<?php 
	}
}
?>