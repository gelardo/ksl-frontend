@if(Session::has('error_message'))
    <div class="alert alert-danger alert-dismissable fade show" role="alert" style="margin-top:10px;">
        {{Session::get('error_message')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
@endif

@if(Session::has('success'))
    <div class="alert alert-success alert-dismissable fade show" role="alert" style="margin-top:10px;">
        {{Session::get('success')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
@endif


@if($errors->any())
    <div class="alert alert-danger " style="margin-top:10px;">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </ul>
    </div>
@endif


