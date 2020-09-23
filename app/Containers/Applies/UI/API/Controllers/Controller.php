<?php

namespace App\Containers\Applies\UI\API\Controllers;

use App\Containers\Applies\UI\API\Requests\CreateAppliesRequest;
use App\Containers\Applies\UI\API\Requests\DeleteAppliesRequest;
use App\Containers\Applies\UI\API\Requests\GetAllAppliesRequest;
use App\Containers\Applies\UI\API\Requests\FindAppliesByIdRequest;
use App\Containers\Applies\UI\API\Requests\UpdateAppliesRequest;
use App\Containers\Applies\UI\API\Transformers\AppliesTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Applies\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateAppliesRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createApplies(CreateAppliesRequest $request)
    {
        $applies = Apiato::call('Applies@CreateAppliesAction', [$request]);

        return $this->created($this->transform($applies, AppliesTransformer::class));
    }

    /**
     * @param FindAppliesByIdRequest $request
     * @return array
     */
    public function findAppliesById(FindAppliesByIdRequest $request)
    {
        $applies = Apiato::call('Applies@FindAppliesByIdAction', [$request]);

        return $this->transform($applies, AppliesTransformer::class);
    }

    /**
     * @param GetAllAppliesRequest $request
     * @return array
     */
    public function getAllApplies(GetAllAppliesRequest $request)
    {
        $applies = Apiato::call('Applies@GetAllAppliesAction', [$request]);

        return $this->transform($applies, AppliesTransformer::class);
    }

    /**
     * @param UpdateAppliesRequest $request
     * @return array
     */
    public function updateApplies(UpdateAppliesRequest $request)
    {
        $applies = Apiato::call('Applies@UpdateAppliesAction', [$request]);

        return $this->transform($applies, AppliesTransformer::class);
    }

    /**
     * @param DeleteAppliesRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteApplies(DeleteAppliesRequest $request)
    {
        Apiato::call('Applies@DeleteAppliesAction', [$request]);

        return $this->noContent();
    }
}
