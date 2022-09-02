@extends('layouts.main')
@section('content')

<div class="card-body">
              <h5 class="card-title">Hodim ma'lumotlarini tahrirlash</h5>

              @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
              <!-- General Form Elements -->
              <form action="{{ route('staff.update',['staff' => $staff->id]) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="row mb-3">
                  <label for="ism" class="col-sm-2 col-form-label">Hodim ismi</label>
                  <div class="col-sm-10">
                    <input type="text" value="{{$staff->hodim_ismi}}" id="ism" name="hodim_ismi" autocomplete="off" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="age" class="col-sm-2 col-form-label">Hodim yoshi</label>
                  <div class="col-sm-10">
                    <input type="number" id="age" value="{{$staff->hodim_yoshi}}" name="hodim_yoshi" autocomplete="off" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="birligi" class="col-sm-2 col-form-label">Ish Bo'limi</label>
                  <div class="col-sm-10">
                    <select class="form-select" name="ish_turi" aria-label="multiple select example">
                      <option selected value="{{$staff->ish_turi}}">{{$staff->ish_turi}}</option>
                      <option value="Tikuvchi">Tikuvchi</option>
                      <option value="Bichuvchi">Bichuvchi</option>
                      <option value="Dazmolchi">Dazmolchi</option>
                      <option value="Qorovul">Qorovul</option>
                      <option value="Menejer">Menejer</option>
                      <option value="Boshqa">Boshqa</option>
                    </select>
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label for="salary" class="col-sm-2 col-form-label">Hodim oyligi</label>
                  <div class="col-sm-10">
                    <input type="number" value="{{$staff->oyligi}}" id="salary" name="oyligi" autocomplete="off" class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="" class="col-sm-2 col-form-label">Ish Vaqti</label>
                  <div class="col-sm-10">
                      <input class="form-control" value="{{$staff->ish_vaqti}}" name="ish_vaqti" id="" >
                  </div>
                </div>

                
                <div class="row mb-3">
                  <label for="submit" class="col-sm-2 col-form-label">Yangilash</label>
                  <div class="col-sm-10">
                      <input type="submit" value="Yangilash" class="btn btn-success">
                      <a class="btn btn-danger" href="{{route('staff.index')}}">Orqaga</a>
                  </div>
                </div>
              </form><!-- End General Form Elements -->
</div>

@endsection