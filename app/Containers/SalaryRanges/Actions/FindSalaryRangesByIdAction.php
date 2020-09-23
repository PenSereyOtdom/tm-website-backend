<?php

namespace App\Containers\SalaryRanges\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindSalaryRangesByIdAction extends Action
{
    public function run(Request $request)
    {
        $salaryranges = Apiato::call('SalaryRanges@FindSalaryRangesByIdTask', [$request->id]);

        return $salaryranges;
    }
}
