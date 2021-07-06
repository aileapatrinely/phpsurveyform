<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Survey Form</title>
    <link rel="stylesheet" href="/survey_form/styles/style.css">
</head>
<body  style="display: inline-block;">
    <div class="div">
    <form action="result.php" method="post">
        <label for="name">Your Name:</label>
        <input class="form" id="name" type="text" name="name"></input>
        <label for="location">Location:</label>
        <select class="form" id="location" name="location">
            <option value="KCMO">KCMO</option>
            <option value="nope">nope</option>
        </select>
        <label for="language">Favorite Language:</label>
        <select class="form" id="language" name="language">
            <option value="JavaScript">JavaScript</option>
            <option value="PHP">PHP</option>
            <option value="Python">Python</option>
        </select>
        <label for="comment">Comments (optional):</label>
        <textarea class="form" id="comment" name="comment"></textarea>
        <input type="submit" value="Submit">
    </form>
    </div>
</body>
<?php
$dbconn = pg_connect("dbname=phpsurvey");
?>
</html>