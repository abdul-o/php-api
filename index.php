<?php
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');
header('Access-Control-Allow-Credentials: true');
header("Content-Type: application/json; charset=UTF-8");


$response = [
    "email" => "abdullateefdauda01@gmail.com", 
    "current_datetime" => gmdate('Y-m-d\TH:i:s\Z'), 
    "github_url" => "https://github.com/abdul-o/info_api.git", 
];
http_response_code(200);
echo json_encode($response, JSON_PRETTY_PRINT);

?>