@extends('layout.nav')
@section('isi')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <a href="{{ url('fhotel/create') }}" class="btn btn-danger btn-circle btn-lg mb-3">
                <i class="fas fa-plus"></i>
            </a>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Fasilitas</th>
                        <th>Keterangan</th>
                        <th>Foto</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($fhotel as $index => $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama_fasilitas }}</td>
                        <td>{{ $item->keterangan }}</td>
                        <td><img src="{{ asset('img/'.$item->foto) }}" alt="" style="width: 100px"></td>
                        <td>
                            <form action="{{ url('fhotel',$item->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-icon btn-danger delete" data-name="{{ $item->tipe_kamar }}"><i class="fas fa-trash"></i></button>
                            </form>
                            <a href="{{ url('fhotel/'.$item->id.'/edit') }}" class="btn btn-icon btn-warning mt-1"><i class="fas fa-pen"></i></a>
                            </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
        </div>
    </div>
</div>

@endsection