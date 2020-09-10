@if($errors->any())
<ul>
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            <li> {{ $error }} </li> 
        </div>
    @endforeach
</ul>
@endif