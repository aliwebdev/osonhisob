@extends('layouts.main')
@section('content')

<div class="card-body">
              <h5 class="card-title">Filter bo'yicha hisobot</h5>
              <!-- <p><code>Barcha mahsulotlar shu yerda ko'rinadi</code></p> -->
              <!-- Primary Color Bordered Table -->
              <table class="table table-bordered border-dark">
                <thead>
                  <tr>
                    <th scope="col">Ism</th>
                    <th scope="col">Hisob raqam</th>
                    <th scope="col">Kimdan o'tkazildi</th>
                    <th scope="col">Qancha o'tkazildi</th>
                    <th scope="col">Olingandagi kurs miqdori</th>
                    <th scope="col">Olingan sana</th>
                  </tr>
                </thead>
                
                <tbody>
                <?
                    $i=0;
                  ?>
                  @foreach ($account as $dat)
                      <?
                    $i = $i + $dat->pul_miqdori;
                  ?> 
                  @endforeach
                  <?
                      echo '<h3 class="card-title">'.'<mark>'.$dat->kimga."ga o'tkazilgan jami summa: ".'</mark>'.number_format($i*$dat->d_qiymati)." so'm".'</h3>';
                  ?>
                @foreach ($account as $data)
                  <tr>
                    <td>{{$data->kimga}}</td>
                    <td>{{$data->hisob_raqam}}</td>
                    <td>{{$data->kimdan}}</td>
                    <td><?echo number_format($data->pul_miqdori);?> {{$data->pul_birligi}}</td>
                    <td>$1 = <?echo number_format($data->d_qiymati);?> UZS</td>
                    <td>{{$data->sana}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>

</div>
@endsection