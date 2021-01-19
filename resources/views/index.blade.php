extends('layoutss.app')

@section('title, 'friends')

@@section('content')

@foreach ($friends as $friend)

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{ $friend['nama'] }}</h5>
    <h6 class="card-subtitle mb-2 text-muted">C{{ $friend['no_telp'] }}</h6>
    <p class="card-text">{{ $friend['alamat'] }}-
    <a href="#" class="card-link btn primary">Tambah teman</a>
    <a href="#" class="card-link btn warning">Edit teman</a>
    <a href="#" class="card-link btn-danger">Delete teman</a>
  </div>
</div>
   
@endforeach
<div>
    {{$friends->links() }}
</div>
@endsection