@extends('layout.master')

@section('content')
    <div class="ml-5 col-sm-12">
        <h2 class="display-3 text-center">List Artikel</h2><br>
    </div>
    <a href="/artikel/create" class="btn btn-success"><i class="fas fa-plus"></i>&nbsp;&nbsp;Buat Artikel</a>

    <table class="table table-striped table-hover mt-3">
        <tr>
            <th class="text-center">Judul</th>
            <th class="text-center">Action</th>
        </tr>
        @foreach ($article as $article)
            <tr>
                <td class="text-center">{{$article->judul}}</td>
                <td class="text-center">
                    <a href="/artikel/{{$article->id}}" class="btn btn-sm btn-info mr-2"><i class="fas fa-search "></i>&nbsp;&nbsp;Detail</a>
                    <a href="/artikel/{{$article->id}}/edit" class="btn btn-sm btn-warning ml-2 mr-2"><i class="fas fa-edit "></i>&nbsp;&nbsp;Edit</a>
                   
                    <form action="/artikel/{{$article->id}}" method="post" style="display:inline;">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-sm btn-danger ml-2 mr-2"><i class="fas fa-trash"></i>&nbsp;&nbsp;Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    <div class="mt-5 text-primary">
        <p>Note: table article adalah foreign key dari tabel user, agar berjalan setidaknya harus ada data pada tabel user</p>
    </div>
@endsection

@push('scripts')
<script>
        Swal.fire({
            title: 'Berhasil!',
            text: 'Memasangkan script sweet alert',
            icon: 'success',
            confirmButtonText: 'Cool'
        })
    </script>
@endpush