<?php
require_once('Image/QRCode.php');

//入力：データ
if (!isset($_REQUEST["chl"])) {
  return false;
}
$str = $_REQUEST["chl"];

//入力：エラー検出訂正(M,H)
$chld = "M";
if(isset($_REQUEST["chld"])) {
	$chldRaw = $_REQUEST["chld"];
	if ( ($chldRaw === "H") || ($chldRaw === "h") ) {
		$chld = "H";
	}
}

// QRコードを生成
$qr = new Image_QRCode();
$option = array(
	"module_size"=>5,     //サイズ=>1〜19で指定
	"image_type"=>"png",   //画像形式=>jpegかpngを指定
	"output_type"=>"display",  //出力方法=>displayかreturnで指定 returnの場合makeCodeで画像リソースが返される
	"error_correct"=>$chld     //エラー検出訂正(L<M<Q<H)
);
$qr->makeCode($str,$option); 

