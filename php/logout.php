<?php
session_start();

if(!empty($_SESSION['given_data']))
{
  unset($_SESSION['given_data']);
  header("Location: ../php/login.php");
}