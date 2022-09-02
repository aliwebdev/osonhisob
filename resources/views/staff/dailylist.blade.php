@extends('layouts.main')
@section('content')

<div class="card-body">
              <h5 class="card-title text-center">Hodimlar</h5>
              <!-- <p><code>Barcha mahsulotlar shu yerda ko'rinadi</code></p> -->
              <!-- Primary Color Bordered Table -->
              <table class="table table-bordered border-dark">
                <thead>
                  <tr align="center">
                    <th scope="col">#</th>
                    <th scope="col">Hodim ismi</th>
                    <th scope="col">Yo'qlama</th>
                    <th scope="col">Amallar</th>
                  </tr>
                </thead>
                <a href="{{route('daily.create')}}" class="btn btn-primary mb-3" style="margin-left: 92%;">Qo'shish</a>
                <tbody>
                @foreach ($daily as $data)
                  @foreach ($data->dailys as $daily3)
                  <tr align="center">
                      <th scope="row"> {{ $count = (($daily->currentpage()-1)*$daily->perpage()+($loop->index+1)) }}  </th>
                      <td>{{$data->hodim_ismi}}</td>
                      <td>
                        {{$daily3->created_at}}
                        <br>
                        {!! $daily3->status == 1 ? "<h6 class='badge bg-success'>bor edi</h6>": "<h6 class='badge bg-danger'>kelmadi</h6>" !!}
                      </td>
                      <td>
                        <form action="{{ route('daily.destroy',['daily' => $daily3->id]) }}" method="post">
                        @method('DELETE')  
                        @csrf
                          <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                        </form>
                      </td>
                  </tr>     
                  @endforeach 
                @endforeach
                </tbody>
              </table>
              {{$daily->links()}}
</div>

@endsection