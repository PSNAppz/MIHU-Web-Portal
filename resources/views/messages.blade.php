@if (Session::has('success'))
<div class="alert alert-success" role="alert">
    <center><strong>Success:</strong>{{ Session::get('success')}}</center>
</div>
@endif
