<?php
require_once('/Image/QRCode.php');

if (!isset($_REQUEST["chl"])) {
  return false;
}else{
  $str = $_REQUEST["chl"];
}

// QRコードを生成
$qr = new Image_QRCode();
$image = $qr->makeCode(htmlspecialchars($str, ENT_QUOTES)));
