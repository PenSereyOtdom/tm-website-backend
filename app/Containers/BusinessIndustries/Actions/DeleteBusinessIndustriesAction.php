<?php

namespace App\Containers\BusinessIndustries\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteBusinessIndustriesAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('BusinessIndustries@DeleteBusinessIndustriesTask', [$request->id]);
    }
}
