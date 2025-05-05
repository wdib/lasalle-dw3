<?php

?>
<table>
  <tr>
    <th>Name</th>
    <th>Description</th>
    <th>Available slots</th>
    <th>Register</th>
  </tr>
  <?php foreach ( $courses as $course ) {
    // Old developer comment:
    // "I need a variable here that checks if the student is registered for
    // the course and stores the result"

    // Old developer comment:
    // "I need a variable here that stores the action of the button:
    // 'register' - if the student has not registered for the course
    // 'deregister' - if the student has already registered for the course"

  ?>
    <tr>
      <td><?= $course[ 'name' ] ?></td>
      <td><?= $course[ 'description' ] ?></td>
      <td class="slots"><?= $course[ 'available_slots' ] ?></td>
      <td>
        <button data-course-id="<?= $course[ 'id' ] ?>" data-action="<?= $action ?>"
        ><?= ucfirst( $action ) ?></button>
      </td>
    </tr>
  <?php } ?>
</table>