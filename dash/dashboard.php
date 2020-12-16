<?php
error_reporting(0);
if (isset($_POST["title"])&&isset($_POST["tag"])&&isset($_POST["description"])&&isset($_POST["author"])){
$conn = new PDO("mysql:host=localhost;dbname=blog", 'root');
$stmt = $conn->prepare("insert into blog(id, title, tag, img, description, author) values(NULL,:title,:tag,:imgs,:desc,:author)");
$target_file = "img/blog/".basename($_FILES["imgs"]["name"]);
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
// $stmt->bindParam(':sec_desc', $_POST["secondary_description"]);
$stmt->bindParam(':author', $_POST["author"]);
$stmt->execute();

move_uploaded_file($_FILES["imgs"]["tmp_name"],"../fits/".$target_file);
echo "post stored";
}
else{echo "parse error\n".var_dump($_POST)."\n".var_dump($_FILES);}
?>