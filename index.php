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
                        <span>Добавить запись</span>
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

            <div class="tabs">
                <div class="tabs__item tabs--active" data-tabs="1">
                    <button type="button" class="tabs__btn">
                        <span>Сайт</span>
                    </button>
                </div>
                <div class="tabs__item" data-tabs="2">
                    <button type="button" class="tabs__btn">
                        <span>Метроник</span>
                    </button>
                </div>
            </div>

            <h1>Создана ветка test</h1>
            <h1>Коммит 1</h1>
            <h1>Создана ветка test1</h1>
            <p>Переместил из ветки test1 в test</p>
            <p>Еще одна ветка</p>

            <div class="content">
                <div class="content__item content--active" data-content="1">
                    <div class="content__col">
                        <div class="content__col-number content__col-border">№<span>1</span></div>
                        <div class="content__col-check content__col-border">
                            <input type="checkbox">
                        </div>
                        <div class="content__col-desc content__col-border">Описание 1 Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo, quaerat ad natus explicabo ex velit rerum deleniti voluptatem consequatur beatae.</div>
                        <div class="content__col-link content__col-border"><a href="">Ссылка 1 Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti beatae molestias enim velit quia quae maiores suscipit iste accusantium illo.</a></div>
                        <div class="content__col-edit content__col-border"><a href="">Редактировать</a></div>
                    </div>

                    <div class="content__col">
                        <div class="content__col-number content__col-border">№<span>2</span></div>
                        <div class="content__col-check content__col-border">
                            <input type="checkbox">
                        </div>
                        <div class="content__col-desc content__col-border">Описание 2 Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo, quaerat ad natus explicabo ex velit rerum deleniti voluptatem consequatur beatae.</div>
                        <div class="content__col-link content__col-border"><a href="">http://127.0.0.1/openserver/phpmyadmin/index.php?route=/sql&db=report&table=website&pos=0</a></div>
                        <div class="content__col-edit content__col-border"><a href="">Редактировать</a></div>
                    </div>
                </div>
                <div class="content__item" data-content="2">Контент 2</div>
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
                <h2 class="modal__header-title">Новая запись</h2>
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