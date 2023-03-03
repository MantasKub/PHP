<?php

namespace Views;

class SearchView
{
  public function displaySearchResults($results)
  {
    // Display the search results to the user
    if (count($results) > 0) {
      echo "<ul>";
      foreach ($results as $result) {
        echo "<li><a href='" . $result['thumbnail_url'] . "'>" . $result['name'] . "</a></li>";
      }
      echo "</ul>";
    } else {
      echo "No results found.";
    }
  }
}
