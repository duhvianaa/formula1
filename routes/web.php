<?php
use App\Http\Controllers\ResultadoController;
use App\Http\Controllers\ProfileController;
use App\Models\Resultado;   
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/dashboard',[ResultadoController::class,'mostra_corridas'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/jogos', function () {
    return view('jogos');
})->name('jogos');

Route::get('/equipes',[ResultadoController::class,'equipes'])->name('equipes');

route::get('/resultado',[ResultadoController::class,'resultado'])->name('resultado');

Route::post('/salvar/resultado',[ResultadoController::class,'salva_resultado'])->name('resultado_salvar');

Route::post('/salvar/mostra_corridas_filtro',[ResultadoController::class,'mostra_corridas_filtro'])->name('mostra_corridas_filtro');

Route::post('/salvar/mostra_equipes_filtro',[ResultadoController::class,'mostra_equipes_filtro'])->name('mostra_equipes_filtro');

Route::get('/alterar_resultado/{id}',[ResultadoController::class,'altera_resultado'])->name('alterar_resultado');

route::post('/muda_resultado',[ResultadoController::class,'muda_resultado'])->name('imundo');

route::get('/deleta_resultado/{id}',[ResultadoController::class,'deleta_resultado'])->name('deleta_resultado');

Route::get('/corridas', [ResultadoController::class, 'corridas'])->name('corridas');

Route::delete('/deleta', [ResultadoController::class, 'deleta'])->name('deleta');

route::get('/criarequipe',[ResultadoController::class,'criar_equipe'])->name('criar_equipe');

Route::post('/salvar/equipe',[ResultadoController::class,'salva_equipe'])->name('resultado_equipe');
