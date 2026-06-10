<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ConservationController;
use App\Http\Controllers\CarbonController;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PartnersController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CertificationController;

// Accueil
Route::get('/', [HomeController::class, 'index'])->name('home');

// À propos
Route::get('/a-propos', [AboutController::class, 'index'])->name('about');

// Conservation forestière
Route::get('/conservation-forestiere', [ConservationController::class, 'index'])->name('conservation');

// Crédit carbone
Route::get('/credit-carbone', [CarbonController::class, 'index'])->name('carbon');

// Impact communautaire
Route::get('/impact-communautaire', [CommunityController::class, 'index'])->name('community');

// Galerie
Route::get('/galerie', [GalleryController::class, 'index'])->name('gallery');

// Actualités
Route::get('/actualites', [NewsController::class, 'index'])->name('news.index');
Route::get('/actualites/{slug}', [NewsController::class, 'show'])->name('news.show');

// Partenaires
Route::get('/partenaires', [PartnersController::class, 'index'])->name('partners');

// Certification REDD+ et Crédit Carbone
Route::get('/certification-credit-carbone', [CertificationController::class, 'index'])->name('certification');

// Contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
