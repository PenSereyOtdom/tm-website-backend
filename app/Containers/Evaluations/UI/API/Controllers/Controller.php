<?php

namespace App\Containers\Evaluations\UI\API\Controllers;

use App\Containers\Evaluations\UI\API\Requests\CreateEvaluationsRequest;
use App\Containers\Evaluations\UI\API\Requests\DeleteEvaluationsRequest;
use App\Containers\Evaluations\UI\API\Requests\GetAllEvaluationsRequest;
use App\Containers\Evaluations\UI\API\Requests\FindEvaluationsByIdRequest;
use App\Containers\Evaluations\UI\API\Requests\UpdateEvaluationsRequest;
use App\Containers\Evaluations\UI\API\Transformers\EvaluationsTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Evaluations\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateEvaluationsRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createEvaluations(CreateEvaluationsRequest $request)
    {
        $evaluations = Apiato::call('Evaluations@CreateEvaluationsAction', [$request]);

        return $this->created($this->transform($evaluations, EvaluationsTransformer::class));
    }

    /**
     * @param FindEvaluationsByIdRequest $request
     * @return array
     */
    public function findEvaluationsById(FindEvaluationsByIdRequest $request)
    {
        $evaluations = Apiato::call('Evaluations@FindEvaluationsByIdAction', [$request]);

        return $this->transform($evaluations, EvaluationsTransformer::class);
    }

    /**
     * @param GetAllEvaluationsRequest $request
     * @return array
     */
    public function getAllEvaluations(GetAllEvaluationsRequest $request)
    {
        $evaluations = Apiato::call('Evaluations@GetAllEvaluationsAction', [$request]);

        return $this->transform($evaluations, EvaluationsTransformer::class);
    }

    /**
     * @param UpdateEvaluationsRequest $request
     * @return array
     */
    public function updateEvaluations(UpdateEvaluationsRequest $request)
    {
        $evaluations = Apiato::call('Evaluations@UpdateEvaluationsAction', [$request]);

        return $this->transform($evaluations, EvaluationsTransformer::class);
    }

    /**
     * @param DeleteEvaluationsRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteEvaluations(DeleteEvaluationsRequest $request)
    {
        Apiato::call('Evaluations@DeleteEvaluationsAction', [$request]);

        return $this->noContent();
    }
}
