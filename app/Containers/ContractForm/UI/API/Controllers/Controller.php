<?php

namespace App\Containers\ContractForm\UI\API\Controllers;

use App\Containers\ContractForm\UI\API\Requests\CreateContractFormRequest;
use App\Containers\ContractForm\UI\API\Requests\DeleteContractFormRequest;
use App\Containers\ContractForm\UI\API\Requests\GetAllContractFormsRequest;
use App\Containers\ContractForm\UI\API\Requests\FindContractFormByIdRequest;
use App\Containers\ContractForm\UI\API\Requests\UpdateContractFormRequest;
use App\Containers\ContractForm\UI\API\Transformers\ContractFormTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\ContractForm\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateContractFormRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createContractForm(CreateContractFormRequest $request)
    {
        $contractform = Apiato::call('ContractForm@CreateContractFormAction', [$request]);

        return $this->created($this->transform($contractform, ContractFormTransformer::class));
    }

    /**
     * @param FindContractFormByIdRequest $request
     * @return array
     */
    public function findContractFormById(FindContractFormByIdRequest $request)
    {
        $contractform = Apiato::call('ContractForm@FindContractFormByIdAction', [$request]);

        return $this->transform($contractform, ContractFormTransformer::class);
    }

    /**
     * @param GetAllContractFormsRequest $request
     * @return array
     */
    public function getAllContractForms(GetAllContractFormsRequest $request)
    {
        $contractforms = Apiato::call('ContractForm@GetAllContractFormsAction', [$request]);

        return $this->transform($contractforms, ContractFormTransformer::class);
    }

    /**
     * @param UpdateContractFormRequest $request
     * @return array
     */
    public function updateContractForm(UpdateContractFormRequest $request)
    {
        $contractform = Apiato::call('ContractForm@UpdateContractFormAction', [$request]);

        return $this->transform($contractform, ContractFormTransformer::class);
    }

    /**
     * @param DeleteContractFormRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteContractForm(DeleteContractFormRequest $request)
    {
        Apiato::call('ContractForm@DeleteContractFormAction', [$request]);

        return $this->noContent();
    }
}
