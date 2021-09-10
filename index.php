<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Калькулятор</title>
  <link rel="stylesheet" href="/css/styles.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>
<body>
  <header>
    <div class="logo"><img src="/images/logo.png" alt="logotip"></div>
    <div class="phone">
      <h3>8-800-100-5005<br>+7(3452)522-000</h3>
    </div>
    <table width="100%">
      <thead align="center">
        <tr>
          <td><a href="#">Кредитные карты</a></td>
          <td><a href="#">Вклады</a></td>
          <td><a href="#">Дебетовая карта</a></td>
          <td><a href="#">Страхование</a></td>
          <td><a href="#">Друзья</a></td>
          <td><a href="#">Интернет-банк</a></td>
        </tr>
      </thead>
    </table>
  </header>
  <div>
    <ul class="breadcrumb">
      <li><a href="#">Главная</a></li>
      <li><a href="#">Вклады</a></li>
      <li>Калькулятор</li>
    </ul>
  </div>
  <main>
    <h2>Калькулятор</h2>
    <form class="myform">
      <div class="label">
        <label for="date">Дата оформления вклада</label><br>
        <label for="summn">Сумма вклада</label><br>
        <label>Срок вклада</label><br>
        <label>Пополнение вклада</label><br>
        <label for="summadd">Сумма пополнения вклада</label><br>
      </div>
      <div class="input">
        <input type="text" required name="date" id="datepicker" placeholder="ММ/ДД/ГГГГ"><br>
        <input type="number" required name="summn" id="summn" min="1000" max="3000000" oninput="fun_summn_p()"><br>
        <select name="year" required>
          <option value="1">1 год</option>
          <option value="2">2 года</option>
          <option value="3">3 года</option>
          <option value="4">4 года</option>
          <option value="5">5 лет</option>
        </select><br>
        <input type="radio" class="radio" checked name="addstatus" value="false"><label>Нет</label>
        <input type="radio" class="radio" name="addstatus" value="true"><label>Да</label><br>
        <input type="number" name="summadd" id="summadd" min="1000" max="3000000" oninput="fun_summadd_p()"><br>
      </div>
      <div class="runner">
        <input type="range" class="range" id="range_summn" min="1000" max="3000000" value="0" oninput="fun_summn_r()">
        <input type="range" class="range" id="range_summadd" min="1000" max="3000000" value="0" oninput="fun_summadd_r()">
      </div>
      <div class="result">
        <button type="submit">Рассчитать</button>
        <div class="mess"></div>
      </div>
    </form>
  </main>
  <footer>
    <ul>
      <li><a href="#">Кредитные карты</a></li>
      <li><a href="#">Вклады</a></li>
      <li><a href="#">Дебетовая карта</a></li>
      <li><a href="#">Страхование</a></li>
      <li><a href="#">Друзья</a></li>
      <li><a href="#">Интернет-банк</a></li>
    </ul>
  </footer>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="js/script.js"></script>
</body>
</html>
