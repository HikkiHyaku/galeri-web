@extends('layout.app')

@section('content')
<br>
@if ($errors->any())
<div  style="
margin-left:20%;
">
@foreach($errors->all() as $e)
{{$e}}
@endforeach
</div>
@endif
<button class="btn btn-sm btn-success"  data-toggle="modal" data-target="#exampleModal" style="
margin-left:20%;
">New Photo </button>
<br><br>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="/photo/new" method="post" enctype="multipart/form-data">
        @csrf
        @method('post')
        <input  name="albumsid" type="hidden" value="{{$data->id}}">
  <div class="form-group">
    <div class="mb-3">
      <label for="formFile" class="form-label">Image</label>
      <input class="form-control" name="image" type="file" id="formFile">
    </div>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Photo Descriptions</label>
    <input type="text" name="description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="row" style="
width:70%;
margin-left:20%;
">
@foreach ($data->albumPhoto as $d)
   <br>
<div  class="card" style="width: 18rem;margin-left:25px;">
  <img class="card-img-top" src="{{asset('storage/'.$d->image)}}" alt="Card image cap">
  <div class="card-body">
    {{-- <h6><strong>{{$d->}}</strong></h6> --}}
    <p class="card-text">{{$d->description}}.</p>
  </div>
</div> 
@endforeach

</div>


@endsection
