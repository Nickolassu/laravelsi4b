@extends('layout.main')

@section('title','Tambah Prodi')

@section('content')
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">tambah Progaram Studi</h4>
                  <p class="card-description">
                    Formulir tambah Prodi
                  </p>
                  <form method="POST"action="{{route('prodi.store')}}" class="forms-sample">
                    @csrf
                    <div class="form-group">
                      <label for="nama">Nama Program Studi</label>
                      <input type="text" class="form-control" name="nama" value="{{old('nama')}}" placeholder="Nama Prodi">
                      @error('nama')
                            <span class="text-danger"> {{$message}} </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="singkatan">Singkatan</label>
                      <input type="text" class="form-control" name="singkatan" value="{{old('singkatan')}}" placeholder="SI, IF, ....">
                    </div>

                    <div class="form-group">
                      <label for="fakultas_id">Fakultas</label>
                      <select name="fakultas_id"
                      class="form-control">
                            @foreach($fakultas as $item)
                                <option value="{{ $item['id']}}">
                                    {{ $item['nama']}}
                                </option>
                            @endforeach
                      </select>
                    <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                    <a href="{{ url('fakultas')}}" class="btn btn-light">Batal</button>
                  </form>
                </div>
              </div>
            </div>
</div>
@if (session('success'))
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
      Swal.fire({
          title: "Good job!",
          text: "{{ session('Success') }}",
          icon: "success"
      });
    </script>
@endif
@endsection