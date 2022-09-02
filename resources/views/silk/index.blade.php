@extends('layouts.main')
@section('content')

<div class="card-body">
              <h5 class="card-title">Mahsulotlarning hisob kitobi</h5>
              <!-- <p><code>Barcha mahsulotlar shu yerda ko'rinadi</code></p> -->
              <!-- Primary Color Bordered Table -->
              <table class="table table-bordered border-dark">
                <thead>
                  <tr  align="center">
                    <th scope="col">#</th>
                    <th scope="col">Kimdan olindi</th>
                    <th scope="col">Asl Narxi</th>
                    <th scope="col">Berilgan Summa</th>
                    <th scope="col">Qolgan Summa</th>
                    <th scope="col">Olingandagi kurs miqdori</th>
                    <th scope="col">Mahsulot Miqdori</th>
                    <th scope="col">Olingan sana</th>
                    <th scope="col">Qo'shimcha</th>
                  </tr>
                </thead>
                <tbody align="center">
                  @foreach ($silk as $data)
                  <tr>
                    <th scope="row">{{ (($silk->currentpage()-1)*$silk->perpage()+($loop->index+1)) }}</th>
                    <td><a href="{{route('silk.show',['silk'=>$data->olindi])}}">{{$data->olindi}}</a></td>
                    <td><mark style="font-weight: 700; color:blue"><?echo number_format($data->m_narxi);?></mark></td>
                   <!-- <td><mark style="font-weight: 700; color:blue">{{$data->berilgan_summa}}</mark></td> -->
                    <?
                    if ($data->birligi=="Dollar") {
                      
                      echo "<td>".number_format($data->berilgan_summa*$data->d_qiymati)." so'm"."</td>";
                      
                    }
                    else{
                      echo "<td>".number_format($data->berilgan_summa)." USD"."</td>";
                    }
                    ?>
                    <td><mark style="font-weight: 700; color:blue"><?echo number_format($data->m_narxi-$data->berilgan_summa);?></mark></td>
                    <td>$1 = <?echo number_format($data->d_qiymati);?> UZS</td>
                    <td>{{$data->qancha_miqdor}} {{$data->miqdor_birlig}}</td>
                    <td>{{$data->o_sana}}</td>
                    <td>
                      <form action="{{ route('silk.destroy',['silk' => $data->id]) }}" method="post">
                      <a href="{{ route('silk.edit',['silk' => $data->id]) }}" style="width:40px;" class="btn btn-success"><i class="bi bi-pencil"></i></a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" style="width:40px;"><i class="bi bi-trash"></i></button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <!-- End Primary Color Bordered Table -->
              {{$silk->links()}}

</div>
@endsection