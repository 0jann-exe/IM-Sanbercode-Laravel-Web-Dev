    <?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\DashboardController;
    use App\Http\Controllers\FormController;
    use App\Http\Controllers\CategoriController;

    Route::get('/', [DashboardController::class, 'theFirst']);
    Route::get('/form', [FormController::class, 'regis']);
    Route::post('/welcome', [FormController::class, 'selamatDatang']);

    Route::get('/master', function() {
        return view('layout.master');
    });

    //C
    Route::get('/category/create', [CategoriController::class, 'create']);
    Route::post('/category', [CategoriController::class, 'insert']);

    //R
    Route::get('/category', [CategoriController::class, 'index']);
    Route::get('/category/{id}', [CategoriController::class, 'show']);

    //U
    Route::get('/category/{id}/edit', [CategoriController::class, 'edit']);
    Route::put('/category/{id}', [CategoriController::class, 'update']);

    //D
    Route::delete('/category/{id}', [CategoriController::class, 'del']);
