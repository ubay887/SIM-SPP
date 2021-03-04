@extends('layouts.master', ['title' => 'Create Data Jurusan'])

@section('content')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Create Data Jurusan</h4>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Jurusan</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="contoh2">Program Keahlian</label>
                            <input type="text" class="form-control">
                        </div>
                            <div class="form-group col-md-6">
                            <label for="contoh2">Kompetensi Keahlian</label>
                            <input type="text" class="form-control">
                        </div>
                     <div class="form-group col-md-6">
                        <div class="card-footer">
                        <button class="btn btn-primary" type="submit">submit</button>
                        <a href={{ url('jurusan') }} class="btn btn-danger" type="reset">Back</a>
                         </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection