<?php

namespace App\Containers\Languages\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteLanguagesAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('Languages@DeleteLanguagesTask', [$request->id]);
    }
}
