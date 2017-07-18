<?php
      $con = mysql_connect("localhost","id2249677_user001","vvManmin77","id2249677_users");

      $name = $_POST["name"];
      $age = $_POST["age"];
      $username = $_POST["username"];
      $password = $_POST["password"];

      $statement = mysql_prepare($con, "INSERT INTO user (name, age, username, password) VALUES (?, ?, ?, ?)");
      mysqli_stmt_bind_param($statement, "siss", $name, $age, $username, $password);
      mysqli_stmt_execute($statement);

      $response = array();
      $response["success"] = true;

      echo json_encode($response);
 ?>
