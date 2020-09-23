<?php

namespace App\Containers\SalaryRanges\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteSalaryRangesAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('SalaryRanges@DeleteSalaryRangesTask', [$request->id]);
    }
}
