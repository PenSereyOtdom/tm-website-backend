<?php

namespace App\Containers\BusinessIndustries\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindBusinessIndustriesByIdAction extends Action
{
    public function run(Request $request)
    {
        $businessindustries = Apiato::call('BusinessIndustries@FindBusinessIndustriesByIdTask', [$request->id]);

        return $businessindustries;
    }
}
