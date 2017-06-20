<?php
$visitCounter = 0;
$lastVisit = null;

if (isset($_COOKIE['visitCounter'])) {
  $visitCounter = $_COOKIE['visitCounter'] + 1;
  $lastVisit = $_COOKIE['lastVisit'];
} else {
  $visitCounter = 1;
}

if(!isset($_COOKIE['visitCounter']) || date('d-m-Y', $_COOKIE['lastVisit']) != date('d-m-Y')) {
  setcookie('visitCounter', $visitCounter, date("U")+3600);
  setcookie('lastVisit', date('U'));
}
