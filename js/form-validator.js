import User from './_class_user.js'
// global objects
var mUname;
var mEmail;
var mPassword;
var mPasswordVerifier;
var mSetupButton;

loadDOM();


function loadDOM(){
    mUname = document.getElementById('manager-username');
    mEmail = document.getElementById('manager-email');
    mPassword = document.getElementById('manager-password');
    mPasswordVerifier = document.getElementById('manager-password-verifier');
    mSetupButton = document.getElementById('manager-setup-action');
    mSetupButton.addEventListener('click', verifyManagerData);
}

function verifyManagerData(e) {
    e.preventDefault();
    console.log(mPassword.value);
    let mPasswordInfo = document.createElement('div');
    mPasswordInfo.classList.add('alert');
    mPasswordInfo.classList.add('alert-info');
    mPasswordInfo.textContent = "Password Mismatch";
    console.log(mPasswordInfo);
    
    
    
}
