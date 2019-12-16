<?php namespace App\Controllers;

use App\Models\gamesmodel;

class gamesindex extends BaseController
{
	public function index()
	{

		$model = new gamesmodel();
		$builder = $model->builder();
		$result = $model->getAllNames($builder);
		
	//	if(!empty($query) && !empty($field))
    //    {
    	
        	//$result = $model->search($builder,$query,$field);      	


			$data = [
				'title' => 'Ronn Games Centre',
   				'Games' => $result,
          //      'query' => $query,
		//		'field' => $field,
      	];
	//	}
		//else
        //{    	
		//	$result = $model->getAllNames($builder);
			//'title' => 'Ronn Games Centre',
			//'Games' => $result,			
            //    'query' => $query,
          //      'field' => $field,								
		//	];

		//};
		echo view ('Templates/header');
		echo view ('anoto/contents',$data);
		echo view ('Templates/footer');
	}	
	public function add()
	{
		$validation = \Config\Services::validation();
		$request = \Config\Services::request();		

		if( $_SERVER["REQUEST_METHOD"] == "POST")
		{
			if( $this->validate([
				'name' => 'required',
				'genre' => 'required',
				'price' => 'required',
				'description' => 'required',
			]))
			{
				$newName = [

					'name' => $request->getPost('name'),
					'genre' => $request->getPost('genre'),
					'price' => $request->getPost('price'),
					'description' => $request->getPost('description'),
				];

				$dbConnect = new gamesmodel();

				try {
					$result = $dbConnect->insert($newName);
				} catch (\Exception $e) {
					die($e->getMessage());
				}

				return redirect()->to(site_url());

			}

		}
		$data = [
			'title' => 'Add a new game',
			'errors' => $validation->getErrors(),
		];
		echo view ('Templates/header');
		echo view ('anoto/add',$data);
		echo view ('Templates/footer');
	}
	public function delete($ID=null)
	{
		$dbConnect = new gamesmodel();

		if($ID==null || empty($ID) )
			return redirect()->to(site_url());

		try {
			$dbConnect->delete($ID);
		} catch (\Exception $e) {
			die($e->getMessage())		;
		}
		return redirect()->to(site_url());

	}
	public function info($ID=null)
	{
        $dbConnect= new gamesmodel();

		$data = [
				'title' => 'Game Details',
				'Gamess' => $dbConnect->getName($ID),
		];	
		echo view('templates/header');
		echo view('anoto/info',$data);
		echo view('templates/footer');		
	}
	public function edit($ID=null)
	{
		$dbConnect = new gamesmodel();
		$request = \Config\Services::request();
		$validation = \Config\Services::validation();

		$ID = $ID==null ? $_REQUEST['ID'] : $ID;

		if($_SERVER["REQUEST_METHOD"]=="POST")
		{
			if( $this->validate([
				'ID' =>'required',
				'name' => 'required',
				'genre' => 'required|min_length[3]|max_length[255]',
				'price' => 'required',
				'description' => 'required',

			]))
			{
				$newName=[
	                'name'=>$request->getPost('name'),
	                'genre'=>$request->getPost('genre'),
	                'price'=>$request->getPost('price'),
	                'description'=>$request->getPost('description'),					
				];

				try {
					$result = $dbConnect->update($request->getPost('ID'),$newName);
				} catch (\Exception $e) {
					die($e->getMessage());
				}

				return redirect()->to(site_url());				

			}
		}


		$data = [
			'id' => $ID,
			'title' => 'Edit Game Details',
			'gamename' => $dbConnect->getName($ID),
			'errors' => $validation->getErrors(),
		];

		echo view('templates/header');		
		echo view('anoto/edit',$data);
		echo view('templates/footer');	
	}


}
