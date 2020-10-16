<?php

namespace App\Containers\Invoices\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindInvoicesByIdAction extends Action
{
    public function run(Request $request)
    {
        $invoices = Apiato::call('Invoices@FindInvoicesByIdTask', [$request->id]);

        return $invoices;
    }
}
