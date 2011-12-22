<?php
class Controller_Notes extends Controller_Agenda
{
    var $view_dir = 'notes';

    public function after($response)
    {
        $this->data['list'] = Model_Note::find(array('order_by' => array('title' => 'asc')));

        return parent::after($response);
    }

	public function action_index()
	{
		$this->data['notes'] = Model_Note::find_all();

	}

	public function action_view($id = null)
	{
		$this->data['note'] = Model_Note::find_by_pk($id);

	}

	public function action_create($id = null)
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Note::validate('create');
			
			if ($val->run())
			{
				$note = Model_Note::forge(array(
					'title' => Input::post('title'),
					'description' => Input::post('description'),
				));

				if ($note and $note->save())
				{
					Session::set_flash('success', 'Added note #'.$note->id.'.');
					Response::redirect('notes');
				}
				else
				{
					Session::set_flash('error', 'Could not save note.');
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
		$note = Model_Note::find_one_by_id($id);

		if (Input::method() == 'POST')
		{
			$val = Model_Note::validate('edit');

			if ($val->run())
			{
				$note->title = Input::post('title');
				$note->description = Input::post('description');

				if ($note->save())
				{
					Session::set_flash('success', 'Updated note #'.$id);
					Response::redirect('notes');
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

		$this->template->set_global('note', $note, false);

	}

	public function action_delete($id = null)
	{
		if ($note = Model_Note::find_one_by_id($id))
		{
			$note->delete();

			Session::set_flash('success', 'Deleted note #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete note #'.$id);
		}

		Response::redirect('notes');

	}


}