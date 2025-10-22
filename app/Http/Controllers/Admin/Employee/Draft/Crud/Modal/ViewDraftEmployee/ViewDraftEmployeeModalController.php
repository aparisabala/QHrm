<?php

namespace App\Http\Controllers\Admin\Employee\Draft\Crud\Modal\ViewDraftEmployee;
use App\Http\Controllers\Controller;
use App\Traits\BaseTrait;
use Illuminate\Http\JsonResponse;
use View;
use Illuminate\Http\Request;
use App\Repositories\Admin\Employee\Draft\Crud\Modal\ViewDraftEmployee\IViewDraftEmployeeRepository;
//vpx_imports

class ViewDraftEmployeeModalController extends Controller {

    use BaseTrait;
    public function __construct(private IViewDraftEmployeeRepository $iViewDraftEmployeeRepo) {
        $this->middleware(['auth:admin','HasAdminUserPassword','HasAdminUserAuth']);
        $this->lang= 'admin.employee.draft.crud.modal.view-draft-employee';
        $this->middleware(function ($request, $next) {
            $request->merge(['lang' => $this->lang]);
            return $next($request);
        });

    }

    /**
     * Loaded page for viewdraftemployee
     *
     * @param Request $request
     * @return View
     */
    public function display(Request $request) : JsonResponse
    {
        $data['lang'] = $this->lang;
        $data = [...$data,...$this->iViewDraftEmployeeRepo->display($request)];
        $view = View::make('admin.pages.employee.draft.crud.modal.view-draft-employee._modal', compact('data'))->render();
        $response = ['extraData' => ['inflate' => pxLang($data['lang'],'','common.response_success')],'view' => $view];
        return $this->response(['type' => 'success', 'data' => $response]);
    }
    //vpx_attach

}
