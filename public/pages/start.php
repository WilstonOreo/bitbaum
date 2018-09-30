<section class="square title">
    <?php require('components/header.php'); ?>
</section>

<?php switch ($lang) {
    case "en":
        ?>
        <section class="square cluster">
            <article class="bolder">
                <h4>Focus</h4>
                <p>The material basis of digitalization</p>
                <p>Alternative economies</p>
                <p>Environmental and network policy</p>
                <p>Digital infrastructures</p>
                <p>Fundamental issues</p>
                <p class="square-action align-center">
                    <a href="/programm/<?php echo $lang; ?>" class="button">Sneak preview of the programme</a>
                </p>
            </article>
        </section>

        <section class="square description">
            <article>
                <p>
                    What role does sustainability play for stable tech communities?
                    Which ecological opportunities do digital applications offer for climate and resource
                    protection? What types of digitalization are opposed or even counterproductive to these goals?
                    How can the digital society be democratic and just while peacefully preserving the basis of our
                    lives on this planet?
                </p>
                <p class="square-action"><a href="/info/en">Brief description of the conference</a></p>
                <p class="square-action"><a href="/presse/en">Press information</a></p>
            </article>
        </section>

        <section class="square quotes">
            <article>
                <?php require('components/quotes.php'); ?>
                <article>
        </section>
        <?php
        break;
    default:
        ?>
        <section class="square cluster">
            <article class="bolder">
                <h4>Schwerpunkte</h4>
                <p>Die materielle Basis der Digitalisierung</p>
                <p>Alternatives Wirtschaften</p>
                <p>Umwelt- und Netzpolitik</p>
                <p>Digitale Infrastrukturen</p>
                <p>Grundsatzfragen</p>
                <p class="square-action align-center">
                    <a href="/programm/<?php echo $lang; ?>" class="button">Zur ersten Programmvorschau</a>
                </p>
            </article>
        </section>

        <section class="square description">
            <article>
                <p>Welche Rolle spielt Nachhaltigkeit für stabile Tech-Communities? Welche ökologischen Chancen stecken in digitalen Anwendungen etwa für Klima- und Ressourcenschutz? Welche Arten von Digitalisierung stehen diesen Zielen entgegen oder sind gar kontraproduktiv? Wie kann die digitale Gesellschaft demokratisch und gerecht gestaltet und zugleich darauf ausgerichtet sein, auf friedvolle Weise die Grundlagen unseres Lebens auf diesem Planeten zu bewahren?</p>
                <p class="square-action"><a href="/info/<?php echo $lang; ?>">Kurzbeschreibung zur Konferenz</a></p>
                <p class="square-action"><a href="/presse/">Presseinformationen</a></p>
            </article>
        </section>

        <section class="square quotes">
            <article>
                <?php require('components/quotes.php'); ?>
                <article>
        </section>
    <?php } ?>



