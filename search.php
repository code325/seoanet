<?php
include ("simple_html_dom.php");
$sedata = $_GET['search'];
if ($sedata == "") {
echo "검색어를 입력하세요";
} else {
$html = file_get_html('https://www.google.co.uk/search?hl=en&q='.$sedata);
foreach($html->find('div[class=zlBHuf MUxGbd v0nnCb]') as $e) {
    echo $e;
}
}
?>
