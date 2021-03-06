firebase.auth().onAuthStateChanged(getLoggedInUser);

function getLoggedInUser() {
  var user = firebase.auth().currentUser;
  if (user != null) {
    curUser = user;
  }
  // Once logged in status is confirmed, build correct login/logout elements
  buildLoginArea();
}

function login() {

  var userEmail = $("#emailField").val();
  var userPass = $("#passwordField").val();

  firebase.auth().signInWithEmailAndPassword(userEmail, userPass).catch(function (error) {
    // Handle Errors here.
    var errorCode = error.code;
    var errorMessage = error.message;

    console.log("Error : " + errorCode + ". " + errorMessage);

    $(`#errorArea`).html(`<p class="error">Incorrect Email or Password.  Please try again</p>`);

    // ...
  });

}

function logout() {
  firebase.auth().signOut();
  curUser = null;
}