<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class CI_Controller
{

    /**
     * Reference to the CI singleton
     *
     * @var    object
     */
    private static $instance;

    /**
     * Class constructor
     *
     * @return    void
     */
    public function __construct()
    {
        self::$instance =& $this;

        // Assign all the class objects that were instantiated by the
        // bootstrap file (CodeIgniter.php) to local class variables
        // so that CI can run as one big super object.
        foreach (is_loaded() as $var => $class) {
            $this->$var =& load_class($class);
        }

        $this->load =& load_class('Loader', 'core');
        $this->load->initialize();
        log_message('info', 'Controller Class Initialized');
    }


    /**
     * Get the CI singleton
     *
     * @static
     * @return    object
     */
    public static function &get_instance()
    {
        return self::$instance;
    }

    /** Responsável por converter os dados do formulário
     * @param $data
     * @param $model
     */

    public function form_validate($data, $model)
    {
        $this->load->library('form_validation');
        $classe = get_class_vars(get_class($model));
        $count = 0;


        foreach ($classe as $tabela => $entidades) {
//            echo $tabela."<br>";
            foreach ($entidades as $entidade => $configs) {

//                echo $entidade."<br>";
//                echo $configs['nome']."<br>";
//                echo $configs['type']."<br>";
//                echo $configs['required']."<br>";
//                echo $configs['maxlength']."<br>";

                if (($data[$entidade] === "" || $data[$entidade] === NULL || empty($data[$entidade]))) {
//                    if($configs['required'] == "true")
                    if($entidades[$entidade]['required'] == true) {
                        $count ++;
                        echo "O campo " . $entidade . " é obrigatório " . "<br>";
                    }


//                        $this->form_validation->set_rules($entidade,$configs['nome'],$required);
//                        if($this->form_validation->run()==FALSE){
//                            if($required != NULL ){

//                            }

//                        }else{
//                            $this->success(array('msg'=>'success'));
//                        }
                }

            }

            if(isset($count) && $count <= 0){
                return $data;
            }
        }

    }

    public function success($data = array())
    {
        return $this->output->set_output(json_encode($data));
    }


}
