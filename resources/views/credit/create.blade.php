@extends('layouts.main')
@section('content')

<div class="card-body">
              <h5 class="card-title">Qarzni qayd etish</h5>
              
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
              <form action="{{ route('credits.store') }}" method="POST">
                @csrf
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Kimdan olindi</label>
                  <div class="col-sm-10">
                    <input type="text" name="kimdan" class="form-control" placeholder="Qarz bergan shaxs yoki firma nomi">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Qancha miqdorda</label>
                  <div class="col-sm-10">
                    <input type="number" name="qancha" class="form-control" placeholder="Qancha miqdorda qarz olindi">
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-sm-10">
                    <input type="hidden" name="qancha_berildi" value="0" class="form-control" placeholder="Qancha miqdorda qarz berildi">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Qiymat birligi</label>
                  <div class="col-sm-10">
                    <select class="form-select" name="pul_birligi" id="sel1" aria-label="multiple select example">
                      <option disabled selected>--Valyuta--</option>
                      <option value="dollar">USD</option>
                      <option value="som">UZS</option>
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
                  <label for="inputDate" class="col-sm-2 col-form-label">Olingan Sana</label>
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
