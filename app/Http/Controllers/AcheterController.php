<?php

namespace App\Http\Controllers;
use App\Models\Acheter;
use App\Models\Barrage;
use App\Models\User;
use App\Models\Retrait;



use Illuminate\Http\Request;

class AcheterController extends Controller
{
    public function confirmAchat(Request $request, $id)
    {

        if($id>6){
            return redirect("/barrage")->with('error', 'Barrage non trouvé.');

        }
        // Récupérer les données du barrage
        $barrage = Barrage::find($id);

        if (!$barrage) {
            return redirect()->back()->with('error', 'Barrage non trouvé.');
        }

        // Valider le montant
        $request->validate([
            'montan' => 'required|integer|min:'.$barrage->somDebut .'|max:'.$barrage->somFin,
        ]);

        // Sauvegarder l'achat
        $revenu=($request->montan*650*$barrage->Pourcentage)/100;
        $achat = new Acheter();
        $achat->id_user_acheter = auth()->id(); 
        $achat->revenu_jour = $revenu; 
        $achat->id_machine_acheter = $barrage->id;
        if ($request->montan*650 > Auth::User()->solde_user ) {
            return redirect()->back()->with('error', 'solde insufisant veillez recharher votre compte!!');
        }
        $achat->montan_achat = $request->montan*650;
        $achat->save();

        return redirect("/MesBarrages")->with('success', 'Achat confirmé.');
    }
}
