<section id="contato" class="bg text-white h-50" style="background: #F29F05">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 mx-auto">
          <h2 class="text-center">Cadastre seu e-mail e <br/>fique por dentro das novidades!</h2>
        </div>
      </div>
      <div class="row justify-content-center">
          <form class="form-inline" method="post" action="<?=base_url('email')?>" enctype="multipart/form-data">
              <div class="form-group mb-2 mt-3">
                  <input type="email" class="form-control" id="cadastrarEmail" name="email" placeholder="Email">
              </div>
              <button type="submit" class=" ml-2 btn btn-primary mb-2 mt-3 btn-azul">ENVIAR</button>
            </form>
      </div>
    </div>
  </section>