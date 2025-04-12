<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.head')
    <title>SportField Dashboard</title>
    <link rel="stylesheet" href="{{asset('css/admin/customer.css')}}">
</head>


<body>
    <div class="wrapper">
        @include('components.sidebar')

        <div class="main-content">
            @include('components.header')
            <div class="tennis-overview">
                <!-- Page Header -->
                    <div class="header-left">
                        <h2>Daftar Pelanggan</h2>
                        <p class="current-datetime">
                            <i class="bi bi-clock"></i>
                            2025-04-12 10:05:20 (UTC)
                        </p>
                    </div>

                <!-- Customers Table -->
                <div class="table-container">
                    <table class="customers-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Email</th>
                                <th>Nomor HP</th>
                                <th>Alamat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Ahmad Fauzi</td>
                                <td>ahmad.fauzi@email.com</td>
                                <td>081234567890</td>
                                <td>Jl. Sudirman No. 123, Jakarta Pusat</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Sarah Wilson</td>
                                <td>sarah.w@email.com</td>
                                <td>082345678901</td>
                                <td>Jl. Gatot Subroto No. 45, Jakarta Selatan</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Budi Santoso</td>
                                <td>budi.s@email.com</td>
                                <td>083456789012</td>
                                <td>Jl. Thamrin No. 88, Jakarta Pusat</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Linda Chen</td>
                                <td>linda.chen@email.com</td>
                                <td>084567890123</td>
                                <td>Jl. Asia Afrika No. 15, Jakarta Barat</td>
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