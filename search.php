<?php
include ("simple_html_dom.php");
$sedata = $_GET['search'];
if ($sedata == "") {
echo "검색어를 입력하세요";
} else {
echo "검색어가 입력되었습니다!";
}
