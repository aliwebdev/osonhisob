@extends('layouts.main')
@section('content')

<div class="card-body">
              <h5 class="card-title text-center">Nasiyalar bo'yicha filter</h5>
              <!-- <p><code>Barcha mahsulotlar shu yerda ko'rinadi</code></p> -->
              <!-- Primary Color Bordered Table -->
              <table class="table table-bordered border-dark">
                <thead>
                  <tr>
                    <th scope="col">Kimga Berilgan</th>
                    <th scope="col">Qancha Qoldi</th>
                    <th scope="col">Qancha Berdi</th>
                    <th scope="col">Berilgandagi kurs narxi</th>
                    <th scope="col">Qarz berilgan sana</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($loans as $data)
                  <tr>
                    <td>{{$data->kimga}}</td>
                    <td>{{$data->qancha-$data->qancha_olindi}} {{$data->pul_birligi}}</td>
                    <td>{{$data->qancha_olindi}} {{$data->pul_birligi}}</td>
                    <td>$1 = {{$data->d_qiymati}} UZS</td>
                    <td>{{$data->sana}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
</div>

@endsection