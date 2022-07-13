<?php

namespace App\Exceptions;

use App\Models\Categorie;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\URL;
use InvalidArgumentException;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
       
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
         // return $exception;
         $this->renderable(function (QueryException $e,  $request) {
            //  dd($e);

            var_dump($e->getCode());
            return;
            $categorias = Categorie::all();
 
            return response()->view(URL::current().'.index', 
            [
                'mensaje'=>'El nombre del producto ya existe', 
                'producto'=>$request, 
                'categorias'=>$categorias,
                'color'=>"warning"
            ], 500);
        });

         $this->renderable(function (RouteNotFoundException $e,  $request) {
             // dd($e);

            $request = $_REQUEST;
            return redirect()->route('admin.productos.index');
        });
        
        $this->renderable(function (InvalidArgumentException $e,  $request) {
             // dd($e);

            $request = $_REQUEST;
            return redirect()->route('admin.productos.index');
        });

        
        
        
        
        
        //  $this->reportable(function (QueryException $e) {
            
        //         return $e->getMessage();
            
            
        //     
        // })->stop();
    }
}
