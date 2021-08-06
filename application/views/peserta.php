<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
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
                <h3>Data Peserta</h3>
                <?php if ($this->session->flashdata('successadd')) {?>
                <div class="alert alert-primary alert-dismissible fade show" role="alert"><?= $this->session->flashdata('successadd');?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php }else if ($this->session->flashdata('successdelete')) {?>
                <div class="alert alert-success alert-dismissible fade show" role="alert"><?= $this->session->flashdata('successdelete');?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php }?>
                <a href="<?= base_url('peserta/add/'); ?>" class="btn btn-primary mb-2">Tambah Data</a>
                <div class="table-responsive table-striped">
                    <table class="table">
                        <thead>
                            <?php $no = 1; ?>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">No Handphone</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($peserta as $p) : ?>
                                <tr>
                                    <th scope="row"><?= $no++; ?></th>
                                    <td><?= $p['nama']; ?></td>
                                    <td><?= $p['nohp']; ?></td>
                                    <td>
                                        <a href="<?= base_url('peserta/delete/'); ?><?= $p['id_peserta']; ?>" class="badge badge-danger pl-2 pr-2" onclick="return confirm('Apakah anda ingin menghapus data ini?');">Delete</a>
                                        <a href="<?= base_url('peserta/edit/'); ?><?= $p['id_peserta']; ?>" class="badge badge-warning">Edit</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    
</body>

</html>