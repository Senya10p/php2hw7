<?php

namespace App\Controllers;

/**
 * Class AdminEdit
 * @package App\Controllers
 */
class AdminEdit extends \App\Controller
{

    public function action() //для отображения формы редактирования новостей
    {
        $this->view->data = \App\Models\Article::findAll(); //Получаем все новости
        $this->view->display(__DIR__ . '/../../templates/admin.php');
    }

}
