<?php

namespace App\Containers\BusinessIndustries\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllBusinessIndustriesAction extends Action
{
    public function run(Request $request)
    {
        $businessindustries = Apiato::call('BusinessIndustries@GetAllBusinessIndustriesTask', [], ['addRequestCriteria']);

        return $businessindustries;
    }
}
