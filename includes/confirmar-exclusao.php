<main>

  <section>
    
  </section>

  <h2 class="mt-3">Excluir Vaga</h2>

  <form method="post">

    <div class="form-group">
    <p>Você Deseja Realmente Excluir a Vaga <strong><?=$obVaga->titulo?></strong></p>
    </div>

   
    
    <div class="form-group">
    <a href="index.php">
      <button type="button" class="btn btn-success">Cancelar</button>
    </a>
      <button  name="excluir" class="btn btn-danger">Excluir</button>
    </div>

  </form>

</main>