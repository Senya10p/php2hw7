<?php

namespace App\Controllers;

/**
 * Class Admin
 * @package App\Controllers
 */
class Admin extends \App\Controller
{

    public function action() //для отображения таблицы новостей
    {
        $functions = include __DIR__ . '/../functions.php';

        $models = \App\Models\Article::findAll();

        $table = new \App\AdminDataTable($models, $functions);
        $table->render(__DIR__ . '/../../templates/admindatatable.php');
    }

}
