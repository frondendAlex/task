<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Отчет</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    
    <header class="header">
        <div class="container">
            <div class="header">
                <div class="header__top">
                    <button class="header__top-btn" type="button" aria-label="Открыть модальное окно">
                        <span>Войти</span>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <section class="section-content">
        <div class="container">
            <div class="section__header">
                <h1 class="section__title">Отчет</h1>
            </div>
            <div class="content">
                <div class="content__wrap">

                    <div class="content__col">
                        <div class="content__item">
                            <div class="content__number">
                                <span>№1</span>
                            </div>
                            <div class="content__title">
                                <h2>Отчет1</h2>
                            </div>
                            <div class="content__link">
                                <a href="">http://192.168.1.99/demo8/dist/apps/user-management/users/list.html</a>
                            </div>
                            <div class="content__count">
                                <span class="content__count-text">Кол-во:</span>
                                <span class="content__count-number">1</span>
                            </div>
                        </div>
                    </div>

                    <div class="content__col">
                        <div class="content__item">
                            <div class="content__number">
                                <span>№2</span>
                            </div>
                            <div class="content__title">
                                <h2>Отчет2</h2>
                            </div>
                            <div class="content__link">
                                <a href="">Ссылка2</a>
                            </div>
                            <div class="content__count">
                                <span class="content__count-text">Кол-во:</span>
                                <span class="content__count-number">3</span>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="content__total">
                    Итого: <span>4</span>
                </div>
            </div>
        </div>
    </section>


    <footer class="footer">
        
    </footer>

    <!-- >>> BEGIN modal <<< -->
    <div class="modal modal__signin">
        <div class="modal__wrap modal__signin-wrap">
            <div class="modal__header">
                <button class="modal__header-close" type="button" aria-label="Закрыть модальное окно">Закрыть</button>
                <h2 class="modal__header-title">Войти в систему</h2>
            </div>
            <div class="modal__body">
                <form class="modal__signin-form" action="" method="POST">
                    <div class="modal__signin-field">
                        <label class="modal__signin-field-label">
                            <span class="modal__signin-field-text">Имя</span>
                            <input class="modal__signin-field-input" autocomplete="off" type="text" name="name">
                            <span class="modal__signin-field-error">Не правальное имя</span>
                        </label>
                    </div>
                    <div class="modal__signin-field">
                        <label class="modal__signin-field-label">
                            <span class="modal__signin-field-text">Пароль</span>
                            <input class="modal__signin-field-input" type="password" name="password">
                            <span class="modal__signin-field-error">Не правальный пароль</span>
                        </label>
                    </div>
                    <button class="modal__signin-btn" type="submit">Войти</button>
                </form>
            </div>
        </div>
    </div>
    <!-- >>> END modal <<< -->

    <!-- >>> BEGIN overlow <<< -->
    <div class="overlow"></div>
    <!-- >>> END overlow <<< -->

    <script src="js/main.js"></script>
</body>
</html>