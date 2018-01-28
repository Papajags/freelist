<?php
    $title = "FreeList";
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $title; ?></title>
<link href="style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
</head>

<body>
    
    <div id="playlist">
        
        <?php require 'mng.php'; ?>
    </div>
    
    <div class="header">< Choice List ></div>
    <p class="disc">Paste the link here and save it on your playlist. Watch videos, images, listen to songs. No need to download when you can just save them. EZ :D</p>
    <div class="search">
        <form method="post">
           <input type="text" class="ui_field" placeholder="Find a list, or make a new one" name="name">
           <button class="ui_button">Find/Make</button>
        </form>
    </div>
    
</body>
</html>
