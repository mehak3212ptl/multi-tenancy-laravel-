<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Event Pricing</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: #f8fbff;
      font-family: 'Poppins', sans-serif;
    }
    .pricing-section {
      padding: 60px 0;
      text-align: center;
    }
    .pricing-header h2 {
      font-weight: 700;
      margin-bottom: 10px;
    }
    .pricing-header p {
      max-width: 600px;
      margin: 0 auto 30px;
      color: #6c757d;
    }
    .pricing-toggle {
      margin-bottom: 50px;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .pricing-toggle label {
      margin: 0 10px;
      font-weight: 500;
    }
    .card {
      border: none;
      border-radius: 15px;
      transition: all 0.3s;
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
    }
    .card:hover {
      transform: translateY(-10px);
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }
    .price {
      font-size: 2.5rem;
      font-weight: 700;
      margin-bottom: 10px;
    }
    .btn-get-started {
      margin-top: 20px;
      padding: 10px 25px;
      border-radius: 30px;
      font-weight: 500;
    }
    .basic-plan {
      background: linear-gradient(to bottom, #6dd5fa, #2980b9);
      color: #fff;
    }
    .basic-plan .btn-get-started {
      background: #fff;
      color: #2980b9;
      border: none;
    }
    .card .list-unstyled {
      text-align: left;
      margin-top: 20px;
    }
    .card .list-unstyled li {
      margin-bottom: 10px;
      position: relative;
      padding-left: 20px;
    }
    .card .list-unstyled li::before {
      content: "•";
      color: #0d6efd;
      font-size: 1.5rem;
      position: absolute;
      left: 0;
      top: -3px;
    }
    .basic-plan .list-unstyled li::before {
      color: #fff;
    }
  </style>
</head>
<body>

<section class="pricing-section">
  <div class="container">
    <div class="pricing-header mb-5">
      <h2>Choose a Plan With  Packages & Pricing</h2>
      <p>Perfect for events where attendees must register & pay to attend, such as Conferences, Training, Sports, Fundraising, and more.</p>
    </div>

    <div class="pricing-toggle">
      <label>Paid Products</label>
      <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" id="eventSwitch" checked>
      </div>
      <label>Free Products</label>
    </div>

    <div class="row g-4">
      <!-- Basic Plan -->
      <div class="col-md-4">
        <div class="card basic-plan p-4 h-100">
          <h5>Gold</h5>
          <div class="price">$1.25</div>
          <ul class="list-unstyled">
            <li>Usage of 2 Websites </li>
            <li>100 Products Crud </li>
            <li>Use Your Own Payment Gateway</li>
            <li>Basic Attendee Self-Service</li>
            <li>Priority Support</li>
          </ul>
          <button class="btn btn-get-started">Get started</button>
        </div>
      </div>

      <!-- Pro Plan -->
      <div class="col-md-4">
        <div class="card p-4 h-100 bg-white">
          <h5>Diamond</h5>
          <div class="price">$1.50</div>
          <ul class="list-unstyled">
            <li>Usage of 10 Websites </li>
            <li>200 Products Crud</li>
            <li>Use Your Own Payment Gateway</li>
            <li>Advanced Attendee Self-Service</li>
            <li>Priority Support</li>
          </ul>
          <button class="btn btn-outline-secondary btn-get-started">Get started</button>
        </div>
      </div>

      <!-- Prepaid Plan -->
      <div class="col-md-4">
        <div class="card p-4 h-100 bg-white">
          <h5>Platinum</h5>
          <div class="price">$2.00</div>
          <ul class="list-unstyled">
            <li>Usage of 15 Websites </li>
            <li>500 Products Crud </li>
            <li>Use Your Own Payment Gateway</li>
            <li>Platinum Attendee Self-Service</li>
            <li>Priority Support</li>
          </ul>
          <button class="btn btn-outline-secondary btn-get-started">Get started</button>
        </div>
      </div>
    </div>

  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
