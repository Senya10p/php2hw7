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
        if ( isset($_POST['edit']) ) {
            $this->view->article = \App\Models\Article::findById($_POST['edit']); //Получаем новость по id
            $this->view->display(__DIR__ . '/../../templates/admin.php');
        } else {
            header('Location: /../../admin/');
        }
    }
}
