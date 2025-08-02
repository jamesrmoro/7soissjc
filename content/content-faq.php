<?php
$relacionados = is_page('faq') ? get_field('faqs') : get_sub_field('faqs');
if ($relacionados): ?>
  
  <section id="faq" class="faq" <?php if (is_page('faq')) echo 'itemscope itemtype="https://schema.org/FAQPage"'; ?>>
    <?php
    echo is_page('faq')
      ? '<h1 class="title-faq">Perguntas frequentes</h1>'
      : '<h2 class="title-faq">Perguntas frequentes</h2>';
    ?>
    
    <div class="container">
      <?php foreach ($relacionados as $index => $post):
        setup_postdata($post); ?>
        
        <div class="faq-item" <?php if (is_page('faq')) echo 'itemscope itemprop="mainEntity" itemtype="https://schema.org/Question"'; ?>>
          <button class="faq-question"
                  aria-expanded="false"
                  aria-controls="faq-<?php echo $index; ?>"
                  <?php if (is_page('faq')) echo 'itemprop="name"'; ?>>
            <?php the_title(); ?>
            <span class="faq-icon">+</span>
          </button>
          <div class="faq-answer"
               id="faq-<?php echo $index; ?>"
               <?php if (is_page('faq')) echo 'itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"'; ?>>
            <div <?php if (is_page('faq')) echo 'itemprop="text"'; ?>>
              <?php the_content(); ?>
            </div>
          </div>
        </div>

      <?php endforeach;
      wp_reset_postdata(); ?>
    </div>
  </section>
<?php endif; ?>

<?php if (is_page('faq') && $relacionados): ?>
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      <?php foreach ($relacionados as $i => $post): setup_postdata($post); ?>
      {
        "@type": "Question",
        "name": <?php echo json_encode(get_the_title()); ?>,
        "acceptedAnswer": {
          "@type": "Answer",
          "text": <?php echo json_encode(apply_filters('the_content', get_the_content())); ?>
        }
      }<?php echo $i + 1 < count($relacionados) ? ',' : ''; ?>
      <?php endforeach; wp_reset_postdata(); ?>
    ]
  }
  </script>
<?php endif; ?>

<style>

	.title-faq {

		position: relative;
		z-index: 2;
	}

.faq {

	padding-top: 50px;
	padding-bottom: 50px;
	text-align: center;
	background: url(<?php bloginfo('template_url');?>/src/images/faq.svg);
	background-position: bottom center;
	background-repeat: no-repeat;
	background-attachment: fixed;
	position: relative;
}

.faq:after {
	position: absolute;
	left: 0;
	top: 0;
	width: 100%;
	height: 100%;
	background-color: #ffffffb0;
	content: "";
}
.faq .faq-item {
    border-bottom: 1px solid #ccc;
    padding: 15px 20px;
    width: 65%;
    margin: 0 auto;
    background-color: #ffffffab;
    position: relative;
    z-index: 2;
}

.faq-question {
  background: none;
  border: none;
  width: 100%;
  text-align: left;
  font-size: 1.1rem;
  font-weight: bold;
  cursor: pointer;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0;
  color: #006B3F;
}

.faq-question:focus {

	outline: none;
	border: none;
}

.faq-icon {
  font-weight: bold;
  transition: transform 0.3s ease;
  color: #ef8001;
}

.faq-answer {
  display: none;
  padding-top: 10px;
  color: #555;
  line-height: 1.5;
  text-align:left;
}

.faq-answer p:last-child {

	margin-bottom: 0;

}

.faq-item.active .faq-answer {
  display: block;
}

.faq-item:last-child {

	border-bottom: 0;
}

.faq-item.active .faq-icon {
  transform: rotate(45deg); /* vira de + para × */
}

@media screen and (max-width: 800px) {

	.faq .faq-item {

	    width: 100%;
	    padding: 5px;

	}

	.faq {
	    padding-top: 30px;
	    padding-bottom: 30px;
	}

}
</style>


<script>
document.addEventListener('DOMContentLoaded', function () {
  const faqButtons = document.querySelectorAll('.faq-question');

  faqButtons.forEach(button => {
    button.addEventListener('click', () => {
      const item = button.closest('.faq-item');
      const expanded = button.getAttribute('aria-expanded') === 'true';

      // Fecha todos os outros
      document.querySelectorAll('.faq-item').forEach(el => {
        el.classList.remove('active');
        el.querySelector('.faq-question').setAttribute('aria-expanded', 'false');
      });

      // Se não estava expandido, abre este
      if (!expanded) {
        item.classList.add('active');
        button.setAttribute('aria-expanded', 'true');
      }
    });
  });
});
</script>
