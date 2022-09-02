@extends('layouts.main')
@section('content')

<div class="card-body">
              <h5 class="card-title">O'tkazmalar hisob kitobi</h5>
              <!-- <p><code>Barcha mahsulotlar shu yerda ko'rinadi</code></p> -->
              <!-- Primary Color Bordered Table -->
              <table class="table table-bordered border-dark">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Kimga yuborilgan</th>
                    <th scope="col">Hisob Raqami</th>
                    <th scope="col">Kimdan Yuborilgan</th>
                    <th scope="col">Qancha Yuborilgan</th>
                    <th scope="col">Yuborilgandagi kurs narxi</th>
                    <th scope="col">Yuborilgan sana</th>
                    <th scope="col">Qo'shimcha</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($account as $data)
                  <tr>
                    <th scope="row">{{ (($account->currentpage()-1)*$account->perpage()+($loop->index+1)) }}</th>
                    <td><a href="{{route('accounts.show',['account'=>$data->kimga])}}">{{$data->kimga}}</a></td>
                    <td>{{$data->hisob_raqam}}</td>
                    <td>{{$data->kimdan}}</td>
                    <?
                    if ($data->pul_birligi=="so'm") {
                      
                      echo "<td>".$data->pul_miqdori/$data->d_qiymati." $"."</td>";
                      
                    }
                    else{
                      echo "<td>".$data->pul_miqdori*$data->d_qiymati." so'm"."</td>";
                    }
                    ?>
                    <td>$1 = {{$data->d_qiymati}} UZS</td>
                    <td>{{$data->sana}}</td>
                    <td>
                      <form action="{{ route('accounts.destroy',['account' => $data->id]) }}" method="post">
                      <a href="{{ route('accounts.edit',['account' => $data->id]) }}" class="btn btn-success"><i class="bi bi-pencil"></i></a>
                      @method('DELETE')  
                      @csrf
                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <!-- End Primary Color Bordered Table -->
              {{$account->links()}}
                </tbody>
              </table>
              <!-- End Primary Color Bordered Table -->

</div>

@endsection