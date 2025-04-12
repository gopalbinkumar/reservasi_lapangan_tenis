 <!-- Sidebar -->
 <aside class="sidebar">
            <!-- Brand Logo -->
            <div class="brand">
                <a href="/">
                    <i class="bi bi-trophy-fill"></i>
                    <span>SportField Pro</span>
                </a>
            </div>

            <!-- User Info -->
            <div class="user-info">
                <div class="avatar">
                    <i class="bi bi-person-circle"></i>
                </div>
                <div class="user-details">
                    <p class="username">gopalbinkumar</p>
                    <span class="role"><i class="bi bi-shield-fill"></i>Administrator</span>
                    <p class="email">email@example.com</p>
                </div>
            </div>

            <!-- Navigation Menu -->
            <nav class="menu">
                <div class="menu-section">
                    <a href="{{ url('/dashboardadmin') }}" class="menu-item">
                        <i class="bi bi-speedometer2"></i>
                        <span>Dashboard</span>
                    </a>
                
                    <a href="{{ url('/kelolalapanganadmin') }}" class="menu-item">
                        <i class="bi bi-dribbble"></i>
                        <span>Kelola Lapangan</span>
                    </a>

                    <a href="{{ url('/reservasiadmin') }}" class="menu-item">
                        <i class="bi bi-calendar-check"></i>
                        <span>Reservasi</span>
                    </a>

                    <a href="{{ url('/listcustomeradmin') }}" class="menu-item">
                        <i class="bi bi-people"></i>
                        <span>Customers</span>
                    </a>

                    <a href="{{ url('/transaksiadmin') }}" class="menu-item">
                        <i class="bi bi-cart"></i>
                        <span>Transaksi</span>
                    </a>

                    <a href="{{ url('/laporanadmin') }}" class="menu-item">
                        <i class="bi bi-file-text"></i>
                        <span>Laporan</span>
                    </a>

                </div>
            </nav>

            <!-- Logout Button -->
            <div class="logout">
                <a href="#" class="logout-btn">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Log Out</span>
                </a>
            </div>
        </aside>