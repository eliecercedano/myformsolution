      // Inicializar Firebase.
      var firebaseConfig = {
        apiKey: "AIzaSyCByVTnUZa_ShOOXCw65XaYB-C7HwULtb0",
        authDomain: "myformsolution.firebaseapp.com",
        databaseURL: "https://myformsolution-default-rtdb.firebaseio.com",
        projectId: "myformsolution",
        storageBucket: "myformsolution.appspot.com",
        messagingSenderId: "681030249510",
        appId: "1:681030249510:web:dafcdea61ec19b1a210ae7",
        measurementId: "G-96MEE1TWM8"
    };
  firebase.initializeApp(config);
  var facebookProvider = new firebase.auth.FacebookAuthProvider();
  var googleProvider = new firebase.auth.GoogleAuthProvider();
  var facebookCallbackLink = '/login/facebook/callback';
  var googleCallbackLink = '/login/google/callback';
  async function socialSignin(provider) {
    var socialProvider = null;
    if (provider == "facebook") {
      socialProvider = facebookProvider;
      document.getElementById('social-login-form').action = facebookCallbackLink;
    } else if (provider == "google") {
      socialProvider = googleProvider;
      document.getElementById('social-login-form').action = googleCallbackLink;
    } else {
      return;
    }
    firebase.auth().signInWithPopup(socialProvider).then(function(result) {
      result.user.getIdToken().then(function(result) {
        document.getElementById('social-login-tokenId').value = result;
        document.getElementById('social-login-form').submit();
      });
    }).catch(function(error) {
      // Hacer manejo de errores
      console.log(error);
    });
  }
