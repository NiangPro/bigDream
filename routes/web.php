<?php

use App\Livewire\Agences;
use App\Livewire\Cart;
use App\Livewire\Checkout;
use App\Livewire\Contact;
use App\Livewire\Dashboard;
use App\Livewire\Home;
use App\Livewire\Login;
use App\Livewire\NotFound;
use App\Livewire\Shop;
use App\Livewire\SingleProduct;
use App\Livewire\Super;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', Home::class)->name("home");
Route::get('/boutique', Shop::class)->name("shop");
Route::get('/contact', Contact::class)->name("contact");
Route::get('/produit', SingleProduct::class)->name("single_product");
Route::get('/panier', Cart::class)->name("cart");
Route::get('/commande', Checkout::class)->name("checkout");
Route::get('/connexion', Login::class)->name("login");
Route::get('/dashboard', Dashboard::class)->name("dashboard");
Route::get('/dashboard_superadmin', Super::class)->name("superadmin");
Route::get('/agences', Agences::class)->name("agence");

Route::fallback(NotFound::class)->name("notfound");
