 <form id="frmEmployeeUpdate" autocomplete="off">
        <input type="hidden" value="{{$data['item']?->id}}" name="id" />
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card p-2 shadow-card card-border">
                            <div class="form-group text-left mb-3">
                                <label class="form-label"><b>{{pxLang($data['lang'],'fields.father_name')}}</b> <span id="father_name_error"></span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="father_name" id="father_name" value="{{$data['item']?->father_name}}">
                                </div>
                            </div>
                            <div class="form-group text-left mb-3">
                                <label class="form-label"><b>{{pxLang($data['lang'],'fields.mother_name')}}</b> <span id="mother_name_error"></span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="mother_name" id="mother_name" value="{{$data['item']?->mother_name}}">
                                </div>
                            </div>

                            <div class="form-group text-left mb-3">
                                <label class="form-label"><b>{{pxLang($data['lang'],'fields.present_address')}}</b> <span id="present_address_error"></span></label>
                                <div class="input-group">
                                    <textarea class="form-control" name="present_address" id="present_address">{{$data['item']?->present_address}}</textarea>
                                </div>
                            </div>

                            <div class="form-group text-left mb-3">
                                <label class="form-label"><b>{{pxLang($data['lang'],'fields.permanent_address')}}</b> <span id="permanent_address_error"></span></label>
                                <div class="input-group">
                                    <textarea class="form-control" name="permanent_address" id="permanent_address">{{$data['item']?->permanent_address}}</textarea>
                                </div>
                            </div>

                            <div class="form-group text-left mb-3">
                                <label class="form-label"><b>{{pxLang($data['lang'],'fields.gender')}}</b> <span id="gender_error"></span></label>
                                <div class="input-group">
                                    <select class="form-control" name="gender" id="gender">
                                        <option value="">-- Select --</option>
                                        <option value="Male" {{ $data['item']?->gender == 'Male' ? 'selected' : '' }}>Male</option>
                                        <option value="Female" {{ $data['item']?->gender == 'Female' ? 'selected' : '' }}>Female</option>
                                        <option value="Other" {{ $data['item']?->gender == 'Other' ? 'selected' : '' }}>Other</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group text-left mb-3">
                                <label class="form-label"><b>{{pxLang($data['lang'],'fields.date_of_birth')}}</b> <span id="date_of_birth_error"></span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control dp" name="date_of_birth" id="date_of_birth" value="{{( $data['item']?->date_of_birth == null) ? '' : \Carbon\Carbon::parse($data['item']?->date_of_birth)->format('Y-m-d')}}">
                                </div>
                            </div>

                            <div class="form-group text-left mb-3">
                                <label class="form-label"><b>{{pxLang($data['lang'],'fields.nid')}}</b> <span id="nid_error"></span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="nid" id="nid" value="{{$data['item']?->nid}}">
                                </div>
                            </div>

                            <div class="form-group text-left mb-3">
                                <label class="form-label"><b>{{pxLang($data['lang'],'fields.emergency_contact')}}</b> <span id="emergency_contact_error"></span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="emergency_contact" id="emergency_contact" value="{{$data['item']?->emergency_contact}}">
                                </div>
                            </div>

                            <div class="form-group text-left mb-3">
                                <label class="form-label"><b>{{pxLang($data['lang'],'fields.maritual_status')}}</b> <span id="maritual_status_error"></span></label>
                                <div class="input-group">
                                    <select class="form-control" name="maritual_status" id="maritual_status">
                                        <option value="">-- Select --</option>
                                        <option value="Single" {{ $data['item']?->maritual_status == 'Single' ? 'selected' : '' }}>Single</option>
                                        <option value="Married" {{ $data['item']?->maritual_status == 'Married' ? 'selected' : '' }}>Married</option>
                                        <option value="Divorced" {{ $data['item']?->maritual_status == 'Divorced' ? 'selected' : '' }}>Divorced</option>
                                        <option value="Widowed" {{ $data['item']?->maritual_status == 'Widowed' ? 'selected' : '' }}>Widowed</option>
                                    </select>
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
