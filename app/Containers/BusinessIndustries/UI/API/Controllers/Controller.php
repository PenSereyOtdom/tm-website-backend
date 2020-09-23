<?php

namespace App\Containers\BusinessIndustries\UI\API\Controllers;

use App\Containers\BusinessIndustries\UI\API\Requests\CreateBusinessIndustriesRequest;
use App\Containers\BusinessIndustries\UI\API\Requests\DeleteBusinessIndustriesRequest;
use App\Containers\BusinessIndustries\UI\API\Requests\GetAllBusinessIndustriesRequest;
use App\Containers\BusinessIndustries\UI\API\Requests\FindBusinessIndustriesByIdRequest;
use App\Containers\BusinessIndustries\UI\API\Requests\UpdateBusinessIndustriesRequest;
use App\Containers\BusinessIndustries\UI\API\Transformers\BusinessIndustriesTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\BusinessIndustries\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateBusinessIndustriesRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createBusinessIndustries(CreateBusinessIndustriesRequest $request)
    {
        $businessindustries = Apiato::call('BusinessIndustries@CreateBusinessIndustriesAction', [$request]);

        return $this->created($this->transform($businessindustries, BusinessIndustriesTransformer::class));
    }

    /**
     * @param FindBusinessIndustriesByIdRequest $request
     * @return array
     */
    public function findBusinessIndustriesById(FindBusinessIndustriesByIdRequest $request)
    {
        $businessindustries = Apiato::call('BusinessIndustries@FindBusinessIndustriesByIdAction', [$request]);

        return $this->transform($businessindustries, BusinessIndustriesTransformer::class);
    }

    /**
     * @param GetAllBusinessIndustriesRequest $request
     * @return array
     */
    public function getAllBusinessIndustries(GetAllBusinessIndustriesRequest $request)
    {
        $businessindustries = Apiato::call('BusinessIndustries@GetAllBusinessIndustriesAction', [$request]);

        return $this->transform($businessindustries, BusinessIndustriesTransformer::class);
    }

    /**
     * @param UpdateBusinessIndustriesRequest $request
     * @return array
     */
    public function updateBusinessIndustries(UpdateBusinessIndustriesRequest $request)
    {
        $businessindustries = Apiato::call('BusinessIndustries@UpdateBusinessIndustriesAction', [$request]);

        return $this->transform($businessindustries, BusinessIndustriesTransformer::class);
    }

    /**
     * @param DeleteBusinessIndustriesRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteBusinessIndustries(DeleteBusinessIndustriesRequest $request)
    {
        Apiato::call('BusinessIndustries@DeleteBusinessIndustriesAction', [$request]);

        return $this->noContent();
    }
}
