<?php

namespace App\Providers;

use App\Repositories\BaseRepository;
use App\Repositories\IBaseRepository;
use Illuminate\Support\ServiceProvider;
//vpx_imports
use App\Repositories\Admin\Employee\Draft\Crud\Leave\Crud\IEmployeeLeaveCrudRepository;
use App\Repositories\Admin\Employee\Draft\Crud\Leave\Crud\EmployeeLeaveCrudRepository;
use App\Repositories\Admin\DataLibrary\Dgree\Crud\ILibDgreeCrudRepository;
use App\Repositories\Admin\DataLibrary\Dgree\Crud\LibDgreeCrudRepository;
use App\Repositories\Admin\DataLibrary\Board\Crud\ILibBoardCrudRepository;
use App\Repositories\Admin\DataLibrary\Board\Crud\LibBoardCrudRepository;
use App\Repositories\Admin\Employee\Draft\Crud\Education\Crud\IEmployeeEducationCrudRepository;
use App\Repositories\Admin\Employee\Draft\Crud\Education\Crud\EmployeeEducationCrudRepository;
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
            $this->app->bind(abstract: IEmployeeLeaveCrudRepository::class, concrete: EmployeeLeaveCrudRepository::class);
            $this->app->bind(abstract: ILibDgreeCrudRepository::class, concrete: LibDgreeCrudRepository::class);
            $this->app->bind(abstract: ILibBoardCrudRepository::class, concrete: LibBoardCrudRepository::class);
            $this->app->bind(abstract: IEmployeeEducationCrudRepository::class, concrete: EmployeeEducationCrudRepository::class);
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
