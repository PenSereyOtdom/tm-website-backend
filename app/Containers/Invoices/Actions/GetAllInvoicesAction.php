<?php

namespace App\Containers\Invoices\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllInvoicesAction extends Action
{
    public function run(Request $request)
    {
        $invoices = Apiato::call('Invoices@GetAllInvoicesTask', [], ['addRequestCriteria']);

        return $invoices;
    }
}
