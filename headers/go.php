<?
$url = strip_tags($_GET["url"]);

if($url) {
    header("Location: $url");
    exit;
}