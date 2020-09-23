<?php

namespace App\Containers\JobClassifications\UI\API\Controllers;

use App\Containers\JobClassifications\UI\API\Requests\CreateJobClassificationsRequest;
use App\Containers\JobClassifications\UI\API\Requests\DeleteJobClassificationsRequest;
use App\Containers\JobClassifications\UI\API\Requests\GetAllJobClassificationsRequest;
use App\Containers\JobClassifications\UI\API\Requests\FindJobClassificationsByIdRequest;
use App\Containers\JobClassifications\UI\API\Requests\UpdateJobClassificationsRequest;
use App\Containers\JobClassifications\UI\API\Transformers\JobClassificationsTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\JobClassifications\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateJobClassificationsRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createJobClassifications(CreateJobClassificationsRequest $request)
    {
        $jobclassifications = Apiato::call('JobClassifications@CreateJobClassificationsAction', [$request]);

        return $this->created($this->transform($jobclassifications, JobClassificationsTransformer::class));
    }

    /**
     * @param FindJobClassificationsByIdRequest $request
     * @return array
     */
    public function findJobClassificationsById(FindJobClassificationsByIdRequest $request)
    {
        $jobclassifications = Apiato::call('JobClassifications@FindJobClassificationsByIdAction', [$request]);

        return $this->transform($jobclassifications, JobClassificationsTransformer::class);
    }

    /**
     * @param GetAllJobClassificationsRequest $request
     * @return array
     */
    public function getAllJobClassifications(GetAllJobClassificationsRequest $request)
    {
        $jobclassifications = Apiato::call('JobClassifications@GetAllJobClassificationsAction', [$request]);

        return $this->transform($jobclassifications, JobClassificationsTransformer::class);
    }

    /**
     * @param UpdateJobClassificationsRequest $request
     * @return array
     */
    public function updateJobClassifications(UpdateJobClassificationsRequest $request)
    {
        $jobclassifications = Apiato::call('JobClassifications@UpdateJobClassificationsAction', [$request]);

        return $this->transform($jobclassifications, JobClassificationsTransformer::class);
    }

    /**
     * @param DeleteJobClassificationsRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteJobClassifications(DeleteJobClassificationsRequest $request)
    {
        Apiato::call('JobClassifications@DeleteJobClassificationsAction', [$request]);

        return $this->noContent();
    }
}
