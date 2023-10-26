<div class="menu-toggle" onclick="toggleNav()">
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
</div>

<!-- Navigasi Kiri -->
<div id="mySidenav" class="sidenav">
    <button class="btn btn-primary" style="background-color: rgba(51, 51, 51, 0.4);width: 200px ;border: none; border-radius: 10px;margin-top: 30px;margin-left: 27px">User</button>
    <button class="btn btn-primary" style="background-color: rgba(51, 51, 51, 0.4);width: 200px  ;border: none; border-radius: 10px; margin-top: 40px; margin-left: 27px"
     onclick="window.location.href = '{{ route('login') }}'">Keluar</button>

    
</div>