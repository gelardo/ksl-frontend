@extends('admin.layout.layout')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                @include('admin.layout.message')
                <div class="card-header d-flex justify-content-between">
                    <h4 class="card-title">News List</h4>
                    <a href="{{url('admin/news/create')}}" class="btn btn-instagram float-right">Add New</a>
                </div>
                <div class="card-body">
                    <div class="toolbar">

                    </div>
                    <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>News Info</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th class="disabled-sorting text-right">Actions</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>News Title</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th class="disabled-sorting text-right">Actions</th>
                        </tr>
                        </tfoot>
                        <tbody>
                         @foreach($all as $r)
                        <tr>

                            <td>
                                {{$r->title}}
                            </td>
                            <td><img src="{{url($r->image)}}" alt=""></td>
                            <td>{{$r->description}}</td>
                            <td class="text-right">
                                <a href="{{url('admin/news/edit',$r->id)}}" class="btn btn-warning btn-link btn-icon btn-sm "><i class="fa fa-edit"></i></a>
                                <form action="{{url('admin/news/delete/'.$r->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-link btn-icon btn-sm">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                         @endforeach

                        </tbody>
                    </table>
                </div><!-- end content-->
            </div><!--  end card  -->
        </div> <!-- end col-md-12 -->
    </div>
@endsection
