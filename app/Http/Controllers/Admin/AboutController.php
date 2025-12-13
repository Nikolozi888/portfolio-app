<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\Repositories\AboutRepositoryInterface;
use App\DTOs\AboutDTO;
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
        $AboutDTO = AboutDTO::fromRequest($request);
       
        $this->aboutRepository->createAbout($AboutDTO->toArray());

        $message = 'About Information Created Successfully';
        return $this->successRedirect('admin.about.index', $message);
    }

    public function edit(About $about)
    {
        return view('admin.about.edit', compact('about'));
    }

    public function update(AboutRequest $request, $id)
    {
        $about = $this->aboutRepository->findAbout($id);

        $AboutDTO = AboutDTO::fromRequest($request);

        $this->aboutRepository->updateAbout($about, $AboutDTO->toArray());

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
