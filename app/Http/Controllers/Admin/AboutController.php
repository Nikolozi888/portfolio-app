<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\Repositories\AboutRepositoryInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\AboutRequest;
use App\Models\About;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __construct(
        public AboutRepositoryInterface $aboutRepository,
    )
    {}

    public function index()
    {
        $about = $this->aboutRepository->getAbout();

        return view('admin.about.index', compact('about'));
    }

    public function create()
    {
        return view('admin.about.create');
    }

    public function store(AboutRequest $request)
    {
        $attributes = $request->validated();

       
        $this->aboutRepository->createAbout($attributes);

        $message = array('message' => 'About Information Created Successfully', 'type' => 'success');

        return redirect()->route('admin.about.index')->with($message);
    }

    public function edit(About $about)
    {
        return view('admin.about.edit', compact('about'));
    }

    public function update(AboutRequest $request, $id)
    {
        $about = $this->aboutRepository->findAbout($id);

        $attributes = $request->validated();

        $this->aboutRepository->updateAbout($about, $attributes);

        $message = array('message' => 'About Information Updated Successfully', 'type' => 'success');
        return redirect()->route('admin.about.index')->with($message);
    }



    public function destroy(About $about)
    {
        $this->aboutRepository->deleteAbout($about);

        $message = array('message' => 'About Information Deleted SuccessFully', 'type' => 'success');
        return redirect()->route('admin.about.index')->with($message);
    }
}
