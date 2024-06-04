@extends('layout.main')

@section('title','Mahasiswa')

@section('content')
<div class="row">
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Mahasiswa</h4>
                  <p class="card-description">
                    List data Mahasiswa 
                  </p>
                  <a href="{{ route('mahasiswa.create')}}" class="btn btn-primary">tambah</a>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>NPM</th>
                          <th>Nama</th>
                          <th>Tempat Lahir</th>
                          <th>Tanggal Lahir</th>
                          <th>Alamat</th>
                          <th>Prodi ID</th>
                          <th>URL Foto</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($mahasiswa as $item)
                        <tr>
                            <td>{{$item["npm"]}}</td>
                            <td>{{$item["nama"]}}</td>
                            <td>{{$item["tempat_lahir"]}}</td>
                            <td>{{$item["tanggal_lahir"]}}</td>
                            <td>{{$item["alamat"]}}</td>
                            <td>{{$item["prodi"]["nama"]}}</td>
                            <td>{{$item["url_foto"]}}</td>
                            </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
</div>
@endsection