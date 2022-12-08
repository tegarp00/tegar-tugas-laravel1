<!doctype html>


@php

  $title = "Biodata";

  $users = [
    [
      "nama" => "tegarp00",
      "foto" => "images/music.png",
      "bio" => "NoStackToFullStack",
      "active" => true,
      "alamat" => "North Sumatra",
      "role" => "admin",
    ],
    [
      "nama" => "tegarp00",
      "foto" => "images/music.png",
      "bio" => "NoStackToFullStack",
      "active" => true,
      "alamat" => "North Sumatra",
      "role" => "guest",
    ],
    [
      "nama" => "tegarp00",
      "foto" => "images/dd.jpg",
      "bio" => "NoStackToFullStack",
      "active" => false,
      "alamat" => "North Sumatra",
      "role" => "user",
    ],
    [
      "nama" => "Isman",
      "foto" => "images/isman.jpg",
      "bio" => "NoStackToFullStack",
      "active" => false,
      "alamat" => "North Sumatra",
      "role" => "user",
    ],
    [
      "nama" => "khoirony",
      "foto" => "images/khoirony.jpg",
      "bio" => "Jangan Lupa Pake Laravel!",
      "active" => false,
      "alamat" => "North Sumatra",
      "role" => "user",
    ],
    [
      "nama" => "tegarp00",
      "foto" => "images/music.png",
      "bio" => "NoStackToFullStack",
      "active" => true,
      "alamat" => "North Sumatra",
      "role" => "admin",
    ],
    [
      "nama" => "tegarp00",
      "foto" => "images/music.png",
      "bio" => "NoStackToFullStack",
      "active" => true,
      "alamat" => "North Sumatra",
      "role" => "admin",
    ],
    [
      "nama" => "Daffa",
      "foto" => "images/daffa.jpg",
      "bio" => "NoStackToFullStack",
      "active" => false,
      "alamat" => "North Sumatra",
      "role" => "admin",
    ],
    [
      "nama" => "Mahir",
      "foto" => "images/maher.jpg",
      "bio" => "NoStackToFullStack",
      "active" => false,
      "alamat" => "North Sumatra",
      "role" => "admin",
    ],
    [
      "nama" => "tegarp00",
      "foto" => "images/music.png",
      "bio" => "NoStackToFullStack",
      "active" => true,
      "alamat" => "North Sumatra",
      "role" => "admin",
    ],
    [
      "nama" => "tegarp00",
      "foto" => "images/music.png",
      "bio" => "NoStackToFullStack",
      "active" => true,
      "alamat" => "North Sumatra",
      "role" => "user",
    ],
    [
      "nama" => "tegarp00",
      "foto" => "images/music.png",
      "bio" => "NoStackToFullStack",
      "active" => true,
      "alamat" => "North Sumatra",
      "role" => "admin",
    ],
  ];

  if($_GET) {
    if($_GET['aktif'] == 'aktif') {
      $active = true;
    } else {
      $active = false;
    }
  } else {
    $active = false;
  }

  $filter = [
    "active" => $active,
  ]

@endphp

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="shortcut icon" href="@include('../icons')">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body class="container">
    <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">LOGO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About Me</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Contact Me</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" name="aktif" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>



  <div class="row">
    @foreach ($users as $user)
    @if($filter['active'] == $user['active'])
    <div class="col-lg-4">
      <div class="card mb-3 align-items-center">
        <div class="row">
          <div class="col-md-4 d-flex align-items-center ms-3">
            <img src="{{asset($user['foto'])}}" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col">
            <div class="card-body">
              <h5 class="card-title">{{$title}}</h5>
              <p class="card-text">Nama: {{$user['nama']}}</p>
              <p class="card-text">Bio: {{$user['bio']}}</p>
              <p class="card-text">Alamat: {{$user['alamat']}}</p>
              <p class="card-text">Role: {{$user['role']}}</p>
              <p class="card-text"><small class="{{$user['active'] == true ? 'text-success' : 'text-danger'}}">status: {{$user['active'] == true ? 'aktif' : 'non-aktif'}}</small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endif
    @endforeach
  </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
