<?php
function show ($item) {
  echo '<pre>';
  print_r($item);
  echo '</pre>';
}
function splitURL () {
  $url = $_GET['url'] ?? 'home';
  $url = explode('/', $url);
  return $url;
}
function loadController () {
  $url = splitURL();
  $filename = "../app/controllers/".ucfirst($url[0]).".php";
  if (file_exists($filename)) {
    require $filename;
  } else {
    $filename = "../app/controllers/_404.php";
    require $filename;
  }
}
loadController();