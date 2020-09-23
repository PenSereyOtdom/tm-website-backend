<?php

namespace App\Containers\ExperienceLevels\UI\API\Controllers;

use App\Containers\ExperienceLevels\UI\API\Requests\CreateExperienceLevelsRequest;
use App\Containers\ExperienceLevels\UI\API\Requests\DeleteExperienceLevelsRequest;
use App\Containers\ExperienceLevels\UI\API\Requests\GetAllExperienceLevelsRequest;
use App\Containers\ExperienceLevels\UI\API\Requests\FindExperienceLevelsByIdRequest;
use App\Containers\ExperienceLevels\UI\API\Requests\UpdateExperienceLevelsRequest;
use App\Containers\ExperienceLevels\UI\API\Transformers\ExperienceLevelsTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\ExperienceLevels\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateExperienceLevelsRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createExperienceLevels(CreateExperienceLevelsRequest $request)
    {
        $experiencelevels = Apiato::call('ExperienceLevels@CreateExperienceLevelsAction', [$request]);

        return $this->created($this->transform($experiencelevels, ExperienceLevelsTransformer::class));
    }

    /**
     * @param FindExperienceLevelsByIdRequest $request
     * @return array
     */
    public function findExperienceLevelsById(FindExperienceLevelsByIdRequest $request)
    {
        $experiencelevels = Apiato::call('ExperienceLevels@FindExperienceLevelsByIdAction', [$request]);

        return $this->transform($experiencelevels, ExperienceLevelsTransformer::class);
    }

    /**
     * @param GetAllExperienceLevelsRequest $request
     * @return array
     */
    public function getAllExperienceLevels(GetAllExperienceLevelsRequest $request)
    {
        $experiencelevels = Apiato::call('ExperienceLevels@GetAllExperienceLevelsAction', [$request]);

        return $this->transform($experiencelevels, ExperienceLevelsTransformer::class);
    }

    /**
     * @param UpdateExperienceLevelsRequest $request
     * @return array
     */
    public function updateExperienceLevels(UpdateExperienceLevelsRequest $request)
    {
        $experiencelevels = Apiato::call('ExperienceLevels@UpdateExperienceLevelsAction', [$request]);

        return $this->transform($experiencelevels, ExperienceLevelsTransformer::class);
    }

    /**
     * @param DeleteExperienceLevelsRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteExperienceLevels(DeleteExperienceLevelsRequest $request)
    {
        Apiato::call('ExperienceLevels@DeleteExperienceLevelsAction', [$request]);

        return $this->noContent();
    }
}
