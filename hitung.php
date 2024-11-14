<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Yuhuu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </head>
<body>
    <div class="container">
      <table class="table table-striped mt-5">
        <thead>
          <tr>
            <th>Nama Pelanggan</th>
            <th>Nama Barang</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Subtotal</th>
            <th>Diskon</th>
            <th>Total</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $pelanggan = htmlspecialchars($_POST['pelanggan'], ENT_QUOTES, 'utf-8');
            $menu = htmlspecialchars(strtolower($_POST['menu']), ENT_QUOTES, 'utf-8');
            $jumlah = htmlspecialchars($_POST['jumlah'], ENT_QUOTES, 'utf-8');
            $harga = htmlspecialchars($_POST['harga'], ENT_QUOTES, 'utf-8');
            
            $sub = $harga * $jumlah;
            $diskon = 0;
            
            if ($sub > 10000){
              $diskon = $sub * .1;
              $total = $sub - $diskon;
            }else{
              $total = $sub;
            };
            
            echo "<tr>";
            echo "<td>$pelanggan.</td>";
            echo "<td>$menu.</td>";
            echo "<td>$jumlah.</td>";
            echo "<td>$harga.</td>";
            echo "<td>$sub.</td>";
            echo "<td>$diskon.</td>";
            echo "<td>$total.</td>";
            echo "</tr>";
          ?>
        </tbody>
      </table>
      <br>
      <?php
            $kopi = "kopi";
            $susu = "susu";
            $teh  = "teh";
            
            if ($menu == $kopi){
              echo "<p class='lead alert alert-warning text-danger'>Anda Telah Membeli $kopi dengan Jumlah : $jumlah cup $kopi</p>";
            }elseif($menu == $susu){
              echo "<p class='lead alert alert-warning text-danger'>Anda Telah Membeli $susu dengan Jumlah : $jumlah cup $susu</p>";
            }elseif($menu == $teh){
              echo "<p class='lead alert alert-warning text-danger'>Anda Telah Membeli $teh dengan Jumlah : $jumlah cup $teh</p>";
            }else{
              echo "<p class='lead alert alert-warning text-danger'>Barang Yang anda masukkan tidak ada di menu</p>";
            }
      ?>
      <p class="lead alert alert-success text-danger">Total Belanja Anda : <?= $total ?></p>
    </div>
</body>
</html>