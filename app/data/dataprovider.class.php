<?php
require_once('glossaryTerm.class.php');

class DataProvider
{
    function __construct($source)
    {
        $this->source = $source;
    }
    public function get_terms()
    {
    }
    public function get_term($term)
    {
    }
    public function search_terms($search)
    {
    }
    public function add_term($term, $definition)
    {
    }

    public function update_term($originalTerm, $newTerm, $definition)
    {
    }
    public function delete_term($term)
    {
    }
}
