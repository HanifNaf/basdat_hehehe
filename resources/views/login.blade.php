@extends('/base')
    <!-- Page Header Start -->
    <div class="page-header mb-0">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2>Login</h2>
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
                <p>Login Account</p>
                <h2>Please input your email and password</h2>
              </div>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="booking-form">
              <form>
                <div class="control-group">
                  <div class="input-group">
                    <input
                      type="email"
                      class="form-control"
                      placeholder="Email"
                      required="required"
                    />
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <i class="far fa-envelope"></i>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="control-group">
                  <div class="input-group">
                    <input
                      type="password"
                      class="form-control"
                      placeholder="Password"
                      required="required"
                    />
                    <div class="input-group-append">
                      <div class="input-group-text"></div>
                    </div>
                  </div>
                </div>
                  <div>
                    <button 
                      href="{{url('/menu')}}" 
                      class="btn custom-btn" 
                      type="submit">
                      Login
                    </button>
                    <a href="{{url('/password')}}"
                    class="btn custom-btn"
                    class="float-left"
                    >
                    Lupa Password
                  </a>
                    <hg2>or you dont have an account ? </hg2>
                    <a
                      href="{{url('/signup')}}"
                      class="btn custom-btn"
                      class="float-right"
                      >
                      Sign Up
                    </a> 
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Booking End -->