<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
  <title>Laravel Firsts Steps</title>
</head>
<style>
  * {
    font-family: 'Lato', sans-serif;
  }

  h1, p {
    color: #0074cb;
  }
  ul {
    padding: 0;
    display: flex;
  }

  li {
    list-style: none;
    margin: 0 20px;
  }

  a {
    text-decoration: none;
    color: #0074cb;
  }

  body {
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    background: #1FA2FF;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #A6FFCB, #12D8FA, #1FA2FF);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #A6FFCB, #12D8FA, #1FA2FF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  }

  .container {
    text-align: center;
    border-radius: 8px;
    display: flex;
    flex-direction: column;
    box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
    background-color: rgba(256, 256, 256, 0.3);
  }
</style>
<body>
  <div class="container">
    <h1>CIAO :)</h1>
    <div>
      <ul>
        <li><a href="/chi-sono">Chi sono</a></li>
        <li><a href="/flex">Flex</a></li>
        <li><a href="/cv">CV</a></li>
      </ul>
    </div>
  </div>
</body>
</html>