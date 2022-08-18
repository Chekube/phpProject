
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
 
<?php
ini_set('display_errors',0);
 
if( isset( $_REQUEST['calculate'] ))
{
$operator=$_REQUEST['operator'];
$n1 = $_REQUEST['first_value'];
$n2 = $_REQUEST['second_value'];
 
if($operator=="+")
{
$res= $n1+$n2;
}
if($operator=="-")
{
$res= $n1-$n2;
}
if($operator=="*")
{
$res =$n1*$n2;
}
if($operator=="/")
{
$res= $n1/$n2;
}
 
if($_REQUEST['first_value']==NULL || $_REQUEST['second_value']==NULL)
{
echo "<script language=javascript> alert(\"Please Enter Correct values.\");</script>";
}
}
?>

<form>
    <table style="border:none">
    
    <tr>
        <td style="background-color:blue; color:black; font-family:'san serif'">Enter Number</td>
        <td colspan="1">
        <input name="first_value" type="text" style="color:blue"/></td>
    </tr>
    
    <tr>
        <td style="color:navy; font-family:'san serif'">Select Operator</td>
        <td><select name="operator" style="width: 65px">
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
        </select></td>
    </tr>
    
    <tr>
        <td style="background-color:blue; color:black; font-family:'san serif'">Enter Number</td>
        <td class="auto-style5">
        <input name="second_value" type="text"  style="color:blue"/></td> 
    </tr>
    
    <tr>
        <td></td>
        <td><input type="submit" name="calculate" value="Calculate" style="color:white;background-color:navy" /></td>	 
    </tr>
    
    <tr>
        <td style="background-color:blue;color:black">Output = </td>
        <td style="color:blue"><?php echo $res;?></td>
    </tr>	
    
    </table>
</form>
 
</body>
</html>