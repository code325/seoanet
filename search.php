<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
include ("simple_html_dom.php");
$sedata = $_GET['search'];
if ($sedata == "") {
echo "검색어를 입력하세요";
} else {
$context = stream_context_create(array(
    'http' => array(
        'header' => array('User-Agent: Mozilla/5.0 (Windows; U; Windows NT 6.1; rv:2.2) Gecko/20110201'),
    ),
));
$html = file_get_html('https://search.dcinside.com/combine/q/'.$sedata, false, $context);
foreach($html->find('p[class=link_dsc_txt]') as $e) {
  echo $html->innertext;
}
}
?>
