<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>
        <?php
            echo $data["title"];
        ?>
    </h2>

    <table style="width:100%" border="1">
        <tr>
            <th>ID</th>
            <th>Title</th> 
            <th>Description</th> 
            <th>Image</th>
            <th>Status</th>
            <th>Create_at</th>
            <th>Update_at</th>
            <th>Action</th>
        </tr>
        <?php
            while($row = mysqli_fetch_array($data["products"])){
                echo "<tr>
                    <td>".$row["id"]."</td>
                    <td>".$row["title"]."</td>
                    <td>".$row["description"]."</td>
                    <td>".$row["image"]."</td>
                    <td>".$row["status"]."</td>
                    <td>".$row["create_at"]."</td>
                    <td>".$row["update_at"]."</td>
                    <td><a href=\"http://localhost/mvc/home/show/".$row["id"]."\">show</a></td>
                </tr>";
            }
        ?>
    </table>

    <a href="http://localhost/mvc/admin/">ADMIN</a>
</body>
</html>