<!-- Navigation -->
<nav class="navbar navbar-expand-lg">
    <div class="nav-container container">
        <!-- Brand/Logo Section -->
        <div class="nav-brand">
            <a href="#home" class="brand-link navbar-brand">
                <img src="https://images.unsplash.com/photo-1618354691792-d1d42acfd860?auto=format&q=80&w=100"
                    alt="Tennis Court Logo" class="logo">
                <span>TennisCourt</span>
            </a>
        </div>

        <!-- Mobile Toggle Button -->
        <button class="navbar-toggler nav-toggle" 
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#navbarContent" 
                aria-controls="navbarContent" 
                aria-expanded="false" 
                aria-label="Toggle navigation">
            <span class="toggle-line"></span>
            <span class="toggle-line"></span>
            <span class="toggle-line"></span>
        </button>

        <!-- Navigation Wrapper for Mobile -->
        <div class="collapse navbar-collapse nav-wrapper" id="navbarContent">
            <!-- Main Navigation Menu -->
            <div class="nav-menu navbar-nav me-auto mb-2 mb-lg-0">
                <a href="#home" class="nav-link active" aria-current="page">
                    <i class="bi bi-house-door"></i>
                    <span>Beranda</span>
                </a>
                <a href="#about" class="nav-link">
                    <i class="bi bi-info-circle"></i>
                    <span>Tentang Kami</span>
                </a>
                <a href="#courts" class="nav-link">
                    <i class="bi bi-grid"></i>
                    <span>Lapangan</span>
                </a>
                <a href="#status" class="nav-link">
                    <i class="bi bi-clock-history"></i>
                    <span>Status</span>
                </a>
            </div>

            <!-- User Authentication Section -->
            <div class="nav-auth">
                <div class="user-welcome" title="User Profile">
                    <i class="bi bi-person-circle"></i>
                    <span class="user-name" data-time="2025-04-12 13:02:32">Hai, gopalbinkumar</span>
                    <span class="user-status online" title="Online"></span>
                </div>
                <button class="btn btn-outline" title="Keluar dari aplikasi">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Keluar</span>
                </button>
            </div>
        </div>
    </div>
</nav>