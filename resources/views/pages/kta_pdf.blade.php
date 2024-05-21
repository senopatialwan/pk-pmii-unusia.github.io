<!DOCTYPE html>
<html>
<head>
    <title>KTA PDF</title>
    <style>
        .output {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .ac-card {
            width: 676px;
            height: 420px;
            margin-bottom: 1rem;
            border-radius: 32px;
            overflow: hidden;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
            background-image: url('{{ asset('assets/img/pmii/kta-pmii.jpg') }}');
            background-repeat: no-repeat;
            background-origin: content-box;
            position: relative;
        }

        .ac-card-image {
            height: 162px;
            width: 136px;
            margin: 135px 0 0 50px;
            border: 3px solid #014182;
            padding: 20px 0 0 20px;
        }

        .ac-card-info {
            font-size: 15px;
            margin: 0;
            position: absolute;
            left: 30%;
            top: 29.5%;
            right: 50%;
            width: 450px;
        }

        .ac-card-info p {
            margin: 10px;
            line-height: 1;
            font-family: Arial;
            font-weight: 550;
            color: black;
        }
    </style>
</head>
<body>
    <div class="output">
        <div class="ac-card">
            <div class="ac-card-image">
                <img src="{{ asset($anggota->foto) }}" alt="Photo">
            </div>
            <div class="ac-card-info">
                <p id="name">
                    <strong>{{ $anggota->nama_lengkap }}</strong>
                </p>
                <p id="studentNumber" style="color: #014182">{{ $anggota->nim }}</p>
                <p id="pengurus">{{ $anggota->rayon->nama }}</p>
                <p id="fakultas">{{ $anggota->fakultas->nama }} - {{ $anggota->prodi->nama }}</p>
                <p id="domisili">{{ $anggota->alamat }}</p>
                <p id="angkatanMapaba">Angkatan Mapaba - {{ $anggota->angkatan_mapaba->tahun }}</p>
                <p id="email" style="color: #014182">{{ $anggota->email }}</p>
            </div>
        </div>
    </div>
</body>
</html>
