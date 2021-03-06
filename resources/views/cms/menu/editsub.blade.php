@extends('cms.main')
@section('content')

    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Submenu <small>Edit</small></h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <form class="form-horizontal form-label-left" action="{{route('cms.menu.editsub_post',$submenu->id)}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <h2>Menu Name</h2>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <select name="menu_id" class="form-control">
                                     @foreach($menu as $menu)
                                    <option value="{{$menu->id}}">{{$menu->title}}</option>
                                     @endforeach

                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <h2>Menu Title</h2>
                            <div class="col-sm-12">
                                <input  id="title" name="title" type="text" class="form-control" value="{{$submenu->title}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <h2>Menu Content</h2>
                            <div class="col-sm-12">
                                <textarea id="summernote" name="content" class="summernote">{!! $submenu->content !!}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <h2>Menu Order</h2>
                            <div class="col-sm-12">
                                <input type="number" name="order" id="order" class="form-control" value="{{$submenu->order}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-success">Save</button>
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
