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
            'applies_id','date','hour_spent','title','description','status'
        ]);

        $dailyreport = Apiato::call('DailyReport@CreateDailyReportTask', [$data]);

        return $dailyreport;
    }
}