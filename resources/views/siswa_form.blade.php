<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h2 class="mb-3">{{ isset($siswa) ? 'Edit Siswa' : 'Tambah Siswa' }}</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (isset($siswa))
        <form method="POST" action="/siswa/update/">
            @method('PUT')
    @else
        <form method="POST" action="/siswa">
    @endif
        @csrf

        @if (isset($siswa))
            <input type="hidden" name="id" value="{{ $siswa->id }}">
        @endif

        <div class="mb-3">
            <label for="nis" class="form-label">NIS</label>
            <input type="text" class="form-control" name="nis" value="{{ old('nis', $siswa->nis ?? '') }}" required>
        </div>

        <div class="mb-3">
            <label for="nama_siswa" class="form-label">Nama Siswa</label>
            <input type="text" class="form-control" name="nama_siswa" value="{{ old('nama_siswa', $siswa->nama ?? '') }}" required>
        </div>

        <div class="mb-3">
            <label for="jk" class="form-label">Jenis Kelamin</label>
            <select class="form-select" name="jk" required>
                <option value="">Pilih Jenis Kelamin</option>
                <option value="L" {{ old('jk', $siswa->jk ?? '') == 'L' ? 'selected' : '' }}>Laki-laki</option>
                <option value="P" {{ old('jk', $siswa->jk ?? '') == 'P' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
            <input type="text" class="form-control" name="tempat_lahir" value="{{ old('tempat_lahir', $siswa->tempat_lahir ?? '') }}" required>
        </div>

        <div class="mb-3">
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" name="tanggal_lahir" value="{{ old('tanggal_lahir', $siswa->tanggal_lahir ?? '') }}" required>
        </div>

        <div class="mb-3">
            <label for="id_kelas" class="form-label">Kelas</label>
            <select class="form-select" name="id_kelas" required>
                <option value="">Pilih Kelas</option>
                @foreach ($kelas as $k)
                    <option value="{{ $k->id }}" {{ old('id_kelas', $siswa->id_kelas ?? '') == $k->id ? 'selected' : '' }}>
                        {{ $k->nama_kelas }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="id_wali" class="form-label">Wali Murid</label>
            <select class="form-select" name="id_wali" required>
                <option value="">Pilih Wali Murid</option>
                @foreach ($wali as $w)
                    <option value="{{ $w->id }}" {{ old('id_wali', $siswa->id_wali ?? '') == $w->id ? 'selected' : '' }}>
                        {{ $w->nama_wali }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="/" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
