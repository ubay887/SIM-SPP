@extends('layouts.master', ['title' => 'Edit Data Jurusan'])

@section('content')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Edit Data Jurusan</h4>
                <div class="card-header-action">
                   <a href={{ route('admin.jurusan.index') }} class="btn btn-danger"><i class="fa fa-arrow-left"></i>Back</a>
            </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.jurusan.update', $jurusan->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="contoh2">Jurusan</label>
                            <input type="text" name="jurusan" value="{{ $jurusan->jurusan }}" class="form-control" placeholder="Jurusan">
                            @error('jurusan')
                                <div class="invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="contoh2">Program Keahlian</label>
                            <input type="text" name="program_keahlian" value="{{ $jurusan->program_keahlian }}" class="form-control" placeholder="Program Keahlian">
                            @error('program_keahlian')
                                <div class="invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="contoh2">Kompetensi Keahlian</label>
                            <input type="text" name="kompetensi_keahlian" value="{{ $jurusan->kompetensi_keahlian }}" class="form-control" placeholder="Kompetensi Keahlian">
                            @error('kompetensi_keahlian')
                                <div class="invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                     <div class="form-group col-md-6" style="padding-top: 29px;">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> Update</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection