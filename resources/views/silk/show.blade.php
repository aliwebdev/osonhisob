@extends('layouts.main')
@section('content')

<div class="card-body">
              <!-- <p><code>Barcha mahsulotlar shu yerda ko'rinadi</code></p> -->
              <!-- Primary Color Bordered Table -->
              <table class="table table-bordered border-dark">
                <thead>
                  <tr  align="center">
                    <th scope="col">Kimdan olindi</th>
                    <th scope="col">Asl Narxi</th>
                    <th scope="col">Berilgan Summa</th>
                    <th scope="col">Qolgan Summa</th>
                    <th scope="col">Olingandagi kurs miqdori</th>
                    <th scope="col">Mahsulot Miqdori</th>
                    <th scope="col">Olingan sana</th>
                  </tr>
                </thead>
                <tbody align="center">
                <?
                    $i=0;
                    $c=0;
                    $b=0;
                  ?>
                  @foreach ($silk as $data)
                      <?
                    $i = $i + $data->berilgan_summa;
                    $c = $c + $data->m_narxi - $data->berilgan_summa;
                    $b= $b + $data->berilgan_summa-$data->m_narxi;
                  ?> 
                  @endforeach
                  <h3 class="card-title">Qancha Berildi: <?echo number_format($i)?><small> {{$data->birligi}}</small></h3>
                  <?
                     if ($c<0) {
                    echo  "<h3 class='card-title'>Sizning Qarzingiz: 0 <small>$data->birligi</small></h3>";
                     }
                     else{
                    echo  "<h3 class='card-title'>Sizning Qarzingiz: ".number_format($c)."<small>$data->birligi</small></h3>";
                     }
                  ?>
                  <?
                    if ($data->berilgan_summa>$data->m_narxi) {
                      echo "<h3 class='card-title'>Zavodning qarzi: ".number_format($b)."<small> $data->birligi</small></h3>";
                    }
                  ?>
                  @foreach ($silk as $data)
                  <tr>
                    <td>{{$data->olindi}}</td>
                    <td><mark style="font-weight: 700; color:blue"><?echo number_format($data->m_narxi);?></mark></td>
                    <td><mark style="font-weight: 700; color:blue"><?echo number_format($data->berilgan_summa);?></mark></td>
                    <td><mark style="font-weight: 700; color:blue"><?echo number_format($data->m_narxi-$data->berilgan_summa);?></mark></td>
                    <td>$1 = {{$data->d_qiymati}} UZS</td>
                    <td>{{$data->qancha_miqdor}} {{$data->miqdor_birlig}}</td>
                    <td>{{$data->o_sana}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>

</div>
@endsection