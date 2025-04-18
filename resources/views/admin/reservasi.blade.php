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