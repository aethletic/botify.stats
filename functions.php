<?php

// like 2020-02-02 00:00:00
function midnight($timestamp = false)
{
  $timestamp = $timestamp ? $timestamp : time();
  return strtotime(date('Y-m-d', $timestamp) . ' midnight');
}
