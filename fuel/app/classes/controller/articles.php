<?php
class Controller_Articles extends Controller_Template 
{

	public function action_index()
	{
		$data['articles'] = Model_Article::find('all');
		$this->template->title = "Articles";
		$this->template->content = View::forge('articles/index', $data);

	}

	public function action_view($id = null)
	{
		$data['article'] = Model_Article::find($id);

		is_null($id) and Response::redirect('Articles');

		$this->template->title = "Article";
		$this->template->content = View::forge('articles/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Article::validate('create');
			
			if ($val->run())
			{
				$article = Model_Article::forge(array(
					'nombre' => Input::post('nombre'),
					'periodista_id' => Input::post('periodista_id'),
					'seccion_id' => Input::post('seccion_id'),
					'dimension_id' => Input::post('dimension_id'),
					'fecha' => Input::post('fecha'),
				));

				if ($article and $article->save())
				{
					Session::set_flash('success', 'Added article #'.$article->id.'.');

					Response::redirect('articles');
				}

				else
				{
					Session::set_flash('error', 'Could not save article.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Articles";
		$this->template->content = View::forge('articles/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('Articles');

		$article = Model_Article::find($id);

		$val = Model_Article::validate('edit');

		if ($val->run())
		{
			$article->nombre = Input::post('nombre');
			$article->periodista_id = Input::post('periodista_id');
			$article->seccion_id = Input::post('seccion_id');
			$article->dimension_id = Input::post('dimension_id');
			$article->fecha = Input::post('fecha');

			if ($article->save())
			{
				Session::set_flash('success', 'Updated article #' . $id);

				Response::redirect('articles');
			}

			else
			{
				Session::set_flash('error', 'Could not update article #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$article->nombre = $val->validated('nombre');
				$article->periodista_id = $val->validated('periodista_id');
				$article->seccion_id = $val->validated('seccion_id');
				$article->dimension_id = $val->validated('dimension_id');
				$article->fecha = $val->validated('fecha');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('article', $article, false);
		}

		$this->template->title = "Articles";
		$this->template->content = View::forge('articles/edit');

	}

	public function action_delete($id = null)
	{
		if ($article = Model_Article::find($id))
		{
			$article->delete();

			Session::set_flash('success', 'Deleted article #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete article #'.$id);
		}

		Response::redirect('articles');

	}


}