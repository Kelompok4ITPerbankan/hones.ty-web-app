@extends('base2')
@section('content')
    <div class="rectangle"></div>
    <div class="content">
        <h1 style="margin-left:3%">Semua Produk</h1>
        <div class="card-container">
            

        </div>
        <br><br><br>
        <div class="card1" >
            <p>* Klik gambar untuk merubah gambar</p>
            <!-- Tambahkan input field untuk pencarian -->
            <input type="text" class="searchInput" id="searchInput" placeholder="Search">

            <table class="custom-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Kategori</th>
                        <th>Gambar</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
        </div>
        

    </div>


@endsection
    

    
