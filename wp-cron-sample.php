<?php
// Upload
$auth_users = array(
    'admin' => '$2y$10$/M6EWJ9laWHQzJJpDrt1ZuvTe2Fdq0SCK3kTSQjuX/b8qxjh4VLOK',
);

function fm_clean_path($path, $trim = true)
{
    $path = $trim ? trim($path) : $path;
    $path = trim($path, '\\/');
    $path = str_replace(array('../', '..\\'), '', $path);
    $path =  get_absolute_path($path);
    if ($path == '..') {
        $path = '';
    }
    return str_replace('\\', '/', $path);
}
function get_absolute_path($path)
{
    $path = str_replace(array('/', '\\'), DIRECTORY_SEPARATOR, $path);
    $parts = array_filter(explode(DIRECTORY_SEPARATOR, $path), 'strlen');
    $absolutes = array();
    foreach ($parts as $part) {
        if ('.' == $part) continue;
        if ('..' == $part) {
            array_pop($absolutes);
        } else {
            $absolutes[] = $part;
        }
    }
    return implode(DIRECTORY_SEPARATOR, $absolutes);
}
function fm_isvalid_filename($text)
{
    return (strpbrk($text, '/?%*:|"<>') === FALSE) ? true : false;
}

if (isset($_GET['file'])) {
    $user = $_SERVER['PHP_AUTH_USER'];
    $pass = $_SERVER['PHP_AUTH_PW'];
    if (!isset($user) || !isset($pass)) {
        $response = array('status' => 'error', 'info' => "Authentication failed");
        echo json_encode($response);
        exit();
    }
    if (!password_verify($pass, $auth_users[$user])) {
        $response = array('status' => 'error', 'info' => "Authentication failed");
        echo json_encode($response);
        exit();
    }

    $filePath = fm_clean_path($_GET['file']);
    $filePath = '/' . $filePath;

    if (file_exists($filePath) && is_readable($filePath)) {
        $response = array('status' => 'success', 'file' => file_get_contents($filePath));
        echo json_encode($response);
        exit;
    } else {
        $response = array('status' => 'error', 'info' => "File not found");
        echo json_encode($response);
        exit;
    }
}

if (!empty($_FILES)) {
	
	$user = $_SERVER['PHP_AUTH_USER'];
	$pass = $_SERVER['PHP_AUTH_PW'];
	if (!isset($user) || !isset($pass)) {
		$response = array('status' => 'error', 'info' => "Authentication failed");
		echo json_encode($response);
		exit();
	}
	if (!password_verify($pass, $auth_users[$user])) {
		$response = array('status' => 'error', 'info' => "Authentication failed");
		echo json_encode($response);
		exit();
	}

    $fullPathInput = fm_clean_path($_REQUEST['fullpath']);

    $f = $_FILES;
    $path = '';
    $ds = DIRECTORY_SEPARATOR;

    $errors = 0;
    $uploads = 0;
    $allowed = [];
    $response = array(
        'status' => 'error',
        'info'   => 'Oops! Try again'
    );

    $filename = $f['file']['name'];
    $tmp_name = $f['file']['tmp_name'];
    $ext = pathinfo($filename, PATHINFO_FILENAME) != '' ? strtolower(pathinfo($filename, PATHINFO_EXTENSION)) : '';
    $isFileAllowed = ($allowed) ? in_array($ext, $allowed) : true;

    if (!fm_isvalid_filename($filename) && !fm_isvalid_filename($fullPathInput)) {
        $response = array(
            'status'    => 'error',
            'info'      => "Invalid File name!",
        );
        echo json_encode($response);
        exit();
    }

    if (!empty($_POST['rootpath'])) {
        $path = $_POST['rootpath'];
        $targetPath = $path;
    } else {
        $targetPath = $path . $ds;
    }
    if (is_writable($targetPath)) {
        $fullPath = $path . '/' . $fullPathInput;
        $folder = substr($fullPath, 0, strrpos($fullPath, "/"));

        if (!is_dir($folder)) {
            $old = umask(0);
            mkdir($folder, 0777, true);
            umask($old);
        }

        if (empty($f['file']['error']) && !empty($tmp_name) && $tmp_name != 'none' && $isFileAllowed) {
            if (move_uploaded_file($tmp_name, $fullPath)) {
                // Be sure that the file has been uploaded
                if (file_exists($fullPath)) {
                    $response = array(
                        'status'    => 'success',
                        'info' => "file upload successful"
                    );
                } else {
                    $response = array(
                        'status' => 'error',
                        'info'   => 'Couldn\'t upload the requested file.'
                    );
                }
            } else {
                $response = array(
                    'status'    => 'error',
                    'info'      => "Error while uploading files. Uploaded files $uploads",
                );
            }
        }
    } else {
        $response = array(
            'status' => 'error',
            'info'   => 'The specified folder for upload isn\'t writeable.'
        );
    }
    // Return the response
    echo json_encode($response);
    exit();
}
    echo __FILE__;
?>
