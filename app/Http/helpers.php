<?php


  function checkPermission($permissions){

    $userAccess = getMyPermission(auth()->user()->is_permission);

    foreach ($permissions as $key => $value) {

      if($value == $userAccess){

        return true;

      }

    }

    return false;

  }


  function getMyPermission($id)

  {

    switch ($id) {

      case 1:

        return 'admin';

        break;

      case 2:

        return 'driver';

        break;

      default:

        return 'customer';

        break;

    }

  }


?>