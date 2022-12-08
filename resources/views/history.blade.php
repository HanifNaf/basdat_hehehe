@extends('/base_pelanggan')
    <!-- Page Header Start -->
    <div class="page-header mb-0">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2>History Pesanan</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Page Header End -->

    <div class="row">
      <div class="col-md-12">
        <div class="table-wrap">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>ID Order</th>
                <th>ID Menu</th>
                <th>Nama Menu</th>
                <th>Jumlah Kuantitas</th>
                <th>Jumlah Pembayaran</th>
                <th>Tanggal</th>
                <th>ID Pelanggan</th>
                <th>ID Pengiriman</th>
                <th>Jam Kirim</th>
                <th>Jam Diterima</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1001</th>
                <td>01</td>
                <td>Sandwich</td>
                <td>02</td>
                <td>90.000</td>
                <td>01-10-2022</td>
                <td>0091</td>
                <td>0081</td>
                <td>13.30</td>
                <td>14.00</td>
                <td><a href="#" class="btn btn-success">Progress</a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>