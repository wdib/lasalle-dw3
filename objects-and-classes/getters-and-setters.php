<?php
  declare(strict_types = 1);

  class Account {
    public    int    $number;
    public    string $type;
    protected float  $balance;

    public function __construct (
      int    $number,
      string $type,
      float  $balance = 0.00
    ) {
      $this->number  = $number;
      $this->type    = $type;
      $this->balance = $balance;
    }

    public function deposit( float $amount ): float {
      $this->balance += $amount;
      return $this->balance;
    }

    public function withdraw( float $amount ): float {
      $this->balance -= $amount;
      return $this->balance;
    }

    public function getBalance(): float {
      return $this->balance;
    }
  }

  $account = new Account( 3147134138, 'Savings', 180.00 );
?>

<?php include 'includes/header.php'; ?>

<h2><?= $account->type ?> Account</h2>
<p>Previous balance: $<?= $account->getBalance() ?></p>
<p>New balance: $<?= $account->deposit( 350.00 ) ?></p>