<?php

namespace App\Containers\Achievements\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindAchievementsByIdAction extends Action
{
    public function run(Request $request)
    {
        $achievements = Apiato::call('Achievements@FindAchievementsByIdTask', [$request->id]);

        return $achievements;
    }
}
