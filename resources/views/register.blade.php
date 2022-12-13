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

<!-- Register Start -->
<div class="booking">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7">
        <div class="booking-content">
          <div class="section-header">
            <p>Book A Table</p>
            <h2>Book Your Table For Private Dinners & Happy Hours</h2>
          </div>
        </div>
      </div>
      <div class="col-lg-5">
        <div class="booking-form">
          <form action="/register" method="POST">
            @csrf
            @method('post')
            <div class="control-group">
              <div class="input-group">
                <label for="username" value="{{_('username') }}"></label>
                <input id="username" type="text" class="form-control" placeholder="Username" required="required"
                name="username" :value="old('username')" />
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="far fa-user"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="control-group">
              <div class="input-group">
                <label for="email" value="{{_('email') }}"></label>
                <input id="email" type="text" class="form-control" placeholder="Email" required="required"
                name="email" :value="old('email')" />
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="far fa-envelope"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="control-group">
              <div class="input-group">
                <label for="password" value="{{_('password') }}"></label>
                <input id="password" type="text" class="form-control" placeholder="Password" required="required"
                name="password" :value="old('password')" />
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="far fa-location"></i>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <a href="{{url('/account')}}" class="btn custom-btn" type="submit">Register</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Booking End -->