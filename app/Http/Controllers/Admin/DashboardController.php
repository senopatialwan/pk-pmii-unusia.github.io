<?php
namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Blog;
use App\Models\Anggota;
use App\Models\Pengurus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function __invoke(Request $request)
    {
        // Menghitung jumlah data dari masing-masing model
        $userCount = User::count();
        $blogCount = Blog::count();
        $anggotaCount = Anggota::count();
        $pengurusCount = Pengurus::count();

        // Logika untuk chart user
        $userChartData = User::selectRaw('YEAR(created_at) as year, COUNT(*) as count')->groupBy('year')->orderBy('year')->pluck('count', 'year');

        // Logika untuk chart blog
        $blogChartData = Blog::selectRaw('MONTH(created_at) as month, COUNT(*) as count')->whereYear('created_at', date('Y'))->groupBy('month')->orderBy('month')->pluck('count', 'month');

        // Logika untuk chart anggota
        $anggotaChartData = Anggota::selectRaw('YEAR(created_at) as year, COUNT(*) as count')->groupBy('year')->orderBy('year')->pluck('count', 'year');

        // Logika untuk chart pengurus
        $pengurusChartData = Pengurus::selectRaw('YEAR(created_at) as year, COUNT(*) as count')->groupBy('year')->orderBy('year')->pluck('count', 'year');

        return view('admin.dashboard', compact('userCount', 'blogCount', 'anggotaCount', 'pengurusCount', 'userChartData', 'blogChartData', 'anggotaChartData', 'pengurusChartData'));
    }
}
