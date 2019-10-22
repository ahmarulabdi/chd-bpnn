<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Coronary Heart Desease BPNN</title>
        <link rel="stylesheet" href="{{static_url('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{static_url('font-awesome/4.5.0/css/font-awesome.min.css')}}">
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{static_url('js/jquery.min.js')}}"></script>
    </head>
    <body>

            <nav class="navbar navbar-default" role="navigation">
              <div class="container-fluid">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar">
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="{{url('')}}">Coronary Heart Desease (BPNN)</a></li>
                    <li><a href="#"></a></li>

                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{url('datapasien/')}}">Data Pasien</a></li>
                    <li><a href="{{url('datanormalisasi/')}}">Data Latih Normalisasi</a></li>

                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
            <div class="container">
            {{content()}}
        </div>
        <!-- Latest compiled and minified JavaScript -->
        <script src="{{static_url('js/bootstrap.min.js')}}"></script>
    </body>
</html>
