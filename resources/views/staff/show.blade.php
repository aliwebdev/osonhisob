@extends('layouts.main')
@section('content')

<div class="card-body">
              <h5 class="card-title text-center">Hodimlar hisob kitobi</h5>
              <!-- <p><code>Barcha mahsulotlar shu yerda ko'rinadi</code></p> -->
              <!-- Primary Color Bordered Table -->
              <table class="table table-bordered border-dark">
                <thead>
                  <tr align="center">
                    <th scope="col">Hodim ismi</th>
                    <th scope="col">Ish Turi</th>
                    <th scope="col">Oyligi</th>
                    <th scope="col">Avans</th>
                    <th scope="col">Qilgan ishi(turi)</th>
                    <th scope="col">Qilgan ishi(dona)</th>
                    <th scope="col">Qilgan ishi(summasi)</th>
                  </tr>
                </thead>
                <a href="{{route('hisob.index')}}" class="btn btn-danger mb-3" style="margin-left: 880px;">Orqaga</a>
                <tbody>
                @foreach ($staff as $data)
                  <tr align="center">
                    <td><a href="{{route('staff.show',['staff'=>$data->hodim_ismi])}}">{{$data->hodim_ismi}}</a></td>
                    <td>{{$data->ish_turi}}</td>
                    <td><?echo number_format($data->oyligi)?> so'm</td>
                    <td><?echo number_format($data->avans)?> so'm</td>
                    <td>{{$data->qilgan_ish_turi}}</td>
                    <td><?echo number_format($data->qilgan_ish_dona)?> dona</td>
                    <td><?echo number_format($data->qilgan_ish_summa)?> so'm</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
</div>

@endsection