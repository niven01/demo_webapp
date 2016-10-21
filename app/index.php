<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Web App Sample Deployment</title>
  <style>
    body {
      color: #FFA500;
      background-color: #0188cc;
      font-family: Arial, sans-serif;
      font-size: 14px;
    }

    h1 {
      font-size: 500%;
      font-weight: normal;
      margin-bottom: 0;
    }

    h2 {
      font-size: 200%;
      font-weight: normal;
      margin-bottom: 0;
    }
  </style>
</head>
<body>
  <div align="center">
    <h1>Web App Version 1.0</h1>
    <h2>Web App running on the host <?php echo gethostname(); ?>.</h2>
    <h2> Web Server versions:</h2>
    <h2> <?php echo $_SERVER['SERVER_SOFTWARE']; ?>.</h2>
    <p>For next steps, read the <a href="http://aws.amazon.com/documentation/codedeploy">AWS CodeDeploy Documentation</a>.</p>
  </div>
</body>
</html>
