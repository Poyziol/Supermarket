<?php

namespace app\models;

use PDO;
use Flight;

class UserModel
{
    private $db;

    //Need db of type PDO
    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    //Verify username and password of an user
    function check_user($nom, $password)
    {
        $query = "SELECT * FROM supermarche_client WHERE nom = ?";
        $data = $this->db->prepare($query); 
        $data->execute([$nom]);
    
        $user = $data->fetch(PDO::FETCH_ASSOC); 
        if (!$user) {
            return ['message' => 'User not found'];
        }
    
        if ($user['mot_de_passe'] !== $password) {
            return ['message' => 'Invalid password'];
        }
    
        return ['message' => 'success', 'user' => $user];
    }


    //add an user with his new name and password
    public function add_user($new_name, $new_password, $new_solde = 0)
    {
        // Vérification de l'existence de l'utilisateur via email
        $query = "SELECT * FROM supermarche_client WHERE nom = ?";
        $data = $this->db->prepare($query);
        $data->execute([$new_name]);
    
        $user = $data->fetch(PDO::FETCH_ASSOC);
        if($user) {
            return ['message' => 'Name already exists!'];
        }
    
        // Insertion d'un nouvel utilisateur
        $query = "INSERT INTO supermarche_client (nom, solde, mot_de_passe) VALUES (?, ?, ?)";
        $data = $this->db->prepare($query);
        
        if ($data->execute([$new_name, $new_solde, $new_password])) {
            return ['message' => 'success'];
        } else {
            return ['message' => 'Sign-up failed'];
        }
    }   
}
