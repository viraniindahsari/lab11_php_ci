<?= $this->include('template/header'); ?>
<h1><?= $title; ?></h1>
<hr>
<br>
        <div class="row">
            <img src="virani.jpg" title="Virani" alt="Virani Indah Sari" class="image-circle" width="200"
            style="float: left; border: 2px solid black;">
            <h1>Virani Indah Sari</h1>
            <br>
            <p>Nama saya Virani Indah Sari. Saya adalah seorang mahasiswa dari <i>Universitas Pelita Bangsa</i> yang saat ini sedang mempelajari materi PHP Framework (Codeigniter) dalam mata kuliah <i>Pemrograman Web</i>.</p>
        </div>
<p><?= $content; ?></p>
<?= $this->include('template/footer'); ?>