const firebaseConfig = {
  apiKey: "",
  authDomain: "",
  databaseURL: "",
  projectId: "",
  storageBucket: "",
  messagingSenderId: "",
  appId: "",
  measurementId: ""
};
  
  firebase.initializeApp(firebaseConfig);

const auth = firebase.auth();
const db = firebase.firestore();

auth.onAuthStateChanged(user =>
  {
    if(user)
    {
      console.log('user log in :',user);
      document.getElementById("Log_out").style.display = "block";
      document.getElementById("Log_in").style.display = "none";
      document.getElementById("account").style.display = "block";

      localStorage.setItem('logged','yes');
    }
    else{
      console.log('user log out');
      document.getElementById("Log_out").style.display = "none";
      document.getElementById("Log_in").style.display = "block";
      document.getElementById("account").style.display = "none";
      localStorage.setItem('logged','no');
    }
  })
  const logout = document.getElementById("Log_out");
	logout.addEventListener('click', (e) => {
		e.preventDefault();
		auth.signOut().then(() =>{
		console.log('logged out !');
		});
	});