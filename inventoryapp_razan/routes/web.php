    <?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\DashboardController;
    use App\Http\Controllers\FormController;

    Route::get('/', [DashboardController::class, 'theFirst']);
    Route::get('/form', [FormController::class, 'regis']);
    Route::post('/welcome', [FormController::class, 'selamatDatang']);
