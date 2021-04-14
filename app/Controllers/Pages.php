<?php

namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Pendidikan Teknik Informatika & Komputer',
			'active' => 'home',
		];
		return view('home/index', $data);
	}
	public function profil()
	{
		$data = [
			'title' => 'Profil Prodi PTIK',
			'active' => 'profil',
		];
		return view('profil/profil', $data);
	}
	public function akademik()
	{
		$data = [
			'title' => 'Kurikulum PTIK',
			'active' => 'akademik',
		];
		return view('akademik/index', $data);
	}
}