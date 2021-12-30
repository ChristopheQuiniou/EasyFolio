<?php

interface IDAO
{

    public function create( object $obj ) : bool;

    public function read( int $id ) : ?object ;

    public function update( object $obj ) : bool;

    public function delete( object $obj ) : bool;

}