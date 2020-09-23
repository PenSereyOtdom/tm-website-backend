<?php

namespace App\Containers\Qualifications\UI\API\Controllers;

use App\Containers\Qualifications\UI\API\Requests\CreateQualificationsRequest;
use App\Containers\Qualifications\UI\API\Requests\DeleteQualificationsRequest;
use App\Containers\Qualifications\UI\API\Requests\GetAllQualificationsRequest;
use App\Containers\Qualifications\UI\API\Requests\FindQualificationsByIdRequest;
use App\Containers\Qualifications\UI\API\Requests\UpdateQualificationsRequest;
use App\Containers\Qualifications\UI\API\Transformers\QualificationsTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Qualifications\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateQualificationsRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createQualifications(CreateQualificationsRequest $request)
    {
        $qualifications = Apiato::call('Qualifications@CreateQualificationsAction', [$request]);

        return $this->created($this->transform($qualifications, QualificationsTransformer::class));
    }

    /**
     * @param FindQualificationsByIdRequest $request
     * @return array
     */
    public function findQualificationsById(FindQualificationsByIdRequest $request)
    {
        $qualifications = Apiato::call('Qualifications@FindQualificationsByIdAction', [$request]);

        return $this->transform($qualifications, QualificationsTransformer::class);
    }

    /**
     * @param GetAllQualificationsRequest $request
     * @return array
     */
    public function getAllQualifications(GetAllQualificationsRequest $request)
    {
        $qualifications = Apiato::call('Qualifications@GetAllQualificationsAction', [$request]);

        return $this->transform($qualifications, QualificationsTransformer::class);
    }

    /**
     * @param UpdateQualificationsRequest $request
     * @return array
     */
    public function updateQualifications(UpdateQualificationsRequest $request)
    {
        $qualifications = Apiato::call('Qualifications@UpdateQualificationsAction', [$request]);

        return $this->transform($qualifications, QualificationsTransformer::class);
    }

    /**
     * @param DeleteQualificationsRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteQualifications(DeleteQualificationsRequest $request)
    {
        Apiato::call('Qualifications@DeleteQualificationsAction', [$request]);

        return $this->noContent();
    }
}
