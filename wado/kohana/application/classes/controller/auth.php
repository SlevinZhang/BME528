<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Controller {

	public function before()
	{
		if ( Authen::instance()->logged_in())
		{
			// It is already logged in
			Request::current()->redirect('admin');
		}
		
		$this->template = Kostache::factory('auth');

		$this->get = $this->request->query();
		$this->post = $this->request->post();
	
	}

	public function action_login()
	{
		if (HTTP_Request::POST == $this->request->method())
		{
			$user_post = Arr::get($this->post, 'user', array());

			$user = new Model_User(Arr::get($user_post, 'username'));
		
			// Log the user in
			if (Authen::instance()->login(
				$user,
				Arr::get($user_post, 'password')
			))
			{
				// Perform the redirect
				$redirect = Arr::get($this->post, 'redirect', 'admin');
				Request::current()->redirect($redirect);
			}
			else
			{
				Hint::error('auth.login.error');
			}
		}
		
		// Apply the redirect if set
		$this->template->redirect = Arr::get($_GET, 'redirect', '');		
		
		$this->_messages();
		
	}
	
	public function action_signup()
	{
		$this->template->partial('body', 'auth/signup');

		$user = new Model_User;
		
		if (HTTP_Request::POST == $this->request->method())
		{
			$user_post = Arr::get($this->post, 'user', array());
			
			// Make sure email and username are lowercased
			$user_post['email']    = strtolower($user_post['email']);
			$user_post['username'] = strtolower($user_post['username']);
			
			// Create the validation
			$validate = Model_User::get_password_validation($user_post);

			// Save the roles
			$roles = Arr::get($user_post, 'role_id', array());
			
			// Unset unnecessary fields
			unset($this->post['user']['role_id']);
			unset($this->post['user']['repeat_password']);

			$user->set_fields($user_post);

			try
			{
				$user->save($validate);

				// Assign Login role
				$user->roles = Model_Role::LOGIN;

				// Log the user in
				Authen::instance()->login(
					$user,
					Arr::get($user_post, 'password')
				);

				// Redirect
				Request::current()->redirect('admin');
			}
			catch (AutoModeler_Exception $e)
			{
				// Err... errors
				foreach ($e->errors as $key => $text)
				{
					// Save them to the session
					Hint::error($text);
				}
			}
		}

		$this->template->user = $user;
		
		// Parse the errors
		$this->_messages();
	}

	protected function _messages()
	{
		// Get messages
		$hints = Hint::get_once(array(Hint::SUCCESS, Hint::ERROR, Hint::WARNING));

		if ($hints !== NULL)
		{
			$this->template->messages['types'] = array();
			$messages = array();
			foreach ($hints as $message)
			{
				// Append each one
				 $messages[$message['type']][] = array('text' => $message['text']);
			}
			
			$types = array(
				'error' => 'error',
				'success' => 'notice',
				'warning' => 'warning',
			);
			
			foreach ($messages as $type => $list)
			{
			
				$this->template->messages['types'][] = array('type' => $types[$type], 'message' => $list);
			}
		}
	}

	public function after()
	{
		$this->response->body($this->template);
	}

} // End Auth
