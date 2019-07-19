@extends('layouts.glance')
@section('title')
    <title>Thông tin cá nhân</title>
@endsection
@section('link')
    <link href="{{asset('admin_assets/css/info.css')}}" rel='stylesheet' type='text/css' />
@endsection
@section('tag')
    <script src="{{ asset('admin_assets/js/info.js') }}"></script>
@endsection
@section('content')
    <div class="forms tables">
        <div class="row">
            <div class="d-inline">
                <h2 class="title1">Thêm mới người dùng</h2>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 btn-btn d-inline">
                <a><button type="button" class="btn btn-success btn-2 btn-back btn-back-info">Back</button></a>
                <button type="button" class="btn btn-success btn-2" id="save_info" name="btn-save-info">Save</button>
            </div>
        </div>
        <div class="form-grids row widget-shadow">
            <div>
                <div class="form-body">
                    <div class="row">
                        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
                            <label class="form-control label-info">Tên</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input type="text" class="form-control" id="userName" value="" maxlength="20"/>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
                            <label class="form-control label-info">Password</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input type="text" class="form-control" id="password" value="" maxlength="20"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
                            <label class="form-control label-info">Nhập lại Password</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input type="text" class="form-control" id="repassword" value="" maxlength="20"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
                            <label class="form-control label-info">Role</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <select class="form-control" id="role">
                                <option value="2"></option>
                                <option value="0">Administrator</option>
                            </select>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


