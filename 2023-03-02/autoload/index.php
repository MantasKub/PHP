<?php

spl_autoload_register(function($klase) {
  include $klase . '.php';
});

echo Controller\A::index() . '<br />';
echo Model\A::index() . '<br />';
echo Model\B::index() . '<br />';