<?php

namespace App\Containers\DailyReport\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindDailyReportByIdAction extends Action
{
    public function run(Request $request)
    {
        $dailyreport = Apiato::call('DailyReport@FindDailyReportByIdTask', [$request->id]);

        return $dailyreport;
    }
}
