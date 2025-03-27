<?php

namespace app\controllers;

use app\models\UserModel;
use app\service\EleveursDAO;
use Flight\Engine;
use Flight;

class LoginController
{
	protected $user_model;

	//create an instance of the attribute with static db as parameter on the constructor(doesn t work work on some PC if you don t add)
	public function __construct()
	{
		$this->user_model = new UserModel(Flight::db()); //optionnal
	}

	//Authentificate username and password of an user
	public function loginUser()
    {
        $data = Flight::request()->data;

		if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        $name = $data->name;
        $password = $data->psw;

        $result = $this->user_model->check_user($name, $password);

        if ($result['message'] == 'success') {
            $_SESSION['nom'] = $result['user']['nom'];
			$_SESSION['solde'] = $result['user']['solde'];
            $data = ['page' => 'choice'];
            Flight::redirect('/lobby',$data);
        } else {
            $error_message = $result['message'];
            Flight::render('/', ['error_message' => $error_message]);
        }
    }

    //Create an user for the project
    public function addUser()
    {
        $data = Flight::request()->data;

        $name = $data->name;
        $password = $data->psw;

        // Solde par défaut à 0 si non fourni
        $solde = isset($data->solde) ? $data->solde : 100000;

        $result = $this->user_model->add_user($name, $password, $solde);

        if ($result['message'] == 'success') {
            Flight::redirect('/'); 
        } else {
            $error_message = $result['message'];
            Flight::render('/', ['error_message' => $error_message]);
        }
    }

	public function logout() {
        session_destroy();
        Flight::redirect('/');
    }
}