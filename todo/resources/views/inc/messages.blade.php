@if(count($error)>0)
@foreach($error->all() as $error)
<div class="alert-alert-dang">
    {{$error}}
        </div>

    @endforeach
    @endif
    @if((session('success')))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif


