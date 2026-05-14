<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Nilai - BayUniversity</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        .card-custom {
            border-radius: 16px;
            border: none;
            box-shadow: 0 1px 3px rgba(0,0,0,0.05);
        }
        .form-label {
            font-weight: 500;
            font-size: 14px;
            margin-bottom: 6px;
        }
        .info-grade {
            background: #f8f9fa;
            border-radius: 12px;
            padding: 16px;
            margin-top: 20px;
        }
        .info-grade table {
            margin-bottom: 0;
        }
    </style>
</head>
<body class="bg-light">

    <div class="container" style="max-width: 600px; margin-top: 48px;">
        <!-- Header -->
        <div class="mb-4">
            <h5 class="mb-1 fw-semibold">
                <i class="bi bi-star-fill text-warning me-2"></i> Tambah Nilai
            </h5>
            <p class="text-muted" style="font-size: 14px;">Isi nilai untuk mahasiswa pada mata kuliah tertentu</p>
        </div>

        <!-- Form -->
        <div class="card card-custom">
            <div class="card-body p-4">
                <form action="{{ route('nilai.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Mahasiswa <span class="text-danger">*</span></label>
                        <select name="mahasiswa_id" class="form-select" required>
                            <option value="">-- Pilih Mahasiswa --</option>
                            @foreach($mahasiswa as $m)
                                <option value="{{ $m->id }}">{{ $m->nama }} ({{ $m->nim }})</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Mata Kuliah <span class="text-danger">*</span></label>
                        <select name="matkul_id" class="form-select" required>
                            <option value="">-- Pilih Mata Kuliah --</option>
                            @foreach($matkul as $mk)
                                <option value="{{ $mk->id }}">{{ $mk->kode_matkul }} - {{ $mk->nama_matkul }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Nilai Tugas</label>
                            <input type="number" name="nilai_tugas" class="form-control" step="0.01" min="0" max="100" placeholder="0-100">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Nilai UTS</label>
                            <input type="number" name="nilai_uts" class="form-control" step="0.01" min="0" max="100" placeholder="0-100">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Nilai UAS</label>
                            <input type="number" name="nilai_uas" class="form-control" step="0.01" min="0" max="100" placeholder="0-100">
                        </div>
                    </div>

                    <!-- Info Grade (Otomatis) -->
                    <div class="info-grade">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="fw-semibold">🎓 Perhitungan Nilai Akhir & Grade</span>
                            <span class="badge bg-info">Otomatis</span>
                        </div>
                        <table class="table table-sm table-borderless">
                            <tr>
                                <td style="width: 60%">Nilai Akhir = (20% Tugas) + (40% UTS) + (40% UAS)</td>
                                <td class="text-end"><strong>Otomatis dihitung sistem</strong></td>
                            </tr>
                            <tr>
                                <td>Grade A (85-100) | A- (80-84) | B+ (75-79) | B (70-74)</td>
                                <td class="text-end">Grade B- (65-69) | C+ (60-64) | C (55-59) | D (40-54) | E ( <40)</td>
                            </tr>
                        </table>
                    </div>

                    <hr class="my-4">

                    <div class="d-flex gap-2">
                        <a href="{{ route('nilai.index') }}" class="btn btn-secondary">
                            <i class="bi bi-arrow-left"></i> Batal
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-save"></i> Simpan Nilai
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>