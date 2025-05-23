<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Wali Murid</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h2>Edit Wali Murid</h2>

        <form method="POST" action="{{ route('wali.update', $w->id) }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nama_wali" class="form-label">Nama Wali Murid</label>
                <input type="text" name="nama_wali" class="form-control" id="nama_wali" value="{{ $w->nama_wali }}" required>
            </div>

            <div class="mb-3">
                <label for="kontak" class="form-label">Nomor Telepon</label>
                <input type="text" name="kontak" class="form-control" id="kontak" value="{{ $w->kontak }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="/wali_murid" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>
</html>
