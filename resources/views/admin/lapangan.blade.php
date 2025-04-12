<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.head')
    <title>SportField Dashboard</title>
    <link rel="stylesheet" href="{{asset('css/admin/lapangan.css')}}">
</head>


<body>
    <div class="wrapper">
        @include('components.sidebar')

        <div class="main-content">
            @include('components.header')
            <div class="tennis-overview">
                <!-- Page Header with Add Button -->
                <div class="table-header">
                    <h2>Daftar Lapangan</h2>
                    <button class="btn btn-primary add-court">
                        <i class="bi bi-plus-lg"></i>
                        Tambah Lapangan
                    </button>
                </div>

                <!-- Courts Table -->
                <div class="table-container">
                    <table class="courts-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Lapangan</th>
                                <th>Lokasi</th>
                                <th>Harga/Jam</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Tennis Court A1</td>
                                <td>Indoor - Lantai 1</td>
                                <td>Rp 150,000</td>
                                <td><span class="status-badge inactive">Tidak Tersedia</span></td>
                                <td class="action-buttons">
                                    <button class="btn-icon edit">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>
                                    <button class="btn-icon delete">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Tennis Court A2</td>
                                <td>Indoor - Lantai 1</td>
                                <td>Rp 150,000</td>
                                <td><span class="status-badge active">Tersedia</span></td>
                                <td class="action-buttons">
                                    <button class="btn-icon edit">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>
                                    <button class="btn-icon delete">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Tennis Court B1</td>
                                <td>Outdoor Area</td>
                                <td>Rp 120,000</td>
                                <td><span class="status-badge inactive">Tidak Tersedia</span></td>
                                <td class="action-buttons">
                                    <button class="btn-icon edit">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>
                                    <button class="btn-icon delete">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Tennis Court B2</td>
                                <td>Outdoor Area</td>
                                <td>Rp 120,000</td>
                                <td><span class="status-badge active">Tersedia</span></td>
                                <td class="action-buttons">
                                    <button class="btn-icon edit">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>
                                    <button class="btn-icon delete">
                                        <i class="bi bi-trash"></i>
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