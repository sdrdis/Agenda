<?php
class Controller_Agenda extends Controller_Template{
    var $data = array(); // Données à envoyer dans la vue
    var $title = 'Agenda'; // Titre de la page. Défaut : Agenda
    var $view_dir; // Dossier vue du controlleur.

    public function after($response)
    {
        $action_name     = Request::active()->action;
        $this->template->title   = $this->title;
        $this->template->list = View::forge($this->view_dir.'/list', $this->data);
        $this->template->view = View::forge($this->view_dir.'/'.$action_name, $this->data);

        return parent::after($response);
    }
}
?>