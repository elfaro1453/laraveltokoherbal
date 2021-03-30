<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * fungsi untuk mengatur register user / Create User
     * parameter : request yang berisi semua input dari user
    */
    public function registerUser(Request $request)
    {
        /**
         * Buat variabel $data yang berisi request berupa email, name, password
         */
        $data = $request->only(['email', 'name', 'password']);

        /**
         * Buat User sesuai $data tersebut
         */
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        // tampilkan response berisi user, dengan response status code 200 (OK/Sukses)
        return response()->json(compact('user'), 200);
    }

    /**
     * fungsi untuk mendapatkan data user / Read User
     * parameternya adalah id dari user yang telah dibuat
    */
    public function getUser($id)
    {
        // https://laravel.com/docs/8.x/eloquent#retrieving-single-models
        $user = User::find($id);
        return response()->json(compact('user'), 200);
    }

    /**
     * fungsi untuk mengubah data user / Update User
     * parameternya adalah id dari user yang akan diubah dan request berisi input user
     */
    public function updateUser($id, Request $request)
    {
        // cari user yang akan diupdate, berdasarkan id
        $user = User::find($id);
        // modifikasi user bagian nama
        $user->name = $request->name;
        // simpan user
        $user->save();

        //return user yang telah diupdate
        return response()->json(compact('user'), 200);
    }

    /**
     * fungsi untuk menghapus user / Delete User
     * parameternya adalah id dari user
     */
    public function deleteUser($id)
    {
        // cari user berdasarkan id;
        $user = User::find($id);

        // jika gagal kodenya adalah false
        // selainnya itu sukses
        $resultCode = $user->delete();
        return response()->json(compact('resultCode', 'user'), 200);
    }
}
