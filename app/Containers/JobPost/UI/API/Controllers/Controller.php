<?php

namespace App\Containers\JobPost\UI\API\Controllers;

use App\Containers\JobPost\UI\API\Requests\CreateJobPostRequest;
use App\Containers\JobPost\UI\API\Requests\DeleteJobPostRequest;
use App\Containers\JobPost\UI\API\Requests\GetAllJobPostsRequest;
use App\Containers\JobPost\UI\API\Requests\FindJobPostByIdRequest;
use App\Containers\JobPost\UI\API\Requests\UpdateJobPostRequest;
use App\Containers\JobPost\UI\API\Transformers\JobPostTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\JobPost\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateJobPostRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createJobPost(CreateJobPostRequest $request)
    {
        $jobpost = Apiato::call('JobPost@CreateJobPostAction', [$request]);

        return $this->created($this->transform($jobpost, JobPostTransformer::class));
    }

    /**
     * @param FindJobPostByIdRequest $request
     * @return array
     */
    public function findJobPostById(FindJobPostByIdRequest $request)
    {
        $jobpost = Apiato::call('JobPost@FindJobPostByIdAction', [$request]);

        return $this->transform($jobpost, JobPostTransformer::class);
    }

    /**
     * @param GetAllJobPostsRequest $request
     * @return array
     */
    public function getAllJobPosts(GetAllJobPostsRequest $request)
    {
        $jobposts = Apiato::call('JobPost@GetAllJobPostsAction', [$request]);

        return $this->transform($jobposts, JobPostTransformer::class);
    }

    /**
     * @param UpdateJobPostRequest $request
     * @return array
     */
    public function updateJobPost(UpdateJobPostRequest $request)
    {
        $jobpost = Apiato::call('JobPost@UpdateJobPostAction', [$request]);

        return $this->transform($jobpost, JobPostTransformer::class);
    }

    /**
     * @param DeleteJobPostRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteJobPost(DeleteJobPostRequest $request)
    {
        Apiato::call('JobPost@DeleteJobPostAction', [$request]);

        return $this->noContent();
    }
}
