<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$query = $this->db->query("SELECT * FROM member WHERE email='".$this->session->userdata('email')."'")->row_array();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale1.0">
    <title>Fit-bsaShop</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/fontawesome/css/all.min.css') ?> ">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/aos-master/dist/aos.css') ?> ">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/css.css') ?> ">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500" rel="stylesheet">
    <style type="text/css">
    .slick-prev:before,
    .slick-next:before {
        color: black;
    }


</style>
</head>
<body>
    <?php $this->load->view('user/navbar'); ?>
    
    <div id="content-container"></div>
    <div class="page-container">
        <div class="container"><!--containerfull-->
            <div class="row">
                     <div class="col-2"></div>
                <div class="col-10">
<h1>Kebijakan Privasi Jolebo e-Shop</h1>

<p>Adanya Kebijakan Privasi ini adalah komitmen nyata dari Jolebo e-Shop untuk menghargai dan melindungi setiap data atau informasi pribadi Pengguna situs localhost/olshop, situs-situs turunannya. (selanjutnya disebut sebagai "Situs").</p>

<p>Kebijakan Privasi ini (beserta syarat-syarat penggunaan dari situs Jolebo e-Shop sebagaimana tercantum dalam "Syarat & Ketentuan" dan informasi lain yang tercantum di Situs) menetapkan dasar atas perolehan, pengumpulan, pengolahan, penganalisisan, penampilan, pembukaan, dan/atau segala bentuk pengelolaan yang terkait dengan data atau informasi yang Pengguna berikan kepada Jolebo e-Shop atau yang Jolebo e-Shop kumpulkan dari Pengguna, termasuk data pribadi Pengguna, baik pada saat Pengguna melakukan pendaftaran di Situs, mengakses Situs, maupun mempergunakan layanan-layanan pada Situs (selanjutnya disebut sebagai "data").</p>

<p>Dengan mengakses dan/atau mempergunakan layanan Jolebo e-Shop, Pengguna menyatakan bahwa setiap data Pengguna merupakan data yang benar dan sah, serta Pengguna memberikan persetujuan kepada Jolebo e-Shop untuk memperoleh, mengumpulkan, menyimpan, mengelola dan mempergunakan data tersebut sebagaimana tercantum dalam Kebijakan Privasi maupun Syarat dan Ketentuan Jolebo e-Shop.</p>

<h3>A. Perolehan dan Pengumpulan Data Pengguna</h3>
<p>Jolebo e-Shop mengumpulkan data Pengguna dengan tujuan untuk memproses transaksi Pengguna, mengelola dan memperlancar proses penggunaan Situs, serta tujuan-tujuan lainnya selama diizinkan oleh peraturan perundang-undangan yang berlaku. Adapun data Pengguna yang dikumpulkan adalah sebagai berikut:</p>
<ol>
<li>   Data yang diserahkan secara mandiri oleh Pengguna, termasuk namun tidak terbatas pada data yang diserahkan pada saat Pengguna:</li> 

<ol>    
        <li>Membuat atau memperbarui akun Jolebo e-Shop, termasuk diantaranya nama pengguna (username), alamat email, nomor telepon, password, alamat, foto, dan lain-lain;</li>

        <li>Menghubungi Jolebo e-Shop, termasuk melalui layanan konsumen;</li>

        <li>Mengisi survei yang dikirimkan oleh Jolebo e-Shop atau atas nama Jolebo e-Shop;</li>

        <li>Melakukan interaksi dengan Pengguna lainnya melalui fitur pesan, diskusi produk, ulasan, rating, Pusat Resolusi dan sebagainya;</li>

        <li>Mempergunakan layanan-layanan pada Situs, termasuk data transaksi yang detil, diantaranya jenis, jumlah dan/atau keterangan dari produk atau layanan yang dibeli, alamat pengiriman, kanal pembayaran yang digunakan, jumlah transaksi, tanggal dan waktu transaksi, serta detil transaksi lainnya;</li>

        <li>Mengisi data-data pembayaran pada saat Pengguna melakukan aktivitas transaksi pembayaran melalui Situs, termasuk namun tidak terbatas pada data rekening bank, kartu kredit, virtual account, instant payment, internet banking, gerai ritel; dan/atau</li>
    </ol>

<li>    Data yang terekam pada saat Pengguna mempergunakan Situs, termasuk namun tidak terbatas pada:</li>
    <ol>
        <li>Data lokasi riil atau perkiraannya seperti alamat IP, lokasi Wi-Fi, geo-location, dan sebagainya;</li>

        <li>Data berupa waktu dari setiap aktivitas Pengguna, termasuk aktivitas pendaftaran, login, transaksi, dan lain sebagainya;</li>

        <li>Data penggunaan atau preferensi Pengguna, diantaranya interaksi Pengguna dalam menggunakan Situs, pilihan yang disimpan, serta pengaturan yang dipilih. Data tersebut diperoleh menggunakan cookies, pixel tags, dan teknologi serupa yang menciptakan dan mempertahankan pengenal unik;</li>

        <li>Data perangkat, diantaranya jenis perangkat yang digunakan untuk mengakses Situs, termasuk model perangkat keras, sistem operasi dan versinya, perangkat lunak, nama file dan versinya, pilihan bahasa, pengenal perangkat unik, pengenal iklan, nomor seri, informasi gerakan perangkat, dan/atau informasi jaringan seluler;</li>

        <li>Data catatan (log), diantaranya catatan pada server yang menerima data seperti alamat IP perangkat, tanggal dan waktu akses, fitur aplikasi atau laman yang dilihat, proses kerja aplikasi dan aktivitas sistem lainnya, jenis peramban, dan/atau situs atau layanan pihak ketiga yang Anda gunakan sebelum berinteraksi dengan Situs.</li>
   </ol>

 <li>   Data yang diperoleh dari sumber lain, termasuk:</li>
<ol>
        <li>Mitra usaha Jolebo e-Shop yang turut membantu Jolebo e-Shop dalam mengembangkan dan menyajikan layanan-layanan dalam Situs kepada Pengguna, antara lain mitra penyedia layanan pembayaran, logistik atau kurir, infrastruktur situs, dan mitra-mitra lainnya.</li>

        <li>Mitra usaha Jolebo e-Shop tempat Pengguna membuat atau mengakses akun Jolebo e-Shop, seperti layanan media sosial, atau situs/aplikasi yang menggunakan API Jolebo e-Shop atau yang digunakan Jolebo e-Shop;</li>

        <li>Penyedia layanan finansial, termasuk namun tidak terbatas pada lembaga atau biru pemeringkat kredit atau Lembaga Pengelola Informasi Perkreditan (LPIP);</li>

        <li>Penyedia layanan pemasaran;</li>

        <li>Sumber yang tersedia secara umum.</li>
   </ol>

<p>Jolebo e-Shop dapat menggabungkan data yang diperoleh dari sumber tersebut dengan data lain yang dimilikinya.</p>
</ol>
<h3>B.Penggunaan Data</h3>

<p>Jolebo e-Shop dapat menggunakan keseluruhan atau sebagian data yang diperoleh dan dikumpulkan dari Pengguna sebagaimana disebutkan dalam bagian sebelumnya untuk hal-hal sebagai berikut:</p>
<ol>
    <li>Memproses segala bentuk permintaan, aktivitas maupun transaksi yang dilakukan oleh Pengguna melalui Situs, termasuk untuk keperluan pengiriman produk kepada Pengguna.</li>

    <li>Penyediaan fitur-fitur untuk memberikan, mewujudkan, memelihara dan memperbaiki produk dan layanan kami, termasuk:</li>
<ol>
        <li>Menawarkan, memperoleh, menyediakan, atau memfasilitasi layanan marketplace, maupun produk-produk lainnya melalui Situs;</li>

        <li>Memungkinkan fitur untuk mempribadikan akun Jolebo e-Shop Pengguna, seperti Wishlist dan Barang Favorit; dan/atau</li>

        <li>Melakukan kegiatan internal yang diperlukan untuk menyediakan layanan pada situs/aplikasi Jolebo e-Shop, seperti pemecahan masalah software, bug, permasalahan operasional, melakukan analisis data, pengujian, dan penelitian, dan untuk memantau dan menganalisis kecenderungan penggunaan dan aktivitas.</li>
</ol>
   <li> Membantu Pengguna pada saat berkomunikasi dengan Layanan Pelanggan Jolebo e-Shop, diantaranya untuk:</li>
<ol>
        <li>Memeriksa dan mengatasi permasalahan Pengguna;</li>

        <li>Mengarahkan pertanyaan Pengguna kepada petugas Layanan Pelanggan yang tepat untuk mengatasi permasalahan; dan</li>

        <li>Mengawasi dan memperbaiki tanggapan Layanan Pelanggan Jolebo e-Shop.</li>
</ol>
   <li> Menghubungi Pengguna melalui email, surat, telepon, fax, dan lain-lain, termasuk namun tidak terbatas, untuk membantu dan/atau menyelesaikan proses transaksi maupun proses penyelesaian kendala.</li>

    <li>Menggunakan informasi yang diperoleh dari Pengguna untuk tujuan penelitian, analisis, pengembangan dan pengujian produk guna meningkatkan keamanan dan keamanan layanan-layanan pada Situs, serta mengembangkan fitur dan produk baru.</li>

    <li>Menginformasikan kepada Pengguna terkait produk, layanan, promosi, studi, survei, berita, perkembangan terbaru, acara dan lain-lain, baik melalui Situs maupun melalui media lainnya. Jolebo e-Shop juga dapat menggunakan informasi tersebut untuk mempromosikan dan memproses kontes dan undian, memberikan hadiah, serta menyajikan iklan dan konten yang relevan tentang layanan Jolebo e-Shop dan mitra usahanya.</li>

   <li> Melakukan monitoring ataupun investigasi terhadap transaksi-transaksi mencurigakan atau transaksi yang terindikasi mengandung unsur kecurangan atau pelanggaran terhadap Syarat dan Ketentuan atau ketentuan hukum yang berlaku, serta melakukan tindakan-tindakan yang diperlukan sebagai tindak lanjut dari hasil monitoring atau investigasi transaksi tersebut.</li>

   <li> Dalam keadaan tertentu, Jolebo e-Shop mungkin perlu untuk menggunakan ataupun mengungkapkan data Pengguna untuk tujuan penegakan hukum atau untuk pemenuhan persyaratan hukum dan peraturan yang berlaku, termasuk dalam hal terjadinya sengketa atau proses hukum antara Pengguna dan Jolebo e-Shop.</li>
</ol>
<h3>C. Cookies</h3>
<ol>
 <li>   Cookies adalah file kecil yang secara otomatis akan mengambil tempat di dalam perangkat Pengguna yang menjalankan fungsi dalam menyimpan preferensi maupun konfigurasi Pengguna selama mengunjungi suatu situs.</li>

<li>    Cookies tersebut tidak diperuntukkan untuk digunakan pada saat melakukan akses data lain yang Pengguna miliki di perangkat komputer Pengguna, selain dari yang telah Pengguna setujui untuk disampaikan.</li>

<li>    Walaupun secara otomatis perangkat komputer Pengguna akan menerima cookies, Pengguna dapat menentukan pilihan untuk melakukan modifikasi melalui pengaturan browser Pengguna yaitu dengan memilih untuk menolak cookies (pilihan ini dapat membatasi layanan optimal pada saat melakukan akses ke Situs).</li>

<li>    Jolebo e-Shop menggunakan fitur Google Analytics Demographics and Interest. Data yang kami peroleh dari fitur tersebut, seperti umur, jenis kelamin, minat Pengguna dan lain-lain, akan kami gunakan untuk pengembangan Situs dan konten Jolebo e-Shop. Jika tidak ingin data Anda terlacak oleh Google Analytics, Anda dapat menggunakan Add-On Google Analytics Opt-Out Browser.</li>

<li>    Jolebo e-Shop dapat menggunakan fitur-fitur yang disediakan oleh pihak ketiga dalam rangka meningkatkan layanan dan konten Jolebo e-Shop, termasuk diantaranya ialah penyesuaian dan penyajian iklan kepada setiap Pengguna berdasarkan minat atau riwayat kunjungan. Jika Anda tidak ingin iklan ditampilkan berdasarkan penyesuaian tersebut, maka Anda dapat mengaturnya melalui browser.</li>
</ol>
        </div>
</div>
    </div><!--containerfull1-->