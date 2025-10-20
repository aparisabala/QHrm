<div class="bg-info pl-2 page-fragment-bar">
    <span class="text-light"> <a href="{{url('admin/employee/draft')}}"><span class="badge badge-info cursor-pointer"> <i class='fa-solid fa-arrow-left fs-16'></i></span></a> <span class="pt-1"> {{pxLang($data['lang'],'update')}}   </span> </span>
</div>
<div class="mt-4 p-3">
    @can('employee_crud_edit')
        <form id="frmUpdateEmployee" autocomplete="off">
            @method('PATCH')
            <input type="hidden" id="patch_id" value="{{$data['item']?->id}}" />
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card p-2 shadow-card card-border">
                                <div class="form-group text-left mb-3">
                                    <label class="form-label"> <b>{{pxLang($data['lang'],'fields.lib_department_id')}}</b> <em class="required">*</em> <span id="lib_department_id_error"></span></label>
                                    <div class="input-group">
                                        <select class="form-control" name="lib_department_id" id="lib_department_id">
                                            <option value="">-- {{pxLang($data['lang'],'','common.text.option_select')}} --</option>
                                            @foreach ($data['departments'] as $item)
                                                <option {{($data['item']?->lib_department_id == $item?->id) ? 'selected':''}} value="{{$item?->id}}">{{$item?->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group text-left mb-3">
                                    <label class="form-label"> <b>{{pxLang($data['lang'],'fields.lib_designation_id')}} </b> <em class="required">*</em> <span id="lib_designation_id_error"></span></label>
                                    <div class="input-group">
                                        <select class="form-control" name="lib_designation_id" id="lib_designation_id">
                                            <option value="">-- {{pxLang($data['lang'],'','common.text.option_select')}} -- </option>
                                            @foreach ($data['designations'] as $item)
                                                <option {{($data['item']?->lib_designation_id == $item?->id) ? 'selected':''}} value="{{$item?->id}}">{{$item?->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                 <div class="form-group text-left mb-3">
                                    <label class="form-label"> <b>{{pxLang($data['lang'],'fields.name')}}</b> <em class="required">*</em> <span id="name_error"></span></label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="name" id="name" value="{{$data['item']?->name}}">
                                    </div>
                                </div>
                                <div class="form-group text-left mb-3">
                                    <label class="form-label"> <b>{{pxLang($data['lang'],'fields.email')}}</b> <em class="required">*</em> <span id="email_error"></span></label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="email" id="email" value="{{$data['item']?->email}}">
                                    </div>
                                </div>
                                <div class="form-group text-left mb-3">
                                    <label class="form-label"> <b>{{pxLang($data['lang'],'fields.mobile_number')}}</b> <em class="required">*</em> <span id="mobile_number_error"></span></label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="mobile_number" id="mobile_number" value="{{$data['item']?->mobile_number}}">
                                    </div>
                                </div>
                                <div class="form-group text-left mb-3">
                                    <label class="form-label"> <b>{{pxLang($data['lang'],'fields.status')}}</b> <em class="required">*</em> <span id="status_error"></span></label>
                                    <div class="input-group">
                                        <select class="form-control" name="status" id="user_status">
                                            <option {{($data['item']?->status == 'Active') ? 'selected':''}} value="Active"> Active  </option>
                                            <option {{($data['item']?->status == 'Disabled') ? 'selected':''}} value="Disabled"> Disabled  </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group text-left mb-3">
                                    <label class="form-label"> <b>{{pxLang($data['lang'],'fields.avatar')}} JPG|PNG|JPEG|WEBP (Max 2024KB)</b> <em class="required">*</em> <span id="image_error"></span></label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" name="image" id="image" >
                                    </div>
                                </div>
                                <div>
                                    <img src="{{getRowImage($data['item'],'80X80')}}" class="img-fluid" />
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
