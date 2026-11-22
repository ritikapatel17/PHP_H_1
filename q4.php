<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
        UserName:
        <input type="text" name="name">
        <br>
        Password:
        <input type="text" name="pass">
        <br>
        Are you agree to the terms and conditions:
        <input type="checkbox" name="term" id="">
         $term= isset($GET["term"]) ?"Agree":"Not Agree";
         <br>
         <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php 
if($_SERVER["REQUEST_METHOD"]==="GET"){
    $name=$_GET["name"];
    $term=$_GET["term"];
    
}
echo "Welcome, $name. You have $term to the terms and conditions."

?>
