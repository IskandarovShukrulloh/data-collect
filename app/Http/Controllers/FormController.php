<?php

namespace App\Http\Controllers;
use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{

//    public function login()
//    {
//        return view('forms.login');
//    }

    public function index()
    {
//        $forms = Form::with('user');
//        dd($forms);

        $forms = Form::all();
        return view('forms.index', compact('forms'));
    }

    public function create()
    {
        return view('forms.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|min:1|max:30',
            'description' => 'required|min:1|max:1000',

        ]);
        Form::create($validated);
        //dd($forms);
        return redirect()->route('forms.index');
    }


    public function show(Form $form)
    {
        return view('forms.show', compact('form'));
    }

    public function edit(Form $form)
    {
        return view('forms.edit', compact('form'));
    }

    public function update(Request $request, Form $form)
    {
        ;$form->update($request->all());
        //dd($request->all());
        return redirect()->route('forms.index');

    }

    public function destroy(Form $form)
    {
        $form->delete();
        return redirect()->route('forms.index');
    }
}
