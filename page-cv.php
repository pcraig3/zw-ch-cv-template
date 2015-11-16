<?php
/*
Template Name: CV
Description: A Page Template that is my resume.
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php wp_title(''); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class();?> >
  <div class="cv__wrapper">
    <header class="cv__header">
      <h1 class="cv__name cv__title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Paul Craig</a></h1>
      <h2 class="cv__description color__red">codes right, leans left</h2>
      <div class="clearer"></div>
    </header>
    <!-- end of .cv__header -->
    <div class="cv">
      <div class="layout">
        <div class="layout__item two-thirds palm-one-whole">
          <div class="layout col_1">
            <div class="cell cell--col_1">
              <div class="layout__item one-whole">
                <h3 class="section__title">work</h3>
              </div>
              <article class="job_description">
                <div class="layout__item one-fifth">
                  <p class="job_description__year">2015</p>
              </div><!--
            --><div class="layout__item four-fifths">
            <h5 class="job_description__title">Junior Developer</h5>
            <h6 class="job_description__employer"><a class="pseudo_href" href="https://digitalmarketplace.blog.gov.uk">Government Digital Service</a></h6>
            <p>Fixing public-sector procurement without trailing semicolons</p>
            <p>Submit public, well-documented, well-tested pull requests</p>
            <p>Receive code reviews; review others' code</p>
            <p>Effective member of a focused, collaborative team</p>
          </div>
        </article>
        <article class="job_description">
          <div class="layout__item one-fifth">
            <p class="job_description__year">2014</p>
              </div><!--
            --><div class="layout__item four-fifths">
            <h5 class="job_description__title">Web Developer</h5>
            <h6 class="job_description__employer"><a class="pseudo_href" href="http://westernusc.ca">Western University Students’ Council</a></h6>
            <p>Revitalized the main website of the students' council (USC)</p>
            <p>Prioritized needs based on findings of user research</p>
            <p>Collaborated with open-source developers where necessary</p>
            <p>Incorporated third-party APIs; introduced a USC API</p>
          </div>
        </article>
        <article class="job_description">
          <div class="layout__item one-fifth">
            <p class="job_description__year">2013-<span class="show_on_mobile">20</span>14</p>
              </div><!--
            --><div class="layout__item four-fifths">
            <h5 class="job_description__title">Technical Infrastructure Intern</h5>
            <h6 class="job_description__employer"><a class="pseudo_href" href="http://westernusc.ca">Western University Students’ Council</a></h6>
            <p>Worked on web-centric projects for the student government</p>
            <p>Installed, configured, and customised small websites</p>
            <p>Wrote a <a href="http://testwestern.ca">web application</a> meant to pair students with clubs</p>
            <p>Researched (and advised against) commissioning an app</p>
          </div>
        </article>
      </div>
      <div class="cell cell--col_1">
        <div class="layout__item one-whole">
          <h3 class="section__title">school</h3>
        </div>
        <article class="job_description">
              <div class="layout__item one-fifth"></div><!--
            --><div class="layout__item four-fifths">
            <h5 class="job_description__title"><a href="http://www.csd.uwo.ca">Computer Science</a></h5>
            <p>Studied foundational data structures and algorithms</p>
            <p>Worked frequently on team-based semester-long projects</p>
            <p>Learned about storing plaintext passwords in a database</p>
          </div>
        </article>
        <article class="job_description">
              <div class="layout__item one-fifth"></div><!--
            --><div class="layout__item four-fifths">
            <h5 class="job_description__title"><a href="http://www.fims.uwo.ca">Media, Information and Technoculture (MIT)</a></h5>
            <p>Learned to communicate professionally without effacing myself</p>
            <p>Critically analyzed nearly bloody everything</p>
          </div>
        </article>
      </div>
    </div><!-- end of .col_1 -->
      </div><!-- end of .two-thirds
    --><div class="layout__item one-third palm-one-whole">
    <div class="layout col_2">
      <div class="cell cell--col_2">
        <div class="layout__item one-whole">
          <h3 class="section__title color__red">contact</h3>
        </div>
        <article class="job_description">
              <div class="layout__item two-fifths palm-one-fifth"></div><!--
            --><div class="layout__item three-fifths palm-four-fifths">
            <a class="contact--body contact--email color__red" href="mailto:paul@pcraig3.ca?subject=Hello%20Paul!">paul&commat;pcraig3.ca</a>
            <a class="contact--body" href="tel:+447421742811">(&plus;44) 7421742811</a>
            <a class="contact--body" href="https://twitter.com/pcraig3">&commat;pcraig3</a>
          </div>
        </article>
      </div>
      <div class="cell cell--col_2">
        <div class="layout__item one-whole">
          <h3 class="section__title">degree</h3>
        </div>
        <article class="job_description">
          <div class="layout__item two-fifths palm-one-fifth">
            <p class="job_description__year">2014</p>
              </div><!--
            --><div class="layout__item three-fifths palm-four-fifths">
            <h5 class="job_description__title">Computer Science &amp; MIT Double Major</h5>
            <p><a href="http://www.uwo.ca/">Western University</a></p>
            <p>London, Canada</p>
          </div>
        </article>
      </div>
      <div class="cell cell--col_2">
        <div class="layout__item one-whole">
          <h3 class="section__title">familiar with</h3>
        </div>
        <article class="job_description">
              <div class="layout__item palm-one-fifth show_on_mobile"></div><!--
            --><div class="layout__item two-fifths palm-four-fifths">
            <p>Python</p>
            <p>WordPress</p>
            <p>git / GitHub</p>
            <p>Java</p>
            <p>C / C&plus;&plus;</p>
            <p class="not_on_mobile">etc.</p>
              </div><!--
              --><div class="layout__item palm-one-fifth show_on_mobile"></div><!--
            --><div class="layout__item three-fifths palm-four-fifths">
            <p>PHP</p>
            <p>HTML (templating)</p>
            <p>CSS / SCSS</p>
            <p>JavaScript / jQuery</p>
            <p>SQL / Doctrine</p>
            <p class="show_on_mobile">etc.</p>
          </div>
        </article>
      </div>
      <div class="cell cell--col_2">
        <div class="layout__item one-whole">
          <h3 class="section__title">able to</h3>
        </div>
        <article class="job_description">
              <div class="layout__item palm-one-fifth show_on_mobile"></div><!--
            --><div class="layout__item one-whole palm-four-fifths">
            <p>construct / defend arguments</p>
            <p>construct / maintain software</p>
            <p>give presentations on either</p>
            <p>identify technical / political problems</p>
            <p>work well within a team</p>
          </div>
        </article>
      </div>
    </div><!-- end of .col_2 -->
  </div><!-- end of .one-third -->
</div><!-- end of .layout -->
</div>
<!-- end of .cv -->
<footer class="cv__footer">
  <span class="cv__references">References available on request</span>
  <div class="clearer"></div>
</footer>
<!-- end of .cv__footer -->
</div>
<!-- end of .cv__wrapper -->
<?php wp_footer(); ?>
</body>
</html>
