<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header class="pos-center">
    <nav class="container">
        <a href="lesson-1.html">урок 1</a>
        <a href="lesson-2.html">урок 2</a>
        <a href="lesson-3.html">урок 3</a>
    </nav>
</header>

<main>
    <div class="container">
        <a class="btn-return" href="lesson-3.html">Назад</a>
        <br>
        <br>
        <?= implode(array_reverse(preg_split('//u', $_POST['reverse_str']))) ?>
    </div>
</main>

<footer class="pos-center">
    <div class="container">footer</div>
</footer>

</body>
</html>