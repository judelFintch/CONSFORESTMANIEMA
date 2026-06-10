<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsletterController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => ['required', 'email', 'max:255'],
        ]);

        $email = strtolower(trim($validated['email']));
        $file  = 'newsletter.json';

        $list = Storage::exists($file)
            ? (json_decode(Storage::get($file), true) ?? [])
            : [];

        if (in_array($email, $list)) {
            return response()->json([
                'message' => 'Vous êtes déjà inscrit à notre newsletter.',
                'already' => true,
            ]);
        }

        $list[] = $email;
        Storage::put($file, json_encode($list, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

        return response()->json([
            'message' => 'Inscription confirmée ! Merci de votre intérêt pour ConsForest Maniema.',
        ]);
    }
}
