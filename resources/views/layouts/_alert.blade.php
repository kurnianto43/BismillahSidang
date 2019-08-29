<div class="box-body">
  @if(session('danger'))
  <div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h4><i class="icon fa fa-check"></i> Sukses</h4>
           {{ session('danger') }}
  </div>
@endif



@if(session('warning')) 
    <div class="alert alert-warning alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h4><i class="icon fa fa-check"></i> Sukses</h4>
            {{ session('warning') }}
    </div>
@endif



@if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Sukses!</strong> {{ session('success') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

</div>

