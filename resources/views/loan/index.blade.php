@extends('layouts.main')
@section('content')

<div class="card-body">
              <h5 class="card-title text-center">Nasiyalar</h5>
              <!-- <p><code>Barcha mahsulotlar shu yerda ko'rinadi</code></p> -->
              <!-- Primary Color Bordered Table -->
              <table class="table table-bordered border-dark">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Kimga Berilgan</th>
                    <th scope="col">Qancha Qoldi</th>
                    <th scope="col">Qancha Berdi</th>
                    <th scope="col">Berilgandagi kurs narxi</th>
                    <th scope="col">Qarz berilgan sana</th>
                    <th scope="col">Amallar</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($loans as $data)
                  <tr>
                    <th scope="row">{{ (($loans->currentpage()-1)*$loans->perpage()+($loop->index+1)) }}</th>
                    <td><a href="{{route('loans.show',['loan'=>$data->kimga])}}">{{$data->kimga}}</a></td>
                    <td>{{$data->qancha-$data->qancha_olindi}} {{$data->pul_birligi}}</td>
                    <td>{{$data->qancha_olindi}} {{$data->pul_birligi}}</td>
                    <td>$1 = {{$data->d_qiymati}} UZS</td>
                    <td>{{$data->sana}}</td>
                    <td>
                      <form action="{{ route('loans.destroy',['loan' => $data->id]) }}" method="post">
                      <a href="{{ route('loans.edit',['loan' => $data->id]) }}" class="btn btn-success"><i class="bi bi-pen"></i></a>

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
              {{$loans->links()}}
</div>

@endsection