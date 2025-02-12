<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FeedbackRequest;
use App\Models\Feedback;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index() {

        $feedbacks = Feedback::all();

        return view('admin.feedbacks.index', compact('feedbacks'));
    }
    public function create() {
        return view('admin.feedbacks.create');
    }

    public function store(FeedbackRequest $request) {
        $attributes = $request->validated();

        $current_timestamp = Carbon::now()->timestamp;

        $gallery_images = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $index => $file) {
                $file_name = $current_timestamp . "-" . ($index + 1) . '.' . $file->extension();
                $path = $file->storeAs('images', $file_name, 'public');
                $gallery_images[] = $path;
            }
        }

        $attributes['images'] = implode(',', $gallery_images);

        Feedback::create($attributes);

        $message = array('message' => 'Feedback Created SuccessFully', 'type' => 'success');
        return redirect()->route('admin.feedbacks.index')->with($message);
    }

    public function edit(Feedback $feedback) {
        return view('admin.feedbacks.edit', compact('feedback'));
    }

    public function update(FeedbackRequest $request, Feedback $feedback) {
        $attributes = $request->validated();



        $current_timestamp = Carbon::now()->timestamp;

        $gallery_images = [];

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $index => $file) {
                $file_name = $current_timestamp . "-" . ($index + 1) . '.' . $file->extension();
                $path = $file->storeAs('images', $file_name, 'public');
                $gallery_images[] = $path;
            }
        }

        if (!empty($gallery_images)) {
            $attributes['images'] = implode(',', $gallery_images);
        } else {
            $attributes['images'] = $feedback->images;
        }


        $feedback->update($attributes);

        $message = array('message' => 'Feedback Updated SuccessFully', 'type' => 'success');
        return redirect()->route('admin.feedbacks.index')->with($message);
    }

    public function destroy(Feedback $feedback) {
        $feedback->delete();

        $message = array('message' => 'Feedback Deleted SuccessFully', 'type' => 'success');
        return redirect()->route('admin.feedbacks.index')->with($message);
    }
}
