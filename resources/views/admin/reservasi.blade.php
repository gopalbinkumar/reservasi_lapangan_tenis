<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.head')
    <title>SportField Dashboard</title>
    <link rel="stylesheet" href="{{asset('css/admin/reservasi.css')}}">
</head>


<body>
    <div class="wrapper">
        @include('components.sidebar')

        <div class="main-content">
            @include('components.header')
            <div class="tennis-overview">
                <!-- Page Header -->
                <div class="table-header">
                    <div class="header-left">
                        <h2>Daftar Reservasi</h2>
                        <p class="current-datetime">
                            <i class="bi bi-clock"></i>
                            {{ date('Y-m-d H:i:s') }} (UTC)
                        </p>
                    </div>
                </div>

                <!-- Reservations Table -->
                <div class="table-container">
                    <table class="reservations-table">
                        <thead>
                            <tr>
                                <th>No. Reservasi</th>
                                <th>Nama Lapangan</th>
                                <th>Nama Penyewa</th>
                                <th>Tanggal</th>
                                <th>Waktu Mulai</th>
                                <th>Waktu Selesai</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>RSV-2025041201</td>
                                <td>Tennis Court A1</td>
                                <td>Ahmad Fauzi</td>
                                <td>12 Apr 2025</td>
                                <td>08:00</td>
                                <td>10:00</td>
                                <td><span class="status-badge confirmed">Dikonfirmasi</span></td>
                                <td class="action-buttons">
                                    <button class="btn-icon check" title="Lihat Detail">
                                        <i class="bi bi-check-square"></i>
                                    </button>
                                    <button class="btn-icon x" title="Edit Reservasi">
                                        <i class="bi bi-x-square"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>RSV-2025041202</td>
                                <td>Tennis Court B2</td>
                                <td>Sarah Wilson</td>
                                <td>12 Apr 2025</td>
                                <td>09:00</td>
                                <td>11:00</td>
                                <td><span class="status-badge pending">Menunggu</span></td>
                                <td class="action-buttons">
                                    <button class="btn-icon check" title="Lihat Detail">
                                        <i class="bi bi-check-square"></i>
                                    </button>
                                    <button class="btn-icon x" title="Edit Reservasi">
                                        <i class="bi bi-x-square"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>RSV-2025041203</td>
                                <td>Tennis Court A2</td>
                                <td>Budi Santoso</td>
                                <td>12 Apr 2025</td>
                                <td>13:00</td>
                                <td>15:00</td>
                                <td><span class="status-badge cancelled">Dibatalkan</span></td>
                                <td class="action-buttons">
                                    <button class="btn-icon check" title="Lihat Detail">
                                        <i class="bi bi-check-square"></i>
                                    </button>
                                    <button class="btn-icon x" title="Edit Reservasi">
                                        <i class="bi bi-x-square"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>RSV-2025041204</td>
                                <td>Tennis Court B1</td>
                                <td>Linda Chen</td>
                                <td>12 Apr 2025</td>
                                <td>15:30</td>
                                <td>17:30</td>
                                <td><span class="status-badge confirmed">Dikonfirmasi</span></td>
                                <td class="action-buttons">
                                    <button class="btn-icon check" title="Lihat Detail">
                                        <i class="bi bi-check-square"></i>
                                    </button>
                                    <button class="btn-icon x" title="Edit Reservasi">
                                        <i class="bi bi-x-square"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>