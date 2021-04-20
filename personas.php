<?php
class Persona{
    private $Id;
    private $Nombre;
    private $Apellido;
    private $Edad;
    private $Email;

    function __construct($Id,$Nombre,$Apellido,$Edad,$Email) {
        $this->Id = $Id;
        $this->Nombre = $Nombre;
        $this->Apellido = $Apellido;
        $this->Edad = $Edad;
        $this->Email = $Email;
    }

    public function NombreYApellido(){
        return $this->Nombre." ".$this->Apellido."<br>";
    }

    public function __toString()
    {
        return "Id = ".$this->Id."<br>".
               "Nombre = ".$this->Nombre."<br>".
               "Apellido = ".$this->Apellido."<br>".
               "Edad = ".$this->Edad."<br>".
               "Email = ".$this->Email."<br>";
    }
}

$Personas = [
    new Persona(1,"bar","bor",10,"elfoo@gmail.com"),
    new Persona(2,"faaa","fooo",20,"elfaa@gmail.com"),
    new Persona(3,"Persona","Sujeto",20,"elPerso@gmail.com"),
    new Persona(4,"Generico","Aleatorio",20,"elgeni@gmail.com"),
    new Persona(5,"Sina","Cosina",20,"lasina@gmail.com"),
    new Persona(6,"Mecanso","Casas",20,"elmeca@gmail.com"),
    new Persona(7,"Joseph","Joestar",11,"eljoseph@gmail.com"),
    new Persona(8,"Jolyne","Cujoh",20,"lajuli@gmail.com"),
    new Persona(9,"Dexter","Barrios",12,"eldexter@gmail.com"),
    new Persona(10,"Armando","Casas",45,"elarmando@gmail.com")
];
        
    

