<?php get_header(); ?>
<?php get_template_part('template-parts/navbar'); ?>
<?php get_template_part('template-parts/breadcrumb'); ?>
<main class="page-contact">
  <div class="container">
    <div class="row d-flex align-items-center justify-content-center">
      <div class="col-12 col-lg-6 pe-lg-5">
        <h1 class="d-none">Contato</h1>
        <h2>Nossa localização? </br> <strong>Anywhere!</strong></h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nascetur ridiculus mus mauris vitae ultricies. Bibendum ut tristique et egestas quis ipsum suspendisse ultrices gravida. Consectetur libero id faucibus nisl tincidunt eget nullam non.</p>
      </div>
      <div class="col-12 col-lg-6 ps-lg-5">
        <form>
            <div class="row">
              <div class="col-12 col-md-6 form-group">
                <label for="exampleInputName">Nome</label>
                <input type="text" class="form-control" id="exampleInputName" aria-describedby="nameHelp" placeholder="Nome">
              </div>
              <div class="col-12 col-md-6 form-group">
                <label for="exampleInputEmail">E-mail</label>
                <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="E-mail">
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-md-6 form-group">
                <label for="exampleInputPhone">Telefone</label>
                <input type="tel" class="form-control" id="exampleInputPhone" aria-describedby="phoneHelp" placeholder="Telefone">
              </div>
              <div class="col-12 col-md-6 form-group">
                <select class="form-control" id="exampleFormControlSelectEstado">
                  <option>Estado</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
            </div>
          <div class="row">
            <div class="col-12 col-md-6 form-group">
              <label for="exampleInputEmpresa">Empresa</label>
              <input type="text" class="form-control" id="exampleInputEmpresa" aria-describedby="empresaHelp" placeholder="Empresa">
            </div>
            <div class="col-12 col-md-6 form-group">
              <select class="form-control" id="exampleFormControlSelect1">
                <option>Interesse</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Mensagem</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" placeholder="Mensagem"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
      </div>
    </div>
  </div>
  </div>
</main>
<?php get_footer();