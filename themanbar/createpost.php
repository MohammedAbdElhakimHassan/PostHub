<?php 
    include('header.php');
?>
<form method="POST" action="add_article.php">
  <label for="post-title">عنوان البوست:</label>
  <input type="text" id="post-title" name="title" required>

  <label for="post-content">محتوى البوست:</label>
  <textarea id="post-content" name="content" required></textarea>

  <button type="submit" name="send">نشر</button>
</form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/createpost.css">
</head>
<body>
    
</body>
</html>
