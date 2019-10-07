<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {


    private $exampleData;

    function __construct()
    {
        // Service Layer
        $ioc = new Acme\Ioc;
        $this->exampleData  = $ioc->ioc->make('ExampleController');
    }

	public function index()
	{
        // I mirror the name of my method in the Service Layer, so in this
        // example, they are both index.
        $userId = 1;
        $data['user'] = $this->exampleData->index($userId);

        // This is what you would send to your view
        // Notice we have access to dd();
        dd($data['user']);

//		$this->load->view('welcome_message');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
