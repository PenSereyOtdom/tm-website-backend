<?php

namespace App\Containers\SalaryRanges\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateSalaryRangesAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
            'user_id','salaryrange'

        ]);

        $salaryranges = Apiato::call('SalaryRanges@CreateSalaryRangesTask', [$data]);

        return $salaryranges;
    }
}
