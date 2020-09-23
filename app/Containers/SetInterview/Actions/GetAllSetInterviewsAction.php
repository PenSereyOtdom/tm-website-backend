<?php

namespace App\Containers\SetInterview\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllSetInterviewsAction extends Action
{
    public function run(Request $request)
    {
        $setinterviews = Apiato::call('SetInterview@GetAllSetInterviewsTask', [], ['addRequestCriteria']);

        return $setinterviews;
    }
}
