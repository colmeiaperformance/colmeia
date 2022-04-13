<aside class="aside-blog mt-5 mt-lg-0">
  <div class="most-popular">
    <h4 class="underline">Artigos mais lidos</h4>
    <ul class="list-group">
      <li class="list-group-item position-relative"> 
        <h3><a href="#" class="stretched-link">Lorem ipsum dolor sit amet, consectetur</a></h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
        <span>Por: Admin - 01 de Março de 2022</span>
      </li>
       <li class="list-group-item position-relative"> 
        <h3><a href="#" class="stretched-link">Lorem ipsum dolor sit amet, consectetur</a></h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
        <span>Por: Admin - 01 de Março de 2022</span>
      </li>
       <li class="list-group-item position-relative"> 
        <h3><a href="#" linkclass="stretched-link">Lorem ipsum dolor sit amet, consectetur</a></h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
        <span>Por: Admin - 01 de Março de 2022</span>
      </li>
      <li class="list-group-item position-relative"> 
        <h3><a href="#" class="stretched-link">Lorem ipsum dolor sit amet, consectetur</a></h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
        <span>Por: Admin - 01 de Março de 2022</span>
      </li>
    </ul>
  </div>
  <div class="topics">
    <h4>Explore Topics</h4>
    <ul class="topics-list">
      <?php wp_list_categories( array(
        'title_li'    => '',
        'hide_empty'   => true
        ) );
        ?>
    </ul>
     <button id="loadmore" class="btn p-0">Ver mais+</button>
  </div>
    <div class="newsletter d-flex flex-column align-items-center justify-content-center background-blog text-white">
      <h4>Newsletter</h4>
      <h5>Lorem Ipsum Subscribers!</h5>
      <form class="col-12 d-flex flex-column align-items-center justify-content-center">
        <input type="email" placeholder="E-mail" class="form-control rounded-0 color-primary-dark">
        <button type="submit" class="btn rounded-0 text-white">Cadastrar</button>
        <div class="col-10 text-center">
          <p>Ao cadastrar, você aceitará nossas Política de Privacidade</p>
        </div>
      </form>
    </div>
</aside>