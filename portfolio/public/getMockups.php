<?php
$log_directory = './mockups/';
header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");
$results_array = array();

if (is_dir($log_directory))
{
        if ($handle = opendir($log_directory))
        {
                //Notice the parentheses I added:
                while(($file = readdir($handle)) !== FALSE)
                {
                        if(strpos($file, '.png') !== FALSE){
                            $results_array[] = $file;
                        }
                }
                closedir($handle);
        }
}

echo json_encode($results_array);
?>