<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link  href="{{ asset('/css/style.css') }}" rel="stylesheet">
   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <h3>Dashboard</h3>
                </div>
                <div class="card-body">
                    <h5>Selamat datang di halaman dashboard, <strong>{{ Auth::user()->name }}</strong></h5>
                    <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
                    <br>
                    <br>
                    <br>
                    <h4>COVID 19</h4>
                    &nbsp Penyakit virus corona (COVID-19) adalah penyakit menular yang disebabkan oleh virus corona yang baru-baru ini ditemukan.
Sebagian besar orang yang tertular COVID-19 akan mengalami gejala ringan hingga sedang, dan akan pulih tanpa penanganan khusus. <br>
<br>
<h4>CARA PENYEBARAN VIRUS INI</h4>
Virus yang menyebabkan COVID-19 terutama ditransmisikan melalui droplet (percikan air liur) yang dihasilkan saat orang yang terinfeksi batuk, bersin, atau mengembuskan nafas. Droplet ini terlalu berat dan tidak bisa bertahan di udara, sehingga dengan cepat jatuh dan menempel pada lantai atau permukaan lainnya.
Anda dapat tertular saat menghirup udara yang mengandung virus jika Anda berada terlalu dekat dengan orang yang sudah terinfeksi COVID-19. Anda juga dapat tertular jika menyentuh permukaan benda yang terkontaminasi lalu menyentuh mata, hidung, atau mulut Anda.


                </div>
            </div>
        </div>
        <div class="col-md-12 mt-5">
        <table class="table table-primary">
    <tr>
      <td>Informasi terbaru seputar penanganan COVID-19 di Indonesia oleh Pemerintah</td>
      <td><a class="btn btn-warning" href="https://covid19.go.id" target="_blank" role="button">Link</a></td>
    </tr>
    <tr>
      <td>Informasi tentang vaksin covid 19</td>
      <td><a class="btn btn-warning" href="https://pedulilindungi.id/login?redirect=sertifikat-vaksin" target="_blank" role="button">Link</a></td>
    </tr>
    <tr>
      <td>Stastistik covid 19</td>
      <td><a class="btn btn-warning" href="https://news.google.com/covid19/map?hl=id&mid=%2Fm%2F03ryn&gl=ID&ceid=ID%3Aid" target="_blank" role="button">Link</a></td>
    </tr>
</table>
        </div>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>