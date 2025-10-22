<div class="row">
    <div class="col-md-4">
        <div class="card p-2 shadow-card card-border">
            <form id="frmFromName" autocomplete="off">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group text-left mb-3">
                                    <label class="form-label"> <b>{{ Lang::get($data['lang'].'.inputs.name') }}</b> <em class="required">*</em> <span id="name_error"></span></label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="name" id="name">
                                    </div>
                                </div>
                                <div class="mb-3 mt-3 text-end">
                                    <button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-plus"></i> {{ Lang::get('common.btns.add') }}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
