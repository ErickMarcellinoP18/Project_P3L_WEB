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
        .table-container {
            overflow-x: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">History Pesanan</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <input type="text" class="form-control" id="search" placeholder="Cari Berdasarkan Nama Produk">
                        </div>
                        <div class="table-container">
                            <table class="table table-bordered table-hover" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>Nomor Nota</th>
                                        <th>Tanggal Ambil</th>
                                        <th>Tanggal Pesan</th>
                                        <th>Status</th>
                                        <th>Jenis Delivery</th>
                                        <th>Nama Produk</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($pesanan as $item)
                                        <tr>
                                            <td>{{ $item->no_nota}}</td>
                                            <td>{{ $item->tanggal_ambil }}</td>
                                            <td>{{ $item->tanggal_pesan}}</td>
                                            <td>{{ $item->status }}</td>
                                            <td>{{ $item->jenis_delivery }}</td>
                                            <td>{{ $item->nama_produk }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center">Belum Memiliki Pesanan !</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
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

        // Add search functionality
        $(document).ready(function(){
            $("#search").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#dataTable tbody tr").filter(function() {
                    $(this).toggle($(this).find('td:nth-child(6)').text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
</body>
</html>

