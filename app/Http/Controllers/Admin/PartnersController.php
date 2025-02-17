<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PartnerRequest;
use App\Models\Partners;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PartnersController extends Controller
{
    public function index()
    {
        $partners = Partners::all();

        return view('admin.partners.index', compact('partners'));
    }
    public function create()
    {
        return view('admin.partners.create');
    }

    public function store(PartnerRequest $request)
    {
        $attributes = $request->validated();

        Partners::create($attributes);

        $message = array('message' => 'Partner Created SuccessFully', 'type' => 'success');
        return redirect()->route('admin.partners.index')->with($message);
    }

    public function edit(Partners $partner)
    {
        return view('admin.partners.edit', compact('partner'));
    }

    public function update(PartnerRequest $request, Partners $partner)
    {
        $attributes = $request->validated();
        
        $partner->update($attributes);

        $message = array('message' => 'Partner Updated SuccessFully', 'type' => 'success');
        return redirect()->route('admin.partners.index')->with($message);
    }

    public function destroy(Partners $partner)
    {
        $partner->delete();

        $message = array('message' => 'Partner Deleted SuccessFully', 'type' => 'success');
        return redirect()->route('admin.partners.index')->with($message);
    }
}
