<?php
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
$berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
if ($iphone || $android || $palmpre || $ipod || $berry == true)
{
header('Location:https://srfh74564fsh4f.herokuapp.com/'); //URL de la interfaz para m�vil
echo "<script>window.location='https://srfh74564fsh4f.herokuapp.com/'</script>"; //URL de la interfaz para m�vil
}
else
{

}
?>
