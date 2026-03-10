@extends('layouts.admin.app')
@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Transaksi</h1>
        <div>
            <a href="{{ route('transaction.edit', $transaction->id) }}"
                class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm mr-2">
                <i class="fas fa-edit fa-sm text-white-50"></i> Edit
            </a>
            <a href="{{ route('transaction.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
                <i class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Informasi Transaksi</h6>
                </div>
                <div class="card-body">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td width="200"><strong>Kode Transaksi</strong></td>
                                <td>: {{ $transaction->transaction_code }}</td>
                            </tr>
                            <tr>
                                <td><strong>Tipe Transaksi</strong></td>
                                <td>:
                                    @if ($transaction->type == 'income')
                                        <span class="badge badge-success badge-lg">Pemasukan</span>
                                    @else
                                        <span class="badge badge-danger badge-lg">Pengeluaran</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Tanggal Transaksi</strong></td>
                                <td>: {{ date('d F Y', strtotime($transaction->transaction_date)) }}</td>
                            </tr>
                            <tr>
                                <td><strong>Kategori</strong></td>
                                <td>: {{ $transaction->category }}</td>
                            </tr>
                            <tr>
                                <td><strong>Deskripsi</strong></td>
                                <td>: {{ $transaction->description }}</td>
                            </tr>
                            <tr>
                                <td><strong>Jumlah</strong></td>
                                <td>:
                                    <span class="h4 {{ $transaction->type == 'income' ? 'text-success' : 'text-danger' }}">
                                        <strong>
                                            {{ $transaction->type == 'income' ? '+' : '-' }}
                                            Rp {{ number_format($transaction->amount, 0, ',', '.') }}
                                        </strong>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Metode Pembayaran</strong></td>
                                <td>: {{ $transaction->payment_method ?? '-' }}</td>
                            </tr>
                            <tr>
                                <td><strong>Catatan</strong></td>
                                <td>: {{ $transaction->notes ?? '-' }}</td>
                            </tr>
                            <tr>
                                <td><strong>Dibuat Pada</strong></td>
                                <td>: {{ date('d F Y H:i', strtotime($transaction->created_at)) }}</td>
                            </tr>
                            <tr>
                                <td><strong>Terakhir Diupdate</strong></td>
                                <td>: {{ date('d F Y H:i', strtotime($transaction->updated_at)) }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Aksi</h6>
                </div>
                <div class="card-body">
                    <a href="{{ route('transaction.edit', $transaction->id) }}" class="btn btn-warning btn-block mb-2">
                        <i class="fas fa-edit"></i> Edit Transaksi
                    </a>
                    <form action="{{ route('transaction.destroy', $transaction->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-block"
                            onclick="return confirm('Yakin ingin menghapus transaksi ini?')">
                            <i class="fas fa-trash"></i> Hapus Transaksi
                        </button>
                    </form>
                    <hr>
                    <a href="{{ route('transaction.index') }}" class="btn btn-secondary btn-block">
                        <i class="fas fa-arrow-left"></i> Kembali ke Daftar
                    </a>
                </div>
            </div>
        </div>
@endsection
