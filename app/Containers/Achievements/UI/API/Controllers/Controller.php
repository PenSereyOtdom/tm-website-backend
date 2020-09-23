<?php

namespace App\Containers\Achievements\UI\API\Controllers;

use App\Containers\Achievements\UI\API\Requests\CreateAchievementsRequest;
use App\Containers\Achievements\UI\API\Requests\DeleteAchievementsRequest;
use App\Containers\Achievements\UI\API\Requests\GetAllAchievementsRequest;
use App\Containers\Achievements\UI\API\Requests\FindAchievementsByIdRequest;
use App\Containers\Achievements\UI\API\Requests\UpdateAchievementsRequest;
use App\Containers\Achievements\UI\API\Transformers\AchievementsTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Achievements\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateAchievementsRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createAchievements(CreateAchievementsRequest $request)
    {
        $achievements = Apiato::call('Achievements@CreateAchievementsAction', [$request]);

        return $this->created($this->transform($achievements, AchievementsTransformer::class));
    }

    /**
     * @param FindAchievementsByIdRequest $request
     * @return array
     */
    public function findAchievementsById(FindAchievementsByIdRequest $request)
    {
        $achievements = Apiato::call('Achievements@FindAchievementsByIdAction', [$request]);

        return $this->transform($achievements, AchievementsTransformer::class);
    }

    /**
     * @param GetAllAchievementsRequest $request
     * @return array
     */
    public function getAllAchievements(GetAllAchievementsRequest $request)
    {
        $achievements = Apiato::call('Achievements@GetAllAchievementsAction', [$request]);

        return $this->transform($achievements, AchievementsTransformer::class);
    }

    /**
     * @param UpdateAchievementsRequest $request
     * @return array
     */
    public function updateAchievements(UpdateAchievementsRequest $request)
    {
        $achievements = Apiato::call('Achievements@UpdateAchievementsAction', [$request]);

        return $this->transform($achievements, AchievementsTransformer::class);
    }

    /**
     * @param DeleteAchievementsRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteAchievements(DeleteAchievementsRequest $request)
    {
        Apiato::call('Achievements@DeleteAchievementsAction', [$request]);

        return $this->noContent();
    }
}
