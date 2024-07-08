<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница - Rock Paper Scissors</title>
    <link rel="stylesheet" href="{{ asset('app/welcome.css') }}">
</head>
<body>
    <section>
        <header>
            <div>
                <nav>
                    <ul class="nav">
                        <li><a href="{{ route('welcome') }}">Главная страница</a></li>
                        <li><a href="{{ route('game') }}">Играть</a></li>
                        <li><a href="{{ route('results') }}">Статистика</a></li>
                        <li><a href="{{ route('edit') }}">Смена ника</a></li>
                    </ul>
                </nav>
            </div>
        </header>
    </section>
    <section>
        <article>
            <div>
                <h1 class="main-h1">Главная страница</h1>
            </div>
            <div>
                <p class="term">«Камень, ножницы, бумага» — популярная игра на руках, часто использующаяся как способ жеребьёвки для определения очерёдности хода или ведущего в других играх.</p>
                <p class="info">Игроки считают вместе вслух «Камень… Ножницы… Бумага… Раз… Два… Три», одновременно качая кулаками. Существуют и другие варианты счёта, распространённость которых различается в разных городах и регионах, например, «Су-е-фа!» («Су-ли-фа»), «Рас(е)л-двас(е)л-трис(е)л!», «Пи-Ни-Ко!», «Эна-бена-цо!», «Ван-чу-фри», «Бу-це-фа», «Аль… ман… джуз!», «Чу-ва-чи», «Чи-чи-ко», «Е-ша-чёк» и другое. На счёт «Три» они одновременно показывают при помощи руки один из трёх знаков: камень, ножницы или бумагу.</p>
                <p class="rules">Победитель определяется по следующим правилам: <br/> <ul>
                    <li>Бумага побеждает камень («бумага обёртывает камень»).</li>
                    <li>Камень побеждает ножницы («камень затупляет ножницы»).</li>
                    <li>Ножницы побеждают бумагу («ножницы разрезают бумагу»).</li>
                </ul></p>
                <p class="rules">Если игроки показали одинаковый знак, то засчитывается ничья и игра переигрывается.</p>
                <p class="end">В классическом варианте в игру играют вдвоём, однако возможна игра большего количества участников. При этом ничья засчитывается в ситуации, когда в компании игроков появились все три жеста (это иногда называют «кашей»), или если все игроки показали один и тот же знак.</p>
            </div>
        </article>
    </section>
    <section>
        <footer>

        </footer>
    </section>
</body>
</html>