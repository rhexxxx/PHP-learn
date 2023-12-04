<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Web Komen</h1>
    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="get">
        <label for="first">first name :</label>
        <input type="text" id="first" name="first" autocomplete="off">
        <label for="last">Last Name :</label>
        <input type="text" id="last" name="last" autocomplete="off">
        <div class="button">
            <button type="submit">Submmit</button>
            <button type="submit" formmethod="post">Submit with post</button>
            <button type="reset"> Reset</button>
        </div>
    </form>
</body>
</html>