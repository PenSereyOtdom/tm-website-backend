<?php

namespace App\Containers\Languages\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateLanguagesAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            'user_id','lang', 'level'
        ]);

        $languages = Apiato::call('Languages@UpdateLanguagesTask', [$request->id, $data]);

        return $languages;
    }
}
