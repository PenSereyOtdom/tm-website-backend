<?php

namespace App\Containers\Achievements\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateAchievementsAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            'user_id', 'ach_title', 'ach_date', 'ach_detail'
        ]);

        $achievements = Apiato::call('Achievements@CreateAchievementsTask', [$data]);

        return $achievements;
    }
}
