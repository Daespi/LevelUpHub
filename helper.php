<?php
require_once __DIR__ . "/config.php";

function router(): string
{
    $url = parse_url($_SERVER["REQUEST_URI"])["path"];
    $path = explode("/", $url);
    $uri = array_filter($path, function ($item) {
        return $item !== "";
    });
    $uri = array_values($uri);
    if (empty($uri[0])) {
        $uri[0] = "home";
    }
    if (in_array($uri[0], PATHS, true)) {
        return $uri[0];
    }
    http_response_code(404);
    header("Location: not-found");
}
