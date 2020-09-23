<?php

namespace App\Containers\Languages\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindLanguagesByIdAction extends Action
{
    public function run(Request $request)
    {
        $languages = Apiato::call('Languages@FindLanguagesByIdTask', [$request->id]);

        return $languages;
    }
}
