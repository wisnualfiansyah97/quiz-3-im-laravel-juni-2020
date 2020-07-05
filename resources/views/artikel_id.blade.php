@extends('layout.master')

@section('content')
    <h3>Judul : {{$article->judul}}</h3>
    <h3>slug : {{$article->slug}}</h3>
    <p class="mt-2">{{$article->isi}}</p>

    <?php 
    // untuk merubah tag menjadi array
        $tag = preg_replace('/#/', "-",$article->tag);
        $button=explode(',',$tag);
    ?>
    <div>
    {{-- untuk menampilkan array tag sebagai button --}}
        @foreach ($button as $value)
            <a href="#" class="btn btn-sm btn-success mt-1">{{$value}}</a>
        @endforeach
    </div>
@endsection