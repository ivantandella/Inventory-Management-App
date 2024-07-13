<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
                <li><a href="{{ route('home') }}"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                <li><a href="{{ route('stok_barang.index') }}"><i class="lnr lnr-database"></i> <span>Data Stok Barang</span></a></li>

                @if(((Auth::user()->level) == 'Admin') || ((Auth::user()->level) == 'Gudang'))
                    <li><a href="{{ route('barang_masuk') }}"><i class="lnr lnr-enter-down"></i> <span>Data Barang Masuk</span></a></li>
                    <li><a href="{{ route('barang_keluar') }}"><i class="lnr lnr-exit-up"></i> <span>Data Barang Keluar</span></a></li>
                    <li><a href="{{ route('transaksi.index') }}"><i class="lnr lnr-sync"></i> <span>Transaksi</span></a></li>
                @endif

                @if((Auth::user()->level) == 'Sales')
                    <li><a href="{{ route('request_barang') }}"><i class="lnr lnr-pencil"></i> <span>Request Barang</span></a></li>
                    <li><a href="{{ route('riwayat_transaksi') }}"><i class="lnr lnr-history"></i> <span>Riwayat Transaksi</span></a></li>
                @endif

                @if((Auth::user()->level) == 'Admin')
                    <li><a href="{{ route('akun.index') }}"><i class="lnr lnr-users"></i> <span>Data Akun</span></a></li>
                @endif
            </ul>
        </nav>
    </div>
</div>