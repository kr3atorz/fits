<?php
error_reporting(0);
if (isset($_POST["title"])&&isset($_POST["tag"])&&isset($_POST["description"])&&isset($_POST["author"])){
$conn = new PDO("mysql:host=localhost;dbname=fitstn_db", 'fitstn_root', 'Sexmachine69');
$stmt = $conn->prepare("insert into blog(id, title, tag, img, description, author, secondary_description) values(NULL,:title,:tag,:imgs,:desc,:author,:sec_desc)");
$target_file = "../img/blog/".basename($_FILES["imgs"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "only JPG, JPEG, PNG & GIF files are allowed";
  exit;
}
$stmt->bindParam(':title', $_POST["title"]);
$stmt->bindParam(':tag', $_POST["tag"]);
$stmt->bindParam(':imgs', $target_file);
$stmt->bindParam(':desc', $_POST["description"]);
$stmt->bindParam(':sec_desc', $_POST["secondary_description"]);
$stmt->bindParam(':author', $_POST["author"]);
$stmt->execute();

move_uploaded_file($_FILES["imgs"]["tmp_name"],$target_file);
echo "row added";
}
else{echo "parse error".var_dump($_POST);}
?>