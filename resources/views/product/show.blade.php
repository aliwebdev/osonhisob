@extends('layouts.main')
@section('content')
<style>
  
  h5{
    visibility: hidden;
  }
  #chiqar{
    visibility: hidden;
  }
  @media print{
    a{
      visibility: hidden;
    }
    button{
      visibility: hidden;
    }
    i{
      visibility: hidden;
    }
    h5{
      visibility: visible;
      display: all;
    }
    #chiqar{
      visibility: visible;
      display: all;
    }  
    #chiqarma{
      visibility: hidden;
    }
  }
</style>
<div class="card-body">
              <h4 class="card-title text-center">Mahsulotlar Qog'ozi</h4>
              <!-- <p><code>Barcha mahsulotlar shu yerda ko'rinadi</code></p> -->

            <table class="table table-bordered border-dark" id="chiqarma">
                <thead>
                  <tr align="center">
                    <th scope="col">Mahsulot Nomi</th>
                    <th scope="col">Mahsulot Turi</th>
                    <th scope="col">Qolgan Soni</th>
                    <th scope="col">Sotilgan Soni</th>
                  </tr>
                </thead>
                <tbody>
                  <?
                  $i=0;
                  foreach ($products as $key) {
                    $i = $i+$key->m_soni;
                  }
                  ?>
              <h2 class="card-title">Jami soni: <?echo $i?> dona</h2>
                @foreach ($products as $data)
                  <tr align="center">
                    <td>{{$data->m_nomi}}</td>
                    <td>{{$data->m_turi}}</td>
                    <td>{{$data->m_soni-$data->sotilgan_soni}} dona</td>
                    <td>{{$data->sotilgan_soni}} dona</td>
                  </tr>
                  @endforeach
                </tbody>
            </table>

            <center>
                <button onclick="print()" class="btn btn-success"><i class="bi bi-printer"></i></button>
                <a href="{{route('products.index')}}" class="btn btn-danger"><i class="bi bi-mouse"></i></a>
              </center> 
            <table class="table table-bordered border-dark" id="chiqar">
                <thead>
                  <tr align="center">
                    <th scope="col">Firma Egasinig Ismi</th>
                    <th scope="col">Qabul qiluvchinig Ismi</th>
                    <th scope="col">Berilgan Summa</th>
                    <th scope="col">Eski Qrazdorlik</th>
                    <th scope="col">Qolgan qarzdorlik</th>
                  </tr>
                </thead>
                <tbody align="center">
                  <td>_________________________</td>
                  <td>_________________________</td>
                  <td>_________________________</td>
                  <td>_________________________</td>
                  <td>__________________________</td>
                </tbody>
            </table>
            <div class="row">
              <h5 class="card-title text-center">Qo'shimcha malumotlar</h5>
              <div class="col">
                 <h5 class="card-title text-center">Tel Raqam: </h5>
              </div>
              <div class="col">
                <h5 class="card-title text-center">Rangi: </h5>
              </div>
              <div class="col">
                 <h5 class="card-title text-center">Kilogram: </h5>
              </div>
              <div class="col">
                <h5 class="card-title text-center">Narxi: </h5>
              </div>
            </div>

            <div class="row">
              <div class="col">
                 <h5 class="card-title text-center">Firma egasining Imzosi: ______</h5>
              </div>
              <div class="col">
                <h5 class="card-title text-center">Haydovchi Imzosi: ______</h5>
              </div>
            </div>
</div>
@endsection