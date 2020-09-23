<?php

namespace App\Containers\Applies\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindAppliesByIdAction extends Action
{
    public function run(Request $request)
    {
        $applies = Apiato::call('Applies@FindAppliesByIdTask', [$request->id]);

        return $applies;
    }
}
