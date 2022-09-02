@extends('layouts.main')
@section('content')

<div class="card-body">
              <h5 class="card-title">O'tkazmani qayd etish</h5>
              
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
              <form action="{{ route('accounts.store') }}" method="POST">
                @csrf
                <div class="row mb-3">
                  <label for="kimga" class="col-sm-2 col-form-label">Kimga o'tkazilgan</label>
                  <div class="col-sm-10">
                    <input type="text" id="kimga" name="kimga" class="form-control" placeholder="Qabul qiluchi shaxsning firmasi">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="hisob_raqam" class="col-sm-2 col-form-label">Hisob Raqami</label>
                  <div class="col-sm-10">
                    <input type="number" id="hisob_raqam" name="hisob_raqam" class="form-control" placeholder="Qabul qiluchi shaxsning hisob raqami">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="kimdan" class="col-sm-2 col-form-label">Kimdan otkazilgan</label>
                  <div class="col-sm-10">
                    <input type="text" id="kimdan" name="kimdan" class="form-control" placeholder="Yuboruvchi shaxsning firmasi">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="pul_miqdori" class="col-sm-2 col-form-label">Pul miqdori</label>
                  <div class="col-sm-10">
                    <input type="number" id="pul_miqdori" name="pul_miqdori" class="form-control" placeholder="Qancha miqdorda pul o'tkazilgan">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Qiymat birligi</label>
                  <div class="col-sm-10">
                    <select class="form-select" id="sel1" name="pul_birligi" aria-label="multiple select example">
                      <option disabled selected>--Valyuta--</option>
                      <option value="dollar">USD</option>
                      <option value="so'm">UZS</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-3" id="usd1" multiple="">
                  <label class="col-sm-2 col-form-label">$1 dollar qiymati</label>
                  <div class="col-sm-10">
                   <input type="number" name="d_qiymati" value="" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputDate" class="col-sm-2 col-form-label">O'tkazilgan Sana</label>
                  <div class="col-sm-10">
                    <input type="date" name="sana" class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Qo'shish tugmasi</label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Qo'shish</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->
</div>
@endsection
