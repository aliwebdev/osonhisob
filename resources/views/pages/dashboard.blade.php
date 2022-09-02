@extends('layouts.main')

@section('content')
  <div class="pagetitle">
      <h1 class="text-center">Bosh Sahifa</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
    <div class="row">

<!-- Sales Card -->
<div class="col-xxl-4 col-md-6">
  <div class="card info-card sales-card">
    <div class="card-body">
      <h5 class="card-title">Oldi-Sotdi <span>|</span></h5>

      <div class="d-flex align-items-center">
        <div class="card-icon shadow rounded-circle d-flex align-items-center justify-content-center">
          <i class="bi bi-cart"></i>
        </div>
        <div class="ps-3">
          <!-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">o'sish</span> -->
          <?
            $i=0;
          ?>
          @foreach ($silk as $data)
              <?
             $i = $i + $data->qancha_miqdor;
           ?> 
          @endforeach
          <h6>{{$i}} dona <small>sotib olindi</small></h6>
        </div>
      </div>
      
    </div>

  </div>
</div><!-- End Sales Card -->

<!-- Kirim Card -->
<div class="col-xxl-4 col-md-6">
  <div class="card info-card revenue-card">
    <div class="card-body">
      <h5 class="card-title">Oldi Sotdi uchun <span>|  sarflangan summa</span></h5>

      <div class="d-flex align-items-center">
        <div class="card-icon shadow rounded-circle d-flex align-items-center justify-content-center">
          <i class="bi bi-cash-coin"></i>
        </div>
        <div class="ps-3">
        <?
            $i=0;
          ?>
          @foreach ($silk as $data)
              <?
             $i = $i + $data->berilgan_summa;
           ?> 
          @endforeach
          <h6><?echo number_format($i)?><small> so'm</small></h6>
        </div>
      </div>
    </div>

  </div>
</div><!-- End Kirim Card -->



<div class="col-xxl-4 col-xl-12">

  <div class="card info-card customers-card">
<!-- 
    <div class="filter">
      <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
        <li class="dropdown-header text-start">
          <h6>Filter</h6>
        </li>

        <li><a class="dropdown-item" href="#">Today</a></li>
        <li><a class="dropdown-item" href="#">This Month</a></li>
        <li><a class="dropdown-item" href="#">This Year</a></li>
      </ul>
    </div>  -->

    <div class="card-body">
      <h5 class="card-title">Jami qarzlar <span>| So'mda</span></h5>

      <div class="d-flex align-items-center">
        <div class="card-icon shadow rounded-circle d-flex align-items-center justify-content-center">
          <i class="bi bi-graph-down"></i>
        </div>
            <div class="ps-3">
                <?
                    $i=0;
                  ?>
                  @foreach ($credit as $data)
                      <?
                    $i = $i + $data->qancha*$data->d_qiymati;
                  ?> 
                  @endforeach
                  <h6><?echo number_format($i)?><small> so'm</small></h6>
                  <!-- <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>  -->

              </div>
          
      </div>

    </div>
    <div class="card-body">
      <h5 class="card-title">Jami nasiyalar <span>| So'mda</span></h5>

      <div class="d-flex align-items-center">
        <div class="card-icon shadow rounded-circle d-flex align-items-center justify-content-center">
          <i class="bi bi-graph-down"></i>
        </div>
            <div class="ps-3">
                <?
                    $i=0;
                  ?>
                  @foreach ($loan as $data)
                      <?
                    $i = $i + $data->qancha*$data->d_qiymati;
                  ?> 
                  @endforeach
                  <h6><?echo number_format($i)?><small> so'm</small></h6>
                  <!-- <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>  -->

              </div>
          
      </div>

    </div>
  
  </div>


</div>



<!-- Top Selling -->
<div class="col-12">
  <div class="card top-selling overflow-auto">

    <!-- <div class="filter">
      <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
        <li class="dropdown-header text-start">
          <h6>Filter</h6>
        </li>

        <li><a class="dropdown-item" href="#">Today</a></li>
        <li><a class="dropdown-item" href="#">This Month</a></li>
        <li><a class="dropdown-item" href="#">This Year</a></li>
      </ul>
    </div> -->

    <div class="card-body pb-0">
      <div class="row">
        <div class="col-md-6">
        <h5 class="card-title">O'tkazmalar <span>| Jami</span></h5>
        </div>
      </div>
      <table class="table table-borderless">
        <thead>
          <tr>
            <th scope="col">Kimga</th>
            <th scope="col">Qancha miqdorda</th>
            <th scope="col">O'tkazma vaqti</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($account as $data)
          <tr>
            <td><a href="#" class="text-primary fw-bold">{{$data->kimga}}</a></td>
            <td><?echo  number_format($data->pul_miqdori);?> {{$data->pul_birligi}}</td>
            <td class="fw-bold">{{$data->sana}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{ $account->links() }}
    </div>

  </div>
</div><!-- End Top Selling -->

</div>
    </section>
@endsection