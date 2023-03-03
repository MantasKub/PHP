<?php

namespace Controllers;

use \Models\Videos;
use \Models\Categories;
use \Models\Search;

class SearchController
{
  public static function search()
  {
    // Get the search term from the user input
    $searchTerm = $_POST['searchTerm'];

    // Call the model to search the database for content that matches the search term
    $searchModel = new \Models\SearchModel();
    $results = $searchModel->searchContent($searchTerm);

    var_dump($results);

    // Pass the search results to the view
    $searchView = new \Views\SearchView();
    $searchView->displaySearchResults($results);

    include 'views/search.php';
  }
}
