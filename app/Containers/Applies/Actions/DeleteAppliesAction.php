<?php

namespace App\Containers\Applies\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteAppliesAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('Applies@DeleteAppliesTask', [$request->id]);
    }
}
