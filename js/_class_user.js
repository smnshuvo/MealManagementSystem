export default class User {
   constructor(username, email, password){
        this.username = username;
        this.email = email;
        this.password = password;
   }
   
   // thinking that this name is not always mendatory
   setUserFullName(fullName) {
       this.fullName = fullName;
   } 
}