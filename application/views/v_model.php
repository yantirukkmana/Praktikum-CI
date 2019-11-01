<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <title>DATA SHOP</title>

    </head>
<body>
    <center><h1>DATABASE INSTAGRAM STORE</h1></center>
    <table style="margin:20px auto;" border="1;">
        <tr>
            <td>KODE</td>
            <td>KODE TOKO</td>
            <td>LINK</td>
            <td>LINK 2</td>
            <td>LINK 3</td>
            <td>JUDUL</td>
            <td>JUDUL TOKO</td>
            <td>STATUS BARANG</td>
            <td>HARGA</td>
            <td>HARGA PROMO</td>
            <td>HARGA NORMAL</td>
            <td>MARK UP</td>
            <td>SUPLIER</td>
            <td>SUPLIER 2</td>
            <td>SUPLIER 3</td>
            <td>IMAGES</td>
            <td>DESKRIPSI</td>
            <td>GAMBAR 1</td>
            <td>GAMBAR 2</td>
            <td>POSTED</td>
            <td>MEDIA ID</td>
    </tr>
    <?php
    $no = 1;
    foreach($datashop as $u){
        ?>
        <tr>
        <td><?php echo $u->kode;?></td>
        <td><?php echo $u->kode_toko;?></td>
        <td><?php echo $u->link;?></td>
        <td><?php echo $u->link2;?></td>
        <td><?php echo $u->link3;?></td>
        <td><?php echo $u->judul;?></td>
        <td><?php echo $u->judul_toko;?></td>
        <td><?php echo $u->status_br;?></td>
        <td><?php echo $u->harga;?></td>
        <td><?php echo $u->harga_promo;?></td>
        <td><?php echo $u->harga_normal;?></td>
        <td><?php echo $u->mark_up;?></td>
        <td><?php echo $u->suplier;?></td>
        <td><?php echo $u->suplier2;?></td>
        <td><?php echo $u->suplier3;?></td>
        <td><?php echo $u->images;?></td>
        <td><?php echo $u->deskripsi;?></td>
        <td><?php echo $u->gambar1;?></td>
        <td><?php echo $u->gambar2;?></td>
        <td><?php echo $u->posted;?></td>
        <td><?php echo $u->mediaId;?></td>

        </tr>
        <?php } ?>

    </table>
    </body>
    <html>

    }

</body> 