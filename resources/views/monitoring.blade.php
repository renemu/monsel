<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>MONSEL</title>

    <!-- manggil jquery -->
    <script type="text/javascript" src="{{ ('jquery/jquery.min.js') }}"></script>

    <!-- untuk data realtime -->
    <script type="text/javascript">
        $(document).ready( function() {
            setInterval( function() {
             $("#tegangan_total").load("{{ url('bacategangan_total') }}"); 
             $("#arus_discharge").load("{{ url('bacaarusdischarge') }}"); 
             $("#arus_charge").load("{{ url('bacaaruscharge') }}"); 
             $("#status_tegangan").load("{{ url('bacastatustegangan') }}"); 
             $("#status_penyeimbang").load("{{ url('bacastatuspenyeimbang') }}");   
            }, 1000);
        });
    </script>

  </head>
  <body>
    
    <!--tampilan -->
    <div class="container" style="text-align: center; margin-top: 50px; color: rgb(30, 151, 0);">
        <img src="{{ ('https://batteries.vackerglobal.com/wp-content/uploads/2021/06/Battery-bank-monitor-icon.png') }}" style="width: 250px;">
        <h1>Monitoring Baterai Sel <br> 110 Volt DC</h1>
        <p> - Tugas Akhir Bismillah - </p>
    </div>

    <div class="container" style="text-align: center;">
        <div class="row">
              <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item active" aria-current="page">Home</li>
                      <li class="breadcrumb-item"><a href="{{ ('#') }}">Monitoring Per Sel</a></li>
                    </ol>
                  </nav>
              </div>
        </div>
    </div>

    <div class="container">
        <div class="row" style="text-align: center;">
            <div class="col-md-12">
                <div class="card">
                    <h5 class="card-header" style="font-size: 30px; background-color: rgb(0, 38, 255); color: rgb(255, 255, 255);">Nomer Sel</h5>
                    <div class="card-body">
                        <div class="card-title" style="font-size: 70px; font-weight: bold;">
                            <span id="status_penyeimbang">....</span> <span style="font-size: 35px; vertical-align: top;">!</span>
                        </div>
                    </div>
                  </div>            
            </div>
            <div class="col-md-6" style="margin-top: 25px;">
                <div class="card">
                    <h5 class="card-header" style="font-size: 30px; background-color: red; color: white;">Tegangan Total Sel</h5>
                    <div class="card-body">
                        <div class="card-title" style="font-size: 70px; font-weight: bold;">
                            <span id="tegangan_total">0</span> <span style="font-size: 35px; vertical-align: top;">V</span>
                        </div>
                    </div>
                  </div>            
            </div>
            <div class="col-md-6" style="margin-top: 25px;">
                <div class="card">
                    <h5 class="card-header" style="font-size: 30px; background-color: rgb(2, 139, 36); color: white;">Arus Discharge</h5>
                    <div class="card-body">
                        <div class="card-title" style="font-size: 70px; font-weight: bold;">
                            <span id="arus_discharge">0</span> <span style="font-size: 35px; vertical-align: top;">mA</span>
                        </div>
                    </div>
                  </div>            
            </div>
            <div class="col-md-6" style="margin-top: 25px;">
                <div class="card">
                    <h5 class="card-header" style="font-size: 30px; background-color: rgb(56, 56, 56); color: white;">Status Tegangan</h5>
                    <div class="card-body">
                        <div class="card-title" style="font-size: 70px; font-weight: bold;">
                            <span id="status_tegangan">....</span> <span style="font-size: 35px; vertical-align: top;">!</span>
                        </div>
                    </div>
                  </div>            
            </div>
            <div class="col-md-6" style="margin-top: 25px;">
                <div class="card">
                    <h5 class="card-header" style="font-size: 30px; background-color: rgb(179, 146, 0); color: white;">Arus Charge</h5>
                    <div class="card-body">
                        <div class="card-title" style="font-size: 70px; font-weight: bold;">
                            <span id="arus_charge">0</span> <span style="font-size: 35px; vertical-align: top;">mA</span>
                        </div>
                    </div>
                  </div>            
            </div>
        </div>
    </div>

    <div class="container" style="text-align: center; margin-top: 40px;">
        <img style="width: 15px;" src="{{ ('https://upload.wikimedia.org/wikipedia/commons/thumb/b/b0/Copyright.svg/1200px-Copyright.svg.png') }}"> <span>Tugas Akhir Muhammad Rifki Zulfikar 187002008</span>
    </div>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    
  </body>
</html>