<?php

require __DIR__ . '/functions.php';

$date = midnight();

// messages stats
$isNewDate = $bot->db->table('stats_messages')->where('date', $date)->count() == 0;
if ($isNewDate) {
  $bot->db->query("INSERT INTO stats_messages (date, count) VALUES ({$date}, 1)");
} else {
  $bot->db->query("UPDATE stats_messages SET count = count + 1 WHERE date = {$date}");
}

// new users stats
if ($bot->config['db.driver'] !== false) {
  $isNewDate = $bot->db->table('stats_new_users')->where('date', $date)->count() == 0;
  if ($bot->user->isNewUser) {
    if ($isNewDate) {
      $bot->db->query("INSERT INTO stats_new_users (date, count) VALUES ({$date}, 1)");
    } else {
      $bot->db->query("UPDATE stats_new_users SET count = count + 1 WHERE date = {$date}");
    }
  } else {
    if ($isNewDate) {
      $bot->db->query("INSERT INTO stats_new_users (date, count) VALUES ({$date}, 0)");
    }
  }
}
