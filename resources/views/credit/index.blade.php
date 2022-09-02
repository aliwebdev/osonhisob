@extends('layouts.main')
@section('content')

<div class="card-body">
              <h5 class="card-title text-center">Qarzlar</h5>
              <!-- <p><code>Barcha mahsulotlar shu yerda ko'rinadi</code></p> -->
              <!-- Primary Color Bordered Table -->
              <table class="table table-bordered border-dark">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Kimdan Olindi</th>
                    <th scope="col">Qancha Qoldi</th>
                    <th scope="col">Qancha Berildi</th>
                    <th scope="col">Olingandagi kurs narxi</th>
                    <th scope="col">Qarz olingan sana</th>
                    <th scope="col">Amallar</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($credits as $data)
                  <tr>
                    <th scope="row">{{ (($credits->currentpage()-1)*$credits->perpage()+($loop->index+1)) }}</th>
                    <td><a href="{{route('credits.show',['credit'=>$data->kimdan])}}">{{$data->kimdan}}</a></td>
                    <td>{{$data->qancha-$data->qancha_berildi}} {{$data->pul_birligi}}</td>
                    <td>{{$data->qancha_berildi}} {{$data->pul_birligi}}</td>
                    <td>$1 = {{$data->d_qiymati}} UZS</td>
                    <td>{{$data->sana}}</td>
                    <td>
                      <form action="{{ route('credits.destroy',['credit' => $data->id]) }}" method="post">
                      <a href="{{ route('credits.edit',['credit' => $data->id]) }}" class="btn btn-success"><i class="bi bi-pen"></i></a>
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
              {{$credits->links()}}
</div>

@endsection