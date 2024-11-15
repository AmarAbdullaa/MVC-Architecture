<?php 

/**
 * Main model class
 */
class Model extends Database
{
    function test()
    {
        $query = "SELECT * FROM users";
        $result = $this->query($query);
        show($result);
    }
}