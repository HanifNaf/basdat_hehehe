@extends('/base')
    <!-- Page Header Start -->
    <div class="page-header mb-0">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2>Daftar Pegawai</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Page Header End -->

    <div class="container mt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
        </ol>
    </nav>
</div>
<div class="container">
    <div class="row">
        <div class="my-4 col-12">
            <h1 class="float-left">Daftar Pegawai</h1>
            <a class="btn btn-primary float-right mt-2" href="{{url('/tambah_pegawai')}}" role="button">Tambah Pegawai</a>
        </div>
        <div class="col-12">
            <table class="table table-stripped">
                <thead class="thead-primary">
                    <tr>
                        <th class="text-center">No</th>
                        <th>Nama Pegawai</th>
                        <th>Alamat</th>
                        <th class="text-center">Nomor Telepon</th>
                        <th>Asal Kota</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">1</td>
                        <td>Sabrina</td>
                        <td>Mulyosari</td>
                        <td class="text-center">08123456789</td>
                        <td>Surabaya</td>
                        <td>
                            <a href="{{url('/edit_pegawai')}}" class="badge badge-success">edit</a>
                            <a href="" class="badge badge-danger">delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>