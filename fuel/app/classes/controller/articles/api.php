<?php

class Controller_Articles_Api extends Controller_Rest
{

	protected $format = 'json';

	public function get_index()
    {
		if(Input::get('id'))
		{
			$article = Model_Article::find(Input::get('id'), array('related' => array('pictures')));
					
			if ($article)
			{
				$respuesta = array("success"=>"true", "data"=>$article);				
				$this->response($respuesta, 200);
				
			}
			else
			{
				$respuesta = array("error"=>"true", "msg"=>'No encontrado');
				$this->response($respuesta, 404);				
			}
		
		}
		else
		{
			$articles = Model_Article::find('all', array('related' => array('pictures')));
			if ($articles)
			{
				$articles = Model_Article::find('all', array('related' => array('pictures')));    
				$respuesta = array("success"=>"true", "data"=>$articles);	    
				$this->response($respuesta, 200);
			}
			else
			{
				$respuesta = array("error"=>"true", "msg"=>'No encontrado');
				$this->response($respuesta, 404);				
			}
			
		}
	
    }
    

	function delete_index() 
	{
		if(Input::get('id'))
		{
			$articulo = Model_Article::find(Input::get('id'));
			if ($articulo)
			{				
				$articulo->delete();	
				$respuesta = array("success"=>"true", "data"=>array('msg'=>'Articulo Eliminado'));	    
				$this->response($respuesta, 200);

			}	
			else
			{
				$respuesta = array("error"=>"true", "msg"=>'id No encontrado, No se pudo borrar');
				$this->response($respuesta, 404);				
				
			}		
		}
		else
		{
		$respuesta = array("error"=>"true", "msg"=>'No encontrado, No se pudo borrar');
		$this->response($respuesta, 404);				
			
		}
		
	}

}
