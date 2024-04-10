<!DOCTYPE html>
<html>
<head>
    <title>Інформація про розробника</title>
</head>
<body>

<?php
$name = "Богданова Софія";
$email = "sofico.zp@gmail.com";
$description = "Я розробник та UI/UX дизайнер";
$blogspot = "https://sofiia-bohdanova.blogspot.com";
$github = "slavamerfi";

echo "<h1>Інформація про розробника</h1>";
echo "<p><strong>Ім'я та Прізвище:</strong> $name</p>";
echo "<p><strong>Email:</strong> <a href='mailto:$email'>$email</a></p>";
echo "<p><strong>Опис:</strong> $description</p>";
echo "<p><strong>GitHub:</strong> <a target='_blank' href='https://github.com/slavamerfi'>$github</a></p>";
echo "<p><strong>Blogspot:</strong> <a target='_blank' href='https://sofiia-bohdanova.blogspot.com'>$blogspot</a></p>";
?>

</body>
</html>