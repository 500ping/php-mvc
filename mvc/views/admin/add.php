<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    add product

    <form method="post">
        Title: 
        <input type="text" name="title"><br>
        Description:
        <textarea name="description" id="" cols="30" rows="10"></textarea><br>
        Image:
        <input type="file" name="image" id=""><br>
        Status:
        <select name="status">
            <option value="1">Enable</option>
            <option value="2">Disable</option>
        </select>
        <br>
        <!-- <input type="text" name="status"><br> -->

        <input type="submit">
    </form>
</body>
</html>