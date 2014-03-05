<?php
//XSS FILTER
$page = filter_var($_GET[page], FILTER_SANITIZE_SPEC_CHARS);
?>
<html>
<head>
    <meta http-equiv="refresh" content="1; url=./wait.php?page=<?=$page?>">
</head>
<body bgcolor="black" text="white">
<pre>
<?php
echo "Please wait...";
?>
</pre>
</body>
</html>
