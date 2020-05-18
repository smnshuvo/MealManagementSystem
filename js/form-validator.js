import User from './_class_user.js'
// global objects
var mUname;
var mEmail;
var mPassword;
var mPasswordVerifier;
var mSetupButton;
var mPasswordStatus;

var toastDelayer;

loadDOM();


function loadDOM(){
    mUname = document.getElementById('manager-username');
    mEmail = document.getElementById('manager-email');
    mPassword = document.getElementById('manager-password');
    mPasswordVerifier = document.getElementById('manager-password-verifier');
    mSetupButton = document.getElementById('manager-setup-action');
    mPasswordStatus = document.getElementById('manager-password-info')
    
    loadEventListener();
}

function loadEventListener(){
    mSetupButton.addEventListener('click', verifyManagerData);
    mPassword.addEventListener('keyup',checkPasswordLength);
    mPasswordVerifier.addEventListener('keyup',matchPassword);
}

function verifyManagerData(e) {
    e.preventDefault();
    console.log(mPasswordInfo);
    // removing all classes
    mPasswordInfo.className = "";
    mPasswordInfo.classList.add('alert');
    mPasswordInfo.classList.add('alert-danger');
    mPasswordInfo.textContent = "Password Did Not Match";
    console.log(mPasswordInfo);
    
    
    
}

function checkPasswordLength(){
    if(mPassword.value.length == 0){
        // do nothing
    }else if(mPassword.value.length < 3){
        showToast("danger", "Weak Password");
    }else if(mPassword.value.length < 5){
        showToast("warning", "Good! Try mixing characters and numbers");
    }else if(mPassword.value.length >= 5 && mPassword.value.match(/^[0-9]+$/)){
        // checking for alphanumeric value
        showToast("info", "Strong but try mixing characters!");
    } else{
        showToast('success',"Excellent");
    }
}

function matchPassword(){
    console.log(mPassword.value.indexOf(mPasswordVerifier.value));
    
    if (mPassword.value.indexOf(mPasswordVerifier.value) != 0 ){
        showToast('danger', "Mismatched");
    } else{
        showToast('info', "Matching! Keep Going");
    }
}

function showToast(toastType, Message){
    mPasswordStatus.className = "";
    mPasswordStatus.classList.add('alert');
    
    switch(toastType){
        case "info":
            mPasswordStatus.classList.add('alert-info');
            break;
        case "danger":                
            mPasswordStatus.classList.add('alert-danger');
            break;
        case "success":                
            mPasswordStatus.classList.add('alert-success');
            break;
        case "warning":                
            mPasswordStatus.classList.add('alert-warning');
            break;
        default:
            mPasswordStatus.classList.add('alert-primary');

    
    }

    mPasswordStatus.textContent = Message;
    // to clear the previous time out function
    clearTimeout(toastDelayer);
    // disapear the alert after certain second
    toastDelayer = setTimeout(() => {
    mPasswordStatus.className = ""
    mPasswordStatus.innerHTML = "";
    }, 2000);
}