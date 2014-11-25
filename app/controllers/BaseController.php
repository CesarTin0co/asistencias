<?php
/**
 * Created by PhpStorm.
 * User: cesar
 * Date: 24/11/14
 * Time: 06:46 PM
 */

class BaseController extends Controller
{
    protected function setupLayout(){
        if(!is_null($this->layout)){
            $this->layout = View::make($this->layout);
        }
    }
}