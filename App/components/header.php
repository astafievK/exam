<header class="header">
    <div class="search-box header-elem">
        <form action="../scripts/search.php" method="GET">
            <input type="text" name="search" placeholder="Поиск...">
            <button type="submit">Поиск</button>
        </form>
    </div>
    <div class="filters header-elem">
        <form action="../scripts/radios.php" method="GET">
            <input type="radio" id="filterStatusAll" name="status" value="Все заявки" checked>
            <label for="filterStatusAll">Все заявки</label>

            <input type="radio" id="filterStatusCompleted" name="status" value="Выполнено">
            <label for="filterStatusCompleted">Выполненные</label>

            <input type="radio" id="filterStatusInProgress" name="status" value="В процессе">
            <label for="filterStatusInProgress">В процессе</label>


            <button type="submit">Отфильтровать</button>
        </form>
    </div>
</header>