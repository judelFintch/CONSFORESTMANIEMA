<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:100',
            'email'     => 'required|email|max:150',
            'phone'     => 'nullable|string|max:30',
            'subject'   => 'required|string|max:200',
            'message'   => 'required|string|min:10|max:2000',
        ], [
            'full_name.required' => 'Le nom complet est requis.',
            'email.required'     => 'L\'adresse e-mail est requise.',
            'email.email'        => 'Veuillez saisir une adresse e-mail valide.',
            'subject.required'   => 'Le sujet est requis.',
            'message.required'   => 'Le message est requis.',
            'message.min'        => 'Le message doit contenir au moins 10 caractères.',
        ]);

        Contact::create($validated);

        if ($request->expectsJson()) {
            return response()->json(['message' => 'Votre message a été envoyé avec succès. Nous vous répondrons sous 48h.']);
        }

        return back()->with('success', 'Votre message a été envoyé avec succès !');
    }
}
