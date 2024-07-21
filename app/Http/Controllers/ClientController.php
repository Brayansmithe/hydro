<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Recharge;
use App\Models\Retrait;
use App\Models\Barrage;

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

    public function registern(){
        return view("client.register");
    }

    public function register($parainage){


        return view("client.register")->with('parainage',$parainage);
    }

    public function end(){
        return view("client.endbar");
    }

    public function compte(){

        $users = User::where('codeparain', Auth::user()->id_genere)->get();

    
        return view("client.compte")->with('users',$users);
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
        $barrages=Barrage::get();
        return view('client.files.barrage')->with('barrages',$barrages);
    }

    public function MesBarrages(){
        return view('client.files.MesBarrages');
    }
    
    public function ConfirmeAchat($id){
        $barrages=Barrage::find($id);
        if(!$barrages){
            return redirect("/barrage")->with('error', 'Barrage non trouvé.');
        }
        return view('client.files.ConfirmeAchat')->with('barrages',$barrages);;
    }

    public function retrait(){

        return view('client.files.retrait');
    }

    public function retraitMtn_Or(){
        return view('client.files.retraitMtn_Or');
    }

    public function MesRecharges(){
        $recharges = Recharge::where('id_user', Auth::user()->id)->get();
        return view('client.files.MesRecharges')->with('recharges',$recharges);
    }

    public function MesRetraits(){

        $retraits = Retrait::where('id_user_retrait', Auth::user()->id)->get();

        return view('client.files.MesRetraits')->with('retraits',$retraits);;
    }

    public function video(){
        return view('client.files.video');
    }

    public function moyen_ajouter(){

        return view('client.files.moyen_ajouter');
    }

    public function retrait_ajouter(){
        $users = User::where('codeparain', Auth::user()->id_genere)->get();

        return view('client.files.retrait_ajouter')->with('users',$users);
    }


///////////////////create user\\\\\\\\\\\\\\\\\\\\\\

    // public function createUser1(Request $request){
    //     $request->validate([
    //         'nom' => 'required|string|max:255',
    //         'telephone' => 'required|integer|unique:users',
    //         'motpass' => 'required|string|min:6',
    //         'codeParain' => 'nullable|integer',
    //         'motpassconfirme' => 'required|string|min:6',

    //     ]);

        
    //     if ($request->motpass !== $request->motpassconfirme) {
    //         return back()->with('erreur','les deux mots de passes doivent etre identique');

    //     }else{

    //             // Créer un nouvel utilisateur
    //         $utilisateur = new User();
    //         $utilisateur->nom = $request->input('nom');
    //         $utilisateur->telephone = $request->input('telephone');
    //         $utilisateur->motpass = bcrypt($request->input("motpass"));

    //         $utilisateur->codeparain = $request->input('codeparain');
    //         $utilisateur->save();
    //         return back()->with('status','utilisateur cree avec success');
    //     }

        

    
    // }


    public function createUser(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'telephone' => 'required|integer|unique:users',
            'motpass' => 'required|string|min:6',
            'codeparain' => 'integer',
            'motpassconfirme' => 'required|string|min:6',
        ]);
    
        if ($request->motpass !== $request->motpassconfirme) {
            return back()->with('erreur', 'Les deux mots de passe doivent être identiques');
        } else {

            // Générer un ID unique de 4 chiffres
            do {
                $idgenere = str_pad(mt_rand(0, 9999), 4, '0', STR_PAD_LEFT);
            } while (User::where('id_genere', $idgenere)->exists());
    
            $utilisateur = new User();
            $utilisateur->nom = $request->input('nom');
            $utilisateur->telephone = $request->input('telephone');
            $utilisateur->motpass = bcrypt($request->input("motpass"));
            $utilisateur->codeparain = $request->input('codeparain',3250);
            $utilisateur->id_genere = $idgenere;
    
            $utilisateur->save();
    
            return redirect('/signin')->with('status', 'Utilisateur créé avec succès');
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
    
        return to_route('login')->with('erreur','numero ou mots de passe invalide');
    }



    public function choixRecharge(Request $request){
        $choix = $request->input('choix');
        if ($choix==1) {
            return redirect("/rechargeOr")->with('choix',$choix);
        } else if($choix==2){
            return redirect("/rechargeMtn")->with('choix',$choix);

        }else{
            return redirect("/usdt")->with('choix',$choix);

        }
    
        //return to_route("welcome")->with('valeur',$valeur);
    }



    public function confirmOr(Request $request){
        $validatedData = $request->validate([
            'montant' => 'required|numeric',
            'numero_payeur' => 'required|numeric',
            'transaction_id' => 'required|string',
        ]);

        $recharge = new Recharge();
        $recharge->montant = $request->input('montant');
        $recharge->numero_payeur = $request->input('numero_payeur');
        $recharge->transaction_id = $request->input('transaction_id');
        $recharge->id_user=Auth::User()->id;
        $recharge->operateur="ORANGE";
       
        $recharge->save();

        return redirect()->back()->with('success', 'Recharge confirmée avec succès.');
    }


    public function confirmMTN(Request $request){
        $validatedData = $request->validate([
            'montant' => 'required|numeric',
            'numero_payeur' => 'required|numeric',
            'transaction_id' => 'required|string',
        ]);

        $recharge = new Recharge();
        $recharge->montant = $request->input('montant');
        $recharge->numero_payeur = $request->input('numero_payeur');
        $recharge->transaction_id = $request->input('transaction_id');
        $recharge->id_user=Auth::User()->id;
        $recharge->operateur="MTN";
       
        $recharge->save();

        return redirect()->back()->with('success', 'Recharge confirmée avec succès.');
    }

    ///////////recharge\\\\\\\\\\\\\\\\\\\\\

    public function confirmUSDT(Request $request)
    {
        $validatedData = $request->validate([
            'montant' => 'required|numeric',
            //'addresse' => 'required|string',
            'transaction_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $fileNameEtExtension=$request->file('transaction_image')->getClientOriginalName();
        $fileName=pathinfo($fileNameEtExtension, PATHINFO_FILENAME);//recupere le non del imege
        $extension=$request->file('transaction_image')->getClientOriginalExtension();//recuperre l extention de l image
        $fileNameToStore=$fileName."_".time().".".$extension ;//time() cest pour donner un nom unique a l image

        $path=$request->file('transaction_image')->storeAs("public/transaction_image", $fileNameToStore);

        $recharge = new Recharge();
        $recharge->address_si_usdt = "Trc20-UGVDSUTFTTUZUSCUUCU";

        $recharge->montant = $request->input('montant');
        $recharge->image_recharge = $fileNameToStore;
        $recharge->id_user=Auth::User()->id;
        $recharge->operateur="USDT";
        

        $recharge->save();

        return redirect()->back()->with('success', 'Recharge USDT confirmée avec succès.');
    }

    





}
