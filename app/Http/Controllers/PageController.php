<?php
namespace App\Http\Controllers;

use App\Models\Advertisement;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __invoke()
    {
        $ads = Advertisement::all();
        return view('home', ['ads' => $ads]);
    }

    public function index()
    {
        $ads = Advertisement::all();
        return view('home', ['ads' => $ads]);
    }
    public function admin_manage()
    {
        return view('admin.index');
    }
}
