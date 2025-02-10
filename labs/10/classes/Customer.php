<?php
  class Customer {
    public string $first_name;
    public string $last_name;
    public string $email;
    public array $accounts;

    public function __construct (
      string $first_name,
      string $last_name,
      string $email,
      array  $accounts,
    ) {
      $this->first_name = $first_name;
      $this->last_name  = $last_name;
      $this->email      = $email;
      $this->accounts   = $accounts;
    }

    public function getFullName (): string {
      return $this->first_name . ' ' . $this->last_name;
    }
  }
?>