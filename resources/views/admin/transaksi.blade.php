<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.head')
    <title>SportField Dashboard</title>
    <link rel="stylesheet" href="{{asset('css/admin/transaksi.css')}}">
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
                        <h2>Daftar Pembayaran</h2>
                    </div>
                </div>

                <!-- Payments Table -->
                <div class="table-container">
                    <table class="payments-table">
                        <thead>
                            <tr>
                                <th>No. Reservasi</th>
                                <th>Nama Penyewa</th>
                                <th>Metode Pembayaran</th>
                                <th>Tanggal Bayar</th>
                                <th>Total Bayar</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>RSV-2025041201</td>
                                <td>Ahmad Fauzi</td>
                                <td>
                                    <span class="payment-method">
                                        <i class="bi bi-credit-card"></i>
                                        Transfer Bank BCA
                                    </span>
                                </td>
                                <td>12 Apr 2025 09:15</td>
                                <td>Rp 300,000</td>
                                <td><span class="status-badge paid">Dibayar</span></td>
                                <td class="action-buttons">
                                    <button class="btn-icon view" title="Lihat Detail">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button class="btn-icon print" title="Cetak Invoice">
                                        <i class="bi bi-printer"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>RSV-2025041202</td>
                                <td>Sarah Wilson</td>
                                <td>
                                    <span class="payment-method">
                                        <i class="bi bi-wallet2"></i>
                                        QRIS
                                    </span>
                                </td>
                                <td>12 Apr 2025 09:30</td>
                                <td>Rp 250,000</td>
                                <td><span class="status-badge pending">Menunggu</span></td>
                                <td class="action-buttons">
                                    <button class="btn-icon view" title="Lihat Detail">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button class="btn-icon check" title="Konfirmasi">
                                        <i class="bi bi-check-circle"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>RSV-2025041203</td>
                                <td>Budi Santoso</td>
                                <td>
                                    <span class="payment-method">
                                        <i class="bi bi-credit-card"></i>
                                        Transfer Bank Mandiri
                                    </span>
                                </td>
                                <td>12 Apr 2025 10:00</td>
                                <td>Rp 300,000</td>
                                <td><span class="status-badge failed">Gagal</span></td>
                                <td class="action-buttons">
                                    <button class="btn-icon view" title="Lihat Detail">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button class="btn-icon refresh" title="Coba Lagi">
                                        <i class="bi bi-arrow-clockwise"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>RSV-2025041204</td>
                                <td>Linda Chen</td>
                                <td>
                                    <span class="payment-method">
                                        <i class="bi bi-wallet2"></i>
                                        E-Wallet OVO
                                    </span>
                                </td>
                                <td>12 Apr 2025 10:15</td>
                                <td>Rp 250,000</td>
                                <td><span class="status-badge paid">Dibayar</span></td>
                                <td class="action-buttons">
                                    <button class="btn-icon view" title="Lihat Detail">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button class="btn-icon print" title="Cetak Invoice">
                                        <i class="bi bi-printer"></i>
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