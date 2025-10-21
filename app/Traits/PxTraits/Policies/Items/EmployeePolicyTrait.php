<?php

namespace App\Traits\PxTraits\Policies\Items;

trait EmployeePolicyTrait {

    public function employeePolicy(){
        return [
            'name' => 'Employee Trait',
            'policies' => [
                [
                    'name' => 'Employee Crud',
                    'keys' => ['view','store','bulk_update','delete','pdf','excel','edit']
                ],
                [
                    'name' => 'Employee Form Update',
                    'keys' => ['view','update']
                ],
                [
                    'name' => 'Employee Education Crud',
                    'keys' => ['view','store','bulk_update','delete','pdf','excel','edit']
                ],
                [
                    'name' => 'Employee Bank Details Update',
                    'keys' => ['view','update']
                ],
                [
                    'name' => 'Employee Leave Crud',
                    'keys' => ['view','store','bulk_update','delete','pdf','excel','edit']
                ]
            ]
        ];
    }
}
