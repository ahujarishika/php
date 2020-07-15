
 <?php		
 $a=$_POST["lower"];
 $b=$_POST["upper"];
	
if(isset($_POST["check"]))
{
$a=$_POST["lower"];
$b=$_POST["upper"];
$flag=0;
for($a;$a<$b;$a++)
{
for($j=2;$j<$a;$j++)
{
if($a%$j==0)
{
$flag=1;
}
}
if($flag==0)
{
echo " ".$a." ";
}
$flag=0;
}
}
?>
