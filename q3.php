<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        Name:
        <input type="text" name="name">
        <br>
        Phone:
        <input type="text" name="phone" id="">
        <br>
        Car Brand
        <select name="car" id="">
        <option value="toyota">Toyota</option>
                <option value="ford">Ford</option>
                        <option value="tesla">Tesla</option>
                        </select>
                        <br>
                        <button type="submit">Submit</button>        
    </form>
</body>
</html>

<?php 
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $name = $_POST["name"];
        $phone = $_POST["phone"];
            $car = $_POST["car"];

}

echo "Hello, $name. Your phone number is $phone and your preferred car brand is $car"



?>