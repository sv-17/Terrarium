<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "aqua_central_db") or die("DB Connection Refused!");
 if(isset($_POST["Import"])){
		
		$filename=$_FILES["file"]["tmp_name"];		


		 if($_FILES["file"]["size"] > 0)
		 {
		  	$file = fopen($filename, "r");
	        while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
	         {


	           $sql = "INSERT into company_questions (company,question,option1,option2,option3,option4,correctoption,contributor) 
                   values ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."','".$getData[6]."','".$_SESSION['username']."')";
                   $result = mysqli_query($conn, $sql);
				if(!isset($result))
				{
					echo "<script type=\"text/javascript\">
							alert(\"Invalid File:Please Upload CSV File.\");
							window.location = \"contribute.php\"
						  </script>";		
				}
				else {
					  echo "<script type=\"text/javascript\">
						alert(\"CSV File has been successfully Imported.\");
						window.location = \"contribute.php\"
					</script>";
				}
	         }
			
	         fclose($file);	
		 }
	}	 


 ?>