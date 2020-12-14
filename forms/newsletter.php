<?php
if (isset($_POST['email'])) {
if ($_POST['email'] != "") 
{  
   $email = filter_var($_POST['email'] , FILTER_SANITIZE_EMAIL); 
 
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)) 
		{  
			echo "red";
			exit;

		} 
		else
		{
//mysql
		$conn = new PDO("mysql:host=localhost;dbname=fitstn_db", 'root', 'Sexmachine69');
		$stmt1 = $conn->prepare("SELECT email FROM newsletter WHERE email = :e");
		$stmt1->bindParam(':e', $_POST['email']);
		$stmt1->execute();
			if ($stmt1->fetch())
			{
			$result = "yellow";
			}
			else
			{

			$stmt = $conn->prepare("INSERT INTO newsletter(email) VALUES (:e)");
			$stmt->bindParam(':e', $_POST['email']);
			$stmt->execute();
    		$stmt1->execute();
			if ($stmt1->fetch()) 
			{
			$result = "light-green";
			}
			}
} 
}
else 
{  
	echo "red";
	exit;
}
echo $result;
}
?>