<html>
<head><title></title>

<!------ Include the above in your HEAD tag ---------->
</head>
<body>
<?php 
session_start();

session_destroy();
die('<script>location.href="homepage.php";</script>')
?>
</body>
</html>