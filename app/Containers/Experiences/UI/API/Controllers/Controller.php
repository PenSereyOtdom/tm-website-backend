<?php

namespace App\Containers\Experiences\UI\API\Controllers;

use App\Containers\Experiences\UI\API\Requests\CreateExperiencesRequest;
use App\Containers\Experiences\UI\API\Requests\DeleteExperiencesRequest;
use App\Containers\Experiences\UI\API\Requests\GetAllExperiencesRequest;
use App\Containers\Experiences\UI\API\Requests\FindExperiencesByIdRequest;
use App\Containers\Experiences\UI\API\Requests\UpdateExperiencesRequest;
use App\Containers\Experiences\UI\API\Transformers\ExperiencesTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Experiences\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateExperiencesRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createExperiences(CreateExperiencesRequest $request)
    {
        $experiences = Apiato::call('Experiences@CreateExperiencesAction', [$request]);

        return $this->created($this->transform($experiences, ExperiencesTransformer::class));
    }

    /**
     * @param FindExperiencesByIdRequest $request
     * @return array
     */
    public function findExperiencesById(FindExperiencesByIdRequest $request)
    {
        $experiences = Apiato::call('Experiences@FindExperiencesByIdAction', [$request]);

        return $this->transform($experiences, ExperiencesTransformer::class);
    }

    /**
     * @param GetAllExperiencesRequest $request
     * @return array
     */
    public function getAllExperiences(GetAllExperiencesRequest $request)
    {
        $experiences = Apiato::call('Experiences@GetAllExperiencesAction', [$request]);

        return $this->transform($experiences, ExperiencesTransformer::class);
    }

    /**
     * @param UpdateExperiencesRequest $request
     * @return array
     */
    public function updateExperiences(UpdateExperiencesRequest $request)
    {
        $experiences = Apiato::call('Experiences@UpdateExperiencesAction', [$request]);

        return $this->transform($experiences, ExperiencesTransformer::class);
    }

    /**
     * @param DeleteExperiencesRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteExperiences(DeleteExperiencesRequest $request)
    {
        Apiato::call('Experiences@DeleteExperiencesAction', [$request]);

        return $this->noContent();
    }
}
