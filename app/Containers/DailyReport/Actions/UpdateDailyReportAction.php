<?php

namespace App\Containers\DailyReport\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateDailyReportAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            'status'
        ]);

        $dailyreport = Apiato::call('DailyReport@UpdateDailyReportTask', [$request->id, $data]);

        return $dailyreport;
    }
}
