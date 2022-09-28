<?php

namespace App\Http\Controllers;
use App\Http\Requests\RegisterAuthRequest;
use Illuminate\Http\Request;
use App\Models\User;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
class AuthController extends Controller{
  
    public function registro(Request $request ){
        $request->validate([
        'ci'=>'required',
        'nombre'=>'required',
        'ape_paterno'=>'required',
        'ape_materno'=>'required',
        'fechaRegistro'=>'required',
        'tipo'=>'required',
        'password'=> 'required|confirmed',
        'email'=> 'required|unique:email',
        'email_verified_at',
        'estado'
        ]);

        $user = new User();
        $user->ci=$request->ci;
        $user->nombre=$request->nombre;
        $user->ape_paterno=$request->ape_paterno;
        $user->ape_materno=$request->ape_materno;
        $user->fechaRegistro=$request->fechaRegistro;
        $user->tipo=$request->tipo;
        $user->password=Hash::make($request->password);
        $user->email=$request->email;
        $user->save();

        return response()->json(["mensaje"=>"usuario registrado"], 201);
    }

    public function login(Request $request ){
        $request->validate([
        
        'password'=> 'required',
        'email'=> 'required',
        
        ]);
        $user=User::where('email', $request->email)->first();
        
            if ($user && Hash::check($request->password, $user->password)) {
                $token = $user->createToken("auth_token")->plainTextToken;
                $response=['user'=>$user, 'token'=>$token];
                return response()->json($response,200);
            }
            $response = ['message'=>'Incorrect email or password'];
            return response()->json($response,400);
            
 
    }

    public function perfil(){
        return Auth::user();
    }

    public function logout(){
        Auth::user()->tokens()->delete();
        return  response()->json(["mensaje"=>"Se cerro correctamente"]);
    }

    public function getAuthUser(Request $request){
        $this->validate($request,[
            'token'=>'required'
        ]);
        $user = JTWAuth::authenticate($request->token);
        return response()->json(['user' => $user]);
    }

    protected function jsonResponse($data, $code=200)
    {
        return response()->json($data, $code, ['Content-Type'=> 'alication/json;charset=UTF-8','Charset'=>'utf-8'], JSON_UNESCAPED_UNICODE);
    }
}
