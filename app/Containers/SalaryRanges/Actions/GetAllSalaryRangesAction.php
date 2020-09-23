<?php

namespace App\Containers\SalaryRanges\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllSalaryRangesAction extends Action
{
    public function run(Request $request)
    {
        $salaryranges = Apiato::call('SalaryRanges@GetAllSalaryRangesTask', [], ['addRequestCriteria']);

        return $salaryranges;
    }
}
