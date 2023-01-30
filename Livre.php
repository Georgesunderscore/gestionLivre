
<?php


class Livre
{
	// déclaration
//    un titre, un nombre de pages, une année de parution, un prix et un auteur
	private string $_titre;
	private int $_nombre;
	private int $_annParution;
	private float $_prix;
	private Auteur $_auteur ;
    
	
	public function __construct($titre, $nombre, $annParution,$prix,$auteur)
	{
		$this->_titre = $titre;
		$this->_nombre = $nombre;
		$this->_annParution = $annParution;
		$this->_prix = $prix;
        $this->_auteur = $auteur;
		$this->_titulaire ->ajoutLivre($this);
        
	}

	public function getTitre(): string
	{
		return $this->_titre;
	}

	public function setTitre(string $titre)
	{
		$this->_titre = $titre;
	}

    public function getNombre(): int
	{
		return $this->_nombre;
	}

	public function setNombre(int $nombre)
	{
		$this->_nombre = $nombre;
	}

    public function getAnnParution(): int
	{
		return $this->_annParution;
	}

	public function setAnnParution(int $annParution)
	{
		$this->_annParution = $annParution;
	}

    public function getPrix(): int
	{
		return $this->_prix;
	}

	public function setPrix(int $prix)
	{
		$this->_prix = $prix;
	}


    public function getAuteur(): Auteur
	{
		return $this->_auteur;
	}

	public function setAuteur(Auteur $auteur)
	{
		$this->_auteur = $auteur;
	}


	public function __toString()
	{
        $ecrire = $this->_titre ." " . $this->_nombre  ." " . $this->_annParution   ." " . $this->_prix  ." " . $this->_auteur;
		echo "<br>";
		return $ecrire;
	}
    

}



