<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Wali Murid</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">
        <h2>Tambah Wali Murid</h2>

        <form action="{{ route('wali.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="nama_wali" class="form-label">Nama Wali Murid</label>
                <input type="text" name="nama_wali" class="form-control" id="nama_wali" required>
            </div>
            <div class="mb-3">
                <label for="kontak" class="form-label">Nomor Telepon</label>
                <input type="text" name="kontak" class="form-control" id="kontak" required>
            </div>
            <button type="submit" class="btn btn-success">Tambah Wali Murid</button>
            <a href="/wali_murid" class="btn btn-primary">Kembali</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
