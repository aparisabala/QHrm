<?php

namespace App\Repositories\Admin\Employee\Draft\Crud\Modal\ViewDraftEmployee;

use App\Models\Employee;
use App\Repositories\BaseRepository;

class ViewDraftEmployeeRepository extends BaseRepository implements IViewDraftEmployeeRepository
{

    /**
     * Modal  data
     *
     * @param Request $request
     * @return array
     */
    public function display($request) : array
    {
        $data['item'] = Employee::where([['id','=',$request->id]])->first();
        return $data;
    }
}
