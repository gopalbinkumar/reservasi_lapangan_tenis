<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.head')
    <title>SportField Dashboard</title>
    <link rel="stylesheet" href="{{asset('css/admin/dashboard.css')}}">
</head>


<body>
<div class="wrapper">
    @include('components.sidebar')
    
    <div class="main-content">
        @include('components.header')
        <div class="tennis-overview">
            
            <!-- Court Stats Cards -->
            <div class="court-stats">
                <div class="stat-card active-courts">
                    <div class="stat-icon">
                        <i class="bi bi-calendar2-check"></i>
                    </div>
                    <div class="stat-info">
                        <h3>Lapangan Aktif</h3>
                        <div class="stat-value">4/6</div>
                        <div class="stat-detail">
                            <span class="occupied">4 Digunakan</span>
                            <span class="available">2 Tersedia</span>
                        </div>
                    </div>
                </div>

                <div class="stat-card bookings">
                    <div class="stat-icon">
                        <i class="bi bi-clock-history"></i>
                    </div>
                    <div class="stat-info">
                        <h3>Reservasi Hari Ini</h3>
                        <div class="stat-value">18</div>
                        <div class="stat-detail">
                            <span class="completed">12 Selesai</span>
                        </div>
                    </div>
                </div>

                <div class="stat-card revenue">
                    <div class="stat-icon">
                        <i class="bi bi-graph-up-arrow"></i>
                    </div>
                    <div class="stat-info">
                        <h3>Pendapatan Hari Ini</h3>
                        <div class="stat-value">Rp. 3,250,000</div>
                        <div class="stat-detail">
                            <i class="bi bi-arrow-up-short"></i>
                            <span>Naik 12% dari kemarin</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Real-time Court Status -->
            <div class="courts-grid">
                <h2>Status</h2>
                <div class="court-cards">
                    <!-- Court 1 -->
                    <div class="court-card active">
                        <div class="court-header">
                            <h3>Lapangan 1</h3>
                            <span class="status">Digunakan</span>
                        </div>
                        <div class="court-info">
                            <div class="current-session">
                                <p class="time">08:00 - 09:30</p>
                            </div>
                            <div class="court-features">
                                <span class="feature"><i class="bi bi-brightness-high"></i> Outdoor</span>
                            </div>
                        </div>  
                        <div class="next-booking">
                            <p>Next: 10:00 - 11:30</p>
                        </div>
                    </div>

                    <!-- Court 2 -->
                    <div class="court-card active">
                        <div class="court-header">
                            <h3>Lapangan 2</h3>
                            <span class="status">Digunakan</span>
                        </div>
                        <div class="court-info">
                            <div class="current-session">
                                <p class="time">07:30 - 09:00</p>
                            </div>
                            <div class="court-features">
                                <span class="feature"><i class="bi bi-brightness-high"></i> Outdoor</span>
                            </div>
                        </div>
                        <div class="next-booking">
                            <p>Next: 09:30 - 11:00</p>
                        </div>
                    </div>

                    <!-- Court 3 -->
                    <div class="court-card available">
                        <div class="court-header">
                            <h3>Lapangan 3</h3>
                            <span class="status">Tersedia</span>
                        </div>
                        <div class="court-info">
                            <div class="court-features">
                                <span class="feature"><i class="bi bi-house"></i> Indoor</span>
                            </div>
                        </div>
                        <div class="next-booking">
                            <p>Next: 11:00 - 12:30</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Bookings -->
            
        </div>
    </div>
</div>
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>