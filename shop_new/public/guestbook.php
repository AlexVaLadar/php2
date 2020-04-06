<? include_once "../controllers/Comment.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Reviews Shop-Online</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css" media="all">
</head>
<body>
<div id="container">
    <? include "../templates/header.php"; ?>
    <div class="leftblock">
        <? include "../templates/menu.php"; ?>
    </div>
    <?php include_once "../controllers/User.php"; ?>
    <? include "login.php"; ?>
    <div class="content">
        <h1>Reviews</h1>
        <?php
            if($reviews){
                foreach ($reviews as $review){
                    echo "<div style='border: 1px solid #ccc; margin: 10px; padding: 5px;;'>login: {$review[login]}<br>Review: {$review[comment]}<br><i>Date: {$review[date]}</i></div>";
                }
            }
        ?>
        <hr>
        <form method="post">
            <p><strong>Leave a review about the product:</strong></p>
            <p>Login: <input type="text" name="login" maxlength="30" required></p>
            <p>Review: <textarea name="comment" rows="10" required></textarea></p>
            <p><input type="submit" name="submit"></p>
        </form>
    </div>
    <footer>
        <? include "../templates/footer.php"; ?>
    </footer>
</div>
</body>
</html>