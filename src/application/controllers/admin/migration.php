<?php
/**
 * Migration controller
 *
 * Long description for class (if any)...
 * @author     Dharshana Jayamaha <dharshana@openarc.lk>
 * @copyright  2013 RAD Team - OpenArc
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    Release: 1.0
 * @link       http://pear.php.net/package/PackageName
 * @since      Class available since Release 1.0.0
 */
class Migration extends Admin_Controller
{
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->load->library('migration');
        if (! $this->migration->current()) {
        	show_error($this->migration->error_string());
        } else {
        	echo 'Migration Worked!';
        }

    }
}
