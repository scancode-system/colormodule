<?php

namespace Modules\Color\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Modules\Color\Repositories\ColorRepository;


class BeforeImportProductListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $data = $event->data();
        if(isset($data['color']))
        {
            return ['color_id' => $this->colorId($data['color'])];
        }
    }

    private function colorId($color_name)
    {
        if(!is_null($color_name))
        {
            $color = ColorRepository::loadByName($color_name);
            if(!$color)
            {
                $color = ColorRepository::store(['name' => $color_name]);
            } 
            return $color->id;   
        }

    }
}

