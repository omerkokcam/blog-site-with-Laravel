@extends('cms.main')
@section('content')

<div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>News <small>Add</small></h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <form class="form-horizontal form-label-left" action="{{route('cms.news.create_post')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <h2>New Image</h2>
                            <div class="col-sm-12">
                                <input type="file"   name="image" class="btn btn-default btn-sm" title="Upload New Image">
                            </div>
                        </div>
                        <div class="form-group">
                            <h2>New Title</h2>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="title" name="title" placeholder="New Title">
                            </div>
                        </div>
                        <div class="form-group">
                            <h2>New Content</h2>
                            <div class="col-sm-12">
                                <textarea id="summernote" class="summernote" name="content"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{asset('cms/vendors/summernote-editor/summernote.js')}}">

    </script>
    <script>    $(document).ready(function(){

            $('#summernote').summernote();
        });


        </script>


@endsection

@section('styles')
    <link href="{{asset('cms/vendors/summernote-editor/summernote.css')}}" rel="stylesheet" type="text/css">

@endsection
