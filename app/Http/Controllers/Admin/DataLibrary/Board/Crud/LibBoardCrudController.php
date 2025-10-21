<?php

namespace App\Http\Controllers\Admin\DataLibrary\Board\Crud;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\DataLibrary\Board\Crud\ValidateStoreLibBoard;
use App\Repositories\Admin\DataLibrary\Board\Crud\ILibBoardCrudRepository;
use App\Traits\BaseTrait;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
class LibBoardCrudController  extends Controller {

    use BaseTrait;
    public function __construct(private ILibBoardCrudRepository $iLibBoardCrudRepo) {
        $this->middleware(['auth:admin','HasAdminUserPassword','HasAdminUserAuth']);
        $this->lang= 'admin.data-library.board.crud';
        $this->middleware(function ($request, $next) {
            $request->merge(['lang' => $this->lang]);
            return $next($request);
        });

    }

    /**
     * Index page for libboard crud
     *
     * @param Request $request
     * @return View
     */
    public function index(Request $request) : View
    {
        $data = $this->iLibBoardCrudRepo->index($request);
        $data['lang'] = $this->lang;
        return view('admin.pages.data-library.board.crud.index',compact('data'));
    }

    /**
     * List items for yajra datatable for libboard crud
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function list(Request $request) : JsonResponse
    {
        return  $this->iLibBoardCrudRepo->list($request);
    }

    /**
     * Store procedure for comapany crud
     *
     * @param ValidateStoreLibBoard $request
     * @return JsonResponse
     */
    public function store(ValidateStoreLibBoard $request): JsonResponse
    {
        return $this->iLibBoardCrudRepo->store($request);
    }

    /**
     * Index page for view
     *
     * @param integer|string $id
     * @param Request $request
     * @return view
     */
    public function edit($id,Request $request) : view
    {
        $data = $this->iLibBoardCrudRepo->index($request,$id);
        $data['lang'] = $this->lang;
        return view('admin.pages.data-library.board.crud.index', compact('data'));
    }

    /**
     * Update procedure for libboard
     *
     * @param Request $request
     * @param integer|string $id
     * @return JsonResponse
     */
    public function update(Request $request, $id) : JsonResponse
    {
        return $this->iLibBoardCrudRepo->update($request,$id);
    }

    /**
     * Bulk delete list resources
     *
     * @param Request $request
     * @return JsonResponse
     */
     public function deleteList(Request $request) : JsonResponse
    {
       return $this->iLibBoardCrudRepo->deleteList($request);
    }


    /**
     * Bulk update list resources
     *
     * @param Request $request
     * @return JsonResponse
     */
     public function updateList(Request $request) : JsonResponse
    {
       return $this->iLibBoardCrudRepo->updateList($request);
    }

}