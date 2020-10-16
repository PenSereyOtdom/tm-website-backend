<?php

namespace App\Containers\Invoices\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateInvoicesAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            'applies_id','invoice_no','total_hours','total_earn','fee','tax','grand_total',
        ]);

        $invoices = Apiato::call('Invoices@CreateInvoicesTask', [$data]);

        return $invoices;
    }
}
