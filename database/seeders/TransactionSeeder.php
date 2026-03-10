<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $transactions = [
            // Pemasukan (Income)
            [
                'transaction_code' => 'TRX-20260301-ABC123',
                'type' => 'income',
                'category' => 'Penjualan Produk',
                'description' => 'Penjualan produk A kepada PT. Maju Jaya',
                'amount' => 5000000,
                'transaction_date' => '2026-03-01',
                'payment_method' => 'Transfer Bank',
                'notes' => 'Pembayaran lunas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'transaction_code' => 'TRX-20260302-DEF456',
                'type' => 'income',
                'category' => 'Jasa Konsultasi',
                'description' => 'Jasa konsultasi IT untuk CV. Sukses Makmur',
                'amount' => 3500000,
                'transaction_date' => '2026-03-02',
                'payment_method' => 'Cash',
                'notes' => 'Konsultasi sistem ERP',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'transaction_code' => 'TRX-20260303-GHI789',
                'type' => 'income',
                'category' => 'Penjualan Produk',
                'description' => 'Penjualan produk B kepada toko retail',
                'amount' => 2750000,
                'transaction_date' => '2026-03-03',
                'payment_method' => 'E-Wallet',
                'notes' => 'Pembelian dalam jumlah besar',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'transaction_code' => 'TRX-20260305-JKL012',
                'type' => 'income',
                'category' => 'Investasi',
                'description' => 'Pendapatan dari investasi saham',
                'amount' => 1500000,
                'transaction_date' => '2026-03-05',
                'payment_method' => 'Transfer Bank',
                'notes' => 'Dividen triwulan',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Pengeluaran (Expense)
            [
                'transaction_code' => 'TRX-20260301-MNO345',
                'type' => 'expense',
                'category' => 'Gaji Karyawan',
                'description' => 'Pembayaran gaji karyawan bulan Februari',
                'amount' => 4500000,
                'transaction_date' => '2026-03-01',
                'payment_method' => 'Transfer Bank',
                'notes' => 'Gaji 5 karyawan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'transaction_code' => 'TRX-20260302-PQR678',
                'type' => 'expense',
                'category' => 'Operasional',
                'description' => 'Pembayaran listrik dan air kantor',
                'amount' => 850000,
                'transaction_date' => '2026-03-02',
                'payment_method' => 'Transfer Bank',
                'notes' => 'Tagihan bulan Februari',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'transaction_code' => 'TRX-20260304-STU901',
                'type' => 'expense',
                'category' => 'Pembelian Aset',
                'description' => 'Pembelian komputer baru untuk kantor',
                'amount' => 7500000,
                'transaction_date' => '2026-03-04',
                'payment_method' => 'Cash',
                'notes' => '2 unit laptop untuk tim development',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'transaction_code' => 'TRX-20260305-VWX234',
                'type' => 'expense',
                'category' => 'Marketing',
                'description' => 'Biaya iklan di media sosial',
                'amount' => 1200000,
                'transaction_date' => '2026-03-05',
                'payment_method' => 'E-Wallet',
                'notes' => 'Campaign bulan Maret',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'transaction_code' => 'TRX-20260306-YZA567',
                'type' => 'expense',
                'category' => 'Operasional',
                'description' => 'Pembelian alat tulis kantor',
                'amount' => 350000,
                'transaction_date' => '2026-03-06',
                'payment_method' => 'Cash',
                'notes' => 'Stok bulanan ATK',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'transaction_code' => 'TRX-20260307-BCD890',
                'type' => 'expense',
                'category' => 'Transportasi',
                'description' => 'Biaya transportasi kunjungan klien',
                'amount' => 450000,
                'transaction_date' => '2026-03-07',
                'payment_method' => 'Cash',
                'notes' => 'Meeting dengan klien luar kota',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'transaction_code' => 'TRX-20260308-EFG123',
                'type' => 'income',
                'category' => 'Penjualan Produk',
                'description' => 'Penjualan produk C secara online',
                'amount' => 4200000,
                'transaction_date' => '2026-03-08',
                'payment_method' => 'E-Wallet',
                'notes' => 'Marketplace',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'transaction_code' => 'TRX-20260309-HIJ456',
                'type' => 'expense',
                'category' => 'Operasional',
                'description' => 'Biaya internet dan telepon kantor',
                'amount' => 600000,
                'transaction_date' => '2026-03-09',
                'payment_method' => 'Transfer Bank',
                'notes' => 'Tagihan bulan Maret',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        Transaction::insert($transactions);
    }
}
