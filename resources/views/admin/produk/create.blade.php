<!DOCTYPE html>
<html lang="en">

<head>
    <title>Atma Kitchen - Edit Produk</title>
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

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('admin.template.navbar')
                <!-- End of Topbar -->

                <div class="container">

                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Add Produk Sendiri</h1>
                                </div>
                                <form class="user" action="{{ route('produk.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label class="font-weight-bold">Nama Produk</label>
                                        <input type="text"
                                            class="form-control form-control-user @error('nama_produk') is-invalid @enderror"
                                            id="InputNamaProduk" placeholder="Nama Produk"
                                            value="{{ old('nama_produk') }}" name="nama_produk">
                                        @error('nama_produk')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <label class="font-weight-bold">Harga</label>
                                            <input type="number"
                                                class="form-control form-control-user @error('harga') is-invalid @enderror"
                                                id="InputHarga" placeholder="Harga Produk" value="{{ old('harga') }}"
                                                name="harga">
                                            @error('harga')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="font-weight-bold">Jumlah Stok</label>
                                            <input type="number"
                                                class="form-control form-control-user @error('jumlah_stok') is-invalid @enderror"
                                                id="InputJumlahStok" placeholder="Jumlah Stok"
                                                value="{{ old('jumlah_stok') }}" name="jumlah_stok">
                                            @error('jumlah_stok')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <label class="font-weight-bold">Porsi</label>
                                            <input type="text"
                                                class="form-control form-control-user @error('porsi') is-invalid @enderror"
                                                id="InputPorsi" placeholder="Porsi" value="{{ old('porsi') }}"
                                                name="porsi">
                                            @error('porsi')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="font-weight-bold">Kuota PO</label>
                                            <input type="number"
                                                class="form-control form-control-user @error('kuota_po') is-invalid @enderror"
                                                id="InputKuotaPO" placeholder="Kuota PO" value="{{ old('kuota_po') }}"
                                                name="kuota_po">
                                            @error('kuota_po')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" name="tipe_produk" value="Asli">
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Save
                                    </button>
                                    <hr>
                                </form>

                            </div>

                        </div>
                    </div>
                </div>


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
