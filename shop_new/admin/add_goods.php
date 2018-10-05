<?php include_once "../controllers/Product.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Admin</title>
    <link rel="stylesheet" href="../public/css/styles.css" type="text/css" media="all">
</head>
<body>
<div id="container">
    <div class="leftblock">
        <nav>
            <div class="menu">
                <ul>
                    <li><a href="index.php" class="active">Main</a></li>
                    <li><a href="add_goods.php">Add good</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="content">
        <form method="post" enctype="multipart/form-data">
            <p><strong>Add good:</strong></p>
            <p>Title: <br><input type="text" name="title" maxlength="100" required></p>
            <p>Description: <br><textarea name="description" rows="10" required></textarea></p>
            <p>Price: <br><input type="number" name="price" maxlength="20" required></p>
            <p>Available: <br><input type="number" name="available" maxlength="20" required></p>
            <p><strong>Load pic JPEG, PNG or GIF</strong></p>
            <p><input type="file" name="img" accept="image/jpeg,image/png,image/gif" required></p>
            <p><input type="submit" name="submit"></p>
        </form>
    </div>
</div>
</body>
</html>
