<?php
/**
 * Created by PhpStorm.
 * User: cesar
 * Date: 24/11/14
 * Time: 06:03 PM
 */

Class Observacion extends Eloquent {


    protected $table = 'observacion';
    protected $fillable = array('list_id', 'description');



    public function lista(){

        return $this->belongsTo('Lista');
    }
}