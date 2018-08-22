<?php

namespace App\Controllers;

/**
 * Class AdminUpdate
 * @package App\Controllers
 */
class AdminUpdate extends \App\Controller
{
    protected function action() //Редактирование новостей
    {
        $data = \App\Models\Article::findById( $_POST['update'] );

        $d = ['header' => $_POST['header'], 'text' => $_POST['text']];
        $data->fill($d);

        header('Location: /../../adminEdit/');

        $data->save(); //сохраняем данные
    }
}
