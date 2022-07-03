<html>

<head>
    <title>Struk Pembayaran</title>
    <style>
        #tabel {
            font-size: 15px;
            border-collapse: collapse;
        }

        #tabel td {
            padding-left: 5px;
            border: 1px solid black;
        }
    </style>
</head>
<?php 


?>

<body style='font-family:tahoma; font-size:8pt;'>
    <center>
        <table style='width:550px; font-size:8pt; font-family:calibri; border-collapse: collapse;' border='0'>
            <td width='70%' align='left' style='padding-right:80px; vertical-align:top'>
                <span style='font-size:12pt'><b>Nama Toko</b></span></br>
                <?= $konten[0]->isi ?>
                </br>
                Telp :<?= $konten[2]->isi ?>
            </td>
            <td style='vertical-align:top' width='30%' align='left'>
                <b><span style='font-size:12pt'>Transaksi</span></b></br>
                Kode Trans. : <?= $Data->kode_transaksi ?> </br>
                Tanggal :<?= $Data->created_at ?></br>
            </td>
        </table>
        <table style='width:550px; font-size:8pt; font-family:calibri; border-collapse: collapse;' border='0'>
            <td width='70%' align='left' style='padding-right:80px; vertical-align:top'>
                Nama User : <?= $Data->nama_user ?></br>
            </td>
        </table>
        <table cellspacing='0' style='width:550px; font-size:8pt; font-family:calibri;  border-collapse: collapse;' border='1'>

            <tr align='center'>
                <td width='30%'>Nama Barang</td>
                <td width='23%'>Harga</td>
                <td width='20%'>Qty</td>
                <td width='33%'>Total Harga</td>
            </tr>
            <?php foreach ($getData as $key => $value) {                
            ?>            
            <tr>
                <td><?= $value->nama_menu ?></td>
                <td><?= rupiah($value->harga) ?></td>
                <td><?= $value->qty ?></td>
                <td style='text-align:right'><?= rupiah($value->total) ?></td>
            </tr>

            <?php 
            } ?>
            

            <tr>
                <td colspan='3'>
                    <div style='text-align:right'>Total  : </div>
                </td>
                <td style='text-align:right'><?= rupiah($Data->harga_total) ?></td>
            </tr>
            <tr>
                <td colspan='4'>
                    <div style='text-align:right'>
                        <span style='text-align:left'>Terbilang :</span>
                        <span style='text-align:right'><?=terbilang($Data->harga_total)?>  </span>
                    </div>
                </td>
            </tr>
            
        </table>
        
    </center>
</body>

</html>