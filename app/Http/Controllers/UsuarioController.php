<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{

    protected $usuarios;
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Usuario $usuarios)
    {
        $this->usuarios = $usuarios;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $usuarios = $this->usuarios->obtenerUsuarios();
        return view('admin.admin2_1', ['usuarios' => $usuarios]);
//
    }

    /**
     * Muestra el formulario para crear un nuevo recurso.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.register');
    }

    public function session()
    {
        return view('auth.login');
    }

    public function session_start()
    {
        $usuario = $this->usuario->obtenerUsuario();
        
        if ($usuario->role == "admin") {
            return view('admin.Admin1', ['usuario' => $usuario]);
        } else {
            return view('cliente.client1', ['usuario' => $usuario]);
        }
        
    }

    /**
     * Almacene un recurso recién creado .
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = new Usuario($request->all());
        $usuario->save();
        $usuarios = $this->usuarios->obtenerUsuario();
        return view('admin.admin2_1', ['usuarios' => $usuarios]);
    }

    /**
     * Muestra el recurso especificado.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = $this->usuarios->obtenerUsuarioID($id);
        return view('admin.admin2_2', ['usuario' => $usuario]);
    }

    /**
     * Muestra el formulario para editar un recurso.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = $this->usuarios->obtenerUsuarioID($id);
        return view('admin.admin2', ['usuario' => $usuario]);
    }

    /**
     * Actualiza un recurso especificado en la BD.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $usuario = Usuario::find($id);
        $usuario->fill($request->all());
        $usuario->save();
        return redirect()->action([UsuarioController::class, 'admin.admin2_1']);
    }

    /**
     * Elimina un Recurso de la BD.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();
        $usuarios = $this->usuarios->obtenerUsuario();
        return view('admin.admin2_1', ['usuarios' => $usuarios]);
    }
}
