<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Админ-панель</title>
    <style>
        table { border-collapse: collapse; width: 500px; margin: 5px; } /* Убираем двойные линии между ячейками в таблице */
        td { vertical-align: middle; text-align: center; width: 70px }
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
            </tr>
        <?php } ?>

    </table>

    <hr><hr>
    <a href="/admin/adminEdit">Перейти для редактирования новостей</a>
</body>
</html>
