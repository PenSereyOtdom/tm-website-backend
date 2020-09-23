<?php

namespace App\Containers\Master\UI\API\Controllers;

use App\Containers\Master\UI\API\Requests\CreateMasterRequest;
use App\Containers\Master\UI\API\Requests\DeleteMasterRequest;
use App\Containers\Master\UI\API\Requests\GetAllMastersRequest;
use App\Containers\Master\UI\API\Requests\FindMasterByIdRequest;
use App\Containers\Master\UI\API\Requests\UpdateMasterRequest;
use App\Containers\Master\UI\API\Transformers\MasterTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Master\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateMasterRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createMaster(CreateMasterRequest $request)
    {
        $master = Apiato::call('Master@CreateMasterAction', [$request]);

        return $this->created($this->transform($master, MasterTransformer::class));
    }

    /**
     * @param FindMasterByIdRequest $request
     * @return array
     */
    public function findMasterById(FindMasterByIdRequest $request)
    {
        $master = Apiato::call('Master@FindMasterByIdAction', [$request]);

        return $this->transform($master, MasterTransformer::class);
    }

    /**
     * @param GetAllMastersRequest $request
     * @return array
     */
    public function getAllMasters(GetAllMastersRequest $request)
    {
        $masters = Apiato::call('Master@GetAllMastersAction', [$request]);

        return $this->transform($masters, MasterTransformer::class);
    }

    /**
     * @param UpdateMasterRequest $request
     * @return array
     */
    public function updateMaster(UpdateMasterRequest $request)
    {
        $master = Apiato::call('Master@UpdateMasterAction', [$request]);

        return $this->transform($master, MasterTransformer::class);
    }

    /**
     * @param DeleteMasterRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteMaster(DeleteMasterRequest $request)
    {
        Apiato::call('Master@DeleteMasterAction', [$request]);

        return $this->noContent();
    }
}
