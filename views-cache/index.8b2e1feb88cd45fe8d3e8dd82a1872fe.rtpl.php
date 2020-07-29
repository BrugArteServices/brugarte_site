<?php if(!class_exists('Rain\Tpl')){exit;}?>   <header class="pt-5 pb-5 bg-dark position-relative">
      <nav class="navbar navbar-dark navbar-expand-md">
         <div class="container">
            <a class="navbar-brand" href="#">
            <img src="./res/site/img/logo-transparent.png" height="70" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarNav3" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse menu navbar-collapse" id="navbar">
               <ul class="navbar-nav ml-auto">
                  <?php $counter1=-1;  if( isset($menus) && ( is_array($menus) || $menus instanceof Traversable ) && sizeof($menus) ) foreach( $menus as $key1 => $value1 ){ $counter1++; ?>

                  <li class="nav-item">
                     <a class="nav-link" href="<?php echo $value1["url"]; ?>"><?php echo $value1["name"]; ?></a>
                  </li>
                  <?php } ?>

               </ul>
            </div>
         </div>
      </nav>
      <div class="container pt-4 position-relative">
         <div class="row d-flex justify-content-between pt-lg-5 align-items-center">
            <div class="col-lg-8 text-lg-left">
               <h3 class="display-5 text-white">Já pensou em ter seu próprio aplicativo de</h3>
               <h1 class="display-1 deli-text font-weight-bold text-white" data-aos="fade-up">DELIVERY?</h1>
               <div class="my-4" data-aos="fade-up">
                  <p class="lead deli-text-2 text-white">Você não precisa ter mais concorrência e pagar as taxas abusivas dos serviços oferecidos.</p>
                  <button type="button" class="btn font-weight-bold btn-default">Conheça a Let's Go Delivery <i class="fas fa-motorcycle"></i></button>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="row">
                  <img src="./res/site/img/imagem.png" class="img-fluid app-img" alt="delivey app">
               </div>
            </div>
         </div>
      </div>
   </header>
























   <section class="benefits" id="benefits">
      <div class="container">
         <div class="section-heading text-center">
            <h2>Por que ter um site?</h2>
            <p class="text-muted">3 motivos para você e/ou sua loja ter um site.</p>
            <hr>
         </div>
         <div class="row">
            <div class="col-lg-12 my-auto">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-lg-4">
                        <div class="benefit-item transition">
                           <i class="icon-eye text-primary"></i>
                           <h3>Visibilidade</h3>
                           <p class="text-muted">Além do local físico, é necessário expandi-lo virtualmente.</p>
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <div class="benefit-item transition">
                           <i class="icon-bubbles text-primary"></i>
                           <h3>Comunicação</h3>
                           <p class="text-muted">Mantenha a relação com os seus clientes de forma online e prática.</p>
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <div class="benefit-item transition">
                           <i class="icon-screen-smartphone text-primary"></i>
                           <h3>Expansão</h3>
                           <p class="text-muted">Pesquisas no mundo virtual são feitas antes de fechar um negócio.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="whywe">
      <div class="whywe-content">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col-lg-6 info">
                           <h2>Por que a <b>Brugarte</b>?</h2>
                           <p>A Brugarte está há vários anos no mercado criando soluções para os nossos clientes, de sites à apps. Utilizando sempre as melhores tecnologias com o intuito de proporcionar a melhor experiência para os nossos clientes.</p>
                           <a href="#contact" class="btn btn-default">Solicite um orçamento!</a>
                        </div>
                     </div>
                  </div>
               </div>  
            </div>
         </div>
      </div>
      <div class="overlay"></div>
   </section>
   <section class="wedo" id="wedo">
      <div class="container">
         <div class="section-heading text-center">
            <h2>o que fazemos?</h2>
            <p class="text-muted">Além de sites, também desenvolvemos outros projetos para seu negócio.</p>
            <hr>
         </div>
         <div class="row">
            <div class="col-lg-12 my-auto">
               <div class="container-fluid">
                  <div class="row">
                     <?php $counter1=-1;  if( isset($services["service"]) && ( is_array($services["service"]) || $services["service"] instanceof Traversable ) && sizeof($services["service"]) ) foreach( $services["service"] as $key1 => $value1 ){ $counter1++; ?>

                     <?php $parent = $value1["id"]; ?>

                     <div class="col-lg-4">
                        <div class="card transition text-center">
                           <div class="card-body">
                              <h5 class="card-title"><?php echo $value1["name"]; ?></h5>
                           </div>
                           <ul class="list-group list-group-flush">
                              <?php $counter2=-1;  if( isset($services["sub"]) && ( is_array($services["sub"]) || $services["sub"] instanceof Traversable ) && sizeof($services["sub"]) ) foreach( $services["sub"] as $key2 => $value2 ){ $counter2++; ?>

                              <?php if( $value2["parentid"] == $parent ){ ?>

                              <li class="list-group-item"><i class="fas fa-check"></i><?php echo $value2["title"]; ?></li>
                              <?php } ?>

                              <?php } ?>

                           </ul>
                           <div class="card-body">
                              <a href="#contact" class="btn btn-default">Eu quero!</a>
                           </div>
                        </div>
                     </div>
                     <?php } ?>

                     <p class="text-muted">
                     -  O Suporte passará a contar a partir da data da entrega do projeto
                     <br>
                     -  No momento não possuímos planos de Hospedagem e Domínio, mas auxiliaremos na contratação dos serviços.
                     </p>

                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>


   <section class="process text-center" id="process">
      <div class="container">
         <div class="section-heading">
            <h2>Processo de desenvolvimento</h2>
            <p>As principais etapas para o sucesso do projeto</p>
            <hr>
         </div>
         <div class="row">
            <div class="col-lg-12 my-auto">
               <div class="time">
                  <?php $counter1=-1;  if( isset($timeline) && ( is_array($timeline) || $timeline instanceof Traversable ) && sizeof($timeline) ) foreach( $timeline as $key1 => $value1 ){ $counter1++; ?>

                  <div class="timeline">
                     <div class="timeline-icon transition">
                        <span class="stage transition"><?php echo $key1+1; ?>°</span>
                     </div>
                     <div class="timeline-content transition">
                        <h3><?php echo limitText($value1["title"], 15); ?></h3>
                        <p><?php echo limitText($value1["descri"], 200); ?></p>
                     </div>
                  </div>
                  <?php } ?>

               </div>
            </div>
         </div>
      </div>
      <div class="overlay"></div>
   </section>

   <section class="ports" id="ports">
      <div class="container">
         <div class="section-heading mb-5 text-center">
            <h2>Portfólio</h2>
            <p class="text-muted">Queremos você/ou seu site <b>aparecendo aqui</b>!</p>
            <hr>
         </div>
         <div class="row mb-5">
            <?php if( count($portfolios) < 1 ){ ?>

            <div class="col-lg-12">
               <div class="alert alert-danger" role="alert">
                  Nenhum portfólio disponível.
               </div>
            </div>
            <?php } ?>

            <?php $counter1=-1;  if( isset($portfolios) && ( is_array($portfolios) || $portfolios instanceof Traversable ) && sizeof($portfolios) ) foreach( $portfolios as $key1 => $value1 ){ $counter1++; ?>

            <div class="col-lg-4">
               <div class="card transition">
                  <a href="" title="<?php echo $value1["name"]; ?>">
                     <img class="card-img-top" src="<?php echo $value1["image"]; ?>" alt="<?php echo $value1["name"]; ?>">
                     <div class="card-body text-center">
                        <p class="card-text"><?php echo $value1["name"]; ?></p>
                     </div>
                  </a>
               </div>
            </div>
            <?php } ?>

            <div class="col-lg-12 text-center">
               <p>Curtiu, quer aparecer aqui? Solicite um orçamento!</p>
               <a href="#contact" class="btn btn-default">Solicitar um orçamento.</a>
            </div>
         </div>
         <hr>
         <div class="section-heading mb-5 text-center">
            <h2>Clientes e Parceiros</h2>
            <p class="text-muted">Alguns dos nossos clientes e parceiros mais importantes! <i title="Ama!" class="transition text-danger fas fa-heart"></i> </p>
            <hr>
         </div>
         <?php if( count($clieparts) < 1 ){ ?>

         <div class="alert alert-danger" role="alert">
            Nenhum cliente/parceiro disponível.
         </div>
         <?php } ?>

         <div class="customer-logos slider">
            <?php $counter1=-1;  if( isset($clieparts) && ( is_array($clieparts) || $clieparts instanceof Traversable ) && sizeof($clieparts) ) foreach( $clieparts as $key1 => $value1 ){ $counter1++; ?>

               <div class="slide">
                  <a target="_Blank" href="<?php echo $value1["link"]; ?>" title="<?php echo $value1["name"]; ?>"><img src="<?php echo $value1["logo"]; ?>"></a>
               </div>
            <?php } ?>

         </div>
      </div>
   </section>
   <section class="contact" id="contact">
      <div class="container">
         <div class="section-heading mb-5 text-center">
            <h2>Entre em Contato</h2>
            <p class="text-muted">Mande uma mensagem!</p>
            <hr>
         </div>
         <div class="row">
            <div class="col-lg-7 mb-5"> 
               <form action="./sendform" method="POST" role="form" class="text-left php-email-form">
                  <div class="form-group">
                     <label for="name">Nome completo</label>
                     <input name="name" required autocomplete="off" type="text" class="form-control" id="name" placeholder="Nome completo">
                  </div>
                  <div class="form-row">
                     <div class="form-group col-md-6">
                        <label for="phone">Telefone</label>
                        <input name="phone" required autocomplete="off" type="phone" class="form-control" id="phone" placeholder="Telefone">
                     </div>
                     <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input name="email" required autocomplete="off" type="email" class="form-control" id="email" placeholder="Email" data-rule="email" data-msg="Por favor, digite um e-mail válido.">
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="message">Deixe sua mensagem</label>
                     <textarea name="message" required class="form-control" id="inputAddress" placeholder="Mensagem"></textarea>
                  </div>
                  <div class="col-md-12 mb-3">
                     <div class="loading">Carregando..</div>
                     <div class="error-message"></div>
                     <div class="sent-message">Sua mensagem foi enviada. Obrigado!</div>
                  </div>
                  <button type="submit" class="btn btn-default">Enviar contato</button>
               </form>
            </div>
            <div class="col-lg-5">
               <div class="map-area">
                  <div class="contact-icons">
                     <ul>
                        <li><a class="transition email" href="mailto:<?php echo $sdata["sociais"]["email"]; ?>"><i class="far fa-envelope"></i> <?php echo $sdata["sociais"]["email"]; ?></a></li>
                        <li><a class="transition whatsapp" target="_BLANK" href="https://api.whatsapp.com/send?1=ptBR&phone=<?php echo $sdata["sociais"]["whatsapp"]; ?>"><i class="fab fa-whatsapp"></i> <?php echo $sdata["sociais"]["whatsapp"]; ?></a></li>
                     </ul>
                  </div>
                  <div class="mapouter"><div class="gmap_canvas"><iframe width="396" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Campinas&t=&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div></div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="min redes" id="redes">
      <div class="container">
         <h2>A gente <i title="Ama!" class="transition fas fa-heart"></i> fazer novos amigos!</h2>
      <ul class="list-inline list-social">
         <?php if( $sdata["sociais"]["facebook"] ){ ?>

         <li class="list-inline-item social-facebook">
            <a class="transition" target="_BLANK" href="https://facebook.com/<?php echo $sdata["sociais"]["facebook"]; ?>">
               <i class="fab fa-facebook-f"></i>
            </a>
         </li>
         <?php } ?>

         <?php if( $sdata["sociais"]["instagram"] ){ ?>

         <li class="list-inline-item social-instagram">
            <a class="transition" target="_BLANK" href="https://instagram.com/<?php echo $sdata["sociais"]["instagram"]; ?>">
               <i class="fab fa-instagram"></i>
            </a>
         </li>
         <?php } ?>

         <?php if( $sdata["sociais"]["whatsapp"] ){ ?>

         <li class="list-inline-item social-whatsapp">
            <a class="transition" target="_BLANK" href="https://api.whatsapp.com/send?1=ptBR&phone=<?php echo $sdata["sociais"]["whatsapp"]; ?>">
               <i class="fab fa-whatsapp"></i>
            </a>
         </li>
         <?php } ?>

      </ul>
      </div>
   </section>

