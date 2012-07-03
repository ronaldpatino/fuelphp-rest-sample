<?php
class Controller_Pictures extends Controller_Template 
{

	public function action_index()
	{
		$data['pictures'] = Model_Picture::find('all');
		$this->template->title = "Pictures";
		$this->template->content = View::forge('pictures/index', $data);

	}

	public function action_view($id = null)
	{
		$data['picture'] = Model_Picture::find($id);

		is_null($id) and Response::redirect('Pictures');

		$this->template->title = "Picture";
		$this->template->content = View::forge('pictures/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Picture::validate('create');
			
			if ($val->run())
			{
				$picture = Model_Picture::forge(array(
					'imagen' => Input::post('imagen'),
					'width' => Input::post('width'),
					'height' => Input::post('height'),
					'dimension_id' => Input::post('dimension_id'),
					'seccion_id' => Input::post('seccion_id'),
					'article_id' => Input::post('article_id'),
					'estado' => Input::post('estado'),
				));

				if ($picture and $picture->save())
				{
					Session::set_flash('success', 'Added picture #'.$picture->id.'.');

					Response::redirect('pictures');
				}

				else
				{
					Session::set_flash('error', 'Could not save picture.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Pictures";
		$this->template->content = View::forge('pictures/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('Pictures');

		$picture = Model_Picture::find($id);

		$val = Model_Picture::validate('edit');

		if ($val->run())
		{
			$picture->imagen = Input::post('imagen');
			$picture->width = Input::post('width');
			$picture->height = Input::post('height');
			$picture->dimension_id = Input::post('dimension_id');
			$picture->seccion_id = Input::post('seccion_id');
			$picture->article_id = Input::post('article_id');
			$picture->estado = Input::post('estado');

			if ($picture->save())
			{
				Session::set_flash('success', 'Updated picture #' . $id);

				Response::redirect('pictures');
			}

			else
			{
				Session::set_flash('error', 'Could not update picture #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$picture->imagen = $val->validated('imagen');
				$picture->width = $val->validated('width');
				$picture->height = $val->validated('height');
				$picture->dimension_id = $val->validated('dimension_id');
				$picture->seccion_id = $val->validated('seccion_id');
				$picture->article_id = $val->validated('article_id');
				$picture->estado = $val->validated('estado');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('picture', $picture, false);
		}

		$this->template->title = "Pictures";
		$this->template->content = View::forge('pictures/edit');

	}

	public function action_delete($id = null)
	{
		if ($picture = Model_Picture::find($id))
		{
			$picture->delete();

			Session::set_flash('success', 'Deleted picture #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete picture #'.$id);
		}

		Response::redirect('pictures');

	}


}