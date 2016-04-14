<!DOCTYPE>
<head>
<link rel="stylesheet" type="text/css" href="lib/emoji.css">
</head>
<body>
<?php
include('lib/emoji.php');

$text = '欢迎!\ue225\ue43c\ue120';
$contentStr = preg_replace("#\\\u([0-9a-f]+)#ie","iconv('UCS-2','UTF-8', pack('H4', '\\1'))", $text);

$content = emoji_unified_to_html(emoji_softbank_to_unified($contentStr));
var_dump($content);
?>
</body>