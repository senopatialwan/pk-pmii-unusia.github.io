@extends('layouts.pages')
@section('title', 'KTA | PMII UNUSIA BOGOR')



@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>KTA | PMII UNUSIA BOGOR</title>
<style>
.output {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 80vh;
}

.ac-card {
  width: 676px;
  height: 420px;
  margin-bottom: 1rem;
  border-radius: 32px;
  overflow: hidden;
  box-shadow: 0 0 5px rgba(0,0,0, 0.5);
  background-image: url('{{ asset('assets/img/pmii/kta-pmii.jpg') }}');
  background-repeat: no-repeat;
  background-origin: content-box;
  position: relative;
}


.ac-card-image {
  height: 162px;
  width: 131px;
  margin: 135px 0 0 50px;
  border: 3px solid #014182;
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

.ac-logo {
  width: 125px;
  margin-left: 10px;
}

.hide {
  opacity: 0;
  visibility: hidden;
}

.download-btn {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    border-radius: 10px;
    border: none;
    cursor: pointer;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-left: 45%;
  }

.download-btn:hover {
    background-color: #45a049;
  }
</style>
</head>
<body>
  <main id="main" class="output">
    <div class="ac-card">
      <div class="ac-card-image">
      <img src="{{ asset('assets/images/pmii/alwan.jpg') }}" alt="Thumb">
      </div>
      <div class="ac-card-info">
        <p id="name"><strong>MUHAMAD ALWAN ABDURRAHMAN</strong></p>
        <p id="studentNumber" style= "color: #014182">2025005</p>
        <p id="pengurus">PENGURUS KOMISARIAT PMII UNUSIA BOGOR</p>
        <p id="fakultas">FTIK - Sistem Informasi</p>
        <p id="domisili">Domisili - Bogor</p>
        <p id="angkatanMapaba">Angkatan Mapaba - 2020</p>
        <p id="email" style= "color: #014182">alwanabdurrahman021@gmail.com</p>
      </div>
    </div>
  </main>
  <button class="download-btn">Download PDF</button>
</body>
</html>


@endsection
