<?php



Class Lista extends Eloquent {

    protected $table= 'lista';
    protected $fillable = array('name');


    public function observacion(){

        return $this->hasMany('Observacion');
    }

    public function registro(){
        return $this->hasMany('Registro');
    }
}