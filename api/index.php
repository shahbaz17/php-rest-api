<?php
require "../start.php";
use Src\Post;

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode( '/', $uri );

// endpoints starting with `/post` or `/posts` for GET shows all posts
// everything else results in a 404 Not Found
if ($uri[1] !== 'post') {
  if($uri[1] !== 'posts'){
    header("HTTP/1.1 404 Not Found");
    exit();
  }
}

// endpoints starting with `/posts` for POST/PUT/DELETE results in a 404 Not Found
if ($uri[1] == 'posts' and isset($uri[2])) {
    header("HTTP/1.1 404 Not Found");
    exit();
}

// the post id is, of course, optional and must be a number
$postId = null;
if (isset($uri[2])) {
    $postId = (int) $uri[2];
}

$requestMethod = $_SERVER["REQUEST_METHOD"];

// pass the request method and post ID to the Post and process the HTTP request:
$controller = new Post($dbConnection, $requestMethod, $postId);
$controller->processRequest();