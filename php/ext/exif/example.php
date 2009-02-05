<?php
// (c) M.Boerger
//
// $Id: example.php,v 1.1.1.1 2003/03/11 01:09:18 zarzycki Exp $
//
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional">
<html>
<head>
<title>exif_read_data example</title>
</head>
<body>
<?php
$exif = exif_read_data ('tests/test1.jpg','IFD0');
echo $exif===false ? "No header data found.<br>\n" : "Image contains headers<br>";
$exif = exif_read_data ('tests/test2.jpg',0,true);
foreach($exif as $key=>$section) {
    foreach($section as $name=>$val) {
        echo "$key.$name: $val<br>\n";
    }
}
?>
</body>
</html>