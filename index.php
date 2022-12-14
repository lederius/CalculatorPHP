<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="LeDerius Franklin" />
    <meta name="description" content="A cash register to help manage funds" />
    <link rel="stylesheet" href="./index.css" />
    <title>Cash Register</title>
  </head>
  <body>
    <?php require 'functions.php'  ?> 
    <!-- i dont need to import if file is php -->
    <main class="registerContainer">
      <section class="registerScreen">
        <p class="moneyInitial">Welcome</p>
        <p class="moneyUpdated">0</p>
        <p class="moneyTotal">0</p>
      </section>
      <section class="registerButtons">
        <button id="buttonOne" onclick=<?php adjustValues(1.00); ?>>1</button>
        <button id="buttonTwo" onclick=<?php adjustValues(2); ?>>2</button>
        <button id="buttonThree" onclick=<?php adjustValues(3); ?>>3</button>
        <br />
        <button id="buttonFour" onclick=<?php adjustValues(4); ?>>4</button>
        <button id="buttonFive" onclick=<?php adjustValues(5); ?>>5</button>
        <button id="buttonSix" onclick=<?php adjustValues(6); ?>>6</button>
        <br />
        <button id="buttonSeven" onclick=<?php adjustValues(7); ?>>7</button>
        <button id="buttonEight" onclick=<?php adjustValues(8); ?>>8</button>
        <button id="buttonNine" onclick=<?php adjustValues(9); ?>>9</button>
        <br />
        <button id="buttonZero" onclick=<?php adjustValues(0); ?>>0</button>
        <br />
        <button id="buttonDecimal" onclick="addDecimal()">.</button>
        <button id="buttonPlus" onclick="addValues()">+</button>
        <button id="buttonMinus" onclick="minusValues()">-</button>
        <br />
        <button id="buttonTotal" onclick="totalValue()">Total</button>
      </section>
    </main>
    <br />
    <section class="recieptContainer">
      <h2>Reciept</h2>
      <ol class="reciept"></ol>
      <button onClick="totalCorrect()" class="recieptButtons">Correct</button>
      <button onClick="addItems()" class="recieptButtons">Additional</button>
    </section>
    <section class="paymentContainer">
      <h1>Payment</h1>
      <section class="paymentUserContainer">
        <h2>Received</h2>
        <p class="paymentReceivedTotal"></p>
        <button class="paymentValues" onclick="paymentReceived('Hundreds')">
          $100.00
        </button>
        <button class="paymentValues" onclick="paymentReceived('Fifties')">
          $50.00
        </button>
        <button class="paymentValues" onclick="paymentReceived('Twenties')">
          $20.00
        </button>
        <button class="paymentValues" onclick="paymentReceived('Tens')">
          $10.00
        </button>
        <button class="paymentValues" onclick="paymentReceived('Fives')">
          $5.00
        </button>
        <button class="paymentValues" onclick="paymentReceived('Ones')">
          $1.00
        </button>
        <button class="paymentValues" onclick="paymentReceived('Quarters')">
          $0.25
        </button>
        <button class="paymentValues" onclick="paymentReceived('Dimes')">
          $0.10
        </button>
        <button class="paymentValues" onclick="paymentReceived('Nickels')">
          $0.05
        </button>
        <button class="paymentValues" onclick="paymentReceived('Pennies')">
          $0.01
        </button>
      </section>
      <section class="paymentEmployeeContainer">
        <h2>Change</h2>
        <p class="paymentChangeTotal"></p>
        <ol class="giveCustomer">
        </ol>
      </section>
    </section>
    <section class="cashRegisterContainer"></section>
    <!-- <script src="./index.js"></script> -->
  </body>
</html>
