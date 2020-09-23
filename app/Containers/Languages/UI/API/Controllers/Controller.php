<?php

namespace App\Containers\Languages\UI\API\Controllers;

use App\Containers\Languages\UI\API\Requests\CreateLanguagesRequest;
use App\Containers\Languages\UI\API\Requests\DeleteLanguagesRequest;
use App\Containers\Languages\UI\API\Requests\GetAllLanguagesRequest;
use App\Containers\Languages\UI\API\Requests\FindLanguagesByIdRequest;
use App\Containers\Languages\UI\API\Requests\UpdateLanguagesRequest;
use App\Containers\Languages\UI\API\Transformers\LanguagesTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Languages\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateLanguagesRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createLanguages(CreateLanguagesRequest $request)
    {
        $languages = Apiato::call('Languages@CreateLanguagesAction', [$request]);

        return $this->created($this->transform($languages, LanguagesTransformer::class));
    }

    /**
     * @param FindLanguagesByIdRequest $request
     * @return array
     */
    public function findLanguagesById(FindLanguagesByIdRequest $request)
    {
        $languages = Apiato::call('Languages@FindLanguagesByIdAction', [$request]);

        return $this->transform($languages, LanguagesTransformer::class);
    }

    /**
     * @param GetAllLanguagesRequest $request
     * @return array
     */
    public function getAllLanguages(GetAllLanguagesRequest $request)
    {
        $languages = Apiato::call('Languages@GetAllLanguagesAction', [$request]);

        return $this->transform($languages, LanguagesTransformer::class);
    }

    /**
     * @param UpdateLanguagesRequest $request
     * @return array
     */
    public function updateLanguages(UpdateLanguagesRequest $request)
    {
        $languages = Apiato::call('Languages@UpdateLanguagesAction', [$request]);

        return $this->transform($languages, LanguagesTransformer::class);
    }

    /**
     * @param DeleteLanguagesRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteLanguages(DeleteLanguagesRequest $request)
    {
        Apiato::call('Languages@DeleteLanguagesAction', [$request]);

        return $this->noContent();
    }
}
