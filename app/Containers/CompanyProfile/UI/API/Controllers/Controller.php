<?php

namespace App\Containers\CompanyProfile\UI\API\Controllers;

use App\Containers\CompanyProfile\UI\API\Requests\CreateCompanyProfileRequest;
use App\Containers\CompanyProfile\UI\API\Requests\DeleteCompanyProfileRequest;
use App\Containers\CompanyProfile\UI\API\Requests\GetAllCompanyProfilesRequest;
use App\Containers\CompanyProfile\UI\API\Requests\FindCompanyProfileByIdRequest;
use App\Containers\CompanyProfile\UI\API\Requests\UpdateCompanyProfileRequest;
use App\Containers\CompanyProfile\UI\API\Transformers\CompanyProfileTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\CompanyProfile\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateCompanyProfileRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createCompanyProfile(CreateCompanyProfileRequest $request)
    {
        $companyprofile = Apiato::call('CompanyProfile@CreateCompanyProfileAction', [$request]);

        return $this->created($this->transform($companyprofile, CompanyProfileTransformer::class));
    }

    /**
     * @param FindCompanyProfileByIdRequest $request
     * @return array
     */
    public function findCompanyProfileById(FindCompanyProfileByIdRequest $request)
    {
        $companyprofile = Apiato::call('CompanyProfile@FindCompanyProfileByIdAction', [$request]);

        return $this->transform($companyprofile, CompanyProfileTransformer::class);
    }

    /**
     * @param GetAllCompanyProfilesRequest $request
     * @return array
     */
    public function getAllCompanyProfiles(GetAllCompanyProfilesRequest $request)
    {
        $companyprofiles = Apiato::call('CompanyProfile@GetAllCompanyProfilesAction', [$request]);

        return $this->transform($companyprofiles, CompanyProfileTransformer::class);
    }

    /**
     * @param UpdateCompanyProfileRequest $request
     * @return array
     */
    public function updateCompanyProfile(UpdateCompanyProfileRequest $request)
    {
        $companyprofile = Apiato::call('CompanyProfile@UpdateCompanyProfileAction', [$request]);

        return $this->transform($companyprofile, CompanyProfileTransformer::class);
    }

    /**
     * @param DeleteCompanyProfileRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteCompanyProfile(DeleteCompanyProfileRequest $request)
    {
        Apiato::call('CompanyProfile@DeleteCompanyProfileAction', [$request]);

        return $this->noContent();
    }
}
