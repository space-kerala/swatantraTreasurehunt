@if(count($errors))
<div class="error_class" id="errorcontent">
<ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
</div>        
@endif

