$(document).ready(function(){$("#form").submit(function(){return""==document.form.FIO.value||""==document.form.email.value?(valid=!1,valid):($.ajax({type:"POST",url:"php/mail.php",data:$(this).serialize()}).done(function(){$(this).find("input").val(""),$("#form").trigger("reset")}),!1)})});

