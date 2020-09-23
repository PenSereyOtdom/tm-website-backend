<?php

namespace App\Containers\DailyReport\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteDailyReportAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('DailyReport@DeleteDailyReportTask', [$request->id]);
    }
}
