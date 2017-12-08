<?php
require_once('Image/QRCode.php');

if (!isset($_REQUEST["chl"])) {
  return false;
}else{
  $str = $_REQUEST["chl"];
}

// QRコードを生成
$qr = new Image_QRCode();
$option = array(
	"module_size"=>5,     //サイズ=>1〜19で指定
	"image_type"=>"png",   //画像形式=>jpegかpngを指定
	"output_type"=>"display",  //出力方法=>displayかreturnで指定 returnの場合makeCodeで画像リソースが返される
	"error_correct"=>"H"     //クオリティ(L<M<Q<H)を指定
);
$qr->makeCode($str,$option); 
