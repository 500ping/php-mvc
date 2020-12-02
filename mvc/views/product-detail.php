<?php
    echo "<h1 class=\"text-center\">".$data["title"]."</h1>";
    print_r("<br/>");
    echo "<h2>";
    while($row = mysqli_fetch_array($data["product"])){
        echo "Id: ".$row["id"]."<br>";
        echo "Title: ".$row["title"]."<br>";
        echo "Description: ".$row["description"]."<br>";
        echo "Image: <br>";
        echo "<img src=../../mvc/uploads/".$row["image"]." width=\"250px\" alt=\"\" >";
        echo "<br>";
        echo "Status: ".$row["status"]."<br>";
        echo "Create_at: ".$row["create_at"]."<br>";
        echo "Update_at: ".$row["update_at"]."<br>";
    }
    echo "</h2>";
?>
<a href="../../home/" class="btn btn-danger">BACK</a>
