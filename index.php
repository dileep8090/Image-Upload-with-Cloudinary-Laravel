<?php
require 'vendor/autoload.php';
use Cloudinary\Configuration\Configuration;
use Cloudinary\Api\Upload\UploadApi;
Configuration::instance([
    'cloud' => [
      'cloud_name' => 'dcgpdfai2', 
      'api_key' => '877516651716348', 
      'api_secret' => 'S8mJ9y6mcS56t8Behmw2nZuZ5FQ'],
    'url' => [
      'secure' => true]]);
     $data = (new UploadApi())->upload('poster.jpg');
    //  echo "url = ".$data['secure_url']."<br>";
    //  echo "public Id = ".$data['public_id']
  

?>
<img src="https://res.cloudinary.com/dcgpdfai2/image/upload/v1644053199/vfuqjoyrex3lcanvmtek.jpg" alt="">
