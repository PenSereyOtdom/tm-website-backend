<?php

namespace App\Containers\DailyReport\UI\API\Controllers;

use App\Containers\DailyReport\UI\API\Requests\CreateDailyReportRequest;
use App\Containers\DailyReport\UI\API\Requests\DeleteDailyReportRequest;
use App\Containers\DailyReport\UI\API\Requests\GetAllDailyReportsRequest;
use App\Containers\DailyReport\UI\API\Requests\FindDailyReportByIdRequest;
use App\Containers\DailyReport\UI\API\Requests\UpdateDailyReportRequest;
use App\Containers\DailyReport\UI\API\Transformers\DailyReportTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\DailyReport\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateDailyReportRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createDailyReport(CreateDailyReportRequest $request)
    {
        $dailyreport = Apiato::call('DailyReport@CreateDailyReportAction', [$request]);

        return $this->created($this->transform($dailyreport, DailyReportTransformer::class));
    }

    /**
     * @param FindDailyReportByIdRequest $request
     * @return array
     */
    public function findDailyReportById(FindDailyReportByIdRequest $request)
    {
        $dailyreport = Apiato::call('DailyReport@FindDailyReportByIdAction', [$request]);

        return $this->transform($dailyreport, DailyReportTransformer::class);
    }

    /**
     * @param GetAllDailyReportsRequest $request
     * @return array
     */
    public function getAllDailyReports(GetAllDailyReportsRequest $request)
    {
        $dailyreports = Apiato::call('DailyReport@GetAllDailyReportsAction', [$request]);

        return $this->transform($dailyreports, DailyReportTransformer::class);
    }

    /**
     * @param UpdateDailyReportRequest $request
     * @return array
     */
    public function updateDailyReport(UpdateDailyReportRequest $request)
    {
        $dailyreport = Apiato::call('DailyReport@UpdateDailyReportAction', [$request]);

        return $this->transform($dailyreport, DailyReportTransformer::class);
    }

    /**
     * @param DeleteDailyReportRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteDailyReport(DeleteDailyReportRequest $request)
    {
        Apiato::call('DailyReport@DeleteDailyReportAction', [$request]);

        return $this->noContent();
    }
}
