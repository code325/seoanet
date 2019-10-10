<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
include ("simple_html_dom.php");
$sedata = $_GET['search'];
$sedata = urlencode($sedata);
if ($sedata == "") {
echo "검색어를 입력하세요";
} else {
$html = file_get_html('https://m.search.naver.com/search.naver?sm=mtp_hty.top&where=m&query='.$sedata);
foreach($html->find('a[class=api_txt_lines total_tit]') as $e) {
  $bb = $html->innertext;
  echo strip_tags($bb);
}
}
?>
