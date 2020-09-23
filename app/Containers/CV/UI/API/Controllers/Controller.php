<?php

namespace App\Containers\CV\UI\API\Controllers;

use App\Containers\CV\UI\API\Requests\CreateCVRequest;
use App\Containers\CV\UI\API\Requests\DeleteCVRequest;
use App\Containers\CV\UI\API\Requests\GetAllCVSRequest;
use App\Containers\CV\UI\API\Requests\FindCVByIdRequest;
use App\Containers\CV\UI\API\Requests\UpdateCVRequest;
use App\Containers\CV\UI\API\Transformers\CVTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\CV\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateCVRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createCV(CreateCVRequest $request)
    {
        $cv = Apiato::call('CV@CreateCVAction', [$request]);

        return $this->created($this->transform($cv, CVTransformer::class));
    }

    /**
     * @param FindCVByIdRequest $request
     * @return array
     */
    public function findCVById(FindCVByIdRequest $request)
    {
        $cv = Apiato::call('CV@FindCVByIdAction', [$request]);

        return $this->transform($cv, CVTransformer::class);
    }

    /**
     * @param GetAllCVSRequest $request
     * @return array
     */
    public function getAllCVS(GetAllCVSRequest $request)
    {
        $cvs = Apiato::call('CV@GetAllCVSAction', [$request]);

        return $this->transform($cvs, CVTransformer::class);
    }

    /**
     * @param UpdateCVRequest $request
     * @return array
     */
    public function updateCV(UpdateCVRequest $request)
    {
        $cv = Apiato::call('CV@UpdateCVAction', [$request]);

        return $this->transform($cv, CVTransformer::class);
    }

    /**
     * @param DeleteCVRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteCV(DeleteCVRequest $request)
    {
        Apiato::call('CV@DeleteCVAction', [$request]);

        return $this->noContent();
    }
}
