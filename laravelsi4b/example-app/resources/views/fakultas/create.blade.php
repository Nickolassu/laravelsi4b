@extends('layout.main')

@section('title','Tambah Fakultas')

@section('content')
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">tambah Fakultas</h4>
                  <p class="card-description">
                    Formulir tambah fakultas
                  </p>
                  <form method="POST"action="{{route('fakultas.store')}}" class="forms-sample">
                    @csrf
                    <div class="form-group">
                      <label for="nama">Nama</label>
                      <input type="text" class="form-control" name="nama" value="{{old('nama')}}" placeholder="Nama Fakultas">
                      @error('nama')
                            <span class="text-danger"> {{$message}} </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="singkatan">Singkatan</label>
                      <input type="text" class="form-control" name="singkatan" value="{{old('singkatan')}}" placeholder="FIKR,FEB,...">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">SImpan</button>
                    <a href="{{ url('fakultas')}}" class="btn btn-light">Batal</button>
                  </form>
                </div>
              </div>
            </div>
</div>
@endsection
