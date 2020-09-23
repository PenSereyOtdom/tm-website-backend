<?php

namespace App\Containers\Achievements\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllAchievementsAction extends Action
{
    public function run(Request $request)
    {
        $achievements = Apiato::call('Achievements@GetAllAchievementsTask', [], ['addRequestCriteria']);

        return $achievements;
    }
}
