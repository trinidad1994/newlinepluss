<?php
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
$berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
if ($iphone || $android || $palmpre || $ipod || $berry == true)
{
header('Location:https://app.funnel-preview.com/for_domain/joendy25.clickfunnels.com/optin1632017648131?updated_at=bd50f248b119e9c0e05cde8f128fd8a2v2&track=0&preview=true'); //URL de la interfaz para m�vil
echo "<script>window.location='https://app.funnel-preview.com/for_domain/joendy25.clickfunnels.com/optin1632017648131?updated_at=bd50f248b119e9c0e05cde8f128fd8a2v2&track=0&preview=true'</script>"; //URL de la interfaz para m�vil
}
else
{

}
?>
