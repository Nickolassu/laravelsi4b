@extends('layout.main')

@section('title','Prodi')

@section('content')
<h1>program studi</h1>
<ul>
@foreach ($viewlist as $item)
    <li>{{$item}}</li>
@endforeach
</ul>

<h1>mahasiswa</h1>
<ul>
@foreach ($viewmhs as $item)
    <li>{{$item ["npm"] }} - {{$item ["nama"] }}</li>
@endforeach
</ul>
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Program Studi</h4>
                  <p class="card-description">
                    List data Program studi
                  </p>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Nama Program Studi</th>
                          <th>Singkatan</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($fakultas as $item)
                        <tr>
                            @foreach ($viewlist as $item)
                            <th>{{$item}}</th>
                            @endforeach
                            </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
@endsection
