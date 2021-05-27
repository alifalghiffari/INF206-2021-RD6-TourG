<?php
session_start();
$sesiData = !empty($_SESSION['sesiData'])?$_SESSION['sesiData']:'';
if(!empty($sesiData['status']['msg'])){
    $statusPsn = $sesiData['status']['msg'];
    $jenisStatusPsn = $sesiData['status']['type'];
    unset($_SESSION['sesiData']['status']);
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <meta name="description" content=""/>
        <meta name="author" content=""/>
        <title>Login</title>
        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"
            crossorigin="anonymous"></script>
    </head>
    <body class="bg-danger">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                    <?php echo !empty($statusPsn)?'<p class="'.$jenisStatusPsn.'">'.$statusPsn.'</p>':''; ?>
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    {{-- Error Alert --}}
                                    @if(session('error'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{session('error')}}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    @endif
                                    <div class="card-header">
                                        <h3 class="text-center font-weight-light my-4">Register</h3>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{url('proses_login')}}" method="POST" id="logForm">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                @error('login_gagal')
                                                    {{-- <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span> --}}
                                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                        {{-- <span class="alert-inner--icon"><i class="ni ni-like-2"></i></span> --}}
                                                        <span class="alert-inner--text"><strong>Warning!</strong> {{ $message }}</span>
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    @enderror
                                             <!-- nik -->
                                             <div class="form-group">
                                                <input
                                                    class="form-control py-4"
                                                    id="inputNik"
                                                    name="nik"
                                                    type="text"
                                                    placeholder="NIK"/>
                                                @if($errors->has('nik'))
                                                <span class="error">{{ $errors->first('nik') }}</span>
                                                @endif
                                            </div>

                                            <!-- nip -->
                                            <div class="form-group">
                                                <input
                                                    class="form-control py-4"
                                                    id="inputNip"
                                                    name="nip"
                                                    type="text"
                                                    placeholder="NIP"/>
                                                @if($errors->has('email'))
                                                <span class="error">{{ $errors->first('Nip') }}</span>
                                                @endif
                                            </div>

                                            <!-- gampong -->
                                            <div class="form-group">
                                                <input
                                                    class="form-control py-4"
                                                    id="inputGampong"
                                                    type="text"
                                                    name="Gampong"
                                                    placeholder="Gampong"/>
                                                @if($errors->has('Gampong'))
                                                <span class="error">{{ $errors->first('Gampong') }}</span>
                                                @endif
                                            </div>

                                            <!-- kodePos -->
                                            <div class="form-group">
                                                <input
                                                    class="form-control py-4"
                                                    id="inputKodePos"
                                                    type="text"
                                                    name="kodePos"
                                                    placeholder="Masukkan KodePos"/>
                                                @if($errors->has('kodePos'))
                                                <span class="error">{{ $errors->first('kodePos') }}</span>
                                                @endif
                                            </div>

                                            <!-- password -->
                                            <div class="form-group">
                                                <input
                                                    class="form-control py-4"
                                                    id="inputPassword"
                                                    type="password"
                                                    name="password"
                                                    placeholder="Masukkan Password"/>
                                                @if($errors->has('password'))
                                                <span class="error">{{ $errors->first('password') }}</span>
                                                @endif
                                            </div>

                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox"/>
                                                    <label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>
                                                </div>
                                            </div>
                                            <div
                                                class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-danger btn-block" type="submit">Register</button>
                                            </div>
                                        </form>
                                    </div>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>

        </div>
        <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            crossorigin="anonymous"></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"
            crossorigin="anonymous"></script>
        <script src="{{url('assets/js/scripts.js')}}"></script>
    </body>
</html>