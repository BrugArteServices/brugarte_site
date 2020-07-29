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
                     <a class="nav-link" href="<?php echo htmlspecialchars( $value1["url"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["name"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a>
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
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specime</p>
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


                     <?php $counter1=-1;  if( isset($services) && ( is_array($services) || $services instanceof Traversable ) && sizeof($services) ) foreach( $services as $key1 => $value1 ){ $counter1++; ?>

                     <div class="col-lg-4">
                        <div class="card transition text-center">
                           <div class="card-body">
                              <h5 class="card-title"><?php echo htmlspecialchars( $value1["name"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h5>
                           </div>
                           <ul class="list-group list-group-flush">
                              <?php $aaaa=1; ?>

                              <?php echo date('Y'); ?>

                              <li class="list-group-item"><i class="fas fa-check"></i></li>
                           </ul>
                           <div class="card-body">
                              <a href="#contact" class="btn btn-default">Eu quero!</a>
                           </div>
                        </div>
                     </div>
                     <?php } ?>

                     <p>
                     -  O Suporte passará a contar a partir da data da entrega do projeto
                     <br>
                     -  Não possuímos planos de Hospedagem, mas auxiliamos na contratação de uma.
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
            <p>Além de sites, também desenvolvemos outros projetos para seu negócio.</p>
            <hr>
         </div>
         <div class="row">
            <div class="col-lg-12 my-auto">
               <div class="time">
                  <?php $counter1=-1;  if( isset($timeline) && ( is_array($timeline) || $timeline instanceof Traversable ) && sizeof($timeline) ) foreach( $timeline as $key1 => $value1 ){ $counter1++; ?>

                  <div class="timeline">
                     <div class="timeline-icon">
                        <span class="stage"><?php echo htmlspecialchars( $key1+1, ENT_COMPAT, 'UTF-8', FALSE ); ?>°</span>
                     </div>
                     <div class="timeline-content">
                        <h3 class="title"><?php echo limitText($value1["title"], 15); ?></h3>
                           <p class="description">
                              <?php echo limitText($value1["descri"], 110); ?>

                           </p>
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
            <p class="text-muted">Queremos você aparecendo aqui!</p>
            <hr>
         </div>
         <div class="row">
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
                  <img class="card-img-top" src="<?php echo htmlspecialchars( $value1["image"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="<?php echo htmlspecialchars( $value1["name"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                  <div class="card-body text-center">
                     <p class="card-text"><?php echo htmlspecialchars( $value1["name"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
                  </div>
               </div>
            </div>
            <?php } ?>

         </div>
         <div class="section-heading mb-5 text-center">
            <h2>Clientes e Parceiros</h2>
            <p class="text-muted">Alguns dos nossos clientes e parceiros mais importantes! <i title="Ama!" class="transition fas fa-heart"></i> </p>
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
               <a href="<?php echo htmlspecialchars( $value1["link"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" title="<?php echo htmlspecialchars( $value1["name"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><img src="<?php echo htmlspecialchars( $value1["logo"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"></a>
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
                        <label for="name">Telefone</label>
                        <input name="phone" required autocomplete="off" type="phone" class="form-control" id="phone" placeholder="Telefone">
                     </div>
                     <div class="form-group col-md-6">
                        <label for="name">Email</label>
                        <input name="email" required autocomplete="off" type="email" class="form-control" id="email" placeholder="Email" data-rule="email" data-msg="Por favor, digite um e-mail válido.">
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="branch">Deixe sua mensagem</label>
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
                        <li><a class="transition email"><i class="far fa-envelope"></i> contato@brugarte.com.br</a></li>
                        <li><a class="transition whatsapp"><i class="fab fa-whatsapp"></i> +55 19 92001-2031</a></li>
                     </ul>
                  </div>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13578.350870882019!2d76.72664628403336!3d31.699836950967995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3904df2b45c39f79%3A0x7c4cce8149cb5540!2sSarkaghat%2C+Himachal+Pradesh+175024!5e0!3m2!1sen!2sin!4v1551328657489" frameborder="0" style="border:0" allowfullscreen></iframe>
               </div>
            </div>
         </div>
      </div>
   </section>