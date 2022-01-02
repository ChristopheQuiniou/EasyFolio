<?php

interface IDAO
{

    public static function create( object $obj ) : int;

    public static function read( int $id ) : ?object ;

    public static function update( object $obj ) : bool;

    public static function delete( object $obj ) : bool;

}