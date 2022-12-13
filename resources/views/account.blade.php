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
                <label for="no_telp" value="{{_('no_telp') }}"></label>
                <input id="no_telp" type="text" class="form-control" placeholder="Nomor Telepon" required="required"
                name="no_telp" :value="old('no_telp')" />
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="far fa-location"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="control-group">
              <div class="input-group">
                <label for="alamat" value="{{_('alamat') }}"></label>
                <input id="alamat" type="text" class="form-control" placeholder="Alamat" required="required"
                name="alamat" :value="old('alamat')" />
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="far fa-location"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="control-group">
              <div class="input-group">
                <label for="kecamatan" value="{{_('kecamatan') }}"></label>
                <input id="kecamatan" type="text" class="form-control" placeholder="Kecamatan" required="required"
                name="kecamatan" :value="old('kecamatan')" />
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="far fa-location"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="control-group">
              <div class="input-group">
                <label for="kelurahan" value="{{_('kelurahan') }}"></label>
                <input id="kelurahan" type="text" class="form-control" placeholder="Kelurahan" required="required"
                name="kelurahan" :value="old('kelurahan')" />
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="far fa-location"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="control-group">
              <div class="input-group">
                <label for="kodepos" value="{{_('kodepos') }}"></label>
                <input id="kodepos" type="text" class="form-control" placeholder="Kodepos" required="required"
                name="kodepos" :value="old('kodepos')" />
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