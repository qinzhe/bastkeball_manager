$(document).on("ready",star);

function star()
{
  showUserList("");
  $("#buscar").keyup(function(){
    var buscar=$("#buscar").val();
    showUserList(buscar);
  });

  $("#btnEditar").click(function(){
    alert("hola");
  });

  $("#btn-cancelar").click(function(){
    $("input").val("");
  });

  $("#btnactualizar").click(editar);

  $("body").on("click","#usersList a",function(e){
    e.preventDefault();
    id=$(this).attr("href");
    name=$(this).parent().parent().children("td:eq(0)").text();
    email=$(this).parent().parent().children("td:eq(1)").text();
    pass=$(this).parent().parent().children("td:eq(2)").text();

    $("#id").val(id);
    $("#name").val(name);
    $("#email").val(email);
    $("#pass").val(pass);
  });
}

function showUserList(valor)
{
  $.ajax({
    url:"http://localhost:8080/tarea5/User/showList",
    type:"POST",
    data:{buscar:valor},
    success:function(respuesta){
      var users=eval(respuesta);
      var html="<table class='table table-responsive table-bordered'>"+
               "<thead>"+
                 "<tr>"+
                   "<th>Name</th>"+
                   "<th>Email</th>"+
                   "<th>PassCode</th>"+
                 "</tr>"+
               "</thead>"+
               "<tbody>";
      for (var i in users) {
        html+="<tr>"+
        "<td>"+users[i]['name']+"</td>"+
        "<td>"+users[i]['email']+"</td>"+
        "<td>"+users[i]['pass']+"</td>"+
        "<td>"+"<a href='"+users[i]["user_id"]+"' class='btn btn-success btn-block'>E</a>"+"</td>"+
        "</tr>";
      }
      html+="</tbody>"+
            "</table>";
      $("#usersList").html(html);
    }
  });
}

function editar() {
  $.ajax({
    url:"http://localhost:8080/tarea5/User/update",
    type:"post",
    data:$("#form-actualizar").serialize(),
    success:function(response){
      alert(response);
      showUserList("");
    }
  });
}
