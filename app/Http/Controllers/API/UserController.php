<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseJson;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Exception;

class UserController extends Controller
{
    public function login(Request $request)
    {
        try {
            $request->validate([
                'email'     => 'email|required',
                'password'  => 'required'
            ]);

            $credentials = request(['email', 'password']);
            if (!Auth::attempt($credentials)) {
                return ResponseJson::error([
                    'message'   => 'Unauthorized'
                ], 'Authentication Failed', 500);
            }

            $user = User::where('email', $request->email)->first();
            if (!Hash::check($request->password, $user->password, [])) {
                throw new \Exception('Invalid Credentials');
            }

            $tokenResult = $user->createToken('authToken')->plainTextToken;
            return ResponseJson::success([
                'access_token'  => $tokenResult,
                'token_type'    => 'Bearer',
                'user'          => $user
            ], 'Authenticated');
        } catch (Exception $error) {
            return ResponseJson::error([
                'message'   => 'Something went wrong',
                'error'     => $error
            ], 'Authentication Failed', 500);
        }
    }

    public function getAll(Request $request)
    {
        $userAll    = User::all();
        if (count($userAll) > 0) {
            return ResponseJson::success($userAll, 'Data User Berhasil diambil');
        } else {
            return ResponseJson::error(null, 'Data tidak ada!', 404);
        }
    }

    public function getId($id)
    {
        if ($id) {
            $user = User::where('id', $id)->first();

            if ($user) {
                return ResponseJson::success($user, 'Data berhasil ditemukan');
            } else {
                return ResponseJson::error(null, 'Data tidak ada!', 404);
            }
        }
    }

    public function updateUser(Request $request)
    {
        $data = $request->all();
        $user = Auth::user();

        $user->update($data);

        return ResponseJson::success($user, 'Profile berhasil diupdate');
    }

    public function createUser(Request $request)
    {
        try {
            $request->validate([
                'name'      => ['required', 'string', 'max:255'],
                'email'     => ['required', 'email', 'max:255', 'unique:users'],
                'password'  => ['required', 'string']
            ]);

            User::create([
                'name'      => $request->name,
                'email'     => $request->email,
                'password'  => Hash::make($request->password),
            ]);

            $user           = User::where('email', $request->email)->first();
            $tokenResult    = $user->createToken('authToken')->plainTextToken;

            return ResponseJson::success([
                'access_token'  => $tokenResult,
                'token_type'    => 'Bearer',
                'user'          => $user
            ], 'User Created');
        } catch (Exception $error) {
            return ResponseJson::error([
                'message'   => 'Something went wrong',
                'error'     => $error
            ], 'Authentication Failed', 500);
        }
    }

    public function deleteUser($id)
    {
        $user       = User::findOrFail($id);
        $deleteUser = $user->delete();

        return ResponseJson::success($deleteUser, 'Data berhasil dihapus');
    }
}
