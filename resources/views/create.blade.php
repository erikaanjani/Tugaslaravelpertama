extends('layoutss.app')

@section('title, 'friends')

@@section('content')
<form action="/friends" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">nama</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="nama" aria-describedby="emailHelp">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">No Telpon</label>
    <input type="text" class="form-control" name="no_telp"id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Alamat</label>
    <input type="password" class="form-control" name="alamat" id="exampleInputPassword1">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>  


@endforeach
    
@endsection