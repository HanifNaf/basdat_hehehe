@extends('/base_pelanggan')
<!-- Page Header Start -->
<div class="page-header mb-0">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2>Account</h2>
      </div>
    </div>
  </div>
</div>
<!-- Page Header End -->

<!-- Booking Start -->
<div class="booking">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7">
        <div class="booking-content">
          <div class="section-header">
            <p>Change Information Account</p>
            <h2>Change Your Information Account For Better Order</h2>
          </div>
        </div>
      </div>
      <div class="col-lg-5">
        <div class="booking-form">
          <form>
            <div class="control-group">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Nama" required="required" />
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="far fa-user"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="control-group">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Username" required="required" />
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="fa fa-mobile-alt"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="control-group">
              <div class="input-group">
                <input type="email" class="form-control" placeholder="Email" required="required" />
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="far fa-envelope"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="control-group">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Change Password" required="required" />
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="far fa-location"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="control-group">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Nomor Telepon" required="required" />
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="far fa-location"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="control-group">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Alamat" required="required" />
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="far fa-location"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="control-group">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Kecamatan" required="required" />
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="far fa-location"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="control-group">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Kelurahan" required="required" />
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="far fa-location"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="control-group">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Kode Pos" required="required" />
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="far fa-location"></i>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <a href="{{url('/')}}" class="btn custom-btn" type="submit">Change Your Account</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Booking End -->