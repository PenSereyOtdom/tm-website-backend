<?php

namespace App\Containers\SetInterview\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateSetInterviewAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            'applies_id', 'status' , 'pick_date','start_time','end_time','meeting_url','note'
        ]);

        $setinterview = Apiato::call('SetInterview@CreateSetInterviewTask', [$data]);

        return $setinterview;
    }
}
