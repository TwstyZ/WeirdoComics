@if(Session::has($query))
<div class="alert alert-danger">
  {{ Session::get($query)}}
</div>
@endif