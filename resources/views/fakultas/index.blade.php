@extends('main')

@section('title', 'Fakultas')

@section('content')
    <a href="{{ route('fakultas.create') }}" class="btn btn-primary mb-3">Tambah Fakultas</a>
    <table class="table table-bordered table-hover">
        <tr>
            <th>Nama Fakultas</th>
            <th>Singkatan</th>
            <th>Dekan</th>
            <th>Aksi</th>
        </tr>

        @foreach ($result as $item)
            <tr>
                <td>{{ $item->nama_fakultas }}</td>
                <td>{{ $item->singkatan }}</td>
                <td>{{ $item->dekan }}</td>

                <form method="POST" action="{{ route('mahasiswa.destroy', $item->id) }}">
                    @csrf
                    <input name="_method" type="hidden" value="DELETE">
                    <button type="submit" class="btn btn-xs btn-danger btn-rounded show_confirm" data-toggle="tooltip"
                        title='Delete' data-nama='{{ $item->nama }}'>Hapus</button>
                </form>
            </tr>
        @endforeach

    </table>
@endsection
