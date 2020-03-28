@extends('home')

@section('content')

<div class="container mt-5"><div class="row">
              @php
                $no = 0;
                @endphp
                @foreach ($data as $datas)
                @php
                    $no++;
                    @endphp

            <div class="col-sm-3">
              <div class="card mb-3 shadow-lg border-primary">
                  <div class="card-header">
                    {{ $datas['attributes']['Provinsi'] }}
                  </div>
                  <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Positif : {{ $datas['attributes']['Kasus_Posi'] }}</li>
                        <li class="list-group-item">Meninggal : {{ $datas['attributes']['Kasus_Meni'] }}</li>
                        <li class="list-group-item">Sembuh : {{ $datas['attributes']['Kasus_Semb'] }}</li>
                      </ul>
                  </div>
                </div>
            </div>
            @endforeach
          </div>
</div>

@endsection
