<?php

use App\Models\Article;

return [

    function (Article $article) :string {
    return $article->id;
    },

    function (Article $article) :string {
    return $article->header;
    },

    function (Article $article) :string {
    return $article->text;
    },

    function (Article $article) :string {
    return $article->author->name ?? 'неизвестен';
    },

];
