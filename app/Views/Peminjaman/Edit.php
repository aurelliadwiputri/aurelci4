<?= $this->extend('layout/asset') ?>
<?= $this->section('content') ?>

<div class="card">
    <div class="card-header">
        <h3 class="card-title" style="color: #000000;">Update Peminjaman</h3>
    </div>
    <div class="card-body">
        <form action="/peminjaman/update/<?= $peminjaman['PeminjamanID'] ?>" method="post">
            <div class="form-group">
                <label for="UserId" style="color: #007bff;">UserId</label>
                <input type="text" name="UserId" id="UserId" class="form-control" value="<?= $peminjaman['UserId'] ?>">
            </div>
            <div class="form-group">
                <label for="BukuId" style="color: #007bff">BukuId</label>
                <input type="text" name="BukuId" id="BukuId" class="form-control" value="<?= $peminjaman['BukuId'] ?>">
            </div>
            
            <button type="submit" class="btn btn-success">Edit</button>
        </form>
    </div>
</div>
<!-- Tambahkan jQuery dan datetimepicker -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js"></script>

<script>
    $(function () {
        // Inisialisasi datetimepicker dan set tanggal default ke sekarang
        $('#TanggalPeminjaman').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            defaultDate: new Date()
        });
    });
</script>

<?= $this->endSection() ?>