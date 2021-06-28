@extends('base.baseAdmin')

@section('title', 'Edit home banner')

@section('link')
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}" rel="stylesheet"
        type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="{{ asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css') }}" rel="stylesheet"
        type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="{{ asset('assets/global/css/components.min.css') }}" rel="stylesheet" id="style_components"
        type="text/css" />
    <link href="{{ asset('assets/global/css/plugins.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="{{ asset('assets/pages/css/profile-2.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="{{ asset('assets/layouts/layout/css/layout.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/layouts/layout/css/themes/darkblue.min.css') }}" rel="stylesheet" type="text/css"
        id="style_color" />
    <link href="{{ asset('assets/layouts/layout/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="favicon.ico" />
@endsection

@section('content')
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            <!-- BEGIN PAGE BAR -->
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <a href="index.html">Home</a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <span>Home banner</span>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <span>Edit</span>
                    </li>
                </ul>
            </div>
            <!-- END PAGE BAR -->
            <!-- END PAGE HEADER-->
            <div class="row">
                <div class="col-md-12">
                    <div class="tabbable-line boxless tabbable-reversed">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_0">
                                <div class="portlet box green">
                                    <div class="portlet-body form">
                                        <!-- BEGIN FORM-->
                                        <form method="post" action="{{ route('homeBanner.update', $banner->id) }}"
                                            enctype="multipart/form-data" class="form-horizontal">
                                            @method('put')
                                            @csrf
                                            <input type="hidden" class="form-control input-circle" name="id"
                                                value="{{ $banner->id }}">
                                            <div class="portlet-body">
                                                <div class="tabbable-bordered">
                                                    <ul class="nav nav-tabs">
                                                        <li>
                                                            <a href="#tab_content" data-toggle="tab"> Title </a>
                                                        </li>
                                                        <li>
                                                            <a href="#tab_banner" data-toggle="tab"> Banner </a>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content">
                                                        <div class="tab-pane fade active in " id="tab_content">
                                                            <div class="form-group">
                                                                <label class="col-md-2 control-label">{{ __('Title') }}:
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-10">
                                                                    <input type="text" class="form-control" name="title"
                                                                        value="{{ $banner->title }}">
                                                                </div>
                                                                @error('title')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane" id="tab_banner">
                                                            <div class="form-group">
                                                                <div class="fileinput fileinput-new"
                                                                    data-provides="fileinput">
                                                                    <div class="fileinput-new thumbnail"
                                                                        style="width: 200px; height: 150px;">
                                                                        <img src="{{ asset($banner->banner_url) }}" />
                                                                    </div>
                                                                    <div class="fileinput-preview fileinput-exists thumbnail"
                                                                        style="max-width: 200px; max-height: 150px;"> </div>
                                                                    <div>
                                                                        <span class="btn default btn-file">
                                                                            <span class="fileinput-new">
                                                                                {{ __('Select image') }} </span>
                                                                            <span class="fileinput-exists">
                                                                                {{ __('Change') }} </span>
                                                                            <input type="file" name="banner"> </span>
                                                                        <a href="javascript:;"
                                                                            class="btn default fileinput-exists"
                                                                            data-dismiss="fileinput"> {{ __('Remove') }}
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                @error('banner')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <button type="submit" class="btn btn-circle green">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- END FORM-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END CONTENT BODY -->
    </div>
@endsection

@section('script')
    <!-- BEGIN CORE PLUGINS -->
    <script src="{{ asset('assets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/js.cookie.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('assets/global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript">
    </script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="{{ asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js') }}" type="text/javascript">
    </script>
    <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/gmaps/gmaps.min.js') }}" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL SCRIPTS -->
    <script src="{{ asset('assets/global/scripts/app.min.js') }}" type="text/javascript"></script>
    <!-- END THEME GLOBAL SCRIPTS -->
    <!-- BEGIN THEME LAYOUT SCRIPTS -->
    <script src="{{ asset('assets/layouts/layout/scripts/layout.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/layouts/layout/scripts/demo.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/layouts/global/scripts/quick-sidebar.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/layouts/global/scripts/quick-nav.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('placeTextarea');

    </script>
@endsection
