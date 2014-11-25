<?php

Class Registro extends Eloquent {


    protected $table = 'registro';
    protected $fillable = array('user_id', 'course_id', 'list_id', 'assist');



    public function lista(){

        return $this->belongsTo('Lista');
    }
}


