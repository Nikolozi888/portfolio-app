<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index() {

        $portfolios = Portfolio::paginate(5);

        return view('user.portfolio.index', compact('portfolios'));
    }

    public function show($id) {
        $portfolio = Portfolio::findOrFail($id);

        return view('user.portfolio.show', compact('portfolio'));
    }
}
