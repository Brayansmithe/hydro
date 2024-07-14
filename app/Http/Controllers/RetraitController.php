<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Retrait;
use Illuminate\Http\Request;

class RetraitController extends Controller
{
    public function storeMoyenRetrait(Request $request,$id)
    {
        $validatedData = $request->validate([
            'nom_de_carte' => 'required|string|max:255',
            'moyen_de_retrait' => 'required|string|max:255',
            'numero_de_carte' => 'nullable|integer',
            'adresse_usdt' => 'nullable|string|max:255',
        ]);

       // $carte = Carte::create($validatedData);

       $user=User::find($id);
       if ($user->moyen_retrait) {
        return redirect()->back()->with('erreur', 'vous avez deja lier une carte veillez contavter le sevice client si vous vouler changer');

       } else {
       
        $user->nom_carte = $request->input('nom_de_carte');
        $user->moyen_retrait = $request->input('moyen_de_retrait');
        $user->numero_retrait = $request->input('numero_de_carte') ?? null;
        $user->numero_retrait_address = $request->input('adresse_usdt') ?? null;

        $user->save();
        return redirect()->back()->with('success', 'Carte ajoutée avec succès!');

       }
       
    }

    public function RetraitStore(Request $request, $id)
    {
        // Valider les données de la requête
        $validatedData = $request->validate([
            'montant' => 'required|integer',
        ]);
    
        // Trouver l'utilisateur par son ID
        $user = User::find($id);
    
        if (!$user) {
            return redirect()->back()->with('erreur', 'Utilisateur non trouvé');
        }
    
        $soldeRetrait = $request->input('montant');
    
        // Vérifier les conditions de retrait
        if ($user->solde_user < $soldeRetrait) {
            return redirect()->back()->with('erreur', 'Solde insuffisant, veuillez recharger votre compte');
        } elseif ($soldeRetrait < 3250) {
            return redirect()->back()->with('erreur', 'Le retrait minimum est de 3250');
        } else {
            // Créer une nouvelle instance de Retrait
            $retrait = new Retrait();
            $retrait->montant_retrait = $soldeRetrait;
            $retrait->id_user_retrait = $user->id;
            $retrait->moyen_retrait = $user->moyen_retrait;
    
            // Déterminer l'adresse de retrait
            if ($user->numero_retrait) {
                $retrait->adresse_retrait = $user->numero_retrait;
            } else {
                $retrait->adresse_retrait = $user->numero_retrait_address;
            }
    
            // Mettre à jour le solde de l'utilisateur
            $user->solde_user -= $soldeRetrait;
            $user->save();
    
            // Enregistrer le retrait
            $retrait->save();
    
            return redirect()->back()->with('success', 'Votre retrait a été effectué avec succès et est en cours de traitement');
        }
    }
    

}
