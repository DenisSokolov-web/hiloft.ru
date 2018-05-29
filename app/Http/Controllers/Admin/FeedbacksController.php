<?php

namespace App\Http\Controllers\Admin;

use App\Feedback;
use App\Hotel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BaseController;

class FeedbacksController extends BaseController
{
    protected $template = 'admin.hotels.feedbacks.';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Hotel $hotel)
    {
        $this->template .= 'index';

        $this->vars = array_add($this->vars, 'hotel', $hotel);

        $feedbacks = $hotel->feedbacks;
        $this->vars = array_add($this->vars, 'feedbacks', $feedbacks);

        return $this->renderOutput();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Hotel $hotel)
    {
        $file = $request->photo_src;

        $data = $request->except(['form_name', '_token']);

        if ($file)
        {
            $file_name =  str_slug($request->name) . $file->getClientOriginalName();
            $path = 'public/img/feedbacks/';
            $file = $file->move($path, $file_name);
            $data['photo_src'] = $file_name;
        } else {
            $data['photo_src'] = null;
        }

        $hotel->feedbacks()->create($data);

        return redirect()->route('hotel', $hotel->slug);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotel $hotel, Feedback $feedback)
    {
        $this->template .= 'edit';

        $this->vars = array_add($this->vars, 'hotel', $hotel);
        $this->vars = array_add($this->vars, 'feedback', $feedback);

        return $this->renderOutput();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hotel $hotel, Feedback $feedback)
    {
        $request->validate(
            [
                'name' => 'bail|required|string',
                'text' => 'bail|required|string'
            ]
        );

        $feedback->update($request->all());

        return redirect()->route('hotels.feedbacks.index', $hotel->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotel $hotel, Feedback $feedback)
    {
        $feedback->destroy($feedback->id);

        return redirect()->back();
    }
}
