<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    edit

    <?php
        while($row = mysqli_fetch_array($data["product"])){
            echo "<form method=\"post\">";
            echo "<input type=\"hidden\" name=\"id\" value=".$row["id"].">";
            echo "Title: <input type=\"text\" name=\"title\" value=".$row["title"]."><br>";
            echo "Description: 
                <textarea name=\"description\" id=\"\" cols=\"30\" rows=\"10\">".$row["description"]."</textarea><br>";
            echo "Image: <input type=\"file\" name=\"image\"><br>";
            // echo "<img src=".$row["image"]." alt=\"\">";
            echo "<input type=\"hidden\" name=\"oldImage\" value=".$row["image"].">";
            echo "Status: 
            <select name=\"status\" id=\"status\">
                <option value=\"1\">Enable</option>
                <option value=\"2\">Disable</option>
            </select><br>";
            echo "
            <script>
                document.getElementById(\"status\").value=".$row["status"].";
            </script>
            ";
            echo "<input type=\"submit\">";
            echo "</form>";
        }
    ?>
</body>
</html>