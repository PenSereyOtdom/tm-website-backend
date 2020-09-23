<?php

namespace App\Containers\ServiceApprovals\UI\API\Controllers;

use App\Containers\ServiceApprovals\UI\API\Requests\CreateServiceApprovalsRequest;
use App\Containers\ServiceApprovals\UI\API\Requests\DeleteServiceApprovalsRequest;
use App\Containers\ServiceApprovals\UI\API\Requests\GetAllServiceApprovalsRequest;
use App\Containers\ServiceApprovals\UI\API\Requests\FindServiceApprovalsByIdRequest;
use App\Containers\ServiceApprovals\UI\API\Requests\UpdateServiceApprovalsRequest;
use App\Containers\ServiceApprovals\UI\API\Transformers\ServiceApprovalsTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\ServiceApprovals\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateServiceApprovalsRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createServiceApprovals(CreateServiceApprovalsRequest $request)
    {
        $serviceapprovals = Apiato::call('ServiceApprovals@CreateServiceApprovalsAction', [$request]);

        return $this->created($this->transform($serviceapprovals, ServiceApprovalsTransformer::class));
    }

    /**
     * @param FindServiceApprovalsByIdRequest $request
     * @return array
     */
    public function findServiceApprovalsById(FindServiceApprovalsByIdRequest $request)
    {
        $serviceapprovals = Apiato::call('ServiceApprovals@FindServiceApprovalsByIdAction', [$request]);

        return $this->transform($serviceapprovals, ServiceApprovalsTransformer::class);
    }

    /**
     * @param GetAllServiceApprovalsRequest $request
     * @return array
     */
    public function getAllServiceApprovals(GetAllServiceApprovalsRequest $request)
    {
        $serviceapprovals = Apiato::call('ServiceApprovals@GetAllServiceApprovalsAction', [$request]);

        return $this->transform($serviceapprovals, ServiceApprovalsTransformer::class);
    }

    /**
     * @param UpdateServiceApprovalsRequest $request
     * @return array
     */
    public function updateServiceApprovals(UpdateServiceApprovalsRequest $request)
    {
        $serviceapprovals = Apiato::call('ServiceApprovals@UpdateServiceApprovalsAction', [$request]);

        return $this->transform($serviceapprovals, ServiceApprovalsTransformer::class);
    }

    /**
     * @param DeleteServiceApprovalsRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteServiceApprovals(DeleteServiceApprovalsRequest $request)
    {
        Apiato::call('ServiceApprovals@DeleteServiceApprovalsAction', [$request]);

        return $this->noContent();
    }
}
