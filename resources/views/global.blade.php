@extends('home')

@section('content')


<div class="container mt-5">

          <div class="row">
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
                    {{ $datas['attributes']['Country_Region'] }}
                  </div>
                  <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Positif : {{ $datas['attributes']['Confirmed'] }}</li>
                        <li class="list-group-item">Meninggal : {{ $datas['attributes']['Deaths'] }}</li>
                        <li class="list-group-item">Sembuh : {{ $datas['attributes']['Recovered'] }}</li>
                        @php
                            $time = $datas['attributes']['Last_Update'] / 1000
                        @endphp
                        <li class="list-group-item">Update  : {{ date('d-M-Y H:i:s', $time)  }}</li>
                      </ul>
                  </div>
                </div>
            </div>
            @endforeach
          </div>
</div>



@endsection
