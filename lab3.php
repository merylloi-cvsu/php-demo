<!DOCTYPE html>
<html>
<head>
    <title>Lab 3 - ATM Simulation</title>
<style>
body{
    background:#f6f6f6;
    color:#222;
    font-family:Arial,sans-serif;
    padding:50px;
}

.atm{
    max-width:480px;
    margin:auto;
    background:white;
    padding:40px;
    border-radius:14px;
    box-shadow:0 4px 12px rgba(0,0,0,.05);
}

h1{
    text-align:center;
    font-weight:300;
    margin-bottom:30px;
}

input,select,button{
    width:100%;
    padding:13px;
    margin:8px 0;
    border-radius:8px;
    font-size:15px;
}

input,select{
    border:1px solid #ddd;
    background:#fff;
}

button{
    background:#111;
    color:white;
    border:none;
}

button:hover{
    opacity:.9;
}

.result{
    margin-top:25px;
    padding:20px;
    background:#fafafa;
    border:1px solid #eee;
    border-radius:10px;
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
