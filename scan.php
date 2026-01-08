<?php
/*
author :HMH§ociety
title: backdoor scanner v 1.0.0
*/
echo '<style>body {background-color:#189048;color:black;} body,td,th { font: 9pt Courier New;margin:0;vertical-align:top; } span,h1,a { color:#000} span { font-weight: bolder; } h1 { border:1px solid #000;padding: 2px 5px;font: 14pt Courier New;margin:0px; } div.content { padding: 5px;margin-left:5px;} a { text-decoration:none; } a:hover { background:#ff0000; } .ml1 { border:1px solid #444;padding:5px;margin:0;overflow: auto; } .bigarea { width:100%;height:250px; } input, textarea, select { margin:0;color:#000;background-color:#189048;border:1px solid #000; font: 9pt Monospace,"Courier New"; } form { margin:0px; } #toolsTbl { text-align:center; } .toolsInp { width: 80%; } .main th {text-align:left;} .main tr:hover{background-color:#5e5e5e;} .main td, th{vertical-align:middle;} pre {font-family:Courier,Monospace;} #cot_tl_fixed{position:fixed;bottom:0px;font-size:12px;left:0px;padding:4px 0;clip:_top:expression(document.documentElement.scrollTop document.documentElement.clientHeight-this.clientHeight);_left:expression(document.documentElement.scrollLeft   document.documentElement.clientWidth - offsetWidth);} .style2 {color: #00FF00} .style3 {color: #009900} .style4 {color: #006600} .style5 {color: #00CC00} .style6 {color: #003300} .style8 {color: #33CC00} #footer { margin-bottom: 10px; color: #666; vertical-align: top; text-align: center; font-size: 11px; } #footer ul { margin: 0; padding: 0; list-style: none; } #footer li { display: inline-block; margin-right: 15px; border-right: 1px solid #666; vertical-align: middle; } #footer li a { margin-right: 15px; } #footer li:last-child { margin-right: 0; border-right: 0; } #footer li:last-child a { margin-right: 0; } #footer a { color: #666; } #footer a:hover { color: #858585; } #footer .footer-left { height: 20px; vertical-align: middle; line-height: 20px; } @media (min-width: 39rem) { #footer { display: flex; flex-flow: row wrap; justify-content: space-between; align-items: center; align-content: center; margin-bottom: 20px; } #footer .footer-left { align-self: flex-start; margin-right: 20px; } #footer .footer-right { align-self: flex-end; } }</style>';
set_time_limit(0);
error_reporting(0);
@ini_set('zlib.output_compression', 0);
@ini_set('implicit_flush', 1);
for($i = 0; $i < ob_get_level(); $i++) { ob_end_flush(); }
ob_implicit_flush(1);
// if($argv[1]){
// 	$dir = $argv[1];
// 	scanBackdoor("$dir");
// }else{
// 	echo "Usage php scan.php /home or /public_html/.";
// }




$path = getcwd();
if(isset($_GET['dir'])){
    $path =$_GET['dir'];
}


if(isset($_GET['kill'])){
    unlink(__FILE__);
}
echo "<a href='?kill'><font color='yellow'>[Self Delete]</font></a><br>";
echo '<form action="" method="get"> <input type="text" name="dir" value='.$path.' style="width: 548px;"> <input type="submit" value="scan"></form><br>';

echo "CURRENT DIR: <font color='yellow'>$path</font><br>";
if(isset($_GET['delete'])){
    unlink($_GET['delete']);
    $status = "<font color='black'>FAILED</font>";
    if(!file_exists($_GET['delete'])){
        $status = "<font color='yellow'>Success</font>";
		
    }
    echo "TRY TO DELETE: ".$_GET['delete']." $status <br>";exit;
}

scanBackdoor($path);
function save($fname,$value){
	$file = fopen($fname, "a");
	fwrite($file, $value);
	fclose($file);//
}
// $domain = $_SERVER['REQUEST_SCHEME'].'//'.$_SERVER['SERVER_NAME'];
function checkBackdoor($file_location){
    global $path;
    $patern = "#exec\(|gzinflate\(|file_put_contents\(|file_get_contents\(|system\(|passthru\(|shell_exec\(|move_uploaded_file\(|eval\(|base64#";
    $contents = file_get_contents($file_location);
    if(strlen($contents)> 0){
        if(preg_match($patern, strtolower($contents))){
            echo "[+] Susspect file -> <a href='?delete=$file_location&dir=$path'><font color='yellow'>[DELETE]</font></a> <font color='black'>$file_location</font> <br>";
            save("shell-found.txt","$file_location\n");
            echo '<textarea name="content" cols="80" rows="15">'.htmlspecialchars($contents).'</textarea><br>><br>';
        }
    }   
}

function scanBackdoor($current_dir){
	if(is_readable($current_dir)){
	 	$dir_location = scandir($current_dir);
		foreach ($dir_location as $file) {
            if($file === "." | $file === ".."){
                continue;
            }
            $file_location = str_replace("//", "/",$current_dir.'/'.$file);
            $nFile = substr($file, -4, 4);
            if($nFile == ".php"){
                checkBackdoor($file_location);
            }else if(is_dir($file_location)){
                scanBackdoor($file_location);
            }
		}
	}
}

?>