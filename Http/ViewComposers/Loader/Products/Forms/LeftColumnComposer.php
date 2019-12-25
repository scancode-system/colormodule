<?php

namespace Modules\Color\Http\ViewComposers\Loader\Products\Forms;

use Modules\Dashboard\Services\ViewComposer\ServiceComposer;
use Modules\Color\Repositories\ColorRepository;

class LeftColumnComposer extends ServiceComposer 
{

    private $select_colors;

    public function assign($view)
    {
        $this->selectColors();
    }


    private function selectColors()
    {
        $this->select_colors = ColorRepository::loadToSelect('id', 'name');
    }


    public function view($view)
    {
        $view->with('select_colors', $this->select_colors);
    }

}