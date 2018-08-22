<?php

namespace App;

/**
 * Class AdminDataTable
 * @package App
 */
class AdminDataTable
{
    protected $models = [];
    protected $functions = [];

    /**
     * AdminDataTable constructor.
     * @param array $models
     * @param array $functions
     */
    public function __construct(array $models, array $functions)
    {
        $this->models = $models;
        $this->functions = $functions;
    }

    /**
     * @param $template
     */
    public function render(string $template)
    {
        $view = new View();
        $view->models = $this->models;
        $view->functions = $this->functions;
        $view->display($template);
    }
}
