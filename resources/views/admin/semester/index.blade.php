@extends('layouts.master', ['title' => 'Data Semester'])

@section('style')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
@endsection

@section('content')

<section class="section">
    <div class="section-header">
        <h1>Data Semester</h1>
    </div>
</section>
<div class="row">
    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <div class="card-header-action">
                    <a href="{{ route('admin.semester.create') }}" class="btn btn-primary"
                        style="border-radius: 5px"><i class="fa fa-plus"></i> Tambah Data</a>
                </div>
            </div>
            <div class="card-body ">
                <div class="table-responsive">
                    <table class="table table-striped" id="myTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Semester</th>
                                <th>Tahun Ajaran</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($semesters as $semester)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $semester->semester }}</td>
                                <td>{{ $semester->tahun_ajaran }}</td>
                                <td>
                                    <form action="{{ route('admin.semester.destroy', $semester->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('admin.semester.edit', $semester->id) }}" class="btn btn-primary btn-action mr-1"><i class="fa fa-pencil-alt"></i></a>
                                        <button type="submit" onclick="return confirm('Anda Yakin ?')" class="btn btn-danger btn-action"><i class="fa fa-trash"></i></button> 
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="text-center"><h3>Data Kosong</h3></td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>   
    <script>
        $(document).ready( function () {
    $('#myTable').DataTable();
} );
        </script> 
@endsection
