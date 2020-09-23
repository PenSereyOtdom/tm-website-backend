<?php

namespace App\Containers\Education\UI\API\Controllers;

use App\Containers\Education\UI\API\Requests\CreateEducationRequest;
use App\Containers\Education\UI\API\Requests\DeleteEducationRequest;
use App\Containers\Education\UI\API\Requests\GetAllEducationRequest;
use App\Containers\Education\UI\API\Requests\FindEducationByIdRequest;
use App\Containers\Education\UI\API\Requests\UpdateEducationRequest;
use App\Containers\Education\UI\API\Transformers\EducationTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Education\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateEducationRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createEducation(CreateEducationRequest $request)
    {
        $education = Apiato::call('Education@CreateEducationAction', [$request]);

        return $this->created($this->transform($education, EducationTransformer::class));
    }

    /**
     * @param FindEducationByIdRequest $request
     * @return array
     */
    public function findEducationById(FindEducationByIdRequest $request)
    {
        $education = Apiato::call('Education@FindEducationByIdAction', [$request]);

        return $this->transform($education, EducationTransformer::class);
    }

    /**
     * @param GetAllEducationRequest $request
     * @return array
     */
    public function getAllEducation(GetAllEducationRequest $request)
    {
        $education = Apiato::call('Education@GetAllEducationAction', [$request]);

        return $this->transform($education, EducationTransformer::class);
    }

    /**
     * @param UpdateEducationRequest $request
     * @return array
     */
    public function updateEducation(UpdateEducationRequest $request)
    {
        $education = Apiato::call('Education@UpdateEducationAction', [$request]);

        return $this->transform($education, EducationTransformer::class);
    }

    /**
     * @param DeleteEducationRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteEducation(DeleteEducationRequest $request)
    {
        Apiato::call('Education@DeleteEducationAction', [$request]);

        return $this->noContent();
    }
}
