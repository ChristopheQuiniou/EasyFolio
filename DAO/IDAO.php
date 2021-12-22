<?php

interface IDAO
{

    public function create( Object $obj ) : Boolean;

    public function read( Integer $id ) : Object ;

    public function update( Object $obj ) : Boolean;

    public function delete( Object $obj ) : Boolean;

}