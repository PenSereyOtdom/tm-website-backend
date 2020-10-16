<?php

namespace App\Containers\Applies\UI\API\Transformers;

use App\Containers\Applies\Models\Applies;
use App\Containers\DailyReport\UI\API\Transformers\DailyReportTransformer;
use App\Containers\JobPost\UI\API\Transformers\JobPostTransformer;
use App\Containers\UserProfile\UI\API\Transformers\UserProfileTransformer;
use App\Ship\Parents\Transformers\Transformer;
use App\Containers\ContractForm\UI\API\Transformers\ContractFormTransformer;
use App\Containers\SetInterview\UI\API\Transformers\SetInterviewTransformer;

class AppliesTransformer extends Transformer
{
    /**
     * @var  array
     */
    protected $defaultIncludes = [

    ];

    /**
     * @var  array
     */
    protected $availableIncludes = [
        'contractforms',
        'jobposts',
        'dailyreport',
        'userprofiles',
        'setinterviews'
    ];

    /**
     * @param Applies $entity
     *
     * @return array
     */
    public function transform(Applies $entity)
    {
        $response = [
            'object' => 'Applies',
            'id' => $entity->id,
            'jobpost_id' => $entity->jobpost_id,
            'confirmed'=> $entity->confirmed,
            'created_at' => $entity->created_at,
            'seeker_id'    => $entity->seeker_id,
            'company_id'    => $entity->company_id,
        ];

        $response = $this->ifAdmin([
            'real_id'    => $entity->id,
            // 'deleted_at' => $entity->deleted_at,
        ], $response);

        return $response;
    }

    public function includeContractForms(Applies $entity){
        return $this->collection($entity->contract, new ContractFormTransformer());
    }
    public function includeUserProfiles(Applies $entity){
        return $this->collection($entity->userprofile, new UserProfileTransformer());
    }
    public function includeJobPosts(Applies $entity){
        return $this->collection($entity->jobpost, new JobPostTransformer());
    }
    public function includeDailyReport(Applies $entity){
        return $this->collection($entity->dailyreport, new DailyReportTransformer());
    }

    public function includeSetInterviews(Applies $entity){
        return $this->collection($entity->interview, new SetInterviewTransformer());
    }
    
}