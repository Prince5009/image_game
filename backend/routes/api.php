// routes/api.php
<?php
// API routes
    use App\Http\Controllers\Api\AuthController;

Route::post('/register', [AuthController::class, 'register']);
