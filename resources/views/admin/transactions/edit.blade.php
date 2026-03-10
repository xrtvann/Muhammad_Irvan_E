@extends('layouts.admin.app')
@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Transaksi</h1>
        <a href="{{ route('transaction.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
            <i class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali
        </a>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Form Edit Transaksi</h6>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('transaction.update', $transaction->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label>Kode Transaksi</label>
                            <input type="text" class="form-control" value="{{ $transaction->transaction_code }}"
                                disabled>
                            <small class="form-text text-muted">Kode transaksi tidak dapat diubah</small>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="type">Tipe Transaksi <span class="text-danger">*</span></label>
                                    <select class="form-control @error('type') is-invalid @enderror" id="type"
                                        name="type" required>
                                        <option value="">-- Pilih Tipe --</option>
                                        <option value="income"
                                            {{ old('type', $transaction->type) == 'income' ? 'selected' : '' }}>
                                            Pemasukan
                                        </option>
                                        <option value="expense"
                                            {{ old('type', $transaction->type) == 'expense' ? 'selected' : '' }}>
                                            Pengeluaran
                                        </option>
                                    </select>
                                    @error('type')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="transaction_date">Tanggal Transaksi <span
                                            class="text-danger">*</span></label>
                                    <input type="date"
                                        class="form-control @error('transaction_date') is-invalid @enderror"
                                        id="transaction_date" name="transaction_date"
                                        value="{{ old('transaction_date', $transaction->transaction_date) }}" required>
                                    @error('transaction_date')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="category">Kategori <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('category') is-invalid @enderror"
                                        id="category" name="category" value="{{ old('category', $transaction->category) }}"
                                        placeholder="Contoh: Penjualan Produk, Gaji, dll" required>
                                    @error('category')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="amount">Jumlah <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control @error('amount') is-invalid @enderror"
                                        id="amount" name="amount" value="{{ old('amount', $transaction->amount) }}"
                                        placeholder="Masukkan jumlah" step="0.01" min="0" required>
                                    @error('amount')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="description">Deskripsi <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('description') is-invalid @enderror"
                                id="description" name="description"
                                value="{{ old('description', $transaction->description) }}"
                                placeholder="Deskripsi transaksi" required>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="payment_method">Metode Pembayaran</label>
                            <select class="form-control @error('payment_method') is-invalid @enderror" id="payment_method"
                                name="payment_method">
                                <option value="">-- Pilih Metode --</option>
                                <option value="Cash"
                                    {{ old('payment_method', $transaction->payment_method) == 'Cash' ? 'selected' : '' }}>
                                    Cash</option>
                                <option value="Transfer Bank"
                                    {{ old('payment_method', $transaction->payment_method) == 'Transfer Bank' ? 'selected' : '' }}>
                                    Transfer Bank</option>
                                <option value="E-Wallet"
                                    {{ old('payment_method', $transaction->payment_method) == 'E-Wallet' ? 'selected' : '' }}>
                                    E-Wallet</option>
                                <option value="Kartu Kredit"
                                    {{ old('payment_method', $transaction->payment_method) == 'Kartu Kredit' ? 'selected' : '' }}>
                                    Kartu Kredit</option>
                                <option value="Kartu Debit"
                                    {{ old('payment_method', $transaction->payment_method) == 'Kartu Debit' ? 'selected' : '' }}>
                                    Kartu Debit</option>
                            </select>
                            @error('payment_method')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="notes">Catatan</label>
                            <textarea class="form-control @error('notes') is-invalid @enderror" id="notes" name="notes" rows="3"
                                placeholder="Catatan tambahan (opsional)">{{ old('notes', $transaction->notes) }}</textarea>
                            @error('notes')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Update Transaksi
                            </button>
                            <a href="{{ route('transaction.index') }}" class="btn btn-secondary">
                                <i class="fas fa-times"></i> Batal
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
