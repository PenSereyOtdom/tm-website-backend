<?php

namespace App\Containers\SetInterview\UI\API\Controllers;

use App\Containers\SetInterview\UI\API\Requests\CreateSetInterviewRequest;
use App\Containers\SetInterview\UI\API\Requests\DeleteSetInterviewRequest;
use App\Containers\SetInterview\UI\API\Requests\GetAllSetInterviewsRequest;
use App\Containers\SetInterview\UI\API\Requests\FindSetInterviewByIdRequest;
use App\Containers\SetInterview\UI\API\Requests\UpdateSetInterviewRequest;
use App\Containers\SetInterview\UI\API\Transformers\SetInterviewTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\SetInterview\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateSetInterviewRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createSetInterview(CreateSetInterviewRequest $request)
    {
        $setinterview = Apiato::call('SetInterview@CreateSetInterviewAction', [$request]);

        return $this->created($this->transform($setinterview, SetInterviewTransformer::class));
    }

    /**
     * @param FindSetInterviewByIdRequest $request
     * @return array
     */
    public function findSetInterviewById(FindSetInterviewByIdRequest $request)
    {
        $setinterview = Apiato::call('SetInterview@FindSetInterviewByIdAction', [$request]);

        return $this->transform($setinterview, SetInterviewTransformer::class);
    }

    /**
     * @param GetAllSetInterviewsRequest $request
     * @return array
     */
    public function getAllSetInterviews(GetAllSetInterviewsRequest $request)
    {
        $setinterviews = Apiato::call('SetInterview@GetAllSetInterviewsAction', [$request]);

        return $this->transform($setinterviews, SetInterviewTransformer::class);
    }

    /**
     * @param UpdateSetInterviewRequest $request
     * @return array
     */
    public function updateSetInterview(UpdateSetInterviewRequest $request)
    {
        $setinterview = Apiato::call('SetInterview@UpdateSetInterviewAction', [$request]);

        return $this->transform($setinterview, SetInterviewTransformer::class);
    }

    /**
     * @param DeleteSetInterviewRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteSetInterview(DeleteSetInterviewRequest $request)
    {
        Apiato::call('SetInterview@DeleteSetInterviewAction', [$request]);

        return $this->noContent();
    }
}
