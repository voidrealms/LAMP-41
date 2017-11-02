<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Untitled</title>
</head>

<body>

<?php

//serialization

class test
{
	public $Name;
}

$a = new test();
$a->Name = "My name is Bryan";

//save to the disk
$s = serialize($a);
file_put_contents("serialclass.txt",$s);

echo "Saved to disk<br>";

//load it back into ram
$u = file_get_contents("serialclass.txt");
$b = unserialize($u);

echo $b->Name;

?>

</body>
</html>
