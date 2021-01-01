
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

     <!-- Bootstrap Core CSS -->
 <link href="admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

 <!-- MetisMenu CSS -->
 <link href="admin/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

 <!-- Custom CSS -->
 <link href="admin/dist/css/sb-admin-2.css" rel="stylesheet">

 <!-- Morris Charts CSS -->
 <link href="admin/vendor/morrisjs/morris.css" rel="stylesheet">

 <!-- Custom Fonts -->
 <link href="admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0 ">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Admin</a>
        </div>
        <ul class="nav navbar-top-links navbar-right">
            <li >
                <a>
                    @php
                        date_default_timezone_set('Asia/Jakarta');
                        echo '' . date('F j, Y'); // Tanggal: January 20, 2017
                    @endphp
                </a>
               
            </li>
            {{-- ie bro --}}
            @guest
                            <li class="nav-item">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" href="{{ route('login') }}">{{ __('Login') }}</button>
                                {{-- <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="{{ route('login') }}">{{ __('Login') }}</a> --}}
                            </li>
                            
                            @if (Route::has('register'))
                            {{-- <li class="nav-item" >
                                <a class="nav-link"  data-toggle="modal" data-target="#exampleModalreg" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li> --}}
                            @endif
                           
                        @else
                        {{-- <li class="nav-item" >
                            <a class="nav-link"  data-toggle="modal" data-target="#exampleModalreg" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li> --}}
                            <li class="nav-item dropdown">
                                <button  type="button" class="btn btn-danger" href="{{ route('logout') }}" 
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Keluar') }} dari
                                {{ Auth::user()->name }}
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                               
                                </button>
                                {{-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a> --}}

                                {{-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    {{-- <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Keluar') }}
                                    </a> --}}
                                
                                    
                                </div> 
                            </li>
                           
                        @endguest
                </ul>
            </li>  
    </div>
</div>
</head>
 <!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <h2 class="modal-title" id="exampleModalLabel">Login</h2>
          </div>                          
         <div class="modal-body">
          <div class="card">                         
            <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
             @csrf                    
                <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">&emsp;&emsp;{{ __('Alamat E-Mail') }}</label>               
                <div class="col-md-7">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>                    
            </div>
        </div>      
                   
        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">&emsp;&emsp;{{ __('Password') }}</label>
                <div class="col-md-7">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">             
                    @error('password')
                    {{-- <script type='text/javascript'>alert('Email atau password salah!');</script> --}}
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>  
        <div class="modal-footer">
           
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">{{ __('Masuk') }}</button>
            </div>
            </div>
            </div>
      </div>
    </div>
      </div>
      </div> 
    </div> 
  </div> 
</form>
{{-- register --}}
<div class="modal fade" id="exampleModalreg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <h2 class="modal-title" id="exampleModalLabel">Daftar</h2>
          </div>                          
         <div class="modal-body">
          <div class="card">                         
            <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                    <div class="col-md-7">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Alamat E-Mail') }}</label>
                    <div class="col-md-7">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-md-7">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                    <div class="col-md-7">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit"  class="btn btn-primary" >Simpan</button>
                    </div>
            </div>
      </div>
    </div>
      </div>
      </div>
    </div>
  </div>
</form>
</html>
@guest
<script>
   
    $(function () {
        $('#yo').children().click(function(){
          alert('Anda harus login');
        //    document.getElementById("tes");
        });
        function cancel () { return false; };
        document.getElementById("yo").disabled = true;
        var nodes = document.getElementById("yo").getElementsByTagName('*');
        console.log(nodes);
        for (var i = 0; i < nodes.length; i++) {
            nodes[i].setAttribute('disabled', true);
            nodes[i].onclick = cancel;
        }
        
    }());
    </script>
@endguest
<main class="py-4">
    @yield('content')
</main>
    <script type="text/javascript">
        window.history.forward();
            function noBack()
            {
                  window.history.forward();
            }
            
   </script>
       <body onLoad="noBack();" onpageshow="if (event.persisted) noBack();" onUnload="">


