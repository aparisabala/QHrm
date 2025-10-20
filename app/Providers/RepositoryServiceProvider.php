<?php

namespace App\Providers;

use App\Repositories\BaseRepository;
use App\Repositories\IBaseRepository;
use Illuminate\Support\ServiceProvider;
//vpx_imports
use App\Repositories\Admin\Employee\Draft\Crud\UpdateBasic\Form\Update\IEmployeeUpdateRepository;
use App\Repositories\Admin\Employee\Draft\Crud\UpdateBasic\Form\Update\EmployeeUpdateRepository;
use App\Repositories\Admin\Employee\Draft\Crud\IEmployeeCrudRepository;
use App\Repositories\Admin\Employee\Draft\Crud\EmployeeCrudRepository;
use App\Repositories\Admin\DataLibrary\Leave\Crud\ILibLeaveCrudRepository;
use App\Repositories\Admin\DataLibrary\Leave\Crud\LibLeaveCrudRepository;
use App\Repositories\Admin\DataLibrary\Department\Crud\ILibDepartmentCrudRepository;
use App\Repositories\Admin\DataLibrary\Department\Crud\LibDepartmentCrudRepository;
use App\Repositories\Admin\DataLibrary\Designation\Crud\ILibDesignationCrudRepository;
use App\Repositories\Admin\DataLibrary\Designation\Crud\LibDesignationCrudRepository;
use App\Repositories\Admin\DataLibrary\Salary\Heads\Crud\ILibSalaryHeadCrudRepository;
use App\Repositories\Admin\DataLibrary\Salary\Heads\Crud\LibSalaryHeadCrudRepository;
use App\Repositories\Admin\System\User\Policy\IAdminUserPolicyRepository;
use App\Repositories\Admin\System\User\Policy\AdminUserPolicyRepository;
use App\Repositories\Admin\System\User\UserRole\Crud\IAdminUserRoleCrudRepository;
use App\Repositories\Admin\System\User\UserRole\Crud\AdminUserRoleCrudRepository;
use App\Repositories\Admin\System\User\Crud\IAdminUserCrudRepository;
use App\Repositories\Admin\System\User\Crud\AdminUserCrudRepository;
class RepositoryServiceProvider extends ServiceProvider
{
        /**
         * Register any application services.
         */
        public function register(): void
        {
            $this->app->bind(abstract: IBaseRepository::class, concrete: BaseRepository::class);
            //vpx_attach
            $this->app->bind(abstract: IEmployeeUpdateRepository::class, concrete: EmployeeUpdateRepository::class);
            $this->app->bind(abstract: IEmployeeCrudRepository::class, concrete: EmployeeCrudRepository::class);
            $this->app->bind(abstract: ILibLeaveCrudRepository::class, concrete: LibLeaveCrudRepository::class);
            $this->app->bind(abstract: ILibDepartmentCrudRepository::class, concrete: LibDepartmentCrudRepository::class);
            $this->app->bind(abstract: ILibDesignationCrudRepository::class, concrete: LibDesignationCrudRepository::class);
            $this->app->bind(abstract: ILibSalaryHeadCrudRepository::class, concrete: LibSalaryHeadCrudRepository::class);
            $this->app->bind(abstract: IAdminUserPolicyRepository::class, concrete: AdminUserPolicyRepository::class);
            $this->app->bind(abstract: IAdminUserRoleCrudRepository::class, concrete: AdminUserRoleCrudRepository::class);
            $this->app->bind(abstract: IAdminUserCrudRepository::class, concrete: AdminUserCrudRepository::class);
        }
}
