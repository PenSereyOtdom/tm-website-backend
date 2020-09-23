<?php

namespace App\Containers\Qualifications\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteQualificationsAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('Qualifications@DeleteQualificationsTask', [$request->id]);
    }
}
