<!DOCTYPE html>
<html>
<head>
  <title> </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/nice.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</head>
<body>
<br>

<div class="container">
<div class="text-center">
  <h1>Edit Barang</h1>
</div>
</div>
<br>
<br>
  
  <div class="container" style="width: 500px;">
  <form action="/Barang/{{$barangs->id}}" method="POST">
  {{csrf_field()}}
  {{method_field('PUT')}}

    <div class="form-group">
       <div class="col-sm-12">
        <label for="nim">Kode Barang</label>
        <input class="form-control" type="text" id="kode" name="kode" placeholder="masukkan kode.." value="{{$barangs->kode}}">
        </div>
    </div>
      
    <div class="form-group">
       <div class="col-sm-12">
        <label for="name">Nama Barang</label>
        <input class="form-control" type="text" id="namabarang" name="namabarang" placeholder="masukkan nama barang.." value="{{$barangs->nama_barang}}">
        </div>
    </div>
      
    <div class="form-group">
       <div class="col-sm-12">
        <label for="merk">Merk</label>
        <select name="merk" class="form-control">
        <option value="{{$barangs->merk->id}}">{{$barangs->merk->merk}}</option>
          @foreach( $merks as $merk )
            <option value="{{$merk->id}}">{{$merk->merk}}</option>
          @endforeach
        </select>
      </div>
    </div>
      
    <div class="form-group">
       <div class="col-sm-12">
        <label for="harga">Harga Barang</label>
        <input class="form-control" type="text" id="harga" name="harga" placeholder="masukkan harga barang.." value="{{$barangs->harga}}">
        </div>
    </div>

    <div class="form-group">
       <div class="col-sm-12">
        <label for="stok">Stok Barang</label>
        <input class="form-control" type="text" id="stok" name="stok" placeholder="masukkan stok barang.." value="{{$barangs->stok}}">
        </div>
    </div>
      
    <div class="form-group">
      <div class="col-sm-12">
      <button type="submit" name="" class="btn btn-success"> Edit </button>
    </div>
  <br>
  <div class="form-group">
    <div class="col-sm-12">
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
            <i>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
            </i>
        </div>
    @endif
  </div>
  </div>

  </form>
</div>
</body>
</html>