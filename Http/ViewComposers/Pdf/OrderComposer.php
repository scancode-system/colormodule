<?php
// Veriicar algo errado com este arquivo talvez deletar como assim depedencia com filiais
namespace Modules\Color\Http\ViewComposers\Pdf;

use Modules\Dashboard\Services\ViewComposer\ServiceComposer;
use Modules\Subsidiary\Repositories\OrderRepository;

class OrderComposer extends ServiceComposer {

    private $subsidiaries;

    public function assign($view)
    {
        $this->subsidiaries($view->order);
    }

    private function subsidiaries($order)
    {
        $subsidiaries = OrderRepository::loadSubsidiaries($order);
        //dd($subsidiaries);


        $this->subsidiaries = $subsidiaries;
    }

    public function view($view)
    {
        $view->with('subsidiaries', $this->subsidiaries);
    }

}