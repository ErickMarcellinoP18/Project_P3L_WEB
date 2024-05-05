<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        /* Add your custom CSS styles here */
        body {
            padding-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">User Profile</h3>
                    </div>
                    <form class="card-body user" action="{{ route('user.update',$user->id) }}" method="POST"
                    enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" 
                                class="form-controlform-control-user @error('name') is-invalid @enderror" 
                                id="Name" placeholder="Username"
                                value="{{ old('name', $user->name) }}" name="name">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="username">Ulang Tahun :</label>
                            <input type="text" 
                                class="form-controlform-control-user @error('ulang_tahun') is-invalid @enderror" 
                                id="UlangTahun" placeholder="Ulang Tahun"
                                value="{{ old('ulang_tahun', $user->ulang_tahun)}}" name="ulang_tahun">
                            @error('ulang_tahun')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="username">Saldo:</label>
                            <input type="number" 
                                class="form-controlform-control-user @error('saldo') is-invalid @enderror" 
                                id="Saldo" placeholder="Saldo"
                                value="{{ old('saldo', $user->saldo) }}" name="saldo" disabled>
                            @error('saldo')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <button type="submit" class="btn btn-primary btn-block">Save Changes</button>
                    </form>
                    
                    <a href="{{ route('user.historypesanan',$user->id) }}"
                        class="btn btn-sm btn-primary">History Pemesanan</a>

                    
                    
                    
                </div>


            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap Datepicker JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <!-- Initialize Bootstrap Datepicker -->
    <script>
        $(document).ready(function(){
            $('#UlangTahun').datepicker({
                format: 'yyyy-mm-dd',
                autoclose: true
            });
        });
    </script>
</body>
</html>
