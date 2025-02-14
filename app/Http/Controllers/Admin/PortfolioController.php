<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PortfolioRequest;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::all();

        return view('admin.portfolios.index', compact('portfolios'));
    }

    public function create()
    {
        return view('admin.portfolios.create');
    }

    public function store(PortfolioRequest $request)
    {
        $attributes = $request->validated();

        if ($request->hasFile('image')) {
            $uniqueName = uniqid() . '-' . $request->file('image')->getClientOriginalName();
            $imagePath = $request->file('image')->storeAs('images', $uniqueName, 'public');
            $attributes['image'] = 'storage/' . $imagePath;
        }

        Portfolio::create($attributes);

        $message = array('message' => 'Portfolio Created Successfully', 'type' => 'success');
        return redirect()->route('admin.portfolios.index')->with($message);
    }

    public function edit(Portfolio $portfolio)
    {
        return view('admin.portfolios.edit', compact('portfolio'));
    }

    public function update(PortfolioRequest $request, Portfolio $portfolio)
    {
        $attributes = $request->validated();

        if ($request->hasFile('image')) {
            $uniqueName = uniqid() . '-' . $request->file('image')->getClientOriginalName();
            $imagePath = $request->file('image')->storeAs('images', $uniqueName, 'public');
            $attributes['image'] = 'storage/' . $imagePath;
        } else {
            $attributes['image'] = $portfolio->image;
        }

        $portfolio->update($attributes);

        $message = array('message' => 'Portfolio Updated Successfully', 'type' => 'success');
        return redirect()->route('admin.portfolios.index')->with($message);
    }

    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();

        $message = array('message' => 'Portfolio Deleted Successfully', 'type' => 'success');
        return redirect()->route('admin.portfolios.index')->with($message);
    }
}
