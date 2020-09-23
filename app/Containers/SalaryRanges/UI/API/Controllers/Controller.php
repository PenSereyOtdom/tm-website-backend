<?php

namespace App\Containers\SalaryRanges\UI\API\Controllers;

use App\Containers\SalaryRanges\UI\API\Requests\CreateSalaryRangesRequest;
use App\Containers\SalaryRanges\UI\API\Requests\DeleteSalaryRangesRequest;
use App\Containers\SalaryRanges\UI\API\Requests\GetAllSalaryRangesRequest;
use App\Containers\SalaryRanges\UI\API\Requests\FindSalaryRangesByIdRequest;
use App\Containers\SalaryRanges\UI\API\Requests\UpdateSalaryRangesRequest;
use App\Containers\SalaryRanges\UI\API\Transformers\SalaryRangesTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\SalaryRanges\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateSalaryRangesRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createSalaryRanges(CreateSalaryRangesRequest $request)
    {
        $salaryranges = Apiato::call('SalaryRanges@CreateSalaryRangesAction', [$request]);

        return $this->created($this->transform($salaryranges, SalaryRangesTransformer::class));
    }

    /**
     * @param FindSalaryRangesByIdRequest $request
     * @return array
     */
    public function findSalaryRangesById(FindSalaryRangesByIdRequest $request)
    {
        $salaryranges = Apiato::call('SalaryRanges@FindSalaryRangesByIdAction', [$request]);

        return $this->transform($salaryranges, SalaryRangesTransformer::class);
    }

    /**
     * @param GetAllSalaryRangesRequest $request
     * @return array
     */
    public function getAllSalaryRanges(GetAllSalaryRangesRequest $request)
    {
        $salaryranges = Apiato::call('SalaryRanges@GetAllSalaryRangesAction', [$request]);

        return $this->transform($salaryranges, SalaryRangesTransformer::class);
    }

    /**
     * @param UpdateSalaryRangesRequest $request
     * @return array
     */
    public function updateSalaryRanges(UpdateSalaryRangesRequest $request)
    {
        $salaryranges = Apiato::call('SalaryRanges@UpdateSalaryRangesAction', [$request]);

        return $this->transform($salaryranges, SalaryRangesTransformer::class);
    }

    /**
     * @param DeleteSalaryRangesRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteSalaryRanges(DeleteSalaryRangesRequest $request)
    {
        Apiato::call('SalaryRanges@DeleteSalaryRangesAction', [$request]);

        return $this->noContent();
    }
}
