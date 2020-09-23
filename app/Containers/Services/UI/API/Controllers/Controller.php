<?php

namespace App\Containers\Services\UI\API\Controllers;

use App\Containers\Services\UI\API\Requests\CreateServicesRequest;
use App\Containers\Services\UI\API\Requests\DeleteServicesRequest;
use App\Containers\Services\UI\API\Requests\GetAllServicesRequest;
use App\Containers\Services\UI\API\Requests\FindServicesByIdRequest;
use App\Containers\Services\UI\API\Requests\UpdateServicesRequest;
use App\Containers\Services\UI\API\Transformers\ServicesTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Services\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateServicesRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createServices(CreateServicesRequest $request)
    {
        $services = Apiato::call('Services@CreateServicesAction', [$request]);

        return $this->created($this->transform($services, ServicesTransformer::class));
    }

    /**
     * @param FindServicesByIdRequest $request
     * @return array
     */
    public function findServicesById(FindServicesByIdRequest $request)
    {
        $services = Apiato::call('Services@FindServicesByIdAction', [$request]);

        return $this->transform($services, ServicesTransformer::class);
    }

    /**
     * @param GetAllServicesRequest $request
     * @return array
     */
    public function getAllServices(GetAllServicesRequest $request)
    {
        $services = Apiato::call('Services@GetAllServicesAction', [$request]);

        return $this->transform($services, ServicesTransformer::class);
    }

    /**
     * @param UpdateServicesRequest $request
     * @return array
     */
    public function updateServices(UpdateServicesRequest $request)
    {
        $services = Apiato::call('Services@UpdateServicesAction', [$request]);

        return $this->transform($services, ServicesTransformer::class);
    }

    /**
     * @param DeleteServicesRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteServices(DeleteServicesRequest $request)
    {
        Apiato::call('Services@DeleteServicesAction', [$request]);

        return $this->noContent();
    }
}
