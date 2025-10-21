<div class="bg-info pl-2 page-fragment-bar">
    <span class="text-light"> <a href="{{url('admin/employee/draft/crud/education')}}"><span class="badge badge-info cursor-pointer"> <i class='fa-solid fa-arrow-left fs-16'></i></span></a> <span class="pt-1"> {{pxLang($data['lang'],'update')}}   </span> </span>
</div>
<div class="mt-4 p-3">
    @can('employee_education_crud_edit')
        <form id="frmUpdateEmployeeEducation" autocomplete="off">
            @method('PATCH')
            <input type="hidden" id="patch_id" value="{{$data['item']?->id}}" />
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card p-2 shadow-card card-border">
                                <div class="form-group text-left mb-3">
                                    <label class="form-label"> <b>{{pxLang($data['lang'],'fields.dgree_name')}}</b> <em class="required">*</em> <span id="dgree_name_error"></span></label>
                                    <div class="input-group">
                                        <select class="form-control" name="dgree_name" id="dgree_name">
                                            <option>-- {{pxLang($data['lang'],'','common.text.option_select')}} --</option>
                                            @foreach ($data['dgrees'] as $item)
                                                <option {{($data['item']?->dgree_name == $item?->name) ? 'selected':''}} value="{{$item?->name}}"> {{$item?->name}} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group text-left mb-3">
                                    <label class="form-label"> <b>{{pxLang($data['lang'],'fields.board')}}</b> <em class="required">*</em> <span id="board_error"></span></label>
                                    <div class="input-group">
                                        <select class="form-control" name="board" id="board">
                                            <option>-- {{pxLang($data['lang'],'','common.text.option_select')}} --</option>
                                            @foreach ($data['boards'] as $item)
                                                <option {{($data['item']?->board == $item?->name) ? 'selected':''}} value="{{$item?->name}}"> {{$item?->name}} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group text-left mb-3">
                                    <label class="form-label"> <b>{{pxLang($data['lang'],'fields.passing_year')}}</b> <em class="required">*</em> <span id="passing_year_error"></span></label>
                                    <div class="input-group">
                                        <input type="number" class="form-control" name="passing_year" id="passing_year" value="{{$data['item']?->passing_year}}">
                                    </div>
                                </div>
                                <div class="form-group text-left mb-3">
                                    <label class="form-label"> <b>{{pxLang($data['lang'],'fields.result')}}</b> <em class="required">*</em> <span id="result_error"></span></label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="result" id="result" value="{{$data['item']?->result}}">
                                    </div>
                                </div>
                                <div class="mb-3 mt-3 text-end">
                                    <button class="btn btn-info btn-sm" type="submit"><i class="fa fa-save"></i> {{pxLang($data['lang'],'','common.btns.crud_action_update')}} </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    @else
        @include('common.view.fragments.-item-403')
    @endcan
</div>
