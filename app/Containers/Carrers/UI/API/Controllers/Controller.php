<?php

namespace App\Containers\Carrers\UI\API\Controllers;

use App\Containers\Carrers\UI\API\Requests\CreateCarrersRequest;
use App\Containers\Carrers\UI\API\Requests\DeleteCarrersRequest;
use App\Containers\Carrers\UI\API\Requests\GetAllCarrersRequest;
use App\Containers\Carrers\UI\API\Requests\FindCarrersByIdRequest;
use App\Containers\Carrers\UI\API\Requests\UpdateCarrersRequest;
use App\Containers\Carrers\UI\API\Transformers\CarrersTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Carrers\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateCarrersRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createCarrers(CreateCarrersRequest $request)
    {
        $carrers = Apiato::call('Carrers@CreateCarrersAction', [$request]);

        return $this->created($this->transform($carrers, CarrersTransformer::class));
    }

    /**
     * @param FindCarrersByIdRequest $request
     * @return array
     */
    public function findCarrersById(FindCarrersByIdRequest $request)
    {
        $carrers = Apiato::call('Carrers@FindCarrersByIdAction', [$request]);

        return $this->transform($carrers, CarrersTransformer::class);
    }

    /**
     * @param GetAllCarrersRequest $request
     * @return array
     */
    public function getAllCarrers(GetAllCarrersRequest $request)
    {
        $carrers = Apiato::call('Carrers@GetAllCarrersAction', [$request]);

        return $this->transform($carrers, CarrersTransformer::class);
    }

    /**
     * @param UpdateCarrersRequest $request
     * @return array
     */
    public function updateCarrers(UpdateCarrersRequest $request)
    {
        $carrers = Apiato::call('Carrers@UpdateCarrersAction', [$request]);

        return $this->transform($carrers, CarrersTransformer::class);
    }

    /**
     * @param DeleteCarrersRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteCarrers(DeleteCarrersRequest $request)
    {
        Apiato::call('Carrers@DeleteCarrersAction', [$request]);

        return $this->noContent();
    }
}
