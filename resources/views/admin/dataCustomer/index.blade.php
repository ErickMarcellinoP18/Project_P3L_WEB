<!DOCTYPE html>
<html lang="en">

<head>
    <title>Atma Kitchen - Data Customer</title>
    @include('admin.template.head')
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('admin.template.left-sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                <!-- Topbar -->
                @include('admin.template.navbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Customer</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover" id="dataTable" width="100%"
                                    cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama Customer</th>
                                            <th>Tanggal Pemesanan</th>
                                            <th>Tanggal Pelunasan</th>
                                            <th>pembayaran</th>
                                            <th>Alamat</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($pesanan as $item)
                                            <tr>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->tanggal_pesan }}</td>
                                                <td>{{ $item->tanggal_lunas }}</td>
                                                <td>{{ $item->pembayaran }}</td>
                                                <td>{{ $item->alamat }}</td>
                                            </tr>
                                        @empty
                                            <div class="alert alert-danger">
                                                Belum Memiliki History Pesanan Customer!
                                            </div>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('admin.template.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    @include('admin.template.logoutModal')

    @include('admin.template.script')

</body>

</html>
