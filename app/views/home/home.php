<?php  if (!defined ('DIR_BASE')) exit;
	$moviments = $data['moviments'];
?>

<div class="wrap">
	<h1>Padrão MVC</h1>
	<p>	Se você está visualizando esta página, seu sistema PHP com padrão MVC está funcionando.</p>
	<p>MVC é nada mais que um padrão de arquitetura de software, separando a estrutura a aplicação de acordo com a finalidade. A interação do usuário(view), a manipulação dos dados(model) e o controle(controller).</p>

	<h2>Model</h2>
	<p>Tem a finalidade de manipulação de dados. É responsável pela leitura e escrita de dados, e também de suas validações.</p>

	<h2>View</h2>
	<p>Responçável pela interação com o usuário. Exibe apenas os dados, sendo por meio de um html ou xml.</p>

	<h2>Controller</h2>
	<p>O responsável por receber todas as requisições do usuário. Seus métodos chamados actions são responsáveis por uma página, controlando qual model usar e qual view será mostrado ao usuário.</p>

	<img src="<?php echo URL_BASE ?>/app/views/images/mvc1.jpg" style="width:50%; margin-left:25%"/>

	<h2>Comunicação entre os módulos</h2>

	<blockquote cite="https://tableless.com.br/mvc-afinal-e-o-que/"><strong>View:</strong> Fala Controller ! O usuário acabou de pedir para acessar o Facebook ! Pega os dados de login dele ai. <strong>Controller:</strong> Blz. Já te mando a resposta. Ai model, meu parceiro, toma esses dados de login e verifica se ele loga. <strong>Model:</strong> Os dados são válidos. Mandando a resposta de login. <strong>Controller:</strong> Blz. View, o usuário informou os dados corretos. Vou mandar pra vc os dados dele e você carrega a página de perfil. <strong>View:</strong> Vlw. Mostrando ao usuário…</blockquote>

	<h1>Dashboard</h1>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<!-- Nescessário para transformar o conteúdo de moviments no php em uma váriavel utilizavel do javascript -->
    <script> var moviments = JSON.parse('<?= json_encode($moviments); ?>'); </script>
	<script src="<?php echo URL_BASE ?>/app/views/home/script.js"></script>
    <div id="curve_chart" style="width: 97vw; height: 30vw"></div>
	<div id="piechart" style="width: 97vw; height: 30vw;"></div>
</div>