<?php

namespace App\Containers\SalaryRanges\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateSalaryRangesAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
            'user_id','salaryrange'

        ]);

        $salaryranges = Apiato::call('SalaryRanges@UpdateSalaryRangesTask', [$request->id, $data]);

        return $salaryranges;
    }
}
