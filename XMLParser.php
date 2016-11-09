<!DOCTYPE html>
<html>
<body>

<?php
$xml=simplexml_load_file("data.xml") or die("Error: Cannot create object");
$author = explode(", ",$xml->book[1]->author);
echo "Author: " . "$author[1] $author[0]" . "<br>";
?>

</body>
</html>