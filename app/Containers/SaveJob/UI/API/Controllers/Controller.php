<?php

namespace App\Containers\SaveJob\UI\API\Controllers;

use App\Containers\SaveJob\UI\API\Requests\CreateSaveJobRequest;
use App\Containers\SaveJob\UI\API\Requests\DeleteSaveJobRequest;
use App\Containers\SaveJob\UI\API\Requests\GetAllSaveJobsRequest;
use App\Containers\SaveJob\UI\API\Requests\FindSaveJobByIdRequest;
use App\Containers\SaveJob\UI\API\Requests\UpdateSaveJobRequest;
use App\Containers\SaveJob\UI\API\Transformers\SaveJobTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\SaveJob\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateSaveJobRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createSaveJob(CreateSaveJobRequest $request)
    {
        $savejob = Apiato::call('SaveJob@CreateSaveJobAction', [$request]);

        return $this->created($this->transform($savejob, SaveJobTransformer::class));
    }

    /**
     * @param FindSaveJobByIdRequest $request
     * @return array
     */
    public function findSaveJobById(FindSaveJobByIdRequest $request)
    {
        $savejob = Apiato::call('SaveJob@FindSaveJobByIdAction', [$request]);

        return $this->transform($savejob, SaveJobTransformer::class);
    }

    /**
     * @param GetAllSaveJobsRequest $request
     * @return array
     */
    public function getAllSaveJobs(GetAllSaveJobsRequest $request)
    {
        $savejobs = Apiato::call('SaveJob@GetAllSaveJobsAction', [$request]);

        return $this->transform($savejobs, SaveJobTransformer::class);
    }

    /**
     * @param UpdateSaveJobRequest $request
     * @return array
     */
    public function updateSaveJob(UpdateSaveJobRequest $request)
    {
        $savejob = Apiato::call('SaveJob@UpdateSaveJobAction', [$request]);

        return $this->transform($savejob, SaveJobTransformer::class);
    }

    /**
     * @param DeleteSaveJobRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteSaveJob(DeleteSaveJobRequest $request)
    {
        Apiato::call('SaveJob@DeleteSaveJobAction', [$request]);

        return $this->noContent();
    }
}
