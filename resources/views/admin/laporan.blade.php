<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.head')
    <title>SportField Dashboard</title>
    <link rel="stylesheet" href="{{asset('css/admin/laporan.css')}}">
</head>


<body>
    <div class="wrapper">
        @include('components.sidebar')

        <div class="main-content">
            @include('components.header')
            <div class="tennis-overview">
                <div class="tennis-overview">
                    <!-- Page Header -->
                    <div class="table-header">
                        <div class="header-left">
                            <h2>Laporan</h2>
                        </div>
                        <div class="header-actions">
                            <div class="date-range-picker">
                                <i class="bi bi-calendar3"></i>
                                <input type="date" value="2025-04-01">
                                <span>sampai</span>
                                <input type="date" value="2025-04-12">
                            </div>
                            <button class="btn btn-outline">
                                <i class="bi bi-filter"></i>
                                Filter
                            </button>
                            <button class="btn btn-primary">
                                <i class="bi bi-download"></i>
                                Export PDF
                            </button>
                        </div>
                    </div>

                    <!-- Combined Report Table -->
                    <div class="table-container">
                        <table class="combined-report-table">
                            <thead>
                                <tr>
                                    <th>ID Lapangan</th>
                                    <th>Nama Lapangan</th>
                                    <th>Total Reservasi</th>
                                    <th>Status Reservasi</th>
                                    <th>Jam Terpakai</th>
                                    <th>Metode Pembayaran</th>
                                    <th>Pendapatan</th>
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