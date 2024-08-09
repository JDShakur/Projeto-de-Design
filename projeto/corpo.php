<section>
  <div class="container my-5">
    <div class="row p-3  shadow-lg BgPersona bg-gradient text-light ">
      <div class="col-sm-auto col  ">
        <div class=" text-dark">

          <div class="container">
            <div class="row bg-gradient text-center display-6 text-dark text-capitalize text-wrap rounded rounded-3">
              <h1 class=" text-dark col-12 ">Olá, Bem vindo ao David's Pizza!</h1>

              <p><span id="timer"> </span></p>

            </div>
          </div>
          <div>
            <pre>
                <code>
              
                        <?php
                        require_once("form.php");
                       
                        ?>
                       
                </code>
              </pre>
            <button onclick="mostrar_modal_2()" class="btn btn-danger bg-gradient mb-5" id="Cancel">Cancelar Pedido</button>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<!-- Modal -->
<div class="modal fade" id="MinhaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content  bg-dark bg-gradient text-white fw-bolder display-6">
      
      <div class="modal-body text-justify">
      <p>
        Tem Certeza Que Quer Abandonar a Fila?
        Sua Pizza Já Está No Forno..
      </p>
      
      </div>
      <div class="modal-footer bg-black bg-gradient  bg-opacity-75 ">
       <button  class="btn btn-danger" data-bs-dismiss="modal">Não</button> 
       <button  value="voltar" onclick="goBack()" class="btn btn-success" data-bs-dismiss="modal" target="_self" >Sim</button>
      </div>
    </div>
  </div>
</div>

<script>
  // Contador
  var contador = 15;
var contadorElemento = document.getElementById("timer");
var loopCounter = 0;

function atualizarContador() {
  contadorElemento.innerHTML = "Tempo até ser chamado: " + contador + " segundos";
  
  if (contador === 0) {
    loopCounter++;
    contador = 15;

    if (loopCounter >= 5) {
      clearInterval(interval);
      contadorElemento.innerHTML = "Não há mais Clientes ;(";
      return;
    }
  }
  
  contador -= 1;
}
var interval = setInterval(atualizarContador, 1000);
// fim contador

// Modal
  function mostrar_modal_2(){
    let minha_modal = new bootstrap.Modal(document.getElementById('MinhaModal')).show();}
// Fim Modal

// voltar
function goBack() {
    window.history.back()
}
// fim do voltar

//removedor
function removerObjeto() {
            var elemento = document.getElementById('objeto');
            elemento.parentNode.removeChild(elemento);
            
        }
        setInterval(function() {
            removerObjeto();
        }, 16000);

// fim removedor
setTimeout(function() {
  var mensagem = "Sua Pizza esta pronta! Vá busca-la no balcão!";
  alert(mensagem);
}, 76000);


</script>
<script>
       
        
    </script>
