<br><br><br><br><br><br>

<footer style="background-color: black; color: white;" id="about">
    <h2 style="text-align: center; color: red;">PALA<b style="color: blue;">MORELA</b></h2>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2 style="text-align: center;">TUGAS PED</h2>
                <p><?= space(5); ?>Morella merupakan desa di kecamatan Leihitu penghasil pala. Tiap tahunnya ada panen pala yang hasilnya dimanfaatkan sebagai bahan pangan maupun obat-obatan. Salah satu pemanfaatan buah pala yang dikembangkan oleh masyarkat morella adalah pembuatan jus pala. jus pala Morella dibuat dalam bentuk kemasan dan sudah didistribusikan ke supermarket dan swalayan di Kota Ambon. Namun gaung dari keberadaan jus pala morela ini belum terdengar dan dikenal bahkan oleh masyarakat Ambon. Hal inilah yang mempengaruhi penjualan jus pala sehingga jumlah produksinya dibatasi sesuai dengan pemesanan.</p>
                <div class="row">
                    <div class="col-sm-2">
                        <h4>Soal :</h4>
                    </div>
                    <div class="col-sm-10">
                        <p>Buat pemecahan dari masalah diatas dengan menggunakan 7 langkah THE TECHNOLOGICAL METHOD OF PROBLEM SOLVING</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <h2>Kelompok 1 :</h2>
                <h3>
                    <li>Aurellia M M Huwae</li>
                    <li>Arif Taufik Rachman</li>
                    <li>Marthin Alfreinsco Salakory</li>
                    <li>Denis Louis Luhukay</li>
                    <li>Filda Irianti Nukuhehe</li>
                    <li>Anthonius Roberth Stevan Labobar</li>
                </h3>
            </div>
        </div>
    </div>
</footer>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->

<script src="asset/js/jquery.js"></script>
<script>
    $('.page-scroll').on('click', function(e) {
        // untuk mengatur nav aktif
        $('.nav-link').removeClass('active');
        $(this).addClass(' active');

        // ambil isi href
        var tujuan = $(this).attr('href');

        //tangkap elemen ybs
        var elemenTujuan = $(tujuan);

        // $('html, body').scrollTop(elemenTujuan.offset().top);

        // pindahkan scroll
        $('html, body').animate({
            scrollTop: elemenTujuan.offset().top - 150
        }, 500, 'swing');

        // untuk menghentikan href defauld
        e.preventDefault();
    });
</script>
</body>

</html>