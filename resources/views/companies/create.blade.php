<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>FOOD MENU</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left mb-2">
<h2>Food Menu</h2>
</div>
<div class="pull-right">
{{-- <a class="btn btn-primary" href="{{ route('companies.index') }}"> Back</a> --}}
</div>
</div>
</div>

@if(session('status'))
<div class="alert alert-success mb-1 mt-1">
{{ session('status') }}
</div>
@endif
<form action="{{ route('companies.store') }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="col-md-4">
        <div class="list-group shadow-sm">
            <div class="list-group-item gambar-produk" style="background: url(assets/img/produk/1.jpg);">
            </div>
            <div class="list-group-item form-group"">
                <div class="mb-2">
                    <span class="active text-website">Rp19.500</span>
                </div>
                <p class="card-text text-dark">Oatmeal Raisin Cookies</p>
                <input type="text" name="totalharga" class="form-control">
            </div>
            {{-- <div>
                <button type="submit" class="btn-outline-success pl-3 ml-3">Submit</button>
            </div> --}}
        </div>
    </a>
</div>
<div class="col-md-4">
        <div class="list-group shadow-sm">
            <div class="list-group-item gambar-produk" style="background: url(assets/img/produk/1.jpg);">
            </div>
            <div class="list-group-item form-group">
                <div class="mb-2">
                    <span class="active text-website">Rp19.500</span>
                </div>
                <p class="card-text text-dark">Oatmeal Raisin Cookies</p>
                <input type="text" name="totalharga2" class="form-control">
            </div>
            {{-- <div>
                <button type="submit" class="btn-outline-success pl-3 ml-3">Submit</button>
            </div> --}}
        </div>
    </a>
</div>
<div class="col-md-4">
        <div class="list-group shadow-sm">
            <div class="list-group-item gambar-produk" style="background: url(assets/img/produk/1.jpg);">
            </div>
            <div class="list-group-item form-group"">
                <div class="mb-2">
                    <span class="active text-website">Rp19.500</span>
                </div>
                <p class="card-text text-dark">White Chip Macadamia Nut Cookie</p>
                <input type="text" name="totalharga" class="form-control">
            </div>
            <div>
                <button type="submit" class="btn-outline-success pl-3 ml-3">Add to Cart</button>
            </div>
        </div>
    </a>
</div>

{{-- <div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Company Name:</strong>
<input type="text" name="totalharga" class="form-control" placeholder="Company Name"> --}}
@error('name')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
{{-- <div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Company Email:</strong>
<input type="email" name="email" class="form-control" placeholder="Company Email">
@error('email')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Company Address:</strong>
<input type="text" name="address" class="form-control" placeholder="Company Address">
@error('address')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div> --}}
{{-- <button type="submit" class="btn btn-primary ml-3">Submit</button> --}}
</div>
</form>
</body>
</html>