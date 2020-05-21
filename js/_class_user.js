export default class User {
   constructor(username, email, password, isAdmin){
        this.username = username;
        this.email = email;
        this.password = password;
        this.isAdmin = isAdmin;
   }
   
   // thinking that this name is not always mendatory
   setUserFullName(fullName) {
       this.fullName = fullName;
   } 
}