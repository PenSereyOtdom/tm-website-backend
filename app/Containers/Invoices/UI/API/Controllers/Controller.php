<?php

namespace App\Containers\Invoices\UI\API\Controllers;

use App\Containers\Invoices\UI\API\Requests\CreateInvoicesRequest;
use App\Containers\Invoices\UI\API\Requests\DeleteInvoicesRequest;
use App\Containers\Invoices\UI\API\Requests\GetAllInvoicesRequest;
use App\Containers\Invoices\UI\API\Requests\FindInvoicesByIdRequest;
use App\Containers\Invoices\UI\API\Requests\UpdateInvoicesRequest;
use App\Containers\Invoices\UI\API\Transformers\InvoicesTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Invoices\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateInvoicesRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createInvoices(CreateInvoicesRequest $request)
    {
        $invoices = Apiato::call('Invoices@CreateInvoicesAction', [$request]);

        return $this->created($this->transform($invoices, InvoicesTransformer::class));
    }

    /**
     * @param FindInvoicesByIdRequest $request
     * @return array
     */
    public function findInvoicesById(FindInvoicesByIdRequest $request)
    {
        $invoices = Apiato::call('Invoices@FindInvoicesByIdAction', [$request]);

        return $this->transform($invoices, InvoicesTransformer::class);
    }

    /**
     * @param GetAllInvoicesRequest $request
     * @return array
     */
    public function getAllInvoices(GetAllInvoicesRequest $request)
    {
        $invoices = Apiato::call('Invoices@GetAllInvoicesAction', [$request]);

        return $this->transform($invoices, InvoicesTransformer::class);
    }

    /**
     * @param UpdateInvoicesRequest $request
     * @return array
     */
    public function updateInvoices(UpdateInvoicesRequest $request)
    {
        $invoices = Apiato::call('Invoices@UpdateInvoicesAction', [$request]);

        return $this->transform($invoices, InvoicesTransformer::class);
    }

    /**
     * @param DeleteInvoicesRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteInvoices(DeleteInvoicesRequest $request)
    {
        Apiato::call('Invoices@DeleteInvoicesAction', [$request]);

        return $this->noContent();
    }
}
