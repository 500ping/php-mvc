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
            // print_r("<br/>");
            // while($row = mysqli_fetch_array($data["products"])){
            //     echo $row["id"]."<br>";
            //     echo $row["title"]."<br>";
            //     echo $row["image"]."<br>";
            //     echo $row["status"]."<br>";
            //     echo $row["create_at"]."<br>";
            //     echo $row["update_at"]."<br>";
            //     echo "<a href=\"http://localhost/mvc/admin/show/".$row["id"]."\">edit</a><br>";
            //     echo "<a href=\"http://localhost/mvc/admin/show/".$row["id"]."\">delete</a><hr>";
            // }
        ?>
    </h2>

    <a href="http://localhost/mvc/admin/add/">add</a> 

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
                    <td>
                        <a href=\"http://localhost/mvc/admin/edit/".$row["id"]."\">edit</a> /
                        <a href=\"http://localhost/mvc/admin/delete/".$row["id"]."\">delete</a> 
                    </td>
                </tr>";
            }
        ?>
    </table>
</body>
</html>