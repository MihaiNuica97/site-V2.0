<?php
header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: *");

$json = file_get_contents('php://input');

// Converts it into a PHP object
$data = json_decode($json);

$log_directory = './projects/' . $data->name;

$projects = file_get_contents(__DIR__ . '/projects.json');

$projects_arr = json_decode($projects, true);

$project = $projects_arr[$data->name];

$images = array();

if (is_dir($log_directory))
{
        if ($handle = opendir($log_directory))
        {
                //Notice the parentheses I added:
                while(($file = readdir($handle)) !== FALSE)
                {
                        if(strpos($file, '.png') !== FALSE){
                            $images[] = $file;
                        }
                }
                closedir($handle);
        }
}

$result = array("images" => $images, "details" => $project);

echo json_encode($result);
?>