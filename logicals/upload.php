<?php
    $messages = array();  
    if (isset($_POST['send']) && isset($_SESSION['user'])) {
        //print_r($_FILES);
        foreach($_FILES as $file) {
            if ($file['error'] == 4);   // There was no file uploaded
            elseif (!in_array($file['type'], $MEDIATYPES))
                $messages[] = " The type is not correct: " . $file['name'];
            elseif ($file['error'] == 1   // The file size exceeds the limit allowed in php.ini
                        or $file['error'] == 2   // The file size exceeds the limit allowed in HTML Form
                        or $file['size'] > $MAXSIZE) 
                $messages[] = " Too big file: " . $file['name'];
            else {
                $target_dir = $FOLDER.strtolower($file['name']);
                if (file_exists($target_dir))
                    $messages[] = " Already exist: " . $file['name'];
                else {
                    move_uploaded_file($file['tmp_name'], $target_dir);
                    $messages[] = ' Ok: ' . $file['name'];
                }
            }
        }        
    }
if(!isset($_SESSION['user']))
{
    $messages[] = "Please log in first!";
}

?>