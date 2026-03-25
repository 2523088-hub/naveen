<html>
<head>
<title>Dynamic webpage</title>
</head>
<body>
<a href="index.php?page=index">home</a><br/>
div id="menu">
<a href="index.php?page=js">Javascript</a><br/>
<a href="index.php?page=csharp">csharp</a><br/>
<a href="index.php?page=css">css</a><br/>
</div>
<div id="content">
<?php
$p=$_GET['page'];
$page="sub/".$p;"php";
if(file_exists($page))
include($page);
elseif($page==" ")
    echo"This is a home page";
else
    echo"What are you looking for?";
?>
</div>
</body>
</html>