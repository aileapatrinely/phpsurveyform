<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey Form</title>
</head>
<body>
    <h1>Submitted Information:</h1>
    <p>Name: <?= $_POST['name'] ?></p>
    <p>Location:  <?= $_POST['location'] ?></p>
    <p>Favorite Language:  <?= $_POST['language'] ?></p>
    <p>Comments: <?= $_POST['comment'] ?></p>
    <a href="/survey_form/index.php"><button>Go Back</button></a>
</body>
</html>