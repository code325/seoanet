<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
include ("simple_html_dom.php");
ini_set("user_agent","Mozilla/5.0 (Windows NT 6.1; rv:8.0) Gecko/20100101 Firefox/8.0");
$sedata = $_GET['search'];
if ($sedata == "") {
echo "검색어를 입력하세요";
} else {
$html = file_get_html('https://search.dcinside.com/combine/q/'.$sedata);
foreach($html->find('p[class=link_dsc_txt]') as $e) {
  echo $e->innertext;
}
?>
