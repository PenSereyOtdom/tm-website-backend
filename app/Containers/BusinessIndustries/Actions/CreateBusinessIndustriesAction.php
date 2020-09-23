<?php

namespace App\Containers\BusinessIndustries\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateBusinessIndustriesAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            'user_id','business_industry'
        ]);

        $businessindustries = Apiato::call('BusinessIndustries@CreateBusinessIndustriesTask', [$data]);

        return $businessindustries;
    }
}
