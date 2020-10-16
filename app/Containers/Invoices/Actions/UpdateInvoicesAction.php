<?php

namespace App\Containers\Invoices\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateInvoicesAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            'user_id','number','to','project_title','invoice_no','phone','date','start_date','end_date',
            'total_hours','terms_and_conditions','total_earn','fee','tax','grand_total',
        ]);

        $invoices = Apiato::call('Invoices@UpdateInvoicesTask', [$request->id, $data]);

        return $invoices;
    }
}
