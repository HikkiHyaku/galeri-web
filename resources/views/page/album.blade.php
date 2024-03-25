@extends('layout.app')

@section('content')
<br>

<button class="btn btn-sm btn-success"  data-toggle="modal" data-target="#exampleModal" style="
margin-left:20%;
">New Albums</button>
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
      <form action="/album/new" method="post">
        @csrf
        @method('post')
        
  <div class="form-group">
    <label for="exampleInputEmail1">Album Name</label>
    <input type="text" name="album_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Album Descriptions</label>
    <input type="text" name="desc" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
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
@foreach ($data as $d)
   <br>
<a href="/detail/album/{{$d->id}}" class="card" style="width: 18rem;margin-left:25px;">
  <img class="card-img-top" src="https://i.pinimg.com/564x/b6/a0/5d/b6a05dd0ce405412ef5efa4be1d3d657.jpg" alt="Card image cap">
  <div class="card-body">
    <h6><strong>{{$d->album_name}}</strong></h6>
    <p class="card-text">{{$d->desc}}.</p>
  </div>
</a> 
@endforeach


</div>


@endsection
