@extends('templates.layaout')
@section('Title','Bienvenido...')
@section('content')
<style>
  #Image-land{
    padding: 10px; 
    margin: 10px; 
    float: right; 
    width: 250px;
  }
  .containers{
	display: grid;
	grid-template-columns: repeat(auto-fill, minmax(250px,1fr));
	grid-gap: 0.5em;
}

.card{
	height: max-content;

}
</style>
<section class="hero is-link is-medium">
  <!-- Hero head: will stick at the top -->
  <div class="hero-head">
    <nav class="navbar">
      <div class="container">
        <div class="navbar-brand">
          <a class="navbar-item">
            <h1 class="is-size-3">CampusLands</h1>
          </a>
          <span class="navbar-burger" data-target="navbarMenuHeroA">
            <span></span>
            <span></span>
            <span></span>
          </span>
        </div>
        <div id="navbarMenuHeroA" class="navbar-menu">
        </div>
      </div>
    </nav>
  </div>

  <!-- Hero content: will be in the middle -->
  <div class="hero-body">
    <div class="container has-text-centered">
      <p class="title">
        Ha llegado una nueva forma de aprender
      </p>
      <br>
      <p class="subtitle">
        Somos un Centro de Formación y Empleo para desarrolladores de software, el mejor y con mayor integración en Latinoamérica. Nuestro programa de base tecnológica es totalmente Gratuito y ha sido creado por GBP y Startups en Latinoamérica y USA.
<br>
<br>
Nuestro modelo intensivo de aprendizaje rápido, garantiza que en un máximo de 8 meses se afiance el conocimiento necesario para unirse a un equipo de trabajo con alguno de nuestros Aliados, involucrando Software Skills, Inglés y habilidades del Ser
      </p>
    </div>
  </div>
</section>
<section class="section is-large has-background-light">
    <div class="content is-normal">
    <h1>Nuestro centro de formación</h1>
      <figure class="image is-128x128" id="Image-land">
  <img class="is-rounded" src="https://oaidalleapiprodscus.blob.core.windows.net/private/org-FjCZIhs7ciJKRHshMdcVvMgy/user-PSzDBGlvIBkTY1B7TvG7t0mT/img-jC3KaOPZeTEDWXqnoZ257qDh.png?st=2023-04-21T14%3A27%3A13Z&se=2023-04-21T16%3A27%3A13Z&sp=r&sv=2021-08-06&sr=b&rscd=inline&rsct=image/png&skoid=6aaadede-4fb3-4698-a8f6-684d7786b067&sktid=a48cca56-e6da-484e-a814-9c849652bcb3&skt=2023-04-21T10%3A58%3A23Z&ske=2023-04-22T10%3A58%3A23Z&sks=b&skv=2021-08-06&sig=KEinhOgE3Qr2Rq5vLkJ/Yz4BC9k/1ggSnMewc4ut5yE%3D">
</figure>
    <p>Hemos creado las mejores instalaciones de Colombia en Zona Franca Santander, Edificio Zenith Piso 6, ubicada en el anillo vial. En donde contamos con equipos gamer de alta capacidad, sitios novedosos de aprendizaje y espacios de diversión e integración</p>
      <button class="button is-link">Quiero saber cómo llegar</button>
      <button class="button is-primary">Ver más sobre el espacio</button>
</section>

<section class="section">
  <nav class="level">
  <div class="level-item has-text-centered">
    <div>
      <p class="heading">Campers en entrenamiento</p>
      <p class="title">+400</p>
    </div>
  </div>
  <div class="level-item has-text-centered">
    <div>
      <p class="heading">Trainers</p>
      <p class="title">+100</p>
    </div>
  </div>
</nav>
</section>
<section class="section is-large">
    <div class="content is-large">
    <h1>¿Qué requieres para ser un Camper ?</h1>
    <ul>
      <li>Debes tener disponibilidad de 8 horas presenciales en nuestras instalaciones de lunes a viernes.</li>
      <li>Preferiblemente debes tener entre 19 y 26 años.</li>
      <li>Lo más importante es el compromiso, la dedicación y la pasión por el desarrollo. Si quieres estar en CAMPUS debes poner toda tu Disciplina y Esfuerzo durante el programa. Y esto no es frase de cajón, tampoco opcional, quien no lo tenga no podrá avanzar en el programa.</li>
    </ul>
      <p>Es totalmente necesario que previo a inicio en CAMPUS hagas estos tres cursos, pero ojo, totalmente terminados, entendidos y practicados, será necesario para tus primeros días de clase.</p>
  </div>
	<div class="containers">
    <!-- card-1 -->
  <a>
    <div class="card">
			<div class="card-image">
				<figure class="image is-1365x767">
					<img src="https://static.platzi.com/media/avatars/platziteam_8cfe6fc7-1246-4c9a-9f5d-d10d467443ee.png" alt="Placeholder image">
				</figure>
			</div>
			<div class="card-content">
				<div class="media">
					<div class="media-content">
						<p class="title is-4">Curso Básico de Programación</p>
					</div>
        </div>
			</div>
		</div>
  </a>
    <!-- card-2 -->
    <a>
    <div class="card">
			<div class="card-image">
				<figure class="image is-1365x767" id="height">
					<img src="https://1000marcas.net/wp-content/uploads/2020/02/Logotipo-rojo-de-YouTube.png" alt="Placeholder image">
				</figure>
			</div>
			<div class="card-content">
				<div class="media">
					<div class="media-content">
						<p class="title is-4">Curso Básico de Programación</p>
					</div>
        </div>
			</div>
		</div>
    <!-- card-3 -->
    <a>
    <div class="card">
			<div class="card-image">
				<figure class="image is-200x200">
					<img src="https://static.platzi.com/media/avatars/platziteam_8cfe6fc7-1246-4c9a-9f5d-d10d467443ee.png" alt="Placeholder image">
				</figure>
			</div>
			<div class="card-content">
				<div class="media">
					<div class="media-content">
						<p class="title is-4">Curso Básico de Programación</p>
					</div>
        </div>
			</div>
		</div>
  </div>
</section>
      
@endsection