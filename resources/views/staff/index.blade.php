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
                    <th scope="col">Hodim yoshi</th>
                    <th scope="col">Ish Turi</th>
                    <th scope="col">Oyligi</th>
                    <th scope="col">Ish vaqti</th>
                    <th scope="col">Amallar</th>
                  </tr>
                </thead>
                <a href="{{route('staff.create')}}" class="btn btn-primary mb-3" style="margin-left: 92%;">Qo'shish</a>
                <tbody>
                @foreach ($staff as $data)
                  <tr align="center">
                    <th scope="row">{{ (($staff->currentpage()-1)*$staff->perpage()+($loop->index+1)) }}</th>
                    <td>{{$data->hodim_ismi}}</td>
                    <td>{{$data->hodim_yoshi}} yosh</td>
                    <td>{{$data->ish_turi}}</td>
                    <td><?echo number_format($data->oyligi)?> so'm</td>
                    <td>{{$data->ish_vaqti}}</td>
                    <td>
                      <form action='{{ route("staff.destroy",["staff" => $data->id]) }}' method="post">
                      <a style="width: 40px;" href="{{ route('staff.edit',['staff' => $data->id]) }}" class="btn btn-success"><i class="bi bi-pen"></i></a>
                      @method('DELETE')  
                      @csrf
                        <button type="submit" style="width: 40px;" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <!-- End Primary Color Bordered Table -->
              {{$staff->links()}}
</div>

@endsection