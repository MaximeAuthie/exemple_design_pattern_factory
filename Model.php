<?php

    include 'Interface.php';

        //On créé une classe abstraite BookFactory qui définit les attributs insdispensable à la création d'une instances d'une classe enfant
        abstract class BookFactory {
            private $titre;
            private $auteur;

            public function getTitre() {
                return $this->titre;
            }
            public function getAuteur() {
                return $this->auteur;
            }
            public function setTitre($titre) {
                $this->titre = $titre;
            }
            public function setAuteur($auteur) {
                $this->auteur = $auteur;
            }

            public abstract function createBook(); //Il s'agit de la fonction abstraite qui va être implémentée dans les classes enfant

            public function bookBuilder($titre,$auteur) { //Fonction "builder" qui permet de "construire" une instance d'une des classe enfant
                $book = $this->createBook(); //Fait référence à la classe abstraite qui est implémentée dans la classe enfant
                $this->setTitre($titre);
                $this->setAuteur($auteur);

                return 'Voici '.$this->getTitre().', un livre écrit par '.$this->getAuteur().', au prix de : '.$book->calculerPrix().'.'; //Renvoie une concaténation de méthodes de la classe abstaite et de la classe enfant choisie;
            }
        }

        //Classe enfant de la classe BookFactory qui va implémenter la méthode createBook()
        class PaperBookFactory extends BookFactory {
            public function createBook(){
                return new PaperBookConcrete; //Dans cette méthode, on instancie la classe PaperBookConcrete, pour pouvoir utiliser la méthode calculerPrix() dans le builder de la classe mère
            }
        }

        //Classe enfant de la classe BookFactory qui va implémenter la méthode createBook()
        class EBookFactory extends BookFactory {
            public function createBook(){
                return new EBookConcrete; //Dans cette méthode, on instancie la classe PaperBookConcrete, pour pouvoir utiliser la méthode calculerPrix() dans le builder de la classe mère
            }
        }

?>