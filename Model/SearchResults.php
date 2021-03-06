<?php
namespace Lemon\RestBundle\Model;

class SearchResults
{
    protected $results;
    protected $total;

    public function __construct(array $results, $total)
    {
        $this->results = $results;
        $this->total = $total;
    }

    public function getResults()
    {
        return $this->results;
    }

    public function getTotal()
    {
        return $this->total;
    }
}
