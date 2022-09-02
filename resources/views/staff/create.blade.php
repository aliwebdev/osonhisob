@extends('layouts.main')
@section('content')

<div class="card-body">
              <h5 class="card-title">Hodim qo'shish</h5>

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
              <form action="{{ route('staff.store') }}" method="POST">
                @csrf
                <div class="row mb-3">
                  <label for="ism" class="col-sm-2 col-form-label">Hodim ismi</label>
                  <div class="col-sm-10">
                    <input type="text" id="ism" name="hodim_ismi" autocomplete="off" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="age" class="col-sm-2 col-form-label">Hodim yoshi</label>
                  <div class="col-sm-10">
                    <input type="number" id="age" name="hodim_yoshi" autocomplete="off" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="birligi" class="col-sm-2 col-form-label">Ish Bo'limi</label>
                  <div class="col-sm-10">
                    <select class="form-select" name="ish_turi" aria-label="multiple select example">
                      <option disabled selected>--Turi--</option>
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
                    <input type="number" id="salary" name="oyligi" autocomplete="off" class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="" class="col-sm-2 col-form-label">Ish Vaqti</label>
                  <div class="col-sm-10">
                      <input class="form-control" name="ish_vaqti" id="" >
                  </div>
                </div>
                <!-- hidden inputs -->
                  <input name="avans" value="0" type="hidden">
                  <input name="qilgan_ish_turi" value="Mavjud Emas" type="hidden">
                  <input name="qilgan_ish_dona" value="0" type="hidden">
                  <input name="qilgan_ish_summa" value="0" type="hidden">
                <!-- end hidden inputs -->
                <div class="row mb-3">
                  <label for="submit" class="col-sm-2 col-form-label">Qo'shish tugmasi</label>
                  <div class="col-sm-10">
                      <input type="submit" value="Qo'shish" class="btn btn-success">
                      <a class="btn btn-danger" href="{{route('staff.index')}}">Orqaga</a>
                  </div>
                </div>
              </form><!-- End General Form Elements -->
</div>

<!-- <script>
    function f() {
        if(document.getElementById("sel1").value == "dollar"){
            document.getElementById("usd1").style.visibility="visible";
        }
        else if(document.getElementById("sel1").value == "sum"){
            document.getElementById("usd1").value=0;
            document.getElementById("usd1").style.visibility="hidden";
        }
        else{
             document.getElementById("usd1").style.visibility="hidden";
        }
    }
</script> -->
@endsection
