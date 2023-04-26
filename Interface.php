<?php

    //Interface Prix qui définit la méthode calculerPrix()
    interface Prix {
        public function calculerPrix();
    }

    //Classe qui implémente l'interface prix et qui doit donc absolument définir la méthode calculerPrix()
    class PaperBookConcrete implements Prix {
        public function calculerPrix() {
            return 'prix du livre papier';
        }
    }
    
    //Classe qui implémente l'interface prix et qui doit donc absolument définir la méthode calculerPrix()
    class EBookConcrete implements Prix {
        public function calculerPrix() {
            return 'prix du livre PDF';
        }
}
?>