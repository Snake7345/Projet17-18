<?php
/**
 * Created by PhpStorm.
 * User: theba
 * Date: 09/02/18
 * Time: 20:14
 */

class Form
{
    private this->monForm = '';

    public function __construct($name, $ID, $methode, $action)
    {
        this->monForm='<form name="'.$name.'" method="'.$methode.'" action="'.$action.'" id="'.$ID.'">';
    }

    public function SetText($label, $name, $ID, $required, $placeholder, $value)
    {
        this->monForm.='<label for="'.$ID.'">'.$label.' </label>';
		this->monForm.='<input type="text" name="'.$name.'" id="'.$ID.'"required="'.$required.'"
		placeholder="'.$placeholder.'"value="'.$value.'"/><br/>';
		this->monForm.='<br/>';
    }

    public function setEmail($label, $name, $ID, $required, $placeholder, $value)
    {
        this->monForm.='<label for="'.$ID.'">'.$label.' </label>';
		this->monForm.='<input type="text" name="'.$name.'" id="'.$ID.'"required="'.$required.'"
		placeholder="'.$placeholder.'"value="'.$value.'"/><br/>';
		this->monForm.='<br/>';
    }

    public function setSubmit($name, $value)
    {
        this->monForm.='<br/><input type="submit" name="'.$name.'" value="'.$value.'"/>';
    }

    public function getForm($name, $value)
    {

    }

    //Fonction qui permet de fermer le formulaire
    public function endForm()
    {
        this->monForm.='</form>';

	}

}

?>