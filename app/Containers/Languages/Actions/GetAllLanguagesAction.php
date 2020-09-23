<?php

namespace App\Containers\Languages\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllLanguagesAction extends Action
{
    public function run(Request $request)
    {
        $languages = Apiato::call('Languages@GetAllLanguagesTask', [], ['addRequestCriteria']);

        return $languages;
    }
}
