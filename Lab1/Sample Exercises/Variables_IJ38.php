<html><head><title> PHP Test: Variables </title><head>
<body bgcolor=black><font color=white>
<?php
echo "<b>Using String Variables</b><br>";
echo "Today's date is: ";
echo gmdate("M d Y");
echo "<br>";

$school = "Adamson Unversity";
$course = "BS Computer Engineering";
$class = "Engineering Tecchnology";
echo "I go to $school.<br>";
echo "My course is $course.<br>";
echo "I attend the class: Software Design-$class.<br><br>";

echo "<b> Using String Concatention</b><br>";
$f_name = "Ian Jude";
$l_name = "Timbungco";
$author = $f_name. " " .$l_name;
$book = "Harry Potter";
echo "The book <i>$book </i> is written by $author. <br><br>";

echo "<b> Using STring Concatention</b><br>";
$title = "Harry Potter: "; 
$subtitle = "The Goblet of Fire";
$title1 = $subtitle;
echo "$title<br> OR: <br>";
$title2 = "The Lord of The Rings: ";
$subtitle2 = "Return of the King";
$title_2 = $title2;
$subtitle_2 = $subtitle2;
echo "$title_2 <br><br>";

echo "<b>Using String Functions</b><br>";
$name = "Ian Jude Timbungco";
$n = strlen($name);
$l = strtolower($name);
$u = strtoupper($name);
$w = ucwords($name);
echo "<i>$name</i> has $n characters.<br>";
echo "<i>$name</i> in lowercase: $l.<br>";
echo "<i>$name</i> in lowercase: $u.<br>";
echo "<i>$name</i> using <i>ucwords()</i>:$w.<br><br>";
?>
</font>
</body>
</html>