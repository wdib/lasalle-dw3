<?php
  declare(strict_types = 1);

  class Account {
    public    AccountNumber $number;
    public    string        $type;
    protected float         $balance;

    public function __construct (
      AccountNumber $number,
      string        $type,
      float         $balance = 0.00
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

  class AccountNumber {
    protected int $accountNumber;
    protected int $routingNumber;

    public function __construct ( int $accountNumber, int $routingNumber ) {
      $this->accountNumber = $accountNumber;
      $this->routingNumber = $routingNumber;
    }

    public function getAccountNumber () {
      return $this->accountNumber;
    }

    public function getRoutingNumber () {
      return $this->routingNumber;
    }
  }

  $accountNumbers = new AccountNumber( 23467289, 1398470710 );
  $account        = new Account( $accountNumbers, 'Savings', 180.00 );
?>

<?php include 'includes/header.php'; ?>

<h2><?= $account->type ?> Account</h2>
<p>Account number: <?= $account->number->getAccountNumber(); ?></p>
<p>Routing number: <?= $account->number->getRoutingNumber(); ?></p>
<p>Previous balance: $<?= $account->getBalance() ?></p>
<p>New balance: $<?= $account->deposit( 350.00 ) ?></p>