<?php
class Entreprise {
	//Constructeurs
	public $nom;
	public $vocation;
	public $lieu;
	public $diplome;

	//Constructeur
	function __construct($nom, $vocation, $lieu, $diplome){
		$this->nom = $nom;
		$this->prenom = $prenom;
		$this->lieu = $lieu;
		$this->diplome = $diplome;
	}
}

class Personne {
	//Attributs
	protected $id;
	protected $nom;
	protected $prenom;
	protected $mail;
	protected $tel;
	protected $salaire;

	//Constructeur
	function __construct($id, $nom, $prenom, $mail, $tel, $salaire){
		$this->num = $id;
		$this->nom = $nom;
		$this->prenom = $prenom;
		$this->mail = $mail;
		$this->tel = $tel;
		$this->salaire = $salaire;
	}

	//Accesseurs
	public function getId($id){
		return $id;
	}
	public function getNom($nom){
		return $nom;
	}
	public function getPrenom($prenom){
		return $prenom;
	}
	public function getMail($mail){
		return $mail;
	}
	public function getTel($tel){
		return $tel;
	}
	
	public function getDiplome() {
		return $this->diplome;
	}
	
	//Méthodes
	private function afficher() {

	}

	public calculerSalaire() {
		echo "Erreur de connexion à la BDD";
	}
}
?>