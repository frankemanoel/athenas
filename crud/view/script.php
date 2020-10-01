<script type="text/javascript">
    

    function verifica()
{
var x;
var r=confirm("Gostaria de verificar a conexão do banco de dados?");
if (r==true)
  {
  x="Verificado!";
  }
else
  {
  x="Verificação cancelada";
  }
    document.getElementById("verifica").innerHTML=x;
    document.getElementById("verifica").style.display='none';
    alert("Conexão realizada com sucesso!");
}


    $(document).ready(function() {
        $("#categoria").keyup(function() {
        $("#categoria").val(this.value.match(/[0-9]*/));
        });
    });



</script>