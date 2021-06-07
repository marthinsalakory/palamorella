<?php include "header.php"; ?>

<div class="container" id="atas">
    <div class="row mt-4">
        <div class="col-sm-6">
            <img src="asset/img/1.jpg" alt="" width="500px">
        </div>
        <div class="col-sm-6">
            <h3><b>Juice Pala</b></h3>
            <p><b>Kondisi</b>: Baru. <br>
                <b>Asal</b>: Morela. <br>
                <b>Kategori</b>: Jus. <br>
                <b>Etalase</b>: MAKANAN KHAS MALUKU. <br>
                Terbuat dari buah pala asli dan Bahan-bahan Alami tanpa Proses Kimia. <br>
                <b>saran penyajian</b> : Paling Nikmat kalo diminum dalam keadaan dingin. <br>
                <b>Komposisi</b> :
                Sari buah pala,Air,Gula dan Natrium benzoat.
            </p>
        </div>
    </div>
</div>
<div class="container" id="artikel">
    <div class="row mt-4">
        <div class="col-sm-6">
            <h2><b>Artikel</b></h2>
        </div>
        <div class="col-sm-6">
            <a href="tambah.php">
                <button class="btn btn-primary mb-3" style="margin-left: 60%;">Tambah Artikel</button>
            </a>
        </div>
        <?php $i = 0; ?>
        <?php foreach ($artikel as $a) : ?>
            <?php ++$i;
            if ($i > 3) {
                break;
            }
            ?>
            <div class="col-sm-4 mt-3" style="height: 400px;">
                <div class="card" style="width: 18rem;">
                    <img src="asset/img/<?= $a['gambar']; ?>" class="card-img-top" alt="..." height="120px">
                    <div class="card-body">
                        <h5 class="card-title"><?= $a['judul']; ?></h5>
                        <p class="card-text"><?= $a['subjek']; ?></p>
                        <a href="detail.php?id=<?= $a['id']; ?>" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <div class="col-sm-12 mb-4" style="text-align: center;">
            <a href="artikel.php">Lihat lebih banyak!</a>
        </div>
    </div>
</div>
<div id="sejarah" class="container">
    <div class="row mt-4">
        <div class="col-sm-12">
            <h2><b>Sejarah</b></h2>
            <p><?= space(5); ?>Sejak dahulu Maluku menjadi incaran orang eropa, hanya karena wilayah ini merupakan penghasil rempah-rempah, salah satunya adalah penghasil buah Pala. Buah dan biji pala telah menjadi komoditi perdagangan yang penting sejak masa Romawi, yang terkenal miliki banyak manfaat sebagai penyedap makanan, kesehatan dan kecantikan. Khasiat itu dapat diperoleh langsung dari biji, daging buah pala, fuli, daun maupun batangnya. Semua itu memiliki kandungan yang sangat bermanfaat bagi manusia. <br><?= space(5); ?>Selain mengandung antioksidan, buah pala mengandung sejumlah senyawa kuat yang dapat membantu cegah penyakit dan meningkatkan kesehatan secara keseluruhan. <br><?= space(5); ?>Beberapa industri home di Maluku sudah melakukan terobasan dengan memanfaatkan buah yang berwana kuning ini menjadi minuman segar seperti sirup maupun jus atau oleh-oleh/cemilang khas Maluku. <br><?= space(5); ?>Beberapa industri home di Maluku sudah melakukan terobasan dengan memanfaatkan buah yang berwana kuning ini menjadi minuman segar seperti sirup maupun jus atau oleh-oleh/cemilang khas Maluku. <br><?= space(5); ?>Seperti yang dilakukan oleh UKM Jus Pala Morella di Kecamatan Leihitu, Kabupaten Maluku Tengah. Dibawa kepemimpinan Yasin Sialana, Jus Pala Morella sudah diproduksi sejak tahun 2008. <br><?= space(5); ?>Jus eksotis ini, diproses secara alami dan dibuat dari bahan yang dipilih dengan cermat, yaitu buah pala asli dari desa Morella. <br><?= space(5); ?>Di tahun 2019 Jus Pala Morella hadir dengan kemasan baru, harganya pun mudah dijangkau, yakni senilai Rp.6000/botol dan Rp.144.000/karton. <br><?= space(5); ?>Menurut Yasim Sialana yang dikonfirmasi Lentera Maluku (29/5), ia katakan bahwa, pemasaran Jus Pala Morella masih sebatas wilayah Kota Ambon dan sekitarnya, namun beberapa konsumen yang memesan untuk dibawa ke luar Maluku, biasanya langsung dipesan dari pabriknya. <br><?= space(5); ?>“Kami memiliki beberapa agen di Kota Ambon, namun ada yang langsung beli dari pabrik”, katanya. <br><?= space(5); ?>Pihaknya tidak memproduksi setiap hari, tetapi dalam sebulan selalu ada, dengan sekali produksi sebanyak 600 botol, jus Pala ini memiliki komposisi dari air, gula, natrium benzoate dan buah pala. Dengan desain kemasan yang baru, Jus Pala Morella tampil lebih menarik lagi. <br><?= space(5); ?>"Kami berharap, kedepannya bisa membangun kolaborasi dan memiliki agen di luar Maluku", harapnya.</p>
        </div>
    </div>
</div>


<?php include "footer.php"; ?>