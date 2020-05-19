import User from './_class_user.js'
// global objects
var mUname;
var mEmail;
var mPassword;
var mPasswordVerifier;
var mSetupButton;
var mPasswordStatus;
var btnMember;
var iMemberCount;
var btnSubmitMembers;

// global functions
var toastDelayer;
var SpCharFormat = /[ `!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;
var emailFormat = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i; // found emailFormat in stackOverflow
loadDOM();


function loadDOM(){
    mUname = document.getElementById('manager-username');
    mEmail = document.getElementById('manager-email');
    mPassword = document.getElementById('manager-password');
    mPasswordVerifier = document.getElementById('manager-password-verifier');
    mSetupButton = document.getElementById('manager-setup-action');
    mPasswordStatus = document.getElementById('manager-password-info');
    iMemberCount = document.getElementById('total-mess-member');
    btnMember = document.getElementById('mess-member-submit');
    btnSubmitMembers = document.getElementById('submit-mess-members');
    loadEventListener();
}

function loadEventListener(){
    mSetupButton.addEventListener('click', verifyManagerData);
    mPassword.addEventListener('keyup',checkPasswordLength);
    mPasswordVerifier.addEventListener('keyup',matchPassword);
    mUname.addEventListener('keyup',validateUsername);
    mEmail.addEventListener('keyup', validateEmail);
    btnMember.addEventListener('click', createMemberForm);
    btnSubmitMembers.addEventListener('click', createMemberList);
}

function verifyManagerData(e) {
    e.preventDefault();
    // removing all classes
    mPasswordInfo.className = "";
    mPasswordInfo.classList.add('alert');
    mPasswordInfo.classList.add('alert-danger');
    mPasswordInfo.textContent = "Password Did Not Match";   
    
    
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
    if (mPassword.value == mPasswordVerifier.value){
        showToast('success', "Matched !");
    }else if (mPassword.value.indexOf(mPasswordVerifier.value) != 0 ){
        showToast('danger', "Mismatched");
    }else{
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

function validateUsername(){
    if(SpCharFormat.test(mUname.value)){
        showToast('danger', "Username shan't contain any special characters or whitespcae.");
    }
}

function validateEmail(){
    if(emailFormat.test(mEmail.value)){
        showToast('success',"Valid Email Address");
    }else{
        showToast('danger',"Invalid Email Address !")
    }
}

function createMemberForm(){
    
    let totalMember = iMemberCount.value;
    let messMemberDOM = document.getElementById('member-add-section');    
    for(let i=0;i<totalMember;i++){
        messMemberDOM.insertAdjacentHTML('beforeend', getMemberFormHTML(i+1));
    }
    
    
}

function getMemberFormHTML(memberID){
    let MemberForm = `
    <div class="col-md-4 mb-4 ani">
    <div class="card">
        <div class="card-header text-center">
            <i class="fa fa-user" aria-hidden="true"></i> Member ${memberID}
        </div>
        <div class="card-body">
            <form action="">
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" placeholder="Username" id="member-uname">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" placeholder="Email" id="member-pwd">
                </div>
            </form>  
        </div>
   
`;
return MemberForm;
}

function createMemberList(){
    let MemberFormDOM = document.getElementById('member-add-section');
    /* Thought of doing this in one line
    * But Multiple Line solution suited the best
    * I mean less brain pressure for someone who
    * is reading the code
    */

    // Selecting the card from there
    let MemberFormCardDOM = MemberFormDOM.querySelectorAll('.card');
    // Then selecting the name and their emails
    let MemberList = [];
    // Adding event listener to all member is difficult and may affect performance
    // I won't add it.
    MemberFormCardDOM.forEach((value, index, Mobject)=>{      
        
      let mName = MemberFormCardDOM[index].querySelector("#member-uname").value;
      let mEmail = MemberFormCardDOM[index].querySelector("#member-pwd").value;
      
      /*
      Copied this script from stackOverFlow to generate random password
      */
      let mPassword = Math.random().toString(36).substring(7);
      // there's a little change of the password being empty
      if(mPassword.length == 0){
        // it cannot be a blank password twice
        mPassword = Math.random().toString(36).substring(7);
      }
      MemberList.push(new User(mName, mEmail, mPassword));
       
    });

    console.table(MemberList);
    
    
    
}