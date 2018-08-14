<?php

return array(
  "driver" => "smtp",
  "host" => "smtp.mailtrap.io",
  "port" => 2525,
  "from" => array(
      "address" => "from@example.com",
      "name" => "Example"
  ),
  "username" => "a9bb9b65c86730",
  "password" => "d17a1b2f5c3328",
  "sendmail" => "/usr/sbin/sendmail -bs",
  "pretend" => false
);
