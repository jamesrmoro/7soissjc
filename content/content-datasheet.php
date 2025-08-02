<?php
$active = get_sub_field('active');

?>
<?php if($active == true){ ?>
<section class="section-list" style="background-image: url('<?php bloginfo('template_url');?>/src/images/bg-ficha-tecnica.jpg');background-color: #00331f;background-repeat: no-repeat;background-size: 600px;
    background-position: left center;">
	<div class="image-mobile"><img src="<?php bloginfo('template_url') ?>/src/images/bg-ficha-tecnica.jpg" alt="<?php the_title(); ?>"></div>
	<style type="text/css">
		.image-mobile {
			display: none;
		}
		@media (max-width: 1326px) {
			.section-list {
				background-image: none !important;
			}
			.section-list .flex-col {
				grid-template-columns: 1fr;
				padding-left: 15px;
				padding-right: 15px;
			}
			.section-list .text {
				padding-top: 30px;
				padding-bottom: 30px;
			}
			.section-list .image-mobile {
				display: block;
			}

			.section-list .image-mobile img {

				width: auto;
				margin: 0 auto;
				display: block;
				max-width: 100%;

			}
		}
	</style>
	<div class="container">
		<div class="flex-col">
			<div></div>
			<div class="text">
				<h2>Ficha Técnica</h2>
				<ul>
					<li>
						<strong>Produto: </strong>
						<span>Apartamentos em São José dos Campos/SP</span>
					</li>
					<li>
					<strong>Endereço: </strong>
					<span>Rua José Cobra, 251 (Parque Industrial - São José dos Campos/SP)</span>
					</li>
					<li><strong>Área Total do Terreno:</strong> 5.132,21 m²</li>
					<li>
					<strong>Área de lazer:</strong>
					Praça de Convivência<span>, </span>Vestiário<span>, </span>Salão de Festas<span>, </span>Playground<span>, </span>Pet Place<span>, </span>Salão de Jogos<span>, </span>Espaço Gourmet<span>, </span>Piscinas Adulto e Infantil<span>, </span>Espaço Kids<span>, </span>Churrasqueira<span>, </span>Quadra<span>, </span>Pomar<span>, </span>Bicicletário<span>, </span>Fitness Coberto<span>, </span>Coworking<span>.</span> </li>
					<li>
					<strong>Vagas de garagem</strong>
					</li>
					<li>
					<strong>Tipologia das unidades:</strong><br>
					2 Dormitórios com Suíte <strong>Área total: </strong>
					<span>55,29 ou 55,69m²*</span>
					<br>
					2 Dormitórios (PCD) <strong>Área total: </strong>
					<span>55,29m²*</span>
					<br>
					<span>*Área real privativa acessória com valores aproximados.</span>
					</li>
					<li><strong>Proximidade:</strong> Ao lado do Hospital Regional de São José dos Capos e do Hospital Regional, próximo ao Supermercado Coop, Escola Estadual Professora Henriqueta Costa Porto, Praça Natal, Corpo de Bombeiros Zona Sul, Escola de Futebol - Moreiras's Sport, Faculdade Anhanguera, Assaí Atacadista, Carrefour Hipermercado, a 5 minutos do Vale Sul Shopping, Academia Smart Fit, a 15 minutos do Aeroporto Internacional de São José dos Campos. Vias de acesso: Rua Valença, Rod. Presidente Dutra, Rod. Henrique Eroles.</li>
					<li><strong>Realização:</strong> MRV ENGENHARIA E PARTICIPAÇÕES</li>
					<li><strong>Registro de Incorporação: </strong> R.05/258.083 do 1°ofício de São José dos Campos</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<?php } ?>