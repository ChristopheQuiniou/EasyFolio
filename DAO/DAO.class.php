<?php

class DAO
{

    protected static Object $db;
    private static Object $instance;

    private function __construct( Object $db ){
        $this->db = $db;
    }

    /**
     * @param Object $db database instance
     * @return Object return the DAO singleton
     */
    public final static function Init( Object $db ) {

        if ( is_null(DAO::$instance) ){
            DAO::$instance = new DAO($db);
        }

        return DAO::$instance;

    }


}