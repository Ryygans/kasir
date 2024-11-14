<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </head>
  <style>
    body{
      width: 100%;
      height: 100vh;
    }
  </style>
<body>
  <div class="container">
    <div class="card-header bg-warning text-center text-white text-bold">
      <h2>Kasir Sederhana</h2>
    </div>
  <form method="post" action="hitung.php">
    <div class="mb-3 mt-1">
      <label for="exampleFormControlInput1" class="form-label">Nama Pelanggan</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="pelanggan" placeholder="Ojan" autocomplete="off" required>
    </div>
    <div class="mb-3 mt-1">
      <label for="exampleFormControlInput1" class="form-label">Nama Menu</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="menu" placeholder="Kopi" autocomplete="off" required>
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Jumlah Pembelian</label>
      <input type="number" class="form-control" id="exampleFormControlInput1" name="jumlah" placeholder="400" autocomplete="off"required>
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Harga satuan</label>
      <input type="number" class="form-control" id="exampleFormControlInput1" name="harga" placeholder="3000" autocomplete="off" required>
    </div>
    <button type="submit" class="mt-3 mb-3 form-control btn btn-primary text-white">Hitung Total</button>
  </form>
  </div>
  <div class="container-fluid form-group">
    <p class="alert alert-primary text-bold">Jika pembelian lebih dari Rp. 10.000.00 maka dapat diskon 10%</p>
  </div>
</body>
</html>
