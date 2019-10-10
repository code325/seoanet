<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
include ("simple_html_dom.php");
$sedata = $_GET['search'];
if ($sedata == "") {
echo "검색어를 입력하세요";
} else {
$html = file_get_html('https://search.dcinside.com/combine/q/'.$sedata);
/*foreach($html->find('p[class=link_dsc_txt]') as $e) {
  echo $html->innertext;
}*/
echo $html;
}
?>
