<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transactions = Transaction::orderBy('transaction_date', 'desc')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        // Hitung total pemasukan dan pengeluaran
        $totalIncome = Transaction::where('type', 'income')->sum('amount');
        $totalExpense = Transaction::where('type', 'expense')->sum('amount');
        $balance = $totalIncome - $totalExpense;

        return view('admin.transactions.index', compact('transactions', 'totalIncome', 'totalExpense', 'balance'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.transactions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'type' => 'required|in:income,expense',
            'category' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0',
            'transaction_date' => 'required|date',
            'payment_method' => 'nullable|string|max:255',
            'notes' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Generate kode transaksi
        $transactionCode = 'TRX-' . date('Ymd') . '-' . strtoupper(substr(uniqid(), -6));

        Transaction::create([
            'transaction_code' => $transactionCode,
            'type' => $request->type,
            'category' => $request->category,
            'description' => $request->description,
            'amount' => $request->amount,
            'transaction_date' => $request->transaction_date,
            'payment_method' => $request->payment_method,
            'notes' => $request->notes,
        ]);

        return redirect()->route('transaction.index')
            ->with('success', 'Transaksi berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $transaction = Transaction::find($id);

        if (!$transaction) {
            return redirect()->route('transaction.index')
                ->with('error', 'Transaksi tidak ditemukan!');
        }

        return view('admin.transactions.show', compact('transaction'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $transaction = Transaction::find($id);

        if (!$transaction) {
            return redirect()->route('transaction.index')
                ->with('error', 'Transaksi tidak ditemukan!');
        }

        return view('admin.transactions.edit', compact('transaction'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'type' => 'required|in:income,expense',
            'category' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0',
            'transaction_date' => 'required|date',
            'payment_method' => 'nullable|string|max:255',
            'notes' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $transaction = Transaction::find($id);

        if (!$transaction) {
            return redirect()->route('transaction.index')
                ->with('error', 'Transaksi tidak ditemukan!');
        }

        $transaction->update([
            'type' => $request->type,
            'category' => $request->category,
            'description' => $request->description,
            'amount' => $request->amount,
            'transaction_date' => $request->transaction_date,
            'payment_method' => $request->payment_method,
            'notes' => $request->notes,
        ]);

        return redirect()->route('transaction.index')
            ->with('success', 'Transaksi berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $transaction = Transaction::find($id);

        if (!$transaction) {
            return redirect()->route('transaction.index')
                ->with('error', 'Transaksi tidak ditemukan!');
        }

        $transaction->delete();

        return redirect()->route('transaction.index')
            ->with('success', 'Transaksi berhasil dihapus!');
    }

    /**
     * Laporan pembukuan berdasarkan filter
     */
    public function report(Request $request)
    {
        $query = Transaction::query();

        // Filter berdasarkan tanggal
        if ($request->has('start_date') && $request->start_date) {
            $query->where('transaction_date', '>=', $request->start_date);
        }

        if ($request->has('end_date') && $request->end_date) {
            $query->where('transaction_date', '<=', $request->end_date);
        }

        // Filter berdasarkan tipe
        if ($request->has('type') && $request->type) {
            $query->where('type', $request->type);
        }

        // Filter berdasarkan kategori
        if ($request->has('category') && $request->category) {
            $query->where('category', 'like', '%' . $request->category . '%');
        }

        $transactions = $query->orderBy('transaction_date', 'desc')->get();

        // Hitung total
        $totalIncome = Transaction::where('type', 'income')
            ->when($request->has('start_date') && $request->start_date, function ($q) use ($request) {
                return $q->where('transaction_date', '>=', $request->start_date);
            })
            ->when($request->has('end_date') && $request->end_date, function ($q) use ($request) {
                return $q->where('transaction_date', '<=', $request->end_date);
            })
            ->sum('amount');

        $totalExpense = Transaction::where('type', 'expense')
            ->when($request->has('start_date') && $request->start_date, function ($q) use ($request) {
                return $q->where('transaction_date', '>=', $request->start_date);
            })
            ->when($request->has('end_date') && $request->end_date, function ($q) use ($request) {
                return $q->where('transaction_date', '<=', $request->end_date);
            })
            ->sum('amount');

        $balance = $totalIncome - $totalExpense;

        return view('admin.transactions.report', compact('transactions', 'totalIncome', 'totalExpense', 'balance'));
    }
}
