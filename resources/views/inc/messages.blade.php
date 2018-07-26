@if(count($errors) > 0)
    @foreach($errors->all() as $error)
    <div class="alert alert-danger">
        {{$error}}
    </div>
    @endforeach
@endif

@if(session('success'))
    <div class="alert alert-success">
        <button class="close" type="button" data-dismiss="alert">
            <span aria-hidden="true">&times;</span>
        </button>
        <p class="text-small">{{session('success')}}</p>
    </div>
@endif

@if(session('info'))
    <div class="alert alert-info">
        <button class="close" type="button" data-dismiss="alert"><span aria-hidden="true">&times;</span>
        </button>
        <p class="text-small">{{session('success')}}</p>
    </div>
@endif

@if(session('warning'))
    <div class="alert alert-warning">
        <button class="close" type="button" data-dismiss="alert"><span aria-hidden="true">&times;</span>
        </button>
        <p class="text-small">{{ session('warning') }}</p>
    </div>
@endif


@if(session('danger'))
    <div class="alert alert-danger">
        <button class="close" type="button" data-dismiss="alert"><span aria-hidden="true">&times;</span>
        </button>
        <p class="text-small">{{ session('danger') }}</p>
    </div>
@endif
