<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Data Peserta</title>
</head>

<body>
    <!-- As a heading -->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <span class="navbar-brand mb-0 h1">Tes Satu</span>
        </div>
    </nav>

    <div class="container">
        <div class="row mt-4">
            <div class="col-md-6">
                <h3>Edit Data Peserta</h3>
                <div class="card">
                    <div class="card-header">
                        Edit Data Peserta
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('peserta/prosesedit'); ?>" method="post">
                        <input type="hidden" value="<?= $peserta['id_peserta']; ?>" name="id_peserta">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="nama" class="form-control" value="<?= $peserta['nama']; ?>" id="nama" name="nama" required>
                                <?= form_error('nama', '<small class="pl-3 text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="nohp">Nomor Handphone</label>
                                <input type="text" class="form-control" id="nohp" value="<?= $peserta['nohp']; ?>" name="nohp" required>
                                <?= form_error('nohp', '<small class="pl-3 text-danger">', '</small>'); ?>
                            </div>
                            <button type="reset" class="btn btn-danger float-right" name="tambah">Cancel</button>
                            <button type="submit" class="btn btn-dark float-right" name="tambah">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    
</body>

</html>