<?php namespace App\Models;

use CodeIgniter\Model;

class gamesmodel extends Model
{
    protected $table = 'games';
	protected $primaryKey = 'ID';
	protected $allowedFields = ['name', 'genre', 'price', 'description'];

	public function search($builder,$query, $field)
	{			

		try{               

			 $builder->like($field, $query);
			 $builder->orderBy("name","asc");

             $result = $builder->paginate(20);

		}catch(\Exception $e){
			die($e->getMessage());
		}

		return $result;

	}	
	
	public function getAllNames($builder)
	{
		try{

			$builder->orderBy("ID","asc");
			$result = $builder->paginate(50);

		}catch(\Exception $e)
		{
			die($e->getMessage());
		}
		return $result;

	}
	public function getName($ID=null)
	{
		$db = \Config\Database::connect();

		$sql = "SELECT * FROM games WHERE ID = :ID:";

		try {
			$query = $db->query($sql,[
				'ID' => $ID
			]);
		} catch (\Exception $e) {
			die($e->getMessage());
		}

		return $query->getResultArray()[0];

	}
}

