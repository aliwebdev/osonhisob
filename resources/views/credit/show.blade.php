@extends('layouts.main')
@section('content')

<div class="card-body">
              <h5 class="card-title text-center">Filter bo'yicha qarzlar</h5>
              <!-- <p><code>Barcha mahsulotlar shu yerda ko'rinadi</code></p> -->
              <!-- Primary Color Bordered Table -->
              <table class="table table-bordered border-dark">
                <thead>
                  <tr>
                    <th scope="col">Kimdan Olindi</th>
                    <th scope="col">Qancha Qoldi</th>
                    <th scope="col">Qancha Berildi</th>
                    <th scope="col">Olingandagi kurs narxi</th>
                    <th scope="col">Qarz olingan sana</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($credits as $data)
                  <tr>
                    <td>{{$data->kimdan}}</td>
                    <td>{{$data->qancha-$data->qancha_berildi}} {{$data->pul_birligi}}</td>
                    <td>{{$data->qancha_berildi}} {{$data->pul_birligi}}</td>
                    <td>$1 = {{$data->d_qiymati}} UZS</td>
                    <td>{{$data->sana}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
</div>

@endsection