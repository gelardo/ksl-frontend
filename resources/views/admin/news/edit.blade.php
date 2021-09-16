@extends('admin.layout.layout')

@section('content')

    <div class="row">
        <div class="col-md-6">
            <form id="RegisterValidation" enctype="multipart/form-data" action="{{url('admin/news/update',$entry_to_respond->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="card ">
                    @include('admin.layout.message')
                    <div class="card-header ">
                        <h4 class="card-title">Update News Information</h4>
                    </div>
                    <div class="card-body ">
                        <div class="row col-md-12">
                            <div class="col-12">
                                <div class="form-group has-label">
                                    <label>
                                        Title
                                        *
                                    </label>
                                    <input class="form-control" name="title" placeholder="Enter Your News Title" value="{{$entry_to_respond->title}}"  type="text" required="true" />
                                </div>
                                <div class="form-group has-label">
                                    <label>
                                        Description
                                    </label>
                                    <textarea class="form-control " name="description" type="date" required="true" placeholder="Enter Your Description">{{ $entry_to_respond->description }}</textarea>
                                </div>

                                <div class="form-group has-label">
                                    <label>
                                        Image
                                        *
                                    </label>
                                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                    <span class="btn btn-rose btn-round btn-file">
                                      <span class="fileinput-new">Select File</span>
                                      <input type="file" name="image">
                                    </span>
                                        <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists"
                                           data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection

