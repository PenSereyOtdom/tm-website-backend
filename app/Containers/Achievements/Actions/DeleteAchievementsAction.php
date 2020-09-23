<?php

namespace App\Containers\Achievements\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteAchievementsAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('Achievements@DeleteAchievementsTask', [$request->id]);
    }
}
