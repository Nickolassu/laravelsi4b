
@extends('layout.main')

@section('title','prodi')

@section('content')
<div class="row">
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Program Studi</h4>
                  <p class="card-description">
                    List data Program studi
                  </p>
                  @can('create',App\Prodi::class)
                  <a href="{{ route('prodi.create')}}" class="btn btn-primary">tambah</a>
                  @endcan
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Nama Program Studi</th>
                          <th>Singkatan</th>
                          <th>Nama Fakultas</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($prodi as $item)
                        <tr>
                            <td>{{$item["nama"]}}</td>
                            <td>{{$item["singkatan"]}}</td>
                            <td>{{$item["fakultas"]["nama"]}}</td>
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
