<?php

namespace App\Containers\JobPost\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllJobPostsAction extends Action
{
    public function run(Request $request)
    {
        $jobposts = Apiato::call('JobPost@GetAllJobPostsTask', [], ['addRequestCriteria']);

        return $jobposts;
    }
}
