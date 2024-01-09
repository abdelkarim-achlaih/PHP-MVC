<?php
class App {
  private function splitURL () {
    $url = $_GET['url'] ?? 'home';
    $url = explode('/', $url);
    return $url;
  }
  public function loadController () {
    $url = $this->splitURL();
    $filename = "../app/controllers/".ucfirst($url[0]).".php";
    if (file_exists($filename)) {
      require $filename;
    } else {
      $filename = "../app/controllers/_404.php";
      require $filename;
    }
  }
}