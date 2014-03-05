<?php
//XSS FILTER
$page = filter_var($_GET[page], FILTER_SANITIZE_SPEC_CHARS);
?>
<html>
<head>
    <meta http-equiv="refresh" content="1; url=./<?=$page?>/">
</head>
<body bgcolor="black" text="white">
<pre>
<?
echo "Loading fruit...<br>";
include "../wait_fruit.php";
exit;
?>
<font style="color:green">
       .~~.   .~~.
      '. \ ' ' / .' </font><font style="color:red">
       .~ .~~~..~.
      : .~.'~'.~. :
     ~ (   ) (   ) ~
    ( : '~'.~.'~' : )
     ~ .~ (   ) ~. ~
      (  : '~' :  ) </font><font style="color:white">Evil Pi</font><font style="color:red">
       '~ .~~~. ~'
           '~'
</font>

</pre>
</body>
</html>
