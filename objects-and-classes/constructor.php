<?php
  class Customer {
    public string $first_name;
    public string $last_name;
    public string $email;

    public function __construct (
      string $first_name,
      string $last_name,
      string $email,
    ) {
      $this->first_name = $first_name;
      $this->last_name  = $last_name;
      $this->email      = $email;
    }
  }

  class Account {
    public int    $number;
    public string $type;
    public float  $balance;

    public function __construct (
      int    $number,
      string $type,
      float  $balance
    ) {
      $this->number  = $number;
      $this->type    = $type;
      $this->balance = $balance;
    }
  }

  $customer = new Customer( 'Sally', 'Smith', 'sally@abc.example' );
  $account  = new Account( 12983457925, 'chequing', 1000.00 );
?>

<?php include 'includes/header.php'; ?>

<h2>Customer</h2>
<p>
  <?= $customer->first_name . ' ' . $customer->last_name; ?>
  <br />
  <?= $customer->email; ?>
</p>

<h2>Account</h2>
<p>
  <?= $account->number . ' (' . $account->type . ')'; ?>
  <br />
  Balance: $<?= $account->balance; ?>
</p>