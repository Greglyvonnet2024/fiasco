<?php include __DIR__ . "/public/assets/header.html.php" ?>

<main>
    <section id="reservation">
        <h2>Reservation</h2>
        <h3>Make reservation</h3>
        <p>
            Classified advertising is a form of advertising that is particularly
            common in newspapers and other periodicals. A classified is usually
            textually based and can consist.
        </p>
        <form action="" method="">
            <div>
                <input type="text" name="name" placeholder="FULL NAME (Focus)" />
                <select name="persons" id="persons">
                    <option value="2persons">For 2 Persons</option>
                    <option value="4persons">For 4 Persons</option>
                    <option value="6persons">For 6 Persons</option>
                    <option value="8persons">For 8 Persons</option>
                    <option value="10persons">For 10 Persons</option>
                    <option value="12persons">For 12 Persons</option>
                    <option value="14persons">For 14 Persons</option>
                    <option value="16persons">For 16 Persons</option>
                </select>
                <input type="date" name="name" placeholder="FULL NAME (Focus)" />
            </div>
            <div>
                <button type="submit">Reserve Table</button>
            </div>
        </form>
    </section>
</main>




<?php include __DIR__ . "/public/assets/footer.html.php" ?>
