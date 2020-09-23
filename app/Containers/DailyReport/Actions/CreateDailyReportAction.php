<?php

namespace App\Containers\DailyReport\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateDailyReportAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        $dailyreport = Apiato::call('DailyReport@CreateDailyReportTask', [$data]);

        return $dailyreport;
    }
}
