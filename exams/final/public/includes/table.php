<?php
  $reg_count   = count( $registrations );
  $is_at_limit =  $reg_count == 2;
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
    $has_course = in_array( $course[ 'id' ], $registrations );

    // Old developer comment:
    // "I need a variable here that stores the action of the button:
    // 'register' - if the student has not registered for the course
    // 'deregister' - if the student has already registered for the course"
    $action = $has_course ? 'deregister' : 'register';
  ?>
    <tr>
      <td><?= $course[ 'name' ] ?></td>
      <td><?= $course[ 'description' ] ?></td>
      <td class="slots"><?= $course[ 'available_slots' ] ?></td>
      <td>
        <button data-course-id="<?= $course[ 'id' ] ?>" data-action="<?= $action ?>"
          <?= ( ! $has_course and $is_at_limit ) ? 'disabled' : '' ?>
        ><?= ucfirst( $action ) ?></button>
      </td>
    </tr>
  <?php } ?>
</table>