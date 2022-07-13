<?php

use App\Http\Controllers\CarritoController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CommuneController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\TypepaymentController;
use App\Http\Controllers\ShippingvalueController;
use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\MeasureController;
use App\Http\Controllers\MeasureproductController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

    //Pagina web
    Route::get('/', [PageController::class, 'index'])->name('web');
    Route::get('/home', [PageController::class, 'index'])->name('web.home');
    Route::get('/catalogos', [PageController::class, 'catalogos'])->name('web.catalogos.index');
    Route::get('/catalogos/{categoria}', [PageController::class, 'filtra'])->name('web.catalogos.filtra');
    Route::get('/producto/{producto}', [PageController::class, 'mostrarProducto'])->name('web.producto.show');

    Route::get('/carritos/{user}', [CarritoController::class, 'mostrarCarrito'])->name('web.carritos.show');
    Route::post('/carritos', [CarritoController::class, 'store'])->name('web.carritos.store');
    Route::delete('/carritos/{carrito}', [CarritoController::class, 'destroy'])->name('web.carritos.destroy');
    
    Route::get('/empresa', [PageController::class, 'empresa'])->name('web.empresa');
    Route::get('/politicas', [PageController::class, 'politicas'])->name('web.politicas');

    // envio de correo
    Route::get('/contactanos', [ContactanosController::class, 'index'])->name('web.contactanos.index');
    Route::post('/contactanos', [ContactanosController::class, 'store'])->name('web.contactanos.store');


    Route::middleware(['auth:sanctum', 'verified', 'rol'])->prefix('admin')->group(function (){
       
        // navegacion de admin
        // Route::view('/categorias', 'admin.categorias.index');
        // Route::view('/cpanel', 'admin.index')->name('admin.index');
        
        //acciones 
        Route::resource('/files', FileController::class)->names('admin.files');
        Route::resource('/medidasproductos', MeasureproductController::class)->names('admin.medidasproductos');
        Route::get('/medidasproducto/crear/{producto}', [MeasureproductController::class, 'create'])->name('admin.medidasproducto.crear');
        Route::resource('/medidas', MeasureController::class)->names('admin.medidas');
        Route::resource('/productos', ProductController::class)->names('admin.productos');
        Route::resource('/categorias', CategorieController::class)->names('admin.categorias');

        // Route::post('/categorias/file', [CategorieController::class, 'file'])->name('admin.categorias.file');
        // Route::post('/categorias/file/delete', [CategorieController::class, 'delete'])->name('admin.categorias.delete');

        Route::resource('/provincias', ProvinceController::class)->names('admin.provincias');
        Route::resource('/comunas', CommuneController::class)->names('admin.comunas');
        Route::resource('/tiposdepagos', TypepaymentController::class)->names('admin.tiposdepagos');
        Route::resource('/preciosdedespachos', ShippingvalueController::class)->names('admin.preciosdedespachos');

        Route::resource('/regiones', RegionController::class)
        ->parameters(['regiones' => 'region'])
        ->names('admin.regiones');

    });   
   
    Route::middleware(['auth:sanctum', 'verified', 'rol'])->get('/admin', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::middleware(['auth:sanctum', 'verified', 'rol'])->get('/dashboard', function () {
        return view('dashboard');
    })->name('admin');



    // Route::get('/categorias/{categoria}', [CategorieController::class, 'destroy'])->name('categorias.destroy');
    // Route::resource('/categorias', CategorieController::class)
    // en caso de necesitar cambia la url por x causa usamos
    // ->parameters(['categorias' => 'cat']) esto sirve para definir la variable que se va arecibir en la ruta
    // ->names('catego'); esto sirve para definir el nombre de la ruta 

 
