<?php
$newVar = "Holly Berry";
?>


<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h1>Hello World</h1>
     <script>
    var a = 123;
    a = "<?php echo $newVar; ?>";
    console.log(a);
    </script>   
    <script src="js.js"></script>

</body>
</html>