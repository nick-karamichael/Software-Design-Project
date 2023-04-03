// code to initialise firebase for easier referencing and less duplication in code. This should only be used on pages where we intend to access the firebase database
import firebase from "firebase/app";
import "firebase/auth";

const firebaseConfig = {
    apiKey: "AIzaSyC5VTgBqRxd747QtA-_cSnqEPHZX18N1-4",
    authDomain: "pcg-evaluation.firebaseapp.com",
    projectId: "pcg-evaluation",
    storageBucket: "pcg-evaluation.appspot.com",
    messagingSenderId: "946379704587",
    appId: "1:946379704587:web:6c779201406d6749a53a0e",
    measurementId: "G-H93Y4SV3C8"
  };
  firebase.initializeApp(firebaseConfig);

  