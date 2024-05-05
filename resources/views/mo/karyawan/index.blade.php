<!DOCTYPE html>
<html lang="en">

<head>
    <title>Atma Kitchen - Pengeluaran Lain</title>
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
                    <h1 class="h3 mb-2 text-gray-800">Karyawan</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <a href="{{ route('karyawan.create') }}" class="btn btn-md btn-success mb-3">TAMBAH
                                KARYAWAN</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover" id="dataTable" width="100%"
                                    cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama Pegawai</th>
                                            <th>Jabatan</th>
                                            <th>Honor Harian</th>
                                            <th>Bonus</th>
                                            <th>Password</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        @forelse ($karyawan as $item)
                                            <tr>

                                                <td>{{ $item->nama_karyawan }}</td>
                                                <td>{{ $item->jabatan }}</td>
                                                <td>{{ $item->honor_harian}}</td>
                                                <td>{{ $item->bonus }}</td>
                                                <td>{{ $item->password }}</td>
                                                <td>
                                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                        action="{{ route('karyawan.destroy', $item->id_karyawan) }}"
                                                        method="POST">
                                                        <a href="{{ route('karyawan.edit', $item->id_karyawan) }}"
                                                            class="btn btn-sm btn-primary">Edit</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="btn btn-sm btn-danger">Delete</button>
                                                    </form>
                                            </tr>
                                        @empty
                                            <div class="alert alert-danger">
                                                Belum Memiliki Karyawan!
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
