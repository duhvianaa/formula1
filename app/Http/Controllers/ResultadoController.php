<?php

namespace App\Http\Controllers;
use App\Models\Resultado;
use Illuminate\Http\Request;
use App\Http\Criarequipe;
use App\Models\Criarequipe as ModelsCriarequipe;

class ResultadoController extends Controller
{
    public function resultado(request $request)
    {
        return view('resultado');
    }

    public function salva_resultado(Request $request)
    {
        $resultado = new Resultado();
        $resultado->premio = $request->input('premio');
        $resultado->ganhador = $request->input('ganhador');
        $resultado->equipe = $request->input('equipe');
        $resultado->tempo = $request->input('tempo');
        $resultado->voltas = $request->input('voltas');
        $resultado->data = $request->input('data');
        $resultado->imagem = $request->input('imagem');
        $resultado->save();

        return redirect('/resultado')->with('success', 'Resultado cadastrado com sucesso!');
    }

    public function muda_resultado(Request $request)
    {
        $resultado = Resultado::find($request->id);
        $resultado->premio = $request->input('premio');
        $resultado->ganhador = $request->input('ganhador');
        $resultado->equipe = $request->input('equipe');
        $resultado->tempo = $request->input('tempo');
        $resultado->voltas = $request->input('voltas');
        $resultado->data = $request->input('data');
        $resultado->save();

        return redirect('/resultado')->with('success', 'Resultado alterado com sucesso!');
    }

    public function altera_resultado($id)
    {
       
        $resultado = Resultado::find($id);

        return view('alterar_resultado')->with('resultado', $resultado);
    }

    public function deleta_resultado($id)
    {
       
        $resultado = Resultado::find($id);

        return view('deleta_resultado')->with('resultado', $resultado);
    }

    public function corridas()
    {
        $resultados = Resultado::get()->all();
        return view('corridas', ['ganhadores' => $resultados]);
    }

     public function deleta(Request $request)
    {
        resultado::where('id', $request->id)->delete();

        return redirect('/resultado');
    }

    public function mostra_corridas(Request $request){
        
        $resultado = resultado::limit(3)->orderByDesc('id')->get()->all();

        return view('dashboard')->with( 'resultado', $resultado);
    }

    public function mostra_corridas_filtro(Request $request){
       $resultados = Resultado::where('premio','LIKE','%'.$request->grande_premio.'%')->get()->all();
      
        return view('corridas', ['ganhadores' => $resultados]);
    }

    public function mostra_equipes_filtro(Request $request){
       $resultados = Resultado::where('equipe','LIKE','%'.$request->equipe.'%')->get()->all();
      
        return view('corridas', ['ganhadores' => $resultados]);
    }

    public function salva_equipe(Request $request)
    {
        $equipe = new ModelsCriarequipe();
        $equipe->equipe = $request->input('equipe');
        $equipe->corredor1 = $request->input('corredor1');
        $equipe->corredor2 = $request->input('corredor2');
        $equipe->imagem = $request->input('imagem');
        $equipe->cor = $request->input('cor');
        $equipe->save();

        return redirect('/criarequipe')->with('success', 'Equipe criada com sucesso!');
    }

    public function criar_equipe(request $request)
    {
       
        return view('criar_equipe');
    }

    public function equipes(Request $request){
         $equipes = ModelsCriarequipe::get()->all();
         return view('equipes')->with('equipes',$equipes);

    }
}