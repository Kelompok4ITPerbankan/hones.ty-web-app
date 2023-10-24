@extends('base2')

@section('content')
    

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Semua Produk</h1>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <a href="#" class="btn btn-primary" style="width: 150px;height: 40px;" data-toggle="modal" data-target="#exampleModal">
                                <span class="icon text-white-50">
                                    <i class="fas fa-plus"></i>
                                </span>
                                <span class="text">Tambah Data</span>
                            </a>
                            
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Nama Barang</th>
                                            <th>Gambar</th>
                                            <th>Harga</th>
                                            <th>Stok</th>
                                            <th>Kategori</th>

                                        </tr>
                                    </thead>
                                        <tbody>
                                            @foreach ($barang as $brg)
                                                <tr>
                                                    <td>{{ $brg->nama_barang }}</td>
                                                    <td><img src="{{ asset('storage/storage/' . $brg->gambar) }}" class="img-thumbnail" width="100" height="100" alt=""></td>
                                                    <td>{{ $brg->harga}}</td>
                                                    <td>{{ $brg->stok }}</td>
                                                    <td>{{ $brg->kategori->nama_kategori }}</td>
                                                    
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                
            </div>
        </div>

        {{-- ===== MODAL TAMBAH PRODUK ===== --}}
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="POST" action="{{ url('/produk') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">

                            <div class="form-group mt-3">
                                <input type="text" id="nama_barang" name="nama_barang"
                                    placeholder="Masukkan nama barang" value="" class="form-control" required
                                    autocomplete="off">
                            </div>

                            <div class="form-group mt-3">
                                <input type="file" id="gambar" name="gambar"
                                    placeholder="Masukkan gambar" value="" class="form-control" required
                                    autocomplete="off">
                            </div>
                            
                            <div class="form-group mt-3">
                                <input type="number" id="harga" name="harga"
                                    placeholder="Masukkan harga" value="" class="form-control" required
                                    autocomplete="off">
                            </div>

                            <div class="form-group mt-3">
                                <input type="number" id="stok" name="stok"
                                    placeholder="Masukkan stok" value="" class="form-control" required
                                    autocomplete="off">
                            </div>
                            
                            
                            <div class="form-group mt-3">
                                <select class="form-control select2 mx-auto mt-2" style="width: 100%" name="kategori_id"
                                    id="kategori_id" required>
                                    @foreach ($kategori as $kate)
                                    <option selected disabled value="">
                                        Pilih Kategori</option>
                                    <option value="{{ $kate->id_kategori }}">{{ $kate->nama_kategori }}</option>
                                        
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                </div>
                </form>

            </div>
        </div>
        </div>



@endsection