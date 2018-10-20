<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Админ-панель</title>
    <style>
        table { border-collapse: collapse; width: 550px; margin: 5px; } /* Убираем двойные линии между ячейками в таблице */
        td { vertical-align: middle; text-align: center; width: 100px }
    </style>
</head>
<body>
    <h1>PHP-2</h1>
    <h2>7 урок</h2>
    <h2>Админ-панель</h2>
    <h4>Домашняя работа</h4>
    <h4>Отображение таблицы с новостями:</h4>

    <table border="1">
        <th>id</th><th>Заголовок</th><th>Статья</th><th>Автор</th>

        <?php
        foreach($models as $model){ ?>
            <tr>
                <?php foreach($functions as $function) { ?>
                    <td> <?php echo $function($model); ?> </td>
                <?php } ?>
                <td>
                    <form action="/admin/index.php" method="post">
                        <button type="submit" name="edit" value="<?php echo $model->id; ?>">Редактировать</button>
                    </form>
                </td>
            </tr>
        <?php } ?>

    </table>
    <hr><hr>
    <form action="/admin/index.php" method="post">
        <h4>Добавление новой записи</h4>
        Заголовок статьи: <input type="text" name="header" >
        <p>Текст статьи</p>
        <textarea cols="60" rows="10" name="text"></textarea>
        <br>
        <button type="submit">Добавить</button>
    </form>
    <hr><hr>
    <a href="/">Перейти на главную страницу</a>
</body>
</html>
