<?php

namespace Models;

class SearchModel extends Database
{

  public $table = 'videos';

  public function searchContent($searchTerm)
  {
    // Connect to the database
    $db = new Database();

    // Build the SQL query to search for content that matches the search term
    $results = self::$db->query("SELECT * FROM $this->table WHERE name LIKE '%$searchTerm%'");

    // Execute the query
    $results->fetch_all(MYSQLI_ASSOC);

    var_dump($results);

    // Return the search results
    return $results;
  }
}
