@extends('admin.layout.layout')

@section('content')

    <div class="row">
        <div class="col-md-8">
            <form id="RegisterValidation" action="{{url('admin/news/store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card ">
                    @include('admin.layout.message')
                    <div class="card-header ">
                        <h4 class="card-title">Add New News</h4>
                    </div>
                    <div class="card-body ">
                        <div class="row col-md-12">
                            <div class="col-12">
                                <div class="form-group has-label">
                                    <label>
                                        Title
                                        *
                                    </label>
                                    <input class="form-control" name="title" placeholder="Enter Your News Title" value="{{old('title')}}"  type="text" required="true" />
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Description
                                    </label>
                                    <textarea class="form-control tinymce-editor" name="description" value="{{old('description')}}" rows="3" cols="10" type="date" required="true" placeholder="Enter Your Description"></textarea>
                                </div>

                                <div class="form-group has-label">
                                    <label>
                                       Image
                                        *
                                    </label>
                                    <span class="btn btn-rose btn-round btn-file">
                                      <span class="fileinput-new">Select File</span>
                                                                      <input class="form-control" name="image" type="file"  required="true" />
                                                                            </span>


                                    {{--                                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">--}}
{{--                                    <span class="btn btn-rose btn-round btn-file">--}}
{{--                                      <span class="fileinput-new">Select File</span>--}}
{{--                                      <input type="file" name="image">--}}
{{--                                    </span>--}}
{{--                                        <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists"--}}
{{--                                           data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>--}}
{{--                                    </div>--}}

                                </div>
                            </div>

                        </div>



                    </div>

                    <div class="card-footer text-right">

                        <button type="submit" class="btn btn-primary">Create New</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


@endsection

