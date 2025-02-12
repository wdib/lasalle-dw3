<?php
  $cities  = [
    'London' => '48 Store Street, WC1E 7BS',
    'Sydney' => '151 Oxford Street, 2021',
    'NYC'    => '1242 7th Street, 10492',
  ];

  $city     = isset( $_GET[ 'city' ] ) ? $_GET[ 'city' ] : '';
  $is_valid = array_key_exists( $city, $cities );

  if ( $is_valid ) {
    $h1_text = $city;
    $address = $cities[ $city ];
  }
  else {
    $h1_text = '';
    $address = 'Please select a city';
  }
?>

<?php include 'includes/header.php' ?>

<?php foreach ( $cities as $key => $value ) { ?>
  <a href="get-3.php?city=<?= $key ?>"><?= $key ?></a>
<?php } ?>

<h1><?= $h1_text ?></h1>
<p><?= $address ?></p>

<?php include 'includes/footer.php' ?>