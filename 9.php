<html>
<body>
<h1> LEAP YEAR </h1>
<form action = "" method = "post">
Enter the Year
<input type = "text" name = "year" />
<input type = "submit" />
</form>
</body>
</html>

<?php
if ($_POST)
{
$year = $_POST['year'];
if(!is_numeric($year))
{
echo "String are not allowed, Please ENter a year";
}
if(($year %4==0) && ($year %100!=0))
{
echo "<p> $year is a leap year </p> ";
}
else
{
echo " <p> $year is not a leap year </p> ";
}
}
?>