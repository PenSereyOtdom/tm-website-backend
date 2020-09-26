<?php

namespace App\Containers\Applies\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateAppliesAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            'seeker_id','jobpost_id' ,'confirmed','company_id','jobpost_id','full_name','year_exp'
            ,'progress'
        ]);

        $applies = Apiato::call('Applies@CreateAppliesTask', [$data]);

        return $applies;
    }
}
