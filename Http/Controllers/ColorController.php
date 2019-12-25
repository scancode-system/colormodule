<?php

namespace Modules\Color\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Color\Repositories\ColorRepository;
use Modules\Color\Http\Requests\ColorRequest;

class ColorController extends Controller
{

    public function store(ColorRequest $request)
    {
        $color = ColorRepository::store($request->all());
        return back()->with('success', 'Cor '.$color->name.' gerada.')->withInput();
    }

}
