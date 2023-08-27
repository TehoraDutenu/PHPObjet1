<?php

namespace Class;

use Class\Pen;

class FontainPen extends Pen
{
    public function __construct(public string $color, public int $ink_level)
    {
        parent::__construct($color);
    }

    public function write(string $message): void
    {
        // - Gérer le niveau d'encre
        $message_length = strlen($message);
        $this->ink_level -= $message_length;

        if ($this->ink_level < 0) {
            // - Récupération du nombre de caractères en trop
            $out_of_ink = abs($this->ink_level);
            // - Réinitialiser la valeur de l'encre à 0
            $this->ink_level = 0;
            // - Troncage du message
            $message = substr($message, 0, $message_length - $out_of_ink);
        }
        // - Invocation de la méthode write de la classe parente
        parent::write($message);
    }
    public function recharge()
    {
        $this->ink_level = 150;
    }
}
