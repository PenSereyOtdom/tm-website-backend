<?php

namespace App\Containers\JobPost\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindJobPostByIdAction extends Action
{
    public function run(Request $request)
    {
        $jobpost = Apiato::call('JobPost@FindJobPostByIdTask', [$request->id]);

        return $jobpost;
    }
}
