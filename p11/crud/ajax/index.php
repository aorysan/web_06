<?php
include 'auth.php';
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- csrf token -->
    <meta name="csrf-token" content="<?= $_SESSION['csrf_token'] ?>">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <!-- DataTable -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <title>Data Anggota</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-primary">
        <a href="index.php" class="navbar-brand" style="color: #fff;">
            CRUD dengan AJAX
        </a>
    </nav>

    <div class="container">
        <h2 align="center" style="margin: 30px;">Data anggota</h2>
        <form method="post" class="form-data" id="form-data">
            <div class="row">
                <div class="col-sm-9">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="hidden" name="id" id="id">
                        <input type="text" name="nama" id="nama" class="form-control" required="true">
                        <p class="text-danger" id="err_nama"></p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Jenis kelamin</label><br>
                        <input type="radio" name="jenis_kelamin" id="laki" value="L" required="true"> Laki-laki
                        <input type="radio" name="jenis_kelamin" id="perempuan" value="P"> Perempuan
                    </div>
                    <p class="text-danger" id="err_jenis_kelamin"></p>
                </div>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <textarea name="alamat" id="alamat" class="form-control" required="true"></textarea>
                <p class="text-danger" id="err_alamat"></p>
            </div>
            <div class="form-group">
                <label>No Telepon</label>
                <input type="number" name="no_telp" id="no_telp" class="form-control" required="true">

                <p class="text-danger" id="err_no_telp"></p>
            </div>
            <div class="form-group">
                <button type="button" name="simpan" id="simpan" class="btn btn-primary">
                    <i class="fa fa-save"></i> Simpan </button>
            </div>
        </form>
        <hr>

        <div class="data"></div>

    </div>

    <div class="text-center"> @ <?php echo date('Y'); ?> Copyright:
        <a href="https://google.com">Desain dan Pemrograman Web</a>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script type="text/javascript">
    $(document).ready(function() {

        $.ajaxSetup({
            headers: {
                'Csrf-Token': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('.data').load('data.php');

    });
    </script>

    <script type="text/javascript">
    $(document).ready(function() {
        $("#simpan").click(function() {
            var data = $('.form-data').serialize();
            var laki = document.getElementById("laki").value;
            var perempuan = document.getElementById("perempuan").value;
            var nama = document.getElementById("nama").value;
            var alamat = document.getElementById("alamat").value;
            var no_telp = document.getElementById("no_telp").value;
            // Pengecekkan nama
            if (nama == "") {
                document.getElementById("err_nama").innerHTML = "Nama harus diisi";
            } else {
                document.getElementById("err_nama").innerHTML = "";
            }
            // Pengecekkan alamat
            if (alamat == "") {
                document.getElementById("err_alamat").innerHTML = "Alamat harus diisi";
            } else {
                document.getElementById("err_alamat").innerHTML = "";
            }
            // Pengecekkan jenis kelamin
            if (document.getElementById("laki").checked == false && document.getElementById(
                    "perempuan").checked == false) {
                document.getElementById("err_jenis_kelamin").innerHTML = "Jenis kelamin harus dipilih";
            } else {
                document.getElementById("err_jenis_kelamin").innerHTML = "";
            }
            // Pengecekkan nomor telepon
            if (no_telp == "") {
                document.getElementById("err_no_telp").innerHTML = "No telepon harus diisi";
            } else {
                document.getElementById("err_no_telp").innerHTML = "";
            }
            //kirim formulir melalui Ajax (dengan syarat field sudah terisi)
            if (nama != "" && alamat != "" && (document.getElementById("laki").checked == true ||
                    document.getElementById("perempuan").checked == true) && no_telp != "") {
                $.ajax({
                    type: 'POST',
                    url: "form_action.php",
                    data: data,
                    success: function() {
                        // Muat ulang tabel data setelah pengiriman berhasil
                        $('.data').load("data.php");
                        document.getElementById("id").value = "";
                        document.getElementById("form-data").reset();
                    },
                    error: function(response) {
                        console.log(response.responseText);
                    }
                });
            }
        });
    });
    </script>

</body>

</html>