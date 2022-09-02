@extends('layouts.main')
@section('content')

<div class="pagetitle">
  <h1>Profil</h1>
</div><!-- End Page Title -->

<section class="section profile">
  <div class="row">
    <div class="col-xl-4">

      <div class="card">
        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

          <img src="../assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
          <h2>Muhammadjon</h2>
          <h3>Direktor</h3>
          <div class="social-links mt-2">
            <!-- <a href="#" class="twitter"><i class="bi bi-twitter"></i></a> -->
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <!-- <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a> -->
          </div>
        </div>
      </div>

    </div>

    <div class="col-xl-8">

      <div class="card">
        <div class="card-body pt-3">
          <!-- Bordered Tabs -->
          <ul class="nav nav-tabs nav-tabs-bordered">

            <li class="nav-item">
              <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Ma'lumotlar</button>
            </li>

            <!-- <li class="nav-item">
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Hisobni Tahrirlash</button>
            </li> -->

            <!-- <li class="nav-item">
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Parolni Tahrirlash</button>
            </li> -->

          </ul>
          <div class="tab-content pt-2">

            <div class="tab-pane fade show active profile-overview" id="profile-overview">
              <h5 class="card-title">Shaxsiy Ma'lumotlar</h5>

              <div class="row">
                <div class="col-lg-3 col-md-4 label ">Ism</div>
                <div class="col-lg-9 col-md-8">Muhammadjon</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Kasb</div>
                <div class="col-lg-9 col-md-8">Tadbirkor</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Mamlakat</div>
                <div class="col-lg-9 col-md-8">O'zbeksiton(Uzb)</div>
              </div>


              <div class="row">
                <div class="col-lg-3 col-md-4 label">Tel-Raqam</div>
                <div class="col-lg-9 col-md-8">+998 90 447 77 77</div>
              </div>

            </div>

            <!-- profile edit
            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

              
              <form>
                <div class="row mb-3">
                  <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profil Rasmi</label>
                  <div class="col-md-8 col-lg-9">
                    <img src="../assets/img/profile-img.jpg" alt="Profile">
                    <div class="pt-2">
                      <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                      <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Ism</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="fullName" type="text" class="form-control" id="fullName" value="Muhammadjon">
                  </div>
                </div>


                <div class="row mb-3">
                  <label for="Job" class="col-md-4 col-lg-3 col-form-label">Kasb</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="job" type="text" class="form-control" id="Job" value="Tadbirkor">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="Country" class="col-md-4 col-lg-3 col-form-label">Mamlakat</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="country" type="text" class="form-control" id="Country" value="Uzbekistan">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Tel-Raqam</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="phone" type="text" class="form-control" id="Phone" value="+998 90 447 77 77">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">Facebook Profil</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="facebook" type="text" class="form-control" id="Facebook" value="https://facebook.com/#">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="Instagram" class="col-md-4 col-lg-3 col-form-label">Instagram Profil</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="instagram" type="text" class="form-control" id="Instagram" value="https://instagram.com/#">
                  </div>
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Saqlash</button>
                </div>
              </form>

            </div> -->
               
            <!-- password edit 
              <div class="tab-pane fade pt-3" id="profile-change-password">
              
              <form>

                <div class="row mb-3">
                  <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Hozirgi parol</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="password" type="password" class="form-control" id="currentPassword">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">Yangi Parol</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="newpassword" type="password" class="form-control" id="newPassword">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Yangi parol (tasdiqlang)</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                  </div>
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Saqlash</button>
                </div>
              </form>

            </div> -->

          </div><!-- End Bordered Tabs -->

        </div>
      </div>

    </div>
  </div>
</section>


@endsection