<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Nilai - BayUniversity</title>
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
        .current-value {
            font-size: 13px;
            color: #6c757d;
            margin-top: 4px;
        }
    </style>
</head>
<body class="bg-light">

    <div class="container" style="max-width: 600px; margin-top: 48px;">
        <!-- Header -->
        <div class="mb-4">
            <h5 class="mb-1 fw-semibold">
                <i class="bi bi-pencil-square text-warning me-2"></i> Edit Nilai
            </h5>
            <p class="text-muted" style="font-size: 14px;">Ubah nilai mahasiswa pada mata kuliah tertentu</p>
        </div>

        <!-- Form -->
        <div class="card card-custom">
            <div class="card-body p-4">
                <form action="{{ route('nilai.update', $nilai->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label">Mahasiswa <span class="text-danger">*</span></label>
                        <select name="mahasiswa_id" class="form-select" required>
                            <option value="">-- Pilih Mahasiswa --</option>
                            @foreach($mahasiswa as $m)
                                <option value="{{ $m->id }}" {{ $nilai->mahasiswa_id == $m->id ? 'selected' : '' }}>
                                    {{ $m->nama }} ({{ $m->nim }})
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Mata Kuliah <span class="text-danger">*</span></label>
                        <select name="matkul_id" class="form-select" required>
                            <option value="">-- Pilih Mata Kuliah --</option>
                            @foreach($matkul as $mk)
                                <option value="{{ $mk->id }}" {{ $nilai->matkul_id == $mk->id ? 'selected' : '' }}>
                                    {{ $mk->kode_matkul }} - {{ $mk->nama_matkul }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Nilai Tugas</label>
                            <input type="number" name="nilai_tugas" class="form-control" step="0.01" min="0" max="100" 
                                   value="{{ old('nilai_tugas', $nilai->nilai_tugas) }}" placeholder="0-100">
                            @if($nilai->nilai_tugas)
                                <div class="current-value">Sebelumnya: {{ $nilai->nilai_tugas }}</div>
                            @endif
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Nilai UTS</label>
                            <input type="number" name="nilai_uts" class="form-control" step="0.01" min="0" max="100" 
                                   value="{{ old('nilai_uts', $nilai->nilai_uts) }}" placeholder="0-100">
                            @if($nilai->nilai_uts)
                                <div class="current-value">Sebelumnya: {{ $nilai->nilai_uts }}</div>
                            @endif
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Nilai UAS</label>
                            <input type="number" name="nilai_uas" class="form-control" step="0.01" min="0" max="100" 
                                   value="{{ old('nilai_uas', $nilai->nilai_uas) }}" placeholder="0-100">
                            @if($nilai->nilai_uas)
                                <div class="current-value">Sebelumnya: {{ $nilai->nilai_uas }}</div>
                            @endif
                        </div>
                    </div>

                    <!-- Info Nilai Akhir & Grade Saat Ini -->
                    <div class="info-grade">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="fw-semibold">📊 Nilai Akhir & Grade Saat Ini</span>
                            <span class="badge bg-primary">Akan diupdate otomatis</span>
                        </div>
                        <div class="row text-center">
                            <div class="col-6">
                                <small class="text-muted">Nilai Akhir</small>
                                <h4 class="mb-0">{{ $nilai->nilai_akhir ?? '-' }}</h4>
                            </div>
                            <div class="col-6">
                                <small class="text-muted">Grade</small>
                                <h4 class="mb-0">
                                    <span class="badge bg-{{ 
                                        $nilai->grade == 'A' ? 'success' : 
                                        ($nilai->grade == 'B' ? 'info' : 
                                        ($nilai->grade == 'C' ? 'warning' : 
                                        ($nilai->grade == 'D' ? 'danger' : 'secondary'))) 
                                    }} fs-6">{{ $nilai->grade ?? '-' }}</span>
                                </h4>
                            </div>
                        </div>
                        <hr class="my-3">
                        <div class="small text-muted text-center">
                            * Nilai akhir dan grade akan dihitung ulang setelah menyimpan perubahan
                        </div>
                    </div>

                    <!-- Info Bobot -->
                    <div class="alert alert-light mt-3 small">
                        <i class="bi bi-info-circle me-1"></i> 
                        <strong>Bobot Penilaian:</strong> Tugas 20% | UTS 40% | UAS 40%
                    </div>

                    <hr class="my-4">

                    <div class="d-flex gap-2">
                        <a href="{{ route('nilai.index') }}" class="btn btn-secondary">
                            <i class="bi bi-arrow-left"></i> Batal
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-save"></i> Update Nilai
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>