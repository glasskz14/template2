<?php
  $dbcon = mysqli_connect('localhost', 'root', '', 'fromlost' ) or die ('ไม่ติดต่อได้'). mysqli_connect_error();
  mysqli_set_charset ($dbcon, 'utf8');
