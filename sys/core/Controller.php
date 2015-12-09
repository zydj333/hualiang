<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package		CodeIgniter
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc.
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * CodeIgniter Application Controller Class
 *
 * This class object is the super class that every library in
 * CodeIgniter will be assigned to.
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Libraries
 * @author		ExpressionEngine Dev Team
 * @link		http://codeigniter.com/user_guide/general/controllers.html
 */
class CI_Controller {

	private static $instance;

	/**
	 * Constructor
	 */
	public function __construct()
	{
		self::$instance =& $this;

		// Assign all the class objects that were instantiated by the
		// bootstrap file (CodeIgniter.php) to local class variables
		// so that CI can run as one big super object.
		foreach (is_loaded() as $var => $class)
		{
			$this->$var =& load_class($class);
		}

		$this->load =& load_class('Loader', 'core');

		$this->load->initialize();
		
		log_message('debug', "Controller Class Initialized");
	}

	public static function &get_instance()
	{
		return self::$instance;
	}
}
// END Controller class

/* End of file Controller.php */
/* Location: ./system/core/Controller.php */
class Admin_Controller extends CI_Controller {

    protected $userid;
    protected $username;
    protected $userinfo;

    public function __construct() {
        parent::__construct();
        $this->common->checkAdminLogin();
        $this->userid = $this->common->get_session('user_id');
        $this->username = $this->common->get_session('user_name');
        $this->userinfo = json_decode($this->common->get_session('user_info'));
    }
    
    /**
     * 
     * @todo 载入页面头部
     * 
     * @param $param 头部参数
     * 
     */
    public function loadHeader($param) {
        $param['userinfo'] = $this->userinfo;
        $list = $this->common_model->getSystemList(0);
        if (!empty($list)) {
            //获取二级模块
            foreach ($list as $key => $value) {
                $list[$key]->second = $this->common_model->getSystemList($value->id);
            }
        }
        $param['list'] = $list;
        $this->load->view('admin/public/header', $param);
    }

}