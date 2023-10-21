@extends('base2')
@section('content')
    <div class="rectangle"></div>
    <div class="content">
        <h1 style="margin-left:3%">Dashboard</h1>
        <div class="card-container">
            <div class="card">
                <div>
                    <img src="/assets/image/produk.jpeg" alt="User Image" style="margin-left: -3px;height: 106px;">
                </div>
                <h4 style="margin-left: 30px;margin-top: 10px">Produk</h4>
            </div>

            <div class="card">
                <div>
                    <img src="/assets/image/produk.jpeg" alt="User Image" style="margin-left: -3px;height: 106px;">
                </div>
                <h4 style="margin-left: 30px;margin-top: 10px">Kategori</h4>
            </div>

            <div class="card">
                <div>
                    <img src="/assets/image/penjualan.jpeg" alt="User Image" style="margin-left: -3px;height: 106px;">
                </div>
                <h4 style="margin-left: 30px;margin-top: 10px">Penjualan</h4>
            </div>

        </div>
        <br><br><br>
        <div class="card1">
            <table class="custom-table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Tanggal</th>
                        <th>Rincian Pesanan</th>
                        <th>Total Harga</th>
                        <th>Waktu Pemesanan</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Tidak ada isi di sini, hanya ada atribut tabel -->
                </tbody>
            </table>
        </div>
        

    </div>


@endsection
    

    
