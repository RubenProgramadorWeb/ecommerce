<?php
// interface iTemplate
// {
//     public function index();
// }
class contactController
{
    public function contact()
    {
        //Le paso los datos a la vista
        require(TEMPLATE_ACTIVE . "contact.php");
    }

}