<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
class clientController extends Controller
{
    public function choix(){
        return view("client.choix");
    }

    public function register(){
        return view("client.register");
    }

    public function end(){
        return view("client.endbar");
    }

    public function compte(){
        return view("client.compte");
    }

    //Controller Kevin

    public function signin(){
        return view('client.files.signin');
    }

    public function acceuil(){
        return view('client.files.acceuil');
    }

    public function inviter(){
        return view('client.files.inviter');
    }

    public function recharger(){
        return view('client.files.recharger');
    }

    public function rechargeMtn(){
        return view('client.files.rechargeMtn');
    }

    public function rechargeOr(){
        return view('client.files.rechargeOr');
    }

    public function usdt(){
        return view('client.files.usdt');
    }

    public function barrage(){
        return view('client.files.barrage');
    }

    public function MesBarrages(){
        return view('client.files.MesBarrages');
    }
    
    public function ConfirmeAchat(){
        return view('client.files.ConfirmeAchat');
    }

    public function retrait(){
        return view('client.files.retrait');
    }

    public function retraitMtn_Or(){
        return view('client.files.retraitMtn_Or');
    }

    public function MesRecharges(){
        return view('client.files.MesRecharges');
    }

    public function MesRetraits(){
        return view('client.files.MesRetraits');
    }

    public function video(){
        return view('client.files.video');
    }

    public function moyen_ajouter(){
        return view('client.files.moyen_ajouter');
    }

    public function retrait_ajouter(){
        return view('client.files.retrait_ajouter');
    }


///////////////////create user\\\\\\\\\\\\\\\\\\\\\\

    public function createUser(Request $request){
        $request->validate([
            'nom' => 'required|string|max:255',
            'telephone' => 'required|integer|unique:users',
            'motpass' => 'required|string|min:6',
            'codeParain' => 'nullable|integer',
            'motpassconfirme' => 'required|string|min:6',

        ]);

        
        if ($request->motpass !== $request->motpassconfirme) {
            return back()->with('erreur','les deux mots de passes doivent etre identique');

        }else{

                // Créer un nouvel utilisateur
            $utilisateur = new User();
            $utilisateur->nom = $request->input('nom');
            $utilisateur->telephone = $request->input('telephone');
          //  $utilisateur->motpass = $request->input('motpass');
            $utilisateur->motpass = bcrypt($request->input("motpass"));

            $utilisateur->codeparain = $request->input('codeparain');
            $utilisateur->save();
            return back()->with('status','utilisateur cree avec success');
        }

        

    
    }



    public function connexiona(LoginRequest $request)
    {
        $request->validate([
            'telephone' => 'required|string',
            'motpass' => 'required|string|min:6',
        ]);

        // Tenter d'authentifier l'utilisateur
       $user=User::where('telephone',$request->input('telephone'))->first();
       if($user){
            if(Hash::check($request->input('motpass'), $user->motpass)){
                 $request->session()->put('user',$user);
                return redirect('/acceuil');
            }else{
                 return back()->with('erreur','numero ou mot de pass encorect');

            }  
            return back()->with('erreur','desole vous n avez pas de compte avec ce numero');

       }

    
    }


  
    // Gérer la connexion
    public function connexion(LoginRequest $request)
    {
        $credentials = $request->validated();
    
        $credentials = [
            'telephone' => $credentials['telephone'],
            'password' => $credentials['motpass'], 
        ];
    
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('acceuil'));

        }
    
        return to_route('connexion')->with('erreur','numero ou mots de passe invalide');
    }


    





}
