<!DOCTYPE html>
<html>
<body>

<?php
$xml=simplexml_load_file("data.xml") or die("Error: Cannot create object");
for ($i=0;$i<11;$i++){
	$author = explode(", ",$xml->book[$i]->author);
	echo "Author: " . "$author[1] $author[0]" . "<br>";
	echo "Title: " . $xml->book[$i]->title . "<br>";
	echo "Genre: " . $xml->book[$i]->genre . "<br>";
	echo "Price: $" . $xml->book[$i]->price . "<br>";
	echo "Published Date: " . $xml->book[$i]->publish_date . "<br>" . "<br>";
}
?>

</body>
</html>