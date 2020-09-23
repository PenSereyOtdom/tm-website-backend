<?php

namespace App\Containers\DailyReport\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllDailyReportsAction extends Action
{
    public function run(Request $request)
    {
        $dailyreports = Apiato::call('DailyReport@GetAllDailyReportsTask', [], ['addRequestCriteria']);

        return $dailyreports;
    }
}
