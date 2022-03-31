<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADS.FORCE Login </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">

    <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>

    <link href='./styles/login.css' type='text/css' rel='stylesheet' />
</head>
<body>
    <div class="wrapper">
        <main class="main">
            <section class="auth__steps">
                <div class="container"> <!-- Войти -->
                    <div class="auth__login">
                        <h2 class="auth__title">
                            Войдите в аккаунт
                        </h2>
                        <h4 class="auth__sub">
                            Введите свои данные
                        </h4>
                        <div class="auth__error"></div> <!-- Сюда выводится ошибка -->
                        <form class="auth__form">
                            <input type="text" class="auth__input" type="text" placeholder="ФИО">
                            <input type="phone" class="auth__input" type="text" placeholder="Телефон">


                            <a class="auth__forgot">Забыли пароль?</a>

                            <div class="auth__down">
                                <div class="auth__down-account">
                                    <p class="auth__down-no-acccount">Нет аккаунта?</p>
                                    <a class="auth__down-reg">Зарегистрироваться</a>
                                </div>
                                <button type="submit" class="auth__btn">
                                    Войти
                                    <img class="auth__btn-img" src="./src/arrow-right.svg" alt="Стрелка вправо" />
                                </button>
                            </div>
                        </form>
                    </div>

                    <div class="auth__recovery-1"> <!-- Восстановить пароль шаг 1 -->
                        <h2 class="auth__title">
                            Восстановление пароля
                        </h2>
                        <h4 class="auth__sub">
                            Введите номер телефона
                        </h4>

                        <div class="auth__error"></div> <!-- Сюда выводится ошибка -->

                        <form class="auth__form">
                            <input type="phone" class="auth__input" type="text" placeholder="Телефон">

                            <div class="recovery-btn">
                                <button type="submit" class="auth__btn auth__recovery-1-btn">
                                    Отправить код
                                    <img class="auth__btn-img" src="./src/arrow-right.svg" alt="Стрелка вправо" />
                                </button>
                            </div>
                        </form>
                    </div>

                    <div class="auth__recovery-2"> <!-- Восстановить пароль шаг 2 -->
                            <h2 class="auth__title">
                                Восстановление пароля
                            </h2>
                            <h4 class="auth__sub">
                                Введите код из СМС
                            </h4>
                            
                            <div class="auth__error"></div> <!-- Сюда выводится ошибка -->
                            
                            <form class="auth__form">
                                <div class="recovery__input">
                                    <input type="phone" class="auth__input" style="margin: 0" type="text" placeholder="Код">
                                    <a class="code__timer">Отправить код повторно через <div class="timer__function"></div></a>
                                </div>

                                <span class="code__email">Если Вы не получили код в течении 5 минут — напишите нам на почту <a class="code__email-to" href="mailto:info@femidafors.ru">info@femidafors.ru</a> </span>

                                <div class="recovery-btn">
                                    <button type="submit" class="auth__btn">
                                        Перейти в кабинет
                                        <img class="auth__btn-img" src="./src/arrow-right.svg" alt="Стрелка вправо" />
                                    </button>
                                </div>
                            </form>
                    </div>

                    <div class="auth__reg-1">
                        <h2 class="auth__title">
                            Регистрация
                        </h2>
                        <h4 class="auth__sub">
                            Введите свои данные
                        </h4>
                        <div class="auth__error"></div> <!-- Сюда выводится ошибка -->
                        <form class="auth__form">
                            <input type="text" class="auth__input" type="text" placeholder="ФИО">
                            <input type="phone" id="auth__phone-reg" class="auth__input" type="text" placeholder="Телефон">

                            <div class="auth__down">
                                <div class="auth__down-account">
                                    <p class="auth__down-no-acccount">Есть аккаунт?</p>
                                    <a class="auth__down-login">Войти</a>
                                </div>

                                <div class="reg__btn">
                                    <button type="submit" class="auth__btn auth__reg-1-btn">
                                        Зарегистрироваться
                                        <img class="auth__btn-img" src="./src/arrow-right.svg" alt="Стрелка вправо" />
                                    </button>       
                                    <p class="reg__remark">Нажимая «Зарегистрироваться» Вы соглашаетесь, что ознакомлены с <a>условиями использования</a> и <a>политикой конфиденциальности</a></p>                             
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="auth__reg-2"> <!-- Восстановить пароль шаг 2 -->
                            <h2 class="auth__title">
                                Подтверждение регистрации
                            </h2>
                            <h4 class="auth__sub">
                                Введите код, полученный на номер телефонa <span class="auth__number"></span> <a class="auth__number-change">(изменить)</a>
                            </h4>
                            
                            <div class="auth__error"></div> <!-- Сюда выводится ошибка -->
                            
                            <form class="auth__form">

                                <div class="recovery__input">
                                    <input type="phone" class="auth__input" style="margin: 0" type="text" placeholder="Код">
                                    <a class="code__timer">Отправить код повторно через <div class="timer__function"></div></a>
                                </div>

                                <span class="code__email">Если Вы не получили код в течении 5 минут — напишите нам на почту <a class="code__email-to" href="mailto:info@femidafors.ru">info@femidafors.ru</a> </span>

                                <div class="reg__btn2">
                                    <button type="submit" class="auth__btn">
                                        Зарегистрироваться
                                        <img class="auth__btn-img" src="./src/arrow-right.svg" alt="Стрелка вправо" />
                                    </button>
                                </div>
                            </form>
                    </div>

                </div>
            </section>

        </main>
    </div>
    <script src="./js/login.js"></script>
</body>
</html>