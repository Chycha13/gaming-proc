$( init );

function init() {

  //tout les contrôle js pour le formulaire
  $("#formConnexion").submit(function(event){
    bln_OK = true;

    if(bln_OK){
      $.ajax({
        url: "../Models/Connexion_action.php?"+$("#formConnexion").serialize(),
        dataType: "json",
        success : function(result){
          if(!result.bln_OK){
            tab_message = result.tab_message;
            bln_OK = result.bln_OK;
          }
        },
        error : function(result){
          // retour = JSON.parse(result);
          console.log(result);
        }
      });
      //
    }

    bln_OK = false;

    if(!bln_OK){
      event.preventDefault();
      // window.location.href ="../index.php"
    }
    //window.history.back();     
  });
  // $("bouton_connexion").click(function(){
  //   window.location.href = "../index.php"
  // });

  $("#bouton_inscription").click(function(){
   window.location.href = "inscription.php";
  });
}