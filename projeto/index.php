

<?php  include_once("head.php") ?>



<body>
    <main>
            <?php
            include("header.php"); 
            ?>

        <section>
            <div class="container my-5">
                <div class="row p-3  shadow-lg   BgPersona bg-gradient text-light ">
                    <div class="col-sm-auto col-md-6  ">
                        <fieldset>
                            <legend class="display-4 TitlePersona">Pedidos</legend>
                            <form action="getall.php" id="PizzaForm" method="post" class="needs-validation" >
                                <div class="col-12 ">
                                    <label for="Nome" class="form-label">Seu Nome</label>
                                    <input type="text" name="name" autofocus id="name" class="form-control" required>
                                    
                                </div>

                                <div class="col-12 py-3">
                                    <label for="Nome" class="form-label">Telefone</label>
                                    <input type="tel" name="telefone" id="telefone"
                                     class="form-control" required>
                                   
                                </div>
                                <div class="col-12 ">
                                    <label for="Nome" class="form-label">Endereço</label>
                                    <input type="text" name="endereco" id="endereco" class="form-control" required>
                               
                                </div>
                                <div class="col-12 py-1 ">
                                    <label class="my-2" for="Interesse">Sabores de pizza</label>
                                   <input type="text" id="sabores" name="sabores" class="form-control" required>
                                    <button type="submit" name="bt_enviar"
                                        class="my-3 py-2 px-5 btn  btn-success bg-gradient font-weight-bolder">Enviar</button>
                                </div>
                            </form>
                        </fieldset>
                    </div>
                    <div class="col-sm-auto col-md-6 mt-5 ">
                        <div class="row   ">
                            <div class="col-lg-5 col-md-12 mb-4 mb-lg-0">
                                <img src="https://i.pinimg.com/564x/1b/89/0a/1b890a0e9bd505ce368470d1933701dc.jpg"
                                    class="w-100 shadow-1-strong ImgEffect rounded mb-4"  />

                                <img src="https://i.pinimg.com/564x/4d/8b/ce/4d8bce02999b38314e48ea984f015fe0.jpg"
                                    class="w-100 shadow-1-strong ImgEffect  rounded mb-4"
                                     />
                            </div>

                            <div class="col-lg-5 mb-4 mb-lg-0">
                                <img src="https://i.pinimg.com/564x/b6/94/0e/b6940e530fa87fdf8f4e9cdf5ccafc36.jpg"
                                    class="w-100 shadow-1-strong ImgEffect  rounded mb-4"
                                     />

                                <img src="https://i.pinimg.com/564x/85/0f/a2/850fa21a46ac10029572017242e1b380.jpg"
                                    class="w-100 shadow-1-strong ImgEffect  rounded mb-4"  />
                            </div>


                        </div>


                    </div>
        </section>

     
       <?php
       include("footer.php") 
       ?>
    </main>

</body>

</html>



