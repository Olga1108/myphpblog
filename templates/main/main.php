<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/www/styles.css">
    <title>My blog</title>
</head>
<body>
<table class="layout">
    <tr>
        <td colspan="2" class="header">
            My blog
        </td>
    </tr>
    <tr>
        <td>
            <?php foreach ($articles as $article): ?>
                <h2><?= $article['name'] ?></h2>
                <p><?= $article['text'] ?></p>
                <hr>
            <?php endforeach; ?>
        </td>

        <td width="300px" class="sidebar">
            <div class="sidebarHeader">Menu</div>
            <ul>
                <li><a href="/">Main page</a></li>
                <li><a href="/about-me">About me</a></li>
            </ul>
        </td>
    </tr>
    <tr>
        <td class="footer" colspan="2">All rights reserved (c) My blog</td>
    </tr>
</table> 
</body>
</html>