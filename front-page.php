<?php get_header() ?>

<main class="container">
    <section class="hero">
        <div class="about">
            <div class="about__summary">
                <h1>Hey, I'm Rehan</h1>
                <p>I'm a full stack web developer in Islamabad. I love working on open-source projects and writing about what I
                    learn.
                    This website is my digital notebook a collection of the things I've learned and created over the
                    years.</p>
            </div>
            <div class="about__image">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/IMG_2226.JPG'?>" alt="Me">
            </div>
        </div>
        <div class="buttons">
            <a href=""><img src="<?php echo get_template_directory_uri() . '/assets/images/about.png'?>" alt="">More about me</a>
        </div>
    </section>

    <section class="latest">
        <div class="latest__header">
            <h2>Latest Articles</h2>
            <a href="">View all</a>
        </div>
        <ul class="latest__posts">
            <li>
                <h3>Building a Musical Instrument with the Web Audio API <span>New!</span></h3>
                <p>May 01</p>
            </li>
            <li>
                <h3>Creating a Schema-Based Form System</h3>
                <p>May 01</p>
            </li>
            <li>
                <h3>2021 into 2022</h3>
                <p>May 01</p>
            </li>
            <li>
                <h3>An Introduction to GraphQL</h3>
                <p>May 01</p>
            </li>
            <li>
                <h3>Writing a Sokoban Puzzle Game in JavaScript</h3>
                <p>May 01</p>
            </li>
            <li>
                <h3>Redesign: Version 5.0</h3>
                <p>May 01</p>
            </li>
        </ul>
    </section>

    <section class="latest">
        <div class="latest__header">
            <h2>Highlights</h2>
            <a href="">View all</a>
        </div>
        <ul class="latest__posts">
            <li>
                <img src="<?php echo get_template_directory_uri() . '/assets/images/graphql.png'?>" alt="">
                <h3>Understanding GraphQL <span>New!</span></h3>
                <p>2021</p>
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri() . '/assets/images/graphql.png'?>" alt="">
                <h3>How to Organize a React App</h3>
                <p>2021</p>
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri() . '/assets/images/graphql.png'?>" alt="">
                <h3>Building a Full Stack App</h3>
                <p>2020</p>
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri() . '/assets/images/graphql.png'?>" alt="">
                <h3>Understanding the Event Loop</h3>
                <p>2020</p>
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri() . '/assets/images/graphql.png'?>" alt="">
                <h3>How to Use Webpack</h3>
                <p>2019</p>
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri() . '/assets/images/graphql.png'?>" alt="">
                <h3>Writing an Emulator from Scratch</h3>
                <p>2019</p>
            </li>
        </ul>
    </section>
</main>

<?php get_footer() ?>
