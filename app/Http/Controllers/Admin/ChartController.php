<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    public function index()
    {
        $company = Auth::user()->company;

        // Total price data
        $totalOrders = Order::whereHas('products', function ($query) use ($company) {
                $query->where('company_id', $company->id);
            })
            ->select(DB::raw('YEAR(COALESCE(date, created_at)) year, MONTH(COALESCE(date, created_at)) month, SUM(total_price) total'))
            ->groupBy('year', 'month')
            ->orderBy('year', 'asc')
            ->orderBy('month', 'asc')
            ->get();

        $totalLabels = [];
        $totalData = [];

        foreach ($totalOrders as $order) {
            $monthName = strftime('%B', mktime(0, 0, 0, $order->month, 1, $order->year));
            $totalLabels[] = $monthName . ' ' . $order->year;
            $totalData[] = $order->total;
        }

        // Order count data
        $countOrders = Order::whereHas('products', function ($query) use ($company) {
                $query->where('company_id', $company->id);
            })
            ->select(DB::raw('YEAR(COALESCE(date, created_at)) year, MONTH(COALESCE(date, created_at)) month, COUNT(*) as count'))
            ->groupBy('year', 'month')
            ->orderBy('year', 'asc')
            ->orderBy('month', 'asc')
            ->get();

        $countLabels = [];
        $countData = [];

        foreach ($countOrders as $order) {
            $monthName = strftime('%B', mktime(0, 0, 0, $order->month, 1, $order->year));
            $countLabels[] = $monthName . ' ' . $order->year;
            $countData[] = $order->count;
        }

        return view('admin.stats', compact('totalLabels', 'totalData', 'countLabels', 'countData'));
    }
}
