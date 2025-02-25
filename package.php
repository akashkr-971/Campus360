<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pricing Packages | M.A Developer</title>
  <link rel="stylesheet" href="style.css" />
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;800&display=swap');
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    body,
    html {
      width: 100%;
      height: 100%;
      background: white;
    }

    /* Center the main container */
    .main-container {
      max-width: 1200px;
      width: 100%;
      min-height: 100vh;
      margin: 0 auto; /* Center horizontally */
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 1rem;
      background: white;
    }

    h1 {
      font-size: 36px;
      font-weight: 800;
      margin-bottom: 10px;
      text-align: center;
    }

    .paragraph {
      color: #848199;
      font-size: 18px;
      margin-bottom: 20px;
      text-align: center;
    }

    .btn-sec {
      display: flex;
      border-radius: 25px;
      overflow: hidden;
      background: #fff;
      border: 2px solid #5243c2;
      margin-bottom: 20px;
    }

    .btn-sec button {
      width: 120px;
      padding: 12px;
      background: none;
      outline: none;
      border: none;
      font-size: 14px;
      font-weight: 600;
      border-radius: 25px;
      cursor: pointer;
      transition: 0.3s;
    }

    .btn-sec button.active {
      background: #5243c2;
      color: #fff;
    }

    .packages-sec {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;
      gap: 20px;
      margin-top: 20px;
    }

    .package {
      width: 320px;
      height: 450px;
      background: #fff;
      padding: 30px;
      border-radius: 20px;
      box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
      text-align: center;
      transition: 0.3s;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      position: relative;
    }

    .package:hover {
      transform: translateY(-5px);
      box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.15);
    }

    .package h2 {
      font-size: 28px;
      font-weight: 800;
      margin-bottom: 10px;
      color: #231d4f;
    }

    .package h3 {
      font-size: 20px;
      font-weight: 700;
      color: #5243c2;
      margin-bottom: 5px;
    }

    .package p {
      font-size: 14px;
      color: #848199;
      margin-bottom: 15px;
    }

    .package ul {
      list-style-type: none;
      padding: 0;
    }

    .package ul li {
      font-size: 14px;
      color: #555;
      margin: 10px 0;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .package ul li::before {
      content: '✔';
      color: #5243c2;
      font-weight: bold;
    }

    /* Override the checkmark color for the popular card */
    .popular ul li::before {
      color: #fff;
    }

    .package button {
      width: 100%;
      background: #f496d1;
      color: #fff;
      padding: 12px;
      font-size: 14px;
      font-weight: 700;
      border: none;
      border-radius: 25px;
      cursor: pointer;
      transition: 0.3s;
    }

    .package button:hover {
      background: #e07db8;
    }

    .popular {
      background: #5243c2;
      color: #fff;
    }

    .popular h2,
    .popular h3,
    .popular p,
    .popular ul li {
      color: #fff;
    }

    .popular button {
      background: #f496d1;
      color: #5243c2;
    }

    .mpopular {
      position: absolute;
      top: 10px;
      right: 10px;
      font-size: 12px;
      font-weight: 700;
      background: #4031b3;
      color: #f496d1;
      padding: 5px 10px;
      border-radius: 10px;
    }

    @media (max-width: 768px) {
      .package {
        width: 100%;
      }
    }
  </style>
</head>
<body>
  <div class="main-container">
    <div class="row text-center mb-5">
      <div class="col-12">
        <h2 class="display-5 fw-bold mb-3">Simple, Transparent Pricing</h2>
        <div class="divider d-flex align-items-center justify-content-center mb-4">
          <div class="line bg-primary" style="width: 50px; height: 3px;"></div>
          <div class="mx-3"><i class="bi bi-wallet-fill text-primary"></i></div>
          <div class="line bg-primary" style="width: 50px; height: 3px;"></div>
        </div>
        <p class="lead text-muted">No Contracts, No Surprise Fees</p>
      </div>
    </div>
    <div class="btn-sec">
      <button id="monthlyBtn" class="active" onclick="changePricing('monthly')">Monthly</button>
      <button id="yearlyBtn" onclick="changePricing('yearly')">Yearly</button>
    </div>

    <div class="packages-sec">
      <div class="package">
        <h2 id="intro-price">₹50000<span>/month</span></h2>
        <h3>Intro</h3>
        <p>For most businesses that want to optimize web queries</p>
        <ul>
          <li>Camera integration</li>
          <li>Chat support</li>
          <li>Mental and financial integration</li>
        </ul>
        <button>Choose Plan</button>
      </div>

      <div class="package popular">
        <p class="mpopular">Most Popular</p>
        <h2 id="pro-price">₹80000<span>/month</span></h2>
        <h3>Pro</h3>
        <p>For most businesses that want to optimize web queries</p>
        <ul>
          <li>VR integration</li>
          <li>QR code and event integration</li>
          <li>AI integration</li>
        </ul>
        <button>Choose Plan</button>
      </div>
    </div>
  </div>

  <script>
    function changePricing(plan) {
      let introPrice = document.getElementById('intro-price');
      let proPrice = document.getElementById('pro-price');
      let monthlyBtn = document.getElementById('monthlyBtn');
      let yearlyBtn = document.getElementById('yearlyBtn');

      if (plan === 'monthly') {
        introPrice.innerHTML = `₹50000<span>/month</span>`;
        proPrice.innerHTML = `₹80000<span>/month</span>`;
        monthlyBtn.classList.add('active');
        yearlyBtn.classList.remove('active');
      } else {
        introPrice.innerHTML = `₹600000<span>/year</span>`;
        proPrice.innerHTML = `₹960000<span>/year</span>`;
        yearlyBtn.classList.add('active');
        monthlyBtn.classList.remove('active');
      }
    }
  </script>
</body>
</html>
