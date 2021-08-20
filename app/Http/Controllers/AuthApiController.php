<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Support\Facades\Validator;

class AuthApiController extends Controller
{
	//
	public function register(Request $request)
	{

		$cekemail = User::where('email', $request->email)->first();
		if ($cekemail) {

			// $pesan= "Email sudah digunakan";
			$out = [

				"message" => "email_ada",
				"code"   => 202,
			];

			return response()->json($out, $out['code']);
			
			
			# code...
		} else {

			$data = User::create([
				'nama' => $request->nama,
				'email' => $request->email,
				'alamat' => $request->alamat,
				'role' => 'masyarakat',
				'password' => bcrypt($request->password),

			]);

			if ($data) {

				$out = [

					"message" => "register_success",
					"code"   => 201,
				];
				# code...
			} else {
				$out = [

					"message" => "failed_regiser",
					"code"   => 0,
				];
			}

			// $pesan = "Berhasil Daftar";
			// return ([$data, $pesan]);

			return response()->json($out, $out['code']);
		}
	}

	public function login(Request $request)
	{

		$email = $request->input('email');
		$password = $request->input('password');

		// $logins = User::where('email', $email)->first();
		// $credentials = $request->only('email', 'password');

		if ($logins = User::where('email', $email)->first()) {

			if (Hash::check($password, $logins->password)) {

				$result["success"] = "1";
				$result["message"] = "success";
				//untuk memanggil data sesi Login
				$result["id"] = $logins->id;
				$result["nama"] = $logins->nama;
				$result["password"] = $logins->password;
				$result["email"] = $logins->email;
				$result["role"] = $logins->role;

				return response()->json($result);
			} else {

				$result["success"] = "0";
				$result["message"] = "Login Gagal";
			}
			return response()->json($result);
		}
		$result["success"] = "0";
		$result["message"] = "Login Gagal";
		return response()->json($result);
	}

	public function data()
	{
		$user = User::all();

		$array = [];

		foreach ($user as $value) {

			$array[] = [
				'id' => $value->id,
				'nama' => $value->nama,
				'nomor' => $value->role,


			];
		}

		return (["result" => $array, 200]);
	}

	public function getRandomString($panjang = 100)
	{
		$karakter = '012345678dssd9abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$panjang_karakter = strlen($karakter);
		$randomString = '';
		for ($i = 0; $i < $panjang; $i++) {
			$randomString .= $karakter[rand(0, $panjang_karakter - 1)];
		}
		return $randomString;
	}
}
