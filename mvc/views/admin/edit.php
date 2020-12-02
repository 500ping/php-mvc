<h1 class="text-center">edit</h1>

<?php
    while($row = mysqli_fetch_array($data["product"])){
        // echo "<form method=\"post\" enctype=\"multipart/form-data\">";
        // echo "<input type=\"hidden\" name=\"id\" value=".$row["id"].">";
        // echo "Title: <input type=\"text\" name=\"title\" value=".$row["title"]."><br>";
        // echo "Description: 
        //     <textarea name=\"description\" id=\"\" cols=\"30\" rows=\"10\">".$row["description"]."</textarea><br>";
        // echo "Image: <input type=\"file\" name=\"image\"><br>";
        // // echo "<img src=".$row["image"]." alt=\"\">";
        // echo "<input type=\"hidden\" name=\"oldImage\" value=".$row["image"].">";
        // echo "Status: 
        // <select name=\"status\" id=\"status\">
        //     <option value=\"1\">Enable</option>
        //     <option value=\"2\">Disable</option>
        // </select><br>";
        // echo "
        // <script>
        //     document.getElementById(\"status\").value=".$row["status"].";
        // </script>
        // ";
        // echo "<input type=\"submit\">";
        // echo "<a href=\"http://localhost/mvc/admin/\" type=\"button\">Cancel</a>";
        // echo "</form>";

        echo "<form method=\"post\" enctype=\"multipart/form-data\">";

        echo "<input type=\"hidden\" name=\"id\" value=".$row["id"].">";

        echo "<div class=\"form-group\">";
        echo "<label for=\"title\">Title</label>";
        echo "<input type=\"text\" class=\"form-control\" name=\"title\" id=\"title\" value=".$row["title"].">";
        echo "</div>";

        echo "<div class=\"form-group\">";
        echo "<label for=\"description\">Description</label>";
        echo "<textarea class=\"form-control\" name=\"description\" id=\"description\" rows=\"3\">".$row["description"]."</textarea>";
        echo "</div>";

        echo "<div class=\"form-group\">";
        echo "<label for=\"image\">Image</label>";
        echo "<input type=\"file\" class=\"form-control-file\" name=\"image\" id=\"image\">";
        echo "<input type=\"hidden\" name=\"oldImage\" value=".$row["image"].">";
        echo "</div>";

        echo "<div class=\"form-group\">";
        echo "<label for=\"status\">Status</label>";
        echo "<select class=\"form-control\" name=\"status\" id=\"status\">";
        echo "<option value=\"1\">Enable</option>";
        echo "<option value=\"2\">Disable</option>";
        echo "</select>";
        echo "</div>";

        echo "
        <script>
            document.getElementById(\"status\").value=".$row["status"].";
        </script>
        ";

        echo "<button type=\"submit\" class=\"btn btn-primary\" style=\"margin-right:10px;\">Submit</button>";
        echo "<a href=\"../../admin/\" class=\"btn btn-danger\">Cancel</a>";

        echo "</form>";
    }
?>
