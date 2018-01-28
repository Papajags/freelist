<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
</head>

<body> 
    
  
    
<div id ="pname">
    <?php if(isset($_POST['name'])&&!empty($_POST['name'])){
            echo $_POST['name'];
    }else{
        //header("Location: index.php");
    }
    ?>
    <div id="con">
        <ul>
        </ul>
    </div>
</div>
<script>
	getdata("<?php echo($_POST['name']); ?>");
function getdata(str) {
    if (str == "") {
        document.getElementById("con").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("con").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","info_mng.php?n="+"<?php echo($_POST['name']); ?>",true);
        xmlhttp.send();
    }
}
	
function putdata() {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("con").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","info_mng.php?n="+"<?php echo($_POST['name']); ?>" +"&d="+ document.getElementById("addnewfield").value,true);
        xmlhttp.send();
}
	
</script>
    <a href="index.php"> <img src="backbutton.png" width="5%" height="5%" > </a>
</body>
</html>