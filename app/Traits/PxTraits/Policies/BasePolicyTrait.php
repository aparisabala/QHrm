<?php

namespace App\Traits\PxTraits\Policies;

use App\Traits\PxTraits\Policies\Items\DataLibratyTrait;
use App\Traits\PxTraits\Policies\Items\SytemUserPolicyTrait;

trait BasePolicyTrait {

    use SytemUserPolicyTrait,DataLibratyTrait;
    public function systemPolicies(){
        return [
            [
                'name' => 'Admin Panel',
                'policies' => [
                    [
                        ...$this->salarySetupPolicies()
                    ],
                    [
                        ...$this->systemUserPolicies()
                    ]
                ]
            ]
        ];
    }
}
