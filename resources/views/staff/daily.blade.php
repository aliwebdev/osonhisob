@extends('layouts.main')
@section('content')

<style>
  i{
    font-size: 15px;
  }
</style>
<div class="card-body">
              <h5 class="card-title text-center">Hodimlar Yo'qlamasi</h5>
              <form action="/dailyinsert" method="post">
                @csrf
    </div>
    <a href="{{route('daily.index')}}" class="btn btn-sm btn-info mb-3">Hisobot</a>

      <table class="table table-bordered border-dark">
                <thead align="center">
                    <th scope="col">T/r</th>
                    <th scope="col">Hodim ismi</th>
                    <th scope="col" id="day1"></th>
                  </tr>
                </thead>
                <tbody align="center">
                      @foreach ($daily2 as $data)
                      <tr>
                        <td>{{ (($daily2->currentpage()-1)*$daily2->perpage()+($loop->index+1)) }}</td>
                        <td><b>{{$data->hodim_ismi}}</b></td>
                        <td>
                          <input type="hidden" name="staff_id" value="{{$data->id}}">
                          <button type="submit" name="status" value="1" class="btn btn-sm btn-success"><i class="bi bi-person-check-fill"></i></button>
                          <button type="submit" name="status" value="0" class="btn btn-sm btn-danger"><i class="bi bi-person-x-fill"></i></button>
                        </td>
                      </tr>
                      @endforeach
                </tbody>
              </table>
              </form>
              {{$daily2->links()}} 
</div>

<script>
                    const d = new Date();
                    var day1 = document.querySelector("#day1");
                    let month = ['Yanvar','Fevral','Mart','Aprel','May','Iyun','Iyul','Avgust','Sentabr','Oktabr','Noyabr','Dekabr'];
             
                    day1.innerHTML=(d.getDate()+" - "+ month[d.getMonth() ]);
    </script>
@endsection