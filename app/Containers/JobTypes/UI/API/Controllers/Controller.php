<?php

namespace App\Containers\JobTypes\UI\API\Controllers;

use App\Containers\JobTypes\UI\API\Requests\CreateJobTypesRequest;
use App\Containers\JobTypes\UI\API\Requests\DeleteJobTypesRequest;
use App\Containers\JobTypes\UI\API\Requests\GetAllJobTypesRequest;
use App\Containers\JobTypes\UI\API\Requests\FindJobTypesByIdRequest;
use App\Containers\JobTypes\UI\API\Requests\UpdateJobTypesRequest;
use App\Containers\JobTypes\UI\API\Transformers\JobTypesTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\JobTypes\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateJobTypesRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createJobTypes(CreateJobTypesRequest $request)
    {
        $jobtypes = Apiato::call('JobTypes@CreateJobTypesAction', [$request]);

        return $this->created($this->transform($jobtypes, JobTypesTransformer::class));
    }

    /**
     * @param FindJobTypesByIdRequest $request
     * @return array
     */
    public function findJobTypesById(FindJobTypesByIdRequest $request)
    {
        $jobtypes = Apiato::call('JobTypes@FindJobTypesByIdAction', [$request]);

        return $this->transform($jobtypes, JobTypesTransformer::class);
    }

    /**
     * @param GetAllJobTypesRequest $request
     * @return array
     */
    public function getAllJobTypes(GetAllJobTypesRequest $request)
    {
        $jobtypes = Apiato::call('JobTypes@GetAllJobTypesAction', [$request]);

        return $this->transform($jobtypes, JobTypesTransformer::class);
    }

    /**
     * @param UpdateJobTypesRequest $request
     * @return array
     */
    public function updateJobTypes(UpdateJobTypesRequest $request)
    {
        $jobtypes = Apiato::call('JobTypes@UpdateJobTypesAction', [$request]);

        return $this->transform($jobtypes, JobTypesTransformer::class);
    }

    /**
     * @param DeleteJobTypesRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteJobTypes(DeleteJobTypesRequest $request)
    {
        Apiato::call('JobTypes@DeleteJobTypesAction', [$request]);

        return $this->noContent();
    }
}
