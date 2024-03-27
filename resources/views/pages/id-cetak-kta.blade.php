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
    height: 45vh;
}

.ac-card {
  display: grid;
  grid-template-columns: 173px 1fr 50px;
  background-color: #fff;
  width: 412.5px;
  height: 250px;
  margin-bottom: 1rem;
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0 0 5px rgba(0,0,0, 0.5);
}

.ac-icon {
  width: 40px;
  margin-top: 10px;
}

.ac-card-image {
  height: 168px;
  width: 131px;
  margin: 10px 0 0 15px;
  border: 3px solid #00056b;
}

.ac-card-info {
  font-size: 1.20rem;
  margin: 0;
}

.ac-card-info p {
  margin-top: 10px;
  line-height: 1;
  font-family: poppins;
}

.ac-card-footer {
  display: grid;
  align-content: center;
  grid-column: 1/-1;
  align-self: end;
  height: 56.5px;
  background-color: #00056b; 
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
      <img src="assets/img/pmii/alwan.jpg" alt="Thumb">
      </div>
      <div class="ac-card-info">
        <p><strong id="name">Muhamad Alwan Abdurrahman</strong></p>
        <p id="studentNumber">2025005</p>
        <p id="pengurus">PK PMII UNUSIA BOGOR</p>
        <p id="fakultas">FTIK - Sistem Informasi</p>
        <p id="domisili">Domisili - Bogor</p>
        <p id="angkatanMapaba">Angkatan Mapaba - 2020</p>
      </div>
      <img class="ac-icon" src="assets/img/pmii/logo-pmii.png">
      <div class="ac-card-footer">
        <img class="ac-logo" src="assets/img/pmii/logo-pmii.png">
      </div>
    </div>
  </main>
  <button class="download-btn">Download PDF</button>
</body>
</html>


@endsection
