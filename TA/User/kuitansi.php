<?php
$kode_buku = $_GET['kode_buku'];
$nama_pembeli = $_GET['nama_pembeli'];
$jumlah = $_GET['jumlah'];
$method_bayar = $_GET['method_bayar'];
$bank = $_GET ['bank'];
$alamat = $_GET['alamat'];
$tanggal_beli = $_GET['tanggal_beli'];
$kode_kuitansi = $_GET['kode_kuitansi'];
$harga = $_GET['harga'];
$judul = $_GET['judul'];


?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<style>
    #invoice {
        padding: 30px;
    }

    .invoice {
        position: relative;
        background-color: #FFF;
        min-height: 680px;
        padding: 15px
    }

    .invoice header {
        padding: 10px 0;
        margin-bottom: 20px;
        border-bottom: 1px solid #3989c6
    }

    .invoice .company-details {
        text-align: right
    }

    .invoice .company-details .name {
        margin-top: 0;
        margin-bottom: 0
    }

    .invoice .contacts {
        margin-bottom: 20px
    }

    .invoice .invoice-to {
        text-align: left
    }

    .invoice .invoice-to .to {
        margin-top: 0;
        margin-bottom: 0
    }

    .invoice .invoice-details {
        text-align: right
    }

    .invoice .invoice-details .invoice-id {
        margin-top: 0;
        color: #3989c6
    }

    .invoice main {
        padding-bottom: 50px
    }

    .invoice main .thanks {
        margin-top: -100px;
        font-size: 2em;
        margin-bottom: 50px
    }

    .invoice main .notices {
        padding-left: 6px;
        border-left: 6px solid #3989c6
    }

    .invoice main .notices .notice {
        font-size: 1.2em
    }

    .invoice table {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 20px
    }

    .invoice table td,
    .invoice table th {
        padding: 15px;
        background: #eee;
        border-bottom: 1px solid #fff
    }

    .invoice table th {
        white-space: nowrap;
        font-weight: 400;
        font-size: 16px
    }

    .invoice table td h3 {
        margin: 0;
        font-weight: 400;
        color: #3989c6;
        font-size: 1.2em
    }

    .invoice table .qty,
    .invoice table .total,
    .invoice table .unit {
        text-align: right;
        font-size: 1.2em
    }

    .invoice table .no {
        color: #fff;
        font-size: 1.6em;
        background: #3989c6
    }

    .invoice table .unit {
        background: #ddd
    }

    .invoice table .total {
        background: #3989c6;
        color: #fff
    }

    .invoice table tbody tr:last-child td {
        border: none
    }

    .invoice table tfoot td {
        background: 0 0;
        border-bottom: none;
        white-space: nowrap;
        text-align: right;
        padding: 10px 20px;
        font-size: 1.2em;
        border-top: 1px solid #aaa
    }

    .invoice table tfoot tr:first-child td {
        border-top: none
    }

    .invoice table tfoot tr:last-child td {
        color: #3989c6;
        font-size: 1.4em;
        border-top: 1px solid #3989c6
    }

    .invoice table tfoot tr td:first-child {
        border: none
    }

    .invoice footer {
        width: 100%;
        text-align: center;
        color: #777;
        border-top: 1px solid #aaa;
        padding: 8px 0
    }

    @media print {
        .invoice {
            font-size: 11px !important;
            overflow: hidden !important
        }

        .invoice footer {
            position: absolute;
            bottom: 10px;
            page-break-after: always
        }

        .invoice>div:last-child {
            page-break-before: always
        }
    }
</style>
<!------ Include the above in your HEAD tag ---------->

<!--Author      : @arboshiki-->
<div id="invoice">

    <div class="invoice overflow-auto">
        <div style="min-width: 600px">
            <!--  -->
            <main>
                <div class="row contacts">
                    <div class="col invoice-to">
                        <div class="text-gray-light">Kuitansi Untuk:</div>
                        <h2 class="to"><?= $nama_pembeli ?></h2>
                        <div class="address"><?= $alamat ?></div>
                    </div>
                    <div class="col invoice-details">
                        <h1 class="invoice-id"><?= $kode_kuitansi ?></h1>
                        <div class="date">Tanggal Pembelian: <?= $tanggal_beli ?></div>
                    </div>
                </div>
                <table border="0" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th class="text-left">Juduli Buku</th>
                            <th class="text-right">Methode Bayar</th>
                            <th class="text-right">Jumlah</th>
                            <th class="text-right">TOTAL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="no">01</td>
                            <td class="text-left">
                                <h3>
                                <?= $judul ?>
                                </h3>
                               
                            </td>
                            <td class="unit"><?= $method_bayar ?> - <?= $bank ?></td>
                            <td class="qty"><?= $jumlah ?></td>
                            <td class="total"><?= $harga ?></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2">TOTAL HARGA</td>
                            <td><?= $harga ?></td>
                        </tr>
                    </tfoot>
                </table>
            </main>
            <footer>
                Pembayaran Melalui Rekening 21120119140119 an Rizaldy Imam
            </footer>
        </div>
        <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
        <div></div>
    </div>
</div>