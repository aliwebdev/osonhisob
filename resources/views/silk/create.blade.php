@extends('layouts.main')
@section('content')

<div class="card-body">
              <h5 class="card-title">Mahsulotlarini qo'shish</h5>

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
              <form action="{{ route('silk.store') }}" method="POST">
                @csrf
                <div class="row mb-3">
                  <label for="olindi" class="col-sm-2 col-form-label">Kimdan olindi</label>
                  <div class="col-sm-10">
                    <input type="text" id="olindi" name="olindi" autocomplete="off" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="m_narxi" class="col-sm-2 col-form-label">Mahsulot Narxi</label>
                  <div class="col-sm-10">
                    <input type="number" id="" name="m_narxi" autocomplete="off" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="berilgan_summa" class="col-sm-2 col-form-label">Qancha Berildi</label>
                  <div class="col-sm-10">
                    <input type="number" id="" name="berilgan_summa" autocomplete="off" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="birligi" class="col-sm-2 col-form-label">Qiymat birligi</label>
                  <div class="col-sm-10">
                    <select class="form-select" name="birligi" aria-label="multiple select example">
                      <option disabled selected>--Valyuta--</option>
                      <option value="Dollar">USD</option>
                      <option value="So'm">UZS</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-3" id="usd1" multiple="">
                  <label for="d_qiymati" class="col-sm-2 col-form-label">$1 dollar qiymati</label>
                  <div class="col-sm-10">
                   <input type="number" value="" id="d_qiymati" name="d_qiymati" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="qancha_miqdor" class="col-sm-2 col-form-label">Miqdori</label>
                  <div class="col-sm-10">
                    <input type="number" id="qancha_miqdor"autocomplete="off" name="qancha_miqdor" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="miqdor_birlig" class="col-sm-2 col-form-label">Miqdor birligi</label>
                  <div class="col-sm-10">
                    <select class="form-select" id="miqdor_birlig" name="miqdor_birlig" aria-label="multiple select example">
                      <option selected="" value="dona">dona</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="o_sana" class="col-sm-2 col-form-label">Olingan Sana</label>
                  <div class="col-sm-10">
                    <input type="date" id="o_sana" name="o_sana" class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="add" class="col-sm-2 col-form-label">Qo'shish tugmasi</label>
                  <div class="col-sm-10">
                    <button id="add" type="submit" class="btn btn-primary">Qo'shish</button>
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
