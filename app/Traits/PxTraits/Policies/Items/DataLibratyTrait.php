<?php

namespace App\Traits\PxTraits\Policies\Items;

trait DataLibratyTrait {

    public function salarySetupPolicies(){
        return [
            'name' => 'Salary Setup',
            'policies' => [
                [
                    'name' => 'Lib Department Crud',
                    'keys' => ['view','store','bulk_update','delete','pdf','excel','edit']
                ],
                [
                    'name' => 'Lib Designation Crud',
                    'keys' => ['view','store','bulk_update','delete','pdf','excel','edit']
                ],
                [
                    'name' => 'Lib Salary Head Crud',
                    'keys' => ['view','store','bulk_update','delete','pdf','excel','edit']
                ]
            ]
        ];
    }
}
