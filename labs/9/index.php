<?php
  declare(strict_types = 1);

  class Account {
    public int    $number;
    public string $type;
    public float  $balance;

    public function __construct ( int $number, string $type, float $balance = 0.00 ) {
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
  }

  $chequing = new Account( 43161176, 'Chequing', 32.00 );
  $savings  = new Account( 20148896, 'Savings', 756.00 );
?>

<?php include 'includes/header.php'; ?>

<h2>Account Balances</h2>
<table>
  <tr>
    <th>Date</th>
    <th><?= $chequing->type; ?></th>
    <th><?= $savings->type;  ?></th>
  </tr>
  <tr>
    <td>23 June</td>
    <td>$<?= $chequing->balance; ?></td>
    <td>$<?= $savings->balance;  ?></td>
  </tr>
  <tr>
    <td>24 June</td>
    <td>$<?= $chequing->deposit( 12.00  ); ?></td>
    <td>$<?= $savings->withdraw( 100.00 ); ?></td>
  </tr>
  <tr>
    <td>25 June</td>
    <td>$<?= $chequing->withdraw( 5.00 ); ?></td>
    <td>$<?= $savings->deposit( 300.00 ); ?></td>
  </tr>
</table>