<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
   </head>
  <body>
      <div class="container-fluid">
       <div class="row">
        <div class="col-lg-12 py-2 bg-primary">
   {{-- DROPDOWN --}}

   <div class="dropdown float-right">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
      USER
    </button>
    <div class="dropdown-menu dropdown-menu-right">
     <div class="media">
      <img src="https://th.bing.com/th/id/R.0fa3fe04edf6c0202970f2088edea9e7?rik=joOK76LOMJlBPw&riu=http%3a%2f%2fpluspng.com%2fimg-png%2fgoogle-logo-png-open-2000.png&ehk=0PJJlqaIxYmJ9eOIp9mYVPA4KwkGo5Zob552JPltDMw%3d&risl=&pid=ImgRaw&r=0" height="50" width="50" class="align-self-center mr-3" alt="...">
      <div class="media-body">
        <h5 class="mt-0">{{ Auth::user()->name }}</h5></h5>
      <p><i class="bi bi-clock"></i> Pkl 12.00 WIB</p>
      </div>
    </div>
      <a class="dropdown-item" href="/logout"><i class="bi bi-box-arrow-right"></i> Log-out</a>
      <a class="dropdown-item" href="#"><i class="bi bi-gear"></i> Setting</a>
    </div>
  </div>
 
        </div>
       </div>
      </div>

      <div class="row">
       <div class="col-lg-2 mt-4">
         <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
           <a class="nav-link {{ ($key == 'home') ? 'active':'' }}" href="/" role="tab">Home</a>
           <a class="nav-link {{ ($key == 'user') ? 'active':'' }}" href="user" role="tab">User</a>
           <a class="nav-link " href="/" role="tab">Message</a>
           <a class="nav-link " href="/" role="tab">Setting</a>
         </div>
       </div>
       <div class="col-lg-10">
        <div class="card mt-4  vh-100" >
         <div class="card-body">
          {{-- CONTENT --}}
          @yield('content')
         </div>
        </div>
       </div>
      </div>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>