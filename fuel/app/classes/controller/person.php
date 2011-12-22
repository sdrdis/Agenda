<?php
class Controller_Person extends Controller_Agenda
{
    var $view_dir = 'person';

    public function after($response)
    {
        $this->data['list'] = Model_Person::find(array('order_by' => array('name' => 'asc')));

        return parent::after($response);
    }

	public function action_index()
	{
		$this->data['people'] = Model_Person::find_all();
	}

	public function action_view($id = null)
	{
		$this->data['person'] = Model_Person::find_by_pk($id);

	}

	public function action_create($id = null)
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Person::validate('create');
			
			if ($val->run())
			{
				$person = Model_Person::forge(array(
					'name' => Input::post('name'),
					'surname' => Input::post('surname'),
					'tel' => Input::post('tel'),
					'email' => Input::post('email'),
					'address' => Input::post('address'),
					'additionals' => Input::post('additionals'),
				));

				if ($person and $person->save())
				{
					Session::set_flash('success', 'Added person #'.$person->id.'.');
					Response::redirect('person');
				}
				else
				{
					Session::set_flash('error', 'Could not save person.');
				}
			}
			else
			{
				Session::set_flash('error', $val->show_errors());
			}
		}

	}

	public function action_edit($id = null)
	{
		$person = Model_Person::find_one_by_id($id);

		if (Input::method() == 'POST')
		{
			$val = Model_Person::validate('edit');

			if ($val->run())
			{
				$person->name = Input::post('name');
				$person->surname = Input::post('surname');
				$person->tel = Input::post('tel');
				$person->email = Input::post('email');
				$person->address = Input::post('address');
				$person->additionals = Input::post('additionals');

				if ($person->save())
				{
					Session::set_flash('success', 'Updated person #'.$id);
					Response::redirect('person');
				}
				else
				{
					Session::set_flash('error', 'Nothing updated.');
				}
			}
			else
			{
				Session::set_flash('error', $val->show_errors());
			}
		}

		$this->template->set_global('person', $person, false);

	}

	public function action_delete($id = null)
	{
		if ($person = Model_Person::find_one_by_id($id))
		{
			$person->delete();

			Session::set_flash('success', 'Deleted person #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete person #'.$id);
		}

		Response::redirect('person');

	}


}