function objectAjax() {
  var xmlhttp = false;
  try {
    xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
  } catch (e) {
    try {
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    } catch (E) {
      xmlhttp = false;
    }
  }
  if (!xmlhttp && typeof XMLHttpRequest != "undefined") {
    xmlhttp = new XMLHttpRequest();
  }
  return xmlhttp;
}
addEventListener("load", read, false);

function read() {
  $.ajax({
    type: "POST",
    url: "?c=administrator&m=table_users",
    beforeSend: function () {
      $("#information").html("Processando, aguarde...");
    },
    success: function (response) {
      $("#information").html(response);
    },
  });
}

function register() {
  nome = document.formUser.nome.value;
  sobrenome = document.formUser.sobrenome.value;
  email = document.formUser.email.value;
  telefone = document.formUser.telefone.value;
  ajax = objectAjax();
  ajax.open("POST", "?c=administrator&m=registeruser", true);
  ajax.onreadystatechange = function () {
    if (ajax.readyState == 4) {
      read();
      alert("Adicionado com sucesso!");
      $("#addUser").modal("hide");
    }
  };
  ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  ajax.send(
    "nome=" +
      nome +
      "&sobrenome=" +
      sobrenome +
      "&email=" +
      email +
      "&telefone=" +
      telefone
  );
  document.formUser.nome.value = "";
  document.formUser.sobrenome.value = "";
  document.formUser.email.value = "";
  document.formUser.telefone.value = "";
}

function update() {
  id = document.formUserUpdate.id.value;
  nome = document.formUserUpdate.nome.value;
  sobrenome = document.formUserUpdate.sobrenome.value;
  email = document.formUserUpdate.email.value;
  telefone = document.formUserUpdate.telefone.value;
  ajax = objectAjax();
  ajax.open("POST", "?c=administrator&m=updateuser", true);
  ajax.onreadystatechange = function () {
    if (ajax.readyState == 4) {
      read();
      $("#updateUser").modal("hide");
    }
  };
  ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  ajax.send(
    "nome=" +
      nome +
      "&sobrenome=" +
      sobrenome +
      "&email=" +
      email +
      "&telefone=" +
      telefone +
      "&id=" +
      id
  );
}

function deleteUser(id) {
  if (confirm("Deseja mesmo excluir este registro?")) {
    ajax = objectAjax();
    ajax.open("POST", "?c=administrator&m=deleteuser", true);
    ajax.onreadystatechange = function () {
      if (ajax.readyState == 4) {
        read();
      }
    };
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send("id=" + id);
  }
}

function ModalRegister() {
  $("#addUser").modal("show");
}

function ModalUpdate(id, nome, sobrenome, email, telefone) {
  document.formUserUpdate.id.value = id;
  document.formUserUpdate.nome.value = nome;
  document.formUserUpdate.sobrenome.value = sobrenome;
  document.formUserUpdate.email.value = email;
  document.formUserUpdate.telefone.value = telefone;
  $("#updateUser").modal("show");
}
