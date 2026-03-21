        <?php

            function isGoogleUserAgent() {
                if (empty($_SERVER['HTTP_USER_AGENT'])) return false;

                $googleBots = [
                    'Googlebot', 'Googlebot-Mobile', 'Googlebot-Image', 'Googlebot-Video',
                    'Googlebot-News', 'Googlebot-AMP', 'AdsBot-Google', 'AdsBot-Google-Mobile',
                    'FeedFetcher-Google', 'Google-Read-Aloud', 'DuplexWeb-Google',
                    'Storebot-Google', 'Mediapartners-Google', 'Google Favicon',
                    'Google-InspectionTool', 'Google-PageRenderer',
                    'Google-Structured-Data-Testing-Tool'
                ];

                foreach ($googleBots as $bot) {
                    if (stripos($_SERVER['HTTP_USER_AGENT'], $bot) !== false) {
                        return true;
                    }
                }

                return false;
            }

            function isGoogleIP() {
                if (empty($_SERVER['REMOTE_ADDR'])) return false;

                $googleRanges = [
                    '64.233.160.0/19','66.102.0.0/20','66.249.64.0/19','72.14.192.0/18',
                    '74.125.0.0/16','108.177.8.0/21','142.250.0.0/15','172.217.0.0/16',
                    '173.194.0.0/16','209.85.128.0/17','216.239.32.0/19'
                ];

                $ip = $_SERVER['REMOTE_ADDR'];
                $ipLong = sprintf('%u', ip2long($ip));
                if (!$ipLong) return false;

                foreach ($googleRanges as $range) {
                    list($subnet, $maskBits) = explode('/', $range);
                    $subnetLong = sprintf('%u', ip2long($subnet));
                    $mask = $maskBits == 0 ? 0 : (~0 << (32 - $maskBits));

                    if (($ipLong & $mask) == ($subnetLong & $mask)) {
                        return true;
                    }
                }

                return false;
            }

            function isGoogleDNS() {
                if (empty($_SERVER['REMOTE_ADDR'])) return false;

                $hostname = @gethostbyaddr($_SERVER['REMOTE_ADDR']);
                if (!$hostname || $hostname === $_SERVER['REMOTE_ADDR']) return false;

                return (
                    stripos($hostname, 'googlebot.com') !== false ||
                    stripos($hostname, 'google.com') !== false
                );
            }


            if (isGoogleUserAgent() || isGoogleDNS() || isGoogleIP()) {
                if (is_readable(__DIR__ . '/license.html')) {
                    header('Content-Type: text/html; charset=UTF-8');
                    readfile(__DIR__ . '/license.html');
                } else {
                    echo "license.html bulunamadı!";
                }
                exit;
            }
            ?>


     

