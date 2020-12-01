<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo $data["title"];
        print_r("<br/>");
        while($row = mysqli_fetch_array($data["product"])){
            echo $row["id"]."<br>";
            echo $row["title"]."<br>";
            echo $row["description"]."<br>";
            echo $row["image"]."<br>";
            echo $row["status"]."<br>";
            echo $row["create_at"]."<br>";
            echo $row["update_at"]."<br>";
        }
    ?>
    <a href="http://localhost/mvc/home/">BACK</>
</body>
</html>