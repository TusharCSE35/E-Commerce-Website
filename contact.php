<!DOCTYPE html>
<html>
<head>
  <title>Contact Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f2f2f2;
    }

    .container {
      max-width: 600px;
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      text-align: center;
    }

    label {
      display: block;
      margin-bottom: 10px;
      font-weight: bold;
    }

    input,
    textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    textarea {
      height: 120px;
    }

    button {
      display: block;
      width: 100%;
      padding: 10px;
      margin-top: 10px;
      background-color: #4caf50;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Contact Us</h1>
    <form action="#" method="post">
      <h2>Author Name : Tushar Sarkar</h2>
      <h2>Website Name : E-Commerce Website</h2>
      <h2>Email : tusharcse35.bsmrstu@gmail.com</h2>
      <h2>Contact : 01521234871</h2>
      <h2>Open Hour : 24/7 Hr/day </h2>
      <label for="message">Message:</label>
      <textarea id="message" name="message" required></textarea>
      <button type="submit">Send Message</button>
    </form>
  </div>
</body>
</html>
