<?php

namespace App\Http\Controllers\Auth;

use App\Arquivo;
use App\Endereco;
use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function preRegister()
    {
        return view('auth.pre-register');
    }

    public function showRegistrationForm(Request $request)
    {
        $tipo = $request->tipo;
        $estados = DB::table('estados')->get();
        return view('auth.register', compact('tipo', 'estados'));
    }

    public function register(Request $request)
    {
        $request->validate([
            'nome' => 'required|max:255',
            'sobrenome' => 'required|max:255',
            'email' => 'required|email|unique:users|same:confirm_email',
            'password' => 'required|min:6|same:confirm_password',
            'cpf' => 'required|cpf|string',
            'cnpj' => 'required|cnpj|string',
            'telefone' => 'required|string',
            'celular' => 'required|string',

        ]);

        try {
            DB::beginTransaction();
            $data = $request->all();

            $user = $this->createUser($data);
            $data['user_id'] = $user->id;
            $comercial = $this->createAddress($data, 'comercial');
            $residencial = $this->createAddress($data, 'residencial');
            if ($request->file("file")) {
                $arquivo = Helper::uploadFile($request->file('file'));
                $arquivo['user_id']= $user->id;
                Arquivo::create($arquivo);
            }
            DB::commit();
            return redirect('home')->with('success', 'Cadastro realizado com sucesso!');
//            return redirect()->back()->with('success', 'cliente registrado com sucessp');
        } catch (\Exception $e) {
            Log::error("Erro ao criar conta: " . $e->getMessage());
            DB::rollBack();
        }


    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     * @return \App\User
     */
    public function createUser(array $data)
    {
        return User::create([
            'name' => $data['nome'] . " " . $data['sobrenome'],
            'email' => $data['email'],
            'cpf' => $data['cpf'],
            'cnpj' => $data['cnpj'],
            'telefone' => $data['telefone'],
            'celular' => $data['celular'],
            'perfil' => $data['perfil'],
            'password' => Hash::make($data['password'])
        ]);
    }

    public function createAddress(array $data, $tipo)
    {
        return Endereco::create([
            'user_id' => $data['user_id'],
            'cep' => $data[$tipo]['cep'],
            'endereco' => $data[$tipo]['endereco'],
            'numero' => $data[$tipo]['numero'],
            'complemento' => $data[$tipo]['complemento'],
            'bairro' => $data[$tipo]['bairro'],
            'cidade' => $data[$tipo]['cidade'],
            'estado' => $data[$tipo]['estado'],
            'tipo_endereco' => strtoupper($tipo),
        ]);
    }
}
