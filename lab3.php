<!DOCTYPE html>
<html>
<head>
    <title>Lab 3 - ATM Simulation</title>
    <style>
        body {
            background: #181818;
            color: #fff;
            font-family: Arial;
            padding: 40px;
        }

        .atm {
            max-width: 450px;
            margin: auto;
        }

        input, select, button {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border-radius: 5px;
            border: none;
        }

        input, select {
            background: #2c2c2c;
            color: white;
        }

        button {
            background: #ff9800;
            color: white;
            cursor: pointer;
        }

        .result {
            margin-top: 20px;
            padding: 10px;
            background: #2c2c2c;
        }
    </style>
</head>
<body>

<div class="atm">
    <h1>ATM Machine Simulation</h1>

    <form method="post">
        <input type="text" name="account_name" placeholder="Account Name" required>
        <input type="number" name="initial_balance" placeholder="Initial Balance" required>

        <select name="action">
            <option value="check">Check Balance</option>
            <option value="deposit">Deposit</option>
            <option value="withdraw">Withdraw</option>
        </select>

        <input type="number" name="amount" placeholder="Amount (for deposit/withdraw)" value="0">

        <button type="submit">Submit</button>
    </form>

    <?php
    class ATM {
        private $accountName;
        private $balance;

        public function __construct($name, $balance) {
            $this->accountName = $name;
            $this->balance = $balance;
        }

        public function getBalance() {
            return $this->balance;
        }

        public function getAccountName() {
            return $this->accountName;
        }

        public function deposit($amount) {
            $this->balance += $amount;
            return "Deposit of $amount successful.";
        }

        public function withdraw($amount) {
            if ($amount > $this->balance) {
                return "Insufficient balance!";
            }
            $this->balance -= $amount;
            return "Withdrawal of $amount successful.";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['account_name'];
        $balance = $_POST['initial_balance'];
        $action = $_POST['action'];
        $amount = $_POST['amount'];

        $atm = new ATM($name, $balance);

        echo "<div class='result'>";
        echo "<h3>Transaction Result</h3>";
        echo "<p>Account: $name</p>";

        if ($action == "check") {
            echo "<p>Current Balance: " . $atm->getBalance() . "</p>";
        } 
        elseif ($action == "deposit") {
            echo "<p>" . $atm->deposit($amount) . "</p>";
            echo "<p>New Balance: " . $atm->getBalance() . "</p>";
        } 
        elseif ($action == "withdraw") {
            echo "<p>" . $atm->withdraw($amount) . "</p>";
            echo "<p>New Balance: " . $atm->getBalance() . "</p>";
        }

        echo "</div>";
    }
    ?>
</div>

</body>
</html>