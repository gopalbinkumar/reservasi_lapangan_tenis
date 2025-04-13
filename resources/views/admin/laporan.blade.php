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
                                <!-- Tennis Court A1 -->
                                <tr>
                                    <td>TC-A1</td>
                                    <td>Tennis Court A1</td>
                                    <td>45</td>
                                    <td class="status-cell">
                                        <div class="status-group">
                                            <span class="status-badge success">35 Selesai</span>
                                            <span class="status-badge active">8 Aktif</span>
                                            <span class="status-badge danger">2 Batal</span>
                                        </div>
                                    </td>
                                    <td>145</td>
                                    <td class="payment-cell">
                                        <div class="payment-methods">
                                            <span><i class="bi bi-credit-card"></i> Bank: 70%</span>
                                            <span><i class="bi bi-wallet2"></i> E-Wallet: 20%</span>
                                            <span><i class="bi bi-qr-code"></i> QRIS: 10%</span>
                                        </div>
                                    </td>
                                    <td>Rp 5,075,000</td>
                                </tr>

                                <!-- Tennis Court A2 -->
                                <tr>
                                    <td>TC-A2</td>
                                    <td>Tennis Court A2</td>
                                    <td>38</td>
                                    <td class="status-cell">
                                        <div class="status-group">
                                            <span class="status-badge success">30 Selesai</span>
                                            <span class="status-badge active">6 Aktif</span>
                                            <span class="status-badge danger">2 Batal</span>
                                        </div>
                                    </td>
                                    <td>132</td>
                                    <td class="payment-cell">
                                        <div class="payment-methods">
                                            <span><i class="bi bi-credit-card"></i> Bank: 65%</span>
                                            <span><i class="bi bi-wallet2"></i> E-Wallet: 25%</span>
                                            <span><i class="bi bi-qr-code"></i> QRIS: 10%</span>
                                        </div>
                                    </td>
                                    <td>Rp 4,620,000</td>
                                </tr>

                                <!-- Tennis Court B1 -->
                                <tr>
                                    <td>TC-B1</td>
                                    <td>Tennis Court B1</td>
                                    <td>35</td>
                                    <td class="status-cell">
                                        <div class="status-group">
                                            <span class="status-badge success">27 Selesai</span>
                                            <span class="status-badge active">5 Aktif</span>
                                            <span class="status-badge danger">3 Batal</span>
                                        </div>
                                    </td>
                                    <td>120</td>
                                    <td class="payment-cell">
                                        <div class="payment-methods">
                                            <span><i class="bi bi-credit-card"></i> Bank: 60%</span>
                                            <span><i class="bi bi-wallet2"></i> E-Wallet: 30%</span>
                                            <span><i class="bi bi-qr-code"></i> QRIS: 10%</span>
                                        </div>
                                    </td>
                                    <td>Rp 3,600,000</td>
                                </tr>

                                <!-- Tennis Court B2 -->
                                <tr>
                                    <td>TC-B2</td>
                                    <td>Tennis Court B2</td>
                                    <td>27</td>
                                    <td class="status-cell">
                                        <div class="status-group">
                                            <span class="status-badge success">20 Selesai</span>
                                            <span class="status-badge active">4 Aktif</span>
                                            <span class="status-badge danger">3 Batal</span>
                                        </div>
                                    </td>
                                    <td>90</td>
                                    <td class="payment-cell">
                                        <div class="payment-methods">
                                            <span><i class="bi bi-credit-card"></i> Bank: 62%</span>
                                            <span><i class="bi bi-wallet2"></i> E-Wallet: 28%</span>
                                            <span><i class="bi bi-qr-code"></i> QRIS: 10%</span>
                                        </div>
                                    </td>
                                    <td>Rp 2,455,000</td>
                                </tr>

                                <!-- Total Row -->
                                <tr class="total-row">
                                    <td colspan="2">Total</td>
                                    <td>145</td>
                                    <td class="status-cell">
                                        <div class="status-group">
                                            <span class="status-badge success">112</span>
                                            <span class="status-badge active">23</span>
                                            <span class="status-badge danger">10</span>
                                        </div>
                                    </td>
                                    <td>487</td>
                                    <td class="payment-cell">
                                        <div class="payment-methods">
                                            <span><i class="bi bi-credit-card"></i> 65%</span>
                                            <span><i class="bi bi-wallet2"></i> 25%</span>
                                            <span><i class="bi bi-qr-code"></i> 10%</span>
                                        </div>
                                    </td>
                                    <td>Rp 15,750,000</td>
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