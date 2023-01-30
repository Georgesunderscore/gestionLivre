
<?php


class Auteur
{
	// déclaration
    //Un auteur comporte un nom et un prénom.
	private string $_nom;
    private string $_prenom;
    private array $_listDesLivres ;
	
    
	
	public function __construct($nom , $prenom)
	{
		$this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_listDesLivres = [];
		
	}



	public function getNom(): string
	{
		return $this->_nom;
	}

	public function setNom(string $nom)
	{
		$this->_nom = $nom;
	}

    public function getPrenom(): string
	{
		return $this->_prenom;
	}

	public function setPrenom(string $prenom)
	{
		$this->_prenom = $prenom;
	}

    
	public function getListDesLivres()
	{
		return $this->_listDesLivres;
	}

	public function setListDesLivres($listDesLivres)
	{
		$this->_listDesLivres = $listDesLivres;
	}

    public function ajoutLivre( Livre $livre)
	{
		//ajouter un element a la list des livres
		$this->_listDesLivres [] = $livre;
        return $this;
	}

	public function __toString()
	{
		$ecrire = $this->_prenom ." " . $this->_nom;
		echo "<br>";
		return $ecrire;
	}




    ///afficherBibliographie
    public function afficherBibliographie(){
        echo "<h1>Livres de $this </h1> ";
        foreach($this->_listDesLivres  as $objectLivre){
            echo "<h2>". $objectLivre->getTitre() .'('.$objectLivre->getAnnParution().') : '. $objectLivre->getNombre() . ' Pages /'. $objectLivre->getPrix().'€'. "</h2> ";
            
            
        }


    }


	

}



