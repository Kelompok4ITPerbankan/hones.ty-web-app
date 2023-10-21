<div class="menu-icon" id="menu-icon">
    <div></div>
    <div></div>
    <div></div>
</div>

<div class="wrapper">
    <div class="navbar" id="navbar">
        <button class="button1">
            <div style="display: flex; align-items: center; margin-left: 13px">
                <img src="/assets/image/user.jpeg" alt="User Image" style="width: 30px; margin-right: 10px;">
                <span>User Hosnesty</span>
            </div>
        </button>      
        <button class="button" onclick="window.location.href = '{{ route('admin') }}'">Dashboard</button>
        <button  class="button" onclick="window.location.href = '{{ route('produk') }}'">Produk</button>
        <button  class="button">Transaksi</button>
        <button  class="button">Laporan</button>
        <button  class="button">Logout</button>
    </div>
</div>



