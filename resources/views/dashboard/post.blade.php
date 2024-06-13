@extends('layout.main')


@section('container')


<div class="komen" style="">
    
    @foreach ($post as $item)
    <div style="display:flex;align-items:center;" class="komen-body">
      <img style="max-width:20px;border-radius:50%;margin-right:10px;" src="https://divedigital.id/wp-content/uploads/2021/10/1-min.png" alt="">
      <p  style="color: white;margin:0px;font-size:14px">{{ $item->nama }}</p>
    </div>
    <img style="max-width: 400px;margin-top:5px;margin-bottom:5px" src="{{ asset('storage/' . $item->image) }}" alt="">
    <p style="color: white">{{ $item->body }}</h4>
    @endforeach
  </div>

  {{ $post->links() }}

@endsection